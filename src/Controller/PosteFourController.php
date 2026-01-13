<?php

namespace App\Controller;

use App\Entity\PosteFour;
use App\Form\PosteFourType;
use App\Repository\PosteFourRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\PricingService;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\GiftRepository;
use DateTime;
use Symfony\Component\Mailer\MailerInterface;

#[Route('/poste/four')]
class PosteFourController extends AbstractController
{
    private $pricingService;

    public function __construct(PricingService $pricingService)
    {
        $this->pricingService = $pricingService;
    }

    #[Route('/', name: 'app_poste_four_index', methods: ['GET'])]
    public function index(PosteFourRepository $posteFourRepository): Response
    {
        return $this->render('poste_four/index.html.twig', [
            'poste_fours' => $posteFourRepository->findRecentAndUpcoming(),
        ]);
    }

    #[Route('/new', name: 'app_poste_four_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, PosteFourRepository $posteFourRepository, SessionInterface $session, GiftRepository $giftRepository): Response
    {
        if ($session->has('reservation_details')) {
            $session->remove('reservation_details');
        }
        $posteFour = new PosteFour();
        $form = $this->createForm(PosteFourType::class, $posteFour);
        $form->handleRequest($request);

        $totalPrice = null;

        if ($form->isSubmitted() && $form->isValid()) {

            $start = $posteFour->getStart();
            $end = $posteFour->getEnd();

            $duration = ($end->getTimestamp() - $start->getTimestamp()) / (60 * 60 * 24);

            if ($duration < 1.7) {
                return $this->redirectToRoute('app_poste_four_error'); 
            } elseif ($duration <= 2.7) {
                $numNights = 2;
            } elseif ($duration <= 3.7) {
                $numNights = 3;
            } elseif ($duration <= 4.7) {
                $numNights = 4;
            } elseif ($duration <= 5.7) {
                $numNights = 5;
            } elseif ($duration <= 6.7) {
                $numNights = 6;
            } elseif ($duration <= 7.7) {
                $numNights = 7;
            } else {
                return $this->redirectToRoute('app_poste_four_error');
            }

            $overlappingEvents = $posteFourRepository->findOverlappingEvents($start, $end);

            if (count($overlappingEvents) > 0) {
                return $this->redirectToRoute('app_poste_four_error');
            } else {
                $entityManager->persist($posteFour);
                $entityManager->flush();
                $numFishers = $form->get('numberOfFishers')->getData();
                // Normaliser les valeurs pellets pour éviter null/chaînes vides
                $pellets45 = (int) ($form->get('pellets45')->getData() ?? 0);
                $pellets35 = (int) ($form->get('pellets35')->getData() ?? 0);
                // Récupérer les libellés correspondants aux valeurs choisies pour l'affichage
                $pellets45Label = $this->getChoiceLabel($form, 'pellets45', $pellets45) ?? '0';
                $pellets35Label = $this->getChoiceLabel($form, 'pellets35', $pellets35) ?? '0';
                $giftCode = $form->get('giftCode')->getData();
                
                try {
                    $totalPrice = $this->pricingService->calculatePrice($numNights, $numFishers, [
                        'pellets45' => $pellets45,
                        'pellets35' => $pellets35
                    ]);

                    $giftValue = 0;
                    $totalPriceAfter = $totalPrice;

                    if ($giftCode) {
                        // Vérification du code promo
                        $gift = $giftRepository->findOneBy(['code' => $giftCode]);
                        if ($gift && $gift->getCount() > 0) {
                            $giftValue = $gift->getCount();
                            $totalPriceAfter = max(0, $totalPrice - $giftValue);
                        } else {
                            $this->addFlash('error', 'Code promo invalide ou déjà utilisé.');
                            return $this->redirectToRoute('app_poste_one_new');
                        }
                    }

                } catch (\InvalidArgumentException $e) {
                    return $this->redirectToRoute('app_poste_four_error');
                }
                if (!isset($totalPriceAfter)) {
                    $totalPriceAfter = $totalPrice;
                }

                $session->set('reservation_details', [
                    'posteId' => $posteFour->getId(),
                    'poste_title' => 'Poste 4',
                    'poste_type' => 'quatre',
                    'giftCode' => $giftCode,
                    'giftValue' => $giftValue,
                    'start' => $posteFour->getStart()->format('Y-m-d'),
                    'end' => $posteFour->getEnd()->format('Y-m-d'),
                    'numberOfFishers' => $form->get('numberOfFishers')->getData(),
                    'pellets45' => $pellets45,
                    'pellets35' => $pellets35,
                    'pellets45Label' => $pellets45Label,
                    'pellets35Label' => $pellets35Label,
                    'email' => $form->get('email')->getData(),
                    'phoneNumber' => $form->get('phoneNumber')->getData(),
                    'totalPrice' => $totalPrice,
                    'totalPriceAfter' => $totalPriceAfter,
                ]);
                
                return $this->redirectToRoute('app_poste_four_prix', [
                    'totalPrice' => $totalPrice,
                    'numNights' => $numNights,
                    'numFishers' => $numFishers,
                    'pellets45' => $pellets45,
                    'pellets35' => $pellets35,
                    'pellets45Label' => $pellets45Label,
                    'pellets35Label' => $pellets35Label,
                    'poste_id' => $posteFour->getId(),
                    'poste_type' => 'quatre',
                    'start' => $posteFour->getStart()->format('Y-m-d'),
                    'end' => $posteFour->getEnd()->format('Y-m-d'),
                    'giftCode' => $giftCode,
                    'giftValue' => $giftValue,
                    'totalPriceAfter' => $totalPriceAfter,
                ]);
            }
        }

        return $this->render('poste_four/new.html.twig', [
            'poste_four' => $posteFour,
            'form' => $form,
        ]);
    }

    #[Route('/prix', name: 'app_poste_four_prix', methods: ['GET'])]
    public function summary(Request $request, SessionInterface $session): Response
    {
        $stripePublicKey = $this->getParameter('stripe_public_key');
        $totalPrice = (float) $request->query->get('totalPrice');
        $numNights = $request->query->get('numNights');
        $numFishers = $request->query->get('numFishers');
        $pellets45 = $request->query->get('pellets45');
        $pellets35 = $request->query->get('pellets35');
        $pellets45Label = $request->query->get('pellets45Label');
        $pellets35Label = $request->query->get('pellets35Label');
        $posteId = $request->query->get('poste_id');
        $posteType = $request->query->get('poste_type');
        $start = \DateTime::createFromFormat('Y-m-d', $request->query->get('start'));
        $end = \DateTime::createFromFormat('Y-m-d', $request->query->get('end'));
        $totalPriceAfter = $request->query->get('totalPriceAfter', $totalPrice);

        // Récupérer les détails de réservation dans la session
        $reservationDetails = $session->get('reservation_details', []);
        $giftCode = $reservationDetails['giftCode'] ?? null;
        $giftValue = $reservationDetails['giftValue'] ?? 0;
        // Libellés depuis la session si non passés en query
        if (!$pellets45Label) { $pellets45Label = $reservationDetails['pellets45Label'] ?? (string)$pellets45; }
        if (!$pellets35Label) { $pellets35Label = $reservationDetails['pellets35Label'] ?? (string)$pellets35; }


        return $this->render('poste_four/prix.html.twig', [
            'totalPrice' => $totalPrice,
            'totalPriceAfter' => $totalPriceAfter,
            'numNights' => $numNights,
            'numFishers' => $numFishers,
            'pellets45' => $pellets45,
            'pellets35' => $pellets35,
            'pellets45Label' => $pellets45Label,
            'pellets35Label' => $pellets35Label,
            'stripe_public_key' => $stripePublicKey,
            'poste_id' => $posteId,
            'poste_type' => $posteType,
            'start' => $start->format('d-m'),
            'end' => $end->format('d-m'),
            'giftCode' => $giftCode,
            'giftValue' => $giftValue,
        ]);
    }

    private function getChoiceLabel($form, string $field, $selectedValue): ?string
    {
        $choices = $form->get($field)->getConfig()->getOption('choices'); // [label => value]
        foreach ($choices as $label => $value) {
            if ($value === $selectedValue) {
                return $label;
            }
        }
        return null;
    }

    #[Route('/poste/four/error', name: 'app_poste_four_error', methods: ['GET'])]
    public function error(): Response
    {
        return $this->render('poste_four/error.html.twig');
    }

    #[Route('/{id}', name: 'app_poste_four_show', methods: ['GET'])]
    public function show(PosteFour $posteFour): Response
    {
        return $this->render('poste_four/show.html.twig', [
            'poste_four' => $posteFour,
        ]);
    }

    #[Route('/{id}/approve', name: 'app_approve_reservation_four')]
    public function approveReservation(PosteFour $posteFour, EntityManagerInterface $entityManager): Response
    {
        $posteFour->setApprouved(true);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin');
    }

    #[Route('/{id}/edit', name: 'app_poste_four_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PosteFour $posteFour, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PosteFourType::class, $posteFour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $posteFour->setApprouved(true);
            $entityManager->flush();

            return $this->redirectToRoute('app_poste_four_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('poste_four/edit.html.twig', [
            'poste_four' => $posteFour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_poste_four_delete', methods: ['POST'])]
    public function delete(Request $request, PosteFour $posteFour, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$posteFour->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($posteFour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
    }
}
