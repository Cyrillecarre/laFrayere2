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

/* poste_two/_form.html.twig */
class __TwigTemplate_db9595eec90d61b45120641b8e0165a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_two/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste_two/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        yield "
    <div>
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "start", [], "any", false, false, false, 3), 'label', ["attr" => ["class" => "formStart"], "label" => "date d'arrivée :"]);
        yield "
    </div>
    <div>
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "start", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "formStart"]]);
        yield "
    </div>
    <div>
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "end", [], "any", false, false, false, 9), 'label', ["attr" => ["class" => "formEnd"], "label" => "date de départ :"]);
        yield "
    </div>
    <div>
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "end", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "formEnd"]]);
        yield "
    </div>
    <div>
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'label', ["attr" => ["class" => "formEmail"], "label" => "email"]);
        yield "
    </div>
    <div>
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "formEmail"]]);
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'errors');
        yield "
    </div>
    <div>
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "phoneNumber", [], "any", false, false, false, 22), 'label', ["attr" => ["class" => "formPhone"], "label" => "numéro de tel"]);
        yield "
    </div>
    <div>
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "phoneNumber", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "formPhone"]]);
        yield "
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "phoneNumber", [], "any", false, false, false, 26), 'errors');
        yield "
    </div>
    <button class=\"btnAction\">";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 28, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        yield "</button>
";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "poste_two/_form.html.twig";
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
        return array (  108 => 29,  104 => 28,  99 => 26,  95 => 25,  89 => 22,  83 => 19,  79 => 18,  73 => 15,  67 => 12,  61 => 9,  55 => 6,  49 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'form'}}) }}
    <div>
        {{ form_label(form.start, 'date d\\'arrivée :', {'attr': {'class': 'formStart'}}) }}
    </div>
    <div>
        {{ form_widget(form.start, {'attr': {'class': 'formStart'}}) }}
    </div>
    <div>
        {{ form_label(form.end, 'date de départ :', {'attr': {'class': 'formEnd'}}) }}
    </div>
    <div>
        {{ form_widget(form.end, {'attr': {'class': 'formEnd'}}) }}
    </div>
    <div>
        {{ form_label(form.email, 'email', {'attr': {'class': 'formEmail'}}) }}
    </div>
    <div>
        {{ form_widget(form.email, {'attr': {'class': 'formEmail'}}) }}
        {{ form_errors(form.email) }}
    </div>
    <div>
        {{ form_label(form.phoneNumber, 'numéro de tel', {'attr': {'class': 'formPhone'}}) }}
    </div>
    <div>
        {{ form_widget(form.phoneNumber, {'attr': {'class': 'formPhone'}}) }}
        {{ form_errors(form.phoneNumber) }}
    </div>
    <button class=\"btnAction\">{{ button_label|default('Envoyer') }}</button>
{{ form_end(form) }}", "poste_two/_form.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere2/la_frayere/templates/poste_two/_form.html.twig");
    }
}
