<?php

/* Pages/Contact.html.twig */
class __TwigTemplate_7ec14287dac512e82aab4032df654f678a147e340eedae30be5a9e987bb90e3f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("Template/Template.html.twig", "Pages/Contact.html.twig", 3);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Template/Template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Contact.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 11
            echo "        <div class=\"alert alert-success\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 13
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </div>
    ";
        }
        // line 17
        echo "    
<div id=\"moncercle\" >
<img src=\"";
        // line 19
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
 <div class=\"h5 textContact text-center\" >Mail: <span class=\"ColorRed\">contact@clement-savy.fr</span>  Tel : <span class=\"ColorRed\">0635346338</span></div>    

";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
<div  class=\"FormContact\">
<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Votre nom et prénom</label>
  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "NomPrenom", array()), 'widget');
        echo "
 </div>
 <div class=\"form-group\">
    <label for=\"exampleFormControlTextarea1\">Votre email</label>
   ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "AdresseMail", array()), 'widget');
        echo "
  </div>
<div class=\"form-group\">
    <label for=\"exampleFormControlTextarea1\">Votre méssage</label>
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Message", array()), 'widget');
        echo "
  </div>
   ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "envoyer", array()), 'widget');
        echo "
</form>
</div>

";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
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
        return array (  126 => 51,  119 => 47,  114 => 45,  107 => 41,  100 => 37,  92 => 32,  76 => 19,  72 => 17,  68 => 15,  59 => 13,  55 => 12,  52 => 11,  50 => 10,  47 => 9,  44 => 8,  36 => 5,  33 => 4,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Pages/Contact.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Contact.html.twig");
    }
}
