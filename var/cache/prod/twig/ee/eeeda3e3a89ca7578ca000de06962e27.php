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

/* admin/carousel/editCarousel.html.twig */
class __TwigTemplate_443c437aa5d357e511a7066510d37aaa extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/carousel/editCarousel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier le Carousel";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1 class=\"text-center mt-3 rF\">Modifier le Carousel n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <div id=\"notification\"> <div id=\"result\"></div></div>

    ";
        // line 9
        echo twig_include($this->env, $context, "admin/carousel/formCarousel.html.twig", ["button_label" => "Mettre à jour"]);
        echo "


<form method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr(e) de vouloir supprimer ce carousel ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, false, 13))), "html", null, true);
        echo "\">
    <div class=\"row justify-content-center mb-5 mt-1\">
        <button class=\"btn btn-delete mb-3 col-lg-1 col-md-1 col-sm-2 \"><i class=\"bi bi-trash3-fill\"></i></button>
    </div>
</form>
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "   
";
    }

    public function getTemplateName()
    {
        return "admin/carousel/editCarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  94 => 22,  92 => 21,  90 => 20,  86 => 19,  76 => 13,  72 => 12,  66 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/carousel/editCarousel.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/carousel/editCarousel.html.twig");
    }
}
