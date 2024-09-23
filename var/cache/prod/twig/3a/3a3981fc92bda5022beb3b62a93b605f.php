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

/* poste/index.html.twig */
class __TwigTemplate_eb2c601a40fdd5baeb8770e831aad059 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "poste/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Postes";
        return; yield '';
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/navPoste.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 7
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    
";
        return; yield '';
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        yield "<hr class=\"hr\">
<h1 class=\"titre\" id=\"Postes\">Postes de pêche</h1>
        <div class=\"poste\">
            <h2>Poste 1</h2>
                <img src=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poste1.jpg"), "html", null, true);
        yield "\" alt=\"poste\" class=\"poste\">
            <h2>Poste 2</h2>
                <img src=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poste2.jpg"), "html", null, true);
        yield "\" alt=\"poste\" class=\"poste\">
            <h2>Poste 3</h2>
                <img src=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poste3.jpg"), "html", null, true);
        yield "\" alt=\"poste\" class=\"poste\">
            <h2>Poste 4</h2>
                <img src=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poste4.jpg"), "html", null, true);
        yield "\" alt=\"poste\" class=\"poste\">
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
        return "poste/index.html.twig";
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
        return array (  104 => 22,  99 => 20,  94 => 18,  89 => 16,  83 => 12,  79 => 11,  70 => 7,  62 => 5,  58 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "poste/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/poste/index.html.twig");
    }
}
