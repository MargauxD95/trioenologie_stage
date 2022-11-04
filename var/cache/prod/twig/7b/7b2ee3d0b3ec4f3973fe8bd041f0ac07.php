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

/* admin/carousel/deleteCarousel.html.twig */
class __TwigTemplate_dad824fdac919069c77611da6aee70cc extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Etes-vous sûr(e) de vouloir supprimer ce Carousel');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <button class=\"btn btn-delete mb-3\"><i class=\"bi bi-trash3-fill\"></i></button>
</form>
";
    }

    public function getTemplateName()
    {
        return "admin/carousel/deleteCarousel.html.twig";
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
        return new Source("", "admin/carousel/deleteCarousel.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/carousel/deleteCarousel.html.twig");
    }
}
