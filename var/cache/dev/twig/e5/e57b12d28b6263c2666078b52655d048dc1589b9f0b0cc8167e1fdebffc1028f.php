<?php

/* Pages/contact.html.twig */
class __TwigTemplate_f35b7e97c1d5419946e1c5c3ef48a5d6d635ca0114d20575f997b4f725e6e144 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("Template/template.html.twig", "Pages/contact.html.twig", 3);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pages/contact.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Contact.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

<div id=\"moncercle\" >
<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/envelope.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
</div>

<div  class=\"BlocTitre text-center \">

<div  class=\"avantTitre\">
</div>
<p class=\"h1 titre\">Me contacter </p>
<div  class=\"ApresTitre \">
</div>
</div>
 <div class=\"h5 textContact text-center\" >Mail: <span class=\"ColorRed\">msavy.clement@gmail.com</span>  Tel : <span class=\"ColorRed\">0635346338</span></div>    

<div  class=\"FormContact\">
<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Adresse email</label>
    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter votre email\">
  </div>
<div class=\"form-group\">
    <label for=\"exampleFormControlTextarea1\">Votre méssage</label>
    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
  </div>

  <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
</form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  62 => 9,  56 => 8,  45 => 5,  39 => 4,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends 'Template/template.html.twig' %}
{% block head %}
 <link href=\"{{ asset('css/Contact.css') }}\" rel=\"stylesheet\">
 
{% endblock %}
{% block body %}


<div id=\"moncercle\" >
<img src=\"{{ asset('images/envelope.png') }} \"class=\"imageContact\" >
</div>

<div  class=\"BlocTitre text-center \">

<div  class=\"avantTitre\">
</div>
<p class=\"h1 titre\">Me contacter </p>
<div  class=\"ApresTitre \">
</div>
</div>
 <div class=\"h5 textContact text-center\" >Mail: <span class=\"ColorRed\">msavy.clement@gmail.com</span>  Tel : <span class=\"ColorRed\">0635346338</span></div>    

<div  class=\"FormContact\">
<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Adresse email</label>
    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter votre email\">
  </div>
<div class=\"form-group\">
    <label for=\"exampleFormControlTextarea1\">Votre méssage</label>
    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
  </div>

  <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
</form>
</div>
{% endblock %}
", "Pages/contact.html.twig", "C:\\wamp64\\www\\CV\\templates\\Pages\\Contact.html.twig");
    }
}
