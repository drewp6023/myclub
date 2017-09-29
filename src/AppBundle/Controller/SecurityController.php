<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Entity\Contacts;
use AppBundle\Form\Type\LoginType;

class SecurityController extends Controller
{
    public function __construct() {

    }

    public function loginAction(Request $request, AuthenticationUtils $authUtils) {

        $contact = new Contacts();
        $form = $this->createForm(LoginType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            // Get all submitted form data
            $contact = $form->getData();

            $em->persist($contact);
            $em->flush();

            // $this->addFlash('success', 'You have successfully added contact with ID ' . $contact->getId());

            // Clear the form
            $this->redirectToRoute('homepage');
        }

//        // Get the login error if there is one
//        $error = $authUtils->getLastAuthenticationError();
//
//        // last username entered by the user
//        $lastUsername = $authUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'loginForm' => $form->createView(),
//            'last_username' => $lastUsername,
//            'error'         => $error,
        ]);
    }
}