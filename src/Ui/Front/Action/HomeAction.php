<?php

namespace App\Ui\Front\Action;

use App\Domain\Product\ProductRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class HomeAction
{
    /** @var ProductRepositoryInterface */
    private $productRepository;

    /** @var \Twig_Environment */
    private $twig;

    public function __construct(ProductRepositoryInterface $productRepository, \Twig_Environment $twig)
    {
        $this->productRepository = $productRepository;
        $this->twig = $twig;
    }

    public function __invoke(): Response
    {
        return new Response(
            $this->twig->render('Front/home.html.twig', ['products' => $this->productRepository->getAll()])
        );
    }
}
