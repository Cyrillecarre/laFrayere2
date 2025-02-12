<?php
namespace App\Controller;

use App\Entity\Gift;
use App\Form\GiftType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class GiftController extends AbstractController
{
    #[Route('/gift', name: 'app_gift')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $gift = new Gift();
        $form = $this->createForm(GiftType::class, $gift);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($gift);
            $entityManager->flush();

            return $this->redirectToRoute('app_gift_payment_page', ['id' => $gift->getId()]);
        }

        return $this->render('gift/index.html.twig', [
            'form' => $form->createView(),
            'stripe_public_key' => $this->getParameter('stripe_public_key'),
        ]);
    }

    #[Route('/gift/payment-page/{id}', name: 'app_gift_payment_page')]
    public function paymentPage(Gift $gift): Response
    {
        return $this->render('gift/payment.html.twig', [
            'stripe_public_key' => $this->getParameter('stripe_public_key'),
            'gift' => $gift,
        ]);
    }

        
    #[Route('/gift/payment/{id}', name: 'app_gift_payment', methods: ['POST'])]
public function payment(Gift $gift): JsonResponse
{
    try {
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));

        if (!$gift->getCount() || !$gift->getEmail()) {
            throw new \Exception('Informations de la carte cadeau incomplètes.');
        }

        $amount = $gift->getCount() * 100;

        if ($amount <= 0) {
            throw new \Exception('Le montant doit être supérieur à zéro.');
        }

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Code Promo - Carte Cadeau',
                    ],
                    'unit_amount' => $amount,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('app_gift_payment_success', [
                'id' => $gift->getId(),
            ], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('app_gift_payment_cancel', [
                'id' => $gift->getId(),
            ], UrlGeneratorInterface::ABSOLUTE_URL),
            'metadata' => [
                'gift_id' => $gift->getId(),
            ],
        ]);

        return new JsonResponse(['id' => $session->id]);

    } catch (\Exception $e) {
        return new JsonResponse(['error' => $e->getMessage()], 500);
    }
}

    



    #[Route('/gift/payment/success/{id}', name: 'app_gift_payment_success', methods: ['GET'])]
    public function paymentSuccess(Gift $gift, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $uniqueCode = strtoupper(bin2hex(random_bytes(4)));
        $gift->setCode($uniqueCode);

        $entityManager->flush();

        $userEmail = (new Email())
        ->from('la.frayere@la-frayere.fr')
        ->to($gift->getEmail())
        ->subject('Votre code promo - Merci pour votre achat')
        ->html($this->renderView('gift/emailUser.html.twig', [
            'gift' => $gift,
            'uniqueCode' => $uniqueCode,
            'userEmail' => $gift->getEmail(),
            'count' => $gift->getCount(),
        ]));
        
        // Préparer l'email pour l'admin
        $adminEmail = (new Email())
            ->from('la.frayere@la-frayere.fr')
            ->to('la.frayere@la-frayere.fr')
            ->subject('Nouvelle commande - Code Promo')
            ->html($this->renderView('gift/emailAdmin.html.twig', [
                'gift' => $gift,
                'uniqueCode' => $uniqueCode,
                'userEmail' => $gift->getEmail(),
                'count' => $gift->getCount(),
            ]));

        // Envoyer les emails
        $mailer->send($userEmail);
        $mailer->send($adminEmail);

        return $this->render('gift/paymentSuccess.html.twig', [
            'gift' => $gift,
            'uniqueCode' => $uniqueCode,
            'userEmail' => $gift->getEmail(),
            'count' => $gift->getCount(),
        ]);
    }

    #[Route('/gift/payment/cancel/{id}', name: 'app_gift_payment_cancel', methods: ['GET'])]
    public function paymentCancel(Gift $gift): Response
    {
        $this->addFlash('warning', 'Le paiement a été annulé.');
        return $this->render('gift/paymentCancel.html.twig', [
            'gift' => $gift,
        ]);
    }
}
