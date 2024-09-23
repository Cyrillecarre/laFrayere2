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

/* poste_one/index.html.twig */
class __TwigTemplate_e89895a38752d7c9a2ef8d590cc9ed05 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "poste_one/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Poste 1";
        return; yield '';
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/poste.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "    <h1 class=\"titre\">Poste 1</h1>

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
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["poste_ones"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste_one"]) {
            // line 24
            yield "            <tr class=\"tableValeur\">
                <td>";
            // line 25
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "start", [], "any", false, false, false, 25)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "start", [], "any", false, false, false, 25), "d-m-Y H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 26
            ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "end", [], "any", false, false, false, 26)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "end", [], "any", false, false, false, 26), "d-m-Y H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "email", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "phoneNumber", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "isApprouved", [], "any", false, false, false, 29)) ? ("Oui") : ("Non"));
            yield "</td>
                <td>
                    <a href=\"";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_one_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["poste_one"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btnAction\">Voir</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            yield "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste_one'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_one_new");
        yield "\" class=\"btnAction\">Ajouter une réservation</a>
    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"btnAction\">Retour</a>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "poste_one/index.html.twig";
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
        return array (  145 => 43,  141 => 42,  136 => 39,  127 => 35,  118 => 31,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  94 => 24,  89 => 23,  73 => 9,  69 => 8,  61 => 5,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "poste_one/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/poste_one/index.html.twig");
    }
}
