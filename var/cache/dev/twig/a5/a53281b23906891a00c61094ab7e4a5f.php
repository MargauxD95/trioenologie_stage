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
class __TwigTemplate_5442111190fd1548c7a1f548ed4de72d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/footer/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/footer/footer.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  62 => 12,  58 => 11,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<footer id=\"footerNav\" class=\"shadow\" style=\"height:10%\">
    <div class=\"row\">    
        <div class=\"col-4 text-center\">
        <a href=\"{{ path('home') }}\"><img src=\"/assets/imagesTrioenologie/lettrage-nav.png\" class=\"mt-3 mx-auto imgFooter\" alt=\"Bannière trioenologie, 7 verres de vin de différentes couleurs.\"></a>
        </div>


        <div class=\"col-4 text-center\">    
            <ul class=\"text-center mt-2\">
                <a href=\"{{ path('mentions') }}\">Mentions légales</a>
                <a href=\"{{ path('contact') }}\">Contact</a>
                <p class=\"text-center\" id=\"footerBrand\"> ©️ Trioenologie - 2022</p>   
            </ul>
        </div>

        <div class=\"col-4 text-center\">
            <ul class=\"mt-4\">
                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            </ul>
        </div>
    </div></footer>", "main/partials/footer/footer.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\main\\partials\\footer\\footer.html.twig");
    }
}
