<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;

#[Route('/evenement')]
final class EvenementController extends AbstractController
{
    #[Route(name: 'app_evenement_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenementRepository->findBy(['Validation' => true]),
        ]);
    }


    #[Route('/to-validate', name: 'app_evenement_validation', methods: ['GET', 'POST'])]
    #[AttributeIsGranted('ROLE_ADMIN')]
    public function validate(EvenementRepository $evenementRepository): Response
    {


        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenementRepository->findBy(['Validation' => false]),
        ]);
    }


    #[Route('/validate-event/{id}', name: 'app_evenement_valid_event', methods: ['POST'])]
    public function validateEvent(int $id, EvenementRepository $evenementRepository, EntityManagerInterface $entityManager): Response
    {
        $evenement = $evenementRepository->find($id);

        if (!$evenement) {
            throw $this->createNotFoundException('Événement non trouvé');
        }

        $evenement->setValidation(true);

        $entityManager->persist($evenement);
        $entityManager->flush();

        return $this->redirectToRoute('app_evenement_validation');
    }






    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();

        $user = $this->getUser(); //Cela récupère l'utilisateur connecté

        if ($user) {
            $evenement->setUtilisateurOrganisation($user); //Je définit une valeur par défaut pour l'utilisateur
        }

        $evenement->setValidation(false); //la valeur par défaut de la validation est sur false

        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $evenement->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }
}
