<?php

namespace App\Controller;

use App\Entity\Medaille;
use App\Form\MedailleType;
use App\Repository\MedailleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


#[Route('/medaille')]
final class MedailleController extends AbstractController
{
    #[Route(name: 'app_medaille_index', methods: ['GET'])]
    public function index(MedailleRepository $medailleRepository): Response
    {
        return $this->render('medaille/index.html.twig', [
            'medailles' => $medailleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_medaille_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $medaille = new Medaille();
        $form = $this->createForm(MedailleType::class, $medaille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'upload d'image
            $imageFile = $form->get('picture')->getData();

            if ($imageFile) {
                $extension = $imageFile->guessExtension();
                $newFilename = uniqid();
            
                // Si le fichier est au format HEIC, on utilise heif-convert pour le convertir en JPEG
                if ($extension === 'heic') {
                    $inputFile = $imageFile->getPathname();
                    $outputFile = $this->getParameter('medaille_directory') . '/' . $newFilename . '.jpg';
            
                    // Exécuter la conversion HEIC -> JPG
                    exec("heif-convert $inputFile $outputFile", $output, $return_var);
            
                    if ($return_var !== 0) {
                        $this->addFlash('danger', 'La conversion de l\'image HEIC a échoué.');
                    } else {
                        $newFilename .= '.jpg';
                    }
                } else {
                    // Gestion normale des autres formats
                    $newFilename .= '.' . $extension;
            
                    try {
                        $imageFile->move(
                            $this->getParameter('medaille_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        $this->addFlash('danger', 'Le téléchargement de l\'image a échoué : ' . $e->getMessage());
                    }
                }

                $medaille->setPicture($newFilename);
            }

            $entityManager->persist($medaille);
            $entityManager->flush();

            return $this->redirectToRoute('app_medaille_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('medaille/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_medaille_show', methods: ['GET'])]
    public function show(Medaille $medaille): Response
    {
        return $this->render('medaille/show.html.twig', [
            'medaille' => $medaille,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_medaille_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Medaille $medaille, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MedailleType::class, $medaille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_medaille_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('medaille/edit.html.twig', [
            'medaille' => $medaille,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_medaille_delete', methods: ['POST'])]
    public function delete(Request $request, Medaille $medaille, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $medaille->getId(), $request->request->get('_token'))) {
            $entityManager->remove($medaille);
            $entityManager->flush();

            $this->addFlash('success', 'Medaille successfully deleted');
        }

        return $this->redirectToRoute('app_medaille_index', [], Response::HTTP_SEE_OTHER);
    }
}

