<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NosRealisationsController extends AbstractController
{
    #[Route('/nos_realisations', name: 'app_nos_realisations')]
    public function index(): Response
    {
        return $this->render('nos_realisations/index.html.twig', [
            'controller_name' => 'NosRealisationsController',
        ]);
    }
}
