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

/* admin/index.html.twig */
class __TwigTemplate_7fcee253bf7a68dee2148d554742a08d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Admin";
        return; yield '';
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/admin.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["poste_ones"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste_one"]) {
            // line 32
            yield "                <tr class=\"tableValeur\">
                    <td>";
            // line 33
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "start", [], "any", false, false, false, 33)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "start", [], "any", false, false, false, 33), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 34
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "end", [], "any", false, false, false, 34)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "end", [], "any", false, false, false, 34), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "email", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                    <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "phoneNumber", [], "any", false, false, false, 36), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste_one'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["poste_twos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste_two"]) {
            // line 60
            yield "                <tr class=\"tableValeur\">
                    <td>";
            // line 61
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "start", [], "any", false, false, false, 61)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "start", [], "any", false, false, false, 61), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 62
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "end", [], "any", false, false, false, 62)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "end", [], "any", false, false, false, 62), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 63
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "email", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                    <td>";
            // line 64
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_two"], "phoneNumber", [], "any", false, false, false, 64), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste_two'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["poste_threes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste_three"]) {
            // line 88
            yield "                <tr class=\"tableValeur\">
                    <td>";
            // line 89
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "start", [], "any", false, false, false, 89)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "start", [], "any", false, false, false, 89), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 90
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "end", [], "any", false, false, false, 90)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "end", [], "any", false, false, false, 90), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 91
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "email", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                    <td>";
            // line 92
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_three"], "phoneNumber", [], "any", false, false, false, 92), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste_three'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["poste_fours"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste_four"]) {
            // line 116
            yield "                <tr class=\"tableValeur\">
                    <td>";
            // line 117
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "start", [], "any", false, false, false, 117)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "start", [], "any", false, false, false, 117), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 118
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "end", [], "any", false, false, false, 118)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "end", [], "any", false, false, false, 118), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 119
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "email", [], "any", false, false, false, 119), "html", null, true);
            yield "</td>
                    <td>";
            // line 120
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_four"], "phoneNumber", [], "any", false, false, false, 120), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste_four'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "            </tbody>
        </table>
    </div>
    <hr class=\"hr\">
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
        return array (  322 => 126,  315 => 124,  307 => 121,  303 => 120,  299 => 119,  295 => 118,  291 => 117,  288 => 116,  283 => 115,  264 => 98,  257 => 96,  249 => 93,  245 => 92,  241 => 91,  237 => 90,  233 => 89,  230 => 88,  225 => 87,  206 => 70,  199 => 68,  191 => 65,  187 => 64,  183 => 63,  179 => 62,  175 => 61,  172 => 60,  167 => 59,  148 => 42,  141 => 40,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  114 => 32,  109 => 31,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  73 => 9,  69 => 8,  61 => 5,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/admin/index.html.twig");
    }
}
