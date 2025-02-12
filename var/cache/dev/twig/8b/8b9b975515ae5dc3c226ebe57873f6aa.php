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

/* payment/success.html.twig */
class __TwigTemplate_637cce8bfc8de25a378f33510dff3636 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
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
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Paiement réussi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/poste.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["posteType"]) || array_key_exists("posteType", $context) ? $context["posteType"] : (function () { throw new RuntimeError('Variable "posteType" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Date d'arrivée: ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Date de départ: ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Pellets: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pellets"]) || array_key_exists("pellets", $context) ? $context["pellets"] : (function () { throw new RuntimeError('Variable "pellets" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Graines: ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["graines"]) || array_key_exists("graines", $context) ? $context["graines"] : (function () { throw new RuntimeError('Variable "graines" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</li>
        ";
        // line 20
        if (((isset($context["is_deposit"]) || array_key_exists("is_deposit", $context) ? $context["is_deposit"] : (function () { throw new RuntimeError('Variable "is_deposit" does not exist.', 20, $this->source); })()) > 0)) {
            // line 21
            yield "            <li>Acompte: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["is_deposit"]) || array_key_exists("is_deposit", $context) ? $context["is_deposit"] : (function () { throw new RuntimeError('Variable "is_deposit" does not exist.', 21, $this->source); })()), "html", null, true);
            yield " EUR</li>
        ";
        } else {
            // line 23
            yield "            <li>Acompte: Aucun</li>
        ";
        }
        // line 25
        yield "        <li>Montant de la carte cadeau : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["giftValue"]) || array_key_exists("giftValue", $context) ? $context["giftValue"] : (function () { throw new RuntimeError('Variable "giftValue" does not exist.', 25, $this->source); })()), "html", null, true);
        yield " EUR</li>
        <li>Montant total: ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 26, $this->source); })()), "html", null, true);
        yield " EUR</li>
        ";
        // line 27
        $context["restant_a_payer"] = (((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 27, $this->source); })()) - (isset($context["giftValue"]) || array_key_exists("giftValue", $context) ? $context["giftValue"] : (function () { throw new RuntimeError('Variable "giftValue" does not exist.', 27, $this->source); })())) - (isset($context["is_deposit"]) || array_key_exists("is_deposit", $context) ? $context["is_deposit"] : (function () { throw new RuntimeError('Variable "is_deposit" does not exist.', 27, $this->source); })()));
        // line 28
        yield "        ";
        if (((isset($context["restant_a_payer"]) || array_key_exists("restant_a_payer", $context) ? $context["restant_a_payer"] : (function () { throw new RuntimeError('Variable "restant_a_payer" does not exist.', 28, $this->source); })()) > 0)) {
            // line 29
            yield "            <li>Restant à payer: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["restant_a_payer"]) || array_key_exists("restant_a_payer", $context) ? $context["restant_a_payer"] : (function () { throw new RuntimeError('Variable "restant_a_payer" does not exist.', 29, $this->source); })()), "html", null, true);
            yield " EUR</li>
        ";
        }
        // line 31
        yield "        ";
        if (((isset($context["remainingGiftValue"]) || array_key_exists("remainingGiftValue", $context) ? $context["remainingGiftValue"] : (function () { throw new RuntimeError('Variable "remainingGiftValue" does not exist.', 31, $this->source); })()) > 0)) {
            // line 32
            yield "            <li>Montant restant sur la carte cadeau : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["remainingGiftValue"]) || array_key_exists("remainingGiftValue", $context) ? $context["remainingGiftValue"] : (function () { throw new RuntimeError('Variable "remainingGiftValue" does not exist.', 32, $this->source); })()), "html", null, true);
            yield " EUR</li>
        ";
        } else {
            // line 34
            yield "            <li>La carte cadeau a été entièrement utilisée.</li>
        ";
        }
        // line 36
        yield "    </ul>
    <p>Merci pour votre réservation. Pensez à consulter le réglement intérieur dans l'onglet \"Réglementation\"</p>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "payment/success.html.twig";
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
        return array (  200 => 36,  196 => 34,  190 => 32,  187 => 31,  181 => 29,  178 => 28,  176 => 27,  172 => 26,  167 => 25,  163 => 23,  157 => 21,  155 => 20,  151 => 19,  147 => 18,  143 => 17,  139 => 16,  135 => 15,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
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
        {% if is_deposit > 0 %}
            <li>Acompte: {{ is_deposit }} EUR</li>
        {% else %}
            <li>Acompte: Aucun</li>
        {% endif %}
        <li>Montant de la carte cadeau : {{ giftValue }} EUR</li>
        <li>Montant total: {{ totalPrice }} EUR</li>
        {% set restant_a_payer = totalPrice - giftValue - is_deposit %}
        {% if restant_a_payer > 0 %}
            <li>Restant à payer: {{ restant_a_payer }} EUR</li>
        {% endif %}
        {% if remainingGiftValue > 0 %}
            <li>Montant restant sur la carte cadeau : {{ remainingGiftValue }} EUR</li>
        {% else %}
            <li>La carte cadeau a été entièrement utilisée.</li>
        {% endif %}
    </ul>
    <p>Merci pour votre réservation. Pensez à consulter le réglement intérieur dans l'onglet \"Réglementation\"</p>
    </div>
{% endblock %}
", "payment/success.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/payment/success.html.twig");
    }
}
