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

/* admin/gallery/galleries.html.twig */
class __TwigTemplate_4175f859e441f78e3d579b251dd46f48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gallery/galleries.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gallery/galleries.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/gallery/galleries.html.twig", 1);
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

        echo "Liste des Galeries";
        
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
        echo "
    <div class=\"container mt-4\">
        <h1 class=\"text-center rF\">Toutes les Galeries</h1>
        <a class=\"btn btn-submitForm col-sm-2 mt-3\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_new");
        echo "\">Créer une nouvelle Galerie</a>

    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>Id</th>
                <th>Name</th>                
                <th>Description</th>
                <th>Composée de</th>
                <th>Créée le</th>
                <th>IsVisible</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new RuntimeError('Variable "galleries" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 26
            echo "            <tr class=\"tab\">
                <td class=\"rFb\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td> 
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>  
                <td class=\"text-center\">
                    ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gallery"], "pictures", [], "any", false, false, false, 31), "count", [], "any", false, false, false, 31) > 1)) {
                echo "                    
                        ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gallery"], "pictures", [], "any", false, false, false, 32), "count", [], "any", false, false, false, 32), "html", null, true);
                echo " photos
                    ";
            } else {
                // line 34
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gallery"], "pictures", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34), "html", null, true);
                echo " photo
                    ";
            }
            // line 36
            echo "                </td>
                <td class=\"text-center\">";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["gallery"], "createdAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "createdAt", [], "any", false, false, false, 37), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                <td class=\"text-center\">";
            // line 38
            echo ((twig_get_attribute($this->env, $this->source, $context["gallery"], "isVisible", [], "any", false, false, false, 38)) ? ("Oui") : ("Non"));
            echo "</td>                
                <td class=\"text-center\">
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_show", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye-fill\"></i></a>
                </td>
                <td class=\"text-center\">
                     <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
     
     <div class=\"row justify-content-center\">
        <a href=\"";
        // line 55
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
        return "admin/gallery/galleries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 55,  184 => 51,  175 => 47,  166 => 43,  160 => 40,  155 => 38,  151 => 37,  148 => 36,  142 => 34,  137 => 32,  133 => 31,  128 => 29,  124 => 28,  120 => 27,  117 => 26,  112 => 25,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Galeries{% endblock %}

{% block body %}

    <div class=\"container mt-4\">
        <h1 class=\"text-center rF\">Toutes les Galeries</h1>
        <a class=\"btn btn-submitForm col-sm-2 mt-3\" href=\"{{ path('admin_gallery_new') }}\">Créer une nouvelle Galerie</a>

    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>Id</th>
                <th>Name</th>                
                <th>Description</th>
                <th>Composée de</th>
                <th>Créée le</th>
                <th>IsVisible</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
        {% for gallery in galleries %}
            <tr class=\"tab\">
                <td class=\"rFb\">{{ gallery.id }}</td>
                <td>{{ gallery.name }}</td> 
                <td>{{ gallery.description }}</td>  
                <td class=\"text-center\">
                    {% if gallery.pictures.count >1 %}                    
                        {{gallery.pictures.count}} photos
                    {% else %}
                        {{gallery.pictures.count}} photo
                    {% endif %}
                </td>
                <td class=\"text-center\">{{ gallery.createdAt ? gallery.createdAt|date('d-m-Y H:i') : '' }}</td>
                <td class=\"text-center\">{{ gallery.isVisible ? 'Oui' : 'Non' }}</td>                
                <td class=\"text-center\">
                    <a href=\"{{ path('admin_gallery_show', {'id': gallery.id}) }}\"><i class=\"bi bi-eye-fill\"></i></a>
                </td>
                <td class=\"text-center\">
                     <a href=\"{{ path('admin_gallery_edit', {'id': gallery.id}) }}\"><i class=\"bi bi-pencil-square\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
     
     <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Dashboard</a>
    </div>
    </div>
    

   
{% endblock %}
", "admin/gallery/galleries.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/gallery/galleries.html.twig");
    }
}
