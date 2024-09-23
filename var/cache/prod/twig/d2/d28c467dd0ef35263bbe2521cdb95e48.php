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

/* home/index.html.twig */
class __TwigTemplate_26b7d5b0be4dcfb286956076709b3c1b extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/home.css"), "html", null, true);
        yield "\">
    <style>
    .hidden {
            opacity: 0;
            transform: translateY(200px);
            transition: opacity 0.7s ease-out;
        }

        .visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
";
        return; yield '';
    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const elements = document.querySelectorAll(\".icon, .etang, .map\");

        function checkVisibility() {
            elements.forEach(element => {
                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    element.classList.add(\"visible\");
                }
            });
        }

        window.addEventListener(\"scroll\", checkVisibility);
        window.addEventListener(\"resize\", checkVisibility);
        checkVisibility(); // Initial check
    });
    </script>
";
        return; yield '';
    }

    // line 39
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Accueil";
        return; yield '';
    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        yield "    
    <hr class=\"hr\">
    <h1 class=\"titre\">Quelques infos</h1>
    <div class=\"iconDescription\">
        <div class=\"icon hidden\">
            <i class=\"fa-solid fa-fish-fins icon1\" style=\"color:#FFA500;\"></i>
            <p>Carpes, Amours Blanc, Koï</p>
        </div>
        <div class=\"icon hidden\">
            <i class=\"fa-regular fa-map icon1\" style=\"color:blue\"></i>
            <p>Etang de 4 hectares</p>
        </div>
        <div class=\"icon hidden\">
            <i class=\"fa-solid fa-square-rss icon1\" style=\"color:red\"></i>
            <p>Couverture réseau</p>
        </div>
    </div>
    <div class=\"iconDescription\">
        <div class=\"icon hidden\">
            <i class=\"fa-solid fa-shoe-prints icon1\" style=\"color:#F5F5DC\"></i>
            <p>Site cloturé</p>
        </div>
        <div class=\"icon hidden\">
            <i class=\"fa-solid fa-toilet-paper icon1\" style=\"color:#8B4513\"></i>
            <p>Sanitaires</p>
        </div>
        <div class=\"icon hidden\">
            <i class=\"fa-solid fa-tree icon1\" style=\"color:green\"></i>
            <p>Environnement sauvage</p>
        </div>
    </div>
    <hr class=\"hr\">
    <div class=\"etang hidden\">
        <img src=\"";
        // line 75
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/environnement.jpg"), "html", null, true);
        yield "\" alt=\"etang\" class=\"etang\">
        </div>
    <hr class=\"hr\">
    <div id=\"map\" class=\"map hidden\">
                api map
    </div> 
    <script src=\"";
        // line 81
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home.js"), "html", null, true);
        yield "\"></script>
    <hr class=\"hr\">
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  156 => 81,  147 => 75,  112 => 42,  108 => 41,  100 => 39,  74 => 18,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/home/index.html.twig");
    }
}
