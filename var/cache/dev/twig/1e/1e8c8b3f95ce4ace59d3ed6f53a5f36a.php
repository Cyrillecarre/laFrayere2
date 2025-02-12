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

/* payment/mailSuccess.html.twig */
class __TwigTemplate_85a68cf949473e7f5a58ce0fdba987d5 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/mailSuccess.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/mailSuccess.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "    <h1>Nouvelle Réservation</h1>
        <p>Poste :";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["posteType"]) || array_key_exists("posteType", $context) ? $context["posteType"] : (function () { throw new RuntimeError('Variable "posteType" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</p>
        <ul>
            <li>Poste: ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["posteType"]) || array_key_exists("posteType", $context) ? $context["posteType"] : (function () { throw new RuntimeError('Variable "posteType" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "</li>
            <li>Date d'arrivée: ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</li>
            <li>Date de départ: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</li>
            <li>Pellets: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pellets"]) || array_key_exists("pellets", $context) ? $context["pellets"] : (function () { throw new RuntimeError('Variable "pellets" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</li>
            <li>Graines: ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["graines"]) || array_key_exists("graines", $context) ? $context["graines"] : (function () { throw new RuntimeError('Variable "graines" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "</li>
            ";
        // line 10
        if (((isset($context["is_deposit"]) || array_key_exists("is_deposit", $context) ? $context["is_deposit"] : (function () { throw new RuntimeError('Variable "is_deposit" does not exist.', 10, $this->source); })()) > 0)) {
            // line 11
            yield "                <li>Acompte: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["is_deposit"]) || array_key_exists("is_deposit", $context) ? $context["is_deposit"] : (function () { throw new RuntimeError('Variable "is_deposit" does not exist.', 11, $this->source); })()), "html", null, true);
            yield " EUR</li>
            ";
        } else {
            // line 13
            yield "                <li>Acompte: Aucun</li>
            ";
        }
        // line 15
        yield "            <li>Montant de la carte cadeau : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["giftValue"]) || array_key_exists("giftValue", $context) ? $context["giftValue"] : (function () { throw new RuntimeError('Variable "giftValue" does not exist.', 15, $this->source); })()), "html", null, true);
        yield " EUR</li>
            <li>Montant total: ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 16, $this->source); })()), "html", null, true);
        yield " EUR</li>
            ";
        // line 17
        $context["restant_a_payer"] = (((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 17, $this->source); })()) - (isset($context["giftValue"]) || array_key_exists("giftValue", $context) ? $context["giftValue"] : (function () { throw new RuntimeError('Variable "giftValue" does not exist.', 17, $this->source); })())) - (isset($context["is_deposit"]) || array_key_exists("is_deposit", $context) ? $context["is_deposit"] : (function () { throw new RuntimeError('Variable "is_deposit" does not exist.', 17, $this->source); })()));
        // line 18
        yield "            ";
        if (((isset($context["restant_a_payer"]) || array_key_exists("restant_a_payer", $context) ? $context["restant_a_payer"] : (function () { throw new RuntimeError('Variable "restant_a_payer" does not exist.', 18, $this->source); })()) > 0)) {
            // line 19
            yield "                <li>Restant à payer: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["restant_a_payer"]) || array_key_exists("restant_a_payer", $context) ? $context["restant_a_payer"] : (function () { throw new RuntimeError('Variable "restant_a_payer" does not exist.', 19, $this->source); })()), "html", null, true);
            yield " EUR</li>
            ";
        }
        // line 21
        yield "            ";
        if (((isset($context["remainingGiftValue"]) || array_key_exists("remainingGiftValue", $context) ? $context["remainingGiftValue"] : (function () { throw new RuntimeError('Variable "remainingGiftValue" does not exist.', 21, $this->source); })()) > 0)) {
            // line 22
            yield "                <li>Montant restant sur la carte cadeau : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["remainingGiftValue"]) || array_key_exists("remainingGiftValue", $context) ? $context["remainingGiftValue"] : (function () { throw new RuntimeError('Variable "remainingGiftValue" does not exist.', 22, $this->source); })()), "html", null, true);
            yield " EUR</li>
            ";
        } else {
            // line 24
            yield "                <li>La carte cadeau a été entièrement utilisée.</li>
            ";
        }
        // line 26
        yield "        </ul>
        <p>Email : ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "</p>
        <p>Numéro de téléphone : ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["phoneNumber"]) || array_key_exists("phoneNumber", $context) ? $context["phoneNumber"] : (function () { throw new RuntimeError('Variable "phoneNumber" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "</p>
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
        return "payment/mailSuccess.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  152 => 28,  148 => 27,  145 => 26,  141 => 24,  135 => 22,  132 => 21,  126 => 19,  123 => 18,  121 => 17,  117 => 16,  112 => 15,  108 => 13,  102 => 11,  100 => 10,  96 => 9,  92 => 8,  88 => 7,  84 => 6,  80 => 5,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
    <h1>Nouvelle Réservation</h1>
        <p>Poste :{{ posteType }}</p>
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
        <p>Email : {{ email }}</p>
        <p>Numéro de téléphone : {{ phoneNumber }}</p>
{% endblock %}", "payment/mailSuccess.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/payment/mailSuccess.html.twig");
    }
}
