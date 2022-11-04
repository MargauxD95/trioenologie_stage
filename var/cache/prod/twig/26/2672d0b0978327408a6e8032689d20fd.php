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

/* editor/gallery/showGallery.html.twig */
class __TwigTemplate_386eadcf84eddad8c00656e02183a589 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/gallery/showGallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Image n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">

    <h1 class=\"text-center rF mt-3 mb-5 mb-3\">Image n°";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "imgTitle", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>


    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-2 rFi\">ID</th>
                <td class=\"rF\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Titre de l'image</th>
                <td class=\"rF\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "imgTitle", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Description de l'image</th>
                <td class=\"rF\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "imgDesc", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Créée le</th>
                <td class=\"rF\">";
        // line 27
        ((twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "createdAt", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "createdAt", [], "any", false, false, false, 27), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Fin de publication</th>
                <td class=\"rF\">";
        // line 31
        ((twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "endAt", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "endAt", [], "any", false, false, false, 31), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Image</th>
                <td class=\"rF\">                
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "pictures", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 37
            echo "                    <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 37))), "html", null, true);
            echo "\" height=\"200px\">     
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "             
                </td>
            </tr>
        </tbody>
    </table>

    <div class=\"row justify-content-center text-center mt-5 mb-5\">

        <div class=\"col-3 ms-3\">
            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_gallery");
        echo "\" class=\"btn btn-return\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>            
        </div>

        <div class=\"col-3\">
            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_gallery_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
                <i class=\"bi bi-pencil\"></i>
            </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            <form method=\"post\" action=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_gallery_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cet article?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 60))), "html", null, true);
        echo "\">
                    <button class=\"btn btn-delete mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
            </form>      
        </div>

    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "editor/gallery/showGallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 60,  153 => 59,  144 => 53,  135 => 47,  124 => 38,  115 => 37,  111 => 36,  103 => 31,  96 => 27,  89 => 23,  82 => 19,  75 => 15,  63 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/gallery/showGallery.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/editor/gallery/showGallery.html.twig");
    }
}
