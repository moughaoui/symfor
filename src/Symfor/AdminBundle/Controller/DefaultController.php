<?php

namespace Symfor\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SymforAdminBundle:Default:index.html.twig');
    }
}
