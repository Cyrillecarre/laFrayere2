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

        if ($request->isMethod('POST')) {
            // Récupération des données du formulaire soumis
            $data = $request->request->all();
    
            // Vérifiez si les clés existent dans $data avant de les utiliser
            if (isset($data['start']) && isset($data['end']) && isset($data['email']) && isset($data['phoneNumber']) && isset($data['pellets']) && isset($data['graines'])) {
                $startDateTime = \DateTime::createFromFormat('Y-m-d', $data['start']);
                $endDateTime = \DateTime::createFromFormat('Y-m-d', $data['end']);
                $email = $data['email'];
                $phoneNumber = $data['phoneNumber'];
                $pellets = $data['pellets'];
                $graines = $data['graines'];

                // Calcul de la durée de la réservation en jours
                $duration = ($endDateTime->getTimestamp() - $startDateTime->getTimestamp()) / (60 * 60 * 24);

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

                // Vérification de la disponibilité des postes
                if (
                    $this->isPosteAvailable($this->posteOneRepository, $startDateTime, $endDateTime) &&
                    $this->isPosteAvailable($this->posteTwoRepository, $startDateTime, $endDateTime) &&
                    $this->isPosteAvailable($this->posteThreeRepository, $startDateTime, $endDateTime) &&
                    $this->isPosteAvailable($this->posteFourRepository, $startDateTime, $endDateTime)
                ) {
                    // Créer et persister chaque réservation de poste
                    $this->createAndPersistPoste(new PosteOne(), $startDateTime, $endDateTime, $email, $phoneNumber);
                    $this->createAndPersistPoste(new PosteTwo(), $startDateTime, $endDateTime, $email, $phoneNumber);
                    $this->createAndPersistPoste(new PosteThree(), $startDateTime, $endDateTime, $email, $phoneNumber);
                    $this->createAndPersistPoste(new PosteFour(), $startDateTime, $endDateTime, $email, $phoneNumber);

                    $totalPrice = $this->pricingService->calculateMultiPostePrice($numNights, [
                        'pellets' => $pellets,
                        'graines' => $graines,
                    ]);

                    // Stocker les détails de la réservation dans la session
                    $session->set('reservation_details', [
                        'totalPrice' => $totalPrice,
                        'numNights' => $numNights,
                        'pellets' => $pellets,
                        'graines' => $graines,
                        'start' => $startDateTime->format('Y-m-d'),
                        'end' => $endDateTime->format('Y-m-d'),
                        'email' => $email,
                        'phoneNumber' => $phoneNumber,
                    ]);

                    // Redirection vers la page "combien ça coûte"
                    return $this->redirectToRoute('app_multi_prix', [
                        'totalPrice' => $totalPrice,
                        'numNights' => $numNights,
                        'pellets' => $pellets,
                        'graines' => $graines,
                        'start' => $startDateTime->format('Y-m-d'),
                        'end' => $endDateTime->format('Y-m-d'),
                        'email' => $email,
                        'phoneNumber' => $phoneNumber,

                    ]);
                } else {
                    return $this->redirectToRoute('app_poste_one_error'); // Si un poste n'est pas disponible
                }
            } else {
                return $this->redirectToRoute('app_poste_one_error'); // Si les données requises ne sont pas présentes
            }
        }

        return $this->render('multi_resa/form.html.twig');
    }

    private function isPosteAvailable($repository, $startDateTime, $endDateTime): bool
    {
        $overlappingEvents = $repository->findOverlappingEvents($startDateTime, $endDateTime);
        return count($overlappingEvents) === 0;
    }

    private function createAndPersistPoste($poste, $startDateTime, $endDateTime, $email, $phoneNumber)
    {
        $poste->setStart($startDateTime);
        $poste->setEnd($endDateTime);
        $poste->setEmail($email);
        $poste->setPhoneNumber($phoneNumber);
        $this->entityManager->persist($poste);
    }

    #[Route('/prix', name: 'app_multi_prix', methods: ['GET'])]
    public function summary(Request $request): Response
    {
        $stripePublicKey = $this->getParameter('stripe_public_key');
        $totalPrice = $request->query->get('totalPrice');
        $numNights = $request->query->get('numNights');
        $pellets = $request->query->get('pellets');
        $graines = $request->query->get('graines');
        $posteId = $request->query->get('poste_id');
        $posteType = $request->query->get('poste_type');
        $start = \DateTime::createFromFormat('Y-m-d', $request->query->get('start'));
        $end = \DateTime::createFromFormat('Y-m-d', $request->query->get('end'));
        $email = $request->query->get('email');
        $phoneNumber = $request->query->get('phoneNumber');


        return $this->render('multi_resa/prix.html.twig', [
            'totalPrice' => $totalPrice,
            'numNights' => $numNights,
            'pellets' => $pellets,
            'graines' => $graines,
            'stripe_public_key' => $stripePublicKey,
            'poste_id' => $posteId,
            'poste_type' => $posteType,
            'start' => $start->format('d-m'),
            'end' => $end->format('d-m'),
            'email' => $email,
            'phoneNumber' => $phoneNumber,
        ]);
    }
}