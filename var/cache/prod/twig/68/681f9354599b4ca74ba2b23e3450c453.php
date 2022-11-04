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

/* main/pages/actus.html.twig */
class __TwigTemplate_b12bd8708a54df2ca5e6d981abc46db4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/actus.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Actualités de l'association Trioenologie";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <div class=\"container\">
  <h1 class=\"text-center sP mt-4\">Nos dernières actualités</h1>
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "    <section class=\"articles shadow\">
      <div class=\"article\">
    
        <div class=\"left\">
          ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "pictures", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 14
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["picture"], "pictureFile", [], "any", false, false, false, 14))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "altText", [], "any", false, false, false, 14), "html", null, true);
                echo "\">
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div> <!--Fin de la div class left-->

        <div class=\"right\">
          <p class=\"date\">Publié le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 19), "d-m-Y"), "html", null, true);
            echo "</p>
          <h2>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h1>
          <p class=\"intro\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "intro", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
          <p class=\"content\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
          ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 23)) {
                // line 24
                echo "            <p class=\"author\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>   
          ";
            } else {
                // line 26
                echo "            <p class=\"author\">©️ Trioenologie</p>
          ";
            }
            // line 28
            echo "        </div> <!--Fin de la div class right-->

      </div> <!--Fin de la div class articles-->

    </section> <!--Fin de la section class articles-->
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    <div class=\"row justify-content-center\">    
      <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 mt-5 mb-5\">Retour à l'accueil</a>
    </div>

    <div id=\"scroll_to_top\">
      <a href=\"#top\"><img src=\"/assets/imagesTrioenologie/f-haut.png\" alt=\"Retourner en haut de la page\" /></a>
    </div>    

  </div> <!--Fin de la div container-->
";
    }

    public function getTemplateName()
    {
        return "main/pages/actus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  131 => 34,  120 => 28,  116 => 26,  110 => 24,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  87 => 16,  76 => 14,  72 => 13,  66 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/pages/actus.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/pages/actus.html.twig");
    }
}
