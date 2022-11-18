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

/* admin/occasion/formOccasion.html.twig */
class __TwigTemplate_e9b9e81d943000e3f24749ed91a52f69 extends Template
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

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 5), 'row');
        echo "</div>
</div>

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-6\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 9), 'row');
        echo "</div>
</div>

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 13), 'row');
        echo "</div>
    <div class=\"col-4\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 14), 'row');
        echo "</div>
</div>


<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-6\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 19), 'row');
        echo "</div>
</div>  
    
        

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minParts", [], "any", false, false, false, 25), 'row');
        echo "</div>
    <div class=\"col-4\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "maxParts", [], "any", false, false, false, 26), 'row');
        echo "</div>   
</div>


<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pictures", [], "any", false, false, false, 31), 'row');
        echo "</div>
    <div class=\"col-4\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "savedPictures", [], "any", false, false, false, 32), 'row');
        echo "</div>   
</div>    

    ";
        // line 36
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "attributes", [], "any", false, false, false, 36), "get", [0 => "_route"], "method", false, false, false, 36) == "admin_occasion_edit")) {
            echo "       
       
        <div id=\"illustrations\">
            <h2 class=\"mb-3 rFb\">Photos de l'évènement</h2>
            <section class=\"row \">
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "pictures", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 42
                echo "                <div class=\"surroundPics my-1\">
                    <div class=\"pics\">
                        <img class=\"shadow-sm p-3 mb-5 bg-body rounded\" src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 44))), "html", null, true);
                echo "\" height=\"130px\"> 
                        <a class=\"btn btn-outline-warning ms-2\"  href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_unlinkPicture", ["occasion_id" => twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "id", [], "any", false, false, false, 45), "id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">Détacher</a>
                    </div>
                </div>        
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </section> 
        </div>
    ";
        }
        // line 51
        echo " 

    <br>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_index");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 57
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>
    
";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "admin/occasion/formOccasion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  150 => 57,  146 => 56,  139 => 51,  134 => 49,  124 => 45,  120 => 44,  116 => 42,  112 => 41,  103 => 36,  97 => 32,  93 => 31,  85 => 26,  81 => 25,  72 => 19,  64 => 14,  60 => 13,  53 => 9,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/occasion/formOccasion.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/occasion/formOccasion.html.twig");
    }
}
