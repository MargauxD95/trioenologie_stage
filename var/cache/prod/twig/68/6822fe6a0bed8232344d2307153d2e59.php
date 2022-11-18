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

/* registration/register.html.twig */
class __TwigTemplate_a31f46d197d009b913dfa0a31b235787 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 7
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<section >
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">     
        <div class=\"card shadow-2-strong\" style=\"border-radius: 1rem;\">
          <div class=\"card-body p-5 text-center\" id=\"signIn\">

            <img src=\"/assets/imagesTrioenologie/trioenologie-trans5.png\" alt=\"Verre de vin de couleur noir et  avec typographie Trioenologie au dessus\" class=\"mb-2 mt-3\" width=\"130\" height=\"130\"> 

            <h1 class=\"sP mb-4 mt-3\">S'inscire</h3>

        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "

            <div class=\"form-outline mb-4\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 24), 'row');
        echo "
            </div>

            <div class=\"form-outline mb-4\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 28), 'row', ["label" => "Password"]);
        echo "
            </div>         

            <div class=\"form-outline mb-4\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 32), 'row');
        echo " 
            </div>         

            <button type=\"submit\" class=\"btn btn-lg btn-return mb-3 col-6\">Créer un compte</button>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "

            <hr class=\"my-4\">

            <h2 class=\"sP mb-4\">Déjà membre?</h2>
            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"btn btn-lg btn-return mb-3 col-6\">Se connecter</a>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  113 => 36,  106 => 32,  99 => 28,  92 => 24,  86 => 21,  72 => 9,  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/registration/register.html.twig");
    }
}
