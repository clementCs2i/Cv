<?php

/* Template/template.html.twig */
class __TwigTemplate_139745237f76f463940dafda0abdc419fa93da02e01ed67e70a538a4d85ba028 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jquery' => array($this, 'block_jquery'),
            'javascripts' => array($this, 'block_javascripts'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Template/template.html.twig"));

        // line 2
        echo "<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "            </title>
          <meta charset=\"UTF-8\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
         ";
        // line 16
        $this->displayBlock('jquery', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "                        ";
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "        </head>
        <body>
            ";
        // line 28
        $this->loadTemplate("NavBar/NavbarTop.html.twig", "Template/template.html.twig", 28)->display($context);
        // line 29
        echo "    
        <div class=\"rowTemplate\">
            <div class=\"col-4 col-sm-3 col-lg-2 col-xl-2 fond\">
                        
                 ";
        // line 33
        $this->loadTemplate("Bandeaux/BandeauLeft.html.twig", "Template/template.html.twig", 33)->display($context);
        // line 34
        echo "   
            </div>      
                
             <div class=\"col-8 col-sm-9 col-lg-10 col-xl-10 Contents\">
                ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "             </div>
        </div>   
        <footer id=\"footer\">
                ";
        // line 43
        $this->displayBlock('foot', $context, $blocks);
        // line 47
        echo "        </footer>
        </body>
    </html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            CV Clément SAVY
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "          <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"bootstrap-css\">
          <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/NavBar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Bandeau.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_jquery($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jquery"));

        // line 17
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery-3.3.1.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 24
        echo "                            
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_foot($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        // line 44
        echo "                  
  
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Template/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 44,  194 => 43,  187 => 39,  181 => 38,  173 => 24,  167 => 23,  157 => 21,  151 => 20,  141 => 17,  135 => 16,  126 => 13,  122 => 12,  117 => 11,  111 => 10,  103 => 6,  97 => 5,  88 => 47,  86 => 43,  81 => 40,  79 => 38,  73 => 34,  71 => 33,  65 => 29,  63 => 28,  59 => 26,  56 => 23,  54 => 20,  51 => 19,  49 => 16,  46 => 15,  44 => 10,  40 => 8,  38 => 5,  33 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}
            CV Clément SAVY
            {% endblock %}
            </title>
          <meta charset=\"UTF-8\">
        {% block stylesheets %}
          <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" id=\"bootstrap-css\">
          <link href=\"{{ asset('css/NavBar.css') }}\" rel=\"stylesheet\">
          <link href=\"{{ asset('css/Bandeau.css') }}\" rel=\"stylesheet\">
        {% endblock %}

         {% block jquery %}
        <script src=\"{{ asset('jquery/jquery-3.3.1.js') }}\"></script>
        {% endblock %}

        {% block javascripts %}
         <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
                        {% block head %}
                            
                        {% endblock %}
        </head>
        <body>
            {% include 'NavBar/NavbarTop.html.twig' %}
    
        <div class=\"rowTemplate\">
            <div class=\"col-4 col-sm-3 col-lg-2 col-xl-2 fond\">
                        
                 {% include 'Bandeaux/BandeauLeft.html.twig' %}
   
            </div>      
                
             <div class=\"col-8 col-sm-9 col-lg-10 col-xl-10 Contents\">
                {% block body %}
                {% endblock %}
             </div>
        </div>   
        <footer id=\"footer\">
                {% block foot %}
                  
  
                {% endblock %}
        </footer>
        </body>
    </html>", "Template/template.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Template\\Template.html.twig");
    }
}
