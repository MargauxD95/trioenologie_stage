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
class __TwigTemplate_552cca372dc306ef0822131acd996987 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard de ";
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
        return array (  105 => 28,  101 => 27,  93 => 22,  89 => 21,  83 => 18,  79 => 17,  72 => 13,  68 => 12,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/dashboard.html.twig");
    }
}
