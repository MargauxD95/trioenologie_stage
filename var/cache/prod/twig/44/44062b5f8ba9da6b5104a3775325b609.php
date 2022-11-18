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

/* admin/article/formArticle.html.twig */
class __TwigTemplate_ac6b729f10e322150988471e9e0399c2 extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formArticle"] ?? null), 'form_start');
        echo "

    <div class=\"row justify-content-center text-center rFb\">
    
        <div class=\"col-6 mt-2\">            
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "title", [], "any", false, false, false, 7), 'row');
        echo "            
        </div>
        <div class=\"col-10 mt-2\">            
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "intro", [], "any", false, false, false, 10), 'row');
        echo "            
        </div>        
        <div class=\"col-10 mt-2\">            
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "content", [], "any", false, false, false, 13), 'row');
        echo "            
        </div>
        <div class=\"col-7 mt-2\">            
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "pictures", [], "any", false, false, false, 16), 'row');
        echo "            
        </div>           
        <div class=\"col-7 mt-2\">            
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "savedPictures", [], "any", false, false, false, 19), 'row');
        echo "            
        </div>         
        <div class=\"col-6 mt-2\">            
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "author", [], "any", false, false, false, 22), 'row');
        echo "            
        </div>

    ";
        // line 26
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "admin_article_edit")) {
            echo "              
    <div class=\"container\" id=\"illustrations\">
        <h2 class=\"mb-3 rF rFb\">Images</h2>
        <section class=\"row \">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "pictures", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 31
                echo "            <div class=\"surroundPics my-1\">
                <div class=\"pics\">
                    <img class=\"shadow-sm p-3 mb-3 bg-body rounded\" src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 33))), "html", null, true);
                echo "\" height=\"165px\"> 
                    <a class=\"btn ms-2 btn-reset\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_unlinkPicture", ["article_id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 34), "id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 34)]), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_index");
        echo "\" class=\"btn btn-return col-2 me-2\">Retour</a>
        <button class=\"btn btn-submitForm col-2 ms-2\">";
        // line 44
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>

";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formArticle"] ?? null), 'form_end');
        echo "
</section>

";
    }

    public function getTemplateName()
    {
        return "admin/article/formArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  128 => 44,  124 => 43,  119 => 40,  114 => 38,  104 => 34,  100 => 33,  96 => 31,  92 => 30,  84 => 26,  78 => 22,  72 => 19,  66 => 16,  60 => 13,  54 => 10,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/article/formArticle.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/article/formArticle.html.twig");
    }
}
