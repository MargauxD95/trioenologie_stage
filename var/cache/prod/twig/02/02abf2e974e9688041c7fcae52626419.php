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
class __TwigTemplate_f81f471adadfd84d64baaa7a4cbfea8b extends Template
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
    <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2\"><i class=\"bi bi-facebook\"></i></a></li>      
  </ul>
    ";
        // line 10
        echo "</footer>";
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
        return array (  55 => 10,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/partials/footer/footer.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie_stage\\templates\\main\\partials\\footer\\footer.html.twig");
    }
}
