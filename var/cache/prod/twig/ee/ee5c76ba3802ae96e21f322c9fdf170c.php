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

/* admin/carousel/showCarousel.html.twig */
class __TwigTemplate_92b831d2ff1059e59116d5123b083c0d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/carousel/showCarousel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Carousel";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">

    <h1>Carousel</h1>

    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-2 rFi\">ID</th>
                <td class=\"rF\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Page</th>
                <td class=\"rF\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "page", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"row justify-content-center text-center mt-3 mb-5\">

        <div class=\"col-3 ms-3\">
        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_index");
        echo "\" class=\"btn btn-return\">
            <i class=\"bi bi-arrow-left-circle-fill\"></i>
        </a>            
        </div>

        <div class=\"col-3\">
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
            <i class=\"bi bi-pencil\"></i>
        </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            ";
        // line 38
        echo twig_include($this->env, $context, "admin/carousel/deleteCarousel.html.twig");
        echo "        
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/carousel/showCarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  95 => 32,  86 => 26,  75 => 18,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/carousel/showCarousel.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/carousel/showCarousel.html.twig");
    }
}
