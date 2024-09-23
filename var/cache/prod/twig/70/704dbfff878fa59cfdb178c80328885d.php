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

/* reservation/index.html.twig */
class __TwigTemplate_b180cc03b73ab8514659928360ff7906 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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
";
        return; yield '';
    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
       <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                firstDay: 1,
                locale: 'fr',
                timeZone: 'Europe/Paris',
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: ''
                },
                events: ";
        // line 21
        yield ($context["data"] ?? null);
        yield ",
            });
            calendar.render();
        });
    </script>
";
        return; yield '';
    }

    // line 28
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Reservation";
        return; yield '';
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "<hr class=\"hr\">
    <h1 class=\"titre\">Réservation</h1>
    <div>
      <ul class=\"reservation\">
        <li class=\"btnAction\"><a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_one_new");
        yield "\">Réservation Poste 1</a></li>
        <li class=\"btnAction\"><a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_two_new");
        yield "\">Réservation Poste 2</a></li>
        <li class=\"btnAction\"><a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_three_new");
        yield "\">Réservation Poste 3</a></li>
        <li class=\"btnAction\"><a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_four_new");
        yield "\">Réservation Poste 4</a></li>
      </ul>
    </div>
    <hr class=\"hr\">
    <div class=\"couleur\">
      <p>Poste 1 : <aside class=\"couleurOne\"></aside></p>
      <p>Poste 2 : <aside class=\"couleurTwo\"></aside></p>
      <p>Poste 3 : <aside class=\"couleurThree\"></aside></p>
      <p>Poste 4 : <aside class=\"couleurFour\"></aside></p>
      <p>Réservation en attente de validation : <aside class=\"couleurFive\"></aside></p>
    </div>
    <div class=\"calendar\" id='calendar'>
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
        return "reservation/index.html.twig";
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
        return array (  123 => 37,  119 => 36,  115 => 35,  111 => 34,  105 => 30,  101 => 29,  93 => 28,  82 => 21,  66 => 7,  62 => 6,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/reservation/index.html.twig");
    }
}
