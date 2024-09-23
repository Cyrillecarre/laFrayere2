<?php

namespace App\Controller;

use App\Entity\PosteOne;
use App\Form\PosteOneType;
use App\Repository\PosteOneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\PricingService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

#[Route('/poste/one')]
class PosteOneController extends AbstractController
{
    #[Route('/', name: 'app_poste_one_index', methods: ['GET'])]
    public function index(PosteOneRepository $posteOneRepository): Response
    {
        return $this->render('poste_one/index.html.twig', [
            'poste_ones' => $posteOneRepository->findAll(),
        ]);
    }

    private $pricingService;


    public function __construct(PricingService $pricingService)
    {
        $this->pricingService = $pricingService;
    }

    #[Route('/new', name: 'app_poste_one_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, PosteOneRepository $posteOneRepository, SessionInterface $session): Response
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
                $pellets = $form->get('pellets')->getData();
                $graines = $form->get('graines')->getData();
                
                try {
                    $totalPrice = $this->pricingService->calculatePrice($numNights, $numFishers, [
                        'pellets' => $pellets,
                        'graines' => $graines
                    ]);
                } catch (\InvalidArgumentException $e) {
                    return $this->redirectToRoute('app_poste_one_error');
                }

                $session->set('reservation_details', [
                    'posteId' => $posteOne->getId(),
                    'poste_title' => 'Poste 1',
                    'poste_type' => 'un',
                    'start' => $posteOne->getStart()->format('Y-m-d'),
                    'end' => $posteOne->getEnd()->format('Y-m-d'),
                    'numberOfFishers' => $form->get('numberOfFishers')->getData(),
                    'pellets' => $form->get('pellets')->getData(),
                    'graines' => $form->get('graines')->getData(),
                    'email' => $form->get('email')->getData(),
                    'phoneNumber' => $form->get('phoneNumber')->getData(),
                ]);
                
                return $this->redirectToRoute('app_poste_one_prix', [
                    'totalPrice' => $totalPrice,
                    'numNights' => $numNights,
                    'numFishers' => $numFishers,
                    'pellets' => $pellets,
                    'graines' => $graines,
                    'poste_id' => $posteOne->getId(),
                    'poste_type' => 'un',
                    'start' => $posteOne->getStart()->format('Y-m-d'),
                    'end' => $posteOne->getEnd()->format('Y-m-d')

                ]);
            }
        }

        return $this->render('poste_one/new.html.twig', [
            'poste_one' => $posteOne,
            'form' => $form,
        ]);
    }

    #[Route('/prix', name: 'app_poste_one_prix', methods: ['GET'])]
    public function summary(Request $request): Response
    {
        $stripePublicKey = $this->getParameter('stripe_public_key');
        $totalPrice = $request->query->get('totalPrice');
        $numNights = $request->query->get('numNights');
        $numFishers = $request->query->get('numFishers');
        $pellets = $request->query->get('pellets');
        $graines = $request->query->get('graines');
        $posteId = $request->query->get('poste_id');
        $posteType = $request->query->get('poste_type');
        $start = \DateTime::createFromFormat('Y-m-d', $request->query->get('start'));
        $end = \DateTime::createFromFormat('Y-m-d', $request->query->get('end'));


        return $this->render('poste_one/prix.html.twig', [
            'totalPrice' => $totalPrice,
            'numNights' => $numNights,
            'numFishers' => $numFishers,
            'pellets' => $pellets,
            'graines' => $graines,
            'stripe_public_key' => $stripePublicKey,
            'poste_id' => $posteId,
            'poste_type' => $posteType,
            'start' => $start->format('d-m'),
            'end' => $end->format('d-m'),
        ]);
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
            $entityManager->flush();

            return $this->redirectToRoute('app_poste_one_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('poste_one/edit.html.twig', [
            'poste_one' => $posteOne,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_poste_one_delete', methods: ['POST'])]
    public function delete(Request $request, PosteOne $posteOne, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$posteOne->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($posteOne);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
    }

}

