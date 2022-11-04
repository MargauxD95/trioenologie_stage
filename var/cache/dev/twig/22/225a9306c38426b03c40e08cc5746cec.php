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

/* admin/gallery/showGallery.html.twig */
class __TwigTemplate_6682d7cac9e4f3762660b542cf32b056 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gallery/showGallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gallery/showGallery.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/gallery/showGallery.html.twig", 1);
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

        echo "Galerie n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
        echo "<div class=\"container col-lg-8 col-md-8 col-sm-6 mt-5\">
    <h1 class=\"text-center rF mt-3 mb-5 mb-3\">Galerie n°";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    <div class=\"col-lg-5 mx-auto\">
        <table class=\"table table-sm  table-borderless table-striped \">
            <tbody>
           
                <tr>
                    <th class=\"col-2 rFi\">Créée le</th>
                    <td class=\"text-center\">";
        // line 14
        ((twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14), "d-m-Y H:i"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th class=\"col-2 rFi\">Visible</th>
                    <td class=\"text-center\">";
        // line 18
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 18, $this->source); })()), "isVisible", [], "any", false, false, false, 18)) ? ("Oui") : ("Non"));
        echo "</td>
                </tr>
                <tr>
                    <th class=\"col-2 rFi\">Description</th>
                    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class=\"col-lg-12 col-md-8 col-sm-6 mt-5 text-center\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 28, $this->source); })()), "pictures", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 29
            echo "                <img class=\"shadow-sm p-3 bg-body rounded mb-2\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 29))), "html", null, true);
            echo "\" height=\"150px\">     
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo " 
    </div>

   <div class=\"row justify-content-center text-center mt-5 mb-5\">

        <div class=\"col-3 ms-3\">
            <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_index");
        echo "\" class=\"btn btn-return\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>            
        </div>

        <div class=\"col-3\">
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
                <i class=\"bi bi-pencil\"></i>
            </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            <form method=\"post\" action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr(e) de vouloir supprimer cette galerie ?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49))), "html", null, true);
        echo "\">
                    <button class=\"btn btn-delete mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
            </form>      
        </div>

    </div>           

    </div>


    
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/gallery/showGallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 49,  167 => 48,  158 => 42,  149 => 36,  141 => 30,  132 => 29,  128 => 28,  119 => 22,  112 => 18,  105 => 14,  93 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Galerie n°{{gallery.id}} {% endblock %}

{% block body %}
<div class=\"container col-lg-8 col-md-8 col-sm-6 mt-5\">
    <h1 class=\"text-center rF mt-3 mb-5 mb-3\">Galerie n°{{gallery.id}} : {{gallery.name}}</h1>
    <div class=\"col-lg-5 mx-auto\">
        <table class=\"table table-sm  table-borderless table-striped \">
            <tbody>
           
                <tr>
                    <th class=\"col-2 rFi\">Créée le</th>
                    <td class=\"text-center\">{{ gallery.createdAt ? gallery.createdAt|date('d-m-Y H:i') : '' }}</td>
                </tr>
                <tr>
                    <th class=\"col-2 rFi\">Visible</th>
                    <td class=\"text-center\">{{ gallery.isVisible ? 'Oui' : 'Non' }}</td>
                </tr>
                <tr>
                    <th class=\"col-2 rFi\">Description</th>
                    <td>{{ gallery.description }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class=\"col-lg-12 col-md-8 col-sm-6 mt-5 text-center\">
        {% for picture in gallery.pictures %}
                <img class=\"shadow-sm p-3 bg-body rounded mb-2\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"150px\">     
        {% endfor %} 
    </div>

   <div class=\"row justify-content-center text-center mt-5 mb-5\">

        <div class=\"col-3 ms-3\">
            <a href=\"{{ path('admin_gallery_index') }}\" class=\"btn btn-return\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>            
        </div>

        <div class=\"col-3\">
            <a href=\"{{ path('admin_gallery_edit', {'id':gallery.id}) }}\" class=\"btn btn-update\">
                <i class=\"bi bi-pencil\"></i>
            </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            <form method=\"post\" action=\"{{ path('admin_gallery_delete', {'id': gallery.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr(e) de vouloir supprimer cette galerie ?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ gallery.id) }}\">
                    <button class=\"btn btn-delete mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
            </form>      
        </div>

    </div>           

    </div>


    
</div>
{% endblock %}
", "admin/gallery/showGallery.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\gallery\\showGallery.html.twig");
    }
}
