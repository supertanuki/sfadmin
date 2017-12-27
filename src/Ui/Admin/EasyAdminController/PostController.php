<?php

namespace App\Ui\Admin\EasyAdminController;

use App\Domain\Post\Post;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class PostController extends BaseAdminController
{
    protected function createNewEntity()
    {
        return new Post('', '', new \DateTime());
    }
}
