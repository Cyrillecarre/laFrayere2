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

/* gift/payment.html.twig */
class __TwigTemplate_018c1c3f50edd05e645cde4d9d0f47d5 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gift/payment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gift/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gift/payment.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Paiement Carte Cadeau";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/gift.css"), "html", null, true);
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
        yield "<main>
    <h1 class=\"titre\">Offrir une cartes cadeaux</h1>
    <div class=\"formContent\">
    <span><img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/present.png"), "html", null, true);
        yield "\" alt=\"gift\" class=\"gift\"></span>
        <form class=\"form-container-payment\">
            <p>Montant : ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gift"]) || array_key_exists("gift", $context) ? $context["gift"] : (function () { throw new RuntimeError('Variable "gift" does not exist.', 15, $this->source); })()), "count", [], "any", false, false, false, 15), "html", null, true);
        yield " €</p>
            <p>Email : ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gift"]) || array_key_exists("gift", $context) ? $context["gift"] : (function () { throw new RuntimeError('Variable "gift" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
        <button id=\"payButton\" class=\"btn\">Payer</button>
        </form>
    <span><img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/present.png"), "html", null, true);
        yield "\" alt=\"gift\" class=\"gift\"></span>
</main>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {

    var stripe = Stripe('";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "');
    var payButton = document.getElementById('payButton');
    if (payButton) {
        payButton.addEventListener('click', function () {
            console.log('Bouton cliqué');
            fetch('/gift/payment/";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gift"]) || array_key_exists("gift", $context) ? $context["gift"] : (function () { throw new RuntimeError('Variable "gift" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
        yield "', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({})
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur lors de la création de la session Stripe');
                }
                return response.json();
            })
            .then(data => {
                console.log('Données retournées par le serveur :', data);
                if (data.id) {
                    stripe.redirectToCheckout({ sessionId: data.id });
                } else {
                    alert('Erreur : ID de session manquant.');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    } else {
        console.error('Bouton payButton introuvable dans le DOM.');
    }
});
</script>

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
        return "gift/payment.html.twig";
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
        return array (  165 => 30,  157 => 25,  148 => 19,  142 => 16,  138 => 15,  133 => 13,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement Carte Cadeau{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/gift.css') }}\">
{% endblock %}

{% block body %}
<main>
    <h1 class=\"titre\">Offrir une cartes cadeaux</h1>
    <div class=\"formContent\">
    <span><img src=\"{{ asset('images/present.png') }}\" alt=\"gift\" class=\"gift\"></span>
        <form class=\"form-container-payment\">
            <p>Montant : {{ gift.count }} €</p>
            <p>Email : {{ gift.email }}</p>
        <button id=\"payButton\" class=\"btn\">Payer</button>
        </form>
    <span><img src=\"{{ asset('images/present.png') }}\" alt=\"gift\" class=\"gift\"></span>
</main>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {

    var stripe = Stripe('{{ stripe_public_key }}');
    var payButton = document.getElementById('payButton');
    if (payButton) {
        payButton.addEventListener('click', function () {
            console.log('Bouton cliqué');
            fetch('/gift/payment/{{ gift.id }}', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({})
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur lors de la création de la session Stripe');
                }
                return response.json();
            })
            .then(data => {
                console.log('Données retournées par le serveur :', data);
                if (data.id) {
                    stripe.redirectToCheckout({ sessionId: data.id });
                } else {
                    alert('Erreur : ID de session manquant.');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    } else {
        console.error('Bouton payButton introuvable dans le DOM.');
    }
});
</script>

{% endblock %}", "gift/payment.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/gift/payment.html.twig");
    }
}
