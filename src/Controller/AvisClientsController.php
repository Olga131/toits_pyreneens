<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvisClientsController extends AbstractController
{
    #[Route('/avis_clients', name: 'app_avis_clients')]
    public function index(): Response
    {
        return $this->render('avis_clients/index.html.twig', [
            'controller_name' => 'AvisClientsController',
        ]);
    }
}
