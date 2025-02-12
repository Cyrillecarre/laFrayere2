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

/* medaille/index.html.twig */
class __TwigTemplate_22e8327feeb83d419f47f135d03ec541 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medaille/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medaille/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medaille/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/honneur.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/medaille.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        yield "Medaille index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    <h1 class=\"titre\">Tableau d'honneur</h1>
    <hr class=\"hr\">
    <h2 class=\"titre2\">Commune</h2>
    <table class=\"table\">
        <tbody class=\"tableContent\">
        <tr>
            ";
        // line 19
        $context["medailleOr"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["medailles"]) || array_key_exists("medailles", $context) ? $context["medailles"] : (function () { throw new RuntimeError('Variable "medailles" does not exist.', 19, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 19, $this->source); })()), "category", [], "any", false, false, false, 19) == "Or") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19) == "Commune")); }));
        // line 20
        yield "            ";
        $context["medailleArgent"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["medailles"]) || array_key_exists("medailles", $context) ? $context["medailles"] : (function () { throw new RuntimeError('Variable "medailles" does not exist.', 20, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 20, $this->source); })()), "category", [], "any", false, false, false, 20) == "Argent") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20) == "Commune")); }));
        // line 21
        yield "            ";
        $context["medailleBronze"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["medailles"]) || array_key_exists("medailles", $context) ? $context["medailles"] : (function () { throw new RuntimeError('Variable "medailles" does not exist.', 21, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 21, $this->source); })()), "category", [], "any", false, false, false, 21) == "Bronze") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21) == "Commune")); }));
        // line 22
        yield "
            <td class=\"tableContent2\">
                ";
        // line 24
        if ((isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 24, $this->source); })())) {
            // line 25
            yield "                    <p class=\"medaille\">&#x1F948</p>
                    ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 26, $this->source); })()), "picture", [], "any", false, false, false, 26)) {
                // line 27
                yield "                        <img class=\"responsive-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/medailles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 27, $this->source); })()), "picture", [], "any", false, false, false, 27))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
                yield "\" style=\"max-width: 500px; max-height: 500px;\">
                    ";
            } else {
                // line 29
                yield "                        No image
                    ";
            }
            // line 31
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                    <p>";
            // line 32
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</p>
                    <p>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 33, $this->source); })()), "weight", [], "any", false, false, false, 33), "html", null, true);
            yield " kg</p>
                    <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">edit</a>
                ";
        } else {
            // line 37
            yield "                    <p>No medal</p>
                ";
        }
        // line 39
        yield "            </td>

            <td class=\"tableContent2\">
                ";
        // line 42
        if ((isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 42, $this->source); })())) {
            // line 43
            yield "                    <p class=\"medaille\">&#x1F3C5</p>
                    ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 44, $this->source); })()), "picture", [], "any", false, false, false, 44)) {
                // line 45
                yield "                        <img class=\"responsive-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/medailles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 45, $this->source); })()), "picture", [], "any", false, false, false, 45))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
                yield "\" style=\"max-width: 500px; max-height: 500px;\">
                    ";
            } else {
                // line 47
                yield "                        No image
                    ";
            }
            // line 49
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
            yield "</p>
                    <p>";
            // line 50
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 50, $this->source); })()), "date", [], "any", false, false, false, 50)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 50, $this->source); })()), "date", [], "any", false, false, false, 50), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</p>
                    <p>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 51, $this->source); })()), "weight", [], "any", false, false, false, 51), "html", null, true);
            yield " kg</p>
                    <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\">edit</a>
                ";
        } else {
            // line 55
            yield "                    <p>No medal</p>
                ";
        }
        // line 57
        yield "            </td>

            <td class=\"tableContent2\">
                ";
        // line 60
        if ((isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 60, $this->source); })())) {
            // line 61
            yield "                    <p class=\"medaille\">&#x1F949</p>
                    ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 62, $this->source); })()), "picture", [], "any", false, false, false, 62)) {
                // line 63
                yield "                        <img class=\"responsive-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/medailles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 63, $this->source); })()), "picture", [], "any", false, false, false, 63))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "html", null, true);
                yield "\" style=\"max-width: 500px; max-height: 500px;\">
                    ";
            } else {
                // line 65
                yield "                        No image
                    ";
            }
            // line 67
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), "html", null, true);
            yield "</p>
                    <p>";
            // line 68
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 68, $this->source); })()), "date", [], "any", false, false, false, 68)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 68, $this->source); })()), "date", [], "any", false, false, false, 68), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</p>
                    <p>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 69, $this->source); })()), "weight", [], "any", false, false, false, 69), "html", null, true);
            yield " kg</p>
                    <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\">edit</a>
                ";
        } else {
            // line 73
            yield "                    <p>No medal</p>
                ";
        }
        // line 75
        yield "            </td>
        </tr>
        </tbody>
    </table>

    <hr class=\"hr\">
    <h2 class=\"titre2\">Miroir</h2>
    <table class=\"table\">
        <tbody class=\"tableContent\">
        <tr>
            ";
        // line 85
        $context["medailleOr"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["medailles"]) || array_key_exists("medailles", $context) ? $context["medailles"] : (function () { throw new RuntimeError('Variable "medailles" does not exist.', 85, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 85, $this->source); })()), "category", [], "any", false, false, false, 85) == "Or") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 85, $this->source); })()), "type", [], "any", false, false, false, 85) == "Miroir")); }));
        // line 86
        yield "            ";
        $context["medailleArgent"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["medailles"]) || array_key_exists("medailles", $context) ? $context["medailles"] : (function () { throw new RuntimeError('Variable "medailles" does not exist.', 86, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 86, $this->source); })()), "category", [], "any", false, false, false, 86) == "Argent") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 86, $this->source); })()), "type", [], "any", false, false, false, 86) == "Miroir")); }));
        // line 87
        yield "            ";
        $context["medailleBronze"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["medailles"]) || array_key_exists("medailles", $context) ? $context["medailles"] : (function () { throw new RuntimeError('Variable "medailles" does not exist.', 87, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 87, $this->source); })()), "category", [], "any", false, false, false, 87) == "Bronze") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 87, $this->source); })()), "type", [], "any", false, false, false, 87) == "Miroir")); }));
        // line 88
        yield "
            <td class=\"tableContent2\">
                ";
        // line 90
        if ((isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 90, $this->source); })())) {
            // line 91
            yield "                    <p class=\"medaille\">&#x1F948</p>
                    ";
            // line 92
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 92, $this->source); })()), "picture", [], "any", false, false, false, 92)) {
                // line 93
                yield "                        <img class=\"responsive-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/medailles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 93, $this->source); })()), "picture", [], "any", false, false, false, 93))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), "html", null, true);
                yield "\" style=\"max-width: 500px; max-height: 500px;\">
                    ";
            } else {
                // line 95
                yield "                        No image
                    ";
            }
            // line 97
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "html", null, true);
            yield "</p>
                    <p>";
            // line 98
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 98, $this->source); })()), "date", [], "any", false, false, false, 98)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 98, $this->source); })()), "date", [], "any", false, false, false, 98), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</p>
                    <p>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 99, $this->source); })()), "weight", [], "any", false, false, false, 99), "html", null, true);
            yield " kg</p>
                    <a href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\">edit</a>
                ";
        } else {
            // line 103
            yield "                    <p>No medal</p>
                ";
        }
        // line 105
        yield "            </td>
            <td class=\"tableContent2\">
                ";
        // line 107
        if ((isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 107, $this->source); })())) {
            // line 108
            yield "                    <p class=\"medaille\">&#x1F3C5</p>
                    ";
            // line 109
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 109, $this->source); })()), "picture", [], "any", false, false, false, 109)) {
                // line 110
                yield "                        <img class=\"responsive-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/medailles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 110, $this->source); })()), "picture", [], "any", false, false, false, 110))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 110, $this->source); })()), "name", [], "any", false, false, false, 110), "html", null, true);
                yield "\" style=\"max-width: 500px; max-height: 500px;\">
                    ";
            } else {
                // line 112
                yield "                        No image
                    ";
            }
            // line 114
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 114, $this->source); })()), "name", [], "any", false, false, false, 114), "html", null, true);
            yield "</p>
                    <p>";
            // line 115
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 115, $this->source); })()), "date", [], "any", false, false, false, 115)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 115, $this->source); })()), "date", [], "any", false, false, false, 115), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</p>
                    <p>";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 116, $this->source); })()), "weight", [], "any", false, false, false, 116), "html", null, true);
            yield " kg</p>
                    <a href=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\">edit</a>
                ";
        } else {
            // line 120
            yield "                    <p>No medal</p>
                ";
        }
        // line 122
        yield "            </td>

            <td class=\"tableContent2\">
                ";
        // line 125
        if ((isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 125, $this->source); })())) {
            // line 126
            yield "                    <p class=\"medaille\">&#x1F949</p>
                    ";
            // line 127
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 127, $this->source); })()), "picture", [], "any", false, false, false, 127)) {
                // line 128
                yield "                        <img class=\"responsive-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/medailles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 128, $this->source); })()), "picture", [], "any", false, false, false, 128))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 128, $this->source); })()), "name", [], "any", false, false, false, 128), "html", null, true);
                yield "\" style=\"max-width: 500px; max-height: 500px;\">
                    ";
            } else {
                // line 130
                yield "                        No image
                    ";
            }
            // line 132
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 132, $this->source); })()), "name", [], "any", false, false, false, 132), "html", null, true);
            yield "</p>
                    <p>";
            // line 133
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 133, $this->source); })()), "date", [], "any", false, false, false, 133)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 133, $this->source); })()), "date", [], "any", false, false, false, 133), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</p>
                    <p>";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 134, $this->source); })()), "weight", [], "any", false, false, false, 134), "html", null, true);
            yield " kg</p>
                    <a href=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\">edit</a>
                ";
        } else {
            // line 138
            yield "                    <p>No medal</p>
                ";
        }
        // line 140
        yield "            </td>
        </tr>
        </tbody>
    </table>

    <hr class=\"hr\">
    <h2 class=\"titre2\">Koï</h2>
    <table class=\"table\">
        <tbody class=\"tableContent\">
        <tr>
            ";
        // line 150
        $context["medailleOr"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["medailles"]) || array_key_exists("medailles", $context) ? $context["medailles"] : (function () { throw new RuntimeError('Variable "medailles" does not exist.', 150, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 150, $this->source); })()), "category", [], "any", false, false, false, 150) == "Or") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 150, $this->source); })()), "type", [], "any", false, false, false, 150) == "Koï")); }));
        // line 151
        yield "            ";
        $context["medailleArgent"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["medailles"]) || array_key_exists("medailles", $context) ? $context["medailles"] : (function () { throw new RuntimeError('Variable "medailles" does not exist.', 151, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 151, $this->source); })()), "category", [], "any", false, false, false, 151) == "Argent") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 151, $this->source); })()), "type", [], "any", false, false, false, 151) == "Koï")); }));
        // line 152
        yield "            ";
        $context["medailleBronze"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["medailles"]) || array_key_exists("medailles", $context) ? $context["medailles"] : (function () { throw new RuntimeError('Variable "medailles" does not exist.', 152, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 152, $this->source); })()), "category", [], "any", false, false, false, 152) == "Bronze") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 152, $this->source); })()), "type", [], "any", false, false, false, 152) == "Koï")); }));
        // line 153
        yield "
            <td class=\"tableContent2\">
                ";
        // line 155
        if ((isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 155, $this->source); })())) {
            // line 156
            yield "                    <p class=\"medaille\">&#x1F948</p>
                    ";
            // line 157
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 157, $this->source); })()), "picture", [], "any", false, false, false, 157)) {
                // line 158
                yield "                        <img class=\"responsive-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/medailles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 158, $this->source); })()), "picture", [], "any", false, false, false, 158))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 158, $this->source); })()), "name", [], "any", false, false, false, 158), "html", null, true);
                yield "\" style=\"max-width: 500px; max-height: 500px;\">
                    ";
            } else {
                // line 160
                yield "                        No image
                    ";
            }
            // line 162
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 162, $this->source); })()), "name", [], "any", false, false, false, 162), "html", null, true);
            yield "</p>
                    <p>";
            // line 163
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 163, $this->source); })()), "date", [], "any", false, false, false, 163)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 163, $this->source); })()), "date", [], "any", false, false, false, 163), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</p>
                    <p>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 164, $this->source); })()), "weight", [], "any", false, false, false, 164), "html", null, true);
            yield " kg</p>
                    <a href=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleArgent"]) || array_key_exists("medailleArgent", $context) ? $context["medailleArgent"] : (function () { throw new RuntimeError('Variable "medailleArgent" does not exist.', 166, $this->source); })()), "id", [], "any", false, false, false, 166)]), "html", null, true);
            yield "\">edit</a>
                ";
        } else {
            // line 168
            yield "                    <p>No medal</p>
                ";
        }
        // line 170
        yield "            </td>

            <td class=\"tableContent2\">
                ";
        // line 173
        if ((isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 173, $this->source); })())) {
            // line 174
            yield "                    <p class=\"medaille\">&#x1F3C5</p>
                    ";
            // line 175
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 175, $this->source); })()), "picture", [], "any", false, false, false, 175)) {
                // line 176
                yield "                        <img class=\"responsive-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/medailles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 176, $this->source); })()), "picture", [], "any", false, false, false, 176))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 176, $this->source); })()), "name", [], "any", false, false, false, 176), "html", null, true);
                yield "\" style=\"max-width: 500px; max-height: 500px;\">
                    ";
            } else {
                // line 178
                yield "                        No image
                    ";
            }
            // line 180
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 180, $this->source); })()), "name", [], "any", false, false, false, 180), "html", null, true);
            yield "</p>
                    <p>";
            // line 181
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 181, $this->source); })()), "date", [], "any", false, false, false, 181)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 181, $this->source); })()), "date", [], "any", false, false, false, 181), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</p>
                    <p>";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 182, $this->source); })()), "weight", [], "any", false, false, false, 182), "html", null, true);
            yield " kg</p>
                    <a href=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleOr"]) || array_key_exists("medailleOr", $context) ? $context["medailleOr"] : (function () { throw new RuntimeError('Variable "medailleOr" does not exist.', 184, $this->source); })()), "id", [], "any", false, false, false, 184)]), "html", null, true);
            yield "\">edit</a>
                ";
        } else {
            // line 186
            yield "                    <p>No medal</p>
                ";
        }
        // line 188
        yield "            </td>

            <td class=\"tableContent2\">
                ";
        // line 191
        if ((isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 191, $this->source); })())) {
            // line 192
            yield "                    <p class=\"medaille\">&#x1F949</p>
                    ";
            // line 193
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 193, $this->source); })()), "picture", [], "any", false, false, false, 193)) {
                // line 194
                yield "                        <img class=\"responsive-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/medailles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 194, $this->source); })()), "picture", [], "any", false, false, false, 194))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 194, $this->source); })()), "name", [], "any", false, false, false, 194), "html", null, true);
                yield "\" style=\"max-width: 500px; max-height: 500px;\">
                    ";
            } else {
                // line 196
                yield "                        No image
                    ";
            }
            // line 198
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 198, $this->source); })()), "name", [], "any", false, false, false, 198), "html", null, true);
            yield "</p>
                    <p>";
            // line 199
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 199, $this->source); })()), "date", [], "any", false, false, false, 199)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 199, $this->source); })()), "date", [], "any", false, false, false, 199), "d-m-Y"), "html", null, true)) : (yield ""));
            yield "</p>
                    <p>";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 200, $this->source); })()), "weight", [], "any", false, false, false, 200), "html", null, true);
            yield " kg</p>
                    <a href=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medaille_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medailleBronze"]) || array_key_exists("medailleBronze", $context) ? $context["medailleBronze"] : (function () { throw new RuntimeError('Variable "medailleBronze" does not exist.', 202, $this->source); })()), "id", [], "any", false, false, false, 202)]), "html", null, true);
            yield "\">edit</a>
                ";
        } else {
            // line 204
            yield "                    <p>No medal</p>
                ";
        }
        // line 206
        yield "            </td>
        </tr>
        </tbody>
    </table>
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
        return "medaille/index.html.twig";
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
        return array (  658 => 206,  654 => 204,  649 => 202,  645 => 201,  641 => 200,  637 => 199,  632 => 198,  628 => 196,  620 => 194,  618 => 193,  615 => 192,  613 => 191,  608 => 188,  604 => 186,  599 => 184,  595 => 183,  591 => 182,  587 => 181,  582 => 180,  578 => 178,  570 => 176,  568 => 175,  565 => 174,  563 => 173,  558 => 170,  554 => 168,  549 => 166,  545 => 165,  541 => 164,  537 => 163,  532 => 162,  528 => 160,  520 => 158,  518 => 157,  515 => 156,  513 => 155,  509 => 153,  506 => 152,  503 => 151,  501 => 150,  489 => 140,  485 => 138,  480 => 136,  476 => 135,  472 => 134,  468 => 133,  463 => 132,  459 => 130,  451 => 128,  449 => 127,  446 => 126,  444 => 125,  439 => 122,  435 => 120,  430 => 118,  426 => 117,  422 => 116,  418 => 115,  413 => 114,  409 => 112,  401 => 110,  399 => 109,  396 => 108,  394 => 107,  390 => 105,  386 => 103,  381 => 101,  377 => 100,  373 => 99,  369 => 98,  364 => 97,  360 => 95,  352 => 93,  350 => 92,  347 => 91,  345 => 90,  341 => 88,  338 => 87,  335 => 86,  333 => 85,  321 => 75,  317 => 73,  312 => 71,  308 => 70,  304 => 69,  300 => 68,  295 => 67,  291 => 65,  283 => 63,  281 => 62,  278 => 61,  276 => 60,  271 => 57,  267 => 55,  262 => 53,  258 => 52,  254 => 51,  250 => 50,  245 => 49,  241 => 47,  233 => 45,  231 => 44,  228 => 43,  226 => 42,  221 => 39,  217 => 37,  212 => 35,  208 => 34,  204 => 33,  200 => 32,  195 => 31,  191 => 29,  183 => 27,  181 => 26,  178 => 25,  176 => 24,  172 => 22,  169 => 21,  166 => 20,  164 => 19,  156 => 13,  143 => 12,  120 => 10,  106 => 7,  93 => 6,  79 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/honneur.css') }}\">
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/medaille.js') }}\"></script>
{% endblock %}

{% block title %}Medaille index{% endblock %}

{% block body %}
    <h1 class=\"titre\">Tableau d'honneur</h1>
    <hr class=\"hr\">
    <h2 class=\"titre2\">Commune</h2>
    <table class=\"table\">
        <tbody class=\"tableContent\">
        <tr>
            {% set medailleOr = medailles|filter(m => m.category == 'Or' and m.type == 'Commune')|first %}
            {% set medailleArgent = medailles|filter(m => m.category == 'Argent' and m.type == 'Commune')|first %}
            {% set medailleBronze = medailles|filter(m => m.category == 'Bronze' and m.type == 'Commune')|first %}

            <td class=\"tableContent2\">
                {% if medailleArgent %}
                    <p class=\"medaille\">&#x1F948</p>
                    {% if medailleArgent.picture %}
                        <img class=\"responsive-image\" src=\"{{ asset('uploads/medailles/' ~ medailleArgent.picture) }}\" alt=\"{{ medailleArgent.name }}\" style=\"max-width: 500px; max-height: 500px;\">
                    {% else %}
                        No image
                    {% endif %}
                    <p>{{ medailleArgent.name }}</p>
                    <p>{{ medailleArgent.date ? medailleArgent.date|date('d-m-Y') : '' }}</p>
                    <p>{{ medailleArgent.weight }} kg</p>
                    <a href=\"{{ path('app_medaille_show', {'id': medailleArgent.id}) }}\">show</a>
                    <a href=\"{{ path('app_medaille_edit', {'id': medailleArgent.id}) }}\">edit</a>
                {% else %}
                    <p>No medal</p>
                {% endif %}
            </td>

            <td class=\"tableContent2\">
                {% if medailleOr %}
                    <p class=\"medaille\">&#x1F3C5</p>
                    {% if medailleOr.picture %}
                        <img class=\"responsive-image\" src=\"{{ asset('uploads/medailles/' ~ medailleOr.picture) }}\" alt=\"{{ medailleOr.name }}\" style=\"max-width: 500px; max-height: 500px;\">
                    {% else %}
                        No image
                    {% endif %}
                    <p>{{ medailleOr.name }}</p>
                    <p>{{ medailleOr.date ? medailleOr.date|date('d-m-Y') : '' }}</p>
                    <p>{{ medailleOr.weight }} kg</p>
                    <a href=\"{{ path('app_medaille_show', {'id': medailleOr.id}) }}\">show</a>
                    <a href=\"{{ path('app_medaille_edit', {'id': medailleOr.id}) }}\">edit</a>
                {% else %}
                    <p>No medal</p>
                {% endif %}
            </td>

            <td class=\"tableContent2\">
                {% if medailleBronze %}
                    <p class=\"medaille\">&#x1F949</p>
                    {% if medailleBronze.picture %}
                        <img class=\"responsive-image\" src=\"{{ asset('uploads/medailles/' ~ medailleBronze.picture) }}\" alt=\"{{ medailleBronze.name }}\" style=\"max-width: 500px; max-height: 500px;\">
                    {% else %}
                        No image
                    {% endif %}
                    <p>{{ medailleBronze.name }}</p>
                    <p>{{ medailleBronze.date ? medailleBronze.date|date('d-m-Y') : '' }}</p>
                    <p>{{ medailleBronze.weight }} kg</p>
                    <a href=\"{{ path('app_medaille_show', {'id': medailleBronze.id}) }}\">show</a>
                    <a href=\"{{ path('app_medaille_edit', {'id': medailleBronze.id}) }}\">edit</a>
                {% else %}
                    <p>No medal</p>
                {% endif %}
            </td>
        </tr>
        </tbody>
    </table>

    <hr class=\"hr\">
    <h2 class=\"titre2\">Miroir</h2>
    <table class=\"table\">
        <tbody class=\"tableContent\">
        <tr>
            {% set medailleOr = medailles|filter(m => m.category == 'Or' and m.type == 'Miroir')|first %}
            {% set medailleArgent = medailles|filter(m => m.category == 'Argent' and m.type == 'Miroir')|first %}
            {% set medailleBronze = medailles|filter(m => m.category == 'Bronze' and m.type == 'Miroir')|first %}

            <td class=\"tableContent2\">
                {% if medailleArgent %}
                    <p class=\"medaille\">&#x1F948</p>
                    {% if medailleArgent.picture %}
                        <img class=\"responsive-image\" src=\"{{ asset('uploads/medailles/' ~ medailleArgent.picture) }}\" alt=\"{{ medailleArgent.name }}\" style=\"max-width: 500px; max-height: 500px;\">
                    {% else %}
                        No image
                    {% endif %}
                    <p>{{ medailleArgent.name }}</p>
                    <p>{{ medailleArgent.date ? medailleArgent.date|date('d-m-Y') : '' }}</p>
                    <p>{{ medailleArgent.weight }} kg</p>
                    <a href=\"{{ path('app_medaille_show', {'id': medailleArgent.id}) }}\">show</a>
                    <a href=\"{{ path('app_medaille_edit', {'id': medailleArgent.id}) }}\">edit</a>
                {% else %}
                    <p>No medal</p>
                {% endif %}
            </td>
            <td class=\"tableContent2\">
                {% if medailleOr %}
                    <p class=\"medaille\">&#x1F3C5</p>
                    {% if medailleOr.picture %}
                        <img class=\"responsive-image\" src=\"{{ asset('uploads/medailles/' ~ medailleOr.picture) }}\" alt=\"{{ medailleOr.name }}\" style=\"max-width: 500px; max-height: 500px;\">
                    {% else %}
                        No image
                    {% endif %}
                    <p>{{ medailleOr.name }}</p>
                    <p>{{ medailleOr.date ? medailleOr.date|date('d-m-Y') : '' }}</p>
                    <p>{{ medailleOr.weight }} kg</p>
                    <a href=\"{{ path('app_medaille_show', {'id': medailleOr.id}) }}\">show</a>
                    <a href=\"{{ path('app_medaille_edit', {'id': medailleOr.id}) }}\">edit</a>
                {% else %}
                    <p>No medal</p>
                {% endif %}
            </td>

            <td class=\"tableContent2\">
                {% if medailleBronze %}
                    <p class=\"medaille\">&#x1F949</p>
                    {% if medailleBronze.picture %}
                        <img class=\"responsive-image\" src=\"{{ asset('uploads/medailles/' ~ medailleBronze.picture) }}\" alt=\"{{ medailleBronze.name }}\" style=\"max-width: 500px; max-height: 500px;\">
                    {% else %}
                        No image
                    {% endif %}
                    <p>{{ medailleBronze.name }}</p>
                    <p>{{ medailleBronze.date ? medailleBronze.date|date('d-m-Y') : '' }}</p>
                    <p>{{ medailleBronze.weight }} kg</p>
                    <a href=\"{{ path('app_medaille_show', {'id': medailleBronze.id}) }}\">show</a>
                    <a href=\"{{ path('app_medaille_edit', {'id': medailleBronze.id}) }}\">edit</a>
                {% else %}
                    <p>No medal</p>
                {% endif %}
            </td>
        </tr>
        </tbody>
    </table>

    <hr class=\"hr\">
    <h2 class=\"titre2\">Koï</h2>
    <table class=\"table\">
        <tbody class=\"tableContent\">
        <tr>
            {% set medailleOr = medailles|filter(m => m.category == 'Or' and m.type == 'Koï')|first %}
            {% set medailleArgent = medailles|filter(m => m.category == 'Argent' and m.type == 'Koï')|first %}
            {% set medailleBronze = medailles|filter(m => m.category == 'Bronze' and m.type == 'Koï')|first %}

            <td class=\"tableContent2\">
                {% if medailleArgent %}
                    <p class=\"medaille\">&#x1F948</p>
                    {% if medailleArgent.picture %}
                        <img class=\"responsive-image\" src=\"{{ asset('uploads/medailles/' ~ medailleArgent.picture) }}\" alt=\"{{ medailleArgent.name }}\" style=\"max-width: 500px; max-height: 500px;\">
                    {% else %}
                        No image
                    {% endif %}
                    <p>{{ medailleArgent.name }}</p>
                    <p>{{ medailleArgent.date ? medailleArgent.date|date('d-m-Y') : '' }}</p>
                    <p>{{ medailleArgent.weight }} kg</p>
                    <a href=\"{{ path('app_medaille_show', {'id': medailleArgent.id}) }}\">show</a>
                    <a href=\"{{ path('app_medaille_edit', {'id': medailleArgent.id}) }}\">edit</a>
                {% else %}
                    <p>No medal</p>
                {% endif %}
            </td>

            <td class=\"tableContent2\">
                {% if medailleOr %}
                    <p class=\"medaille\">&#x1F3C5</p>
                    {% if medailleOr.picture %}
                        <img class=\"responsive-image\" src=\"{{ asset('uploads/medailles/' ~ medailleOr.picture) }}\" alt=\"{{ medailleOr.name }}\" style=\"max-width: 500px; max-height: 500px;\">
                    {% else %}
                        No image
                    {% endif %}
                    <p>{{ medailleOr.name }}</p>
                    <p>{{ medailleOr.date ? medailleOr.date|date('d-m-Y') : '' }}</p>
                    <p>{{ medailleOr.weight }} kg</p>
                    <a href=\"{{ path('app_medaille_show', {'id': medailleOr.id}) }}\">show</a>
                    <a href=\"{{ path('app_medaille_edit', {'id': medailleOr.id}) }}\">edit</a>
                {% else %}
                    <p>No medal</p>
                {% endif %}
            </td>

            <td class=\"tableContent2\">
                {% if medailleBronze %}
                    <p class=\"medaille\">&#x1F949</p>
                    {% if medailleBronze.picture %}
                        <img class=\"responsive-image\" src=\"{{ asset('uploads/medailles/' ~ medailleBronze.picture) }}\" alt=\"{{ medailleBronze.name }}\" style=\"max-width: 500px; max-height: 500px;\">
                    {% else %}
                        No image
                    {% endif %}
                    <p>{{ medailleBronze.name }}</p>
                    <p>{{ medailleBronze.date ? medailleBronze.date|date('d-m-Y') : '' }}</p>
                    <p>{{ medailleBronze.weight }} kg</p>
                    <a href=\"{{ path('app_medaille_show', {'id': medailleBronze.id}) }}\">show</a>
                    <a href=\"{{ path('app_medaille_edit', {'id': medailleBronze.id}) }}\">edit</a>
                {% else %}
                    <p>No medal</p>
                {% endif %}
            </td>
        </tr>
        </tbody>
    </table>
        <hr class=\"hr\">
{% endblock %}", "medaille/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/medaille/index.html.twig");
    }
}
