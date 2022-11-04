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

/* main/pages/gallery/galerie.html.twig */
class __TwigTemplate_2b40ef2503e986139da9ef7c99af02dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/gallery/galerie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/gallery/galerie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/gallery/galerie.html.twig", 1);
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

        echo "Galeries photos Trioenologie";
        
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
    <h1 class=\"text-center sP mb-3\">Galeries photos</h1>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new RuntimeError('Variable "galleries" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 9
            echo "        <div class=\"col-lg-12 col-md-8 col-sm-6 mt-5 text-center mx-auto shadow\" id=\"galerie\">
            <h2 class=\"text-center mb-3\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_gallery", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\" id=\"showGallery\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</a></h2>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["gallery"], "pictures", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 12
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_gallery", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\" id=\"showGallery\"><img class=\"shadow-sm p-3 bg-body rounded mb-2\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 12))), "html", null, true);
                echo "\" height=\"100px\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "altText", [], "any", false, false, false, 12), "html", null, true);
                echo "\"></a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo " 
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <div class=\"row justify-content-center\">    
      <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-3 col-md-3 mt-5 mb-4\">Retour à l'accueil</a>
    </div>

    <div id=\"scroll_to_top\">
      <a href=\"#top\"><img src=\"/assets/imagesTrioenologie/f-haut.png\" alt=\"Retourner en haut de la page\" /></a>
    </div>    
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/pages/gallery/galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 18,  130 => 16,  122 => 13,  109 => 12,  105 => 11,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Galeries photos Trioenologie{% endblock %}

{% block body %}
<div class=\"container col-lg-8 col-md-8 col-sm-6 mt-5\">
    <h1 class=\"text-center sP mb-3\">Galeries photos</h1>
    {% for gallery in galleries %}
        <div class=\"col-lg-12 col-md-8 col-sm-6 mt-5 text-center mx-auto shadow\" id=\"galerie\">
            <h2 class=\"text-center mb-3\"><a href=\"{{ path('show_gallery', {'id': gallery.id}) }}\" id=\"showGallery\">{{gallery.name}}</a></h2>
            {% for picture in gallery.pictures %}
                <a href=\"{{ path('show_gallery', {'id': gallery.id}) }}\" id=\"showGallery\"><img class=\"shadow-sm p-3 bg-body rounded mb-2\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"100px\" alt=\"{{picture.altText}}\"></a>
            {% endfor %} 
        </div>
    {% endfor %}

    <div class=\"row justify-content-center\">    
      <a href=\"{{ path('home') }}\" class=\"btn btn-lg btn-return shadow col-lg-3 col-md-3 mt-5 mb-4\">Retour à l'accueil</a>
    </div>

    <div id=\"scroll_to_top\">
      <a href=\"#top\"><img src=\"/assets/imagesTrioenologie/f-haut.png\" alt=\"Retourner en haut de la page\" /></a>
    </div>    
</div>

{% endblock %}
", "main/pages/gallery/galerie.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie_stage\\templates\\main\\pages\\gallery\\galerie.html.twig");
    }
}
