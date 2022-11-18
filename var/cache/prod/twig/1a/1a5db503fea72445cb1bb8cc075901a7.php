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

/* admin/status/editStatus.html.twig */
class __TwigTemplate_bce002e2d4d28d3a7d5618ead209eb23 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/status/editStatus.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier le statut";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
    <h1 class=\"text-center mt-4 rF\">Modifier le statut: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>

    ";
        // line 9
        echo twig_include($this->env, $context, "admin/status/formStatus.html.twig", ["button_label" => "Mettre à jour"]);
        echo "

    <br>

    ";
        // line 13
        echo twig_include($this->env, $context, "admin/status/deleteStatus.html.twig");
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "admin/status/editStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  66 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/status/editStatus.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/status/editStatus.html.twig");
    }
}
