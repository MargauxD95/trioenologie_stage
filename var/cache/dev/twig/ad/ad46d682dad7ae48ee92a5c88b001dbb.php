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

/* main/pages/programme/calendrierUser.html.twig */
class __TwigTemplate_52c46c215967ace14eeebc844aeed4e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/programme/calendrierUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/pages/programme/calendrierUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/programme/calendrierUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Calendrier des évènements de l'association Trioeonologie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "
";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "    
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.js\"></script>
    <script scr=\"js/lang.js\"></script>

    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar-holder');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                locale: 'fr',
                timeZone: 'Europe/Paris',
                editable: true,
                eventSources: [
                    {
                        url: \"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fc_load_events");
            echo "\",
                        method: \"POST\",
                        extraParams: {
                            filters: JSON.stringify({})
                        },
                        failure: () => {
                            // alert(\"There was an error while fetching FullCalendar!\");
                        },
                    },
                ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ], // https://fullcalendar.io/docs/plugin-index

            });
            calendar.render();

            
        });
    </script>

";
        } else {
            // line 57
            echo "
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.js\"></script>

    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar-holder');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                locale: 'fr',
                timeZone: 'Europe/Paris',
                editable: false,
                eventSources: [
                    {
                        url: \"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fc_load_events");
            echo "\",
                        method: \"POST\",
                        extraParams: {
                            filters: JSON.stringify({})
                        },
                        failure: () => {
                            // alert(\"There was an error while fetching FullCalendar!\");
                        },
                    },
                ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ], 
                
            });
            calendar.render();
        });
    </script>
";
        }
        // line 96
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "<div id=\"calendar\">
    <h1 class=\"text-center mt-3 mb-3\">Calendrier des évènements</h1>

        <div class=\"row justify-content-center\">
        
            <h2 class=\"colorsCalendar colorsCalendarRose col-lg-2 col-sm-auto text-center mt-3 mb-3\">Visite </h2> 
            <h2 class=\"colorsCalendar colorsCalendarSaumon col-lg-2 col-sm-auto text-center mt-3 mb-3\">Cours </h2>
            <h2 class=\"colorsCalendar colorsCalendarBordeaux col-lg-2 col-sm-auto text-center mt-3 mb-3\">Dégustation</h2>
        
        </div>
        <div id=\"calendar-holder\"></div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/pages/programme/calendrierUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 100,  221 => 99,  210 => 96,  185 => 74,  166 => 57,  138 => 32,  118 => 14,  116 => 13,  113 => 12,  103 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Calendrier des évènements de l'association Trioeonologie{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">
{% endblock %}

{% block javascripts %}

{% if is_granted('ROLE_ADMIN') %}
    
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.js\"></script>
    <script scr=\"js/lang.js\"></script>

    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar-holder');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                locale: 'fr',
                timeZone: 'Europe/Paris',
                editable: true,
                eventSources: [
                    {
                        url: \"{{ path('fc_load_events') }}\",
                        method: \"POST\",
                        extraParams: {
                            filters: JSON.stringify({})
                        },
                        failure: () => {
                            // alert(\"There was an error while fetching FullCalendar!\");
                        },
                    },
                ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ], // https://fullcalendar.io/docs/plugin-index

            });
            calendar.render();

            
        });
    </script>

{% else %}

    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.js\"></script>

    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar-holder');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                locale: 'fr',
                timeZone: 'Europe/Paris',
                editable: false,
                eventSources: [
                    {
                        url: \"{{ path('fc_load_events') }}\",
                        method: \"POST\",
                        extraParams: {
                            filters: JSON.stringify({})
                        },
                        failure: () => {
                            // alert(\"There was an error while fetching FullCalendar!\");
                        },
                    },
                ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ], 
                
            });
            calendar.render();
        });
    </script>
{% endif %}

{% endblock %}

{% block body %}
<div id=\"calendar\">
    <h1 class=\"text-center mt-3 mb-3\">Calendrier des évènements</h1>

        <div class=\"row justify-content-center\">
        
            <h2 class=\"colorsCalendar colorsCalendarRose col-lg-2 col-sm-auto text-center mt-3 mb-3\">Visite </h2> 
            <h2 class=\"colorsCalendar colorsCalendarSaumon col-lg-2 col-sm-auto text-center mt-3 mb-3\">Cours </h2>
            <h2 class=\"colorsCalendar colorsCalendarBordeaux col-lg-2 col-sm-auto text-center mt-3 mb-3\">Dégustation</h2>
        
        </div>
        <div id=\"calendar-holder\"></div>
</div>
{% endblock %}", "main/pages/programme/calendrierUser.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/pages/programme/calendrierUser.html.twig");
    }
}
