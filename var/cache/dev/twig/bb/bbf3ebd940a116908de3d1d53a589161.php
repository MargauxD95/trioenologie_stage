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

/* main/partials/dialogBox.html.twig */
class __TwigTemplate_e26a5808d7f85efc9c99756d128fed73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/dialogBox.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/partials/dialogBox.html.twig"));

        // line 1
        echo "<div class=\"overlay row\" id=\"overlay\" hidden>
    <div class=\"dialog-box col shadow p-3 mb-5 bg-body rounded text-center\">
      <div class=\"col\" id=\"btnClose\">
        <button onclick=\"closeDialogBox()\" class=\"close btn text-white\">&#10006;</button>
      </div>
      <h2>Confirmation</h2>
      <p>Cette action est irréversible !<br>Voulez-vous continuer ?</p>
      <button onclick=\"isConfirmed(true)\" class='btn btn-primary'>Oui</button>
      <button onclick=\"isConfirmed(false)\" class='btn btn-secondary'>Non</button>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/partials/dialogBox.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"overlay row\" id=\"overlay\" hidden>
    <div class=\"dialog-box col shadow p-3 mb-5 bg-body rounded text-center\">
      <div class=\"col\" id=\"btnClose\">
        <button onclick=\"closeDialogBox()\" class=\"close btn text-white\">&#10006;</button>
      </div>
      <h2>Confirmation</h2>
      <p>Cette action est irréversible !<br>Voulez-vous continuer ?</p>
      <button onclick=\"isConfirmed(true)\" class='btn btn-primary'>Oui</button>
      <button onclick=\"isConfirmed(false)\" class='btn btn-secondary'>Non</button>
    </div>
</div>", "main/partials/dialogBox.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\main\\partials\\dialogBox.html.twig");
    }
}
