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

/* admin/index.html.twig */
class __TwigTemplate_13bb596a0711164c0093955996c8d464 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        yield "Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/admin.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "<h1 class=\"titre\">Bonjour Johannes</h1>
    <ul class=\"btnPoste\">
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_one_index");
        yield "\" class=\"btnAction\">Poste 1</a>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_two_index");
        yield "\" class=\"btnAction\">Poste 2</a>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_three_index");
        yield "\" class=\"btnAction\">Poste 3</a>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_four_index");
        yield "\" class=\"btnAction\">Poste 4</a>
    </ul>

<h3 class=\"titreReservation\">Voici le récapitulatif des réservations</h3>
    <div>
        <h4 class=\"titre2\">Réservations du Poste 1</h4>
          <table class=\"table\">
            <thead>
                <tr class=\"tableIndex\">
                    <th>Arrivée</th>
                    <th>Départ</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Validé</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["poste_ones"]) || array_key_exists("poste_ones", $context) ? $context["poste_ones"] : (function () { throw new RuntimeError('Variable "poste_ones" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste_one"]) {
            // line 32
            yield "                <tr class=\"tableValeur\">
                    <td>";
            // line 33
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "start", [], "any", false, false, false, 33)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "start", [], "any", false, false, false, 33), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 34
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "end", [], "any", false, false, false, 34)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "end", [], "any", false, false, false, 34), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "email", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                    <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "phoneNumber", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                    <td>";
            // line 37
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "isApprouved", [], "any", false, false, false, 37)) ? ("Oui") : ("Non"));
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            yield "                <li>no records found</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste_one'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </tbody>
        </table>
    </div>
    <hr class=\"hr\">
    <div>
        <h4 class=\"titre2\">Réservations de Poste 2</h4>
        <table class=\"table\">
            <thead>
                <tr class=\"tableIndex\">
                    <th>Arrivée</th>
                    <th>Départ</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Validé</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["poste_twos"]) || array_key_exists("poste_twos", $context) ? $context["poste_twos"] : (function () { throw new RuntimeError('Variable "poste_twos" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste_two"]) {
            // line 60
            yield "                <tr class=\"tableValeur\">
                    <td>";
            // line 61
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "start", [], "any", false, false, false, 61)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "start", [], "any", false, false, false, 61), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 62
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "end", [], "any", false, false, false, 62)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "end", [], "any", false, false, false, 62), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "email", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                    <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "phoneNumber", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                    <td>";
            // line 65
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "isApprouved", [], "any", false, false, false, 65)) ? ("Oui") : ("Non"));
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            yield "                <li>no records found</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste_two'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "            </tbody>
        </table>
    </div>
    <hr class=\"hr\">
    <div>
        <h4 class=\"titre2\">Réservations du Poste 3</h4>
          <table class=\"table\">
            <thead>
                <tr class=\"tableIndex\">
                    <th>Arrivée</th>
                    <th>Départ</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Validé</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["poste_threes"]) || array_key_exists("poste_threes", $context) ? $context["poste_threes"] : (function () { throw new RuntimeError('Variable "poste_threes" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste_three"]) {
            // line 88
            yield "                <tr class=\"tableValeur\">
                    <td>";
            // line 89
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "start", [], "any", false, false, false, 89)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "start", [], "any", false, false, false, 89), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 90
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "end", [], "any", false, false, false, 90)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "end", [], "any", false, false, false, 90), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "email", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                    <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "phoneNumber", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                    <td>";
            // line 93
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "isApprouved", [], "any", false, false, false, 93)) ? ("Oui") : ("Non"));
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 96
            yield "                <li>no records found</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste_three'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "            </tbody>
        </table>
    </div>
    <hr class=\"hr\">
    <div>
        <h4 class=\"titre2\">Réservations du Poste 4</h4>
          <table class=\"table\">
            <thead>
                <tr class=\"tableIndex\">
                    <th>Arrivée</th>
                    <th>Départ</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Validé</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["poste_fours"]) || array_key_exists("poste_fours", $context) ? $context["poste_fours"] : (function () { throw new RuntimeError('Variable "poste_fours" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste_four"]) {
            // line 116
            yield "                <tr class=\"tableValeur\">
                    <td>";
            // line 117
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "start", [], "any", false, false, false, 117)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "start", [], "any", false, false, false, 117), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 118
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "end", [], "any", false, false, false, 118)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "end", [], "any", false, false, false, 118), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "email", [], "any", false, false, false, 119), "html", null, true);
            yield "</td>
                    <td>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "phoneNumber", [], "any", false, false, false, 120), "html", null, true);
            yield "</td>
                    <td>";
            // line 121
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "isApprouved", [], "any", false, false, false, 121)) ? ("Oui") : ("Non"));
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            yield "                <li>no records found</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste_four'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "            </tbody>
        </table>
    </div>
    <hr class=\"hr\">
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
        return "admin/index.html.twig";
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
        return array (  377 => 126,  370 => 124,  362 => 121,  358 => 120,  354 => 119,  350 => 118,  346 => 117,  343 => 116,  338 => 115,  319 => 98,  312 => 96,  304 => 93,  300 => 92,  296 => 91,  292 => 90,  288 => 89,  285 => 88,  280 => 87,  261 => 70,  254 => 68,  246 => 65,  242 => 64,  238 => 63,  234 => 62,  230 => 61,  227 => 60,  222 => 59,  203 => 42,  196 => 40,  188 => 37,  184 => 36,  180 => 35,  176 => 34,  172 => 33,  169 => 32,  164 => 31,  144 => 14,  140 => 13,  136 => 12,  132 => 11,  128 => 9,  115 => 8,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/admin.css') }}\">
{% endblock %}

{% block body %}
<h1 class=\"titre\">Bonjour Johannes</h1>
    <ul class=\"btnPoste\">
        <a href=\"{{ path('app_poste_one_index') }}\" class=\"btnAction\">Poste 1</a>
        <a href=\"{{ path('app_poste_two_index') }}\" class=\"btnAction\">Poste 2</a>
        <a href=\"{{ path('app_poste_three_index') }}\" class=\"btnAction\">Poste 3</a>
        <a href=\"{{ path('app_poste_four_index') }}\" class=\"btnAction\">Poste 4</a>
    </ul>

<h3 class=\"titreReservation\">Voici le récapitulatif des réservations</h3>
    <div>
        <h4 class=\"titre2\">Réservations du Poste 1</h4>
          <table class=\"table\">
            <thead>
                <tr class=\"tableIndex\">
                    <th>Arrivée</th>
                    <th>Départ</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Validé</th>
                </tr>
            </thead>
            <tbody>
            {% for poste_one in poste_ones %}
                <tr class=\"tableValeur\">
                    <td>{{ poste_one.start ? poste_one.start|date('d-m-Y') : '' }}</td>
                    <td>{{ poste_one.end ? poste_one.end|date('d-m-Y') : '' }}</td>
                    <td>{{ poste_one.email }}</td>
                    <td>{{ poste_one.phoneNumber }}</td>
                    <td>{{ poste_one.isApprouved ? 'Oui' : 'Non' }}</td>
                </tr>
            {% else %}
                <li>no records found</li>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <hr class=\"hr\">
    <div>
        <h4 class=\"titre2\">Réservations de Poste 2</h4>
        <table class=\"table\">
            <thead>
                <tr class=\"tableIndex\">
                    <th>Arrivée</th>
                    <th>Départ</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Validé</th>
                </tr>
            </thead>
            <tbody>
            {% for poste_two in poste_twos %}
                <tr class=\"tableValeur\">
                    <td>{{ poste_two.start ? poste_two.start|date('d-m-Y') : '' }}</td>
                    <td>{{ poste_two.end ? poste_two.end|date('d-m-Y') : '' }}</td>
                    <td>{{ poste_two.email }}</td>
                    <td>{{ poste_two.phoneNumber }}</td>
                    <td>{{ poste_two.isApprouved ? 'Oui' : 'Non' }}</td>
                </tr>
            {% else %}
                <li>no records found</li>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <hr class=\"hr\">
    <div>
        <h4 class=\"titre2\">Réservations du Poste 3</h4>
          <table class=\"table\">
            <thead>
                <tr class=\"tableIndex\">
                    <th>Arrivée</th>
                    <th>Départ</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Validé</th>
                </tr>
            </thead>
            <tbody>
            {% for poste_three in poste_threes %}
                <tr class=\"tableValeur\">
                    <td>{{ poste_three.start ? poste_three.start|date('d-m-Y') : '' }}</td>
                    <td>{{ poste_three.end ? poste_three.end|date('d-m-Y') : '' }}</td>
                    <td>{{ poste_three.email }}</td>
                    <td>{{ poste_three.phoneNumber }}</td>
                    <td>{{ poste_three.isApprouved ? 'Oui' : 'Non' }}</td>
                </tr>
            {% else %}
                <li>no records found</li>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <hr class=\"hr\">
    <div>
        <h4 class=\"titre2\">Réservations du Poste 4</h4>
          <table class=\"table\">
            <thead>
                <tr class=\"tableIndex\">
                    <th>Arrivée</th>
                    <th>Départ</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Validé</th>
                </tr>
            </thead>
            <tbody>
            {% for poste_four in poste_fours %}
                <tr class=\"tableValeur\">
                    <td>{{ poste_four.start ? poste_four.start|date('d-m-Y') : '' }}</td>
                    <td>{{ poste_four.end ? poste_four.end|date('d-m-Y') : '' }}</td>
                    <td>{{ poste_four.email }}</td>
                    <td>{{ poste_four.phoneNumber }}</td>
                    <td>{{ poste_four.isApprouved ? 'Oui' : 'Non' }}</td>
                </tr>
            {% else %}
                <li>no records found</li>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <hr class=\"hr\">
{% endblock %}

", "admin/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/admin/index.html.twig");
    }
}
