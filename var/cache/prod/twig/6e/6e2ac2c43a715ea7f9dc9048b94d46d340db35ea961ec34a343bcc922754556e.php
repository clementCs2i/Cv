<?php

/* Pages/Formations.html.twig */
class __TwigTemplate_3bd34b70276a0d13449cce3cd2b14c7dec11a89c82704eeef4ab6c6dd669341d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("Template/Template.html.twig", "Pages/Formations.html.twig", 3);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/formations.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div id=\"moncercle\" >
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formation.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
    </div>
    
    <div  class=\"BlocTitre text-center \">
    
    <div  class=\"avantTitre\">
    </div>
    <p class=\"h1 titre\">Formations</p>
    <div  class=\"ApresTitre \">
    </div>
    </div>

    <div class=\"h5 textContact text-center\" > <span class=\"ColorRed\">MASTER </span>BAC +5</div>    
    <div class=\"ContenuFormations\"> 
    <div class=\"col\"> 
            <div class=\"row\">
                    <div class=\"ContenuFormations\"> 
                            <span class=\"h5 ColorRed\">  2016 – 2018</span>
                            <a class=\"liens\" href=\"https://www.3il-alliance.fr/ms2i/\" target=\"_blank\">
                            <p class=\"h5 mb-0 text-black TitreNom\"> MASTER manager des systémes d’information et d'infrastructures (MS2I) CCI LORIENT </p>
                            </a>
                            <p class=\"h6 mb-0 text-black TitreNom\"> Spécialité Développement</p>
                    </div>
            </div>
            <div class=\"row\">
                    <div class=\"ContenuFormations\"> 
                            <span class=\"h5 ColorRed\">  2015 – 2016</span>
                            <a class=\"liens\" href=\"https://www.3il-alliance.fr/csi/\" target=\"_blank\">
                            <p class=\"h5 mb-0 text-black TitreNom\"> LICENSE PRO concepteur de systémes d'information (CS2I) CCI LORIENT</p>
                            </a>
                            <p class=\"h6 mb-0 text-black TitreNom\"> Spécialité Développement</p>
                    </div>
            </div>
            <div class=\"row\">
                    <div class=\"ContenuFormations\"> 
                            <span class=\"h5 ColorRed\">  2013 – 2015</span>
                            <a class=\"liens\" href=\"http://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/BTS-Services-informatiques-aux-organisations-option-B-solutions-logicielles-et-applications-metiers/\" target=\"_blank\">
                            <p class=\"h5 mb-0 text-black TitreNom\"> BTS service d'information aux organisations (SIO) Notre dame de la paix PLOEMEUR</p>
                            </a>
                            <p class=\"h6 mb-0 text-black TitreNom\"> Spécialité Solutions Logicielles et Applications Métier (SLAM)</p>
                    </div>
            </div>
            <div class=\"row\">
                    <div class=\"ContenuFormations\"> 
                            <span class=\"h5 ColorRed\">  2010 – 2013</span>
                            <a class=\"liens\" href=\"http://lycee-colbert-lorient.com/index.php?cat=1&pageid=217&cursub=12\" target=\"_blank\">
                            <p class=\"h5 mb-0 text-black TitreNom\"> BAC sciences et technologies de l'industrie et du développement durable (STI2D) mention assez bien lycée Colbert Lorient </p>
                            </a>
                            <p class=\"h6 mb-0 text-black TitreNom\"> Option Innovations technologiques et Eco Conception (ITEC)</p>
                    </div>
            </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Pages/Formations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 8,  43 => 7,  36 => 5,  33 => 4,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Pages/Formations.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Formations.html.twig");
    }
}
