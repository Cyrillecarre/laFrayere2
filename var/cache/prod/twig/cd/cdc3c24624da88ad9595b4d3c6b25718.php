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
class __TwigTemplate_dfc9ab5bfd71a140a77e00ce4684d7c8 extends Template
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
    <meta property=\"og:url\" content=\"https://la-frayere.fr\">
    <meta property=\"og:title\" content=\"La Frayère - Etang de pêche de la carpe\">
    <title>";
        // line 23
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/header.css"), "html", null, true);
        yield "\">
    <script src=\"https://kit.fontawesome.com/6db39e2efc.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\" crossorigin=\"\"/>
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\" integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\" crossorigin=\"\"></script>
</head>
";
        // line 29
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        return; yield '';
    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    <div class=\"container\"> 
        <header class=\"header\">
            <img class=\"logo\" src=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoFrayere.jpg"), "html", null, true);
        yield "\" alt=\"logo\">
        </header>
        <div class=\"navBarre\">
            <nav>
                <ul class=\"navListe\">
                    <li class=\"navList\"><a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"navList\"><a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\">Réservation</a></li>
                    <li class=\"navList\"><a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste");
        yield "\">Postes</a></li>
                    <li class=\"navList\"><a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tarif");
        yield "\">Tarifs/Réglementation</a></li>
                    <li class=\"navList\"><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a></li>
                    <li class=\"navList\"><a href=\"https://www.facebook.com/profile.php?id=100063643567122&locale=fr_FR\" target=\"_blank\"><i class=\"fa-brands fa-facebook\"></i></a></li>
                    <li class=\"header2\"><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"><i class=\"fa-solid fa-user-secret\"></i> Connexion</a></li>
                </ul>
            </nav>
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
        return array (  125 => 43,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  96 => 32,  92 => 30,  88 => 29,  81 => 23,  76 => 29,  68 => 24,  64 => 23,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/header.html.twig");
    }
}
