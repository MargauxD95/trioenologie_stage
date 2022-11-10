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
class __TwigTemplate_2d8f46f77a5fe6854dde2b49c8f2b59b extends Template
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
<html lang=\"fr-FR\">

    <head>

        <!-- Google tag (gtag.js) -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-22ZPMMWBG9\"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-22ZPMMWBG9');
        </script>

        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"TRIOENOLOGIE, Association d'oenologie: activités, cours, dégustations de vins, visites de domaines...\">


        <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 25
        echo "        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/favicon/apple-touch-icon.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"/favicon/site.webmanifest\">
        <link rel=\"mask-icon\" href=\"/favicon/safari-pinned-tab.svg\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        ";
        // line 33
        echo "
        ";
        // line 35
        echo "
        ";
        // line 37
        echo "
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz@0,6..96;1,6..96&family=Libre+Bodoni:ital@0;1&display=swap\" rel=\"stylesheet\">

        ";
        // line 43
        echo "
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300&display=swap\" rel=\"stylesheet\">

        ";
        // line 49
        echo "        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Square+Peg&display=swap\" rel=\"stylesheet\">

        ";
        // line 54
        echo "        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap\" rel=\"stylesheet\">

        ";
        // line 59
        echo "        <!-- CSS only BOOTSTRAP -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx\" crossorigin=\"anonymous\">
        ";
        // line 62
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\">
        <!-- CSS du dossier assets -->
        <link rel=\"stylesheet\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">


        ";
        // line 68
        echo "
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa\" crossorigin=\"anonymous\"></script>
        ";
        // line 72
        echo "        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
        

        ";
        // line 75
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 76
        echo "
    </head>

    <body>


        ";
        // line 82
        $this->loadTemplate("main/partials/nav.html.twig", "base.html.twig", 82)->display($context);
        // line 83
        echo "        ";
        $this->loadTemplate("main/partials/flashes.html.twig", "base.html.twig", 83)->display($context);
        // line 84
        echo "            
        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "        

        ";
        // line 89
        $this->loadTemplate("main/partials/footer/footer.html.twig", "base.html.twig", 89)->display($context);
        // line 90
        echo "

        

       
        ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "    </body>
</html>
";
    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenue sur le site de Trioenologie!";
    }

    // line 75
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "       
        
        ";
    }

    // line 95
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
        return array (  197 => 95,  188 => 85,  182 => 75,  175 => 22,  169 => 96,  167 => 95,  160 => 90,  158 => 89,  154 => 87,  152 => 85,  149 => 84,  146 => 83,  144 => 82,  136 => 76,  134 => 75,  129 => 72,  124 => 68,  118 => 64,  114 => 62,  110 => 59,  104 => 54,  98 => 49,  91 => 43,  84 => 37,  81 => 35,  78 => 33,  69 => 25,  64 => 22,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie_stage\\templates\\base.html.twig");
    }
}
