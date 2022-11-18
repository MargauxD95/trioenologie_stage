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

/* admin/gallery/editGallery.html.twig */
class __TwigTemplate_f3b2b298fad3bfa06a269aa4f8c944ff extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/gallery/editGallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier la Galerie";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1 class=\"text-center mt-3 rF\">Modifier la Galerie n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "admin/gallery/formGallery.html.twig", ["button_label" => "Mettre à jour"]);
        echo "


    <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr(e) de vouloir supprimer cette galerie ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 12))), "html", null, true);
        echo "\">
    <div class=\"row justify-content-center mb-5 mt-1\">
        <button class=\"btn btn-delete mb-3 col-lg-1 col-md-1 col-sm-2 \"><i class=\"bi bi-trash3-fill\"></i></button>
    </div>
</form>


    
";
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <script src=\"/assets/js/previewUploadGallery.js\" ></script>
    <script src=\"/assets/js/previewSavedGallery.js\" ></script>
   
";
    }

    public function getTemplateName()
    {
        return "admin/gallery/editGallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 22,  77 => 12,  73 => 11,  67 => 8,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/gallery/editGallery.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/gallery/editGallery.html.twig");
    }
}
