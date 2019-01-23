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
    $Email->setMessage('');
    $form = $this->createFormBuilder($Email)
        ->add('NomPrenom', TextType::class, array('attr' => array('class' => 'form-control',
                                                                  'placeholder'=>'Enter votre nom et prénom',
                                                                  'value'=>"")))
        ->add('AdresseMail', EmailType::class, array('attr' => array('class' => 'form-control',
                                                                  'placeholder'=>'Enter votre email',
                                                                  'value'=>"")))
        ->add('Message', TextareaType::class, array('attr' => array('class' => 'form-control',
                                                                  'value' => 'abcdef',
                                                                  'placeholder'=>'Enter votre message')))
        ->add('envoyer', SubmitType::class, array('label' => 'Envoyer email',
                                                  'attr' => array('class' => 'btn btn-primary',
                                                                  'data-toggle' => 'modal',
                                                                  'data-target' => '#basicExampleModal')))
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
                      'Message' => $Email->getMessage()
                )
            ),
            'text/html'
        )
    ;

    $mailer->send($message);
   
    $request->getSession()
        ->getFlashBag()
        ->add('success', 'Merci, Votre méssage a été correctement envoyé')
    ;

    return new Response($twig->render('Pages/contact.html.twig', array(
        'form' => $form->createView(),
    )));
    }

    return $this->render('Pages/Contact.html.twig', array(
        'form' => $form->createView(),
    ));
    }

    public function formations(Environment $twig) {
        return new Response($twig->render('Pages/Formations.html.twig'));
    }

    public function experiences(Environment $twig) {
        return new Response($twig->render('Pages/Experiences.html.twig'));
    }

    public function projets(Environment $twig) {
        return new Response($twig->render('Pages/Projets.html.twig'));
    }
    
    public function dlcv(Environment $twig) {
        $fichier = "CV_clement.pdf";
        $chemin = "" ;
        header ("Content-type: application/force-download");
        header ("Content-disposition: filename=$fichier");
     
       readFile($chemin . $fichier);
       
    }
    
}
