<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* editor/picture/form_editPicture.html.twig */
class __TwigTemplate_15e2b18cdb47a54cfa7f87fccff38ffd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/picture/form_editPicture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/picture/form_editPicture.html.twig"));

        // line 1
        echo "<section class=\"mt-3 text-center\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-4 mt-2 mb-2\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6 mt-2 mb-2\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "altText", [], "any", false, false, false, 9), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-4 mt-2 mb-2\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "height", [], "any", false, false, false, 13), 'row');
        echo "</div>
        <div class=\"col-4 mt-2 mb-2\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "width", [], "any", false, false, false, 14), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6 rFi mt-2 mb-2\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "legend", [], "any", false, false, false, 18), 'row');
        echo "</div>
    </div>

    <br>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_pictures");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 25
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 25, $this->source); })()), "Mettre à jour")) : ("Mettre à jour")), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "editor/picture/form_editPicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  90 => 25,  86 => 24,  77 => 18,  70 => 14,  66 => 13,  59 => 9,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mt-3 text-center\">
    {{ form_start(form) }}

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-4 mt-2 mb-2\">{{ form_row(form.title) }}</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6 mt-2 mb-2\">{{ form_row(form.altText) }}</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-4 mt-2 mb-2\">{{ form_row(form.height) }}</div>
        <div class=\"col-4 mt-2 mb-2\">{{ form_row(form.width) }}</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6 rFi mt-2 mb-2\">{{ form_row(form.legend) }}</div>
    </div>

    <br>

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('editor_pictures') }}\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">{{ button_label|default('Mettre à jour') }}</button>
    </div>

    {{ form_end(form) }}
</section>
", "editor/picture/form_editPicture.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\editor\\picture\\form_editPicture.html.twig");
    }
}
