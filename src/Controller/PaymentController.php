<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\PosteOne;
use App\Entity\PosteTwo;
use App\Entity\PosteThree;
use App\Entity\PosteFour;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\GiftRepository;

class PaymentController extends AbstractController
{
    private $urlGenerator;
    private $mailer;
    private $entityManager;
    private $logger;



    public function __construct(UrlGeneratorInterface $urlGenerator, MailerInterface $mailer, EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        $this->urlGenerator = $urlGenerator;
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
        $this->logger = $logger;


    }

    #[Route('/create-checkout-session', name: 'app_payment_create', methods: ['POST'])]
    public function createCheckoutSession(Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            $this->logger->info('Données reçues:', $data);
 
            if (!isset($data['totalPrice']) || !isset($data['isDeposit']) || !isset($data['posteId']) || !isset($data['posteType'])) {
                throw new \Exception("Données requises manquantes.");
            }
            
            $totalPriceAfter = (float) $data['totalPriceAfter'];
            $totalPrice = (float) $data['totalPrice'];
            $isDeposit = (bool) $data['isDeposit'];
            $posteId = $data['posteId'];
            $posteType = $data['posteType'];
            $pellets = $data['pellets'];
            $graines = $data['graines'];
            $giftValue = $data['giftValue'] ?? 0;

            if ($isDeposit) {
                $depositAmount = $totalPriceAfter * 0.30;
                $amountToCharge = ceil($depositAmount / 10) * 10;
            } else {
                $amountToCharge = $totalPriceAfter;
            }
    
            $amountToChargeCents = $amountToCharge * 100;
    
            Stripe::setApiKey($this->getParameter('stripe_secret_key'));
    
            $stripeSession = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => $isDeposit ? 'Acompte de réservation' : 'Paiement de réservation',
                        ],
                        'unit_amount' => $amountToChargeCents,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => $this->generateUrl('app_payment_success', [
                    'poste_id' => $posteId, 
                    'poste_type' => $posteType, 
                    'totalPriceAfter' => $totalPriceAfter,
                    'totalPrice' => $totalPrice,
                    'is_deposit' => $amountToCharge, 
                    'pellets' => $pellets, 
                    'graines' => $graines,
                    'giftValue' => $giftValue,
                ], UrlGeneratorInterface::ABSOLUTE_URL),
                'cancel_url' => $this->generateUrl('app_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'metadata' => [
                    'poste_id' => $posteId,
                    'poste_type' => $posteType,
                    'totalPriceAfter' => $totalPriceAfter,
                    'totalPrice' => $totalPrice,
                    'is_deposit' => $amountToCharge,
                    'pellets' => $pellets,
                    'graines' => $graines,
                    'giftValue' => $giftValue,
                ],
            ]);
    
            $this->logger->info('Session Stripe créée avec succès', [
                'session_id' => $stripeSession->id,
                'success_url' => $stripeSession->success_url,
            ]);
    
            return new JsonResponse(['id' => $stripeSession->id]);
    
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la création de la session:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/payment-success', name: 'app_payment_success')]
    public function paymentSuccess(Request $request, MailerInterface $mailer, EntityManagerInterface $entityManager, SessionInterface $session, GiftRepository $giftRepository): Response
    {
        $this->logger->info('Début de paymentSuccess', [
            'query_params' => $request->query->all(),
            'session_details' => $session->get('reservation_details')
        ]);

        try {
            $reservationDetails = $session->get('reservation_details');
            if (!$reservationDetails) {
                $this->logger->error('Détails de réservation non trouvés dans la session');
                throw $this->createNotFoundException('Détails de la réservation non trouvés dans la session.');
            }

            $remainingGiftValue = 0;
            $giftValue = (float)($reservationDetails['giftValue'] ?? 0);
            $giftCode = $reservationDetails['giftCode'] ?? null;
            $posteTitle = $reservationDetails['poste_title'];
            $totalPriceAfter = $request->query->get('totalPriceAfter');
            $totalPrice = $request->query->get('totalPrice');
            $isDeposit = $request->query->get('is_deposit');
            $posteType = $reservationDetails['poste_type'];
            $email = $reservationDetails['email'];
            $phoneNumber = $reservationDetails['phoneNumber'];
            $pellets = $request->query->get('pellets');
            $graines = $request->query->get('graines');

            // Utiliser les dates de la session au lieu des paramètres de requête
            try {
                $startDateTime = \DateTime::createFromFormat('Y-m-d', $reservationDetails['start']);
                $endDateTime = \DateTime::createFromFormat('Y-m-d', $reservationDetails['end']);

                if (!$startDateTime || !$endDateTime) {
                    $this->logger->error('Format de date invalide dans la session', [
                        'start' => $reservationDetails['start'],
                        'end' => $reservationDetails['end']
                    ]);
                    throw new \Exception('Format de date invalide dans la session');
                }

                $startDateTime->setTime(14, 0);
                $endDateTime->setTime(11, 0);

                $this->logger->info('Dates converties avec succès', [
                    'start' => $startDateTime->format('Y-m-d H:i'),
                    'end' => $endDateTime->format('Y-m-d H:i')
                ]);
            } catch (\Exception $e) {
                $this->logger->error('Erreur conversion dates: ' . $e->getMessage());
                throw $e;
            }

            // Création du poste
            try {
                $newPoste = null;
                switch ($posteType) {
                    case 'un':
                        $newPoste = new PosteOne();
                        break;
                    case 'deux':
                        $newPoste = new PosteTwo();
                        break;
                    case 'trois':
                        $newPoste = new PosteThree();
                        break;
                    case 'quatre':
                        $newPoste = new PosteFour();
                        break;
                    default:
                        throw new \Exception('Type de poste invalide: ' . $posteType);
                }

                $this->logger->info('Création du poste', [
                    'type' => $posteType,
                    'title' => $posteTitle
                ]);

                $newPoste->setTitle($posteTitle);
                $newPoste->setStart($startDateTime);
                $newPoste->setEnd($endDateTime);
                $newPoste->setEmail($email);
                $newPoste->setPhoneNumber($phoneNumber);
                $newPoste->setApprouved(true);

                $entityManager->persist($newPoste);
                $entityManager->flush();

                $this->logger->info('Poste enregistré avec succès', [
                    'id' => $newPoste->getId()
                ]);

                // Envoi de l'email
                try {
                    $emailMessage = (new Email())
                        ->from('la.frayere@la-frayere.fr')
                        ->to('la.frayere@la-frayere.fr')
                        ->subject('Confirmation de réservation')
                        ->html($this->renderView('payment/mailSuccess.html.twig', [
                            'posteType' => $posteType,
                            'start' => $startDateTime->format('d-m'),
                            'end' => $endDateTime->format('d-m'),
                            'totalPriceAfter' => $totalPriceAfter,
                            'totalPrice' => $totalPrice,
                            'giftValue' => $giftValue,
                            'is_deposit' => $isDeposit,
                            'pellets' => $pellets,
                            'graines' => $graines,
                            'email' => $email,
                            'phoneNumber' => $phoneNumber,
                            'remainingGiftValue' => $remainingGiftValue,
                        ]));

                    $mailer->send($emailMessage);
                    $this->logger->info('Email envoyé avec succès');
                } catch (\Exception $e) {
                    $this->logger->error('Erreur envoi email: ' . $e->getMessage());
                    // On ne relance pas l'erreur pour ne pas annuler la transaction
                }

            } catch (\Exception $e) {
                $this->logger->error('Erreur création poste: ' . $e->getMessage());
                throw $e;
            }

            // Nettoyage de la session
            $session->remove('reservation_details');

            return $this->render('payment/success.html.twig', [
                'stripe_public_key' => $this->getParameter('stripe_public_key'),
                'posteType' => $posteType,
                'start' => $startDateTime->format('d-m'),
                'end' => $endDateTime->format('d-m'),
                'totalPriceAfter' => $totalPriceAfter,
                'totalPrice' => $totalPrice,
                'is_deposit' => $isDeposit,
                'pellets' => $pellets,
                'graines' => $graines,
                'giftValue' => $giftValue,
                'remainingGiftValue' => $remainingGiftValue,
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Erreur générale: ' . $e->getMessage());
            throw $e;
        }
    }

    #[Route('/payment-cancel', name: 'app_payment_cancel')]
    public function paymentCancel(EntityManagerInterface $entityManager, Request $request, SessionInterface $session): Response
    {

        $reservationDetails = $session->get('reservation_details');
        if (!$reservationDetails) {
            throw $this->createNotFoundException('Détails de la réservation non trouvés dans la session.');
        }

        return $this->render('payment/cancel.html.twig', [
            'stripe_public_key' => $this->getParameter('stripe_public_key'),
        ]);
    }

    #[Route('/create-checkout-session-multi', name: 'app_paymentMulti_create', methods: ['POST'])]
    public function createCheckoutSessionMulti(Request $request): JsonResponse
{
    try {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['totalPrice']) || !isset($data['isDeposit']) || !isset($data['start']) || !isset($data['end'])) {
            throw new \Exception("Données requises à l'entrée manquantes.");
        }

        $totalPrice = (float) $data['totalPrice'];
        $isDeposit = (bool) $data['isDeposit'];
        $currentYear = date('Y');
        $startDateTime = \DateTime::createFromFormat('d-m-Y', $data['start'] . '-' . $currentYear);
        $endDateTime = \DateTime::createFromFormat('d-m-Y', $data['end'] . '-' . $currentYear);
        $email = $data['email'];
        $phoneNumber = $data['phoneNumber'];

        if (!$startDateTime || !$endDateTime) {
            throw new \Exception("Erreur lors du parsing des dates.");
        }

        $pellets = $data['pellets'];
        $graines = $data['graines'];

        if ($isDeposit) {
            $depositAmount = $totalPrice * 0.30;
            $amountToCharge = ceil($depositAmount / 10) * 10; // Arrondir à la dizaine supérieure
        } else {
            $amountToCharge = $totalPrice;
        }

        $amountToChargeCents = $amountToCharge * 100;

        Stripe::setApiKey($this->getParameter('stripe_secret_key'));

        $stripeSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $isDeposit ? 'Acompte de réservation - Étang complet' : 'Paiement de réservation - Étang complet',
                    ],
                    'unit_amount' => $amountToChargeCents,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('app_paymentMulti_success', [
                'totalPrice' => $totalPrice,
                'is_deposit' => $amountToCharge,
                'start' => $startDateTime->format('d-m-Y'),
                'end' => $endDateTime->format('d-m-Y'),
                'pellets' => $pellets,
                'graines' => $graines,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
            ], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('app_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'metadata' => [
                'totalPrice' => $totalPrice,
                'is_deposit' => $amountToCharge,
                'start' => $startDateTime->format('d-m-Y'),
                'end' => $endDateTime->format('d-m-Y'),
                'pellets' => $pellets,
                'graines' => $graines,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
            ],
        ]);

        return new JsonResponse(['id' => $stripeSession->id]);

    } catch (\Exception $e) {
        return new JsonResponse(['error' => $e->getMessage()], 500);
    }
    }
    #[Route('/payment-success-multi', name: 'app_paymentMulti_success')]
    public function paymentSuccessMulti(Request $request, MailerInterface $mailer, EntityManagerInterface $entityManager, SessionInterface $session): Response
{
    $totalPrice = $request->query->get('totalPrice');
    $isDeposit = $request->query->get('is_deposit');
    $startDateTime = \DateTime::createFromFormat('d-m-Y', $request->query->get('start'));
    $endDateTime = \DateTime::createFromFormat('d-m-Y', $request->query->get('end'));
    $pellets = $request->query->get('pellets');
    $graines = $request->query->get('graines');
    $email = $request->query->get('email');
    $phoneNumber = $request->query->get('phoneNumber');

    $startDateTime->setTime(14, 0);
    $endDateTime->setTime(11, 0);

    // Liste des postes à réserver
    $postes = [
        ['poste' => new PosteOne(), 'title' => 'Poste 1'],
        ['poste' => new PosteTwo(), 'title' => 'Poste 2'],
        ['poste' => new PosteThree(), 'title' => 'Poste 3'],
        ['poste' => new PosteFour(), 'title' => 'Poste 4'],
    ];

    // Persister chaque poste
    foreach ($postes as $posteData) {
        $poste = $posteData['poste'];
        
        // Vérifier si un poste similaire existe déjà
        $existingPoste = $this->entityManager->getRepository(get_class($poste))
            ->findOneBy([
                'title' => $posteData['title'],
                'start' => $startDateTime,
                'end' => $endDateTime,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
            ]);
        
        if (!$existingPoste) {
            $poste->setTitle($posteData['title']);
            $poste->setStart($startDateTime);
            $poste->setEnd($endDateTime);
            $poste->setApprouved(true);
            $poste->setEmail($email);
            $poste->setPhoneNumber($phoneNumber);
            $this->entityManager->persist($poste);
        }
    }

    // Flusher les changements
    $this->entityManager->flush();

    // Préparer l'email de confirmation
    $emailContent = $this->renderView('payment/mailSuccessMulti.html.twig', [
        'start' => $startDateTime->format('d-m'),
        'end' => $endDateTime->format('d-m'),
        'totalPrice' => $totalPrice,
        'is_deposit' => $isDeposit,
        'pellets' => $pellets,
        'graines' => $graines,
        'email' => $email,
        'phoneNumber' => $phoneNumber,
    ]);

    $emailMessage = (new Email())
        ->from('la.frayere@la-frayere.fr')
        ->to('la.frayere@la-frayere.fr')
        ->subject('Confirmation de réservation - Étang complet')
        ->html($emailContent);

    $mailer->send($emailMessage);

    return $this->render('payment/successMulti.html.twig', [
        'stripe_public_key' => $this->getParameter('stripe_public_key'),
        'start' => $startDateTime->format('d-m'),
        'end' => $endDateTime->format('d-m'),
        'totalPrice' => $totalPrice,
        'is_deposit' => $isDeposit,
        'pellets' => $pellets,
        'graines' => $graines,
    ]);
    }


}
