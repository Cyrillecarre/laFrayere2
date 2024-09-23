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

/* poste_one/prix.html.twig */
class __TwigTemplate_9d443812018b9d75eadeece7442044c6 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_one/prix.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_one/prix.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "poste_one/prix.html.twig", 1);
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

        yield "New PosteOne";
        
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
    public function block_javascripts($context, array $blocks = [])
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
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 13, $this->source); })()), "html", null, true);
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
                
                var startDateStr = document.querySelector('input[name=\"start\"]').value;
                var endDateStr = document.querySelector('input[name=\"end\"]').value;

                var start = startDateStr;
                var end = endDateStr;
                
                fetch(\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_create");
        yield "\", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("payment"), "html", null, true);
        yield "'
                    },
                    body: JSON.stringify({
                        totalPrice: totalPrice,
                        isDeposit: isDeposit,
                        posteId: posteId,
                        numFishers: numFishers,
                        numNights: numNights,
                        pellets: pellets,
                        graines: graines,
                        posteType: posteType,
                        start: start,
                        end: end
                    })
                })
                .then(response => response.json())
                .then(session => {
                    if (session.error) {
                        alert(session.error);
                    } else {
                        return stripe.redirectToCheckout({ sessionId: session.id });
                    }
                })
                .then(result => {
                    if (result && result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 84
        yield "    <hr class=\"hr\">
    <h1 class=\"titre\">réservation Poste 1</h1>

    ";
        // line 87
        if ( !(null === (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 87, $this->source); })()))) {
            // line 88
            yield "        <div class=\"formPrix\">
            <p>Date d'arrivée : ";
            // line 89
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 89, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Date de départ : ";
            // line 90
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 90, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Nombre de pêcheurs : ";
            // line 91
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["numFishers"]) || array_key_exists("numFishers", $context) ? $context["numFishers"] : (function () { throw new RuntimeError('Variable "numFishers" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Nombre de nuits : ";
            // line 92
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["numNights"]) || array_key_exists("numNights", $context) ? $context["numNights"] : (function () { throw new RuntimeError('Variable "numNights" does not exist.', 92, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Pellets : ";
            // line 93
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["pellets"]) || array_key_exists("pellets", $context) ? $context["pellets"] : (function () { throw new RuntimeError('Variable "pellets" does not exist.', 93, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Graines : ";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["graines"]) || array_key_exists("graines", $context) ? $context["graines"] : (function () { throw new RuntimeError('Variable "graines" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "</p>
            <p>Montant total : ";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 95, $this->source); })()), "html", null, true);
            yield " EUR</p>
        </div>
        <form action=\"";
            // line 97
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_create");
            yield "\" method=\"POST\" class=\"formPrixButton\">
            <input type=\"hidden\" name=\"totalPrice\" value=\"";
            // line 98
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 98, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"poste_id\" value=\"";
            // line 99
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["poste_id"]) || array_key_exists("poste_id", $context) ? $context["poste_id"] : (function () { throw new RuntimeError('Variable "poste_id" does not exist.', 99, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"numFishers\" value=\"";
            // line 100
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["numFishers"]) || array_key_exists("numFishers", $context) ? $context["numFishers"] : (function () { throw new RuntimeError('Variable "numFishers" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"numNights\" value=\"";
            // line 101
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["numNights"]) || array_key_exists("numNights", $context) ? $context["numNights"] : (function () { throw new RuntimeError('Variable "numNights" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"pellets\" value=\"";
            // line 102
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["pellets"]) || array_key_exists("pellets", $context) ? $context["pellets"] : (function () { throw new RuntimeError('Variable "pellets" does not exist.', 102, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"graines\" value=\"";
            // line 103
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["graines"]) || array_key_exists("graines", $context) ? $context["graines"] : (function () { throw new RuntimeError('Variable "graines" does not exist.', 103, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"poste_type\" value=\"";
            // line 104
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["poste_type"]) || array_key_exists("poste_type", $context) ? $context["poste_type"] : (function () { throw new RuntimeError('Variable "poste_type" does not exist.', 104, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"start\" value=\"";
            // line 105
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 105, $this->source); })()), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"end\" value=\"";
            // line 106
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 106, $this->source); })()), "html", null, true);
            yield "\">
            <div>
                <button type=\"submit\" id=\"checkout-button\" class=\"btnAction\">Régler la totalité</button>
            </div>
            <div>
                <button type=\"submit\" id=\"deposit-button\" class=\"btnAction\" data-is-deposit=\"true\">Régler un acompte</button>
            </div>
            <p class=\"textPrix\">Vous allez être redirigé vers la page de paiement sécurisé</p>
        </form>
        ";
        } else {
            // line 116
            yield "        <p class=\"textPrix\">Une erreur est survenue lors du calcul du montant total.</p>
    ";
        }
        // line 118
        yield "
    <hr class=\"hr\">
    <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_one_new");
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
        return "poste_one/prix.html.twig";
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
        return array (  313 => 120,  309 => 118,  305 => 116,  292 => 106,  288 => 105,  284 => 104,  280 => 103,  276 => 102,  272 => 101,  268 => 100,  264 => 99,  260 => 98,  256 => 97,  251 => 95,  247 => 94,  243 => 93,  239 => 92,  235 => 91,  231 => 90,  227 => 89,  224 => 88,  222 => 87,  217 => 84,  207 => 83,  161 => 47,  154 => 43,  121 => 13,  116 => 10,  106 => 9,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New PosteOne{% endblock %}

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
                
                var startDateStr = document.querySelector('input[name=\"start\"]').value;
                var endDateStr = document.querySelector('input[name=\"end\"]').value;

                var start = startDateStr;
                var end = endDateStr;
                
                fetch(\"{{ path('app_payment_create') }}\", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token('payment') }}'
                    },
                    body: JSON.stringify({
                        totalPrice: totalPrice,
                        isDeposit: isDeposit,
                        posteId: posteId,
                        numFishers: numFishers,
                        numNights: numNights,
                        pellets: pellets,
                        graines: graines,
                        posteType: posteType,
                        start: start,
                        end: end
                    })
                })
                .then(response => response.json())
                .then(session => {
                    if (session.error) {
                        alert(session.error);
                    } else {
                        return stripe.redirectToCheckout({ sessionId: session.id });
                    }
                })
                .then(result => {
                    if (result && result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        });
    </script>
{% endblock %}

{% block body %}
    <hr class=\"hr\">
    <h1 class=\"titre\">réservation Poste 1</h1>

    {% if totalPrice is not null %}
        <div class=\"formPrix\">
            <p>Date d'arrivée : {{ start }}</p>
            <p>Date de départ : {{ end }}</p>
            <p>Nombre de pêcheurs : {{ numFishers }}</p>
            <p>Nombre de nuits : {{ numNights }}</p>
            <p>Pellets : {{ pellets }}</p>
            <p>Graines : {{ graines }}</p>
            <p>Montant total : {{ totalPrice }} EUR</p>
        </div>
        <form action=\"{{ path('app_payment_create') }}\" method=\"POST\" class=\"formPrixButton\">
            <input type=\"hidden\" name=\"totalPrice\" value=\"{{ totalPrice }}\">
            <input type=\"hidden\" name=\"poste_id\" value=\"{{ poste_id }}\">
            <input type=\"hidden\" name=\"numFishers\" value=\"{{ numFishers }}\">
            <input type=\"hidden\" name=\"numNights\" value=\"{{ numNights }}\">
            <input type=\"hidden\" name=\"pellets\" value=\"{{ pellets }}\">
            <input type=\"hidden\" name=\"graines\" value=\"{{ graines }}\">
            <input type=\"hidden\" name=\"poste_type\" value=\"{{ poste_type }}\">
            <input type=\"hidden\" name=\"start\" value=\"{{ start }}\">
            <input type=\"hidden\" name=\"end\" value=\"{{ end }}\">
            <div>
                <button type=\"submit\" id=\"checkout-button\" class=\"btnAction\">Régler la totalité</button>
            </div>
            <div>
                <button type=\"submit\" id=\"deposit-button\" class=\"btnAction\" data-is-deposit=\"true\">Régler un acompte</button>
            </div>
            <p class=\"textPrix\">Vous allez être redirigé vers la page de paiement sécurisé</p>
        </form>
        {% else %}
        <p class=\"textPrix\">Une erreur est survenue lors du calcul du montant total.</p>
    {% endif %}

    <hr class=\"hr\">
    <a href=\"{{ path('app_poste_one_new') }}\" class=\"btnAction\">Retour</a>
{% endblock %}
", "poste_one/prix.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/poste_one/prix.html.twig");
    }
}
