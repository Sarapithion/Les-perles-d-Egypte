<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticPagesController extends AbstractController
{
    #[Route('/mentions-legales', name: 'legal_mentions')]
    public function legalMentions(): Response
    {
        return $this->render('static/legal_mentions.html.twig');
    }

    #[Route('/politique-de-confidentialite', name: 'privacy_policy')]
    public function privacyPolicy(): Response
    {
        return $this->render('static/privacy_policy.html.twig');
    }
}