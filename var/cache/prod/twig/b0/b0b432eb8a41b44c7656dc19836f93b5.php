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

/* admin/user/users.html.twig */
class __TwigTemplate_ebfebbe0c7d5e740c4c1ec71c3d78270 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Tous les utilisateurs";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container mt-4\">

    <h1 class=\"text-center rF\">Tous les membres</h1>


    <table class=\"table tab\">
        <thead class=\"tab\">
            <tr class=\"tab\">
                <th>ID</th>
                <th>Email</th>      
                <th>Utilisateur</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Profil</th>
            </tr>
        </thead>
        <tbody class=\"tab\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "            <tr class=\"tab\">
                <td class=\"rFb\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye-fill me-2\"></i></a>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square\"></i></a>
                </td>

                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 34
                echo "                        
                        ";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["profile"], "user", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35))) {
                    // line 36
                    echo "                        
                        <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "lastName", [], "any", false, false, false, 37), "html", null, true);
                    echo "</td>                       
                        <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "firstName", [], "any", false, false, false, 38), "html", null, true);
                    echo "</td>     
                        <td>
                            <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_show", ["id" => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                    echo "\"><i class=\"bi bi-eye-fill me-2\"></i></a>
                            <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                    echo "\"><i class=\"bi bi-pencil-square\"></i></a>
                        </td>      
                        ";
                }
                // line 44
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </tr>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "            <tr>
                <td colspan=\"6\">Aucun résultat</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Dashboard</a>
    </div>
    
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/user/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  159 => 53,  150 => 49,  143 => 46,  136 => 44,  130 => 41,  126 => 40,  121 => 38,  117 => 37,  114 => 36,  112 => 35,  109 => 34,  105 => 33,  99 => 30,  95 => 29,  90 => 27,  86 => 26,  83 => 25,  78 => 24,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/user/users.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/user/users.html.twig");
    }
}
