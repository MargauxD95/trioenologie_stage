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

/* admin/carousel/carousels.html.twig */
class __TwigTemplate_2ec30649ff60f031dad56494763a0b0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/carousel/carousels.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/carousel/carousels.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/carousel/carousels.html.twig", 1);
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

        echo "Carousel index";
        
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
        echo "<div class=\"container mt-4\">
    
    <h1 class=\"text-center rF\">Carousels</h1>
    
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_new");
        echo "\" class=\"btn btn-submitForm col-sm-2 mt-3\">Nouveau carousel</a>
    
    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>ID</th>
                <th>Page</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody class=\"tab\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 23
            echo "            <tr class=\"tab\">
                <td class=\"rFb\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carousel"], "page", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye-fill\"></i></a>
                </td>
                <td>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["carousel"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <tr>
                <td colspan=\"3\">Aucun résultat.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Dashboard</a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/carousel/carousels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 42,  150 => 38,  141 => 34,  132 => 30,  126 => 27,  121 => 25,  117 => 24,  114 => 23,  109 => 22,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carousel index{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    
    <h1 class=\"text-center rF\">Carousels</h1>
    
    <a href=\"{{ path('admin_carousel_new') }}\" class=\"btn btn-submitForm col-sm-2 mt-3\">Nouveau carousel</a>
    
    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>ID</th>
                <th>Page</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody class=\"tab\">
        {% for carousel in carousels %}
            <tr class=\"tab\">
                <td class=\"rFb\">{{ carousel.id }}</td>
                <td>{{ carousel.page }}</td>
                <td>
                    <a href=\"{{ path('admin_carousel_show', {'id': carousel.id}) }}\"><i class=\"bi bi-eye-fill\"></i></a>
                </td>
                <td>
                    <a href=\"{{ path('admin_carousel_edit', {'id': carousel.id}) }}\"><i class=\"bi bi-pencil-square\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">Aucun résultat.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Dashboard</a>
    </div>
</div>
{% endblock %}
", "admin/carousel/carousels.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/carousel/carousels.html.twig");
    }
}
