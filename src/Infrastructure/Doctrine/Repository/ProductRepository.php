<?php

namespace App\Infrastructure\Doctrine\Repository;

use App\Domain\Product\Product;
use App\Domain\Product\ProductRepositoryInterface;

class ProductRepository extends AbstractRepository implements ProductRepositoryInterface
{
    protected $modelClass = Product::class;

    public function getAll(): array
    {
        return $this->getQueryBuilder('product')->orderBy('product.label')->getQuery()->getResult();
    }
}
