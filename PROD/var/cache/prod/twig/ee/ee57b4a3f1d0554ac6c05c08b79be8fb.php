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

/* article/index.html.twig */
class __TwigTemplate_6267352232149bd9b23d5fdd2717311d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        yield "Articles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    

<div class=\"articles\">
    <h1>Articles</h1>
</div>

<div class=\"categories-container\">
    <div class=\"categorieArticles\">
        <img src=\"images/iconePyramides.png\" alt=\"Pyramides avec soleil\">
        <button>Actualités</button>
    </div>
    <div class=\"contenaireCard\">
       
        ";
        // line 20
        $context["hasArticles"] = false;
        // line 21
        yield "
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23) == "Actualités")) {
                // line 24
                yield "                ";
                $context["hasArticles"] = true;
                // line 25
                yield "                <div class=\"actualité1 p img\"> 
                    <p class=\"titreArticle\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 26), "html", null, true);
                yield "</p>
                    <p class=\"date\">";
                // line 27
                ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Date", [], "any", false, false, false, 27)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Date", [], "any", false, false, false, 27), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
                yield "</p> 
                    <p class=\"event-resume\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Resume", [], "any", false, false, false, 28), "html", null, true);
                yield "</p>
                    <p class=\"event-contenu\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Contenu", [], "any", false, false, false, 29), "html", null, true);
                yield "</p>
                    <p class=\"event-validation\">";
                // line 30
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Validation", [], "any", false, false, false, 30)) ? ("Yes") : ("No"));
                yield "</p>
                    <p class=\"categorie\">Catégorie : ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
                yield "</p> 
                    <div class=\"button-group\">
                        <a class=\"bouton fondBouton\" href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\">Voir</a>
                        <a class=\"bouton fondBouton\" href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                yield "\">Modifier</a>
                        <a class=\"bouton fondBouton\" href=\"";
                // line 35
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
                yield "\">Nouvel article</a>
                    </div>
                </div>
            ";
            }
            // line 39
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
        ";
        // line 41
        if ( !(isset($context["hasArticles"]) || array_key_exists("hasArticles", $context) ? $context["hasArticles"] : (function () { throw new RuntimeError('Variable "hasArticles" does not exist.', 41, $this->source); })())) {
            // line 42
            yield "            <div class=\"actus\">
                <p>Pas d'article</p>
            </div>
            <div class=\"button-group\">
                <a class=\"bouton fondBouton\" href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
            yield "\">Nouvel article</a>
            </div>
        ";
        }
        // line 49
        yield "    </div>

    <div class=\"categorieArticles\">
        <img src=\"images/iconePharaon.png\" alt=\"Icône d'un pharaon\">
        <button>Personnages</button>
    </div>
    <div class=\"contenaireCard\">
       
        ";
        // line 57
        $context["hasArticles"] = false;
        // line 58
        yield "
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 60
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60) == "Personnages")) {
                // line 61
                yield "                ";
                $context["hasArticles"] = true;
                // line 62
                yield "                <div class=\"actualité1 p img\"> 
                    <p class=\"titreArticle\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 63), "html", null, true);
                yield "</p>
                    <p class=\"date\">";
                // line 64
                ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Date", [], "any", false, false, false, 64)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Date", [], "any", false, false, false, 64), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
                yield "</p> 
                    <p class=\"event-resume\">";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Resume", [], "any", false, false, false, 65), "html", null, true);
                yield "</p>
                    <p class=\"event-contenu\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Contenu", [], "any", false, false, false, 66), "html", null, true);
                yield "</p>
                    <p class=\"categorie\">Catégorie : ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 67), "nom", [], "any", false, false, false, 67), "html", null, true);
                yield "</p> 
                    <div class=\"button-group\">
                        <a class=\"bouton fondBouton\" href=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield "\">Voir</a>
                        <a class=\"bouton fondBouton\" href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\">Modifier</a>
                        <a class=\"bouton fondBouton\" href=\"";
                // line 71
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
                yield "\">Nouvel article</a>
                    </div>
                </div>
            ";
            }
            // line 75
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "
        ";
        // line 77
        if ( !(isset($context["hasArticles"]) || array_key_exists("hasArticles", $context) ? $context["hasArticles"] : (function () { throw new RuntimeError('Variable "hasArticles" does not exist.', 77, $this->source); })())) {
            // line 78
            yield "            <div class=\"actus\">
                <p>Pas d'article</p>
            </div>
            <div class=\"button-group\">
                <a class=\"bouton fondBouton\" href=\"";
            // line 82
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
            yield "\">Nouvel article</a>
            </div>
        ";
        }
        // line 85
        yield "    </div>

    <div class=\"categorieArticles\">
        <img src=\"images/iconeFemme.png\" alt=\"Icône d'une femme égyptienne\">
        <button>Vie quotidienne</button>
    </div>
    <div class=\"contenaireCard\">
       
        ";
        // line 93
        $context["hasArticles"] = false;
        // line 94
        yield "
        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 96
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 96), "nom", [], "any", false, false, false, 96) == "Vie quotidienne")) {
                // line 97
                yield "                ";
                $context["hasArticles"] = true;
                // line 98
                yield "                <div class=\"actualité1 p img\"> 
                    <p class=\"titreArticle\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 99), "html", null, true);
                yield "</p>
                    <p class=\"date\">";
                // line 100
                ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Date", [], "any", false, false, false, 100)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Date", [], "any", false, false, false, 100), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
                yield "</p> 
                    <p class=\"event-resume\">";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Resume", [], "any", false, false, false, 101), "html", null, true);
                yield "</p>
                    <p class=\"event-contenu\">";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Contenu", [], "any", false, false, false, 102), "html", null, true);
                yield "</p>
                    <p class=\"event-validation\">";
                // line 103
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "Validation", [], "any", false, false, false, 103)) ? ("Oui") : ("Non"));
                yield "</p>
                    <p class=\"categorie\">Catégorie : ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 104), "nom", [], "any", false, false, false, 104), "html", null, true);
                yield "</p> 
                    <div class=\"button-group\">
                        <a class=\"bouton fondBouton\" href=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                yield "\">Voir</a>
                        <a class=\"bouton fondBouton\" href=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                yield "\">Modifier</a>
                        <a class=\"bouton fondBouton\" href=\"";
                // line 108
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
                yield "\">Nouvel article</a>
                    </div>
                </div>
            ";
            }
            // line 112
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "
        ";
        // line 114
        if ( !(isset($context["hasArticles"]) || array_key_exists("hasArticles", $context) ? $context["hasArticles"] : (function () { throw new RuntimeError('Variable "hasArticles" does not exist.', 114, $this->source); })())) {
            // line 115
            yield "            <div class=\"actus\">
                <p>Pas d'article</p>
            </div>
            <div class=\"button-group\">
                <a class=\"bouton fondBouton\" href=\"";
            // line 119
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
            yield "\">Nouvel article</a>
            </div>
        ";
        }
        // line 122
        yield "    </div>
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
        return "article/index.html.twig";
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
        return array (  360 => 122,  354 => 119,  348 => 115,  346 => 114,  343 => 113,  337 => 112,  330 => 108,  326 => 107,  322 => 106,  317 => 104,  313 => 103,  309 => 102,  305 => 101,  301 => 100,  297 => 99,  294 => 98,  291 => 97,  288 => 96,  284 => 95,  281 => 94,  279 => 93,  269 => 85,  263 => 82,  257 => 78,  255 => 77,  252 => 76,  246 => 75,  239 => 71,  235 => 70,  231 => 69,  226 => 67,  222 => 66,  218 => 65,  214 => 64,  210 => 63,  207 => 62,  204 => 61,  201 => 60,  197 => 59,  194 => 58,  192 => 57,  182 => 49,  176 => 46,  170 => 42,  168 => 41,  165 => 40,  159 => 39,  152 => 35,  148 => 34,  144 => 33,  139 => 31,  135 => 30,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  116 => 25,  113 => 24,  110 => 23,  106 => 22,  103 => 21,  101 => 20,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Articles{% endblock %}

{% block body %}

    

<div class=\"articles\">
    <h1>Articles</h1>
</div>

<div class=\"categories-container\">
    <div class=\"categorieArticles\">
        <img src=\"images/iconePyramides.png\" alt=\"Pyramides avec soleil\">
        <button>Actualités</button>
    </div>
    <div class=\"contenaireCard\">
       
        {% set hasArticles = false %}

        {% for article in articles %}
            {% if article.categorie.nom == 'Actualités' %}
                {% set hasArticles = true %}
                <div class=\"actualité1 p img\"> 
                    <p class=\"titreArticle\">{{ article.Titre }}</p>
                    <p class=\"date\">{{ article.Date ? article.Date|date('Y-m-d H:i:s') : '' }}</p> 
                    <p class=\"event-resume\">{{ article.Resume }}</p>
                    <p class=\"event-contenu\">{{ article.Contenu }}</p>
                    <p class=\"event-validation\">{{ article.Validation ? 'Yes' : 'No' }}</p>
                    <p class=\"categorie\">Catégorie : {{ article.categorie.nom }}</p> 
                    <div class=\"button-group\">
                        <a class=\"bouton fondBouton\" href=\"{{ path('app_article_show', {'id': article.id}) }}\">Voir</a>
                        <a class=\"bouton fondBouton\" href=\"{{ path('app_article_edit', {'id': article.id}) }}\">Modifier</a>
                        <a class=\"bouton fondBouton\" href=\"{{ path('app_article_new') }}\">Nouvel article</a>
                    </div>
                </div>
            {% endif %}
        {% endfor %}

        {% if not hasArticles %}
            <div class=\"actus\">
                <p>Pas d'article</p>
            </div>
            <div class=\"button-group\">
                <a class=\"bouton fondBouton\" href=\"{{ path('app_article_new') }}\">Nouvel article</a>
            </div>
        {% endif %}
    </div>

    <div class=\"categorieArticles\">
        <img src=\"images/iconePharaon.png\" alt=\"Icône d'un pharaon\">
        <button>Personnages</button>
    </div>
    <div class=\"contenaireCard\">
       
        {% set hasArticles = false %}

        {% for article in articles %}
            {% if article.categorie.nom == 'Personnages' %}
                {% set hasArticles = true %}
                <div class=\"actualité1 p img\"> 
                    <p class=\"titreArticle\">{{ article.Titre }}</p>
                    <p class=\"date\">{{ article.Date ? article.Date|date('Y-m-d H:i:s') : '' }}</p> 
                    <p class=\"event-resume\">{{ article.Resume }}</p>
                    <p class=\"event-contenu\">{{ article.Contenu }}</p>
                    <p class=\"categorie\">Catégorie : {{ article.categorie.nom }}</p> 
                    <div class=\"button-group\">
                        <a class=\"bouton fondBouton\" href=\"{{ path('app_article_show', {'id': article.id}) }}\">Voir</a>
                        <a class=\"bouton fondBouton\" href=\"{{ path('app_article_edit', {'id': article.id}) }}\">Modifier</a>
                        <a class=\"bouton fondBouton\" href=\"{{ path('app_article_new') }}\">Nouvel article</a>
                    </div>
                </div>
            {% endif %}
        {% endfor %}

        {% if not hasArticles %}
            <div class=\"actus\">
                <p>Pas d'article</p>
            </div>
            <div class=\"button-group\">
                <a class=\"bouton fondBouton\" href=\"{{ path('app_article_new') }}\">Nouvel article</a>
            </div>
        {% endif %}
    </div>

    <div class=\"categorieArticles\">
        <img src=\"images/iconeFemme.png\" alt=\"Icône d'une femme égyptienne\">
        <button>Vie quotidienne</button>
    </div>
    <div class=\"contenaireCard\">
       
        {% set hasArticles = false %}

        {% for article in articles %}
            {% if article.categorie.nom == 'Vie quotidienne' %}
                {% set hasArticles = true %}
                <div class=\"actualité1 p img\"> 
                    <p class=\"titreArticle\">{{ article.Titre }}</p>
                    <p class=\"date\">{{ article.Date ? article.Date|date('Y-m-d H:i:s') : '' }}</p> 
                    <p class=\"event-resume\">{{ article.Resume }}</p>
                    <p class=\"event-contenu\">{{ article.Contenu }}</p>
                    <p class=\"event-validation\">{{ article.Validation ? 'Oui' : 'Non' }}</p>
                    <p class=\"categorie\">Catégorie : {{ article.categorie.nom }}</p> 
                    <div class=\"button-group\">
                        <a class=\"bouton fondBouton\" href=\"{{ path('app_article_show', {'id': article.id}) }}\">Voir</a>
                        <a class=\"bouton fondBouton\" href=\"{{ path('app_article_edit', {'id': article.id}) }}\">Modifier</a>
                        <a class=\"bouton fondBouton\" href=\"{{ path('app_article_new') }}\">Nouvel article</a>
                    </div>
                </div>
            {% endif %}
        {% endfor %}

        {% if not hasArticles %}
            <div class=\"actus\">
                <p>Pas d'article</p>
            </div>
            <div class=\"button-group\">
                <a class=\"bouton fondBouton\" href=\"{{ path('app_article_new') }}\">Nouvel article</a>
            </div>
        {% endif %}
    </div>
</div>

{% endblock %}", "article/index.html.twig", "C:\\Users\\Utilisateur\\Documents\\Formation Dev web\\Briefs\\Projet Perles d'Egypte\\LesperlesdEgypte\\PROD\\templates\\article\\index.html.twig");
    }
}
