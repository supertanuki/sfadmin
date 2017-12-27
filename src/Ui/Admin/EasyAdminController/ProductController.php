<?php

namespace App\Ui\Admin\EasyAdminController;

use App\Domain\Product\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class ProductController extends BaseAdminController
{
    protected function createNewEntity()
    {
        return new Product('', 0, new \DateTime());
    }
}
