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

/* admin/category/showCategory.html.twig */
class __TwigTemplate_b643938fbb67a268eb62dd7a71ddff49 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/showCategory.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Category";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">

    <h1 class=\"text-center mt-3 mb-5 rF\">Catégories d'évènements</h1>

    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-2 rFi\">ID</th>
                <td class=\"rF\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Catégorie</th>
                <td class=\"rF\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Couleur du fond</th>
                <td class=\"rF\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "bgColor", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Couleur de la bordure</th>
                <td class=\"rF\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "bdColor", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Couleur du texte</th>
                <td class=\"rF\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "textColor", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <br>

    <div class=\"row justify-content-center text-center mt-3 mb-5\">

        <div class=\"col-3 ms-3\">
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        echo "\" class=\"btn btn-return\">
            <i class=\"bi bi-arrow-left-circle-fill\"></i>
        </a>            
        </div>

        <div class=\"col-3\">
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
            <i class=\"bi bi-pencil\"></i>
        </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            ";
        // line 52
        echo twig_include($this->env, $context, "admin/category/deleteCategory.html.twig");
        echo "        
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/category/showCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  118 => 46,  109 => 40,  96 => 30,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/category/showCategory.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/category/showCategory.html.twig");
    }
}
