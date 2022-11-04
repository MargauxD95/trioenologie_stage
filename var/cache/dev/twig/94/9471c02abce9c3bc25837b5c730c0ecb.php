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

/* admin/picture/showPicture.html.twig */
class __TwigTemplate_8c5f2f382d7db297a2e18e485bed0bc4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/picture/showPicture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/picture/showPicture.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/picture/showPicture.html.twig", 1);
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

        echo "Détails image n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5 mb-3 \">

    <h1 class=\"text-center rF mt-3 mb-5 mb-3\">Image n°";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

    <div class=\"row justify-content-center mb-3 \">
        <div class=\"col-5 bg-light shadow-sm rounded justify-content-center fs-6\">
            <table class=\"table table-borderless \">
            <tbody>
            <tr>
                <th class=\"col-3 rFi text-right \">Fichier :</th>
                <td class=\"rF text-left \">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 16, $this->source); })()), "pictureFile", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-right\">Titre :</th>
                <td class=\"rF text-left\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"rFi col-3 text-right\">Balise Alt :</th>
                <td class=\"rF text-left\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 24, $this->source); })()), "altText", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-lrigh\">Largeur :</th>
                <td class=\"rF text-left\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 28, $this->source); })()), "width", [], "any", false, false, false, 28), "html", null, true);
        echo "px</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-right\">Hauteur :</th>
                <td class=\"rF text-left\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 32, $this->source); })()), "height", [], "any", false, false, false, 32), "html", null, true);
        echo "px</td>
            </tr>
            <tr>
                <th class=\"rFi col-3 text-right\">Légende :</th>
                <td class=\"rF text-left\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 36, $this->source); })()), "legend", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
        </table>
    </div>
    
</div>

    <div class=\"row justify-content-center text-center mt\">
        <div class=\"col\">
            <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 46, $this->source); })()), "pictureFile", [], "any", false, false, false, 46))), "html", null, true);
        echo "\" height=\"200px\">
        </div>
    </div>

    <div class=\"row justify-content-center text-center mt-5 mb-5\">
        <div class=\"col-3 ms-3\">
            <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_index");
        echo "\" class=\"btn btn-return\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>            
        </div>

        <div class=\"col-3\">
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
                <i class=\"bi bi-pencil\"></i>
            </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            <form method=\"post\" action=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cet article?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65))), "html", null, true);
        echo "\">
                    <button class=\"btn btn-delete mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
            </form>      
        </div>

    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/picture/showPicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 65,  179 => 64,  170 => 58,  161 => 52,  152 => 46,  139 => 36,  132 => 32,  125 => 28,  118 => 24,  111 => 20,  104 => 16,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails image n°{{picture.id}}{% endblock %}

{% block body %}
<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5 mb-3 \">

    <h1 class=\"text-center rF mt-3 mb-5 mb-3\">Image n°{{picture.id}}</h1>

    <div class=\"row justify-content-center mb-3 \">
        <div class=\"col-5 bg-light shadow-sm rounded justify-content-center fs-6\">
            <table class=\"table table-borderless \">
            <tbody>
            <tr>
                <th class=\"col-3 rFi text-right \">Fichier :</th>
                <td class=\"rF text-left \">{{ picture.pictureFile }}</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-right\">Titre :</th>
                <td class=\"rF text-left\">{{ picture.title }}</td>
            </tr>
            <tr>
                <th class=\"rFi col-3 text-right\">Balise Alt :</th>
                <td class=\"rF text-left\">{{ picture.altText }}</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-lrigh\">Largeur :</th>
                <td class=\"rF text-left\">{{ picture.width }}px</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-right\">Hauteur :</th>
                <td class=\"rF text-left\">{{ picture.height }}px</td>
            </tr>
            <tr>
                <th class=\"rFi col-3 text-right\">Légende :</th>
                <td class=\"rF text-left\">{{ picture.legend }}</td>
            </tr>
        </tbody>
        </table>
    </div>
    
</div>

    <div class=\"row justify-content-center text-center mt\">
        <div class=\"col\">
            <img class=\"shadow-sm p-3 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"200px\">
        </div>
    </div>

    <div class=\"row justify-content-center text-center mt-5 mb-5\">
        <div class=\"col-3 ms-3\">
            <a href=\"{{ path('admin_picture_index') }}\" class=\"btn btn-return\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>            
        </div>

        <div class=\"col-3\">
            <a href=\"{{ path('admin_picture_edit', {'id':picture.id}) }}\" class=\"btn btn-update\">
                <i class=\"bi bi-pencil\"></i>
            </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            <form method=\"post\" action=\"{{ path('admin_picture_delete', {'id': picture.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cet article?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ picture.id) }}\">
                    <button class=\"btn btn-delete mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
            </form>      
        </div>

    </div>
</div>
{% endblock %}
", "admin/picture/showPicture.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\picture\\showPicture.html.twig");
    }
}
