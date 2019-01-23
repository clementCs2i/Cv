<?php

/* NavBar/NavBarTop.html.twig */
class __TwigTemplate_089fbe3f6331386b5dc1a897654b00cb12f478b18e6708f5ad7202c146e9dc7a extends Twig_Template
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

        

<nav class=\"navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2\">
    </div>
    <div class=\"mx-auto order-0\">
     <a class=\"navbar-brand mb-0 h1 text-white\" >CLÉMENT <span class=\"ColorRed\">SAVY</span></a>    
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".dual-collapse2\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
    </div>
    <div class=\"navbar-collapse collapse w-100 order-3 dual-collapse2\">
        <ul class=\"navbar-nav ml-auto\">
         <li class=\"nav-item \">
             <a class=\"nav-link item1\" href=\"/\">Accueil </a>
          </li>
        <li class=\"nav-item \">
        <a class=\"nav-link item2\" href=\"experiences\">Expériences</a>
      </li>
      </li>
        <li class=\"nav-item \">
        <a class=\"nav-link item3\" href=\"formations\">Formations</a>
      </li>
      <li class=\"nav-item \">
        <a class=\"nav-link item4\" href=\"projets\">Projets</a>
      </li>
      <li class=\"nav-item \">
        <a class=\"nav-link item5\"  href=\"contact\">Contact</a>
      </li>
     
        </ul>
    </div>
</nav>






";
    }

    public function getTemplateName()
    {
        return "NavBar/NavBarTop.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NavBar/NavBarTop.html.twig", "C:\\Users\\Clément\\Cv\\templates\\NavBar\\NavBarTop.html.twig");
    }
}
