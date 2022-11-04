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

/* editor/gallery/formGallery.html.twig */
class __TwigTemplate_59bb4dd7afe74b7d4d6c6b026ab7e244 extends Template
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

    <div class=\"row justify-content-center text-center rFb mt-2 mb-2\">
        <div class=\"col-4\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imgTitle", [], "any", false, false, false, 5), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb mt-2 mb-2\">
        <div class=\"col-6\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imgDesc", [], "any", false, false, false, 9), 'row');
        echo "</div>
    </div>
 
    <div class=\"row justify-content-center text-center rFb mt-2 mb-2\">
        <div class=\"col-3 mb-2 mt-2\">            
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pictures", [], "any", false, false, false, 14), 'row');
        echo "            
        </div>           
        <div class=\"col-3 mb-2 mt-2\">            
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "savedPictures", [], "any", false, false, false, 17), 'row');
        echo "            
        </div>  
    </div>

    <div class=\"row justify-content-center rFb mt-2 mb-2\">
        <div class=\"col-4 mb-2 mt-2\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "endAt", [], "any", false, false, false, 23), 'row');
        echo "
        </div>
    </div>

    ";
        // line 28
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", [0 => "_route"], "method", false, false, false, 28) == "editor_gallery_edit")) {
            echo "       
       
        <div class=\"container\" id=\"illustrations\">
            <h2 class=\"mb-3 rF rFb\">Image actuelle :</h2>
            <section class=\"row \">
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "pictures", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 34
                echo "                <div class=\"surroundPics my-1\">
                    <div class=\"pics\">
                        <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 36))), "html", null, true);
                echo "\" height=\"160px\"> 
                        <a class=\"btn ms-2 btn-reset\"  href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_gallery_unlinkPicture", ["gallery_id" => twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 37), "id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" >Détacher</a>
                    </div>
                </div>        
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </section> 
        </div>
    ";
        }
        // line 43
        echo "     
    
    <br>

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_gallery");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>

";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "editor/gallery/formGallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  130 => 49,  126 => 48,  119 => 43,  114 => 41,  104 => 37,  100 => 36,  96 => 34,  92 => 33,  83 => 28,  76 => 23,  67 => 17,  61 => 14,  53 => 9,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/gallery/formGallery.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/editor/gallery/formGallery.html.twig");
    }
}
