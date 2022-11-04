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

/* main/pages/gallery/showGallery.html.twig */
class __TwigTemplate_73ebff2828b5f86279efff56c15dcefa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/gallery/showGallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/gallery/showGallery.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/gallery/showGallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container col-lg-8 col-md-8 col-sm-6\" id=\"gallery\">

        <div class=\"galleryDetails col-lg-12 col-md-12 col-sm-6 shadow\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <p class=\"galleryDesc\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
            <p class=\"createdAt\">Créée le ";
        // line 10
        ((twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 10, $this->source); })()), "createdAt", [], "any", false, false, false, 10)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 10, $this->source); })()), "createdAt", [], "any", false, false, false, 10), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</p>        
                <div class=\"galleryPict text-center\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 12, $this->source); })()), "pictures", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 13
            echo "                    <img class=\"shadow-sm p-3 mb-3 bg-body rounded\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 13))), "html", null, true);
            echo "\" alt\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "altText", [], "any", false, false, false, 13), "html", null, true);
            echo "\"> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </div>
        </div>

    <div class=\"row justify-content-center\">    
      <a href=\"";
        // line 19
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
        return "main/pages/gallery/showGallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 19,  122 => 15,  111 => 13,  107 => 12,  102 => 10,  98 => 9,  94 => 8,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{{gallery.name}}{% endblock %}
{% block body %}

<div class=\"container col-lg-8 col-md-8 col-sm-6\" id=\"gallery\">

        <div class=\"galleryDetails col-lg-12 col-md-12 col-sm-6 shadow\">
            <h1>{{gallery.name}}</h1>
            <p class=\"galleryDesc\">{{gallery.description}}</p>
            <p class=\"createdAt\">Créée le {{ gallery.createdAt ? gallery.createdAt|date('d-m-Y') : '' }}</p>        
                <div class=\"galleryPict text-center\">
                {% for picture in gallery.pictures %}
                    <img class=\"shadow-sm p-3 mb-3 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" alt\"{{picture.altText}}\"> 
                {% endfor %}
                </div>
        </div>

    <div class=\"row justify-content-center\">    
      <a href=\"{{ path('home') }}\" class=\"btn btn-lg btn-return shadow col-lg-3 col-md-3 mt-5 mb-4\">Retour à l'accueil</a>
    </div>

    <div id=\"scroll_to_top\">
      <a href=\"#top\"><img src=\"/assets/imagesTrioenologie/f-haut.png\" alt=\"Retourner en haut de la page\" /></a>
    </div>    
    
</div>


{% endblock %}", "main/pages/gallery/showGallery.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\main\\pages\\gallery\\showGallery.html.twig");
    }
}
