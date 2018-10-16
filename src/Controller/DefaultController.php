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
use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
    
    public function contact(Environment $twig, Request $request) {
        $task = new Task();


        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

            if ($form->isSubmitted()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $task = $form->getData();
        
                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                // $entityManager = $this->getDoctrine()->getManager();
                // $entityManager->persist($task);
                // $entityManager->flush();
        
                return $this->redirectToRoute('competences');
            }
        

        return $this->render('Pages/Contact.html.twig', array(
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
