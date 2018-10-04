<?php

/* Bandeau/BandeauLeft.html.twig */
class __TwigTemplate_ce1ce9fecad027b7e01d00112512bc7cf3a233e07c9a9e77177a7d353cbf3813 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Bandeau/BandeauLeft.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Bandeau.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<div class=\"row\">
  <div class=\"col-2  bandeau\">
  </div>
  <div class=\"col-6 col-sm-3\">
  ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 7
        echo "</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Bandeau/BandeauLeft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  38 => 7,  36 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset('css/Bandeau.css') }}\" rel=\"stylesheet\">
<div class=\"row\">
  <div class=\"col-2  bandeau\">
  </div>
  <div class=\"col-6 col-sm-3\">
  {% block body %}
{% endblock %}</div>
</div>
", "Bandeau/BandeauLeft.html.twig", "C:\\wamp64\\www\\CV\\templates\\Bandeau\\BandeauLeft.html.twig");
    }
}
