<?php

namespace Ehann\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExampleController extends Controller
{
    public function bootstrapAction()
    {
        return $this->render('EhannFrontendBundle:Example:bootstrap.html.twig');
    }

    public function baseAction()
    {
        return $this->render('EhannFrontendBundle:Example:base.html.twig');
    }
}
