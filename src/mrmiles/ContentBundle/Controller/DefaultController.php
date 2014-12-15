<?php

namespace mrmiles\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('mrmilesContentBundle:Default:index.html.twig', array('name' => $name));
    }
}
