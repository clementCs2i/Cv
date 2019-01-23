<?php

/* Template/template.html.twig */
class __TwigTemplate_c3888cd74f6f6ce1d592e603ec292ca7b885abf1ed33b28f5c719c9b84702f74 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "            CV Clément SAVY
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 16
    public function block_jquery($context, array $blocks = array())
    {
        // line 17
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery-3.3.1.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 23
    public function block_head($context, array $blocks = array())
    {
        // line 24
        echo "                            
                        ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "                ";
    }

    // line 43
    public function block_foot($context, array $blocks = array())
    {
        // line 44
        echo "                  
  
                ";
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
        return array (  155 => 44,  152 => 43,  148 => 39,  145 => 38,  140 => 24,  137 => 23,  130 => 21,  127 => 20,  120 => 17,  117 => 16,  111 => 13,  107 => 12,  102 => 11,  99 => 10,  94 => 6,  91 => 5,  85 => 47,  83 => 43,  78 => 40,  76 => 38,  70 => 34,  68 => 33,  62 => 29,  60 => 28,  56 => 26,  53 => 23,  51 => 20,  48 => 19,  46 => 16,  43 => 15,  41 => 10,  37 => 8,  35 => 5,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Template/template.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Template\\Template.html.twig");
    }
}
