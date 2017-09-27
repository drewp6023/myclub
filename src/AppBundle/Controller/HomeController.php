<?php

// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Tcontacts;
use AppBundle\Repository\ContactRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function __construct() {

    }

    public function defaultAction()
    {
        $contacts = $this->getDoctrine()->getRepository('AppBundle:Tcontacts')->findAll();

        return $this->render('home/default.html.twig', array(
            'totalContacts' => count($contacts),
            'contacts' => $contacts
        ));
    }
}