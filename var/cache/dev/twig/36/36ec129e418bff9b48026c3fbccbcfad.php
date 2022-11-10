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

/* sitemap/index.html.twig */
class __TwigTemplate_4d1ddb2eb24262f7afd2fd637d011581 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
      xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
      xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
      xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->


<url>
  <loc>https://trioenologie.fr/</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://trioenologie.fr/actus</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/asso</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/evenements</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/calendrier</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/galeries</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/contact</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/login</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/register</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/mentions_legales</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/calendrier/1</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://trioenologie.fr/calendrier/2</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://trioenologie.fr/galerie/1</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://trioenologie.fr/reset-password</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.64</priority>
</url>


</urlset>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "sitemap/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
      xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
      xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
      xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->


<url>
  <loc>https://trioenologie.fr/</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://trioenologie.fr/actus</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/asso</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/evenements</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/calendrier</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/galeries</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/contact</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/login</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/register</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/mentions_legales</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://trioenologie.fr/calendrier/1</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://trioenologie.fr/calendrier/2</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://trioenologie.fr/galerie/1</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://trioenologie.fr/reset-password</loc>
  <lastmod>2022-11-04T15:41:09+00:00</lastmod>
  <priority>0.64</priority>
</url>


</urlset>", "sitemap/index.html.twig", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie_stage\\templates\\sitemap\\index.html.twig");
    }
}
