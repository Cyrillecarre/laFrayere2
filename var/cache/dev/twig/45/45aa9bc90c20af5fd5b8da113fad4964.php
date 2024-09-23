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

/* poste_three/show.html.twig */
class __TwigTemplate_fe80097a377171b64595b95f1454f2b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_three/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_three/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "poste_three/show.html.twig", 1);
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

        yield "PosteThree";
        
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
        yield "    <h1 class=\"titre\">Poste 3</h1>

    <table class=\"table\">
        <thead>
            <tr class=\"tableIndex\">
                <th>Arrivée</th>
                <th>Départ</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Validé</th>
                <th>actions</th>
            </tr>
        <tbody>
            <tr class=\"tableValeur\">
                <td>";
        // line 24
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 24, $this->source); })()), "start", [], "any", false, false, false, 24)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 24, $this->source); })()), "start", [], "any", false, false, false, 24), "d-m-Y H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                <td>";
        // line 25
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 25, $this->source); })()), "end", [], "any", false, false, false, 25)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 25, $this->source); })()), "end", [], "any", false, false, false, 25), "d-m-Y H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                <td>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                <td>";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 27, $this->source); })()), "phoneNumber", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                <td>";
        // line 28
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 28, $this->source); })()), "isApprouved", [], "any", false, false, false, 28)) ? ("Oui") : ("Non"));
        yield "</td>
                <td>
                    <a href=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_three_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" class=\"btnAction\">modifier</a>
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_approve_reservation_three", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btnAction\">Approuver</a>
    <a href=\"";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_three_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_three"]) || array_key_exists("poste_three", $context) ? $context["poste_three"] : (function () { throw new RuntimeError('Variable "poste_three" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" class=\"btnAction\">Modifier</a>
    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_three_index");
        yield "\" class=\"btnAction\">Retour</a>

    ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "poste_three/_delete_form.html.twig");
        yield "
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
        return "poste_three/show.html.twig";
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
        return array (  174 => 40,  169 => 38,  165 => 37,  161 => 36,  152 => 30,  147 => 28,  143 => 27,  139 => 26,  135 => 25,  131 => 24,  115 => 10,  105 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PosteThree{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/poste.css') }}\">
{% endblock %}

{% block body %}
    <h1 class=\"titre\">Poste 3</h1>

    <table class=\"table\">
        <thead>
            <tr class=\"tableIndex\">
                <th>Arrivée</th>
                <th>Départ</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Validé</th>
                <th>actions</th>
            </tr>
        <tbody>
            <tr class=\"tableValeur\">
                <td>{{ poste_three.start ? poste_three.start|date('d-m-Y H:i:s') : '' }}</td>
                <td>{{ poste_three.end ? poste_three.end|date('d-m-Y H:i:s') : '' }}</td>
                <td>{{ poste_three.email }}</td>
                <td>{{ poste_three.phoneNumber }}</td>
                <td>{{ poste_three.isApprouved ? 'Oui' : 'Non' }}</td>
                <td>
                    <a href=\"{{ path('app_poste_three_edit', {'id': poste_three.id}) }}\" class=\"btnAction\">modifier</a>
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_approve_reservation_three', {'id': poste_three.id}) }}\" class=\"btnAction\">Approuver</a>
    <a href=\"{{ path('app_poste_three_edit', {'id': poste_three.id}) }}\" class=\"btnAction\">Modifier</a>
    <a href=\"{{ path('app_poste_three_index') }}\" class=\"btnAction\">Retour</a>

    {{ include('poste_three/_delete_form.html.twig') }}
{% endblock %}
", "poste_three/show.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/poste_three/show.html.twig");
    }
}
