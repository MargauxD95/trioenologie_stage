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
class __TwigTemplate_a40162f05857d1ac486c337635103579 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/occasion/formOccasion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/occasion/formOccasion.html.twig"));

        // line 1
        echo "<section class=\"mt-3 text-center\">
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'row');
        echo "</div>
</div>

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-6\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), 'row');
        echo "</div>
</div>

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "startDate", [], "any", false, false, false, 13), 'row');
        echo "</div>
    <div class=\"col-4\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "endDate", [], "any", false, false, false, 14), 'row');
        echo "</div>
</div>


<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-6\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "category", [], "any", false, false, false, 19), 'row');
        echo "</div>
</div>  
    
        

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "minParts", [], "any", false, false, false, 25), 'row');
        echo "</div>
    <div class=\"col-4\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "maxParts", [], "any", false, false, false, 26), 'row');
        echo "</div>   
</div>


<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "pictures", [], "any", false, false, false, 31), 'row');
        echo "</div>
    <div class=\"col-4\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "savedPictures", [], "any", false, false, false, 32), 'row');
        echo "</div>   
</div>    

    ";
        // line 36
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "attributes", [], "any", false, false, false, 36), "get", [0 => "_route"], "method", false, false, false, 36) == "admin_occasion_edit")) {
            echo "       
       
        <div id=\"illustrations\">
            <h2 class=\"mb-3 rFb\">Photos de l'évènement</h2>
            <section class=\"row \">
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 41, $this->source); })()), "pictures", [], "any", false, false, false, 41));
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_unlinkPicture", ["occasion_id" => twig_get_attribute($this->env, $this->source, (isset($context["occasion"]) || array_key_exists("occasion", $context) ? $context["occasion"] : (function () { throw new RuntimeError('Variable "occasion" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 45)]), "html", null, true);
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
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 57, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>
    
";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  162 => 60,  156 => 57,  152 => 56,  145 => 51,  140 => 49,  130 => 45,  126 => 44,  122 => 42,  118 => 41,  109 => 36,  103 => 32,  99 => 31,  91 => 26,  87 => 25,  78 => 19,  70 => 14,  66 => 13,  59 => 9,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mt-3 text-center\">
{{ form_start(form) }}

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">{{ form_row(form.title) }}</div>
</div>

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-6\">{{ form_row(form.description) }}</div>
</div>

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">{{ form_row(form.startDate) }}</div>
    <div class=\"col-4\">{{ form_row(form.endDate) }}</div>
</div>


<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-6\">{{ form_row(form.category) }}</div>
</div>  
    
        

<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">{{ form_row(form.minParts) }}</div>
    <div class=\"col-4\">{{ form_row(form.maxParts) }}</div>   
</div>


<div class=\"row justify-content-center mt-2 mb-2 rFb\">
    <div class=\"col-4\">{{ form_row(form.pictures) }}</div>
    <div class=\"col-4\">{{ form_row(form.savedPictures) }}</div>   
</div>    

    {# On vérifie si la route est 'edit' #}
    {% if app.request.attributes.get('_route') == 'admin_occasion_edit' %}       
       
        <div id=\"illustrations\">
            <h2 class=\"mb-3 rFb\">Photos de l'évènement</h2>
            <section class=\"row \">
                {% for picture in occasion.pictures %}
                <div class=\"surroundPics my-1\">
                    <div class=\"pics\">
                        <img class=\"shadow-sm p-3 mb-5 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"130px\"> 
                        <a class=\"btn btn-outline-warning ms-2\"  href=\"{{ path('admin_occasion_unlinkPicture', {occasion_id: occasion.id ,id: picture.id}) }}\">Détacher</a>
                    </div>
                </div>        
                {% endfor %}
            </section> 
        </div>
    {% endif %} 

    <br>

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('admin_occasion_index') }}\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">{{ button_label|default('Valider') }}</button>
    </div>
    
{{ form_end(form) }}
</section>", "admin/occasion/formOccasion.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\admin\\occasion\\formOccasion.html.twig");
    }
}
