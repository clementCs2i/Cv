<?php

/* Template/template.html.twig */
class __TwigTemplate_91e2c672d9ddd1124c2830d6e74e691b6f498fc6dbb5d936989327a89f087ad5 extends Twig_Template
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
                <div class=\"col-2  fond\">
                <div class=\"text-center\">
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/téléchargement.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" alt=\"Responsive image\">
                <blockquote class=\"blockquote text-center\">
  <p class=\"mb-0 text-white textNameRes\">Clément SAVY</p>
  <cite class=\" textJobRes ColorRed\">Développeur logiciel</cite>
<p class=\"mb-0 text-white \">Email : Msavy.clement@gmail.com</p>
</blockquote>

                </div>
                 
            
  <table class=\"text-white TableInfo table\" >
    <thead>
      <tr>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Age</td>
        <td>23 ans</td>
        
      </tr>
      <tr>
        <td>Email</td>
        <td>Msavy.clement@gmail.com</td>
        
      </tr>
      <tr>
        <td>Tel</td>
        <td>0635346338</td>
      </tr>
        <tr>
        <td>Diplome</td>
        <td>BAC +5</td>
      </tr>
       <tr>
        <td>Adresse</td>
        <td>Lorient 56100</td>
      </tr>
    </tbody>
  </table>
</div>
            
                
             <div class=\"col-6 col-sm-3\">
                ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "</div>
            </div>   
        <footer id=\"footer\">
                ";
        // line 82
        $this->displayBlock('foot', $context, $blocks);
        // line 86
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

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_foot($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        // line 83
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
        return array (  240 => 83,  234 => 82,  227 => 79,  221 => 78,  213 => 24,  207 => 23,  197 => 21,  191 => 20,  181 => 17,  175 => 16,  166 => 13,  162 => 12,  157 => 11,  151 => 10,  143 => 6,  137 => 5,  128 => 86,  126 => 82,  121 => 79,  119 => 78,  71 => 33,  65 => 29,  63 => 28,  59 => 26,  56 => 23,  54 => 20,  51 => 19,  49 => 16,  46 => 15,  44 => 10,  40 => 8,  38 => 5,  33 => 2,);
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
                <div class=\"col-2  fond\">
                <div class=\"text-center\">
                <img src=\"{{ asset('images/téléchargement.png') }}\" class=\"img-fluid rounded-circle\" alt=\"Responsive image\">
                <blockquote class=\"blockquote text-center\">
  <p class=\"mb-0 text-white textNameRes\">Clément SAVY</p>
  <cite class=\" textJobRes ColorRed\">Développeur logiciel</cite>
<p class=\"mb-0 text-white \">Email : Msavy.clement@gmail.com</p>
</blockquote>

                </div>
                 
            
  <table class=\"text-white TableInfo table\" >
    <thead>
      <tr>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Age</td>
        <td>23 ans</td>
        
      </tr>
      <tr>
        <td>Email</td>
        <td>Msavy.clement@gmail.com</td>
        
      </tr>
      <tr>
        <td>Tel</td>
        <td>0635346338</td>
      </tr>
        <tr>
        <td>Diplome</td>
        <td>BAC +5</td>
      </tr>
       <tr>
        <td>Adresse</td>
        <td>Lorient 56100</td>
      </tr>
    </tbody>
  </table>
</div>
            
                
             <div class=\"col-6 col-sm-3\">
                {% block body %}
                {% endblock %}</div>
            </div>   
        <footer id=\"footer\">
                {% block foot %}
                  
  
                {% endblock %}
        </footer>
        </body>
    </html>", "Template/template.html.twig", "C:\\wamp64\\www\\CV\\templates\\Template\\Template.html.twig");
    }
}
