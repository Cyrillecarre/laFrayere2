<?php

namespace App\Controller;

use App\Entity\PosteFour;
use App\Entity\PosteOne;
use App\Entity\PosteThree;
use App\Entity\PosteTwo;
use App\Form\AdminReservationType;
use App\Repository\PosteFourRepository;
use App\Repository\PosteOneRepository;
use App\Repository\PosteThreeRepository;
use App\Repository\PosteTwoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(PosteOneRepository $posteOneRepository, PosteTwoRepository $posteTwoRepository, PosteThreeRepository $posteThreeRepository, PosteFourRepository $posteFourRepository): Response
    {
        $poste_one = $posteOneRepository->findRecentAndUpcoming();
        $poste_two = $posteTwoRepository->findRecentAndUpcoming();
        $poste_three = $posteThreeRepository->findRecentAndUpcoming();
        $poste_four = $posteFourRepository->findRecentAndUpcoming();

        $today = new \DateTime('today');
        $upcoming_one = array_values(array_filter($poste_one, static fn ($r) => $r->getStart() >= $today));
        $upcoming_two = array_values(array_filter($poste_two, static fn ($r) => $r->getStart() >= $today));
        $upcoming_three = array_values(array_filter($poste_three, static fn ($r) => $r->getStart() >= $today));
        $upcoming_four = array_values(array_filter($poste_four, static fn ($r) => $r->getStart() >= $today));

        $now = new \DateTime('now');
        $yearStart = (clone $now)->setDate((int) $now->format('Y'), 1, 1)->setTime(0, 0);
        $yearEnd = (clone $yearStart)->modify('+1 year');

        $stats = [
            'year' => (int) $now->format('Y'),
            'totalReservations' => 0,
            'totalNights' => 0,
            'occupancyPercent' => 0.0,
            'byPoste' => [
                'one' => ['reservations' => 0, 'nights' => 0],
                'two' => ['reservations' => 0, 'nights' => 0],
                'three' => ['reservations' => 0, 'nights' => 0],
                'four' => ['reservations' => 0, 'nights' => 0],
            ],
        ];

        $accumulate = function (array $reservations, string $key) use (&$stats, $yearStart, $yearEnd): void {
            foreach ($reservations as $r) {
                $start = $r->getStart();
                $end = $r->getEnd();
                if (!$start instanceof \DateTimeInterface || !$end instanceof \DateTimeInterface) {
                    continue;
                }

                if ($start < $yearStart || $start >= $yearEnd) {
                    continue;
                }

                $stats['totalReservations']++;
                $stats['byPoste'][$key]['reservations']++;

                $duration = ($end->getTimestamp() - $start->getTimestamp()) / (60 * 60 * 24);
                $nights = 0;
                if ($duration >= 1.7 && $duration <= 2.7) {
                    $nights = 2;
                } elseif ($duration <= 3.7) {
                    $nights = 3;
                } elseif ($duration <= 4.7) {
                    $nights = 4;
                } elseif ($duration <= 5.7) {
                    $nights = 5;
                } elseif ($duration <= 6.7) {
                    $nights = 6;
                } elseif ($duration <= 7.7) {
                    $nights = 7;
                }

                $stats['totalNights'] += $nights;
                $stats['byPoste'][$key]['nights'] += $nights;
            }
        };

        $accumulate($poste_one, 'one');
        $accumulate($poste_two, 'two');
        $accumulate($poste_three, 'three');
        $accumulate($poste_four, 'four');

        $daysInYear = (int) $yearStart->format('L') === 1 ? 366 : 365;
        $maxNights = $daysInYear * 4;
        if ($maxNights > 0) {
            $stats['occupancyPercent'] = round(($stats['totalNights'] / $maxNights) * 100, 1);
        }

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'poste_ones' => $poste_one,
            'poste_twos' => $poste_two,
            'poste_threes' => $poste_three,
            'poste_fours' => $poste_four,
            'upcoming_one' => array_slice($upcoming_one, 0, 6),
            'upcoming_two' => array_slice($upcoming_two, 0, 6),
            'upcoming_three' => array_slice($upcoming_three, 0, 6),
            'upcoming_four' => array_slice($upcoming_four, 0, 6),
            'stats' => $stats,
        ]);
    }

    #[Route('/admin/reservation/new', name: 'app_admin_reservation_new', methods: ['GET', 'POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function newReservation(
        Request $request,
        EntityManagerInterface $entityManager,
        PosteOneRepository $posteOneRepository,
        PosteTwoRepository $posteTwoRepository,
        PosteThreeRepository $posteThreeRepository,
        PosteFourRepository $posteFourRepository
    ): Response {
        $form = $this->createForm(AdminReservationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $poste = $form->get('poste')->getData();
            $start = $form->get('start')->getData();
            $end = $form->get('end')->getData();
            $email = $form->get('email')->getData();
            $phoneNumber = $form->get('phoneNumber')->getData();

            if ($start instanceof \DateTimeImmutable) {
                $start = $start->setTime(14, 0);
            } elseif ($start instanceof \DateTimeInterface) {
                $start = (clone $start)->setTime(14, 0);
            }

            if ($end instanceof \DateTimeImmutable) {
                $end = $end->setTime(11, 0);
            } elseif ($end instanceof \DateTimeInterface) {
                $end = (clone $end)->setTime(11, 0);
            }

            if (!$start instanceof \DateTimeInterface || !$end instanceof \DateTimeInterface || $end <= $start) {
                $this->addFlash('error', 'Dates invalides.');
                return $this->redirectToRoute('app_admin_reservation_new');
            }

            $repository = match ($poste) {
                'one' => $posteOneRepository,
                'two' => $posteTwoRepository,
                'three' => $posteThreeRepository,
                'four' => $posteFourRepository,
                default => null,
            };

            if ($repository === null) {
                $this->addFlash('error', 'Poste invalide.');
                return $this->redirectToRoute('app_admin_reservation_new');
            }

            $overlapping = $repository->findOverlappingEvents($start, $end);
            if (count($overlapping) > 0) {
                $this->addFlash('error', 'Ce poste est déjà réservé sur cette période.');
                return $this->redirectToRoute('app_admin_reservation_new');
            }

            $reservation = match ($poste) {
                'one' => new PosteOne(),
                'two' => new PosteTwo(),
                'three' => new PosteThree(),
                'four' => new PosteFour(),
            };

            $reservation->setTitle('Poste ' . match ($poste) {
                'one' => '1',
                'two' => '2',
                'three' => '3',
                'four' => '4',
            });
            $reservation->setStart($start);
            $reservation->setEnd($end);
            $reservation->setEmail($email);
            $reservation->setPhoneNumber($phoneNumber);
            $reservation->setApprouved(true);

            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin');
        }

        return $this->render('admin/new_reservation.html.twig', [
            'form' => $form,
        ]);
    }
}
