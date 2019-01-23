<?php

/* Emails/EmailConatct.html.twig */
class __TwigTemplate_58e7b86fc42dfdd8860ef1c7786c19f378770fd0984d5d987e37a21f2dcdb0f2 extends Twig_Template
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
        echo "
<h5>Méssage de : <b>";
        // line 2
        echo twig_escape_filter($this->env, ($context["Name"] ?? null), "html", null, true);
        echo " </b> Email :<b>";
        echo twig_escape_filter($this->env, ($context["Email"] ?? null), "html", null, true);
        echo "</b></h5>
<h5>Méssage : </h5>";
        // line 3
        echo twig_escape_filter($this->env, ($context["Message"] ?? null), "html", null, true);
        echo " 
";
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
        return array (  32 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Emails/EmailConatct.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Emails\\EmailConatct.html.twig");
    }
}
