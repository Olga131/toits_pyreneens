<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Services\ArticleService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NosRealisationsController extends AbstractController
{
    #[Route('/nos_realisations', name: 'app_nos_realisations')]
    public function nosRealisations(ArticleService $articleService, ManagerRegistry $doctrine): Response
    {
        $allCats = $doctrine->getRepository(Categorie::class)->categorieList();

        foreach ($allCats as $key => $categorie) {
            $allCats[$key] = [];

            $allCats[$key]['titre'] = $categorie['nom'];
            $allCats[$key]['articles'] = $articleService->getPaginatedArticles($categorie['slug']);
        }

        return $this->render('nos_realisations/index.html.twig', [
            'categories' => $allCats
        ]);
    }

    #[Route('/nos_realisations/{slug}', name: 'app_nos_realisations_categorie')]
    public function categoryView(?Categorie $categorie, ArticleService $articleService): Response
    {
        if (!$categorie) {
            return $this->redirectToRoute('app_accueil');
        }

        return $this->render('nos_realisations/index.html.twig', [
            'categories' => [
                [
                    'titre' => $categorie->getNom(),
                    'articles' => $articleService->getPaginatedArticles($categorie->getSlug())
                ]
            ]
        ]);
    }
}
