<?php

/* Pages/projets.html.twig */
class __TwigTemplate_27e334af47c56b08d2b6a065ab012ede0e188a6667621e406e059cc8d29ff5ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("Template/template.html.twig", "Pages/projets.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pages/projets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Projets.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <p class=\"h6 mb-0 text-black TitreNom\">  Gére l'achat des matiéres premiére, la réalisation de devis, la production, la facturation, les commades fournisseurs, les bons de livraison, la réalisation de documents comptables  30 000 lignes de codes et plus de 80 fenétres </p>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                              
                                <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel de caisse pour les restaurants avec application tablette android et IOS </p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Spécialisé dans la prise de commande à la fois sur un TPV tactile que sur une tablette android ou IOS ce logicel permet également de gérer les reservations clients à l'aide d'un plan de salle, d'imprimer les commandes clients directement dans la cuissine ou le bar ainsi que l'encaissemnt des clients ce qui permet la réalisation de doceumnts comptable 
                                          </p>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                                <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel de gestion des temps de travail </p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Logiciel permetant aux employés d'une entreprise de saisir leurs temps de travail à l'entreprise, leurs de trajet, leurs de travail sur chantier sous le controle du chef de chantier, ce logiceil à pour finalité le décompte des heures travaillées </p>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                           
                                <p class=\"h5 mb-0 text-black TitreNom\"> Logiciels de devis et facturations</p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Ce logiciel permet de réaliser des devis et des factures suivant une liste de produit enregistrer, elle permet egalement un décompte des stocks  </p>
                        </div>
                </div>
                <div class=\"row\">
                                <div class=\"ContenuUnProjet\"> 
                                      
                                        <p class=\"h5 mb-0 text-black TitreNom\"> Logiciels de gestion de comité d'établissement</p>
                                        <p class=\"h6 mb-0 text-black TitreNom\"> Logiciel qui permet de gérer l'activité d'un comité d'établissement, gestion des adhérants suivant leur qualification, gestion des chéque vacances ainsi que l'ensemble des avantages distribué par un CE. Réalisatioon de documents comptables  </p>
                                </div>
                </div>
                <div class=\"row\">
                                <div class=\"ContenuUnProjet\"> 
                                     
                                        <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel pour une entreprise de cordage de raquette</p>
                                        <p class=\"h6 mb-0 text-black TitreNom\"> logiciel réalisé pour une entreprise réalisant des coradeges de raquette, il permet de gérer les differents travaux à réaliser sur les raquettes des clients. Une focntion permet de prévenir le client par SMS une fois le travail terminé, Le logiciel inclu egalement la gestion d'une carte de fidélité</p>
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
                                        <p class=\"h6 mb-0 text-black TitreNom\"> Plugin réalisé dans le but de tester un webservice consomé par des terminaux mobile tels que android et IOS. ce plugin permet suite à la mise à jours d'un webservie de tester le bon fonctionnement de ce dernier et de s'assurer qu'aucun effet de bord n'est causé une panne  </p>
                                </div>
                                
                </div>
        </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  61 => 7,  55 => 6,  45 => 4,  39 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'Template/template.html.twig' %}
{% block head %}
 <link href=\"{{ asset('css/Projets.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}


<div id=\"moncercle\" >
        <img src=\"{{ asset('images/projet.png') }} \"class=\"imageContact\" >
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
                                <p class=\"h6 mb-0 text-black TitreNom\">  Gére l'achat des matiéres premiére, la réalisation de devis, la production, la facturation, les commades fournisseurs, les bons de livraison, la réalisation de documents comptables  30 000 lignes de codes et plus de 80 fenétres </p>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                              
                                <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel de caisse pour les restaurants avec application tablette android et IOS </p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Spécialisé dans la prise de commande à la fois sur un TPV tactile que sur une tablette android ou IOS ce logicel permet également de gérer les reservations clients à l'aide d'un plan de salle, d'imprimer les commandes clients directement dans la cuissine ou le bar ainsi que l'encaissemnt des clients ce qui permet la réalisation de doceumnts comptable 
                                          </p>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                                <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel de gestion des temps de travail </p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Logiciel permetant aux employés d'une entreprise de saisir leurs temps de travail à l'entreprise, leurs de trajet, leurs de travail sur chantier sous le controle du chef de chantier, ce logiceil à pour finalité le décompte des heures travaillées </p>
                        </div>
                </div>
                <div class=\"row\">
                        <div class=\"ContenuUnProjet\"> 
                           
                                <p class=\"h5 mb-0 text-black TitreNom\"> Logiciels de devis et facturations</p>
                                <p class=\"h6 mb-0 text-black TitreNom\"> Ce logiciel permet de réaliser des devis et des factures suivant une liste de produit enregistrer, elle permet egalement un décompte des stocks  </p>
                        </div>
                </div>
                <div class=\"row\">
                                <div class=\"ContenuUnProjet\"> 
                                      
                                        <p class=\"h5 mb-0 text-black TitreNom\"> Logiciels de gestion de comité d'établissement</p>
                                        <p class=\"h6 mb-0 text-black TitreNom\"> Logiciel qui permet de gérer l'activité d'un comité d'établissement, gestion des adhérants suivant leur qualification, gestion des chéque vacances ainsi que l'ensemble des avantages distribué par un CE. Réalisatioon de documents comptables  </p>
                                </div>
                </div>
                <div class=\"row\">
                                <div class=\"ContenuUnProjet\"> 
                                     
                                        <p class=\"h5 mb-0 text-black TitreNom\"> Logiciel pour une entreprise de cordage de raquette</p>
                                        <p class=\"h6 mb-0 text-black TitreNom\"> logiciel réalisé pour une entreprise réalisant des coradeges de raquette, il permet de gérer les differents travaux à réaliser sur les raquettes des clients. Une focntion permet de prévenir le client par SMS une fois le travail terminé, Le logiciel inclu egalement la gestion d'une carte de fidélité</p>
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
                                        <p class=\"h6 mb-0 text-black TitreNom\"> Plugin réalisé dans le but de tester un webservice consomé par des terminaux mobile tels que android et IOS. ce plugin permet suite à la mise à jours d'un webservie de tester le bon fonctionnement de ce dernier et de s'assurer qu'aucun effet de bord n'est causé une panne  </p>
                                </div>
                                
                </div>
        </div>
        </div>
{% endblock %}
", "Pages/projets.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Pages\\Projets.html.twig");
    }
}
