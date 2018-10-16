<?php
namespace App\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormBuilder;
use Twig\Environment;
use App\Entity\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
/**
 * Description of DefaultController
 *
 * @author clement savy
 */
class DefaultController extends AbstractController{
    
    public function index(Environment $twig) {
        return new Response($twig->render('Pages/Accueil.html.twig'));
    }
    
    public function contact(Environment $twig, Request $request, \Swift_Mailer $mailer) {
       // just setup a fresh $task object (remove the dummy data)
    $Email = new Email();

    $form = $this->createFormBuilder($Email)
        ->add('NomPrenom', TextType::class, array('attr' => array('class' => 'form-control',
                                                                  'placeholder'=>'Enter votre nom et prénom')))
        ->add('AdresseMail', EmailType::class, array('attr' => array('class' => 'form-control',
                                                                  'placeholder'=>'Enter votre email')))
        ->add('Message', TextareaType::class, array('attr' => array('class' => 'form-control',
                                                                  'placeholder'=>'Enter votre message')))
        ->add('envoyer', SubmitType::class, array('label' => 'Envoyer email',
                                                  'attr' => array('class' => 'btn btn-primary')))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $Email = $form->getData();
        $message = (new \Swift_Message('Méssage site web CV'))
        ->setFrom($Email->getAdresseMail())
        ->setTo('msavy.clement@gmail.com')
        ->setBody(
            $this->renderView(
                'Emails/EmailConatct.html.twig',
                array('Name' => $Email->getNomPrenom(),
                      'Email' => $Email->getAdresseMail(),
                      'Message' => $Email->getmessage()
                )
            ),
            'text/html'
        )
    ;

    $mailer->send($message);
        return $this->redirectToRoute('competences');
    }

    return $this->render('Pages/contact.html.twig', array(
        'form' => $form->createView(),
    ));
    }

    public function competences(Environment $twig) {
        return new Response($twig->render('Pages/competences.html.twig'));
    }

    public function experiences(Environment $twig) {
        return new Response($twig->render('Pages/experiences.html.twig'));
    }

    public function projets(Environment $twig) {
        return new Response($twig->render('Pages/projets.html.twig'));
    }
    
}
