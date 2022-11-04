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

/* admin/gallery/formGallery.html.twig */
class __TwigTemplate_342e62fcdd04e5d5192e57822c5166ec extends Template
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
        echo "<section class=\"mt-3 col-md-10  mx-auto\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formGallery"] ?? null), 'form_start');
        echo "
    <div class=\"row rFb\">
        <div class=\"col-10 mt-2 mx-auto\">";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formGallery"] ?? null), "name", [], "any", false, false, false, 4), 'row');
        echo "</div>
        <div class=\"col-4 mt-2 mx-auto\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formGallery"] ?? null), "isVisible", [], "any", false, false, false, 5), 'row');
        echo "</div>
        <div class=\"col-10 mt-2 mx-auto\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formGallery"] ?? null), "description", [], "any", false, false, false, 6), 'row');
        echo "</div>
    </div>

    ";
        // line 10
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10) == "admin_gallery_edit")) {
            // line 11
            echo "    <div class=\"row rFb\">
            
        <div class=\"col-10 mt-2 mb-4 border rounded pt-2 mx-auto\" id=\"illustrations\">
            <div class=\"mb-3\">
                <h2 class=\"mb-3 rF rFb\">Images de la galerie n° ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "</h2>
                <section class=\"row \">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "pictures", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 18
                echo "                    
                    <div class=\"pics col text-center\">
                            <img class=\"shadow-sm p-3 mb-2 bg-body rounded\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 20))), "html", null, true);
                echo "\" height=\"120px\"><br> 
                            <a class=\"btn ms-2 mb-3 btn-reset\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_unlinkPicture", ["gallery_id" => twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "id", [], "any", false, false, false, 21), "id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\" >Détacher</a>
                    </div>
                            
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                </section> 
            </div>
        </div>
            
    </div>
    ";
        }
        // line 31
        echo "


        <div class=\"row justify-content-center\">
            <div class=\"col-5 mt-2 \">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formGallery"] ?? null), "pictures", [], "any", false, false, false, 35), 'row');
        echo "</div>
            <div class=\"col-5 mt-2\" id=\"previewUpload\"></div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-5 mt-2\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formGallery"] ?? null), "savedPictures", [], "any", false, false, false, 39), 'row');
        echo "</div>
            <div class=\"col-5 mt-2\" id=\"previewSaved\"></div>
        </div>
    
    </div>
    

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_index");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 48
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formGallery"] ?? null), 'form_end');
        echo "
</section>



   
    

";
    }

    public function getTemplateName()
    {
        return "admin/gallery/formGallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  131 => 48,  127 => 47,  116 => 39,  109 => 35,  103 => 31,  95 => 25,  85 => 21,  81 => 20,  77 => 18,  73 => 17,  68 => 15,  62 => 11,  59 => 10,  53 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/gallery/formGallery.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/gallery/formGallery.html.twig");
    }
}
