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

/* admin/dashboard.html.twig */
class __TwigTemplate_693c218209ea8af81de782b17f47f4f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
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

        echo "Dashboard de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "email", [], "any", false, false, false, 3), "html", null, true);
        echo " !";
        
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
<div class=\"container\">

    <h1 class=\"mt-3 mb-2 text-center rF\">Administration du site</h1>

        <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-3 mb-2\">
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_index");
        echo "\" class=\"col-6 text-center btn btns btn-galerie shadow\">Carousels</a>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_index");
        echo "\" class=\"col-6 text-center btn btns btn-galerie shadow\">Galeries photo</a>        
        </div>

        <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-2 mb-2\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_index");
        echo "\" class=\"col-6 text-center btn btns btn-evenements me-2 shadow\">Evènements</a>
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        echo "\" class=\"col-6 text-center btn btns btn-categories shadow\">Catégories</a>
        </div>
        <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-2 mb-2\">            
        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_index");
        echo "\" class=\"col-6 text-center btn btns btn-galerie me-2 shadow\">Banque d'images</a>
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_index");
        echo "\" class=\"col-6 text-center btn btns btn-article me-2 shadow\">Articles</a>

        </div>        

        <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-2 mb-2\">
            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\" class=\"col-6 text-center btn btns btn-users shadow\">Utilisateurs</a>
            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_status_index");
        echo "\" class=\"col-6 text-center btn btns btn-evenements shadow\">Statut des utilisateurs</a>
        </div>        
        
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 28,  131 => 27,  123 => 22,  119 => 21,  113 => 18,  109 => 17,  102 => 13,  98 => 12,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard de {{ app.user.email }} !{% endblock %}

{% block body %}

<div class=\"container\">

    <h1 class=\"mt-3 mb-2 text-center rF\">Administration du site</h1>

        <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-3 mb-2\">
            <a href=\"{{ path('admin_carousel_index') }}\" class=\"col-6 text-center btn btns btn-galerie shadow\">Carousels</a>
            <a href=\"{{ path('admin_gallery_index') }}\" class=\"col-6 text-center btn btns btn-galerie shadow\">Galeries photo</a>        
        </div>

        <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-2 mb-2\">
            <a href=\"{{ path('admin_occasion_index') }}\" class=\"col-6 text-center btn btns btn-evenements me-2 shadow\">Evènements</a>
            <a href=\"{{ path('admin_categories') }}\" class=\"col-6 text-center btn btns btn-categories shadow\">Catégories</a>
        </div>
        <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-2 mb-2\">            
        <a href=\"{{ path('admin_picture_index') }}\" class=\"col-6 text-center btn btns btn-galerie me-2 shadow\">Banque d'images</a>
            <a href=\"{{ path('admin_article_index') }}\" class=\"col-6 text-center btn btns btn-article me-2 shadow\">Articles</a>

        </div>        

        <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-2 mb-2\">
            <a href=\"{{ path('admin_user_index') }}\" class=\"col-6 text-center btn btns btn-users shadow\">Utilisateurs</a>
            <a href=\"{{ path('admin_status_index') }}\" class=\"col-6 text-center btn btns btn-evenements shadow\">Statut des utilisateurs</a>
        </div>        
        
</div>

{% endblock %}
", "admin/dashboard.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\dashboard.html.twig");
    }
}
