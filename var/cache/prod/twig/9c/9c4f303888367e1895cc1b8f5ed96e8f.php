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
class __TwigTemplate_f9bf7c6049038fef63aa31dc33e5fad4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/gallery/showGallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"container col-lg-8 col-md-8 col-sm-6\" id=\"gallery\">

        <div class=\"galleryDetails col-lg-12 col-md-12 col-sm-6 shadow\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <p class=\"galleryDesc\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
            <p class=\"createdAt\">Créée le ";
        // line 10
        ((twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "createdAt", [], "any", false, false, false, 10)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "createdAt", [], "any", false, false, false, 10), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</p>        
                <div class=\"galleryPict text-center\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "pictures", [], "any", false, false, false, 12));
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
        return array (  98 => 19,  92 => 15,  81 => 13,  77 => 12,  72 => 10,  68 => 9,  64 => 8,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/pages/gallery/showGallery.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/pages/gallery/showGallery.html.twig");
    }
}
