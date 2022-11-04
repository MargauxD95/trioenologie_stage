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
class __TwigTemplate_b5fb5aa14c8b08bc9ae15ecfd1e65ea2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/asso.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Trieonologie, association d'oenologie";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<div class=\"container\">
    <h1 class=\"text-center sP mt-3 mb-3\">Qui sommes-nous ?</h1>

    <section>

        <img src=\"/assets/imagesTrioenologie/banniere.jpg\" alt=\"\" id=\"banniere\">

    <p class=\"rF text-center\">Trioenologie est une association créée en 2021. Notre objectif est d’offrir à nos membres la possibilité de découvrir le monde du vin de la vigne au verre.
    Nous proposons 10 cours par saison, de septembre à juin, généralement le dernier mardi de chaque mois.
    Ces cours sont ouverts aux non-adhérents dans la limite des places disponibles.
    Nos cours sont l’occasion de découvrir et de déguster des vins selon la thématique du jour. Chaque cours présentant entre 4 et 5 vins. Le tout dans une ambiance conviviale.
    Nous proposons aussi plusieurs fois par an la visite de domaines viticoles et/ou de salons du vin.
    En outre, Trioenologie étant une association de village, nous participons, un dimanche par mois à une
    animation festive sur le marché du village (vin chaud, sangria…).
</p>

    
    </section>
</div>

";
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
        return array (  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/pages/asso.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/pages/asso.html.twig");
    }
}
