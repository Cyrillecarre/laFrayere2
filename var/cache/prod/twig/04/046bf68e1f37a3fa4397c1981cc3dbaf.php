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

/* poste_two/show.html.twig */
class __TwigTemplate_f66ba0d9ce479e39ffb3eab37c602528 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "poste_two/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "PosteTwo";
        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/poste.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "    <h1 class=\"titre\">Poste 2</h1>

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
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "start", [], "any", false, false, false, 24)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "start", [], "any", false, false, false, 24), "d-m-Y H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                <td>";
        // line 25
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "end", [], "any", false, false, false, 25)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "end", [], "any", false, false, false, 25), "d-m-Y H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                <td>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                <td>";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "phoneNumber", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                <td>";
        // line 28
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "isApprouved", [], "any", false, false, false, 28)) ? ("Oui") : ("Non"));
        yield "</td>
                <td>
                    <a href=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_one_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" class=\"btnAction\">modifier</a>
                </td>
            </tr>
        </tbody>
    </table>
    <a href=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_approve_reservation_two", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"btnAction\">Approuver</a>
    <a href=\"";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_two_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["poste_two"] ?? null), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btnAction\">Modifier</a>
    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_two_index");
        yield "\" class=\"btnAction\">Retour</a>

    ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "poste_two/_delete_form.html.twig");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "poste_two/show.html.twig";
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
        return array (  131 => 39,  126 => 37,  122 => 36,  118 => 35,  110 => 30,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  73 => 10,  69 => 9,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "poste_two/show.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/poste_two/show.html.twig");
    }
}
