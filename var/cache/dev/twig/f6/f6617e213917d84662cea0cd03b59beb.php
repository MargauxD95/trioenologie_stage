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

/* main/pages/asso.html.twig */
class __TwigTemplate_a6d7ced407979d7f4af435f046934535 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/asso.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/asso.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/asso.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Trieonologie, association d'oenologie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container\">
    <h1 class=\"text-center sP mt-3 mb-3\">L'association</h1>

    <section>

        <img src=\"/assets/imagesTrioenologie/banniere.jpg\" alt=\"\" id=\"banniere\">

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, delectus suscipit a vitae harum atque quo magnam sunt inventore aliquid numquam beatae, quam omnis vero veniam ratione. Quibusdam, illum vitae.
    Ratione inventore illum labore odit architecto distinctio ullam soluta omnis quas quae iste modi voluptatem excepturi earum necessitatibus similique sit doloribus, eum, sapiente quod sequi eligendi reprehenderit autem animi! At?
    Adipisci dicta labore, ab voluptatum voluptate necessitatibus aperiam sint quia dolores suscipit praesentium nostrum harum quos minima incidunt ad cumque tenetur molestiae, molestias voluptatem. Alias ducimus nesciunt voluptatum cum quidem.</p>

    <br>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vitae eveniet alias architecto. Quam quidem consectetur nihil quos aliquid! Accusamus ratione possimus ducimus ipsa tempora sed eius fuga quas laudantium?</p>
    
    </section>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/pages/asso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Trieonologie, association d'oenologie{% endblock %}

{% block body %}

<div class=\"container\">
    <h1 class=\"text-center sP mt-3 mb-3\">L'association</h1>

    <section>

        <img src=\"/assets/imagesTrioenologie/banniere.jpg\" alt=\"\" id=\"banniere\">

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, delectus suscipit a vitae harum atque quo magnam sunt inventore aliquid numquam beatae, quam omnis vero veniam ratione. Quibusdam, illum vitae.
    Ratione inventore illum labore odit architecto distinctio ullam soluta omnis quas quae iste modi voluptatem excepturi earum necessitatibus similique sit doloribus, eum, sapiente quod sequi eligendi reprehenderit autem animi! At?
    Adipisci dicta labore, ab voluptatum voluptate necessitatibus aperiam sint quia dolores suscipit praesentium nostrum harum quos minima incidunt ad cumque tenetur molestiae, molestias voluptatem. Alias ducimus nesciunt voluptatum cum quidem.</p>

    <br>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vitae eveniet alias architecto. Quam quidem consectetur nihil quos aliquid! Accusamus ratione possimus ducimus ipsa tempora sed eius fuga quas laudantium?</p>
    
    </section>
</div>

{% endblock %}", "main/pages/asso.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\main\\pages\\asso.html.twig");
    }
}
