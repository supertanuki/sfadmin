<?php

namespace App\Ui\Front\Action\Product;

use App\Domain\Product\Product;
use App\Domain\Product\ProductRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class ShowAction
{
    /** @var \Twig_Environment */
    private $twig;

    public function __construct(ProductRepositoryInterface $productRepository, \Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(Product $product): Response
    {
        return new Response(
            $this->twig->render('Front/Product/show.html.twig', ['product' => $product])
        );
    }
}
