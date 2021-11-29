<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjouterArticleController extends AbstractController
{
    /**
     * @Route("/ajouter/article", name="ajouter_article")
     */
    public function index(): Response
    {
        return $this->render('ajouter_article/index.html.twig', [
            'controller_name' => 'AjouterArticleController',
        ]);
    }
}
