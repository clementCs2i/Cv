<?php

/* Bandeaux/BandeauLeft.html.twig */
class __TwigTemplate_c0e9e99f5ea44b357be351ecb7e63a363f93580877b7c42f8f30856c6b2636ea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Bandeaux/BandeauLeft.html.twig"));

        // line 1
        echo "<div class=\"text-center\">
                <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/téléchargement.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" alt=\"Responsive image\">
                <blockquote class=\"blockquote text-center\">
  <p class=\"mb-0 text-white textNameRes\">Clément SAVY</p>
  <cite class=\" textJobRes ColorRed\">Développeur logiciel</cite>

   </blockquote>
</div>

<div class=\"positionTexte\">
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Age :</span> 23 ans</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Date de naissance :</span> 12/04/1995</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Email :</span> Msavy.clement@gmail.com</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Tel :</span> 0635346338</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Diplome :</span> Bac +5 Master MS2I</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Adresse :</span> Lorient 56670</p>
</div>
           ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Bandeaux/BandeauLeft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"text-center\">
                <img src=\"{{ asset('images/téléchargement.png') }}\" class=\"img-fluid rounded-circle\" alt=\"Responsive image\">
                <blockquote class=\"blockquote text-center\">
  <p class=\"mb-0 text-white textNameRes\">Clément SAVY</p>
  <cite class=\" textJobRes ColorRed\">Développeur logiciel</cite>

   </blockquote>
</div>

<div class=\"positionTexte\">
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Age :</span> 23 ans</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Date de naissance :</span> 12/04/1995</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Email :</span> Msavy.clement@gmail.com</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Tel :</span> 0635346338</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Diplome :</span> Bac +5 Master MS2I</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Adresse :</span> Lorient 56670</p>
</div>
           ", "Bandeaux/BandeauLeft.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Bandeaux\\BandeauLeft.html.twig");
    }
}
