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

/* admin/user/profile/showProfile.html.twig */
class __TwigTemplate_c6e3c9db64bd88eb3f859de583fb0b34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/profile/showProfile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/profile/showProfile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/profile/showProfile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">


<h1 class=\"text-center rF mt-3 mb-3\">Profil de l'utilisateur ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), "lastName", [], "any", false, false, false, 9), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), "firstName", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>

    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-2 rFi\">Nom</th>
                <td class=\"rF\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 15, $this->source); })()), "lastName", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Prénom</th>
                <td class=\"rF\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 19, $this->source); })()), "firstName", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Adresse</th>
                <td class=\"rF\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 23, $this->source); })()), "address", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Adresse complémentaire</th>
                <td class=\"rF\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 27, $this->source); })()), "address2", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Code postal</th>
                <td class=\"rF\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 31, $this->source); })()), "zipcode", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Ville</th>
                <td class=\"rF\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 35, $this->source); })()), "city", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Date de modification du profil</th>
                <td class=\"rF\">";
        // line 39
        ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 39, $this->source); })()), "updatedAt", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 39, $this->source); })()), "updatedAt", [], "any", false, false, false, 39), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>            
                <th class=\"col-2 rFi\">Statut du membre</th>
            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43)) {
            // line 44
            echo "                <td class=\"rF\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
            ";
        } else {
            // line 45
            echo "  
                <td class=\"fst-italic\">Statut non-renseigné</td>            
            </tr>
            ";
        }
        // line 49
        echo "
        </tbody>
    </table>
    
    <div class=\"row justify-content-center text-center mt-5 mb-5\">

        <div class=\"col-3 ms-3\">
            <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\" class=\"btn btn-return\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>            
        </div>

        <div class=\"col-3\">
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\" class=\"btn btn-update\">
                <i class=\"bi bi-pencil\"></i>
            </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            <form method=\"post\" action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cet utilisateur?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69))), "html", null, true);
        echo "\">
                    <button class=\"btn btn-delete mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
            </form>      
        </div>

    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/profile/showProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 69,  193 => 68,  184 => 62,  175 => 56,  166 => 49,  160 => 45,  154 => 44,  152 => 43,  145 => 39,  138 => 35,  131 => 31,  124 => 27,  117 => 23,  110 => 19,  103 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
<div class=\"container col-lg-12 col-md-10 col-sm-8 mt-5\">


<h1 class=\"text-center rF mt-3 mb-3\">Profil de l'utilisateur {{profile.lastName}}{{profile.firstName}}</h1>

    <table class=\"table text-center table-borderless table-striped\">
        <tbody class=\"tab\">
            <tr>
                <th class=\"col-2 rFi\">Nom</th>
                <td class=\"rF\">{{ profile.lastName }}</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Prénom</th>
                <td class=\"rF\">{{ profile.firstName }}</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Adresse</th>
                <td class=\"rF\">{{ profile.address }}</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Adresse complémentaire</th>
                <td class=\"rF\">{{ profile.address2 }}</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Code postal</th>
                <td class=\"rF\">{{ profile.zipcode }}</td>
            </tr>
            <tr>
                <th class=\"col-2 rFi\">Ville</th>
                <td class=\"rF\">{{ profile.city }}</td>
            </tr>
            <tr class=\"tab\">
                <th class=\"col-2 rFi\">Date de modification du profil</th>
                <td class=\"rF\">{{ profile.updatedAt ? profile.updatedAt|date('Y-m-d H:i') : '' }}</td>
            </tr>
            <tr>            
                <th class=\"col-2 rFi\">Statut du membre</th>
            {% if profile.status %}
                <td class=\"rF\">{{ profile.status.name }}</td>
            {% else %}  
                <td class=\"fst-italic\">Statut non-renseigné</td>            
            </tr>
            {% endif %}

        </tbody>
    </table>
    
    <div class=\"row justify-content-center text-center mt-5 mb-5\">

        <div class=\"col-3 ms-3\">
            <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-return\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>            
        </div>

        <div class=\"col-3\">
            <a href=\"{{ path('admin_profile_edit', {'id':profile.id}) }}\" class=\"btn btn-update\">
                <i class=\"bi bi-pencil\"></i>
            </a>
        </div>

        <div class=\"col-3 ms-3 me-1\">
            <form method=\"post\" action=\"{{ path('admin_profile_delete', {'id': profile.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cet utilisateur?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ profile.id) }}\">
                    <button class=\"btn btn-delete mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
            </form>      
        </div>

    </div>

</div>
{% endblock %}
", "admin/user/profile/showProfile.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\user\\profile\\showProfile.html.twig");
    }
}
