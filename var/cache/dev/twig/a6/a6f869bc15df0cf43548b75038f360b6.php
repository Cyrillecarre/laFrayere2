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

/* header.html.twig */
class __TwigTemplate_d4663e989cafab4deb1af71254b6bf20 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"author\" content=\"Cyrille CARRE\">
    <meta name=\"description\" content=\"La Frayère - Étang de pêche à la carpe à Pouzay. Profitez de notre étang bien équipé pour des sessions de pêche mémorables. 
    Réservez dès maintenant et découvrez les meilleurs spots de pêche à la carpe.\">
    <meta name=\"keywords\" content=\" Étang de pêche à la carpe, Pêche à la carpe, Carpodrome, Étang de pêche privé, 
    Location étang de pêche, Étang de pêche en France, Pêche de nuit carpe, Enduro carpe, Séjour pêche à la carpe, 
    Techniques de pêche à la carpe, Appâts pour carpe, Matériel de pêche à la carpe, Réservation étang pêche carpe, 
    Étang de pêche pour débutants, Étang de pêche équipé, Meilleurs spots de pêche à la carpe, Pêche sportive carpe,
    Hébergement pêche carpe, Compétition de pêche à la carpe, Étang carpe record, Conseils pêche carpe, 
    Expérience pêche à la carpe, Étang de pêche touristique, Carpe trophée, Pêche à la carpe en famille, 
    Journée de pêche à la carpe, Pêche à la carpe en étang, Tarifs pêche carpe, Guide de pêche à la carpe, 
    Sécurité pêche carpe, pêche 37, pêche 86\">
    <meta property=\"og:image:width\" content=\"100%\">
    <meta property=\"og:image:height\" content=\"100%\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("canonical_url", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["canonical_url"]) || array_key_exists("canonical_url", $context) ? $context["canonical_url"] : (function () { throw new RuntimeError('Variable "canonical_url" does not exist.', 21, $this->source); })()), "https://la-frayere.fr")) : ("https://la-frayere.fr")), "html", null, true);
        yield "\">
    <meta property=\"og:url\" content=\"https://la-frayere.fr\">
    <meta property=\"og:title\" content=\"La Frayère - Etang de pêche de la carpe\">
    <link rel=\"canonical\" href=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("canonical_url", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["canonical_url"]) || array_key_exists("canonical_url", $context) ? $context["canonical_url"] : (function () { throw new RuntimeError('Variable "canonical_url" does not exist.', 24, $this->source); })()), "https://la-frayere.fr")) : ("https://la-frayere.fr")), "html", null, true);
        yield "\">
    <title>";
        // line 25
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/header.css"), "html", null, true);
        yield "\">
    <script src=\"https://kit.fontawesome.com/6db39e2efc.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\"/>
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\" integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>
</head>
";
        // line 31
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        yield "    <div class=\"container\"> 
        <header class=\"header\">
            <img class=\"logo\" src=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoFrayere3d.jpeg"), "html", null, true);
        yield "\" alt=\"logo\">
        </header>
        <div class=\"navBarre\">
            <nav>
                <ul class=\"navListe\">
                    <li class=\"navList\"><a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"navList\"><a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\">Réservation</a></li>
                    <li class=\"navList\"><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste");
        yield "\">Postes</a></li>
                    <li class=\"navList\"><a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tarif");
        yield "\">Tarifs/Réglementation</a></li>
                    <li class=\"navList\"><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a></li>
                    <li class=\"navList\"><a href=\"https://www.facebook.com/profile.php?id=100063643567122&locale=fr_FR\" target=\"_blank\"><i class=\"fa-brands fa-facebook\"></i></a></li>
                    <li class=\"header2\"><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"><i class=\"fa-solid fa-user-secret\"></i> Connexion</a></li>
                </ul>
            </nav>
        </div>
    </div>
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
        return "header.html.twig";
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
        return array (  163 => 45,  158 => 43,  154 => 42,  150 => 41,  146 => 40,  142 => 39,  134 => 34,  130 => 32,  120 => 31,  101 => 25,  90 => 31,  82 => 26,  78 => 25,  74 => 24,  68 => 21,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"author\" content=\"Cyrille CARRE\">
    <meta name=\"description\" content=\"La Frayère - Étang de pêche à la carpe à Pouzay. Profitez de notre étang bien équipé pour des sessions de pêche mémorables. 
    Réservez dès maintenant et découvrez les meilleurs spots de pêche à la carpe.\">
    <meta name=\"keywords\" content=\" Étang de pêche à la carpe, Pêche à la carpe, Carpodrome, Étang de pêche privé, 
    Location étang de pêche, Étang de pêche en France, Pêche de nuit carpe, Enduro carpe, Séjour pêche à la carpe, 
    Techniques de pêche à la carpe, Appâts pour carpe, Matériel de pêche à la carpe, Réservation étang pêche carpe, 
    Étang de pêche pour débutants, Étang de pêche équipé, Meilleurs spots de pêche à la carpe, Pêche sportive carpe,
    Hébergement pêche carpe, Compétition de pêche à la carpe, Étang carpe record, Conseils pêche carpe, 
    Expérience pêche à la carpe, Étang de pêche touristique, Carpe trophée, Pêche à la carpe en famille, 
    Journée de pêche à la carpe, Pêche à la carpe en étang, Tarifs pêche carpe, Guide de pêche à la carpe, 
    Sécurité pêche carpe, pêche 37, pêche 86\">
    <meta property=\"og:image:width\" content=\"100%\">
    <meta property=\"og:image:height\" content=\"100%\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{{ canonical_url|default('https://la-frayere.fr') }}\">
    <meta property=\"og:url\" content=\"https://la-frayere.fr\">
    <meta property=\"og:title\" content=\"La Frayère - Etang de pêche de la carpe\">
    <link rel=\"canonical\" href=\"{{ canonical_url|default('https://la-frayere.fr') }}\">
    <title>{% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('styles/header.css') }}\">
    <script src=\"https://kit.fontawesome.com/6db39e2efc.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\"/>
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\" integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>
</head>
{% block body %}
    <div class=\"container\"> 
        <header class=\"header\">
            <img class=\"logo\" src=\"{{ asset('images/logoFrayere3d.jpeg') }}\" alt=\"logo\">
        </header>
        <div class=\"navBarre\">
            <nav>
                <ul class=\"navListe\">
                    <li class=\"navList\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"navList\"><a href=\"{{ path('app_reservation') }}\">Réservation</a></li>
                    <li class=\"navList\"><a href=\"{{ path('app_poste') }}\">Postes</a></li>
                    <li class=\"navList\"><a href=\"{{ path('app_tarif') }}\">Tarifs/Réglementation</a></li>
                    <li class=\"navList\"><a href=\"{{ path('app_contact') }}\">Contact</a></li>
                    <li class=\"navList\"><a href=\"https://www.facebook.com/profile.php?id=100063643567122&locale=fr_FR\" target=\"_blank\"><i class=\"fa-brands fa-facebook\"></i></a></li>
                    <li class=\"header2\"><a href=\"{{ path('app_login') }}\"><i class=\"fa-solid fa-user-secret\"></i> Connexion</a></li>
                </ul>
            </nav>
        </div>
    </div>
{% endblock %}", "header.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/header.html.twig");
    }
}
