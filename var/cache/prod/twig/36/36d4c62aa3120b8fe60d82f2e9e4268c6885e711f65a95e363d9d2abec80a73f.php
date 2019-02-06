<?php

/* Pages/Projets.html.twig */
class __TwigTemplate_febba0c77d03563390062638847f25d4eaad992a234595f9c2a524326f5611fa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("Template/Template.html.twig", "Pages/Projets.html.twig", 2);
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Projets.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "

<div id=\"moncercle\" >
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/projet.png"), "html", null, true);
        echo " \"class=\"imageContact\" >
        </div>       
        <div  class=\"BlocTitre text-center \">      
        <div  class=\"avantTitre\">
        </div>
        <p class=\"h1 titre\">Projets</p>
        <div  class=\"ApresTitre \">
        </div>
        </div>
        <div class=\"h5 textContact text-center\" > <span class=\"ColorRed\">Projets </span> que j'ai réalisés dans un cadre proféssionnel</div>    

        <div class=\"ContenuProjets\"> 
        <div class=\"col\"> 
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                                <span class=\"h5 ColorRed\">  WINDEV</span>
                                <p class=\"h5 mb-0 text-black TitreNom\"> Gestion de productions et de coûts </p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Gère l'achat des matières première, la réalisation de devis, la production, la facturation, les commandes fournisseurs, les bons de livraison, la réalisation de documents comptable </p>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                              
                                <p class=\"h5 mb-0 text-black TitreNom\">Logiciel de caisse pour les restaurants avec application tablette Android et IOS </p>
                                <p class=\"h6 mb-0 text-black TitreNom\">Spécialisé dans la prise de commande aussi bien sûr un TPV tactile que sur une tablette Android ou IOS ce logiciel permet également de gérer les réservations clients à l'aide d'un plan de salle, d'imprimer les commandes clients directement dans la cuisine ou le bar ainsi que l'encaissement des clients ce qui permet la réalisation de doceumnts comptable 
                                          </p>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                                <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel de gestion des temps de travail </p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Logiciel permettant aux employés d'une entreprise de saisir leurs temps de travail à l'entreprise, leurs temps de trajet, leurs temps de travail sur le chantier sous le contrôle du chef de chantier, ce logiciel a pour finalité le décompte des heures travaillées</p>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                           
                                <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel de devis et facturations</p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Ce logiciel permet de réaliser des devis et des factures suivant une liste de produit enregistrer, elle permet également un décompte des stocks  </p>
                        </div>
                </div>
                <div class=\"row\">
                                <div class=\"ContenuUnProjet\"> 
                                      
                                        <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel de gestion de comité d'établissement</p>
                                        <p class=\"h6 mb-0 text-black TitreNom\"> Logiciel qui permet de gérer l'activité d'un comité d'établissement, gestion des adhérents suivant leur qualification, gestion des chèques vacances ainsi que l'ensemble des avantages distribué par un CE. Réalisations de documents comptable  </p>
                                </div>
                </div>
                <div class=\"row\">
                                <div class=\"ContenuUnProjet\"> 
                                     
                                        <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel pour une entreprise de cordage de raquette</p>
                                        <p class=\"h6 mb-0 text-black TitreNom\">Logiciel réalisé pour une entreprise réalisant des cordages de raquette, il permet de gérer les différents travaux à réaliser sur les raquettes des clients. Une fonction permet de prévenir le client par SMS une fois le travail terminé, le logiciel inclut également la gestion d'une carte de fidélité</p>
                                </div>
                                
                </div>
         
            
                <div class=\"row\">
                                <div class=\"ContenuUnProjet\"> 
                                        <span class=\"h5 ColorRed\">  symfony 4</span>
                                        <p class=\"h5 mb-0 text-black TitreNom\"> Site web CV </p>
                                       
                                </div>
                                
                </div>
                <div class=\"row\">
                                <div class=\"ContenuUnProjet\"> 
                                        <span class=\"h5 ColorRed\"> Drupal 7 PHP</span>
                                        <p class=\"h5 mb-0 text-black TitreNom\"> Plugin de test unitaire pour un web service </p>
                                        <p class=\"h6 mb-0 text-black TitreNom\"> Plugin réalisé dans le but de tester un web service consommé par des terminaux mobile tels qu'Android et IOS. Ce plugin permet suite à la mise à jour d'un web service de tester le bon fonctionnement de ce dernier et de s'assurer qu'aucun effet de bord n'est causé de pannes </p>
                                </div>
                                
                </div>
        </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "Pages/Projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 7,  43 => 6,  36 => 4,  33 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Pages/Projets.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Projets.html.twig");
    }
}
