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

/* multi_resa/form.html.twig */
class __TwigTemplate_4641491db5a721f883050e5bed5bef76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multi_resa/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "multi_resa/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "multi_resa/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/poste.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "Combien ça coûte?")) : ("Combien ça coûte?")), "html", null, true);
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

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "multi_resa/form.html.twig";
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
        return array (  167 => 63,  160 => 59,  108 => 10,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
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
