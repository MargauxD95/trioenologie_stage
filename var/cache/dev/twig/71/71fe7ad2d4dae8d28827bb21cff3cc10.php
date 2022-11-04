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
class __TwigTemplate_0763429ce225b6a3a66a7d2bf715a37c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/carousels/carouselHome.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/carousels/carouselHome.html.twig"));

        // line 1
        echo "
<div class=\"row\">
  <div class=\"col\">

    <div class=\"col\" > 
        <div id=\"carouselHome\" class=\"carousel slide carousel-fade mx-auto\" data-bs-ride=\"carousel\">
          <div class=\"carousel-inner\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carousels"]) || array_key_exists("carousels", $context) ? $context["carousels"] : (function () { throw new RuntimeError('Variable "carousels" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 9
            echo "                 ";
            if ((twig_get_attribute($this->env, $this->source, $context["carousel"], "page", [], "any", false, false, false, 9) == "home")) {
                echo "  ";
                // line 10
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["carousel"], "CarouselPictures", [], "any", false, false, false, 10));
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
                    // line 11
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 11) == 0)) {
                        echo " ";
                        // line 12
                        echo "                          <div class=\"carousel-item active\">
                            <img src=\"";
                        // line 13
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["picture"], "picture", [], "any", false, false, false, 13), "pictureFile", [], "any", false, false, false, 13))), "html", null, true);
                        echo "\" class=\"d-block w-100 carouselHome\" alt=\"...\" >
                          </div>
                          ";
                    } else {
                        // line 15
                        echo "                    
                          <div class=\"carousel-item\">
                            <img src=\"";
                        // line 17
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["picture"], "picture", [], "any", false, false, false, 17), "pictureFile", [], "any", false, false, false, 17))), "html", null, true);
                        echo "\" class=\"d-block w-100 carouselHome\" alt=\"...\" >
                          </div>
                        ";
                    }
                    // line 20
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
                // line 21
                echo "                ";
            }
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "          </div>
          <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Précédent</span>
          </button>
          <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Suivant</span>
          </button>
        </div>
      </div> 
  
  
    </div>

  </div>
</div>
<div class=\"row mt-5\">
    ";
        // line 42
        echo "</div>




";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  144 => 42,  124 => 23,  118 => 22,  115 => 21,  101 => 20,  95 => 17,  91 => 15,  85 => 13,  82 => 12,  78 => 11,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"row\">
  <div class=\"col\">

    <div class=\"col\" > 
        <div id=\"carouselHome\" class=\"carousel slide carousel-fade mx-auto\" data-bs-ride=\"carousel\">
          <div class=\"carousel-inner\">
            {% for carousel in carousels %}
                 {% if carousel.page == \"home\" %}  {# on ne traite que le carousel pour lequel pare=home #}
                    {% for picture in carousel.CarouselPictures %}
                        {% if loop.index0 == 0 %} {# si c'est la première image de la boucle ajoute active dans class  #}
                          <div class=\"carousel-item active\">
                            <img src=\"{{ asset('/uploads/pictures/'~ picture.picture.pictureFile) }}\" class=\"d-block w-100 carouselHome\" alt=\"...\" >
                          </div>
                          {% else %}                    
                          <div class=\"carousel-item\">
                            <img src=\"{{ asset('/uploads/pictures/'~ picture.picture.pictureFile) }}\" class=\"d-block w-100 carouselHome\" alt=\"...\" >
                          </div>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endfor %}
          </div>
          <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Précédent</span>
          </button>
          <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Suivant</span>
          </button>
        </div>
      </div> 
  
  
    </div>

  </div>
</div>
<div class=\"row mt-5\">
    {#<p class=\"text-center fst-italic\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima optio reiciendis magni ea similique illum quibusdam cumque numquam magnam quasi iste, ullam repellendus laudantium error?</p>#}
</div>




", "main/partials/carousels/carouselHome.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/partials/carousels/carouselHome.html.twig");
    }
}
