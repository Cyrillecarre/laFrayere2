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

/* gift/emailUser.html.twig */
class __TwigTemplate_defde0c2843cf604d34007f66d47c3b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gift/emailUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gift/emailUser.html.twig"));

        // line 1
        yield "<div>
    <h2>Vous avez achetez une carte cadeau</h2>
    <p>Toute l'équipe de la frayère vous remercie pour votre achat.</p>
    <h2> Votre code promo est :</h2>
    <h1>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["uniqueCode"]) || array_key_exists("uniqueCode", $context) ? $context["uniqueCode"] : (function () { throw new RuntimeError('Variable "uniqueCode" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "</h1>
    <p>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "€ ont été ajoutés à ce code.</p>
    <p>Vous pouvez l'utiliser dès maintenant en réservant votre séjour sur https://la-frayere.fr</p>
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
        return "gift/emailUser.html.twig";
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
        return array (  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div>
    <h2>Vous avez achetez une carte cadeau</h2>
    <p>Toute l'équipe de la frayère vous remercie pour votre achat.</p>
    <h2> Votre code promo est :</h2>
    <h1>{{ uniqueCode }}</h1>
    <p>{{ count }}€ ont été ajoutés à ce code.</p>
    <p>Vous pouvez l'utiliser dès maintenant en réservant votre séjour sur https://la-frayere.fr</p>
</div>", "gift/emailUser.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/gift/emailUser.html.twig");
    }
}
