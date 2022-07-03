<?php

namespace App\Services;

use App\Entity\Categorie;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class ArticleService
{
    public function __construct(
        private RequestStack $requestStack,
        private ArticleRepository $articleRepo,
        private PaginatorInterface $paginator
    ) {}

    public function getPaginatedArticles($categorieSlug): PaginationInterface
    {
        $request = $this->requestStack->getMainRequest();
        $articlesQuery = $this->articleRepo->findForPagination($categorieSlug);
        $page = $request->query->getInt('page', 1);
        $limit = 99;

        return $this->paginator->paginate($articlesQuery, $page, $limit);
    }
}
