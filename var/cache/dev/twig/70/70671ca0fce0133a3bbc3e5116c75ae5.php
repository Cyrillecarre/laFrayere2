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

/* mentions/index.html.twig */
class __TwigTemplate_c7dc2b75e65cae869d3b4e4231d269b2 extends Template
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
            'mentions_legales' => [$this, 'block_mentions_legales'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/index.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('mentions_legales', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/mentions.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_mentions_legales($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mentions_legales"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mentions_legales"));

        // line 7
        yield "        <div class=\"popup-content\">
            <h2>Mentions Légales</h2>
            <button id=\"closePopupBtn\">Fermer</button>
            <h3>PRESENTATION DU SITE</h3> 
            <p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans 
            l’économie numérique, les différents intervenants du site dans le cadre de sa réalisation et de son suivi :  </p>
            <p>Propriétaire  : La Frayere - ,  auteur au capital de €. Le propriétaire du site internet est joignable 
            à cette adresse : cyrille.carre@gmail.com
            Adresse : 1 lot beausoleil
            Créateur du site  :  Carre Cyrille
            Responsable publication  : cyrille Carre - cyrille.carre@gmail.com
            Webmaster  : Carre Cyrille  -  cyrille.carre@gmail.com
            Hébergeur  : Hostinger 61 rue Lordou Vironos, 6023
            Crédits  : Ces mentions légales sont offertes par Le Générateur de Mentions Légales du Site Français.</p>
            <h3>CONDITIONS D’UTILISATION</h3>  
            <p>L’utilisation du site  implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. 
            Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site sont donc 
            invités à les consulter de manière régulière. Le site est mis à jour régulièrement par cyrille Carre. De la même façon, 
            les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y 
            référer le plus souvent possible afin d’en prendre connaissance.</p>
            <h3>SERVICES FOURNIS</h3>
            <p>cyrille Carre, s’efforce de fournir sur le site des informations aussi précises que possible.
            Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, 
            qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
            Tous les informations indiquées sur le site https://www.la-frayere.fr sont données à titre indicatif, et sont susceptibles 
            d’évoluer. Aussi, toutes les informations indiquées sur le site Site https://www.la-frayere.fr sont données à titre indicatif, 
            et sont susceptibles de changer ou d’évoluer sans préavis.
            Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, 
            à l’adresse cyrille.carre@gmail.com, en décrivant le problème de la manière la plus précise possible (vous vous trouver sur un 
            téléphone, une tablette ou bien un ordinateur ; nom de la page qui pose problème, type de système d’exploitation, navigateur utilisé,…).
            cyrille Carre n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect 
            pouvant en découler.</p>
            <h3>PROPRIETE INTELLECTUELLE ET CONTREFACONS</h3>
            <p>CARRE Cyrille est le propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments 
            accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.
            Toute reproduction, représentation, modification, publication, distribution, retransmission, adaptation de tout ou partie des 
            éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : 
            https://www.la-frayere.fr.
            Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient, par quelque procédé que ce soit, 
            sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants 
            du Code de Propriété Intellectuelle.
            Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. 
            En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>  
            <h3>LIMITATIONS DE RESPONSABILITES</h3>
            <p>L’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur 
            de dernière génération mis-à-jour.
            cyrille Carre ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de 
            l’accès au site https://www.la-frayere.fr, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications 
            indiquées ci-dessus, soit de l’apparition d’un bug ou d’une incompatibilité.
            cyrille Carre  ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte 
            d’une chance) consécutifs à l’utilisation du site https://www.la-frayere.fr.
            Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. cyrille Carre  
            se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la 
            législation applicable en France, en particulier aux dispositions relatives à la protection des données. 
            Le cas échéant, cyrille Carre se réserve aussi la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, 
            notamment en cas de message à caractère diffamant, raciste, injurieux ou pornographique, quel que soit le support utilisé (texte, vidéo, 
            photographie…).</p>  
            <h3>Gestion des données personnelles.</h3>  
            <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, 
            l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.
            A l’occasion de l’utilisation du site https://www.la-frayere.fr, peuvent être recueillies : l’URL des liens par l’intermédiaire desquels 
            l’utilisateur a accédé à ce site, le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur.
            En tout état de cause cyrille Carre ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains 
            services proposés par le site  https://www.la-frayere.fr. L’utilisateur fournit ces informations en toute connaissance de cause, notamment 
            lorsqu’il procède par lui-même à leur saisie. Il est alors précisé à l’utilisateur du site https://www.la-frayere.fr l’obligation ou non 
            de fournir ces informations.
            Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux 
            libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant 
            sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à 
            laquelle la réponse doit être envoyée.
            Aucune information personnelle de l’utilisateur du site https://www.la-frayere.fr n’est publiée à l’insu de l’utilisateur, échangée, 
            transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l’hypothèse du rachat de cyrille Carre  et/ou du site internet 
            de ses droits permettrait la transmission des dites informations à l’éventuel acquéreur qui serait à son tour tenu de la même obligation 
            de conservation et de modification des données vis à vis de l’utilisateur du site.
            Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative 
            à la protection juridique des bases de données.</p>  
            <h3>LIENS HYPERTEXTES ET COOKIES</h3>
            <p>Le site https://www.la-frayere.fr peut contenir un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation 
            de cyrille Carre. 
            Cependant, cyrille Carre n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune 
            responsabilité de ce fait.
            La navigation sur le site https://www.la-frayere.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. 
            Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives 
            à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également 
            vocation à permettre diverses mesures de fréquentation.
            Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son 
            ordinateur de la manière suivante, pour refuser l’installation des cookies :  
            Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez 
            Bloquer tous les cookies. Validez sur Ok. 
            Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l’onglet Options. Cliquer sur l’onglet Vie privée.
            Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l’historique. Enfin décochez-la pour désactiver les cookies. 
            Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur 
            Afficher les paramètres avancés. Dans la section “Confidentialité”, cliquez sur Paramètres de contenu. Dans la section “Cookies”, vous pouvez bloquer 
            les cookies. 
            Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. 
            Cliquez sur Afficher les paramètres avancés. Dans la section “Confidentialité”, cliquez sur préférences. Dans l’onglet “Confidentialité”, vous pouvez 
            bloquer les cookies. 
            Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient 
            engager la responsabilité de cyrille Carre.
            Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, cyrille Carre ne saurait être 
            tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement.</p> 
            <h3>DROIT APPLICABLE ET ATTRIBUTION DE JURIDICTION</h3>
            <p>Les présentes conditions du site https://www.la-frayere.fr sont régies par les lois françaises et toute contestation ou litiges qui pourraient 
            naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société 
            cyrille Carre. La langue de référence, pour le règlement de contentieux éventuels, est le français.</p>
            <h3>LES PRINCIPALES LOIS CONCERNEES</h3>
            <p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés.
            Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique.</p>
            <h3>LEXIQUE</h3>  
            <p>Propriétaire du site : Responsable légal des informations contenues dans le site internet 
            Webmaster : Personne en charge du maintien technique et des mises à jour techniques du site internet 
            Responsable publication : Personne en charge de la mise à jour des contenus (textes, visuels, multimédia, etc.) sur le site internet 
            Hébergeur : Espace de stockage du site internet 
            Utilisateur : Internaute se connectant, utilisant le site susnommé. 
            Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l’identification des personnes 
            physiques auxquelles elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
            <button id=\"closePopupBtn1\">Fermer</button>
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
        return "mentions/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  99 => 7,  89 => 6,  75 => 3,  65 => 2,  54 => 6,  51 => 5,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/mentions.css') }}\">
{% endblock %}

{% block mentions_legales %}
        <div class=\"popup-content\">
            <h2>Mentions Légales</h2>
            <button id=\"closePopupBtn\">Fermer</button>
            <h3>PRESENTATION DU SITE</h3> 
            <p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans 
            l’économie numérique, les différents intervenants du site dans le cadre de sa réalisation et de son suivi :  </p>
            <p>Propriétaire  : La Frayere - ,  auteur au capital de €. Le propriétaire du site internet est joignable 
            à cette adresse : cyrille.carre@gmail.com
            Adresse : 1 lot beausoleil
            Créateur du site  :  Carre Cyrille
            Responsable publication  : cyrille Carre - cyrille.carre@gmail.com
            Webmaster  : Carre Cyrille  -  cyrille.carre@gmail.com
            Hébergeur  : Hostinger 61 rue Lordou Vironos, 6023
            Crédits  : Ces mentions légales sont offertes par Le Générateur de Mentions Légales du Site Français.</p>
            <h3>CONDITIONS D’UTILISATION</h3>  
            <p>L’utilisation du site  implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. 
            Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site sont donc 
            invités à les consulter de manière régulière. Le site est mis à jour régulièrement par cyrille Carre. De la même façon, 
            les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y 
            référer le plus souvent possible afin d’en prendre connaissance.</p>
            <h3>SERVICES FOURNIS</h3>
            <p>cyrille Carre, s’efforce de fournir sur le site des informations aussi précises que possible.
            Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, 
            qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
            Tous les informations indiquées sur le site https://www.la-frayere.fr sont données à titre indicatif, et sont susceptibles 
            d’évoluer. Aussi, toutes les informations indiquées sur le site Site https://www.la-frayere.fr sont données à titre indicatif, 
            et sont susceptibles de changer ou d’évoluer sans préavis.
            Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, 
            à l’adresse cyrille.carre@gmail.com, en décrivant le problème de la manière la plus précise possible (vous vous trouver sur un 
            téléphone, une tablette ou bien un ordinateur ; nom de la page qui pose problème, type de système d’exploitation, navigateur utilisé,…).
            cyrille Carre n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect 
            pouvant en découler.</p>
            <h3>PROPRIETE INTELLECTUELLE ET CONTREFACONS</h3>
            <p>CARRE Cyrille est le propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments 
            accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.
            Toute reproduction, représentation, modification, publication, distribution, retransmission, adaptation de tout ou partie des 
            éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : 
            https://www.la-frayere.fr.
            Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient, par quelque procédé que ce soit, 
            sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants 
            du Code de Propriété Intellectuelle.
            Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. 
            En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>  
            <h3>LIMITATIONS DE RESPONSABILITES</h3>
            <p>L’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur 
            de dernière génération mis-à-jour.
            cyrille Carre ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de 
            l’accès au site https://www.la-frayere.fr, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications 
            indiquées ci-dessus, soit de l’apparition d’un bug ou d’une incompatibilité.
            cyrille Carre  ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte 
            d’une chance) consécutifs à l’utilisation du site https://www.la-frayere.fr.
            Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. cyrille Carre  
            se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la 
            législation applicable en France, en particulier aux dispositions relatives à la protection des données. 
            Le cas échéant, cyrille Carre se réserve aussi la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, 
            notamment en cas de message à caractère diffamant, raciste, injurieux ou pornographique, quel que soit le support utilisé (texte, vidéo, 
            photographie…).</p>  
            <h3>Gestion des données personnelles.</h3>  
            <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, 
            l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.
            A l’occasion de l’utilisation du site https://www.la-frayere.fr, peuvent être recueillies : l’URL des liens par l’intermédiaire desquels 
            l’utilisateur a accédé à ce site, le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur.
            En tout état de cause cyrille Carre ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains 
            services proposés par le site  https://www.la-frayere.fr. L’utilisateur fournit ces informations en toute connaissance de cause, notamment 
            lorsqu’il procède par lui-même à leur saisie. Il est alors précisé à l’utilisateur du site https://www.la-frayere.fr l’obligation ou non 
            de fournir ces informations.
            Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux 
            libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant 
            sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à 
            laquelle la réponse doit être envoyée.
            Aucune information personnelle de l’utilisateur du site https://www.la-frayere.fr n’est publiée à l’insu de l’utilisateur, échangée, 
            transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l’hypothèse du rachat de cyrille Carre  et/ou du site internet 
            de ses droits permettrait la transmission des dites informations à l’éventuel acquéreur qui serait à son tour tenu de la même obligation 
            de conservation et de modification des données vis à vis de l’utilisateur du site.
            Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative 
            à la protection juridique des bases de données.</p>  
            <h3>LIENS HYPERTEXTES ET COOKIES</h3>
            <p>Le site https://www.la-frayere.fr peut contenir un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation 
            de cyrille Carre. 
            Cependant, cyrille Carre n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune 
            responsabilité de ce fait.
            La navigation sur le site https://www.la-frayere.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. 
            Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives 
            à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également 
            vocation à permettre diverses mesures de fréquentation.
            Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son 
            ordinateur de la manière suivante, pour refuser l’installation des cookies :  
            Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez 
            Bloquer tous les cookies. Validez sur Ok. 
            Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l’onglet Options. Cliquer sur l’onglet Vie privée.
            Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l’historique. Enfin décochez-la pour désactiver les cookies. 
            Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur 
            Afficher les paramètres avancés. Dans la section “Confidentialité”, cliquez sur Paramètres de contenu. Dans la section “Cookies”, vous pouvez bloquer 
            les cookies. 
            Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. 
            Cliquez sur Afficher les paramètres avancés. Dans la section “Confidentialité”, cliquez sur préférences. Dans l’onglet “Confidentialité”, vous pouvez 
            bloquer les cookies. 
            Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient 
            engager la responsabilité de cyrille Carre.
            Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, cyrille Carre ne saurait être 
            tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement.</p> 
            <h3>DROIT APPLICABLE ET ATTRIBUTION DE JURIDICTION</h3>
            <p>Les présentes conditions du site https://www.la-frayere.fr sont régies par les lois françaises et toute contestation ou litiges qui pourraient 
            naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société 
            cyrille Carre. La langue de référence, pour le règlement de contentieux éventuels, est le français.</p>
            <h3>LES PRINCIPALES LOIS CONCERNEES</h3>
            <p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés.
            Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique.</p>
            <h3>LEXIQUE</h3>  
            <p>Propriétaire du site : Responsable légal des informations contenues dans le site internet 
            Webmaster : Personne en charge du maintien technique et des mises à jour techniques du site internet 
            Responsable publication : Personne en charge de la mise à jour des contenus (textes, visuels, multimédia, etc.) sur le site internet 
            Hébergeur : Espace de stockage du site internet 
            Utilisateur : Internaute se connectant, utilisant le site susnommé. 
            Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l’identification des personnes 
            physiques auxquelles elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
            <button id=\"closePopupBtn1\">Fermer</button>
        </div>
    </div>
{% endblock %}
", "mentions/index.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/mentions/index.html.twig");
    }
}
