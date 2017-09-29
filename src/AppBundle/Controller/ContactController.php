<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Contacts;

class ContactController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function defaultAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Contacts');
        $contacts = $repository->findAll();

        return $this->render('contact/default.html.twig', [
            'contacts' => $contacts
        ]);
    }

    /**
     * @param Contacts $contact
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Contacts $contact)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($contact);
        $em->flush();
        return $this->redirectToRoute('contact.default');
    }

    /**
     * @param int $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction($page = 1)
    {

        return $this->render('contact/contacts.html.twig', [
            'page' => $page
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $contact = new Contacts();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            // Get all submitted form data
            $contact = $form->getData();

            $em->persist($contact);
            $em->flush();

            $this->addFlash('success', 'You have successfully added contact with ID ' . $contact->getId());

            // Clear the form
            $contact = new Contacts();
            $form = $this->createForm(ContactType::class, $contact);

        }

        // replace this example code with whatever you need
        return $this->render('contact/new.html.twig', [
            'contactForm' => $form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @param Contacts $contact
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Request $request, Contacts $contact)
    {

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        // This block is ran ONLY if the form has been submitted
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('contact.default');

        }

        // replace this example code with whatever you need
        return $this->render('contact/show.html.twig', [
            'contact' => $contact,
            'contactForm' => $form->createView()
        ]);
    }

    /**
     * @param $email
     * @param $msg
     */
    private function sendMail($email, $msg) {
        $mail = \Swift_Message::newInstance()
            ->setSubject('Test Email Form myClub')
            ->setFrom('admin@mcms.com')
            ->setTo($email)
            ->setbody($msg);

        $this->get('mailer')->send($mail);
    }
}
