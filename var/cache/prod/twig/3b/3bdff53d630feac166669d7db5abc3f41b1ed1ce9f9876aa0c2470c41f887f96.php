<?php

/* Pages/Accueil.html.twig */
class __TwigTemplate_8a5a545d7e5be296d9becd9cc6599e51ac7117eaa5f777af8332f229d48bd798 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("Template/template.html.twig", "Pages/Accueil.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Accueil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"Content text-center\">

<p class=\"h1 mb-0 text-black TitreNom\">Bonjour, je suis <span class=\"ColorRed\">Clément SAVY</span> </p>

<p class=\"h3 mb-0 text-black TitreNom\">Développeur logiciel</p>
<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/téléchargement.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle image\" >
<p <cite class=\" textcitation ColorRed\">3 ans d'expérience en tant que chef de projets et développeur de logiciel métier</cite></p>
</div>
<div class=\"row\">
        <div class=\"col\">
                <a class=\"liens\" href=\"experiences\">
                <div id=\"moncercle\" >
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/experience.png"), "html", null, true);
        echo " \"class=\"imageExperience\" >
                        
                </div>
                <p class=\"h3 mb-0 text-black NomMenu\">Expériences </p>
                </a>
        </div>
        <div class=\"col\">
                <a class=\"liens\" href=\"formations\">
                <div id=\"moncercle\" >
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formation.png"), "html", null, true);
        echo "\" width=\"64\" height=\"64\" class=\"imageComp\" >
                       
                </div>
                <p class=\"h3 mb-0 text-black NomMenu\">Formations</p>
            </a>
        </div>
        <a class=\"liens\" href=\"projets\">
        <div class=\"col\"> <div id=\"moncercle\" >
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/projet.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
                
        </div>
        <p class=\"h3 mb-0 text-black NomMenu\">Projets </p>
    </a>
    </div>
    <a class=\"liens\" href=\"contact\">
        <div class=\"col\"> <div id=\"moncercle\" >
                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/envelope.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
          
        </div>
        <p class=\"h3 mb-0 text-black NomMenu\">Contact </p>
    </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Pages/Accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 45,  87 => 37,  76 => 29,  64 => 20,  54 => 13,  46 => 7,  43 => 6,  36 => 4,  33 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Pages/Accueil.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Accueil.html.twig");
    }
}
