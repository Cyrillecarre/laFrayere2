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

/* poste_two/prix.html.twig */
class __TwigTemplate_c5063657084558b1062712dccc7a1462 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_two/prix.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_two/prix.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "poste_two/prix.html.twig", 1);
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

        yield "Réservation Poste 2";
        
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
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        yield "    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var stripe = Stripe('";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "');

            var checkoutButton = document.getElementById('checkout-button');
            var depositButton = document.getElementById('deposit-button');

            checkoutButton.addEventListener('click', function (e) {
                e.preventDefault();
                createCheckoutSession(false); // Paiement total
            });

            depositButton.addEventListener('click', function (e) {
                e.preventDefault();
                createCheckoutSession(true); // Paiement d'acompte
            });

            function createCheckoutSession(isDeposit) {
                var totalPrice = document.querySelector('input[name=\"totalPrice\"]').value;
                var posteId = document.querySelector('input[name=\"poste_id\"]').value;
                var numFishers = document.querySelector('input[name=\"numFishers\"]').value;
                var numNights = document.querySelector('input[name=\"numNights\"]').value;
                var pellets = document.querySelector('input[name=\"pellets\"]').value;
                var graines = document.querySelector('input[name=\"graines\"]').value;
                var posteType = document.querySelector('input[name=\"poste_type\"]').value;
                var giftValue = document.querySelector('input[name=\"giftValue\"]').value || 0;
                var startDateStr = document.querySelector('input[name=\"start\"]').value;
                var endDateStr = document.querySelector('input[name=\"end\"]').value;
                var totalPriceAfter = document.querySelector('input[name=\"totalPriceAfter\"]').value;

                console.log('Données envoyées:', {
                    totalPrice: totalPrice,
                    totalPriceAfter: totalPriceAfter,
                    isDeposit: isDeposit,
                    posteId: posteId,
                    posteType: posteType,
                    start: startDateStr,
                    end: endDateStr,
                    pellets: pellets,
                    graines: graines,
                    giftValue: giftValue
                });

                fetch(\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_create");
        yield "\", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("payment"), "html", null, true);
        yield "'
                    },
                    body: JSON.stringify({
                        totalPrice: totalPrice,
                        totalPriceAfter: totalPriceAfter,
                        isDeposit: isDeposit,
                        posteId: posteId,
                        posteType: posteType,
                        start: startDateStr,
                        end: endDateStr,
                        pellets: pellets,
                        graines: graines,
                        giftValue: giftValue
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Erreur lors de la création de la session Stripe');
                        }
                        return response.json();
                    })
                    .then(session => {
                        if (session.error) {
                            alert(session.error);
                        } else {
                            return stripe.redirectToCheckout({ sessionId: session.id });
                        }
                    })
                    .catch(error => {
                        console.error('Erreur :', error);
                        alert('Une erreur est survenue. Veuillez réessayer.');
                    });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
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

        // line 96
        yield "    <main>
    <h1 class=\"titre\">réservation Poste 2</h1>

    ";
        // line 99
        if ( !(null === (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 99, $this->source); })()))) {
            // line 100
            yield "        <div class=\"formPrix\">
            <p>Date d'arrivée : ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Date de départ : ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 102, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Nombre de pêcheurs : ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numFishers"]) || array_key_exists("numFishers", $context) ? $context["numFishers"] : (function () { throw new RuntimeError('Variable "numFishers" does not exist.', 103, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Nombre de nuits : ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numNights"]) || array_key_exists("numNights", $context) ? $context["numNights"] : (function () { throw new RuntimeError('Variable "numNights" does not exist.', 104, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Pellets : ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pellets"]) || array_key_exists("pellets", $context) ? $context["pellets"] : (function () { throw new RuntimeError('Variable "pellets" does not exist.', 105, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Graines : ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["graines"]) || array_key_exists("graines", $context) ? $context["graines"] : (function () { throw new RuntimeError('Variable "graines" does not exist.', 106, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Code cadeau appliqué : ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["giftCode"]) || array_key_exists("giftCode", $context) ? $context["giftCode"] : (function () { throw new RuntimeError('Variable "giftCode" does not exist.', 107, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Valeur du code cadeau : ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("giftValue", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["giftValue"]) || array_key_exists("giftValue", $context) ? $context["giftValue"] : (function () { throw new RuntimeError('Variable "giftValue" does not exist.', 108, $this->source); })()), 0)) : (0)), "html", null, true);
            yield " EUR</p>
            <p>Montant total : ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 109, $this->source); })()), "html", null, true);
            yield " EUR</p>
            <p>Montant restant à payer : ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPriceAfter"]) || array_key_exists("totalPriceAfter", $context) ? $context["totalPriceAfter"] : (function () { throw new RuntimeError('Variable "totalPriceAfter" does not exist.', 110, $this->source); })()), "html", null, true);
            yield " EUR</p>
        </div>
        <form action=\"";
            // line 112
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_create");
            yield "\" method=\"POST\" class=\"formPrixButton\">
            <input type=\"hidden\" name=\"totalPriceAfter\" value=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPriceAfter"]) || array_key_exists("totalPriceAfter", $context) ? $context["totalPriceAfter"] : (function () { throw new RuntimeError('Variable "totalPriceAfter" does not exist.', 113, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"totalPrice\" value=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 114, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"poste_id\" value=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["poste_id"]) || array_key_exists("poste_id", $context) ? $context["poste_id"] : (function () { throw new RuntimeError('Variable "poste_id" does not exist.', 115, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"numFishers\" value=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numFishers"]) || array_key_exists("numFishers", $context) ? $context["numFishers"] : (function () { throw new RuntimeError('Variable "numFishers" does not exist.', 116, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"numNights\" value=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numNights"]) || array_key_exists("numNights", $context) ? $context["numNights"] : (function () { throw new RuntimeError('Variable "numNights" does not exist.', 117, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"pellets\" value=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pellets"]) || array_key_exists("pellets", $context) ? $context["pellets"] : (function () { throw new RuntimeError('Variable "pellets" does not exist.', 118, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"graines\" value=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["graines"]) || array_key_exists("graines", $context) ? $context["graines"] : (function () { throw new RuntimeError('Variable "graines" does not exist.', 119, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"poste_type\" value=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["poste_type"]) || array_key_exists("poste_type", $context) ? $context["poste_type"] : (function () { throw new RuntimeError('Variable "poste_type" does not exist.', 120, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"start\" value=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 121, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"end\" value=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 122, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"giftValue\" value=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("giftValue", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["giftValue"]) || array_key_exists("giftValue", $context) ? $context["giftValue"] : (function () { throw new RuntimeError('Variable "giftValue" does not exist.', 123, $this->source); })()), 0)) : (0)), "html", null, true);
            yield "\">
            ";
            // line 124
            if (((isset($context["totalPriceAfter"]) || array_key_exists("totalPriceAfter", $context) ? $context["totalPriceAfter"] : (function () { throw new RuntimeError('Variable "totalPriceAfter" does not exist.', 124, $this->source); })()) > 0)) {
                // line 125
                yield "                    <div>
                        <button type=\"button\" id=\"checkout-button\" class=\"btnAction\">Régler la totalité</button>
                    </div>
                    <div>
                        <button type=\"button\" id=\"deposit-button\" class=\"btnAction\">Régler un acompte</button>
                    </div>
                ";
            } else {
                // line 132
                yield "                    <div class=\"btnActionZero\">
                        <button type=\"button\" id=\"checkout-button\" class=\"btnAction\">Valider la session</button>
                    </div>
                ";
            }
            // line 136
            yield "            <p class=\"textPrix\">Vous allez être redirigé vers la page de paiement sécurisé</p>
        </form>
        ";
        } else {
            // line 139
            yield "            <p class=\"textPrix\">Une erreur est survenue lors du calcul du montant total.</p>
    ";
        }
        // line 141
        yield "
    <hr class=\"hr\">
    <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_two_new");
        yield "\" class=\"btnAction\">Retour</a>
</main>
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
        return "poste_two/prix.html.twig";
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
        return array (  374 => 143,  370 => 141,  366 => 139,  361 => 136,  355 => 132,  346 => 125,  344 => 124,  340 => 123,  336 => 122,  332 => 121,  328 => 120,  324 => 119,  320 => 118,  316 => 117,  312 => 116,  308 => 115,  304 => 114,  300 => 113,  296 => 112,  291 => 110,  287 => 109,  283 => 108,  279 => 107,  275 => 106,  271 => 105,  267 => 104,  263 => 103,  259 => 102,  255 => 101,  252 => 100,  250 => 99,  245 => 96,  232 => 95,  185 => 58,  178 => 54,  134 => 13,  129 => 10,  116 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réservation Poste 2{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/poste.css') }}\">
{% endblock %}

{% block javascripts %}
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var stripe = Stripe('{{ stripe_public_key }}');

            var checkoutButton = document.getElementById('checkout-button');
            var depositButton = document.getElementById('deposit-button');

            checkoutButton.addEventListener('click', function (e) {
                e.preventDefault();
                createCheckoutSession(false); // Paiement total
            });

            depositButton.addEventListener('click', function (e) {
                e.preventDefault();
                createCheckoutSession(true); // Paiement d'acompte
            });

            function createCheckoutSession(isDeposit) {
                var totalPrice = document.querySelector('input[name=\"totalPrice\"]').value;
                var posteId = document.querySelector('input[name=\"poste_id\"]').value;
                var numFishers = document.querySelector('input[name=\"numFishers\"]').value;
                var numNights = document.querySelector('input[name=\"numNights\"]').value;
                var pellets = document.querySelector('input[name=\"pellets\"]').value;
                var graines = document.querySelector('input[name=\"graines\"]').value;
                var posteType = document.querySelector('input[name=\"poste_type\"]').value;
                var giftValue = document.querySelector('input[name=\"giftValue\"]').value || 0;
                var startDateStr = document.querySelector('input[name=\"start\"]').value;
                var endDateStr = document.querySelector('input[name=\"end\"]').value;
                var totalPriceAfter = document.querySelector('input[name=\"totalPriceAfter\"]').value;

                console.log('Données envoyées:', {
                    totalPrice: totalPrice,
                    totalPriceAfter: totalPriceAfter,
                    isDeposit: isDeposit,
                    posteId: posteId,
                    posteType: posteType,
                    start: startDateStr,
                    end: endDateStr,
                    pellets: pellets,
                    graines: graines,
                    giftValue: giftValue
                });

                fetch(\"{{ path('app_payment_create') }}\", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token('payment') }}'
                    },
                    body: JSON.stringify({
                        totalPrice: totalPrice,
                        totalPriceAfter: totalPriceAfter,
                        isDeposit: isDeposit,
                        posteId: posteId,
                        posteType: posteType,
                        start: startDateStr,
                        end: endDateStr,
                        pellets: pellets,
                        graines: graines,
                        giftValue: giftValue
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Erreur lors de la création de la session Stripe');
                        }
                        return response.json();
                    })
                    .then(session => {
                        if (session.error) {
                            alert(session.error);
                        } else {
                            return stripe.redirectToCheckout({ sessionId: session.id });
                        }
                    })
                    .catch(error => {
                        console.error('Erreur :', error);
                        alert('Une erreur est survenue. Veuillez réessayer.');
                    });
            }
        });
    </script>
{% endblock %}

{% block body %}
    <main>
    <h1 class=\"titre\">réservation Poste 2</h1>

    {% if totalPrice is not null %}
        <div class=\"formPrix\">
            <p>Date d'arrivée : {{ start }}</p>
            <p>Date de départ : {{ end }}</p>
            <p>Nombre de pêcheurs : {{ numFishers }}</p>
            <p>Nombre de nuits : {{ numNights }}</p>
            <p>Pellets : {{ pellets }}</p>
            <p>Graines : {{ graines }}</p>
            <p>Code cadeau appliqué : {{ giftCode }}</p>
            <p>Valeur du code cadeau : {{ giftValue|default(0) }} EUR</p>
            <p>Montant total : {{ totalPrice }} EUR</p>
            <p>Montant restant à payer : {{ totalPriceAfter }} EUR</p>
        </div>
        <form action=\"{{ path('app_payment_create') }}\" method=\"POST\" class=\"formPrixButton\">
            <input type=\"hidden\" name=\"totalPriceAfter\" value=\"{{ totalPriceAfter }}\">
            <input type=\"hidden\" name=\"totalPrice\" value=\"{{ totalPrice }}\">
            <input type=\"hidden\" name=\"poste_id\" value=\"{{ poste_id }}\">
            <input type=\"hidden\" name=\"numFishers\" value=\"{{ numFishers }}\">
            <input type=\"hidden\" name=\"numNights\" value=\"{{ numNights }}\">
            <input type=\"hidden\" name=\"pellets\" value=\"{{ pellets }}\">
            <input type=\"hidden\" name=\"graines\" value=\"{{ graines }}\">
            <input type=\"hidden\" name=\"poste_type\" value=\"{{ poste_type }}\">
            <input type=\"hidden\" name=\"start\" value=\"{{ start }}\">
            <input type=\"hidden\" name=\"end\" value=\"{{ end }}\">
            <input type=\"hidden\" name=\"giftValue\" value=\"{{ giftValue|default(0) }}\">
            {% if totalPriceAfter > 0 %}
                    <div>
                        <button type=\"button\" id=\"checkout-button\" class=\"btnAction\">Régler la totalité</button>
                    </div>
                    <div>
                        <button type=\"button\" id=\"deposit-button\" class=\"btnAction\">Régler un acompte</button>
                    </div>
                {% else %}
                    <div class=\"btnActionZero\">
                        <button type=\"button\" id=\"checkout-button\" class=\"btnAction\">Valider la session</button>
                    </div>
                {% endif %}
            <p class=\"textPrix\">Vous allez être redirigé vers la page de paiement sécurisé</p>
        </form>
        {% else %}
            <p class=\"textPrix\">Une erreur est survenue lors du calcul du montant total.</p>
    {% endif %}

    <hr class=\"hr\">
    <a href=\"{{ path('app_poste_two_new') }}\" class=\"btnAction\">Retour</a>
</main>
{% endblock %}", "poste_two/prix.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/poste_two/prix.html.twig");
    }
}
