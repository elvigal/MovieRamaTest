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

/* C:\Apache24\htdocs\movie_rama/themes/movierama/partials/html_base/meta_head.htm */
class __TwigTemplate_35974f4f28cf65cba2e4b62767fd397a0ab431ddcb75d9096a2f792e98d00893 extends \Twig\Template
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
        echo "<head>
    <meta charset=\"utf-8\">
    
    <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</title>
    
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        
    <link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/layout.css"]);
        echo "\" rel=\"stylesheet\">
    
    ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "</head>";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/themes/movierama/partials/html_base/meta_head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  62 => 12,  57 => 10,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"utf-8\">
    
    <title>{{ this.page.title }}</title>
    
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        
    <link href=\"{{ ['assets/css/layout.css']|theme }}\" rel=\"stylesheet\">
    
    {% styles %}
</head>", "C:\\Apache24\\htdocs\\movie_rama/themes/movierama/partials/html_base/meta_head.htm", "");
    }
}
