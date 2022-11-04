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

/* main/pages/contact.html.twig */
class __TwigTemplate_a4b5616f6e20cf73c76b47741f943fc8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contactez nous";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container shadow\" id=\"contactBg\">

    <h1 class=\"text-center pt-2 mb-3 sP\">Association Trioenologie</h1>  
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "      
    <div class=\"contact\">
    <h2>Contactez-nous</h2>
        <div class=\"row justify-content-center text-center fst-italic\">        
            <div class=\"col-6\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 11), 'row');
        echo "</div>
        </div>

        <div class=\"row justify-content-center text-center fst-italic\">        
            <div class=\"col-6\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subject", [], "any", false, false, false, 15), 'row');
        echo "</div>        
        </div>

        <div class=\"row justify-content-center text-center fst-italic\">
            <div class=\"col-6\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 19), 'row');
        echo "</div>        
        </div>
    
        <div class=\"row justify-content-center pb-4\">
            <button class=\"btn btn-contact col-lg-3 col-sm-auto\">";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Envoyer")) : ("Envoyer")), "html", null, true);
        echo "</button>   
        </div>
    </div>
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    <div class=\"row justify-content-center\">    
        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-lg btn-return shadow col-lg-2 col-md-2 mt-5 mb-5\">Retour à l'accueil</a>
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "main/pages/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  97 => 26,  91 => 23,  84 => 19,  77 => 15,  70 => 11,  63 => 7,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/pages/contact.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/pages/contact.html.twig");
    }
}
