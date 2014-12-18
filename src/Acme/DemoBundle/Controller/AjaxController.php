<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
class AjaxController extends Controller
{

    /**
     * @Route("/location/dropdown", name="ajax_classified_location_dropdown")
     */
    public function locationDropdownAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $locations = $em->getRepository('Acme\DemoBundle\Entity\Location')->findBy(array('level'=> 1));
        $result = array();
        $result[] = array("id"=>0,"name"=>"All Locations","seoName"=>"all","children"=>false,"selected"=>true,"childrenItems"=>array(),"drilled"=>false);
        foreach ($locations as $location) {
            $result[]= array("id"=>$location->getId(),"name"=>$location->getName(),"seoName"=>$location->getSlug(),"children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false);
        }
        $response = new JsonResponse(array(
                "categories" => $result, 
                "depth" => 0));
        return $response;
    } 
    
    /**
     * @Route("/location/children", name="ajax_classified_location_children")
     */
    public function locationChildrenAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $parent = $request->query->get('input');
        $loc = $em->getRepository('Acme\DemoBundle\Entity\Location')->find($parent);
        $locations = $em->getRepository('Acme\DemoBundle\Entity\Location')->findBy(array('level'=> 3, 'parent' => $loc), 
             array('name' => 'ASC'));
        $result = array();

        foreach ($locations as $location) {
            $result[]= array("id"=>$location->getId(),"name"=>$location->getName(),"seoName"=>$location->getSlug(),"children"=>false,"selected"=>false,"childrenItems"=>array(),"drilled"=>false);
        }  
        
        $response = new JsonResponse($result);
        return $response;
    }        

    /**
     * @Route("/category/dropdown", name="ajax_classified_category_dropdown")
     */
    public function categoryDropdownAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $categories = $em->getRepository('Acme\DemoBundle\Entity\Category')->findBy(array('level'=> 1));
        $result = array();
        $result[] = array("id"=>0,"name"=>"All Categories","seoName"=>"all","children"=>false,"selected"=>true,"childrenItems"=>array(),"drilled"=>false);
        foreach ($categories as $category) {
            $result[]= array("id"=>$category->getId(),"name"=>$category->getName(),"seoName"=>$category->getSlug(),"children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false);
        }
        /*$locations = $em->getRepository('Acme\DemoBundle\Entity\Location')->findBy(array('level'=> 1));
        $result = array();
        $result[] = array("id"=>0,"name"=>"All Locations","seoName"=>"all","children"=>false,"selected"=>true,"childrenItems"=>array(),"drilled"=>false);
        foreach ($locations as $location) {
            $result[]= array("id"=>$location->getId(),"name"=>$location->getName(),"seoName"=>$location->getSlug(),"children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false);
        }      */
        $response = new JsonResponse(array(
                "categories" => $result, 
                "depth" => 0));
        return $response;
    } 
    
    /**
     * @Route("/category/children", name="ajax_classified_category_children")
     */
    public function categoryChildrenAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $parent = $request->query->get('input');
        $cat = $em->getRepository('Acme\DemoBundle\Entity\Category')->find($parent);
        $categories = $em->getRepository('Acme\DemoBundle\Entity\Category')->findBy(array('level'=> 2, 'parent' => $cat));
        $result = array();

        foreach ($categories as $category) {
            $result[]= array("id"=>$category->getId(),"name"=>$category->getName(),"seoName"=>$category->getSlug(),"children"=>false,"selected"=>false,"childrenItems"=>array(),"drilled"=>false);
        }  
        
        $response = new JsonResponse($result);
        return $response;
    }    
}
