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
class __TwigTemplate_9b584817667164756010c55a3bd406db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gallery/formGallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gallery/formGallery.html.twig"));

        // line 1
        echo "<section class=\"mt-3 col-md-10  mx-auto\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGallery"]) || array_key_exists("formGallery", $context) ? $context["formGallery"] : (function () { throw new RuntimeError('Variable "formGallery" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
    <div class=\"row rFb\">
        <div class=\"col-10 mt-2 mx-auto\">";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGallery"]) || array_key_exists("formGallery", $context) ? $context["formGallery"] : (function () { throw new RuntimeError('Variable "formGallery" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'row');
        echo "</div>
        <div class=\"col-4 mt-2 mx-auto\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGallery"]) || array_key_exists("formGallery", $context) ? $context["formGallery"] : (function () { throw new RuntimeError('Variable "formGallery" does not exist.', 5, $this->source); })()), "isVisible", [], "any", false, false, false, 5), 'row');
        echo "</div>
        <div class=\"col-10 mt-2 mx-auto\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGallery"]) || array_key_exists("formGallery", $context) ? $context["formGallery"] : (function () { throw new RuntimeError('Variable "formGallery" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), 'row');
        echo "</div>
    </div>

    ";
        // line 10
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10) == "admin_gallery_edit")) {
            // line 11
            echo "    <div class=\"row rFb\">
            
        <div class=\"col-10 mt-2 mb-4 border rounded pt-2 mx-auto\" id=\"illustrations\">
            <div class=\"mb-3\">
                <h2 class=\"mb-3 rF rFb\">Images de la galerie n° ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "</h2>
                <section class=\"row \">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 17, $this->source); })()), "pictures", [], "any", false, false, false, 17));
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_gallery_unlinkPicture", ["gallery_id" => twig_get_attribute($this->env, $this->source, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 21)]), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGallery"]) || array_key_exists("formGallery", $context) ? $context["formGallery"] : (function () { throw new RuntimeError('Variable "formGallery" does not exist.', 35, $this->source); })()), "pictures", [], "any", false, false, false, 35), 'row');
        echo "</div>
            <div class=\"col-5 mt-2\" id=\"previewUpload\"></div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-5 mt-2\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGallery"]) || array_key_exists("formGallery", $context) ? $context["formGallery"] : (function () { throw new RuntimeError('Variable "formGallery" does not exist.', 39, $this->source); })()), "savedPictures", [], "any", false, false, false, 39), 'row');
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
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 48, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGallery"]) || array_key_exists("formGallery", $context) ? $context["formGallery"] : (function () { throw new RuntimeError('Variable "formGallery" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
</section>



   
    

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  143 => 51,  137 => 48,  133 => 47,  122 => 39,  115 => 35,  109 => 31,  101 => 25,  91 => 21,  87 => 20,  83 => 18,  79 => 17,  74 => 15,  68 => 11,  65 => 10,  59 => 6,  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mt-3 col-md-10  mx-auto\">
    {{ form_start(formGallery) }}
    <div class=\"row rFb\">
        <div class=\"col-10 mt-2 mx-auto\">{{ form_row(formGallery.name)}}</div>
        <div class=\"col-4 mt-2 mx-auto\">{{ form_row(formGallery.isVisible)}}</div>
        <div class=\"col-10 mt-2 mx-auto\">{{ form_row(formGallery.description)}}</div>
    </div>

    {# On vérifie si la route est 'edit' #}
    {% if app.request.attributes.get('_route') == 'admin_gallery_edit' %}
    <div class=\"row rFb\">
            
        <div class=\"col-10 mt-2 mb-4 border rounded pt-2 mx-auto\" id=\"illustrations\">
            <div class=\"mb-3\">
                <h2 class=\"mb-3 rF rFb\">Images de la galerie n° {{gallery.id}}</h2>
                <section class=\"row \">
                    {% for picture in gallery.pictures %}
                    
                    <div class=\"pics col text-center\">
                            <img class=\"shadow-sm p-3 mb-2 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"120px\"><br> 
                            <a class=\"btn ms-2 mb-3 btn-reset\" href=\"{{ path('admin_gallery_unlinkPicture', {gallery_id: gallery.id ,id: picture.id}) }}\" >Détacher</a>
                    </div>
                            
                    {% endfor %}
                </section> 
            </div>
        </div>
            
    </div>
    {% endif %}



        <div class=\"row justify-content-center\">
            <div class=\"col-5 mt-2 \">{{ form_row(formGallery.pictures)}}</div>
            <div class=\"col-5 mt-2\" id=\"previewUpload\"></div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-5 mt-2\">{{ form_row(formGallery.savedPictures)}}</div>
            <div class=\"col-5 mt-2\" id=\"previewSaved\"></div>
        </div>
    
    </div>
    

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_gallery_index') }}\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">{{ button_label|default('Valider') }}</button>
    </div>

    {{ form_end(formGallery) }}
</section>



   
    

", "admin/gallery/formGallery.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\gallery\\formGallery.html.twig");
    }
}
