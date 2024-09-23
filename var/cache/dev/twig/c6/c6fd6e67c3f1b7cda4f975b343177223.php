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

/* payment/mailSuccessMulti.html.twig */
class __TwigTemplate_ee7775ffa6c3a4c3624146c843f280dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/mailSuccessMulti.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/mailSuccessMulti.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Paiement réussi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"formPrixPayment\">
    <h1>Nouvelle réservation</h1>
    <p>La réservation de l'étang complet été confirmée avec les détails suivants :</p>
    <ul>
        <li>Date d'arrivée: ";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Date de départ: ";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Prix total: ";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 10, $this->source); })()), "html", null, true);
        yield " EUR</li>
        <li>Acompte: ";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["is_deposit"]) || array_key_exists("is_deposit", $context) ? $context["is_deposit"] : (function () { throw new RuntimeError('Variable "is_deposit" does not exist.', 11, $this->source); })()), "html", null, true);
        yield " EUR</li>
        <li>Pellets: ";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["pellets"]) || array_key_exists("pellets", $context) ? $context["pellets"] : (function () { throw new RuntimeError('Variable "pellets" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Graines: ";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["graines"]) || array_key_exists("graines", $context) ? $context["graines"] : (function () { throw new RuntimeError('Variable "graines" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Email: ";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</li>
        <li>Tel: ";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["phoneNumber"]) || array_key_exists("phoneNumber", $context) ? $context["phoneNumber"] : (function () { throw new RuntimeError('Variable "phoneNumber" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</li>
    </ul>
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
        return "payment/mailSuccessMulti.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  126 => 15,  122 => 14,  118 => 13,  114 => 12,  110 => 11,  106 => 10,  102 => 9,  98 => 8,  92 => 4,  82 => 3,  62 => 1,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}Paiement réussi{% endblock %}

{% block body %}
    <div class=\"formPrixPayment\">
    <h1>Nouvelle réservation</h1>
    <p>La réservation de l'étang complet été confirmée avec les détails suivants :</p>
    <ul>
        <li>Date d'arrivée: {{ start }}</li>
        <li>Date de départ: {{ end }}</li>
        <li>Prix total: {{ totalPrice }} EUR</li>
        <li>Acompte: {{ is_deposit }} EUR</li>
        <li>Pellets: {{ pellets }}</li>
        <li>Graines: {{ graines }}</li>
        <li>Email: {{ email }}</li>
        <li>Tel: {{ phoneNumber }}</li>
    </ul>
    </div>
{% endblock %}", "payment/mailSuccessMulti.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/payment/mailSuccessMulti.html.twig");
    }
}
