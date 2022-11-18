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

/* main/pages/programme/showEvent.html.twig */
class __TwigTemplate_698542f3629932aee916ff98e9357596 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/programme/showEvent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Evènements";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
    ";
        // line 8
        echo "
        <section class=\"row justify-content-center col-lg-12 col-md-12\">

                <div class=\"col lg-5 col-md-7 col-sm-6 shadow text-center mt-4 mb-3 ms-3 me-3\" id=\"eventShow\">

                <h1 class=\"sP mt-3 mb-3\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>    

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "pictures", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 16
            echo "                    <div class=\"surroundPics my-1 col-sm-auto\">
                        <div class=\"pics\">
                            <img class=\"shadow-sm p-3 mb-3 bg-body rounded\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 18))), "html", null, true);
            echo "\" height=\"350px\" alt\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "altText", [], "any", false, false, false, 18), "html", null, true);
            echo "\"> 
                        </div>
                    </div>        
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    <span class=\"rFb mb-2\">Détails de l'évènement</span> 
                    <p class=\"mt-2 mb-3 rF\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                    <div>
                        <span class=\"rFb\">Début de l'évènement</span>
                        <p class=\"mt-2 mb-3\"> ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "startDate", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true);
        echo "</p>
                        <span class=\"rFb\">Fin de l'évènement</span> 
                        <p class=\"mt-2 mb-3\">";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "endDate", [], "any", false, false, false, 28), "d/m/Y H:i"), "html", null, true);
        echo "</p>          
                    </div>
                    <div id=\"eventParts\">
                        <span class=\"rFb\">Nombre de participants</span>
                        <p class=\"mt-2 mb-3\"><span class=\"rFb\">Minimum: </span>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "minParts", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                        <p class=\"mt-2 mb-3\"><span class=\"rFb\">Maximum: </span>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "maxParts", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>          
                    </div>                
                        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-contact col-3 mb-3\">Je participe</a>
                </div>
            


        </section>

        <br><br>

    ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 45
            echo "
    <div class=\"row justify-content-center\">

    <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_index");
            echo "\" class=\"btn btn-return col-lg-2 col-md-2 col-sm-2 ms-1 me-1\">Retour à la liste</a>

    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-update col-lg-2 col-md-2 col-sm-2 ms-1 me-1\">Modifier l'évènement</a>

    <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendrier");
            echo "\" class=\"btn btn-return col-lg-2 col-md-2 col-sm-2 ms-1 me-1\">Retour au calendrier</a>

    </div>
    <br>

    <form method=\"post\" action=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_occasion_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Êtes-vous sûr.e de vouloir supprimer cet évènement?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["occasion"] ?? null), "id", [], "any", false, false, false, 58))), "html", null, true);
            echo "\">
        <div class=\"row justify-content-center mb-5\">
            <button class=\"btn btn-delete mb-3 col-lg-1 col-md-1 col-sm-2 \"><i class=\"bi bi-trash3-fill\"></i></button>
        </div>
    </form>

    
    ";
        } else {
            // line 66
            echo "    
    <a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendrier");
            echo "\">Retour au calendrier</a>

    ";
        }
        // line 70
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "main/pages/programme/showEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 70,  178 => 67,  175 => 66,  164 => 58,  160 => 57,  152 => 52,  147 => 50,  142 => 48,  137 => 45,  135 => 44,  123 => 35,  118 => 33,  114 => 32,  107 => 28,  102 => 26,  96 => 23,  93 => 22,  81 => 18,  77 => 16,  73 => 15,  68 => 13,  61 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/pages/programme/showEvent.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/pages/programme/showEvent.html.twig");
    }
}
