<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListController extends Controller {

    public function indexAction (){

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT p
            FROM AppBundle:Users p '            
        );
        
        $users = $query->getResult();
        //var_dump($products);
        return $this->render('default/list.html.twig', array(
            'users' => $users,
        ));
    }
}