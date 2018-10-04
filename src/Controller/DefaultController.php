<?php
namespace App\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
/**
 * Description of DefaultController
 *
 * @author clement savy
 */
class DefaultController {
    
    public function index(Environment $twig) {
        return new Response($twig->render('Pages/Accueil.html.twig'));
    }
    
    public function contact(Environment $twig) {
        return new Response($twig->render('Pages/contact.html.twig'));
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
