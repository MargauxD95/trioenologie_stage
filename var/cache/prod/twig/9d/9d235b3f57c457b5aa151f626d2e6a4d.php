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

/* editor/picture/pictures.html.twig */
class __TwigTemplate_d95d3a4ad0e2781c47538ade7fe51545 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/picture/pictures.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Images";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container mt-4\">
    <h1 class=\"text-center rF\">Toutes les images</h1>

    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_picture_new");
        echo "\" class=\"btn btn-submitForm col-sm-2 mt-3\">Ajouter une image</a>

    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>ID</th>
                <th>Titre</th>
                <th>Image</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody class=\"tab\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pictures"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 23
            echo "            <tr class=\"tab\">
                <td class=\"rFb\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td class=\"col-4\"><img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" height=\"180px\"></td>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_picture_show", ["id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye-fill\"></i></a></td>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_picture_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square\"></i></a></td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <tr>
                <td colspan=\"8\">Aucune image enregistrée.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_dashboard");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Dashboard</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "editor/picture/pictures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  120 => 35,  111 => 31,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  84 => 23,  79 => 22,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/picture/pictures.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/editor/picture/pictures.html.twig");
    }
}
