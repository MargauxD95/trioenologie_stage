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

/* base.html.twig */
class __TwigTemplate_4fc32d9f57abe2f5d941a65ad1432fbc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"TRIOENOLOGIE, Association d'oenologie: activités, cours, dégustations de vins, visites de domaines...\">


        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 13
        echo "        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/favicon/apple-touch-icon.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"/favicon/site.webmanifest\">
        <link rel=\"mask-icon\" href=\"/favicon/safari-pinned-tab.svg\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        ";
        // line 21
        echo "
        ";
        // line 23
        echo "
        ";
        // line 25
        echo "
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz@0,6..96;1,6..96&family=Libre+Bodoni:ital@0;1&display=swap\" rel=\"stylesheet\">

        ";
        // line 31
        echo "
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300&display=swap\" rel=\"stylesheet\">

        ";
        // line 37
        echo "        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Square+Peg&display=swap\" rel=\"stylesheet\">

        ";
        // line 42
        echo "        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap\" rel=\"stylesheet\">

        ";
        // line 47
        echo "        <!-- CSS only BOOTSTRAP -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx\" crossorigin=\"anonymous\">
        ";
        // line 50
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\">
        <!-- CSS du dossier assets -->
        <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">


        ";
        // line 56
        echo "
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa\" crossorigin=\"anonymous\"></script>
        ";
        // line 60
        echo "        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
        

        ";
        // line 63
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 64
        echo "
    </head>
    <body>


        ";
        // line 69
        $this->loadTemplate("main/partials/nav.html.twig", "base.html.twig", 69)->display($context);
        // line 70
        echo "        ";
        $this->loadTemplate("main/partials/flashes.html.twig", "base.html.twig", 70)->display($context);
        // line 71
        echo "            
        ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        

        ";
        // line 76
        $this->loadTemplate("main/partials/footer/footer.html.twig", "base.html.twig", 76)->display($context);
        // line 77
        echo "

        

       
        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenue sur le site de Trioenologie!";
    }

    // line 63
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "       
        
        ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 82,  175 => 72,  169 => 63,  162 => 10,  156 => 83,  154 => 82,  147 => 77,  145 => 76,  141 => 74,  139 => 72,  136 => 71,  133 => 70,  131 => 69,  124 => 64,  122 => 63,  117 => 60,  112 => 56,  106 => 52,  102 => 50,  98 => 47,  92 => 42,  86 => 37,  79 => 31,  72 => 25,  69 => 23,  66 => 21,  57 => 13,  52 => 10,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/base.html.twig");
    }
}
