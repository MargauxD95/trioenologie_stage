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
class __TwigTemplate_415c985dec0dba64e6cd51a41723e081 extends Template
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
    }

    public function getTemplateName()
    {
        return "main/partials/dialogBox.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/partials/dialogBox.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/main/partials/dialogBox.html.twig");
    }
}
