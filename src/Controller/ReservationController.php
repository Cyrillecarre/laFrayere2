<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PosteOneRepository;
use App\Repository\PosteTwoRepository;
use App\Repository\PosteThreeRepository;
use App\Repository\PosteFourRepository;
use Doctrine\ORM\EntityManagerInterface;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(PosteOneRepository $posteOne, PosteTwoRepository $posteTwo, PosteThreeRepository $posteThree, PosteFourRepository $posteFour): Response
    {

        $repositories = [$posteOne, $posteTwo, $posteThree, $posteFour];
        
        foreach ($repositories as $repository) {
            $query = $repository->createQueryBuilder('p')
                ->delete()
                ->where('p.isApprouved = :isApprouved')
                ->setParameter('isApprouved', false)
                ->getQuery();
                
            $query->execute();
        }

        if ($this->getUser()) {
            return $this->redirectToRoute('app_logout');    
        }
        $rdvs = [];
        $repositories = [$posteOne, $posteTwo, $posteThree, $posteFour];

        foreach ($repositories as $repository) {
            $events = $repository->findAll();
            foreach ($events as $event) {
                $classNames = [];

                $rdvs[] = [
                    'id' => $event->getId(),
                    'start' => $event->getStart()->format('Y-m-d 14:00'), 
                    'end' => $event->getEnd()->format('Y-m-d 11:00'), 
                    'title' => $event->getTitle(),
                    'backgroundColor' => $event->getBackgroundColor(),
                    'classNames' => $classNames,
                    'allDay' => false,
                ];
            }
        }

        $data = json_encode($rdvs);

        return $this->render('reservation/index.html.twig', [
            'data' => $data,
            ]);
    }
    
}
