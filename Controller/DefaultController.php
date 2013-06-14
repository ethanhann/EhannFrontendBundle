<?php

namespace Ehann\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function bootstrapAction()
    {
        return $this->render('EhannFrontendBundle:samples:bootstrap.html.twig');
    }
}
