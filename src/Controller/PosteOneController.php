<?php

namespace App\Controller;

use App\Entity\PosteOne;
use App\Entity\PendingReservation;
use App\Form\PosteOneType;
use App\Repository\PosteOneRepository;
use App\Repository\PendingReservationRepository;
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

#[Route('/poste/one')]
class PosteOneController extends AbstractController
{
    private $pricingService;

    public function __construct(PricingService $pricingService)
    {
        $this->pricingService = $pricingService;
    }

    #[Route('/', name: 'app_poste_one_index', methods: ['GET'])]
    public function index(PosteOneRepository $posteOneRepository): Response
    {
        return $this->render('poste_one/index.html.twig', [
            'poste_ones' => $posteOneRepository->findRecentAndUpcoming(),
        ]);
    }

    #[Route('/new', name: 'app_poste_one_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, PosteOneRepository $posteOneRepository, SessionInterface $session, GiftRepository $giftRepository, PendingReservationRepository $pendingReservationRepository): Response
    {
        if ($session->has('reservation_details')) {
            $session->remove('reservation_details');
        }
        $posteOne = new PosteOne();
        $form = $this->createForm(PosteOneType::class, $posteOne);
        $form->handleRequest($request);

        $totalPrice = null;

        if ($form->isSubmitted() && $form->isValid()) {

            $start = $posteOne->getStart();
            $end = $posteOne->getEnd();

            $duration = ($end->getTimestamp() - $start->getTimestamp()) / (60 * 60 * 24);

            if ($duration < 1.7) {
                return $this->redirectToRoute('app_poste_one_error'); 
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
                return $this->redirectToRoute('app_poste_one_error');
            }

            $overlappingEvents = $posteOneRepository->findOverlappingEvents($start, $end);
            
            if (count($overlappingEvents) > 0) {
                return $this->redirectToRoute('app_poste_one_error');
            } else {
                $entityManager->persist($posteOne);
                $entityManager->flush();
                $numFishers = $form->get('numberOfFishers')->getData();

                if ((int) $numFishers === 1 && !$this->isOneFisherAllowed($start, $end)) {
                    return $this->redirectToRoute('app_poste_one_error');
                }

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
                     return $this->redirectToRoute('app_poste_one_error');
                 }
                if (!isset($totalPriceAfter)) {
                    $totalPriceAfter = $totalPrice;
                }

                // Stocker dans PendingReservation au lieu de la session
                $pendingReservation = new PendingReservation();
                $pendingReservation->setDetails([
                    'posteId' => $posteOne->getId(),
                    'poste_title' => 'Poste 1',
                    'poste_type' => 'un',
                    'giftCode' => $giftCode,
                    'giftValue' => $giftValue,
                    'start' => $posteOne->getStart()->format('Y-m-d'),
                    'end' => $posteOne->getEnd()->format('Y-m-d'),
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
                $entityManager->persist($pendingReservation);
                $entityManager->flush();

                $token = $pendingReservation->getToken();

                return $this->redirectToRoute('app_poste_one_prix', [
                    'totalPrice' => $totalPrice,
                    'numNights' => $numNights,
                    'numFishers' => $numFishers,
                    'pellets45' => $pellets45,
                    'pellets35' => $pellets35,
                    'pellets45Label' => $pellets45Label,
                    'pellets35Label' => $pellets35Label,
                    'poste_id' => $posteOne->getId(),
                    'poste_type' => 'un',
                    'start' => $posteOne->getStart()->format('Y-m-d'),
                    'end' => $posteOne->getEnd()->format('Y-m-d'),
                    'giftCode' => $giftCode,
                    'giftValue' => $giftValue,
                    'totalPriceAfter' => $totalPriceAfter,
                    'token' => $token,
                ]);
            }
        }

        return $this->render('poste_one/new.html.twig', [
            'poste_one' => $posteOne,
            'form' => $form,
        ]);
    }

    #[Route('/prix', name: 'app_poste_one_prix', methods: ['GET'])]
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
        $token = $request->query->get('token');

        // Récupérer les détails de réservation dans la session
        $reservationDetails = $session->get('reservation_details', []);
        $giftCode = $reservationDetails['giftCode'] ?? null;
        $giftValue = $reservationDetails['giftValue'] ?? 0;
        // Libellés depuis la session si non passés en query
        if (!$pellets45Label) { $pellets45Label = $reservationDetails['pellets45Label'] ?? (string)$pellets45; }
        if (!$pellets35Label) { $pellets35Label = $reservationDetails['pellets35Label'] ?? (string)$pellets35; }


        return $this->render('poste_one/prix.html.twig', [
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
            'token' => $token,
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

    private function isOneFisherAllowed(\DateTimeInterface $start, \DateTimeInterface $end): bool
    {
        $startDow = (int) $start->format('N');
        $endDow = (int) $end->format('N');
        return ($startDow >= 1 && $startDow <= 4) && ($endDow >= 2 && $endDow <= 5);
    }

    #[Route('/poste/one/error', name: 'app_poste_one_error', methods: ['GET'])]
    public function error(): Response
    {
        return $this->render('poste_one/error.html.twig');
    }

    #[Route('/{id}', name: 'app_poste_one_show', methods: ['GET'])]
    public function show(PosteOne $posteOne): Response
    {
        return $this->render('poste_one/show.html.twig', [
            'poste_one' => $posteOne,
        ]);
    }

    #[Route('/{id}/approve', name: 'app_approve_reservation_one')]
    public function approveReservation(PosteOne $posteOne, EntityManagerInterface $entityManager): Response
    {
        $posteOne->setApprouved(true);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin');
    }

    #[Route('/{id}/edit', name: 'app_poste_one_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PosteOne $posteOne, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PosteOneType::class, $posteOne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $posteOne->setApprouved(true);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('poste_one/edit.html.twig', [
            'poste_one' => $posteOne,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_poste_one_delete', methods: ['POST'])]
    public function delete(Request $request, PosteOne $posteOne, EntityManagerInterface $entityManager): Response
    {
        $token = $request->request->get('_token');
        if ($token === null) {
            $token = $request->getPayload()->get('_token');
        }

        if ($this->isCsrfTokenValid('delete'.$posteOne->getId(), $token)) {
            $entityManager->remove($posteOne);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
    }
}

