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

/* security/login.html.twig */
class __TwigTemplate_d1d2ce00ace341116404ecd3b7b7e303 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<section >
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">     
        <div class=\"card shadow-2-strong\" style=\"border-radius: 1rem;\">
          <div class=\"card-body p-5 text-center\" id=\"signIn\">

            <img src=\"/assets/imagesTrioenologie/trioenologie-trans7.png\" alt=\"Verre de vin de couleur noir et  avec typographie Trioenologie au dessus\" class=\"mb-2 mt-3\" width=\"130\" height=\"130\"> 

            <h1 class=\"sP mb-5\">Connexion</h3>

            <form method=\"post\"> 

            <div class=\"form-outline mb-4\">
              <label class=\"form-label\" for=\"typeEmailX-2\">E-mail</label>
              <input type=\"email\" name=\"email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" id=\"typeEmailX-2\" class=\"form-control form-control-lg\" autocomplete=\"email\" required autofocus>
            </div>

            <div class=\"form-outline mb-4\">
              <label class=\"form-label\" for=\"typePasswordX-2\">Mot de passe</label>
              <input type=\"password\" name=\"password\" id=\"typePasswordX-2\" class=\"form-control form-control-lg mb-1\">
              <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password_request");
        echo "\">Mot de passe oublié ?</a>
            </div>

            <!-- Checkbox -->
            <div class=\"form-check d-flex justify-content-start mb-4\">
            <label>
                <input type=\"checkbox\" value=\"remember-me\">
                Se souvenir de moi            
            </label>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\"
            value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <button class=\"btn btn-return btn-lg btn-block mb-2 col-6\" type=\"submit\">Se connecter</button>
            </form>

            <hr class=\"my-4\">

            <h2 class=\"sP mb-3\">Pas encore de compte ?</h2>
            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" class=\"btn btn-lg btn-return col-6\">Inscrivez-vous</a>


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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  91 => 37,  76 => 25,  67 => 19,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/u390036024/domains/trioenologie.fr/public_html/templates/security/login.html.twig");
    }
}
