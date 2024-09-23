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

/* security/login.html.twig */
class __TwigTemplate_6f7ad1100301703963597010cd153ce9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Connexion";
        return; yield '';
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/connexion.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "<form method=\"post\">
    ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            yield "        <div class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            yield "</div>
    ";
        }
        // line 13
        yield "
    ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            yield "        <div class=\"mb-3\">
            You are logged in as ";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "userIdentifier", [], "any", false, false, false, 16), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        </div>
    ";
        }
        // line 19
        yield "    <hr class=\"hr\">
    <h1 class=\"titre\">Connexion à l'espace privé</h1>
    <div class=\"form\">
        <label for=\"inputEmail\">Email</label>
        <input type=\"email\" value=\"";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["last_username"] ?? null), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"formInput\" autocomplete=\"email\" required autofocus>
        <label for=\"inputPassword\" class=\"formLabel\">Mot de passe</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"formInput\" autocomplete=\"current-password\" required>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
        <button class=\"formSubmit\" type=\"submit\">Envoyer</button>
    </div>
    <hr class=\"hr\">
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  113 => 27,  106 => 23,  100 => 19,  92 => 16,  89 => 15,  87 => 14,  84 => 13,  78 => 11,  76 => 10,  73 => 9,  69 => 8,  61 => 5,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/security/login.html.twig");
    }
}
