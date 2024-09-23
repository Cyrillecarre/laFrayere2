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

/* footer.html.twig */
class __TwigTemplate_85d939e400b9ae0b1ac843acd322451d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        return; yield '';
    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/footer.css"), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"footer\">
        <img src=\"";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoFrayere.jpg"), "html", null, true);
        yield "\" alt=\"etang\" class=\"etang\">
        <div class=\"footerDescription\">
            <p>La Frayère</p>
            <p>Etang de pêche</p>
            <p>37800 Pouzay</p>
            <p>06 65 76 72 28</p>
            <p><a href=\"https://cyrille-carre.fr\" target=\"_blank\">&copy; 2024 CARRE Cyrille. Tous droits réservés.</a></p>
            <a href=\"https://cyrille-carre.fr\" target=\"_blank\"></a>
        </div>
        <div class=\"facebook\">
        <p>Suivez-nous sur Facebook</p>
        <a href=\"https://www.facebook.com/profile.php?id=100063643567122&locale=fr_FR\" target=\"_blank\"><i class=\"fa-brands fa-facebook\" style=\"color: #74C0FC;\"></i></a>
        </div>
    </div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  69 => 7,  66 => 6,  62 => 5,  54 => 2,  50 => 1,  45 => 5,  42 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/footer.html.twig");
    }
}
