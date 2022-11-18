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

/* main/partials/footer/footer.html.twig */
class __TwigTemplate_145c1815f40e32699528e1769f15c6f8 extends Template
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
<footer id=\"footerNav\" class=\"shadow\" style=\"height:10%\">
    <div class=\"row\">    
        <div class=\"col-4 text-center\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"/assets/imagesTrioenologie/lettrage-nav.png\" class=\"mt-3 mx-auto imgFooter\" alt=\"Bannière trioenologie, 7 verres de vin de différentes couleurs.\"></a>
        </div>


        <div class=\"col-4 text-center\">    
            <ul class=\"text-center mt-2\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">Mentions légales</a>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                <p class=\"text-center\" id=\"footerBrand\"> ©️ Trioenologie - 2022</p>   
            </ul>
        </div>

        <div class=\"col-4 text-center\">
            <ul class=\"mt-4\">
                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            </ul>
        </div>
    </div></footer>";
    }

    public function getTemplateName()
    {
        return "main/partials/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/partials/footer/footer.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/partials/footer/footer.html.twig");
    }
}
