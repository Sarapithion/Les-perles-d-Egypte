<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/article')]
final class ArticleController extends AbstractController
{
    #[Route(name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        // Variable qui prend une valeur si la personne connectée est admin
        $isAdmin = $this->isGranted('ROLE_ADMIN');

        // Variable qui prend une valeur si la personne connectée est modérateur
        $isModerator = $this->isGranted('ROLE_MODERATOR');

        // Affiche la page article index
        return $this->render('article/index.html.twig', [
            // Récupère tous les articles validés
            'articles' => $articleRepository->findBy(['Validation' => true]),

            // Renvoie si l'utilisateur est administrateur ou modérateur
            'isAdmin' => $isAdmin,
            'isModerator' => $isModerator, // Ajoutez cette ligne
        ]);
    }
// Route to-validate pour valider les articles, seul un administrateur ou un modérateur peut faire cela
    #[Route('/to-validate', name: 'app_article_to_validate', methods: ['GET'])]
    public function toValidate(ArticleRepository $articleRepository): Response
    {
        // Vérifie si l'utilisateur a un des rôles nécessaires
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MODERATOR')) {
            throw $this->createAccessDeniedException("Vous n'avez pas le droit d'accéder à cette page");
        }

        $articlesToValidate = $articleRepository->findBy(['Validation' => false]);

        return $this->render('article/to_validate.html.twig', [
            'articles' => $articlesToValidate,
            'isValidationPage' => true,
        ]);
    }
    #[Route('/validate-article/{id}', name: 'app_article_valid_event', methods: ['POST', 'GET'])]
    public function validateArticle(int $id, ArticleRepository $articleRepository, EntityManagerInterface $entityManager, Request $request): Response
    {


        $article = $articleRepository->find($id);

        if (!$article) {
            throw $this->createNotFoundException('Article non trouvé');
        }

        $article->setValidation(true);
        $entityManager->persist($article);
        $entityManager->flush();

        // Ajoute un message flash pour informer l'utilisateur
        $this->addFlash('success', 'L\'article a été validé avec succès.');

        return $this->redirectToRoute('app_article_to_validate');
    }



    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();

        $user = $this->getUser();
        //Vérifie si l'utilisateur est connecté
        if ($user) {
            $article->setUtilisateur($user);
        //Sinon retourne à la page d'accueil
        } else {
            header('Location : index.php');
        }

        $article->setValidation(false);

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article->setValidation(false);
            $entityManager->persist($article);
            $entityManager->flush();

            // Une fois que tout s'est bien passé, on retourne sur la page article index
            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_article_show', methods: ['GET'])]
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $article->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }
}
