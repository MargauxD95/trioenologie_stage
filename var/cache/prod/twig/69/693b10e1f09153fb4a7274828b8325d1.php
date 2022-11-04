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

/* admin/article/articles.html.twig */
class __TwigTemplate_f1defd0d0b4c3aa5e1b09b7d7b117cf5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/article/articles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des Articles ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container mt-4\">
    <h1 class=\"text-center rF\">Tous les articles</h1>

    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_new");
        echo "\" class=\"btn btn-submitForm col-sm-2 mt-3\">Ecrire un nouvel article</a>

    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>ID</th>
                <th>Titre</th>
                <th>Intro</th>
                <th>Images</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody class=\"tab\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 24
            echo "            <tr class=\"tab\">
                <td class=\"rFb\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "intro", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td class=\"col-4\">
                ";
            // line 29
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "pictures", [], "any", false, false, false, 29)) > 2)) {
                // line 30
                echo "                    ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "pictures", [], "any", false, false, false, 30)), "html", null, true);
                echo " photos
                ";
            } else {
                // line 32
                echo "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "pictures", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 33
                    echo "                        <img class=\"shadow-sm p-3 bg-body rounded mt-2 mb-2\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 33))), "html", null, true);
                    echo "\" height=\"120px\">     
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                ";
            }
            // line 36
            echo "                
               
                </td>
                <td>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye-fill\"></i></a>
                </td>
                <td>                
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"8\">Aucun résultat.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Tableau de bord</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/article/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  156 => 51,  147 => 47,  138 => 43,  132 => 40,  126 => 36,  123 => 35,  114 => 33,  109 => 32,  103 => 30,  101 => 29,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  80 => 23,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/article/articles.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/article/articles.html.twig");
    }
}
