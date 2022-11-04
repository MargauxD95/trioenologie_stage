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
class __TwigTemplate_8809ebcb4c84187916c297b108b7d19a extends Template
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
        echo "<section class=\"mt-3 col-8  mx-auto\">
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formPicture"] ?? null), 'form_start');
        echo "
    
    ";
        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 5), "attributes", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5) == "admin_picture_newOne")) {
            // line 6
            echo "    <div class=\"row rFb justify-content-center\">
        <div class=\"col-8 mt-4  \">";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "pictureFile", [], "any", false, false, false, 7), 'row');
            echo "</div>
        <div class=\"col-8 mt-2\" id=\"previewUpload\"></div>
        <section class=\"row justify-content-center \">
        <div class=\"col border rounded mb-3\">   
            <div class=\"col\">";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "name", [], "any", false, false, false, 11), 'row');
            echo "</div>
            <div class=\"col mb-3\">
                <div class=\"col mb-1 \">";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "altText", [], "any", false, false, false, 13), 'label');
            echo "</div>      
                ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "altText", [], "any", false, false, false, 14), 'widget');
            echo "
                <div class=\"fs-6 rFi \">";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "altText", [], "any", false, false, false, 15), 'help');
            echo "</div>
            </div>
            <div class=\"col rF\">";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "legend", [], "any", false, false, false, 17), 'row');
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "admin_picture_newMulti")) {
            // line 27
            echo "    <div class=\"row rFb justify-content-center\">
        <div class=\"col-8 mt-4  \">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "pictureFile", [], "any", false, false, false, 28), 'row');
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "attributes", [], "any", false, false, false, 35), "get", [0 => "_route"], "method", false, false, false, 35) == "admin_picture_edit")) {
            // line 36
            echo "
    <section class=\"row mb-3 justify-content-center bg-light shadow-sm border rounded \">
        <div class=\"col-4 mt-3 mb-3 text-center \">
            <img class=\"shadow-sm p-3 bg-body rounded\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "pictureFile", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" height=\"180px\">
        </div>
        <div class=\"col mt-3 mb-3 rounded fs-6 mx-auto\">
            <table class=\"table table-borderless \">
            <tbody>
            <tr>
                <th class=\"col-3 rFi text-start \">Fichier :</th>
                <td class=\"rF text-left \">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "pictureFile", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-start\">Titre :</th>
                <td class=\"rF text-left\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
            </tr>           
            <tr>
                <th class=\"col-3 rFi text-start\">Largeur :</th>
                <td class=\"rF text-left\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "width", [], "any", false, false, false, 54), "html", null, true);
            echo "px</td>
            </tr>
            <tr>
                <th class=\"col-3 rFi text-start\">Hauteur :</th>
                <td class=\"rF text-left\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["picture"] ?? null), "height", [], "any", false, false, false, 58), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "name", [], "any", false, false, false, 68), 'row');
            echo "</div>
            <div class=\"col mb-3\">
                <div class=\"col mb-1 \">";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "altText", [], "any", false, false, false, 70), 'label');
            echo "</div>      
                ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "altText", [], "any", false, false, false, 71), 'widget');
            echo "
                <div class=\"fs-6 rFi \">";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "altText", [], "any", false, false, false, 72), 'help');
            echo "</div>
            </div>
            <div class=\"col rF\">";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formPicture"] ?? null), "legend", [], "any", false, false, false, 74), 'row');
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
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
    </div>
    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPicture"] ?? null), 'rest');
        echo "
";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formPicture"] ?? null), 'form_end');
        echo "
</section>";
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
        return array (  201 => 85,  197 => 84,  192 => 82,  188 => 81,  184 => 79,  176 => 74,  171 => 72,  167 => 71,  163 => 70,  158 => 68,  145 => 58,  138 => 54,  131 => 50,  124 => 46,  114 => 39,  109 => 36,  106 => 35,  102 => 32,  95 => 28,  92 => 27,  89 => 26,  84 => 22,  76 => 17,  71 => 15,  67 => 14,  63 => 13,  58 => 11,  51 => 7,  48 => 6,  45 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/picture/formPicture.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/admin/picture/formPicture.html.twig");
    }
}
