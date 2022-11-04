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
class __TwigTemplate_4a86cfd082ec8fdc6046274509026a27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/users.html.twig", 1);
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

        echo "Tous les utilisateurs";
        
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 24, $this->source); })()));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 33, $this->source); })()));
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

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  195 => 57,  189 => 53,  180 => 49,  173 => 46,  166 => 44,  160 => 41,  156 => 40,  151 => 38,  147 => 37,  144 => 36,  142 => 35,  139 => 34,  135 => 33,  129 => 30,  125 => 29,  120 => 27,  116 => 26,  113 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tous les utilisateurs{% endblock %}

{% block body %}

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
        {% for user in users %}
            <tr class=\"tab\">
                <td class=\"rFb\">{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <a href=\"{{ path('admin_user_show', {'id': user.id}) }}\"><i class=\"bi bi-eye-fill me-2\"></i></a>
                    <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\"><i class=\"bi bi-pencil-square\"></i></a>
                </td>

                {% for profile in profiles %}
                        
                        {% if profile.user.id == user.id %}
                        
                        <td>{{ profile.lastName }}</td>                       
                        <td>{{ profile.firstName }}</td>     
                        <td>
                            <a href=\"{{ path('admin_profile_show', {'id': profile.id}) }}\"><i class=\"bi bi-eye-fill me-2\"></i></a>
                            <a href=\"{{ path('admin_profile_edit', {'id': profile.id}) }}\"><i class=\"bi bi-pencil-square\"></i></a>
                        </td>      
                        {% endif %}

                {% endfor %}
            </tr>

        {% else %}
            <tr>
                <td colspan=\"6\">Aucun résultat</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 col-sm-3 me-2 mt-3 mb-5\">Dashboard</a>
    </div>

{% endblock %}
", "admin/user/users.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\user\\users.html.twig");
    }
}
