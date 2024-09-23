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

/* poste_three/_form.html.twig */
class __TwigTemplate_2a7165659bc0a25719be9def67effa4d extends Template
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
        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form"]]);
        yield "
    <div>
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "start", [], "any", false, false, false, 3), 'label', ["attr" => ["class" => "formStart"], "label" => "date d'arrivée :"]);
        yield "
    </div>
    <div>
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "start", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "formStart"]]);
        yield "
    </div>
    <div>
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "end", [], "any", false, false, false, 9), 'label', ["attr" => ["class" => "formEnd"], "label" => "date de départ :"]);
        yield "
    </div>
    <div>
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "end", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "formEnd"]]);
        yield "
    </div>
    <div>
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 15), 'label', ["attr" => ["class" => "formEmail"], "label" => "email"]);
        yield "
    </div>
    <div>
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "formEmail"]]);
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 19), 'errors');
        yield "
    </div>
    <div>
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 22), 'label', ["attr" => ["class" => "formPhone"], "label" => "numéro de tel"]);
        yield "
    </div>
    <div>
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "formPhone"]]);
        yield "
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 26), 'errors');
        yield "
    </div>
    <button class=\"btnAction\">";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter(($context["button_label"] ?? null), "Envoyer")) : ("Envoyer")), "html", null, true);
        yield "</button>
";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "poste_three/_form.html.twig";
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
        return array (  102 => 29,  98 => 28,  93 => 26,  89 => 25,  83 => 22,  77 => 19,  73 => 18,  67 => 15,  61 => 12,  55 => 9,  49 => 6,  43 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "poste_three/_form.html.twig", "/Users/cyrillecarre/Desktop/site_web/laFrayere/la_frayere/templates/poste_three/_form.html.twig");
    }
}
