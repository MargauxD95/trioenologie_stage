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

/* admin/category/formCategory.html.twig */
class __TwigTemplate_eb0c6b31355e9acd1869f708a569bccd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/formCategory.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/formCategory.html.twig"));

        // line 1
        echo "<section class=\"mt-3 text-center\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "

    <div class=\"row justify-content-center mt-2 mb-2 rFb\">
        <div class=\"col-4\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), 'row');
        echo "    
        </div>
    </div>

    <div class=\"row justify-content-center mt-2 mb-2 rFb\">
        <div class=\"col-2 text-start\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "bgColor", [], "any", false, false, false, 12), 'row');
        echo "
        </div>
    </div>

    <div class=\"row justify-content-center mt-2 rFb\">
        <div class=\"col-2 text-start\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "bdColor", [], "any", false, false, false, 18), 'row');
        echo "
        </div>
    </div>    

    <div class=\"row justify-content-center mt-2 rFb\">
        <div class=\"col-2 text-start\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "textColor", [], "any", false, false, false, 24), 'row');
        echo "
        </div>
    </div>

    <br>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/formCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  94 => 32,  90 => 31,  80 => 24,  71 => 18,  62 => 12,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mt-3 text-center\">
    {{ form_start(form) }}

    <div class=\"row justify-content-center mt-2 mb-2 rFb\">
        <div class=\"col-4\">
            {{ form_row(form.name) }}    
        </div>
    </div>

    <div class=\"row justify-content-center mt-2 mb-2 rFb\">
        <div class=\"col-2 text-start\">
            {{ form_row(form.bgColor) }}
        </div>
    </div>

    <div class=\"row justify-content-center mt-2 rFb\">
        <div class=\"col-2 text-start\">
            {{ form_row(form.bdColor) }}
        </div>
    </div>    

    <div class=\"row justify-content-center mt-2 rFb\">
        <div class=\"col-2 text-start\">
            {{ form_row(form.textColor) }}
        </div>
    </div>

    <br>

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_categories') }}\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">{{ button_label|default('Valider') }}</button>
    </div>

    {{ form_end(form) }}
</section>", "admin/category/formCategory.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\category\\formCategory.html.twig");
    }
}
