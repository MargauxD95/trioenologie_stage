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

/* admin/status/deleteStatus.html.twig */
class __TwigTemplate_cdc9619df8ec0570b691dfeef0689e97 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_status_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Voulez-vous supprimer ce statut? Cette action est irréversible');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <div class=\"row justify-content-center mb-5\">
        <button class=\"btn btn-delete col-lg-1 col-md-1 col-sm-2 mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "admin/status/deleteStatus.html.twig";
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
        return new Source("", "admin/status/deleteStatus.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/status/deleteStatus.html.twig");
    }
}
