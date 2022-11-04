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

/* admin/picture/formPicture.html.twig */
class __TwigTemplate_7059cdbfeee83fc9af091fe2c5f34e47 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/picture/formPicture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/picture/formPicture.html.twig"));

        // line 1
        echo "<section class=\"mt-3 col-8  mx-auto\">
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
    
    ";
        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "attributes", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5) == "admin_picture_newOne")) {
            // line 6
            echo "    <div class=\"row rFb justify-content-center\">
        <div class=\"col-8 mt-4  \">";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 7, $this->source); })()), "pictureFile", [], "any", false, false, false, 7), 'row');
            echo "</div>
        <div class=\"col-8 mt-2\" id=\"previewUpload\"></div>
        <section class=\"row justify-content-center \">
        <div class=\"col border rounded mb-3\">   
            <div class=\"col\">";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'row');
            echo "</div>
            <div class=\"col mb-3\">
                <div class=\"col mb-1 \">";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 13, $this->source); })()), "altText", [], "any", false, false, false, 13), 'label');
            echo "</div>      
                ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 14, $this->source); })()), "altText", [], "any", false, false, false, 14), 'widget');
            echo "
                <div class=\"fs-6 rFi \">";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 15, $this->source); })()), "altText", [], "any", false, false, false, 15), 'help');
            echo "</div>
            </div>
            <div class=\"col rF\">";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 17, $this->source); })()), "legend", [], "any", false, false, false, 17), 'row');
            echo "</div>
         </div>
    </section>
    </div>
    ";
        }
        // line 22
        echo "    
    
    
    ";
        // line 26
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "admin_picture_newMulti")) {
            // line 27
            echo "    <div class=\"row rFb justify-content-center\">
        <div class=\"col-8 mt-4  \">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 28, $this->source); })()), "pictureFile", [], "any", false, false, false, 28), 'row');
            echo "</div>
        <div class=\"col-8 mt-2\" id=\"previewUpload\"></div>
    </div>
    ";
        }
        // line 32
        echo "    

     ";
        // line 35
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "attributes", [], "any", false, false, false, 35), "get", [0 => "_route"], "method", false, false, false, 35) == "admin_picture_edit")) {
            // line 36
            echo "
    <section class=\"row mb-3 justify-content-center bg-light shadow-sm border rounded \">
        <div class=\"col-4 mt-3 mb-3 text-center \">
            <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 39, $this->source); })()), "pictureFile", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" height=\"180px\">
        </div>
        <div class=\"col mt-3 mb-3 rounded fs-6 mx-auto\">
            <table class=\"table table-borderless \">
            <tbody>
            <tr>
                <th class=\"col-3 rFi text-start \">Fichier :</th>
                <td class=\"rF text-left \">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 46, $this->source); })()), "pictureFile", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-start\">Titre :</th>
                <td class=\"rF text-left\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
            </tr>           
            <tr>
                <th class=\"col-3 rFi text-start\">Largeur :</th>
                <td class=\"rF text-left\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 54, $this->source); })()), "width", [], "any", false, false, false, 54), "html", null, true);
            echo "px</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-start\">Hauteur :</th>
                <td class=\"rF text-left\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 58, $this->source); })()), "height", [], "any", false, false, false, 58), "html", null, true);
            echo "px</td>
            </tr>
            </tbody>
            </table>
        </div>
    </section> 
   
        
    <section class=\"row justify-content-center \">
        <div class=\"col border rounded mb-3\">   
            <div class=\"col\">";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), 'row');
            echo "</div>
            <div class=\"col mb-3\">
                <div class=\"col mb-1 \">";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 70, $this->source); })()), "altText", [], "any", false, false, false, 70), 'label');
            echo "</div>      
                ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 71, $this->source); })()), "altText", [], "any", false, false, false, 71), 'widget');
            echo "
                <div class=\"fs-6 rFi \">";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 72, $this->source); })()), "altText", [], "any", false, false, false, 72), 'help');
            echo "</div>
            </div>
            <div class=\"col rF\">";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 74, $this->source); })()), "legend", [], "any", false, false, false, 74), 'row');
            echo "</div>
         </div>
    </section>
    
    ";
        }
        // line 79
        echo "
    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_index");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 82
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 82, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>
    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 84, $this->source); })()), 'rest');
        echo "
";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new RuntimeError('Variable "formPicture" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/picture/formPicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 85,  203 => 84,  198 => 82,  194 => 81,  190 => 79,  182 => 74,  177 => 72,  173 => 71,  169 => 70,  164 => 68,  151 => 58,  144 => 54,  137 => 50,  130 => 46,  120 => 39,  115 => 36,  112 => 35,  108 => 32,  101 => 28,  98 => 27,  95 => 26,  90 => 22,  82 => 17,  77 => 15,  73 => 14,  69 => 13,  64 => 11,  57 => 7,  54 => 6,  51 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mt-3 col-8  mx-auto\">
{{ form_start(formPicture) }}
    
    {# si la route est 'newOne' #}
    {% if app.request.attributes.get('_route') == 'admin_picture_newOne' %}
    <div class=\"row rFb justify-content-center\">
        <div class=\"col-8 mt-4  \">{{ form_row(formPicture.pictureFile)}}</div>
        <div class=\"col-8 mt-2\" id=\"previewUpload\"></div>
        <section class=\"row justify-content-center \">
        <div class=\"col border rounded mb-3\">   
            <div class=\"col\">{{ form_row(formPicture.name) }}</div>
            <div class=\"col mb-3\">
                <div class=\"col mb-1 \">{{form_label(formPicture.altText)}}</div>      
                {{ form_widget(formPicture.altText) }}
                <div class=\"fs-6 rFi \">{{form_help(formPicture.altText)}}</div>
            </div>
            <div class=\"col rF\">{{ form_row(formPicture.legend) }}</div>
         </div>
    </section>
    </div>
    {% endif %}
    
    
    
    {# si la route est 'newMulti' #}
    {% if app.request.attributes.get('_route') == 'admin_picture_newMulti' %}
    <div class=\"row rFb justify-content-center\">
        <div class=\"col-8 mt-4  \">{{ form_row(formPicture.pictureFile)}}</div>
        <div class=\"col-8 mt-2\" id=\"previewUpload\"></div>
    </div>
    {% endif %}
    

     {# On vérifie si la route est 'edit' #}
    {% if app.request.attributes.get('_route') == 'admin_picture_edit' %}

    <section class=\"row mb-3 justify-content-center bg-light shadow-sm border rounded \">
        <div class=\"col-4 mt-3 mb-3 text-center \">
            <img class=\"shadow-sm p-3 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"180px\">
        </div>
        <div class=\"col mt-3 mb-3 rounded fs-6 mx-auto\">
            <table class=\"table table-borderless \">
            <tbody>
            <tr>
                <th class=\"col-3 rFi text-start \">Fichier :</th>
                <td class=\"rF text-left \">{{ picture.pictureFile }}</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-start\">Titre :</th>
                <td class=\"rF text-left\">{{ picture.title }}</td>
            </tr>           
            <tr>
                <th class=\"col-3 rFi text-start\">Largeur :</th>
                <td class=\"rF text-left\">{{ picture.width }}px</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-start\">Hauteur :</th>
                <td class=\"rF text-left\">{{ picture.height }}px</td>
            </tr>
            </tbody>
            </table>
        </div>
    </section> 
   
        
    <section class=\"row justify-content-center \">
        <div class=\"col border rounded mb-3\">   
            <div class=\"col\">{{ form_row(formPicture.name) }}</div>
            <div class=\"col mb-3\">
                <div class=\"col mb-1 \">{{form_label(formPicture.altText)}}</div>      
                {{ form_widget(formPicture.altText) }}
                <div class=\"fs-6 rFi \">{{form_help(formPicture.altText)}}</div>
            </div>
            <div class=\"col rF\">{{ form_row(formPicture.legend) }}</div>
         </div>
    </section>
    
    {% endif %}

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_picture_index') }}\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">{{ button_label|default('Valider') }}</button>
    </div>
    {{form_rest(formPicture)}}
{{ form_end(formPicture) }}
</section>", "admin/picture/formPicture.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie_stage\\templates\\admin\\picture\\formPicture.html.twig");
    }
}
