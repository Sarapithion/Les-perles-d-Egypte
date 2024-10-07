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

/* includes/header.html.twig */
class __TwigTemplate_94879a32352bda8a6eac7aa43feb8946 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        yield "<div class=\"header\">
        <div class=\"titleImg\">
                <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        <img class=\"logo\" src=\"/images/logo.png\" alt=\"Logo\">
                </a>

                <a class=\"link\" href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        <h2 class=\"title\">LES PERLES D'EGYPTE </h2>
                </a>
        
        </div>
        <div class=\"buttonHeader\">
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\" class=\"button\">Articles</a>
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"button\">Evènements</a>
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_index");
        yield "\"class=\"button\">Contact</a>
                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_new");
        yield "\"class=\"button\">Inscription</a>
                ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"class=\"button\">Deconnexion</a>
                ";
        } else {
            // line 20
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"class=\"button\">Connexion</a>
                ";
        }
        // line 22
        yield "                        
        </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/header.html.twig";
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
        return array (  95 => 22,  89 => 20,  83 => 18,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  56 => 7,  49 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"header\">
        <div class=\"titleImg\">
                <a href=\"{{path('app_home')}}\">
                        <img class=\"logo\" src=\"/images/logo.png\" alt=\"Logo\">
                </a>

                <a class=\"link\" href=\"{{path('app_home')}}\">
                        <h2 class=\"title\">LES PERLES D'EGYPTE </h2>
                </a>
        
        </div>
        <div class=\"buttonHeader\">
                <a href=\"{{path('app_article_index')}}\" class=\"button\">Articles</a>
                <a href=\"{{path('app_evenement_index')}}\" class=\"button\">Evènements</a>
                <a href=\"{{path('app_contact_index')}}\"class=\"button\">Contact</a>
                <a href=\"{{path('app_utilisateur_new')}}\"class=\"button\">Inscription</a>
                {% if app.user %}
                        <a href=\"{{path('app_logout')}}\"class=\"button\">Deconnexion</a>
                {% else %}
                        <a href=\"{{path('app_login')}}\"class=\"button\">Connexion</a>
                {% endif %}
                        
        </div>
</div>", "includes/header.html.twig", "C:\\Users\\Utilisateur\\Documents\\Formation Dev web\\Briefs\\Projet Perles d'Egypte\\LesperlesdEgypte\\PROD\\templates\\includes\\header.html.twig");
    }
}
