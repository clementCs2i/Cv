<?php

/* Emails/EmailConatct.html.twig */
class __TwigTemplate_3e0bac0bc8c133770ead9367210ea8f6b46f42262aed17ec76c233d88d8326ca extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/EmailConatct.html.twig"));

        // line 2
        echo "
<h5>Méssage de : <b>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["Name"]) || array_key_exists("Name", $context) ? $context["Name"] : (function () { throw new Twig_Error_Runtime('Variable "Name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " </b> Email :<b>";
        echo twig_escape_filter($this->env, (isset($context["Email"]) || array_key_exists("Email", $context) ? $context["Email"] : (function () { throw new Twig_Error_Runtime('Variable "Email" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</b></h5>
<h5>Méssage : </h5>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["Message"]) || array_key_exists("Message", $context) ? $context["Message"] : (function () { throw new Twig_Error_Runtime('Variable "Message" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Emails/EmailConatct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/emails/registration.html.twig #}

<h5>Méssage de : <b>{{ Name }} </b> Email :<b>{{ Email }}</b></h5>
<h5>Méssage : </h5>{{ Message }} 
", "Emails/EmailConatct.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Emails\\EmailConatct.html.twig");
    }
}
