<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
    public function resultAction()
    {
        return array();
    } 
    
    /**
     * @Route("/ajax/location/dropdown", name="ajax_classified_location_dropdown")
     */
    public function locationDropdownAction()
    {
        return array();
    } 
    
    /**
     * @Route("/ajax/location/children", name="ajax_classifiedlocation_children")
     */
    public function locationChildrenAction()
    {
        return array();
    }        
}
