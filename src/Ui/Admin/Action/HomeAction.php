<?php

namespace App\Ui\Admin\Action;

use Symfony\Component\HttpFoundation\Response;

class HomeAction
{
    /** @var \Twig_Environment */
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(): Response
    {
        return new Response($this->twig->render('Admin/home.html.twig'));
    }
}
