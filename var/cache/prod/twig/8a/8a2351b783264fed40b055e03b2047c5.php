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
class __TwigTemplate_97769af8db6c6406edc3cf32bb461dbf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/pages/programme/calendrierUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Calendrier des évènements de l'association Trioeonologie";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.1.0/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.1.0/main.min.css\">
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  177 => 100,  173 => 99,  168 => 96,  143 => 74,  124 => 57,  96 => 32,  76 => 14,  74 => 13,  71 => 12,  67 => 11,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/pages/programme/calendrierUser.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/pages/programme/calendrierUser.html.twig");
    }
}
