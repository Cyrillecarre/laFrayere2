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
class __TwigTemplate_fd981ac9b4457fd34e31167b83cb0858 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 39
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  211 => 81,  202 => 75,  167 => 42,  157 => 41,  137 => 39,  108 => 19,  98 => 18,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/home.css') }}\">
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
{% endblock %}
{% block javascripts %}
<script>
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
{% endblock %}

{% block title %}Accueil{% endblock %}

{% block body %}
    
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
        <img src=\"{{ asset('images/environnement.jpg') }}\" alt=\"etang\" class=\"etang\">
        </div>
    <hr class=\"hr\">
    <div id=\"map\" class=\"map hidden\">
                api map
    </div> 
    <script src=\"{{ asset('js/home.js') }}\"></script>
    <hr class=\"hr\">
{% endblock %}
", "home/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/home/index.html.twig");
    }
}
