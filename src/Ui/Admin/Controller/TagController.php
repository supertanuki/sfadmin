<?php

namespace App\Ui\Admin\Controller;

use App\Domain\Tag\Tag;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class TagController extends BaseAdminController
{
    protected function createNewEntity()
    {
        return new Tag('', new \DateTime());
    }
}
