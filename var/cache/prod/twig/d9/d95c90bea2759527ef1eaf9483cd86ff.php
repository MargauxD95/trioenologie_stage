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

/* main/partials/carousels/carouselHome.html.twig */
class __TwigTemplate_b41c2a9d10f9f55af754727c2b4f8823 extends Template
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
        <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade mx-auto\" data-bs-ride=\"carousel\">
          <div class=\"carousel-inner\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carousels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 5
            echo "                 ";
            if ((twig_get_attribute($this->env, $this->source, $context["carousel"], "page", [], "any", false, false, false, 5) == "home")) {
                echo "  ";
                // line 6
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "CarouselPictures", [], "any", false, false, false, 6));
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
                    // line 7
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 7) == 0)) {
                        echo " ";
                        // line 8
                        echo "                          <div class=\"carousel-item active\">
                            <img src=\"";
                        // line 9
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["picture"], "picture", [], "any", false, false, false, 9), "pictureFile", [], "any", false, false, false, 9))), "html", null, true);
                        echo "\" class=\"d-block w-100 carouselHome\" alt=\"...\" >
                          </div>
                          ";
                    } else {
                        // line 11
                        echo "                    
                          <div class=\"carousel-item\">
                            <img src=\"";
                        // line 13
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["picture"], "picture", [], "any", false, false, false, 13), "pictureFile", [], "any", false, false, false, 13))), "html", null, true);
                        echo "\" class=\"d-block w-100 carouselHome\" alt=\"...\" >
                          </div>
                        ";
                    }
                    // line 16
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
                // line 17
                echo "                ";
            }
            // line 18
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "          </div>
          <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Précédent</span>
          </button>
          <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Suivant</span>
          </button>





";
    }

    public function getTemplateName()
    {
        return "main/partials/carousels/carouselHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 19,  108 => 18,  105 => 17,  91 => 16,  85 => 13,  81 => 11,  75 => 9,  72 => 8,  68 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/partials/carousels/carouselHome.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/partials/carousels/carouselHome.html.twig");
    }
}
