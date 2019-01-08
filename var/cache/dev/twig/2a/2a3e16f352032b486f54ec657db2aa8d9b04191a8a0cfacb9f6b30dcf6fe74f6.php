<?php

/* Pages/experiences.html.twig */
class __TwigTemplate_a88b5150819da7d2f7a192900fa7eb9f75550aa20cb6462199ac3b7908a0bf00 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("Template/template.html.twig", "Pages/experiences.html.twig", 3);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Template/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pages/experiences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/experiences.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

<div id=\"moncercle\" >
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/experience.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
        </div>
        
        <div  class=\"BlocTitre text-center \">
        
        <div  class=\"avantTitre\">
        </div>
        <p class=\"h1 titre\">Expériences professionels</p>
        <div  class=\"ApresTitre \">
        </div>
        </div>



        <div class=\"contenuExperiences\">

        <div class=\"row\">
                <div class=\"col\"> 
                     <div class=\"contenuUneExperiences\">
                         <p class=\"h5 mb-0 text-black TitreNom\"> Chef de projet et développeur logiciel</p>
                         <span class=\"ColorRed\">  2016 – 2018</span>
                        <p class=\"h5 mb-0 text-black TitreNom\"> Alternance de deux ans <span class=\"ColorRed\">Master (MS2I) </span>avec l'entreprise ITR </p>
                     </div>
                </div>

                <div class=\"col\">
                        <div class=\"contenuUneExperiences\">
                                <p class=\"h5 mb-0 text-black TitreNom\"> Développeur logiciel</p>
                                <span class=\"ColorRed\">  2015 – 2016</span>
                               <p class=\"h5 mb-0 text-black TitreNom\"> Alternance de un ans <span class=\"ColorRed\">Licence (CS2I) </span>avec l'entreprise ITR </p>
                            </div>
                </div>
                    
                <div class=\"col\">
                        <div class=\"contenuUneExperiences\">
                                <p class=\"h5 mb-0 text-black TitreNom\">Développeur WEB</p>
                                <span class=\"ColorRed\">  2015</span>
                               <p class=\"h5 mb-0 text-black TitreNom\"> Satge de deux mois <span class=\"ColorRed\">BTS  (SIO) </span>avec l'entreprise ITR </p>
                            </div>
                </div>
            
        </div>
        </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/experiences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  61 => 8,  55 => 7,  45 => 5,  39 => 4,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends 'Template/template.html.twig' %}
{% block head %}
 <link href=\"{{ asset('css/experiences.css') }}\" rel=\"stylesheet\">
 {% endblock %}
{% block body %}


<div id=\"moncercle\" >
        <img src=\"{{ asset('images/experience.png') }} \"class=\"imageContact\" >
        </div>
        
        <div  class=\"BlocTitre text-center \">
        
        <div  class=\"avantTitre\">
        </div>
        <p class=\"h1 titre\">Expériences professionels</p>
        <div  class=\"ApresTitre \">
        </div>
        </div>



        <div class=\"contenuExperiences\">

        <div class=\"row\">
                <div class=\"col\"> 
                     <div class=\"contenuUneExperiences\">
                         <p class=\"h5 mb-0 text-black TitreNom\"> Chef de projet et développeur logiciel</p>
                         <span class=\"ColorRed\">  2016 – 2018</span>
                        <p class=\"h5 mb-0 text-black TitreNom\"> Alternance de deux ans <span class=\"ColorRed\">Master (MS2I) </span>avec l'entreprise ITR </p>
                     </div>
                </div>

                <div class=\"col\">
                        <div class=\"contenuUneExperiences\">
                                <p class=\"h5 mb-0 text-black TitreNom\"> Développeur logiciel</p>
                                <span class=\"ColorRed\">  2015 – 2016</span>
                               <p class=\"h5 mb-0 text-black TitreNom\"> Alternance de un ans <span class=\"ColorRed\">Licence (CS2I) </span>avec l'entreprise ITR </p>
                            </div>
                </div>
                    
                <div class=\"col\">
                        <div class=\"contenuUneExperiences\">
                                <p class=\"h5 mb-0 text-black TitreNom\">Développeur WEB</p>
                                <span class=\"ColorRed\">  2015</span>
                               <p class=\"h5 mb-0 text-black TitreNom\"> Satge de deux mois <span class=\"ColorRed\">BTS  (SIO) </span>avec l'entreprise ITR </p>
                            </div>
                </div>
            
        </div>
        </div>



{% endblock %}
", "Pages/experiences.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Experiences.html.twig");
    }
}
