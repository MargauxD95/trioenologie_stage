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

/* admin/occasion/editOccasion.html.twig */
class __TwigTemplate_46b920b4d117f8d85fbd8f63a8b2eb51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/occasion/editOccasion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/occasion/editOccasion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/occasion/editOccasion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier l'??v??nement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1 class=\"text-center mt-3 rF\">Modifier l'??v??nement n??";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo " </h1>

    ";
        // line 9
        echo twig_include($this->env, $context, "admin/occasion/formOccasion.html.twig", ["button_label" => "Mettre ?? jour"]);
        echo "

    <br>

    <form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('??tes-vous s??r.e de vouloir supprimer cet ??v??nement?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14))), "html", null, true);
        echo "\">
        <div class=\"row justify-content-center mb-5\">
            <button class=\"btn btn-delete col-lg-1 col-md-1 col-sm-2 mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
        </div>
    </form>

</div>    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/occasion/editOccasion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 14,  105 => 13,  98 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier l'??v??nement{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"text-center mt-3 rF\">Modifier l'??v??nement n??{{occasion.id}} : {{occasion.title}} </h1>

    {{ include('admin/occasion/formOccasion.html.twig', {'button_label': 'Mettre ?? jour'}) }}

    <br>

    <form method=\"post\" action=\"{{ path('admin_occasion_delete', {'id': occasion.id}) }}\" onsubmit=\"return confirm('??tes-vous s??r.e de vouloir supprimer cet ??v??nement?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ occasion.id) }}\">
        <div class=\"row justify-content-center mb-5\">
            <button class=\"btn btn-delete col-lg-1 col-md-1 col-sm-2 mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
        </div>
    </form>

</div>    
{% endblock %}
", "admin/occasion/editOccasion.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\occasion\\editOccasion.html.twig");
    }
}
