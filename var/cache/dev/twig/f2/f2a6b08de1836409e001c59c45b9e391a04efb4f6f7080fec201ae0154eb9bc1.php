<?php

/* Pages/Accueil.html.twig */
class __TwigTemplate_c1603cdf3ae8ff262612fa8f1017aaeb0fd6db226f958ff71a33fe0e96800731 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("Template/template.html.twig", "Pages/Accueil.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pages/Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Accueil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=\"Content text-center\">

<p class=\"h1 mb-0 text-black TitreNom\">Bonjour, je suis <span class=\"ColorRed\">Clément SAVY</span> </p>

<p class=\"h3 mb-0 text-black TitreNom\">Développeur logiciel</p>
<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/téléchargement.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle image\" >
<p <cite class=\" textcitation ColorRed\">3 ans d'expérience en tant que chef de projets et développeur de logiciel métier</cite></p>
</div>
<div class=\"row\">
        <div class=\"col\">
                <a class=\"liens\" href=\"experiences\">
                <div id=\"moncercle\" >
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/experience.png"), "html", null, true);
        echo " \"class=\"imageExperience\" >
                        
                </div>
                <p class=\"h3 mb-0 text-black NomMenu\">Expériences </p>
                </a>
        </div>
        <div class=\"col\">
                <a class=\"liens\" href=\"competences\">
                <div id=\"moncercle\" >
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/compétance.png"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" class=\"imageComp\" >
                       
                </div>
                <p class=\"h3 mb-0 text-black NomMenu\">Compétances</p>
            </a>
        </div>
        <a class=\"liens\" href=\"projets\">
        <div class=\"col\"> <div id=\"moncercle\" >
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/projet.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
                
        </div>
        <p class=\"h3 mb-0 text-black NomMenu\">Projets </p>
    </a>
    </div>
    <a class=\"liens\" href=\"contact\">
        <div class=\"col\"> <div id=\"moncercle\" >
                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/envelope.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
          
        </div>
        <p class=\"h3 mb-0 text-black NomMenu\">Contact </p>
    </a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/Accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 45,  102 => 37,  91 => 29,  79 => 20,  69 => 13,  61 => 7,  55 => 6,  45 => 4,  39 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'Template/template.html.twig' %}
{% block head %}
 <link href=\"{{ asset('css/Accueil.css') }}\" rel=\"stylesheet\">
 {% endblock %}
{% block body %}

<div class=\"Content text-center\">

<p class=\"h1 mb-0 text-black TitreNom\">Bonjour, je suis <span class=\"ColorRed\">Clément SAVY</span> </p>

<p class=\"h3 mb-0 text-black TitreNom\">Développeur logiciel</p>
<img src=\"{{ asset('images/téléchargement.png') }}\" class=\"img-fluid rounded-circle image\" >
<p <cite class=\" textcitation ColorRed\">3 ans d'expérience en tant que chef de projets et développeur de logiciel métier</cite></p>
</div>
<div class=\"row\">
        <div class=\"col\">
                <a class=\"liens\" href=\"experiences\">
                <div id=\"moncercle\" >
                        <img src=\"{{ asset('images/experience.png') }} \"class=\"imageExperience\" >
                        
                </div>
                <p class=\"h3 mb-0 text-black NomMenu\">Expériences </p>
                </a>
        </div>
        <div class=\"col\">
                <a class=\"liens\" href=\"competences\">
                <div id=\"moncercle\" >
                        <img src=\"{{ asset('images/compétance.png') }}\" width=\"64\" height=\"64\" class=\"imageComp\" >
                       
                </div>
                <p class=\"h3 mb-0 text-black NomMenu\">Compétances</p>
            </a>
        </div>
        <a class=\"liens\" href=\"projets\">
        <div class=\"col\"> <div id=\"moncercle\" >
                <img src=\"{{ asset('images/projet.png') }} \"class=\"imageContact\" >
                
        </div>
        <p class=\"h3 mb-0 text-black NomMenu\">Projets </p>
    </a>
    </div>
    <a class=\"liens\" href=\"contact\">
        <div class=\"col\"> <div id=\"moncercle\" >
                <img src=\"{{ asset('images/envelope.png') }} \"class=\"imageContact\" >
          
        </div>
        <p class=\"h3 mb-0 text-black NomMenu\">Contact </p>
    </a>
    </div>
</div>
{% endblock %}
", "Pages/Accueil.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Accueil.html.twig");
    }
}
