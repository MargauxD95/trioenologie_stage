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

/* main/partials/carousels/carouselArticle.html.twig */
class __TwigTemplate_3cf74f7cb672c8f74cc94e161d779e1c extends Template
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
        echo "
<div class=\"row\">
  <div class=\"col\">

    <div class=\"col\" > 



        <div id=\"carouselArticle\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
          <div class=\"carousel-inner\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carousels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 12
            echo "                 ";
            if ((twig_get_attribute($this->env, $this->source, $context["carousel"], "page", [], "any", false, false, false, 12) == "home")) {
                echo "  ";
                // line 13
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "pictures", [], "any", false, false, false, 13));
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
                    // line 14
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 14) == 0)) {
                        echo " ";
                        // line 15
                        echo "                          <div class=\"carousel-item active\">
                            <img src=\"";
                        // line 16
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 16))), "html", null, true);
                        echo "\" class=\"d-block \" alt=\"...\" >
                          </div>
                          ";
                    } else {
                        // line 18
                        echo "                    
                          <div class=\"carousel-item\">
                            <img src=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 20))), "html", null, true);
                        echo "\" class=\"d-block \" alt=\"...\" >
                          </div>
                        ";
                    }
                    // line 23
                    echo "                    ";
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
                // line 24
                echo "                ";
            }
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "3
          </div>
          <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
          </button>
          <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
          </button>
        </div>
      </div> 
  
  
    </div>

  </div>
</div>





";
    }

    public function getTemplateName()
    {
        return "main/partials/carousels/carouselArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  112 => 24,  98 => 23,  92 => 20,  88 => 18,  82 => 16,  79 => 15,  75 => 14,  57 => 13,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/partials/carousels/carouselArticle.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/partials/carousels/carouselArticle.html.twig");
    }
}
