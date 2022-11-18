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

/* admin/occasion/showOccasion.html.twig */
class __TwigTemplate_19e843c756d21739a0b21e6a370fb824 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/occasion/showOccasion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Evènements";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">

    <h1 class=\"text-center mt-3 mb-5 rF\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-2 rFi\">ID</th>
                <td class=\"rF\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>            
            <tr>
                <th class=\"col-2 rFi\">Titre</th>
                <td class=\"rF\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th class=\"col-2 rFi\">Catégorie</th>
                <td class=\"rF\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "category", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>

            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Description</th>
                <td class=\"rF\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
            <th class=\"col-2 rFi\">Nb de participants min.</th>
                <td class=\"rF\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "minParts", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
            <th class=\"col-2 rFi\">Nb de participants max.</th>
                <td class=\"rF\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "maxParts", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Date de début</th>
                <td class=\"rF\">";
        // line 40
        ((twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "startDate", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "startDate", [], "any", false, false, false, 40), "d-m-Y H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Date de fin</th>
                <td class=\"rF\">";
        // line 44
        ((twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "endDate", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "endDate", [], "any", false, false, false, 44), "d-m-Y H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>            
            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Photo</th>
                <td>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "pictures", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 50
            echo "                    <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 50))), "html", null, true);
            echo "\" height=\"170px\">     
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo " 
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <div class=\"row justify-content-center text-center mt-3 mb-5\">

        <div class=\"col-3 ms-3\">
        <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_index");
        echo "\" class=\"btn btn-return\">
            <i class=\"bi bi-arrow-left-circle-fill\"></i>
        </a>            
        </div>

        <div class=\"col-3\">
        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
            <i class=\"bi bi-pencil\"></i>
        </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            ";
        // line 74
        echo twig_include($this->env, $context, "admin/occasion/deleteOccasion.html.twig");
        echo "        
        </div>

    </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "admin/occasion/showOccasion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  165 => 68,  156 => 62,  143 => 51,  134 => 50,  130 => 49,  122 => 44,  115 => 40,  108 => 36,  101 => 32,  94 => 28,  86 => 23,  78 => 18,  71 => 14,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/occasion/showOccasion.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/occasion/showOccasion.html.twig");
    }
}
