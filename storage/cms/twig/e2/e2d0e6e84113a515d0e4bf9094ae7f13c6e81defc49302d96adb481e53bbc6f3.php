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

/* C:\Apache24\htdocs\movie_rama/plugins/egal/movierama/components/movies/header.htm */
class __TwigTemplate_38885ebe021b581e3c18d0171be5b1ef2c559fc80a5c6d29e9b3a42eb8ac1c13 extends \Twig\Template
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
        echo "
<p>";
        // line 2
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</p>

";
        // line 4
        if (($context["user_id"] ?? null)) {
            // line 5
            echo "    <p>Welcome back <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("profile");
            echo "\">";
            echo twig_escape_filter($this->env, ($context["user_name"] ?? null), "html", null, true);
            echo "</a>  <a href=\"#\" data-request=\"onLogout\">Log out</a></p>
";
        } else {
            // line 7
            echo "    <p><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("signin");
            echo "\">Log in</a> or <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Sign up</a></p> 
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<p>{{ title }}</p>

{% if user_id %}
    <p>Welcome back <a href=\"{{'profile'|page}}\">{{ user_name }}</a>  <a href=\"#\" data-request=\"onLogout\">Log out</a></p>
{% else %}
    <p><a href=\"{{'signin'|page}}\">Log in</a> or <a href=\"{{'register'|page}}\">Sign up</a></p> 
{% endif %}", "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/header.htm", "");
    }
}
