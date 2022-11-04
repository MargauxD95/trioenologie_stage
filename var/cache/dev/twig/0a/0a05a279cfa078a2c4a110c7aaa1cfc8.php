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
class __TwigTemplate_17684bb26ee4d5ec101d89cd056ba906 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/carousel/formCarousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/carousel/formCarousel.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCarousel"]) || array_key_exists("formCarousel", $context) ? $context["formCarousel"] : (function () { throw new RuntimeError('Variable "formCarousel" does not exist.', 1, $this->source); })()), 'form_start');
        echo "


    <div class=\"row rFb\">
        <div class=\"col-2 mt-2 mx-auto\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCarousel"]) || array_key_exists("formCarousel", $context) ? $context["formCarousel"] : (function () { throw new RuntimeError('Variable "formCarousel" does not exist.', 5, $this->source); })()), "page", [], "any", false, false, false, 5), 'row');
        echo "</div>   
    </div>

    ";
        // line 9
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", [0 => "_route"], "method", false, false, false, 9) == "admin_carousel_edit")) {
            // line 10
            echo "
    <div class=\"row rFb\">
        <div class=\"col-10 mt-2 mb-4 border rounded pt-2 mx-auto\" id=\"illustrations\">
            <div class=\"mb-3\">
                <h2 class=\"mb-3 text-center rF rFb\">Images du Carousel n° ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</h2>
                <section class=\"row \">
                   ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 16, $this->source); })()), "carouselPictures", [], "any", false, false, false, 16));
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
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formCarousel"]) || array_key_exists("formCarousel", $context) ? $context["formCarousel"] : (function () { throw new RuntimeError('Variable "formCarousel" does not exist.', 21, $this->source); })()), "positions", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 21), [], "array", false, false, false, 21), "position", [], "any", false, false, false, 21), 'row');
                echo "
                        
                        </div>
                        <a class=\"btn ms-2 mb-3 btn-reset\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carousel_unlinkPicture", ["carousel_id" => twig_get_attribute($this->env, $this->source, (isset($context["carousel"]) || array_key_exists("carousel", $context) ? $context["carousel"] : (function () { throw new RuntimeError('Variable "carousel" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["picture"], "picture", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCarousel"]) || array_key_exists("formCarousel", $context) ? $context["formCarousel"] : (function () { throw new RuntimeError('Variable "formCarousel" does not exist.', 38, $this->source); })()), "pictures", [], "any", false, false, false, 38), 'row');
        echo "</div>
        <div class=\"col-5 mt-2\" id=\"previewUpload\"></div>
        </div>
        <div class=\"row justify-content-center rFb\">
            <div class=\"col-5 mt-2\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCarousel"]) || array_key_exists("formCarousel", $context) ? $context["formCarousel"] : (function () { throw new RuntimeError('Variable "formCarousel" does not exist.', 42, $this->source); })()), "savedPictures", [], "any", false, false, false, 42), 'row');
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
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 51, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>



    
";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCarousel"]) || array_key_exists("formCarousel", $context) ? $context["formCarousel"] : (function () { throw new RuntimeError('Variable "formCarousel" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  165 => 57,  156 => 51,  152 => 50,  141 => 42,  134 => 38,  128 => 34,  119 => 27,  102 => 24,  95 => 21,  90 => 18,  87 => 17,  70 => 16,  65 => 14,  59 => 10,  56 => 9,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(formCarousel) }}


    <div class=\"row rFb\">
        <div class=\"col-2 mt-2 mx-auto\">{{ form_row(formCarousel.page)}}</div>   
    </div>

    {# on vérifie si la route est 'edit' #}
    {% if app.request.attributes.get('_route') == 'admin_carousel_edit' %}

    <div class=\"row rFb\">
        <div class=\"col-10 mt-2 mb-4 border rounded pt-2 mx-auto\" id=\"illustrations\">
            <div class=\"mb-3\">
                <h2 class=\"mb-3 text-center rF rFb\">Images du Carousel n° {{carousel.id}}</h2>
                <section class=\"row \">
                   {% for picture in carousel.carouselPictures %}
                    <div class=\"pics col text-center\">
                        <img class=\"shadow-sm p-3 bg-body rounded mb-2\" src=\"{{ asset('/uploads/pictures/'~ picture.picture.pictureFile) }}\" height=\"150px\"><br>
                        <div class=\"mb-2\">
                        {# Il faudra ajouter un filtre twig ici pour afficher les images dans l'ordre croissant de position #}
                        {{form_row(formCarousel.positions[loop.index0].position)}}
                        
                        </div>
                        <a class=\"btn ms-2 mb-3 btn-reset\" href=\"{{ path('admin_carousel_unlinkPicture', {carousel_id: carousel.id ,id: picture.picture.id}) }}\" >Détacher</a>
                    </div>
                   {% endfor %}
                    
                </section>
            </div>
        </div>    
    </div>
    
    {% endif %}
    


    <div class=\"row justify-content-center rFb\">
        <div class=\"col-5 mt-2 \">{{ form_row(formCarousel.pictures)}}</div>
        <div class=\"col-5 mt-2\" id=\"previewUpload\"></div>
        </div>
        <div class=\"row justify-content-center rFb\">
            <div class=\"col-5 mt-2\">{{ form_row(formCarousel.savedPictures)}}</div>
            <div class=\"col-5 mt-2\" id=\"previewSaved\"></div>
        </div>
    
    </div>
    

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_carousel_index') }}\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">{{ button_label|default('Valider') }}</button>
    </div>



    
{{ form_end(formCarousel) }}
", "admin/carousel/formCarousel.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/carousel/formCarousel.html.twig");
    }
}
