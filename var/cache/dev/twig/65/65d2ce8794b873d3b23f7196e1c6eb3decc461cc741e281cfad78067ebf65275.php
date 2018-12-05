<?php

/* Pages/Contact.html.twig */
class __TwigTemplate_4cf99751735ade42f300ff7e3244e9aecc6ca83a3b97c0b6476a29ac11b4a83d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("Template/template.html.twig", "Pages/Contact.html.twig", 3);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pages/Contact.html.twig"));

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

";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
<div  class=\"FormContact\">
<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Votre nom et prénom</label>
";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "NomPrenom", array()), 'widget');
        echo "
 </div>
 <div class=\"form-group\">
    <label for=\"exampleFormControlTextarea1\">Votre email</label>
   ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "AdresseMail", array()), 'widget');
        echo "
  </div>
<div class=\"form-group\">
    <label for=\"exampleFormControlTextarea1\">Votre méssage</label>
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "Message", array()), 'widget');
        echo "
  </div>
   ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "envoyer", array()), 'widget');
        echo "
</form>
</div>
";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/Contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  110 => 40,  105 => 38,  98 => 34,  91 => 30,  83 => 25,  67 => 12,  62 => 9,  56 => 8,  45 => 5,  39 => 4,  15 => 3,);
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

{{ form_start(form) }}
<div  class=\"FormContact\">
<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Votre nom et prénom</label>
{{ form_widget(form.NomPrenom) }}
 </div>
 <div class=\"form-group\">
    <label for=\"exampleFormControlTextarea1\">Votre email</label>
   {{ form_widget(form.AdresseMail) }}
  </div>
<div class=\"form-group\">
    <label for=\"exampleFormControlTextarea1\">Votre méssage</label>
    {{ form_widget(form.Message) }}
  </div>
   {{ form_widget(form.envoyer) }}
</form>
</div>
{{ form_end(form) }}
{% endblock %}
", "Pages/Contact.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Contact.html.twig");
    }
}
