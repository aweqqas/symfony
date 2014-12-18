<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends Controller
{
    /**
     * @Route("/", name="index_classified")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/login", name="login_classified")
     * @Template()
     */
    public function loginAction()
    {
        return array();
    }    
    
    /**
     * @Route("/result", name="result_classified")
     * @Template()
     */
    public function resultAction(Request $request)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('Acme\DemoBundle\Entity\Location')->findOneBy(array('slug'=> $request->query->get('search_location')));
        $category = $em->getRepository('Acme\DemoBundle\Entity\Category')->findOneBy(array('slug'=> $request->query->get('search_category')));
        $distance = $request->query->get('distance');
        
        $stmt = $this->getDoctrine()->getEntityManager()
                ->getConnection()
                ->prepare("CALL geoloc({$location->getId()}, {$distance})");

        $stmt->execute();
        $locations = $stmt->fetchAll();
        
        return array($locations);
    } 
         
}
