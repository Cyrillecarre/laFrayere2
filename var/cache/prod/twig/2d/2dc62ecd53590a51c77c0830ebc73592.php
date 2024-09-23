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

/* base.html.twig */
class __TwigTemplate_415d2bc4c63d9c404726b3abb63f5c98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
        <script src=\"https://kit.fontawesome.com/6db39e2efc.js\" crossorigin=\"anonymous\"></script>
        
        ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 12
        yield "
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 16
        yield "    </head>
    <body>
        ";
        // line 18
        yield from         $this->loadTemplate("header.html.twig", "base.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 20
        yield "        ";
        yield from         $this->loadTemplate("footer.html.twig", "base.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "    </body>
</html>
";
        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Welcome!";
        return; yield '';
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 15
        yield "        ";
        return; yield '';
    }

    // line 14
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        return; yield '';
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  119 => 19,  111 => 14,  106 => 15,  103 => 14,  99 => 13,  91 => 10,  83 => 5,  76 => 21,  73 => 20,  70 => 19,  68 => 18,  64 => 16,  62 => 13,  59 => 12,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/base.html.twig");
    }
}
