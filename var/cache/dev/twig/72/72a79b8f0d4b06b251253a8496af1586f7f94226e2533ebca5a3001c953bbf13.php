<?php

/* Pages/projets.html.twig */
class __TwigTemplate_27e334af47c56b08d2b6a065ab012ede0e188a6667621e406e059cc8d29ff5ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("Template/template.html.twig", "Pages/projets.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pages/projets.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Projets.css"), "html", null, true);
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

<div id=\"moncercle\" >
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/projet.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
        </div>
        
        <div  class=\"BlocTitre text-center \">
        
        <div  class=\"avantTitre\">
        </div>
        <p class=\"h1 titre\">Projets</p>
        <div  class=\"ApresTitre \">
        </div>
        </div>

        <div class=\"h5 textContact text-center\" > <span class=\"ColorRed\">Projets  </span>réalisés</div>    



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  61 => 7,  55 => 6,  45 => 4,  39 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'Template/template.html.twig' %}
{% block head %}
 <link href=\"{{ asset('css/Projets.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}


<div id=\"moncercle\" >
        <img src=\"{{ asset('images/projet.png') }} \"class=\"imageContact\" >
        </div>
        
        <div  class=\"BlocTitre text-center \">
        
        <div  class=\"avantTitre\">
        </div>
        <p class=\"h1 titre\">Projets</p>
        <div  class=\"ApresTitre \">
        </div>
        </div>

        <div class=\"h5 textContact text-center\" > <span class=\"ColorRed\">Projets  </span>réalisés</div>    



{% endblock %}
", "Pages/projets.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Projets.html.twig");
    }
}
