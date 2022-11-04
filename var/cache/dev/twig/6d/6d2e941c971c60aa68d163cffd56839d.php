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

/* main/pages/programme/events.html.twig */
class __TwigTemplate_dc75ac2997a695b2dd793601a0a35879 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/programme/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/programme/events.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/programme/events.html.twig", 1);
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

        echo "Tous les évènements de l'association Trioenologie";
        
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
<div class=\"container\" id=\"contact\">

    <h1 class=\"text-center sP mt-3 mb-3\">Programme de l'association</h1>

    
        <section class=\"row justify-content-center col-lg-12 col-md-12 col-sm-auto\">
                
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["occasions"]) || array_key_exists("occasions", $context) ? $context["occasions"] : (function () { throw new RuntimeError('Variable "occasions" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["occasion"]) {
            // line 15
            echo "                <div class=\"col lg-5 col-md-7 col-sm-4 shadow text-center mt-3 mb-3 ms-3 me-3\" id=\"eventShow\">
                    
                <h2 class=\"sP mt-3 mb-3\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["occasion"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</h2>
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["occasion"], "pictures", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 19
                echo "                    <div class=\"surroundPics my-1\">
                        <div class=\"pics\">
                            <img class=\"shadow-sm p-3 mb-3 bg-body rounded\" src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 21))), "html", null, true);
                echo "\" height=\"350px\" alt\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "altText", [], "any", false, false, false, 21), "html", null, true);
                echo "\"> 
                        </div>
                    </div>        
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    <span class=\"rFb mb-2\">Détails de l'évènement</span> 
                    <p class=\"mt-2 mb-3 rF\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["occasion"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                    <div id=\"eventDate\">
                    <span class=\"rFb\">Début de l'évènement</span>
                    <p class=\"mt-2 mb-3\"> ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["occasion"], "startDate", [], "any", false, false, false, 29), "d/m/Y H:i"), "html", null, true);
            echo "</p>
                    <span class=\"rFb\">Fin de l'évènement</span> 
                    <p class=\"mt-2 mb-3\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["occasion"], "endDate", [], "any", false, false, false, 31), "d/m/Y H:i"), "html", null, true);
            echo "</p>          
                    </div>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showEvent", ["id" => twig_get_attribute($this->env, $this->source, $context["occasion"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn btn-contact mt-3 mb-3\">Plus de détails</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['occasion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

        </section>


        <div class=\"row justify-content-center\">    
            <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-2 mt-5 mb-5\">Retour à l'accueil</a>
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
        return "main/pages/programme/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 42,  158 => 36,  149 => 33,  144 => 31,  139 => 29,  133 => 26,  130 => 25,  118 => 21,  114 => 19,  110 => 18,  106 => 17,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Tous les évènements de l'association Trioenologie{% endblock %}

{% block body %}

<div class=\"container\" id=\"contact\">

    <h1 class=\"text-center sP mt-3 mb-3\">Programme de l'association</h1>

    
        <section class=\"row justify-content-center col-lg-12 col-md-12 col-sm-auto\">
                
            {% for occasion in occasions %}
                <div class=\"col lg-5 col-md-7 col-sm-4 shadow text-center mt-3 mb-3 ms-3 me-3\" id=\"eventShow\">
                    
                <h2 class=\"sP mt-3 mb-3\">{{ occasion.title }}</h2>
                {% for picture in occasion.pictures %}
                    <div class=\"surroundPics my-1\">
                        <div class=\"pics\">
                            <img class=\"shadow-sm p-3 mb-3 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"350px\" alt\"{{picture.altText}}\"> 
                        </div>
                    </div>        
                {% endfor %}
                    <span class=\"rFb mb-2\">Détails de l'évènement</span> 
                    <p class=\"mt-2 mb-3 rF\">{{ occasion.description }}</p>
                    <div id=\"eventDate\">
                    <span class=\"rFb\">Début de l'évènement</span>
                    <p class=\"mt-2 mb-3\"> {{ occasion.startDate|date('d/m/Y H:i') }}</p>
                    <span class=\"rFb\">Fin de l'évènement</span> 
                    <p class=\"mt-2 mb-3\">{{ occasion.endDate|date('d/m/Y H:i') }}</p>          
                    </div>
                    <a href=\"{{ path('showEvent', {'id': occasion.id}) }}\" class=\"btn btn-contact mt-3 mb-3\">Plus de détails</a>
                </div>
            {% endfor %}


        </section>


        <div class=\"row justify-content-center\">    
            <a href=\"{{ path('home') }}\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-2 mt-5 mb-5\">Retour à l'accueil</a>
        </div>
        
        <div id=\"scroll_to_top\">
            <a href=\"#top\"><img src=\"/assets/imagesTrioenologie/f-haut.png\" alt=\"Retourner en haut de la page\" /></a>
        </div>        
</div>



{% endblock %}", "main/pages/programme/events.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie_stage\\templates\\main\\pages\\programme\\events.html.twig");
    }
}
