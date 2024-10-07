<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_ca561ac06c3f09e08e8571673ab93b26 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Les perles d'Egypte";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        yield "        <div class=\"imageAccueil\">

        ";
        // line 8
        yield from         $this->loadTemplate("includes/header.html.twig", "home/index.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "
        
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        yield "

<div class=\"texteAccueil\">

        <h1> Bienvenue sur les perles d'Egypte </h1> 


        <div class=\"textes-conteneurs\">
                <div class=\"texte-accueil\">

                        <img src=\"https://images.unsplash.com/photo-1489493512598-d08130f49bea?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGVneXB0fGVufDB8MHwwfHx8MA%3D%3D\" alt=\"Icône d'un pharaon\"/>


                        <p> Oserez-vous pénétrer les merveilles d'une civilisation qui, des millénaires plus tard, continue de surprendre notre imaginaire ? Ici, sur Les perles d’Egypte, chaque pierre, chaque hiéroglyphe, chaque découverte résonne d'une histoire oubliée, d'un secret enfoui dans les sables du temps.

                        </p>
                </div>
                <div class=\"texte-accueil\">


                                <p>L'Égypte ancienne ne se révèle qu'à ceux qui savent écouter.  <br>Ce lieu est plus qu'un simple site d'actualités. C'est une porte vers l'inconnu, une invitation à vous perdre dans les dédales d'une culture millénaire. Ici, les dernières découvertes archéologiques côtoient les légendes, et chaque article est une clé pour déverrouiller un fragment du passé. 
                                </p>
                                <img src=\"https://images.unsplash.com/photo-1489493512598-d08130f49bea?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGVneXB0fGVufDB8MHwwfHx8MA%3D%3D\" alt=\"Icône d'un pharaon\"/>

                </div>
                <div class=\"texte-accueil\">
                        <p>
                        Découvrez aussi les évènements qui se déroulent près de chez vous.
                        Entrez, explorez, et laissez-vous charmer par les échos d'une Égypte antique que vous n'avez jamais connue... jusqu'à aujourd'hui.
                        </p>
                        <img src=\"https://images.unsplash.com/photo-1489493512598-d08130f49bea?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGVneXB0fGVufDB8MHwwfHx8MA%3D%3D\" alt=\"Icône d'un pharaon\"/>

                </div>
        </div>
                <h2 class=\"titreCategories\"> Catégories d'articles </h2> 
                <hr class=\"largeur\"/>


</div>
<div class=\"categories-container\">
        <div class=\"categorie1\">
                <img src=\"images/iconePyramides.png\" alt=\"Pyramides avec soleil\">
                <button>Actualités</button>
        </div>
    
        <div class=\"categorie2\">
                <img src=\"images/iconePharaon.png\" alt=\"Icône d'un pharaon\">
                <button>Personnages</button>

        </div>

        <div class=\"categorie3\">
                <img src=\"images/iconeFemme.png\" alt=\"Icône d'une femme égyptienne\">
                <button>Vie quotidienne</button>

        </div>
</div>

<div>
        <h3 class=\"titreEvènements\"> Nos prochains évènements </h3> 
        <hr class=\"largeur1\"/>


        <div class=\"actus\">
                <div class=\"actualité1\"> 

                        <p class=\"event-title\">Conférence sur le thème \"Les dernières tombes découvertes\"<p>
                        <p class=\"event-date\">Le 25 septembre 2024  </p> 

                </div>
        </div>   

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  113 => 15,  103 => 14,  92 => 9,  90 => 8,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les perles d'Egypte{% endblock %}

{% block header %}
        <div class=\"imageAccueil\">

        {% include('includes/header.html.twig') %}

        
        </div>
{% endblock %}

{% block body %}


<div class=\"texteAccueil\">

        <h1> Bienvenue sur les perles d'Egypte </h1> 


        <div class=\"textes-conteneurs\">
                <div class=\"texte-accueil\">

                        <img src=\"https://images.unsplash.com/photo-1489493512598-d08130f49bea?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGVneXB0fGVufDB8MHwwfHx8MA%3D%3D\" alt=\"Icône d'un pharaon\"/>


                        <p> Oserez-vous pénétrer les merveilles d'une civilisation qui, des millénaires plus tard, continue de surprendre notre imaginaire ? Ici, sur Les perles d’Egypte, chaque pierre, chaque hiéroglyphe, chaque découverte résonne d'une histoire oubliée, d'un secret enfoui dans les sables du temps.

                        </p>
                </div>
                <div class=\"texte-accueil\">


                                <p>L'Égypte ancienne ne se révèle qu'à ceux qui savent écouter.  <br>Ce lieu est plus qu'un simple site d'actualités. C'est une porte vers l'inconnu, une invitation à vous perdre dans les dédales d'une culture millénaire. Ici, les dernières découvertes archéologiques côtoient les légendes, et chaque article est une clé pour déverrouiller un fragment du passé. 
                                </p>
                                <img src=\"https://images.unsplash.com/photo-1489493512598-d08130f49bea?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGVneXB0fGVufDB8MHwwfHx8MA%3D%3D\" alt=\"Icône d'un pharaon\"/>

                </div>
                <div class=\"texte-accueil\">
                        <p>
                        Découvrez aussi les évènements qui se déroulent près de chez vous.
                        Entrez, explorez, et laissez-vous charmer par les échos d'une Égypte antique que vous n'avez jamais connue... jusqu'à aujourd'hui.
                        </p>
                        <img src=\"https://images.unsplash.com/photo-1489493512598-d08130f49bea?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGVneXB0fGVufDB8MHwwfHx8MA%3D%3D\" alt=\"Icône d'un pharaon\"/>

                </div>
        </div>
                <h2 class=\"titreCategories\"> Catégories d'articles </h2> 
                <hr class=\"largeur\"/>


</div>
<div class=\"categories-container\">
        <div class=\"categorie1\">
                <img src=\"images/iconePyramides.png\" alt=\"Pyramides avec soleil\">
                <button>Actualités</button>
        </div>
    
        <div class=\"categorie2\">
                <img src=\"images/iconePharaon.png\" alt=\"Icône d'un pharaon\">
                <button>Personnages</button>

        </div>

        <div class=\"categorie3\">
                <img src=\"images/iconeFemme.png\" alt=\"Icône d'une femme égyptienne\">
                <button>Vie quotidienne</button>

        </div>
</div>

<div>
        <h3 class=\"titreEvènements\"> Nos prochains évènements </h3> 
        <hr class=\"largeur1\"/>


        <div class=\"actus\">
                <div class=\"actualité1\"> 

                        <p class=\"event-title\">Conférence sur le thème \"Les dernières tombes découvertes\"<p>
                        <p class=\"event-date\">Le 25 septembre 2024  </p> 

                </div>
        </div>   

</div>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\Formation Dev web\\Briefs\\Projet Perles d'Egypte\\LesperlesdEgypte\\PROD\\templates\\home\\index.html.twig");
    }
}
