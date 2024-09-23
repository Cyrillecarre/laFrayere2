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

/* poste_four/new.html.twig */
class __TwigTemplate_c09c61c5d9a942ce2681b6f6643effc1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_four/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_four/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "poste_four/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "reservation Poste 4";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/poste.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "    <hr class=\"hr\">
    <h1 class=\"titre\">Ajouter une réservation Poste 4</h1>

    ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        yield "
        <div>
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "start", [], "any", false, false, false, 15), 'label', ["attr" => ["class" => "formStart"], "label" => "Date d'arrivée :"]);
        yield "
        </div>
        <div>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "start", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "formStart"]]);
        yield "
        </div>
        <div>
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "end", [], "any", false, false, false, 21), 'label', ["attr" => ["class" => "formEnd"], "label" => "Date de départ :"]);
        yield "
        </div>
        <div>
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "end", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "formEnd"]]);
        yield "
        </div>
        <div>
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "numberOfFishers", [], "any", false, false, false, 27), 'label', ["attr" => ["class" => "numberForm"], "label" => "Nombre de pêcheurs"]);
        yield "
        </div>
        <div>
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "numberOfFishers", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "numberForm"]]);
        yield "
        </div>
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
        </div>
        <div>
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'label', ["attr" => ["class" => "formEmail"], "label" => "Email"]);
        yield "
        </div>
        <div>
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "formEmail"]]);
        yield "
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'errors');
        yield "
        </div>
        <div>
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "phoneNumber", [], "any", false, false, false, 43), 'label', ["attr" => ["class" => "formPhone"], "label" => "Numéro de tel"]);
        yield "
        </div>
        <div>
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "phoneNumber", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "formPhone"]]);
        yield "
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "phoneNumber", [], "any", false, false, false, 47), 'errors');
        yield "
        </div>
        
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
            <p class=\"hrText\">Avez-vous pensé à l'amorçage?</p>
        </div>
        <div>
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "pellets", [], "any", false, false, false, 55), 'label', ["label" => "Pellets Coppens 8mm Sac de 20kg"]);
        yield "
        </div>
        <div>
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "pellets", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "numberForm"]]);
        yield "
        </div>
        <div>
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "graines", [], "any", false, false, false, 61), 'label', ["label" => "Sac de graines (rupture)"]);
        yield "
        </div>
        <div>
            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "graines", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "numberForm"]]);
        yield "
        </div>
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
        </div>
        <button class=\"btnAction\">";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "Combien ça coûte?")) : ("Combien ça coûte?")), "html", null, true);
        yield "</button>
    ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        yield "

    <hr class=\"hr\">
    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\" class=\"btnAction\">Retour</a>
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
        return "poste_four/new.html.twig";
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
        return array (  237 => 73,  231 => 70,  227 => 69,  219 => 64,  213 => 61,  207 => 58,  201 => 55,  190 => 47,  186 => 46,  180 => 43,  174 => 40,  170 => 39,  164 => 36,  155 => 30,  149 => 27,  143 => 24,  137 => 21,  131 => 18,  125 => 15,  120 => 13,  115 => 10,  105 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}reservation Poste 4{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/poste.css') }}\">
{% endblock %}

{% block body %}
    <hr class=\"hr\">
    <h1 class=\"titre\">Ajouter une réservation Poste 4</h1>

    {{ form_start(form, {'attr': {'class': 'form'}}) }}
        <div>
            {{ form_label(form.start, 'Date d\\'arrivée :', {'attr': {'class': 'formStart'}}) }}
        </div>
        <div>
            {{ form_widget(form.start, {'attr': {'class': 'formStart'}}) }}
        </div>
        <div>
            {{ form_label(form.end, 'Date de départ :', {'attr': {'class': 'formEnd'}}) }}
        </div>
        <div>
            {{ form_widget(form.end, {'attr': {'class': 'formEnd'}}) }}
        </div>
        <div>
            {{ form_label(form.numberOfFishers, 'Nombre de pêcheurs', {'attr': {'class': 'numberForm'}}) }}
        </div>
        <div>
            {{ form_widget(form.numberOfFishers, {'attr': {'class': 'numberForm'}}) }}
        </div>
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
        </div>
        <div>
            {{ form_label(form.email, 'Email', {'attr': {'class': 'formEmail'}}) }}
        </div>
        <div>
            {{ form_widget(form.email, {'attr': {'class': 'formEmail'}}) }}
            {{ form_errors(form.email) }}
        </div>
        <div>
            {{ form_label(form.phoneNumber, 'Numéro de tel', {'attr': {'class': 'formPhone'}}) }}
        </div>
        <div>
            {{ form_widget(form.phoneNumber, {'attr': {'class': 'formPhone'}}) }}
            {{ form_errors(form.phoneNumber) }}
        </div>
        
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
            <p class=\"hrText\">Avez-vous pensé à l'amorçage?</p>
        </div>
        <div>
            {{ form_label(form.pellets, 'Pellets Coppens 8mm Sac de 20kg') }}
        </div>
        <div>
            {{ form_widget(form.pellets, {'attr': {'class': 'numberForm'}}) }}
        </div>
        <div>
            {{ form_label(form.graines, 'Sac de graines (rupture)') }}
        </div>
        <div>
            {{ form_widget(form.graines, {'attr': {'class': 'numberForm'}}) }}
        </div>
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
        </div>
        <button class=\"btnAction\">{{ button_label|default('Combien ça coûte?') }}</button>
    {{ form_end(form) }}

    <hr class=\"hr\">
    <a href=\"{{ path('app_reservation') }}\" class=\"btnAction\">Retour</a>
{% endblock %}

", "poste_four/new.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/poste_four/new.html.twig");
    }
}
