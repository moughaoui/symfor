<?php

namespace Symfor\SymforBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SymforSymforBundle:Default:index.html.twig');
    }
}
