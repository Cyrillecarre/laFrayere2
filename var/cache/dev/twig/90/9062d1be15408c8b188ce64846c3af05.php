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

/* payment/success.html.twig */
class __TwigTemplate_5c9effb8f074e7bf004e9fbb762e95ad extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/success.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Paiement réussi";
        
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
        yield "    <div class=\"formPrixPayment\">
    <h1>Paiement réussi</h1>
    <h1>Confirmation de votre réservation</h1>
    <p>Votre réservation a été confirmée avec les détails suivants :</p>
    <ul>
        <li>Poste: ";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["posteType"]) || array_key_exists("posteType", $context) ? $context["posteType"] : (function () { throw new RuntimeError('Variable "posteType" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Date d'arrivée: ";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Date de départ: ";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Pellets: ";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["pellets"]) || array_key_exists("pellets", $context) ? $context["pellets"] : (function () { throw new RuntimeError('Variable "pellets" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Graines: ";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["graines"]) || array_key_exists("graines", $context) ? $context["graines"] : (function () { throw new RuntimeError('Variable "graines" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Acompte: ";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["is_deposit"]) || array_key_exists("is_deposit", $context) ? $context["is_deposit"] : (function () { throw new RuntimeError('Variable "is_deposit" does not exist.', 20, $this->source); })()), "html", null, true);
        yield " EUR</li>
        <li>Montant total: ";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 21, $this->source); })()), "html", null, true);
        yield " EUR</li>
    </ul>
    <p>Merci pour votre réservation.</p>
    </div>
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
        return "payment/success.html.twig";
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
        return array (  146 => 21,  142 => 20,  138 => 19,  134 => 18,  130 => 17,  126 => 16,  122 => 15,  115 => 10,  105 => 9,  91 => 6,  81 => 5,  61 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/payment/success.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Paiement réussi{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/poste.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"formPrixPayment\">
    <h1>Paiement réussi</h1>
    <h1>Confirmation de votre réservation</h1>
    <p>Votre réservation a été confirmée avec les détails suivants :</p>
    <ul>
        <li>Poste: {{ posteType }}</li>
        <li>Date d'arrivée: {{ start }}</li>
        <li>Date de départ: {{ end }}</li>
        <li>Pellets: {{ pellets }}</li>
        <li>Graines: {{ graines }}</li>
        <li>Acompte: {{ is_deposit }} EUR</li>
        <li>Montant total: {{ totalPrice }} EUR</li>
    </ul>
    <p>Merci pour votre réservation.</p>
    </div>
{% endblock %}", "payment/success.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/payment/success.html.twig");
    }
}
