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

/* admin/occasion/editOccasion.html.twig */
class __TwigTemplate_6bf36a5cb8d5e0bc98c8f5e7e0cf3ca9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/occasion/editOccasion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier l'évènement";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
    <h1 class=\"text-center mt-3 rF\">Modifier l'évènement n°";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo " </h1>

    ";
        // line 9
        echo twig_include($this->env, $context, "admin/occasion/formOccasion.html.twig", ["button_label" => "Mettre à jour"]);
        echo "

    <br>

    <form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cet évènement?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "id", [], "any", false, false, false, 14))), "html", null, true);
        echo "\">
        <div class=\"row justify-content-center mb-5\">
            <button class=\"btn btn-delete col-lg-1 col-md-1 col-sm-2 mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
        </div>
    </form>

</div>    
";
    }

    public function getTemplateName()
    {
        return "admin/occasion/editOccasion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  75 => 13,  68 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/occasion/editOccasion.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/occasion/editOccasion.html.twig");
    }
}
