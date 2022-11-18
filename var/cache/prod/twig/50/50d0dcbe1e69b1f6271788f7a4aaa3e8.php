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

/* admin/gallery/galleries.html.twig */
class __TwigTemplate_2cdd6674b11b6da231d19bd540384864 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/gallery/galleries.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des Galeries";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container mt-4\">
        <h1 class=\"text-center rF\">Toutes les Galeries</h1>
        <a class=\"btn btn-submitForm col-sm-2 mt-3\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_new");
        echo "\">Créer une nouvelle Galerie</a>

    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>Id</th>
                <th>Name</th>                
                <th>Description</th>
                <th>Composée de</th>
                <th>Créée le</th>
                <th>IsVisible</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galleries"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 26
            echo "            <tr class=\"tab\">
                <td class=\"rFb\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td> 
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>  
                <td class=\"text-center\">
                    ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gallery"], "pictures", [], "any", false, false, false, 31), "count", [], "any", false, false, false, 31) > 1)) {
                echo "                    
                        ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gallery"], "pictures", [], "any", false, false, false, 32), "count", [], "any", false, false, false, 32), "html", null, true);
                echo " photos
                    ";
            } else {
                // line 34
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gallery"], "pictures", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34), "html", null, true);
                echo " photo
                    ";
            }
            // line 36
            echo "                </td>
                <td class=\"text-center\">";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["gallery"], "createdAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "createdAt", [], "any", false, false, false, 37), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                <td class=\"text-center\">";
            // line 38
            echo ((twig_get_attribute($this->env, $this->source, $context["gallery"], "isVisible", [], "any", false, false, false, 38)) ? ("Oui") : ("Non"));
            echo "</td>                
                <td class=\"text-center\">
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_show", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye-fill\"></i></a>
                </td>
                <td class=\"text-center\">
                     <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
     
     <div class=\"row justify-content-center\">
        <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Dashboard</a>
    </div>
    </div>
    

   
";
    }

    public function getTemplateName()
    {
        return "admin/gallery/galleries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 55,  154 => 51,  145 => 47,  136 => 43,  130 => 40,  125 => 38,  121 => 37,  118 => 36,  112 => 34,  107 => 32,  103 => 31,  98 => 29,  94 => 28,  90 => 27,  87 => 26,  82 => 25,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/gallery/galleries.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/gallery/galleries.html.twig");
    }
}
