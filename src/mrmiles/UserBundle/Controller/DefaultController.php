<?php

namespace mrmiles\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('mrmilesUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
