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
class __TwigTemplate_fd4842644a54eaff00cf3da91c890838 extends Template
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
        echo "<footer class=\"d-flex flex-wrap justify-content-center align-items-center py-3 border-top\" style=\"height:10%\" id=\"footerNav\">    
  <ul class=\"nav col-md-4\">
    <li class=\"nav-item\"><a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link px-2\">Accueil</a></li>
    <li class=\"nav-item\"><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\" class=\"nav-link px-2\">Mentions-légales</a></li>
    <li class=\"nav-item\"><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link px-2\">Contact</a></li>
    <li class=\"nav-item\"><a href=\"https://www.facebook.com/profile.php?id=100083153171115\" class=\"nav-link px-2\"><i class=\"bi bi-facebook\"></i></a></li>      
  </ul>
    ";
        // line 10
        echo "</footer>";
        
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
        return array (  61 => 10,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"d-flex flex-wrap justify-content-center align-items-center py-3 border-top\" style=\"height:10%\" id=\"footerNav\">    
  <ul class=\"nav col-md-4\">
    <li class=\"nav-item\"><a href=\"{{ path('home') }}\" class=\"nav-link px-2\">Accueil</a></li>
    <li class=\"nav-item\"><a href=\"{{ path('mentions') }}\" class=\"nav-link px-2\">Mentions-légales</a></li>
    <li class=\"nav-item\"><a href=\"{{ path('contact') }}\" class=\"nav-link px-2\">Contact</a></li>
    <li class=\"nav-item\"><a href=\"https://www.facebook.com/profile.php?id=100083153171115\" class=\"nav-link px-2\"><i class=\"bi bi-facebook\"></i></a></li>      
  </ul>
    {# <hr>
    <p class=\"col-md-4 mb-0\" id=\"footerBrand\">&copy; Trioenologie - 2022 </p> #}
</footer>", "main/partials/footer/footer.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie_stage\\templates\\main\\partials\\footer\\footer.html.twig");
    }
}
