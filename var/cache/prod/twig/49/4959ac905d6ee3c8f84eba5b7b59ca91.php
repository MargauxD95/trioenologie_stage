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

/* editor/picture/showPicture.html.twig */
class __TwigTemplate_773a2bf0bf3c9617b6ea7fcfb1327d5e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/picture/showPicture.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Détails image n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">

    <h1 class=\"text-center rF mt-3 mb-5 mb-3\">Image n°";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-1 rFi\">ID</th>
                <td class=\"rF\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Titre</th>
                <td class=\"rF\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"rFi\">ALT image</th>
                <td class=\"rF\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "altText", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"tab\">
                <th class=\"rFi\">Image</th>            
                <td><img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "pictureFile", [], "any", false, false, false, 26))), "html", null, true);
        echo "\" height=\"200px\"></td>     
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Width</th>
                <td class=\"rF\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "width", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Height</th>
                <td class=\"rF\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "height", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"rFi\">Légende</th>
                <td class=\"rF\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "legend", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"row justify-content-center text-center mt-5 mb-5\">

        <div class=\"col-3 ms-3\">
            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_pictures");
        echo "\" class=\"btn btn-return\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>            
        </div>

        <div class=\"col-3\">
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_picture_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
                <i class=\"bi bi-pencil\"></i>
            </a>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "editor/picture/showPicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  125 => 46,  114 => 38,  107 => 34,  100 => 30,  93 => 26,  86 => 22,  79 => 18,  72 => 14,  63 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/picture/showPicture.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/editor/picture/showPicture.html.twig");
    }
}
