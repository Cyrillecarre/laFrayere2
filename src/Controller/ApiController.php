<?php

namespace App\Controller;

use App\Entity\PosteOne;
use App\Entity\PosteTwo;
use App\Entity\PosteThree;
use App\Entity\PosteFour;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api', name: 'api_')]
class ApiController extends AbstractController
{
    #[Route('/postes', name: 'postes_list', methods: ['GET'])]
    public function listPostes(EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {
        $postes = [
            'poste1' => $entityManager->getRepository(PosteOne::class)->findAll(),
            'poste2' => $entityManager->getRepository(PosteTwo::class)->findAll(),
            'poste3' => $entityManager->getRepository(PosteThree::class)->findAll(),
            'poste4' => $entityManager->getRepository(PosteFour::class)->findAll(),
        ];

        $json = $serializer->serialize($postes, 'json', ['groups' => 'poste:read']);
        return new JsonResponse($json);
    }

    #[Route('/poste1', name: 'poste1_list', methods: ['GET'])]
    public function listPosteOne(EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {
        $postes = $entityManager->getRepository(PosteOne::class)->findAll();
        $json = $serializer->serialize($postes, 'json', ['groups' => 'poste:read']);
        return new JsonResponse($json);
    }

    #[Route('/poste2', name: 'poste2_list', methods: ['GET'])]
    public function listPosteTwo(EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {
        $postes = $entityManager->getRepository(PosteTwo::class)->findAll();
        $json = $serializer->serialize($postes, 'json', ['groups' => 'poste:read']);
        return new JsonResponse($json);
    }

    #[Route('/poste3', name: 'poste3_list', methods: ['GET'])]
    public function listPosteThree(EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {
        $postes = $entityManager->getRepository(PosteThree::class)->findAll();
        $json = $serializer->serialize($postes, 'json', ['groups' => 'poste:read']);
        return new JsonResponse($json);
    }

    #[Route('/poste4', name: 'poste4_list', methods: ['GET'])]
    public function listPosteFour(EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {
        $postes = $entityManager->getRepository(PosteFour::class)->findAll();
        $json = $serializer->serialize($postes, 'json', ['groups' => 'poste:read']);
        return new JsonResponse($json);
    }
} 