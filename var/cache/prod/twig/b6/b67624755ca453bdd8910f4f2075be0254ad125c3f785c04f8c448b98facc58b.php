<?php

/* Bandeaux/BandeauLeft.html.twig */
class __TwigTemplate_e986c315b6f042152670158ec2624ff127bda60801b2ca2c8a38c301a53904b7 extends Twig_Template
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
        // line 1
        echo "<div class=\"text-center\">
                <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photoProfil.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" alt=\"Responsive image\">
                <blockquote class=\"blockquote text-center\">
  <p class=\"mb-0 text-white textNameRes\">Clément SAVY</p>
  <cite class=\" textJobRes ColorRed\">Développeur logiciel</cite>

   </blockquote>
</div>

<div class=\"positionTexte\">
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Age :</span> 23 ans</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Date de naissance :</span> 12/04/1995</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Email :</span>contact@clement-savy.fr</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Tel :</span> 0635346338</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Expérience :</span> 3 ans</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Diplome :</span> Bac +5 Master MS2I</p>
<p class=\"mb-0 text-white  TableInfo textBnadeau\"><span class=\"ColorRed\">Adresse :</span> Lorient 56</p>


<a  class=\"btn btn-primary\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dlcv");
        echo "\">Télécharger mon CV</a>
</div>
           ";
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
        return array (  47 => 20,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Bandeaux/BandeauLeft.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Bandeaux\\BandeauLeft.html.twig");
    }
}
