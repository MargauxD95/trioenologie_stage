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
class __TwigTemplate_d9a4becfef369a031587fc35a0bd30c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/carousels/carouselArticle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/carousels/carouselArticle.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 12
            echo "                 ";
            if ((twig_get_attribute($this->env, $this->source, $context["carousel"], "page", [], "any", false, false, false, 12) == "home")) {
                echo "  ";
                // line 13
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "pictures", [], "any", false, false, false, 13));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  121 => 25,  118 => 24,  104 => 23,  98 => 20,  94 => 18,  88 => 16,  85 => 15,  81 => 14,  63 => 13,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"row\">
  <div class=\"col\">

    <div class=\"col\" > 



        <div id=\"carouselArticle\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
          <div class=\"carousel-inner\">
            {% for carousel in carousels %}
                 {% if carousel.page == \"home\" %}  {# on ne traite que le carousel pour lequel pare=home #}
                    {% for picture in article.pictures %}
                        {% if loop.index0 == 0 %} {# si c'est la première image de la boucle ajoute active dans class  #}
                          <div class=\"carousel-item active\">
                            <img src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" class=\"d-block \" alt=\"...\" >
                          </div>
                          {% else %}                    
                          <div class=\"carousel-item\">
                            <img src=\"{{ asset('/uploads/pictures/'~ picture.pictureFile) }}\" class=\"d-block \" alt=\"...\" >
                          </div>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endfor %}3
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





", "main/partials/carousels/carouselArticle.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\main\\partials\\carousels\\carouselArticle.html.twig");
    }
}
