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

/* admin/picture/pictures.html.twig */
class __TwigTemplate_50f081265f0968573af21cb01430c0e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/picture/pictures.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/picture/pictures.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/picture/pictures.html.twig", 1);
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

        echo "Images";
        
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
    <h1 class=\"text-center rF\">Toutes les images</h1>

    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_newOne");
        echo "\" class=\"btn btn-submitForm col-sm-3 mt-3\">Ajouter une seule image</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_newMulti");
        echo "\" class=\"btn btn-submitForm col-sm-3 mt-3\">Ajouter plusieurs images</a>

    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>ID</th>
                <th>Titre</th>
                <th>Image</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody class=\"tab\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 24
            echo "            <tr class=\"tab\">
                <td class=\"rFb\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td class=\"col-4\"><img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" height=\"120px\"></td>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_show", ["id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye-fill\"></i></a></td>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square\"></i></a></td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "            <tr>
                <td colspan=\"8\">Aucune image enregistrée.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Tableau de bord</a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/picture/pictures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 40,  154 => 36,  145 => 32,  137 => 29,  133 => 28,  129 => 27,  125 => 26,  121 => 25,  118 => 24,  113 => 23,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Images{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"text-center rF\">Toutes les images</h1>

    <a href=\"{{ path('admin_picture_newOne') }}\" class=\"btn btn-submitForm col-sm-3 mt-3\">Ajouter une seule image</a>
    <a href=\"{{ path('admin_picture_newMulti') }}\" class=\"btn btn-submitForm col-sm-3 mt-3\">Ajouter plusieurs images</a>

    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>ID</th>
                <th>Titre</th>
                <th>Image</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody class=\"tab\">
        {% for picture in pictures %}
            <tr class=\"tab\">
                <td class=\"rFb\">{{ picture.id }}</td>
                <td>{{ picture.title }}</td>
                <td class=\"col-4\"><img class=\"shadow-sm p-3 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"120px\"></td>
                <td><a href=\"{{ path('admin_picture_show', {'id': picture.id}) }}\"><i class=\"bi bi-eye-fill\"></i></a></td>
                <td><a href=\"{{ path('admin_picture_edit', {'id': picture.id}) }}\"><i class=\"bi bi-pencil-square\"></i></a></td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">Aucune image enregistrée.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Tableau de bord</a>
    </div>
</div>
{% endblock %}
", "admin/picture/pictures.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/picture/pictures.html.twig");
    }
}
