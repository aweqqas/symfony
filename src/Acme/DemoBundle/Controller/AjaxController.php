<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class AjaxController extends Controller
{

    /**
     * @Route("/location/dropdown", name="ajax_classified_location_dropdown")
     */
    public function locationDropdownAction()
    {
        $response = new JsonResponse(array(
                "categories" => array(
                    array("id"=>1,"name"=>"All Categories","seoName"=>"all","children"=>false,"selected"=>true,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2551,"name"=>"Motors","seoName"=>"cars-vans-motorbikes","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2549,"name"=>"For Sale","seoName"=>"for-sale","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>10201,"name"=>"Property","seoName"=>"flats-houses","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2553,"name"=>"Jobs","seoName"=>"jobs","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2554,"name"=>"Services","seoName"=>"business-services","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2550,"name"=>"Community","seoName"=>"community","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2526,"name"=>"Pets","seoName"=>"pets","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false)
                ), 
                "depth" => 0));
        return $response;
    } 
    
    /**
     * @Route("/location/children", name="ajax_classified_location_children")
     */
    public function locationChildrenAction()
    {
        $response = new JsonResponse(array(
                array("id"=>9311,"name"=>"Cars","seoName"=>"cars","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>9314,"name"=>"Car Parts & Accessories","seoName"=>"car-parts-accessories","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>10013,"name"=>"Campervans & Caravans","seoName"=>"campervans-caravans","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>10442,"name"=>"Motorbikes & Scooters","seoName"=>"motorbikes-scooters","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>10016,"name"=>"Motorbike Parts & Accessories","seoName"=>"motorbike-parts-accessories","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>9312,"name"=>"Vans, Trucks & Plant","seoName"=>"vans-trucks-plant","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>10301,"name"=>"Wanted","seoName"=>"cars-wanted","children"=>false,"selected"=>false,"childrenItems"=>array(),"drilled"=>false)
            ));
        return $response;
    }        

    /**
     * @Route("/category/dropdown", name="ajax_classified_category_dropdown")
     */
    public function categoryDropdownAction()
    {
        $response = new JsonResponse(array(
                "categories" => array(
                    array("id"=>1,"name"=>"All Categories","seoName"=>"all","children"=>false,"selected"=>true,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2551,"name"=>"Motors","seoName"=>"cars-vans-motorbikes","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2549,"name"=>"For Sale","seoName"=>"for-sale","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>10201,"name"=>"Property","seoName"=>"flats-houses","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2553,"name"=>"Jobs","seoName"=>"jobs","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2554,"name"=>"Services","seoName"=>"business-services","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2550,"name"=>"Community","seoName"=>"community","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                    array("id"=>2526,"name"=>"Pets","seoName"=>"pets","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false)
                ), 
                "depth" => 0));
        return $response;
    } 
    
    /**
     * @Route("/category/children", name="ajax_classified_category_children")
     */
    public function categoryChildrenAction()
    {
        $response = new JsonResponse(array(
                array("id"=>9311,"name"=>"Cars","seoName"=>"cars","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>9314,"name"=>"Car Parts & Accessories","seoName"=>"car-parts-accessories","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>10013,"name"=>"Campervans & Caravans","seoName"=>"campervans-caravans","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>10442,"name"=>"Motorbikes & Scooters","seoName"=>"motorbikes-scooters","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>10016,"name"=>"Motorbike Parts & Accessories","seoName"=>"motorbike-parts-accessories","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>9312,"name"=>"Vans, Trucks & Plant","seoName"=>"vans-trucks-plant","children"=>true,"selected"=>false,"childrenItems"=>array(),"drilled"=>false),
                array("id"=>10301,"name"=>"Wanted","seoName"=>"cars-wanted","children"=>false,"selected"=>false,"childrenItems"=>array(),"drilled"=>false)
            ));
        return $response;
    }    
}
