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

/* admin/article/editArticle.html.twig */
class __TwigTemplate_0f6029f9e8e38efa7176245845bb1f4a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/article/editArticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier l'article";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1 class=\"text-center mt-3 rF\">Modifier l'article n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "admin/article/formArticle.html.twig", ["button_label" => "Mettre à jour"]);
        echo "

    <br>

<form method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cet article?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 13))), "html", null, true);
        echo "\">
    <div class=\"row justify-content-center mb-5\">
        <button class=\"btn btn-delete mb-3 col-lg-1 col-md-1 col-sm-2 \"><i class=\"bi bi-trash3-fill\"></i></button>
    </div>
</form>


";
    }

    public function getTemplateName()
    {
        return "admin/article/editArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  73 => 12,  66 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/article/editArticle.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/article/editArticle.html.twig");
    }
}
