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
class __TwigTemplate_d05dec20f46b67a0c4d9a00be5832ac8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile/showProfile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "firstName", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
            <p class=\"col-4\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "lastName", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
        
        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Email</h3>
            <h3 class=\"col-4 profilContent\">Téléphone</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
            <p class=\"col-4\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "city", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
        
        </div>
        
        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Adresse postale</h3>
            <h3 class=\"col-4 profilContent\">Adresse complémentaire</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "address", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
            <p class=\"col-4\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "address2", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
        
        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Code postal</h3>
            <h3 class=\"col-4 profilContent\">Ville</h3>
        
        </div>

        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "zipcode", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
            <p class=\"col-4\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "city", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
        
        </div>

        <div class=\"row justify-content-center text-center profilContent\">
        
            <h3 class=\"col-4 profilContent\">Statut</h3>
        
        </div>

        ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "status", [], "any", false, false, false, 81)) {
                // line 82
                echo "        <div class=\"row justify-content-center text-center profileInfos\">
        
            <p class=\"col-4\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "status", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"btn btn-update col-4\">Modifier le profil</a>

            <form method=\"post\" action=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer votre profil? Ceci entrainera par défaut la suppression de votre compte.');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 100))), "html", null, true);
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
        return array (  214 => 114,  197 => 100,  193 => 99,  188 => 97,  181 => 92,  175 => 88,  168 => 84,  164 => 82,  162 => 81,  149 => 71,  145 => 70,  129 => 57,  125 => 56,  109 => 43,  105 => 42,  89 => 29,  85 => 28,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/profile/showProfile.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/user/profile/showProfile.html.twig");
    }
}
