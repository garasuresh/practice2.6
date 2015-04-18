<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $conditions = $em->getRepository('AppBundle:Conditions')->findAll();

        return $this->render('AppBundle::index.html.twig', array('conditions'=>$conditions));
    }
}
