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

/* admin/occasion/occasions.html.twig */
class __TwigTemplate_1e97089801a1eb980bfa4de9b0f13b3b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/occasion/occasions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Occasion index";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container mt-4 col-md-10 mb-2\">

    <section>
        <h1 class=\"text-center rF\">Tous les évènements</h1>
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_new");
        echo "\" class=\"btn btn-submitForm col-sm-auto mt-3\">Nouvel évènement</a>
    </section>

<div class=\"col-md-12 mx-auto\">
    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>ID</th>
                <th class=\"col-3\">Photo</th>
                <th>Catégorie</th>
                <th>Titre</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody class=\"tab\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["occasions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["occasion"]) {
            // line 27
            echo "            <tr class=\"tab\">
                <td class=\"rFb col-1\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["occasion"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td class=\"col-3\">                
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["occasion"], "pictures", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 31
                echo "                    <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 31))), "html", null, true);
                echo "\" height=\"200px\">     
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "       
                </td>
                <td class=\"col-2\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["occasion"], "category", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td class=\"col-2\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["occasion"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td class=\"col-1\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["occasion"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye-fill\"></i></a>
                </td>
                <td class=\"col-1\">                
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["occasion"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <tr>
                <td colspan=\"8\">Aucun résultat.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['occasion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
</div>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Dashboard</a>
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/occasion/occasions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  146 => 48,  137 => 44,  128 => 40,  122 => 37,  117 => 35,  113 => 34,  109 => 32,  100 => 31,  96 => 30,  91 => 28,  88 => 27,  83 => 26,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/occasion/occasions.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/occasion/occasions.html.twig");
    }
}
