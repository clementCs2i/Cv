<?php

/* Pages/Experiences.html.twig */
class __TwigTemplate_f2c22edb139cf486e60e31dfa1d8c816888ae62250e351fba62a004aa0207776 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("Template/template.html.twig", "Pages/Experiences.html.twig", 3);
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

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/experiences.css"), "html", null, true);
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
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/experience.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
        </div>
        
        <div  class=\"BlocTitre text-center \">
        
        <div  class=\"avantTitre\">
        </div>
        <p class=\"h1 titre\">Expériences professionnels</p>
        <div  class=\"ApresTitre \">
        </div>
        </div>

        <div class=\"h5 textContact text-center\" > <span class=\"ColorRed\">3 ANS </span>d'expériences</div>    

        <div class=\"contenuExperiences\">

        <div class=\"row\">
                <div class=\"col\"> 
                     <div class=\"contenuUneExperiences\">
                         <p class=\"h5 mb-0 text-black TitreNom\"> Chef de projet et développeur logiciel</p>
                         <span class=\" h5 ColorRed\">  2016 – 2018</span>
                        <p class=\"h6 mb-0 text-black TitreNom\"> Alternance de deux ans, Master (MS2I) avec l'entreprise ITR </p>
                        <p class=\"h6 mb-0 text-black TitreNom\">Durant ces deux ans, mon travail a consisté à la prise en charge et la réalisation de logiciel métier pour des PME désirant acquérir une solution spécifique et adapté à leurs besoins. Pour mener à bien ces projets, j'ai été positionné comme chef de projet technique, j'avais comme responsabilité la réalisation de cahier des charges ainsi que de cahiers de recette utilisateur, pour ce faire j'ai été amené à réaliser diverses réunions clientes, dans un premier temps pour formaliser leurs besoins et attentes et dans un deuxième temps m'assurer que les fonctionnalités développées correspondes parfaitement à leurs besoins. Mon travail était également de piloter techniquement la réalisation des projets, j'avais pour responsabilité l'équipe de développement composée de deux à trois personnes, mon travail était d'encadrer le développement des différentes fonctionnalités et de m'assurer du bon fonctionnement des applications suite aux phases de développements et de tests          </p>
                     </div>
                </div>

                <div class=\"col\">
                        <div class=\"contenuUneExperiences\">
                                <p class=\"h5 mb-0 text-black TitreNom\"> Développeur logiciel</p>
                                <span class=\"h5 ColorRed\">  2015 – 2016</span>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Alternance d'un an, License (CS2I) avec l'entreprise ITR </p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Durant cette première année de travail chez ITR mon travail à consisté à maintenir et à développer des applications métiers sous l'AGL Windev, je suis intervenu sur divers projets logiciels pour réaliser des tâche comme la réalisation d'interfaces utilisateur, conception de base de données, réalisation de maquettes utilisateur, conception de tests unitaire et développement du logiciel en général     </p>
                        </div>
                </div>
                    
                <div class=\"col\">
                        <div class=\"contenuUneExperiences\">
                                <p class=\"h5 mb-0 text-black TitreNom\">Développeur WEB</p>
                                <span class=\"h5 ColorRed\">  2015</span>
                               <p class=\"h6 mb-0 text-black TitreNom\"> Satge de deux mois, BTS  (SIO) avec l'entreprise URBANS </p>
                               <p class=\"h6 mb-0 text-black TitreNom\"> Pendant ce stage, j'ai pu découvrir le fonctionnement d'une entreprise de développement d'application, ma principale mission fut de réaliser un plugin de test unitaire sous le CMS Drupal 7 en PHP afin de vérifier le bon fonctionnement de divers web services utilisés par des applications mobiles tels que Android et IOS  </p>

                            </div>
                </div>
            
        </div>
        </div>



";
    }

    public function getTemplateName()
    {
        return "Pages/Experiences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  46 => 8,  43 => 7,  36 => 5,  33 => 4,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Pages/Experiences.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Experiences.html.twig");
    }
}