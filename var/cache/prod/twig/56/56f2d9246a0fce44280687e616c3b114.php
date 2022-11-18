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

/* editor/dashboard.html.twig */
class __TwigTemplate_15d1a48e24a34c94bf094c5dce54c150 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 3), "email", [], "any", false, false, false, 3), "html", null, true);
        echo " !";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container\">

    <h1 class=\"mt-5 mb-2 text-center rF\">Administration du site</h1>
    <h2 class=\"text-center rFi mb-5\">Bienvenue ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>

    <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-3\">

        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_articles");
        echo "\" class=\"btn btns btn-article text-center shadow col-lg-6 col-md-6 col-sm-4 mb-2\">Articles</a>        
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_gallery");
        echo "\" class=\"btn btns btn-galerie text-center shadow col-lg-6 col-md-6 col-sm-4 mb-2\">Galerie photo</a>

    </div>

    <div class=\"row justify-content-center col-lg-12 col-md-auto col-sm-auto mt-2 mb-2\">

        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_carousel");
        echo "\" class=\"btn btns btn-carousel text-center shadow col-lg-6 col-md-6 col-sm-4 mb-2\">Carousel</a>
        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_pictures");
        echo "\" class=\"btn btns btn-evenements text-center shadow col-lg-6 col-md-6 col-sm-4 mb-5\">Banque d'images</a>
    
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "editor/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  86 => 21,  77 => 15,  73 => 14,  66 => 10,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/dashboard.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/editor/dashboard.html.twig");
    }
}
