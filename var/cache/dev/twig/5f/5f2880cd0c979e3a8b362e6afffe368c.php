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

/* multi_resa/form.html.twig */
class __TwigTemplate_0d9b146fba552db023ef534d8ec828b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multi_resa/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multi_resa/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "multi_resa/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/poste.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <h1 class=\"titre\">Réserver tous les postes</h1>

    <form class=\"form\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserve_all");
        yield "\" method=\"POST\">
        <div>
            <label for=\"start\" class=\"formStart\">Date d'arrivée :</label>
        </div>
        <div>
            <input type=\"date\" id=\"start\" name=\"start\" class=\"formStart\" required>
        </div>
        <div>
            <label for=\"end\" class=\"formEnd\">Date de départ :</label>
        </div>
        <div>
            <input type=\"date\" id=\"end\" name=\"end\" class=\"formEnd\" required>
        </div>
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
        </div>
        <div>
            <label for=\"email\" class=\"formEmail\">Email :</label>
        </div>
        <div>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"formEmail\" required>
        </div>
        <div>
            <label for=\"phoneNumber\" class=\"formPhone\">Numéro de téléphone :</label>
        </div>
        <div>
            <input type=\"tel\" id=\"phoneNumber\" name=\"phoneNumber\" class=\"formPhone\" required>
        </div>
        
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
            <p class=\"hrText\">Avez-vous pensé à l'amorçage?</p>
        </div>
        <div>
    <label for=\"pellets\" class=\"numberForm\">pellets</label>
</div>
<div>
    <input id=\"pellets\" name=\"pellets\" class=\"numberForm\" value=\"0\" min=\"0\" readonly>
</div>
<div>
    <label for=\"graines\" class=\"numberForm\">graines (rupture)</label>
</div>
<div>
    <input id=\"graines\" name=\"graines\" class=\"numberForm\" value=\"0\" min=\"0\" readonly>
</div>

        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
        </div>
        <button type=\"submit\" class=\"btnAction\">";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "Combien ça coûte?")) : ("Combien ça coûte?")), "html", null, true);
        yield "</button>
    </form>

    <hr class=\"hr\">
    <a href=\"";
        // line 63
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
        return "multi_resa/form.html.twig";
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
        return array (  157 => 63,  150 => 59,  98 => 10,  94 => 8,  84 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/poste.css') }}\">
{% endblock %}

{% block body %}
    <h1 class=\"titre\">Réserver tous les postes</h1>

    <form class=\"form\" action=\"{{ path('app_reserve_all') }}\" method=\"POST\">
        <div>
            <label for=\"start\" class=\"formStart\">Date d'arrivée :</label>
        </div>
        <div>
            <input type=\"date\" id=\"start\" name=\"start\" class=\"formStart\" required>
        </div>
        <div>
            <label for=\"end\" class=\"formEnd\">Date de départ :</label>
        </div>
        <div>
            <input type=\"date\" id=\"end\" name=\"end\" class=\"formEnd\" required>
        </div>
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
        </div>
        <div>
            <label for=\"email\" class=\"formEmail\">Email :</label>
        </div>
        <div>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"formEmail\" required>
        </div>
        <div>
            <label for=\"phoneNumber\" class=\"formPhone\">Numéro de téléphone :</label>
        </div>
        <div>
            <input type=\"tel\" id=\"phoneNumber\" name=\"phoneNumber\" class=\"formPhone\" required>
        </div>
        
        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
            <p class=\"hrText\">Avez-vous pensé à l'amorçage?</p>
        </div>
        <div>
    <label for=\"pellets\" class=\"numberForm\">pellets</label>
</div>
<div>
    <input id=\"pellets\" name=\"pellets\" class=\"numberForm\" value=\"0\" min=\"0\" readonly>
</div>
<div>
    <label for=\"graines\" class=\"numberForm\">graines (rupture)</label>
</div>
<div>
    <input id=\"graines\" name=\"graines\" class=\"numberForm\" value=\"0\" min=\"0\" readonly>
</div>

        <div class=\"hrFormGrid\">
            <hr class=\"hrForm\">
        </div>
        <button type=\"submit\" class=\"btnAction\">{{ button_label|default('Combien ça coûte?') }}</button>
    </form>

    <hr class=\"hr\">
    <a href=\"{{ path('app_reservation') }}\" class=\"btnAction\">Retour</a>
{% endblock %}
", "multi_resa/form.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/multi_resa/form.html.twig");
    }
}
