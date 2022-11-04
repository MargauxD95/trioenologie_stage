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

/* admin/occasion/showOccasion.html.twig */
class __TwigTemplate_ab4deca433734b4f0ce248d19ac8b504 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/occasion/showOccasion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/occasion/showOccasion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/occasion/showOccasion.html.twig", 1);
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

        echo "Evènements";
        
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
        echo "<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">

    <h1 class=\"text-center mt-3 mb-5 rF\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-2 rFi\">ID</th>
                <td class=\"rF\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>            
            <tr>
                <th class=\"col-2 rFi\">Titre</th>
                <td class=\"rF\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th class=\"col-2 rFi\">Catégorie</th>
                <td class=\"rF\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 23, $this->source); })()), "category", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>

            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Description</th>
                <td class=\"rF\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
            <th class=\"col-2 rFi\">Nb de participants min.</th>
                <td class=\"rF\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 32, $this->source); })()), "minParts", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
            <th class=\"col-2 rFi\">Nb de participants max.</th>
                <td class=\"rF\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 36, $this->source); })()), "maxParts", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Date de début</th>
                <td class=\"rF\">";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 40, $this->source); })()), "startDate", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 40, $this->source); })()), "startDate", [], "any", false, false, false, 40), "d-m-Y H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Date de fin</th>
                <td class=\"rF\">";
        // line 44
        ((twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 44, $this->source); })()), "endDate", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 44, $this->source); })()), "endDate", [], "any", false, false, false, 44), "d-m-Y H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>            
            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Photo</th>
                <td>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 49, $this->source); })()), "pictures", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 50
            echo "                    <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 50))), "html", null, true);
            echo "\" height=\"170px\">     
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo " 
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <div class=\"row justify-content-center text-center mt-3 mb-5\">

        <div class=\"col-3 ms-3\">
        <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_index");
        echo "\" class=\"btn btn-return\">
            <i class=\"bi bi-arrow-left-circle-fill\"></i>
        </a>            
        </div>

        <div class=\"col-3\">
        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
            <i class=\"bi bi-pencil\"></i>
        </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            ";
        // line 74
        echo twig_include($this->env, $context, "admin/occasion/deleteOccasion.html.twig");
        echo "        
        </div>

    </div>


</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/occasion/showOccasion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 74,  195 => 68,  186 => 62,  173 => 51,  164 => 50,  160 => 49,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  116 => 23,  108 => 18,  101 => 14,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Evènements{% endblock %}

{% block body %}
<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">

    <h1 class=\"text-center mt-3 mb-5 rF\">{{occasion.title}}</h1>

    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-2 rFi\">ID</th>
                <td class=\"rF\">{{ occasion.id }}</td>
            </tr>            
            <tr>
                <th class=\"col-2 rFi\">Titre</th>
                <td class=\"rF\">{{ occasion.title }}</td>
            </tr>

            <tr>
                <th class=\"col-2 rFi\">Catégorie</th>
                <td class=\"rF\">{{ occasion.category.name }}</td>
            </tr>

            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Description</th>
                <td class=\"rF\">{{ occasion.description }}</td>
            </tr>
            <tr>
            <th class=\"col-2 rFi\">Nb de participants min.</th>
                <td class=\"rF\">{{ occasion.minParts }}</td>
            </tr>
            <tr>
            <th class=\"col-2 rFi\">Nb de participants max.</th>
                <td class=\"rF\">{{ occasion.maxParts }}</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Date de début</th>
                <td class=\"rF\">{{ occasion.startDate ? occasion.startDate|date('d-m-Y H:i') : '' }}</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Date de fin</th>
                <td class=\"rF\">{{ occasion.endDate ? occasion.endDate|date('d-m-Y H:i') : '' }}</td>
            </tr>            
            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Photo</th>
                <td>
                {% for picture in occasion.pictures %}
                    <img class=\"shadow-sm p-3 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"170px\">     
                {% endfor %} 
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <div class=\"row justify-content-center text-center mt-3 mb-5\">

        <div class=\"col-3 ms-3\">
        <a href=\"{{ path('admin_occasion_index') }}\" class=\"btn btn-return\">
            <i class=\"bi bi-arrow-left-circle-fill\"></i>
        </a>            
        </div>

        <div class=\"col-3\">
        <a href=\"{{ path('admin_occasion_edit', {'id': occasion.id}) }}\" class=\"btn btn-update\">
            <i class=\"bi bi-pencil\"></i>
        </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            {{ include('admin/occasion/deleteOccasion.html.twig') }}        
        </div>

    </div>


</div>
{% endblock %}
", "admin/occasion/showOccasion.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\occasion\\showOccasion.html.twig");
    }
}
