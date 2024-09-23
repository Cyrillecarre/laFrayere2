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

/* reservation/index.html.twig */
class __TwigTemplate_5bb057a026ad9e4bbf85ad52cbac03fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        // line 3
        $context["canonical_url"] = "https://la-frayere.fr/reservation";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/home.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        yield "    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
       <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                firstDay: 1,
                locale: 'fr',
                timeZone: 'Europe/Paris',
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: ''
                },
                events: ";
        // line 23
        yield (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })());
        yield ",
                
                displayEventEnd: true,
                eventTimeFormat: { 
                hour: '2-digit',
                minute: '2-digit',
                meridiem: false
            }
            });
            calendar.render();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 37
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Reservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        yield "<hr class=\"hr\">
    <h1 class=\"titre\">Réservation<span class=\"etoile\">*</span></h1>
    <h3 class=\"titre2\">48h Minimum</h3>
    <div>
      <ul class=\"reservation\">
        <li class=\"btnAction\"><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_one_new");
        yield "\">Réservation Poste 1</a></li>
        <li class=\"btnAction\"><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_two_new");
        yield "\">Réservation Poste 2</a></li>
        <li class=\"btnAction\"><a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_three_new");
        yield "\">Réservation Poste 3</a></li>
        <li class=\"btnAction\"><a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_four_new");
        yield "\">Réservation Poste 4</a></li>
        <li class=\"btnAction\"><a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserve_all");
        yield "\">Réservation étang Complet</a></li>
      </ul>
    </div>
    <p class=\"detailPrix\">Détail des prix dans l'onglet \"Tarifs/Réglementation\"</p>
    <hr class=\"hr\">
    <div class=\"couleur\">
      <p>Poste 1 : <aside class=\"couleurOne\"></aside></p>
      <p>Poste 2 : <aside class=\"couleurTwo\"></aside></p>
      <p>Poste 3 : <aside class=\"couleurThree\"></aside></p>
      <p>Poste 4 : <aside class=\"couleurFour\"></aside></p>
      <p>Réservation en attente de validation : <aside class=\"couleurFive\"></aside></p>
    </div>
    <div class=\"calendar\" id='calendar'>
    </div>
    <div class=\"couleurEtoile\">
        <p> * Aucun remboursement ne sera effectué en cas d'annulation à moins de 7 jours de la réservation sans motif recevable.</p>
    </div>
    <hr class=\"hr\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  192 => 48,  188 => 47,  184 => 46,  180 => 45,  176 => 44,  169 => 39,  159 => 38,  139 => 37,  115 => 23,  99 => 9,  89 => 8,  75 => 6,  65 => 5,  54 => 1,  52 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set canonical_url = 'https://la-frayere.fr/reservation' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/home.css') }}\">
{% endblock %}
{% block javascripts %}
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
       <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                firstDay: 1,
                locale: 'fr',
                timeZone: 'Europe/Paris',
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: ''
                },
                events: {{ data|raw }},
                
                displayEventEnd: true,
                eventTimeFormat: { 
                hour: '2-digit',
                minute: '2-digit',
                meridiem: false
            }
            });
            calendar.render();
        });
    </script>
{% endblock %}

{% block title %}Reservation{% endblock %}
{% block body %}
<hr class=\"hr\">
    <h1 class=\"titre\">Réservation<span class=\"etoile\">*</span></h1>
    <h3 class=\"titre2\">48h Minimum</h3>
    <div>
      <ul class=\"reservation\">
        <li class=\"btnAction\"><a href=\"{{ path('app_poste_one_new') }}\">Réservation Poste 1</a></li>
        <li class=\"btnAction\"><a href=\"{{ path('app_poste_two_new') }}\">Réservation Poste 2</a></li>
        <li class=\"btnAction\"><a href=\"{{ path('app_poste_three_new') }}\">Réservation Poste 3</a></li>
        <li class=\"btnAction\"><a href=\"{{ path('app_poste_four_new') }}\">Réservation Poste 4</a></li>
        <li class=\"btnAction\"><a href=\"{{ path('app_reserve_all') }}\">Réservation étang Complet</a></li>
      </ul>
    </div>
    <p class=\"detailPrix\">Détail des prix dans l'onglet \"Tarifs/Réglementation\"</p>
    <hr class=\"hr\">
    <div class=\"couleur\">
      <p>Poste 1 : <aside class=\"couleurOne\"></aside></p>
      <p>Poste 2 : <aside class=\"couleurTwo\"></aside></p>
      <p>Poste 3 : <aside class=\"couleurThree\"></aside></p>
      <p>Poste 4 : <aside class=\"couleurFour\"></aside></p>
      <p>Réservation en attente de validation : <aside class=\"couleurFive\"></aside></p>
    </div>
    <div class=\"calendar\" id='calendar'>
    </div>
    <div class=\"couleurEtoile\">
        <p> * Aucun remboursement ne sera effectué en cas d'annulation à moins de 7 jours de la réservation sans motif recevable.</p>
    </div>
    <hr class=\"hr\">
{% endblock %}", "reservation/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/reservation/index.html.twig");
    }
}
