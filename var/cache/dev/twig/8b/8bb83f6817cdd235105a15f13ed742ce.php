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

/* user/profile/showProfile.html.twig */
class __TwigTemplate_a49550f9888be37ba85a6c4665d3866a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile/showProfile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile/showProfile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile/showProfile.html.twig", 1);
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

        echo "Profil";
        
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
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "
<div class=\"container\">

    <section class=\"shadow\">
    
        <div class=\"row justify-content-center text-center profilContent\">

            <h1 class=\"text-center profil\">Informations du profil</h1>

        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h2 class=\"col-4 profilContent\">Nom</h3>
            <h2 class=\"col-4 profilContent\">Prénom</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
            <p class=\"col-4\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
        
        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Email</h3>
            <h3 class=\"col-4 profilContent\">Téléphone</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
            <p class=\"col-4\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 43, $this->source); })()), "city", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
        
        </div>
        
        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Adresse postale</h3>
            <h3 class=\"col-4 profilContent\">Adresse complémentaire</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 56, $this->source); })()), "address", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
            <p class=\"col-4\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 57, $this->source); })()), "address2", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
        
        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Code postal</h3>
            <h3 class=\"col-4 profilContent\">Ville</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 70, $this->source); })()), "zipcode", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
            <p class=\"col-4\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 71, $this->source); })()), "city", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
        
        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Statut</h3>
        
        </div>

        ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 81, $this->source); })()), "status", [], "any", false, false, false, 81)) {
                // line 82
                echo "        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 84, $this->source); })()), "status", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                echo "</p>
        
        </div>
        ";
            } else {
                // line 88
                echo "        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">Renseignez votre statut en modifiant votre profil!</p>
        ";
            }
            // line 92
            echo "
        <br>

        <div class=\"row justify-content-center text-center profileInfos\">

            <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"btn btn-update col-4\">Modifier le profil</a>

            <form method=\"post\" action=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer votre profil? Ceci entrainera par défaut la suppression de votre compte.');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100))), "html", null, true);
            echo "\">
                <button class=\"btn\">Supprimer le profil</button>
            </form>

        </div>

        <br><br>

    </section>

</div>


";
        }
        // line 114
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/profile/showProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 114,  227 => 100,  223 => 99,  218 => 97,  211 => 92,  205 => 88,  198 => 84,  194 => 82,  192 => 81,  179 => 71,  175 => 70,  159 => 57,  155 => 56,  139 => 43,  135 => 42,  119 => 29,  115 => 28,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block body %}

{% if app.user %}

<div class=\"container\">

    <section class=\"shadow\">
    
        <div class=\"row justify-content-center text-center profilContent\">

            <h1 class=\"text-center profil\">Informations du profil</h1>

        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h2 class=\"col-4 profilContent\">Nom</h3>
            <h2 class=\"col-4 profilContent\">Prénom</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">{{profile.firstName}}</p>
            <p class=\"col-4\">{{profile.lastName}}</p>
        
        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Email</h3>
            <h3 class=\"col-4 profilContent\">Téléphone</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">{{app.user.email}}</p>
            <p class=\"col-4\">{{profile.city}}</p>
        
        </div>
        
        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Adresse postale</h3>
            <h3 class=\"col-4 profilContent\">Adresse complémentaire</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">{{profile.address}}</p>
            <p class=\"col-4\">{{profile.address2}}</p>
        
        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Code postal</h3>
            <h3 class=\"col-4 profilContent\">Ville</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">{{profile.zipcode}}</p>
            <p class=\"col-4\">{{profile.city}}</p>
        
        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Statut</h3>
        
        </div>

        {% if profile.status %}
        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">{{profile.status.name}}</p>
        
        </div>
        {% else %}
        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">Renseignez votre statut en modifiant votre profil!</p>
        {% endif %}

        <br>

        <div class=\"row justify-content-center text-center profileInfos\">

            <a href=\"{{ path('user_profile_edit', {'id': profile.id}) }}\" class=\"btn btn-update col-4\">Modifier le profil</a>

            <form method=\"post\" action=\"{{ path('user_profile_delete', {'id': profile.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer votre profil? Ceci entrainera par défaut la suppression de votre compte.');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ profile.id) }}\">
                <button class=\"btn\">Supprimer le profil</button>
            </form>

        </div>

        <br><br>

    </section>

</div>


{% endif %}

{% endblock %}
", "user/profile/showProfile.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\user\\profile\\showProfile.html.twig");
    }
}
