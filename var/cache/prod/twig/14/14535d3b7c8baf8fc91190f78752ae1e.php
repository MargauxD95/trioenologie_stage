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

/* user/profile/editProfile.html.twig */
class __TwigTemplate_dd4bde0fbc8d9207fe589625a02bff07 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile/editProfile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier le profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container\">
    <h1 class=\"mt-2 text-center\">Modifier le profil</h1>
    ";
        // line 9
        $this->loadTemplate("/main/partials/dialogBox.html.twig", "user/profile/editProfile.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"row justify-content-center col-6\">
    
        ";
        // line 12
        echo twig_include($this->env, $context, "user/profile/formProfile.html.twig", ["button_label" => "Mettre à jour"]);
        echo "

        <button class=\"btn btn-submit\" type=\"submit\">Valider</button>

    </div>
        ";
        // line 18
        echo "        <button id=\"btnReset\"  class=\"btn btn-warning my-1\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile_reset", ["id" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" onclick=\"showDialogBox()\" >Réinitialiser le profil</button>

        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        echo "\" class=\"btn btn-return col-4\">Retour au profil</a>


        ";
        // line 24
        echo "        ";
        echo twig_include($this->env, $context, "user/profile/deleteProfile.html.twig");
        echo "
    
</div>
";
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <script src=\"/assets/js/askConfirmation.js\" ></script>
";
    }

    public function getTemplateName()
    {
        return "user/profile/editProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  99 => 29,  90 => 24,  84 => 20,  78 => 18,  70 => 12,  66 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/profile/editProfile.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/user/profile/editProfile.html.twig");
    }
}
