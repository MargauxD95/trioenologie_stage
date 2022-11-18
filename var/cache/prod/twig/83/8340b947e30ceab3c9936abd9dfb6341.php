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

/* editor/picture/form_editPicture.html.twig */
class __TwigTemplate_41eb8fae023a8eaa5bb23bec07e24a28 extends Template
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
        echo "<section class=\"mt-3 text-center\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-4 mt-2 mb-2\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 5), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6 mt-2 mb-2\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "altText", [], "any", false, false, false, 9), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-4 mt-2 mb-2\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "height", [], "any", false, false, false, 13), 'row');
        echo "</div>
        <div class=\"col-4 mt-2 mb-2\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "width", [], "any", false, false, false, 14), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6 rFi mt-2 mb-2\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "legend", [], "any", false, false, false, 18), 'row');
        echo "</div>
    </div>

    <br>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_pictures");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 25
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Mettre à jour")) : ("Mettre à jour")), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "editor/picture/form_editPicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  84 => 25,  80 => 24,  71 => 18,  64 => 14,  60 => 13,  53 => 9,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/picture/form_editPicture.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/editor/picture/form_editPicture.html.twig");
    }
}
