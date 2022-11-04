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
class __TwigTemplate_7671775bf5905d866ef62de9a16605df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/gallery/formGallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/gallery/formGallery.html.twig"));

        // line 1
        echo "<section class=\"mt-3 text-center\">
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "

    <div class=\"row justify-content-center text-center rFb mt-2 mb-2\">
        <div class=\"col-4\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "imgTitle", [], "any", false, false, false, 5), 'row');
        echo "</div>
    </div>

    <div class=\"row justify-content-center text-center rFb mt-2 mb-2\">
        <div class=\"col-6\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "imgDesc", [], "any", false, false, false, 9), 'row');
        echo "</div>
    </div>
 
    <div class=\"row justify-content-center text-center rFb mt-2 mb-2\">
        <div class=\"col-3 mb-2 mt-2\">            
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "pictures", [], "any", false, false, false, 14), 'row');
        echo "            
        </div>           
        <div class=\"col-3 mb-2 mt-2\">            
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "savedPictures", [], "any", false, false, false, 17), 'row');
        echo "            
        </div>  
    </div>

    <div class=\"row justify-content-center rFb mt-2 mb-2\">
        <div class=\"col-4 mb-2 mt-2\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "endAt", [], "any", false, false, false, 23), 'row');
        echo "
        </div>
    </div>

    ";
        // line 28
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", [0 => "_route"], "method", false, false, false, 28) == "editor_gallery_edit")) {
            echo "       
       
        <div class=\"container\" id=\"illustrations\">
            <h2 class=\"mb-3 rF rFb\">Image actuelle :</h2>
            <section class=\"row \">
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 33, $this->source); })()), "pictures", [], "any", false, false, false, 33));
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_gallery_unlinkPicture", ["gallery_id" => twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 37)]), "html", null, true);
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
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>

";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  142 => 52,  136 => 49,  132 => 48,  125 => 43,  120 => 41,  110 => 37,  106 => 36,  102 => 34,  98 => 33,  89 => 28,  82 => 23,  73 => 17,  67 => 14,  59 => 9,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mt-3 text-center\">
{{ form_start(form) }}

    <div class=\"row justify-content-center text-center rFb mt-2 mb-2\">
        <div class=\"col-4\">{{ form_row(form.imgTitle) }}</div>
    </div>

    <div class=\"row justify-content-center text-center rFb mt-2 mb-2\">
        <div class=\"col-6\">{{ form_row(form.imgDesc) }}</div>
    </div>
 
    <div class=\"row justify-content-center text-center rFb mt-2 mb-2\">
        <div class=\"col-3 mb-2 mt-2\">            
            {{ form_row(form.pictures)}}            
        </div>           
        <div class=\"col-3 mb-2 mt-2\">            
            {{ form_row(form.savedPictures)}}            
        </div>  
    </div>

    <div class=\"row justify-content-center rFb mt-2 mb-2\">
        <div class=\"col-4 mb-2 mt-2\">
            {{ form_row(form.endAt) }}
        </div>
    </div>

    {# On vérifie si la route est 'edit' #}
    {% if app.request.attributes.get('_route') == 'editor_gallery_edit' %}       
       
        <div class=\"container\" id=\"illustrations\">
            <h2 class=\"mb-3 rF rFb\">Image actuelle :</h2>
            <section class=\"row \">
                {% for picture in gallery.pictures %}
                <div class=\"surroundPics my-1\">
                    <div class=\"pics\">
                        <img class=\"shadow-sm p-3 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"160px\"> 
                        <a class=\"btn ms-2 btn-reset\"  href=\"{{ path('editor_gallery_unlinkPicture', {gallery_id: gallery.id ,id: picture.id}) }}\" >Détacher</a>
                    </div>
                </div>        
                {% endfor %}
            </section> 
        </div>
    {% endif %}     
    
    <br>

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('editor_gallery') }}\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">{{ button_label|default('Valider') }}</button>
    </div>

{{ form_end(form) }}
</section>", "editor/gallery/formGallery.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\editor\\gallery\\formGallery.html.twig");
    }
}
