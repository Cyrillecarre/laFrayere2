<?php
namespace App\Controller;

use App\Entity\PosteOne;
use App\Entity\PosteTwo;
use App\Entity\PosteThree;
use App\Entity\PosteFour;
use App\Repository\PosteOneRepository;
use App\Repository\PosteTwoRepository;
use App\Repository\PosteThreeRepository;
use App\Repository\PosteFourRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PricingService;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\MultiResaType;

class MultiResaController extends AbstractController
{
    private $entityManager;
    private $posteOneRepository;
    private $posteTwoRepository;
    private $posteThreeRepository;
    private $posteFourRepository;
    private $pricingService;

    public function __construct(
        EntityManagerInterface $entityManager,
        PosteOneRepository $posteOneRepository,
        PosteTwoRepository $posteTwoRepository,
        PosteThreeRepository $posteThreeRepository,
        PosteFourRepository $posteFourRepository,
        PricingService $pricingService
    ) {
        $this->entityManager = $entityManager;
        $this->posteOneRepository = $posteOneRepository;
        $this->posteTwoRepository = $posteTwoRepository;
        $this->posteThreeRepository = $posteThreeRepository;
        $this->posteFourRepository = $posteFourRepository;
        $this->pricingService = $pricingService;
    }

    #[Route('/reserve-all', name: 'app_reserve_all', methods: ['GET','POST'])]
    public function reserveAll(Request $request, SessionInterface $session): Response
    {
        $form = $this->createForm(MultiResaType::class);
        $form->handleRequest($request);

        $errorMessage = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $startDateTime = $form->get('start')->getData();
            $endDateTime = $form->get('end')->getData();
            $email = $form->get('email')->getData();
            $phoneNumber = $form->get('phoneNumber')->getData();
            $pellets45 = (int) ($form->get('pellets45')->getData() ?? 0);
            $pellets35 = (int) ($form->get('pellets35')->getData() ?? 0);
            $pellets45Label = $this->getChoiceLabel($form, 'pellets45', $pellets45) ?? '0';
            $pellets35Label = $this->getChoiceLabel($form, 'pellets35', $pellets35) ?? '0';

            if (!$startDateTime instanceof \DateTimeInterface || !$endDateTime instanceof \DateTimeInterface) {
                $errorMessage = 'Dates invalides.';
            } else {
                // Calcul de la durée (en jours) => conversion en numNights pour le pricing
                $duration = ($endDateTime->getTimestamp() - $startDateTime->getTimestamp()) / (60 * 60 * 24);

                if ($duration < 1.7) {
                    $errorMessage = 'Durée trop courte.';
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
                    $errorMessage = 'Durée trop longue.';
                }

                if ($errorMessage === null) {
                    if (
                        $this->isPosteAvailable($this->posteOneRepository, $startDateTime, $endDateTime) &&
                        $this->isPosteAvailable($this->posteTwoRepository, $startDateTime, $endDateTime) &&
                        $this->isPosteAvailable($this->posteThreeRepository, $startDateTime, $endDateTime) &&
                        $this->isPosteAvailable($this->posteFourRepository, $startDateTime, $endDateTime)
                    ) {
                        $this->createAndPersistPoste(new PosteOne(), $startDateTime, $endDateTime, $email, $phoneNumber);
                        $this->createAndPersistPoste(new PosteTwo(), $startDateTime, $endDateTime, $email, $phoneNumber);
                        $this->createAndPersistPoste(new PosteThree(), $startDateTime, $endDateTime, $email, $phoneNumber);
                        $this->createAndPersistPoste(new PosteFour(), $startDateTime, $endDateTime, $email, $phoneNumber);
                        $this->entityManager->flush();

                        $totalPrice = $this->pricingService->calculateMultiPostePrice($numNights, [
                            'pellets45' => $pellets45,
                            'pellets35' => $pellets35,
                        ]);

                        $session->set('reservation_details', [
                            'totalPrice' => $totalPrice,
                            'numNights' => $numNights,
                            'pellets45' => $pellets45,
                            'pellets35' => $pellets35,
                            'pellets45Label' => $pellets45Label,
                            'pellets35Label' => $pellets35Label,
                            'start' => $startDateTime->format('Y-m-d'),
                            'end' => $endDateTime->format('Y-m-d'),
                            'email' => $email,
                            'phoneNumber' => $phoneNumber,
                        ]);

                        return $this->redirectToRoute('app_multi_prix', [
                            'totalPrice' => $totalPrice,
                            'numNights' => $numNights,
                            'pellets45' => $pellets45,
                            'pellets35' => $pellets35,
                            'pellets45Label' => $pellets45Label,
                            'pellets35Label' => $pellets35Label,
                            'start' => $startDateTime->format('Y-m-d'),
                            'end' => $endDateTime->format('Y-m-d'),
                            'email' => $email,
                            'phoneNumber' => $phoneNumber,
                        ]);
                    }

                    $errorMessage = 'Un poste est déjà réservé sur cette période.';
                }
            }
        }

        return $this->render('multi_resa/form.html.twig', [
            'form' => $form,
            'errorMessage' => $errorMessage,
        ]);
    }

    private function isPosteAvailable($repository, $startDateTime, $endDateTime): bool
    {
        $overlappingEvents = $repository->findOverlappingEvents($startDateTime, $endDateTime);
        return count($overlappingEvents) === 0;
    }

    private function createAndPersistPoste($poste, $startDateTime, $endDateTime, $email, $phoneNumber)
    {
        if ($poste instanceof PosteOne) {
            $poste->setTitle('Poste 1');
        } elseif ($poste instanceof PosteTwo) {
            $poste->setTitle('Poste 2');
        } elseif ($poste instanceof PosteThree) {
            $poste->setTitle('Poste 3');
        } elseif ($poste instanceof PosteFour) {
            $poste->setTitle('Poste 4');
        }

        $poste->setStart($startDateTime);
        $poste->setEnd($endDateTime);
        $poste->setEmail($email);
        $poste->setPhoneNumber($phoneNumber);
        if (method_exists($poste, 'setApprouved')) {
            $poste->setApprouved(false);
        }
        $this->entityManager->persist($poste);
    }

    #[Route('/prix', name: 'app_multi_prix', methods: ['GET'])]
    public function summary(Request $request): Response
    {
        $stripePublicKey = $this->getParameter('stripe_public_key');
        $totalPrice = $request->query->get('totalPrice');
        $numNights = $request->query->get('numNights');
        $pellets45 = $request->query->get('pellets45');
        $pellets35 = $request->query->get('pellets35');
        $pellets45Label = $request->query->get('pellets45Label');
        $pellets35Label = $request->query->get('pellets35Label');
        $posteId = $request->query->get('poste_id');
        $posteType = $request->query->get('poste_type');
        $start = \DateTime::createFromFormat('Y-m-d', $request->query->get('start'));
        $end = \DateTime::createFromFormat('Y-m-d', $request->query->get('end'));
        $email = $request->query->get('email');
        $phoneNumber = $request->query->get('phoneNumber');


        return $this->render('multi_resa/prix.html.twig', [
            'totalPrice' => $totalPrice,
            'numNights' => $numNights,
            'pellets45' => $pellets45,
            'pellets35' => $pellets35,
            'pellets45Label' => $pellets45Label,
            'pellets35Label' => $pellets35Label,
            'stripe_public_key' => $stripePublicKey,
            'poste_id' => $posteId,
            'poste_type' => $posteType,
            'start' => $start->format('d-m'),
            'end' => $end->format('d-m'),
            'email' => $email,
            'phoneNumber' => $phoneNumber,
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
}