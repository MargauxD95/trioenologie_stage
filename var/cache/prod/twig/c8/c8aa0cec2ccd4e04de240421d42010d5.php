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

/* admin/user/profile/editProfile.html.twig */
class __TwigTemplate_5912aedc54c3c9992107aa79ec4e1cb2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/profile/editProfile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier le profil n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
    <h1 class=\"text-center mt-4 rF\">Modifier le profil de : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "firstName", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "lastName", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    ";
        // line 8
        $this->loadTemplate("/main/partials/dialogBox.html.twig", "admin/user/profile/editProfile.html.twig", 8)->display($context);
        // line 9
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, "admin/user/profile/formProfile.html.twig", ["button_label" => "Mettre à jour"]);
        echo "

    </div>

    <br>

    <form method=\"post\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" >
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 17))), "html", null, true);
        echo "\">
        <div class=\"row justify-content-center mb-5\">
            <button class=\"btn btn-delete col-lg-1 col-md-1 col-sm-2 mb-3\" id=\"btnDelete\" onclick=\"showDialogBox()\"><i class=\"bi bi-trash3-fill\"></i></button>
        </div>
    </form>  
</div>

";
    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <script src=\"/assets/js/askConfirmation.js\" ></script>
";
    }

    public function getTemplateName()
    {
        return "admin/user/profile/editProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  99 => 26,  87 => 17,  83 => 16,  74 => 10,  71 => 9,  69 => 8,  63 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/user/profile/editProfile.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/user/profile/editProfile.html.twig");
    }
}
