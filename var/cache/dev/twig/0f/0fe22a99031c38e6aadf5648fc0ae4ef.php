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

/* footer.html.twig */
class __TwigTemplate_b313d49e8ed8ac696973908f21629d12 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 4
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 7
        yield "
";
        // line 8
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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

        // line 2
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/footer.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/footer.js"), "html", null, true);
        yield "\"></script>
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
        yield "    <div class=\"footer\">
        <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoFrayere3d.jpeg"), "html", null, true);
        yield "\" alt=\"etang\" class=\"etang\">
        <div class=\"footerDescription\">
            <p>La Frayère</p>
            <p>Etang de pêche</p>
            <p>37800 Pouzay</p>
            <p>06 65 76 72 28</p>
            <p><a href=\"https://cyrille-carre.fr\" target=\"_blank\" rel=\"noopener noreferrer\">&copy; 2024 CARRE Cyrille. Tous droits réservés.</a></p>
            <a href=\"https://cyrille-carre.fr\" target=\"_blank\" rel=\"noopener noreferrer\"></a>
        </div>
        <div class=\"facebook\">
            <p>Suivez-nous sur Facebook</p>
            <a href=\"https://www.facebook.com/profile.php?id=100063643567122&locale=fr_FR\" target=\"_blank\"><i class=\"fa-brands fa-facebook\" style=\"color: #74C0FC;\"></i></a>
            <button class=\"btnMention\" id=\"mentionsLegalesBtn\">Mentions légales</button>
        </div> 
    <div class=\"popup\" id=\"mentionsLegalesPopup\">
        <div class=\"popup-content\">
            ";
        // line 26
        yield from         $this->loadTemplate("mentions/index.html.twig", "footer.html.twig", 26)->unwrap()->yield($context);
        // line 27
        yield "        </div>
    </div>
    </div>
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
        return "footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  160 => 27,  158 => 26,  139 => 10,  136 => 9,  123 => 8,  109 => 5,  96 => 4,  82 => 2,  69 => 1,  58 => 8,  55 => 7,  53 => 4,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/footer.css') }}\">
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/footer.js') }}\"></script>
{% endblock %}

{% block body %}
    <div class=\"footer\">
        <img src=\"{{ asset('images/logoFrayere3d.jpeg') }}\" alt=\"etang\" class=\"etang\">
        <div class=\"footerDescription\">
            <p>La Frayère</p>
            <p>Etang de pêche</p>
            <p>37800 Pouzay</p>
            <p>06 65 76 72 28</p>
            <p><a href=\"https://cyrille-carre.fr\" target=\"_blank\" rel=\"noopener noreferrer\">&copy; 2024 CARRE Cyrille. Tous droits réservés.</a></p>
            <a href=\"https://cyrille-carre.fr\" target=\"_blank\" rel=\"noopener noreferrer\"></a>
        </div>
        <div class=\"facebook\">
            <p>Suivez-nous sur Facebook</p>
            <a href=\"https://www.facebook.com/profile.php?id=100063643567122&locale=fr_FR\" target=\"_blank\"><i class=\"fa-brands fa-facebook\" style=\"color: #74C0FC;\"></i></a>
            <button class=\"btnMention\" id=\"mentionsLegalesBtn\">Mentions légales</button>
        </div> 
    <div class=\"popup\" id=\"mentionsLegalesPopup\">
        <div class=\"popup-content\">
            {% include 'mentions/index.html.twig' %}
        </div>
    </div>
    </div>
{% endblock %}", "footer.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/footer.html.twig");
    }
}
