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

/* editor/article/formArticle.html.twig */
class __TwigTemplate_689684de7ec7d4c6d7259a52a465725b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/article/formArticle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/article/formArticle.html.twig"));

        // line 1
        echo "<section class=\"mt-3 text-center\">
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 2, $this->source); })()), 'form_start');
        echo "

    <div class=\"row justify-content-center text-center rFb\">
    
        <div class=\"col-6 mt-2\">            
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), 'row');
        echo "            
        </div>
        <div class=\"col-10 mt-2\">            
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 10, $this->source); })()), "intro", [], "any", false, false, false, 10), 'row');
        echo "            
        </div>        
        <div class=\"col-10 mt-2\">            
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), 'row');
        echo "            
        </div>
        <div class=\"col-7 mt-2\">            
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 16, $this->source); })()), "pictures", [], "any", false, false, false, 16), 'row');
        echo "            
        </div>           
        <div class=\"col-7 mt-2\">            
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 19, $this->source); })()), "savedPictures", [], "any", false, false, false, 19), 'row');
        echo "            
        </div>         
        <div class=\"col-6 mt-2\">            
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 22, $this->source); })()), "author", [], "any", false, false, false, 22), 'row');
        echo "            
        </div>

    ";
        // line 26
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "editor_article_edit")) {
            echo "              
    <div class=\"container\" id=\"illustrations\">
        <h2 class=\"mb-3 rF rFb\">Images</h2>
        <section class=\"row \">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "pictures", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 31
                echo "            <div class=\"surroundPics my-1\">
                <div class=\"pics\">
                    <img class=\"shadow-sm p-3 mb-3 bg-body rounded\" src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 33))), "html", null, true);
                echo "\" height=\"165px\"> 
                    <a class=\"btn ms-2 btn-reset\"  href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_article_unlinkPicture", ["article_id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" >Détacher</a>
                </div>
            </div>        
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </section> 
    </div>
    ";
        }
        // line 40
        echo " 

    <div class=\"row justify-content-center\">
        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_articles");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 44
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>

";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "editor/article/formArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 47,  134 => 44,  130 => 43,  125 => 40,  120 => 38,  110 => 34,  106 => 33,  102 => 31,  98 => 30,  90 => 26,  84 => 22,  78 => 19,  72 => 16,  66 => 13,  60 => 10,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mt-3 text-center\">
{{ form_start(formArticle) }}

    <div class=\"row justify-content-center text-center rFb\">
    
        <div class=\"col-6 mt-2\">            
            {{ form_row(formArticle.title)}}            
        </div>
        <div class=\"col-10 mt-2\">            
            {{ form_row(formArticle.intro)}}            
        </div>        
        <div class=\"col-10 mt-2\">            
            {{ form_row(formArticle.content)}}            
        </div>
        <div class=\"col-7 mt-2\">            
            {{ form_row(formArticle.pictures)}}            
        </div>           
        <div class=\"col-7 mt-2\">            
            {{ form_row(formArticle.savedPictures)}}            
        </div>         
        <div class=\"col-6 mt-2\">            
            {{ form_row(formArticle.author)}}            
        </div>

    {# On vérifie si la route est 'edit' #}
    {% if app.request.attributes.get('_route') == 'editor_article_edit' %}              
    <div class=\"container\" id=\"illustrations\">
        <h2 class=\"mb-3 rF rFb\">Images</h2>
        <section class=\"row \">
            {% for picture in article.pictures %}
            <div class=\"surroundPics my-1\">
                <div class=\"pics\">
                    <img class=\"shadow-sm p-3 mb-3 bg-body rounded\" src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" height=\"165px\"> 
                    <a class=\"btn ms-2 btn-reset\"  href=\"{{ path('editor_article_unlinkPicture', {article_id: article.id ,id: picture.id}) }}\" >Détacher</a>
                </div>
            </div>        
            {% endfor %}
        </section> 
    </div>
    {% endif %} 

    <div class=\"row justify-content-center\">
        <a href=\"{{ path('editor_articles') }}\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">{{ button_label|default('Valider') }}</button>
    </div>

{{ form_end(formArticle) }}
</section>", "editor/article/formArticle.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie_stage\\templates\\editor\\article\\formArticle.html.twig");
    }
}
