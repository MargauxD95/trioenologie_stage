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

/* admin/picture/deletePicture.html.twig */
class __TwigTemplate_50ebc207c43347dc3a4262a0d9b1685e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cette photo?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">    
    <div class=\"row justify-content-center mb-5\">
        <button class=\"btn btn-delete col-lg-1 col-md-1 col-sm-2 mb-3\">Supprimer l'image'</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "admin/picture/deletePicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/picture/deletePicture.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/picture/deletePicture.html.twig");
    }
}
