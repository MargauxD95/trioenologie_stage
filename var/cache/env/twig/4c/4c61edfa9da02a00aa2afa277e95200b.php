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

/* main/pages/actus.html.twig */
class __TwigTemplate_727b3644936fd8086ddae375bcd95585 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/actus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/actus.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Actualités de l'association Trioenologie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"container\">
  <h1 class=\"text-center sP mt-4\">Nos dernières actualités</h1>
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "    <section class=\"articles shadow\">
      <div class=\"article\">
    
        <div class=\"left\">
          ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "pictures", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 14
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 14))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "altText", [], "any", false, false, false, 14), "html", null, true);
                echo "\">
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div> <!--Fin de la div class left-->

        <div class=\"right\">
          <p class=\"date\">Publié le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 19), "d-m-Y"), "html", null, true);
            echo "</p>
          <h2>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h1>
          <p class=\"intro\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "intro", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
          <p class=\"content\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
          ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 23)) {
                // line 24
                echo "            <p class=\"author\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>   
          ";
            } else {
                // line 26
                echo "            <p class=\"author\">©️ Trioenologie</p>
          ";
            }
            // line 28
            echo "        </div> <!--Fin de la div class right-->

      </div> <!--Fin de la div class articles-->

    </section> <!--Fin de la section class articles-->
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    <div class=\"row justify-content-center\">    
      <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 mt-5 mb-5\">Retour à l'accueil</a>
    </div>

    <div id=\"scroll_to_top\">
      <a href=\"#top\"><img src=\"/assets/imagesTrioenologie/f-haut.png\" alt=\"Retourner en haut de la page\" /></a>
    </div>    

  </div> <!--Fin de la div container-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/pages/actus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  146 => 34,  135 => 28,  131 => 26,  125 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  107 => 19,  102 => 16,  91 => 14,  87 => 13,  81 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Actualités de l'association Trioenologie{% endblock %}

{% block body %}
  <div class=\"container\">
  <h1 class=\"text-center sP mt-4\">Nos dernières actualités</h1>
  {% for article in articles %}
    <section class=\"articles shadow\">
      <div class=\"article\">
    
        <div class=\"left\">
          {% for picture in article.pictures %}
          <img src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" alt=\"{{picture.altText}}\">
          {% endfor %}
        </div> <!--Fin de la div class left-->

        <div class=\"right\">
          <p class=\"date\">Publié le {{ article.createdAt|date('d-m-Y') }}</p>
          <h2>{{article.title}}</h1>
          <p class=\"intro\">{{article.intro}}</p>
          <p class=\"content\">{{article.content}}</p>
          {% if article.author %}
            <p class=\"author\">{{ article.author }}</p>   
          {% else %}
            <p class=\"author\">©️ Trioenologie</p>
          {% endif %}
        </div> <!--Fin de la div class right-->

      </div> <!--Fin de la div class articles-->

    </section> <!--Fin de la section class articles-->
  {% endfor %}

    <div class=\"row justify-content-center\">    
      <a href=\"{{ path('home') }}\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 mt-5 mb-5\">Retour à l'accueil</a>
    </div>

    <div id=\"scroll_to_top\">
      <a href=\"#top\"><img src=\"/assets/imagesTrioenologie/f-haut.png\" alt=\"Retourner en haut de la page\" /></a>
    </div>    

  </div> <!--Fin de la div container-->
{% endblock %}


", "main/pages/actus.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/pages/actus.html.twig");
    }
}
