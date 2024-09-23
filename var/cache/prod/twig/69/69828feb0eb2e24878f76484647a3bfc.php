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

/* tarif/index.html.twig */
class __TwigTemplate_1dee9ab15bd33a86a44b8c70ed8e6f49 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "tarif/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Tarifs";
        return; yield '';
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/tarif.css"), "html", null, true);
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

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const elements = document.querySelectorAll(\".article, .pecheur, .prixJour, .condition, .visiteurs\");

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
        checkVisibility();
    });
    </script>
     
";
        return; yield '';
    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<hr class=\"hr\">
    <h1 class=\"titre\">Tarifs</h1>
    <main class=\"tarifs1\">
        <div class=\"pecheur hidden\">
            <p>Tarif pour 1 pêcheur</p>
        </div>
        <div class=\"prixJour hidden\">
            <p>Pour 48 heures (2 nuits) : 50 €</p>
            <p>Pour 72 heures (3 nuits) : 70 €</p>
            <p>Pour 96 heures (4 nuits) : 85 €</p>
            <p>Pour 120 heures (5 nuits) : 100 €</p>
            <p>Pour 144 heures (6 nuits) : 115 €</p>
            <p>Pour une semaine (7 nuits) : 140 €</p>
        </div>
        <div class=\"pecheur hidden\">
            <p>Tarif pour 2 pêcheurs</p>
        </div>
        <div class=\"prixJour hidden\">
            <p>Pour 48 heures (2 nuits) : 80 €</p>
            <p>Pour 72 heures (3 nuits) : 120 €</p>
            <p>Pour 96 heures (4 nuits) : 150 €</p>
            <p>Pour 120 heures (5 nuits) : 180 €</p>
            <p>Pour 144 heures (6 nuits) : 210 €</p>
            <p>Pour une semaine (7 nuits) : 240 €</p>
        </div>
    </main>
    <div class=\"condition hidden\">
        <p>Pour 1 pêcheur les 24 heures supplémentaires seront facturés: 15 €</p>
        <p>Pour 2 pêcheurs les 24 heures supplémentaires seront facturés: 30 €</p>
        <p>Tous les postes peuvent accueillir 2 pêcheurs</p>
    </div>
    <div class=\"visiteurs hidden\">
        <p>Visiteurs interdits sauf conjoint(e) & enfants</p>
    </div>
<hr class=\"hr\">
    <h1 class=\"titre\">Réglement de pêche</h1>
    <main class=\"reglement\">
        <div class=\"article hidden\">
            <aside class=\"articleNum\">1</aside>
                <p>La pêche de la carpe est authorisée en no-kill, la pêche du carnassier est strictement interdite.<br>
                Poste 1 pêcheur: 3 cannes maximum <br>
                Poste 2 pêcheurs: 2 cannes maximum par pêcheur</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">2</aside>
            <p>Un seul hameçon simple sans ardillon (ou écrasé), d'une taille entre 2 et 6.<br>
            Interdit de treuiller le poisson<br>
            Corps de ligne en Nylon (tresse en corps de ligne interdite.)<br>
            Bas de ligne moins résistant.<br>
            Plombs coulissants et plastifiés obligatoires.<br>
            Lead core interdit, juste gaine plombée</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">3</aside>
            <p>Remise à l'eau immédiate des poissons après pesée et photos.<br>
            Un scan sera mis à votre disposition pour identification du poisson (le processus vous sera expliqué).</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">4</aside>
            <p>Manipulation des poissons avec précaution</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">5</aside>
            <p>Tapis de réception XXL ou baignoire et détecteur de touches obligatoires<br>
            Une paire de waders par poste Obligatoire. Kit de soin obligatoire.</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">6</aside>
            <p>Bateaux amorceurs autorisés. Zodiac ou autre embarcation interdite.</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">7</aside>
            <p>Amorçage massifs interdit, graines trempées et cuites à coeur. Noix tigrée interdite<br>
            Pour toutes questions sur les graines vous pouvez demander par téléphone.<br>
            Canon à bouillettes interdit</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">8</aside>
            <p>Le marquage et tout ce qui pourrait abimer ou fatiguer éxagérément les poissons est strictement interdit <br> 
            et aura pour conséquence l'exclusion immédiate et définitive.</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">9</aside>
            <p>Il est dangereux et donc interdit d'avancer dans l'eau hors aménagements effectués.</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">10</aside>
            <p>La frayère est une sablière de pêche sportive, le calme est de rigueur</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">11</aside>
            <p>Une vérification pourra être demandé</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">12</aside>
            <p>Merci de respecter ce réglement<br>
            Pour le bien être du poisson et du pêcheurs</p>
        </div>
    </main>
    <hr class=\"hr\">
        <h1 class=\"titre\">Réglement intérieur</h1>

    <main class=\"reglement\">
        <div class=\"article hidden\">
            <aside class=\"articleNum\">1</aside>
                <p>Le site reste toujours fermé, pour l'accès appeler le 06.65.76.72.28 <br>
                Aucun véhicule ne doit rester sur les postes (sauf déchargement et chargement du matériel), <br>
                ils doivent être sur le parking indiqué sur place. Aucune entrée et sortie n'est autorisé <br>
                entre 21h et 8h.</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">2</aside>
            <p>Aucun visiteur n'est accepté hormis conjoints/es et enfants. Le parking visiteur se trouve <br>
            à l'entrée du site.</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">3</aside>
            <p>Chiens acceptés s'ils ne quittent pas le poste et sont attachés. Feu au sol interdit, réchaud <br>
            et barbecue sur pied autorisé. Bivouac camouflage obligatoire pour se fondre dans la nature. <br>
            Merci de respecter les zones de pêches (repères). Ne pas laisser votre poste sans surveillance <br>
            si les cannes sont tendues.</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">4</aside>
            <p>2 toilettes sèches réparties autour de la sablière. Merci de les laisser propre.</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">5</aside>
            <p>Aucun débordement ne sera autorisés sur le site (L'abus d'alcool est dangereux pour la santé, <br>
            à consommer avec modération)</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">6</aside>
            <p>Les postes et l'environnement doivent être nettoyés avant le départ. Rien ne doit être jeté <br>
            dans l'étang. <br>
            Les dechets doivent être emmenés (prévoir sacs poubelles)</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">7</aside>
            <p>Le vol de poissons est passible de poursuites judiciaires (nos poissons sont pucés, notre recensement <br>
            est toujours à jour). Le site est sous vidéo surveillance. Des contrôles pourront être effectués <br>
            dans les véhicules à la sortie du site.</p>
        </div>
        <div class=\"article hidden\">
        <aside class=\"articleNum\">8</aside>
            <p>En venant pêcher sur ce site, vous nous donnez votre consentement pour la diffusion de vos photos <br>
            (merci de nous prévenir si vous souhaitez faire respecter votre droit à l'image), et vous vous engagez à <br>
            à respecter ce réglement. Nous déclinons toutes responsabilités en cas d'incidents sur le site <br>
            (accident, noyade, bagarre, vols...) Un contrôle pourra être effectué par un garde durant votre séjour. <br>
            Le non respect de celui-ci entrainera un avertissement et s'il le faut, une exclusion définitive <br>
            du site sans remboursement.</p>
        </div>
    </main>
    <hr class=\"hr\">
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tarif/index.html.twig";
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
        return array (  109 => 41,  82 => 19,  62 => 5,  58 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tarif/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/tarif/index.html.twig");
    }
}
