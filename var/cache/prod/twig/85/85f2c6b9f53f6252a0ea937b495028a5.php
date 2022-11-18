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

/* admin/picture/formPictureOLD.html.twig */
class __TwigTemplate_b9961c9b8f2462492dfbe81a6a859a1e extends Template
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
        <div class=\"col-4\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 5), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">

        <div class=\"col-6\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "altText", [], "any", false, false, false, 10), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pictureFile", [], "any", false, false, false, 14), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-4\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "height", [], "any", false, false, false, 18), 'row');
        echo "</div>
        <div class=\"col-4\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "width", [], "any", false, false, false, 19), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb\">
        <div class=\"col-6 rFi\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "legend", [], "any", false, false, false, 23), 'row');
        echo "</div>
    </div>

    ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "admin_picture_edit")) {
            echo "       
        <div class=\"container\" id=\"illustrations\">
            <h2 class=\"mb-3 rFb\">Image</h2>
            <section class=\"row\">
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "pictures", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 31
                echo "                <div class=\"surroundPics my-1\">
                    <div class=\"pics\">
                        <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 33))), "html", null, true);
                echo "\" height=\"200px\">
                    </div>
                </div>        
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </section> 
        </div>
    ";
        }
        // line 39
        echo " 
    
    <br>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_index");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "admin/picture/formPictureOLD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 47,  126 => 45,  122 => 44,  115 => 39,  110 => 37,  100 => 33,  96 => 31,  92 => 30,  85 => 26,  79 => 23,  72 => 19,  68 => 18,  61 => 14,  54 => 10,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/picture/formPictureOLD.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/picture/formPictureOLD.html.twig");
    }
}
