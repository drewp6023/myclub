<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use AppBundle\Entity\Tcontacts;

class ContactController extends Controller
{
    public function showAction($contactID, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('AppBundle:Tcontacts');
        $contact = $repository->find($contactID);

        $form = $this->createFormBuilder()
            ->add('firstname', TextType::class)
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Individual form properties
            // $userInput_firstname = $form->getData('firstname');

            // Get all submitted form data
            dump($form->getData());

        }

        // replace this example code with whatever you need
        return $this->render('contact/show.html.twig', [
            'contact' => $contact,
            'contactForm' => $form->createView()
        ]);
    }

    public function addAction()
    {

        // replace this example code with whatever you need
        return $this->render('contact/add.html.twig', [
            // 'contact' => $contact
        ]);
    }

    public function listAction($page = 1)
    {

        return $this->render('contact/contacts.html.twig', [
            'page' => $page
        ]);
    }

    public function defaultAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Tcontacts');
        $contacts = $repository->findAll();

        return $this->render('contact/default.html.twig', [
            'contacts' => $contacts
        ]);
    }

    private function sendMail($email, $msg) {
        $mail = \Swift_Message::newInstance()
            ->setSubject('Test Email From myClub')
            ->setFrom('admin@mcms.com')
            ->setTo($email)
            ->setbody($msg);

        $this->get('mailer')->send($mail);
    }
}
