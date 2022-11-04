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

/* admin/picture/form_editPicture.html.twig */
class __TwigTemplate_51dce9d5e71384aed0737720a43e4494 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/picture/form_editPicture.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier image n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
    <h1 class=\"text-center mt-3 rF\">Modifier les détails de l'image n°";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo " : </h1>

    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "altText", [], "any", false, false, false, 12), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-4\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "height", [], "any", false, false, false, 16), 'row');
        echo "</div>
        <div class=\"col-4\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "width", [], "any", false, false, false, 17), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6 rFi\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "legend", [], "any", false, false, false, 21), 'row');
        echo "</div>
    </div>

    <br>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_index");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Mettre à jour")) : ("Mettre à jour")), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/picture/form_editPicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  104 => 28,  100 => 27,  91 => 21,  84 => 17,  80 => 16,  73 => 12,  67 => 9,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/picture/form_editPicture.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/picture/form_editPicture.html.twig");
    }
}
