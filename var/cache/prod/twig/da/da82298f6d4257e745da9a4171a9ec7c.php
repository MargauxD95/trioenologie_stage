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

/* reset_password/email.html.twig */
class __TwigTemplate_d35f7641af50e70ef4adfd9795b3564a extends Template
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
        echo "<h1>Hi!</h1>

<p>To reset your password, please visit the following link</p>

<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => twig_get_attribute($this->env, $this->source, ($context["resetToken"] ?? null), "token", [], "any", false, false, false, 5)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => twig_get_attribute($this->env, $this->source, ($context["resetToken"] ?? null), "token", [], "any", false, false, false, 5)]), "html", null, true);
        echo "</a>

<p>This link will expire in ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageData", [], "any", false, false, false, 7), "ResetPasswordBundle"), "html", null, true);
        echo ".</p>

<p>Cheers!</p>
";
    }

    public function getTemplateName()
    {
        return "reset_password/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/email.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/reset_password/email.html.twig");
    }
}
