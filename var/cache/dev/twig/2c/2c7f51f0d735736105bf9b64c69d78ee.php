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

/* main/partials/nav.html.twig */
class __TwigTemplate_c98d2d689674b3e45486663dedb7ba7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg shadow\">
    <div class=\"container-fluid\" id=\"container1\">
        <a class=\"navbar-brand\" id=\"brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"/assets/imagesTrioenologie/lettrage-nav.png\" alt=\"Logo de l'association Trioenologie qui représente un verre de vin de couleur rose aux contours blanc avec un smiley et la typographie de l'association à gauche du logo.\" class=\"imgNav\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\" >
           <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 \" id=\"ul1\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actus");
        echo "\">Actus</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asso");
        echo "\">L'asso</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown\" href=\"\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >Programme</a>
                <ul class=\"dropdown-menu\" >
                    <li><a class=\"dropdown-item\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Evènements</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendrier");
        echo "\">Calendrier</a></li>
                </ul>
                </li>                
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galeries");
        echo "\" tabindex=\"-1\" aria-disabled=\"false\">Galeries photo</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" tabindex=\"-1\" aria-disabled=\"false\">Contact</a>
                </li>
            </ul>

            ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            echo "        
            <div class=\"d-flex\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\" id=\"ulFin\">

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown\" href=\"\" id=\"navbarDropdownFin\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >        
                        ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 38
                echo "                            Mon compte
                            <img src=\"/assets/imagesTrioenologie/trioenologie-notxt2.png\" alt=\"\" class=\"imgUser\">
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
                // line 41
                echo "                            <img src=\"/assets/imagesTrioenologie/trioenologie-notxt3.png\" alt=\"\" class=\"imgUser\">
                            Mon compte
                        ";
            } else {
                // line 44
                echo "                            Mon compte
                            <img src=\"/assets/imagesTrioenologie/trioenologie-notxt4.png\" alt=\"\" class=\"imgUser\">
                        ";
            }
            // line 47
            echo "                        </a>

                        <ul class=\"dropdown-menu\" >
                            <li><a class=\"dropdown-item\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
            echo "\">Profil</a></li>

                        ";
            // line 52
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 53
                echo "                        
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"";
                // line 55
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
                echo "\">Administration</a></li>

                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
                // line 58
                echo "
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_dashboard");
                echo "\">Administration</a></li>

                        ";
            }
            // line 63
            echo "
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            
            ";
        } else {
            // line 73
            echo "                                
            <div class=\"d-flex menuDroite\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\" id=\"ulFin\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown\" href=\"\" id=\"navbarDropdownFin\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >
                        </a>
                        <li class=\"nav-item\">
                            <a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link text-white \">Connexion</a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"nav-link text-white \">Inscription</a>
                        </li>
                    </li>
                </ul>
            </div>

            ";
        }
        // line 90
        echo "           


        <div>

    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 90,  185 => 84,  178 => 80,  169 => 73,  158 => 65,  154 => 63,  148 => 60,  144 => 58,  138 => 55,  134 => 53,  132 => 52,  127 => 50,  122 => 47,  117 => 44,  112 => 41,  107 => 38,  105 => 37,  96 => 31,  89 => 27,  83 => 24,  76 => 20,  71 => 18,  63 => 13,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg shadow\">
    <div class=\"container-fluid\" id=\"container1\">
        <a class=\"navbar-brand\" id=\"brand\" href=\"{{ path('home') }}\"><img src=\"/assets/imagesTrioenologie/lettrage-nav.png\" alt=\"Logo de l'association Trioenologie qui représente un verre de vin de couleur rose aux contours blanc avec un smiley et la typographie de l'association à gauche du logo.\" class=\"imgNav\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\" >
           <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 \" id=\"ul1\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('actus') }}\">Actus</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('asso') }}\">L'asso</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown\" href=\"\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >Programme</a>
                <ul class=\"dropdown-menu\" >
                    <li><a class=\"dropdown-item\" href=\"{{ path('events') }}\">Evènements</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('calendrier') }}\">Calendrier</a></li>
                </ul>
                </li>                
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"{{ path('galeries') }}\" tabindex=\"-1\" aria-disabled=\"false\">Galeries photo</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"{{ path('contact') }}\" tabindex=\"-1\" aria-disabled=\"false\">Contact</a>
                </li>
            </ul>

            {% if app.user %}        
            <div class=\"d-flex\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\" id=\"ulFin\">

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown\" href=\"\" id=\"navbarDropdownFin\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >        
                        {% if is_granted('ROLE_ADMIN') %}
                            Mon compte
                            <img src=\"/assets/imagesTrioenologie/trioenologie-notxt2.png\" alt=\"\" class=\"imgUser\">
                        {% elseif is_granted('ROLE_EDITOR') %}
                            <img src=\"/assets/imagesTrioenologie/trioenologie-notxt3.png\" alt=\"\" class=\"imgUser\">
                            Mon compte
                        {% else %}
                            Mon compte
                            <img src=\"/assets/imagesTrioenologie/trioenologie-notxt4.png\" alt=\"\" class=\"imgUser\">
                        {% endif %}
                        </a>

                        <ul class=\"dropdown-menu\" >
                            <li><a class=\"dropdown-item\" href=\"{{ path('user_profile') }}\">Profil</a></li>

                        {% if is_granted('ROLE_ADMIN') %}
                        
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('admin_dashboard') }}\">Administration</a></li>

                        {% elseif is_granted('ROLE_EDITOR') %}

                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('editor_dashboard') }}\">Administration</a></li>

                        {% endif %}

                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Déconnexion</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            
            {% else %}
                                
            <div class=\"d-flex menuDroite\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\" id=\"ulFin\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown\" href=\"\" id=\"navbarDropdownFin\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >
                        </a>
                        <li class=\"nav-item\">
                            <a href=\"{{path('login')}}\" class=\"nav-link text-white \">Connexion</a>
                        </li>

                        <li class=\"nav-item\">
                            <a href=\"{{path('register')}}\" class=\"nav-link text-white \">Inscription</a>
                        </li>
                    </li>
                </ul>
            </div>

            {% endif %}           


        <div>

    </div>
</nav>
", "main/partials/nav.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\main\\partials\\nav.html.twig");
    }
}
