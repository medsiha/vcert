<?php

namespace Vcert\VeilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
   
    public function indexAction()
    {

       $em = $this->get('doctrine')->getEntityManager();
       $repository = $em->getRepository('VcertVeilleBundle:Vulnerabilities');
    	
   	$categories = $repository->findAll();

        return $this->render('VcertVeilleBundle:Default:index.html.twig', array('categories' => $categories));
    }
}
