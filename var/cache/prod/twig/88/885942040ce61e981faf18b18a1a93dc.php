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

/* editor/article/showArticle.html.twig */
class __TwigTemplate_d1f0a9d61eabc530669ab71d3b0b9085 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/article/showArticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Article n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">

    <h1 class=\"text-center rF mt-3 mb-5 mb-3\">Article n°";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-2 rFi\">ID</th>
                <td class=\"rF\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Titre de l'article</th>
                <td class=\"rF\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Date de création</th>
                <td class=\"rF\">";
        // line 22
        ((twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "createdAt", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "createdAt", [], "any", false, false, false, 22), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Introduction</th>
                <td class=\"rF\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "intro", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Contenu</th>
                <td class=\"rF\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Images</th>
                <td>                
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "pictures", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 36
            echo "                <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 36))), "html", null, true);
            echo "\" height=\"200px\">     
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "             
                </td>
            </tr>
            <tr>
            ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 41)) {
            // line 42
            echo "                <th class=\"col-2 rFi\">Auteur</th>
                <td class=\"rF\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
            ";
        } else {
            // line 45
            echo "                <th class=\"col-2 rFi\">Auteur</th>
                <td class=\"rFi rFb\">Non-renseigné</td>
            ";
        }
        // line 48
        echo "
            </tr>
        </tbody>
    </table>


    <div class=\"row justify-content-center text-center mt-5 mb-5\">

        <div class=\"col-3 ms-3\">
            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_articles");
        echo "\" class=\"btn btn-return\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>            
        </div>

        <div class=\"col-3\">
            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_article_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
                <i class=\"bi bi-pencil\"></i>
            </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            <form method=\"post\" action=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_article_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cet article?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 70))), "html", null, true);
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
        return "editor/article/showArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 70,  173 => 69,  164 => 63,  155 => 57,  144 => 48,  139 => 45,  134 => 43,  131 => 42,  129 => 41,  123 => 37,  114 => 36,  110 => 35,  102 => 30,  95 => 26,  88 => 22,  81 => 18,  74 => 14,  63 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/article/showArticle.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/editor/article/showArticle.html.twig");
    }
}
