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

/* gift/emailAdmin.html.twig */
class __TwigTemplate_b42e408b9eac3fe1d998925237f89665 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gift/emailAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gift/emailAdmin.html.twig"));

        // line 1
        yield "<div>
    <h1>Une carte cadeau a été vendu !</h1>
    <p>Préparez-vous à gérer des clients comblés... </p>
    <p>ou des remboursements surprise.</p>
    <h2>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["uniqueCode"]) || array_key_exists("uniqueCode", $context) ? $context["uniqueCode"] : (function () { throw new RuntimeError('Variable "uniqueCode" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "</h2>
    <p>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "€ ont été ajoutés à ce code.</p>
    <p>Email de l'acheteur: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userEmail"]) || array_key_exists("userEmail", $context) ? $context["userEmail"] : (function () { throw new RuntimeError('Variable "userEmail" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</p>   
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gift/emailAdmin.html.twig";
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
        return array (  62 => 7,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div>
    <h1>Une carte cadeau a été vendu !</h1>
    <p>Préparez-vous à gérer des clients comblés... </p>
    <p>ou des remboursements surprise.</p>
    <h2>{{ uniqueCode }}</h2>
    <p>{{ count }}€ ont été ajoutés à ce code.</p>
    <p>Email de l'acheteur: {{ userEmail }}</p>   
</div>", "gift/emailAdmin.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/gift/emailAdmin.html.twig");
    }
}
