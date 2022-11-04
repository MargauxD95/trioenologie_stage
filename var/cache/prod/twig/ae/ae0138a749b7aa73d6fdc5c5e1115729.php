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

/* admin/carousel/formCarousel.html.twig */
class __TwigTemplate_499fc437d6e79f40bef54ff954fe40ef extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCarousel"] ?? null), 'form_start');
        echo "


    <div class=\"row rFb\">
        <div class=\"col-2 mt-2 mx-auto\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formCarousel"] ?? null), "page", [], "any", false, false, false, 5), 'row');
        echo "</div>   
    </div>

    ";
        // line 9
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", [0 => "_route"], "method", false, false, false, 9) == "admin_carousel_edit")) {
            // line 10
            echo "
    <div class=\"row rFb\">
        <div class=\"col-10 mt-2 mb-4 border rounded pt-2 mx-auto\" id=\"illustrations\">
            <div class=\"mb-3\">
                <h2 class=\"mb-3 text-center rF rFb\">Images du Carousel n° ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</h2>
                <section class=\"row \">
                   ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "carouselPictures", [], "any", false, false, false, 16));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 17
                echo "                    <div class=\"pics col text-center\">
                        <img class=\"shadow-sm p-3 bg-body rounded mb-2\" src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["picture"], "picture", [], "any", false, false, false, 18), "pictureFile", [], "any", false, false, false, 18))), "html", null, true);
                echo "\" height=\"150px\"><br>
                        <div class=\"mb-2\">
                        ";
                // line 21
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["formCarousel"] ?? null), "positions", [], "any", false, false, false, 21)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 21)] ?? null) : null), "position", [], "any", false, false, false, 21), 'row');
                echo "
                        
                        </div>
                        <a class=\"btn ms-2 mb-3 btn-reset\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_unlinkPicture", ["carousel_id" => twig_get_attribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, false, 24), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["picture"], "picture", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\" >Détacher</a>
                    </div>
                   ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    
                </section>
            </div>
        </div>    
    </div>
    
    ";
        }
        // line 34
        echo "    


    <div class=\"row justify-content-center rFb\">
        <div class=\"col-5 mt-2 \">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formCarousel"] ?? null), "pictures", [], "any", false, false, false, 38), 'row');
        echo "</div>
        <div class=\"col-5 mt-2\" id=\"previewUpload\"></div>
        </div>
        <div class=\"row justify-content-center rFb\">
            <div class=\"col-5 mt-2\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formCarousel"] ?? null), "savedPictures", [], "any", false, false, false, 42), 'row');
        echo "</div>
            <div class=\"col-5 mt-2\" id=\"previewSaved\"></div>
        </div>
    
    </div>
    

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_index");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 51
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>



    
";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCarousel"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/carousel/formCarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 57,  150 => 51,  146 => 50,  135 => 42,  128 => 38,  122 => 34,  113 => 27,  96 => 24,  89 => 21,  84 => 18,  81 => 17,  64 => 16,  59 => 14,  53 => 10,  50 => 9,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/carousel/formCarousel.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/carousel/formCarousel.html.twig");
    }
}
