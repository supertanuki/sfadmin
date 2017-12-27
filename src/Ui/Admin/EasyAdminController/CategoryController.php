<?php

namespace App\Ui\Admin\EasyAdminController;

use App\Domain\Category\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class CategoryController extends BaseAdminController
{
    protected function createNewEntity()
    {
        return new Category('', new \DateTime());
    }
}
