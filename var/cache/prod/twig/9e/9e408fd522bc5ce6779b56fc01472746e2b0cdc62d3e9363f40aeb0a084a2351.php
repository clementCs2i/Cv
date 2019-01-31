<?php

/* Template/Template.html.twig */
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
        // line 16
        echo "
         ";
        // line 17
        $this->displayBlock('jquery', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"images/iconCv.png\" />
                        ";
        // line 25
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "        </head>
        <body>
            ";
        // line 30
        $this->loadTemplate("NavBar/NavBarTop.html.twig", "Template/Template.html.twig", 30)->display($context);
        // line 31
        echo "    
        <div class=\"rowTemplate\">
            <div class=\"col-4 col-sm-3 col-lg-2 col-xl-2 fond\">
                        
                 ";
        // line 35
        $this->loadTemplate("Bandeaux/BandeauLeft.html.twig", "Template/Template.html.twig", 35)->display($context);
        // line 36
        echo "   
            </div>      
                
             <div class=\"col-8 col-sm-9 col-lg-10 col-xl-10 Contents\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "             </div>
        </div>   
        <footer id=\"footer\">
                ";
        // line 45
        $this->displayBlock('foot', $context, $blocks);
        // line 49
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
        echo "       
          <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"bootstrap-css\">
          <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/NavBar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Bandeau.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 17
    public function block_jquery($context, array $blocks = array())
    {
        // line 18
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/jquery-3.3.1.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 25
    public function block_head($context, array $blocks = array())
    {
        // line 26
        echo "          
                        ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "                ";
    }

    // line 45
    public function block_foot($context, array $blocks = array())
    {
        // line 46
        echo "                  
  
                ";
    }

    public function getTemplateName()
    {
        return "Template/Template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 46,  156 => 45,  152 => 41,  149 => 40,  144 => 26,  141 => 25,  134 => 22,  131 => 21,  124 => 18,  121 => 17,  115 => 14,  111 => 13,  107 => 12,  104 => 11,  101 => 10,  96 => 6,  93 => 5,  87 => 49,  85 => 45,  80 => 42,  78 => 40,  72 => 36,  70 => 35,  64 => 31,  62 => 30,  58 => 28,  56 => 25,  53 => 24,  51 => 21,  48 => 20,  46 => 17,  43 => 16,  41 => 10,  37 => 8,  35 => 5,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Template/Template.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Template\\Template.html.twig");
    }
}
