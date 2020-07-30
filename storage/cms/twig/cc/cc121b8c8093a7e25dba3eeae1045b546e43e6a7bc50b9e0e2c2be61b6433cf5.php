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

/* C:\Apache24\htdocs\movie_rama/themes/movierama/partials/sections/header.htm */
class __TwigTemplate_043b2671e2d05c9be26ee992b6767b9fb637784fdda0640317af1575ab41164b extends \Twig\Template
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
        echo "<!-- application title -->
<div class=\"title-div\">
    <h1>";
        // line 3
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
</div>

<!-- links for logging in or signing up -->
<div class=\"user-menu\">
    ";
        // line 8
        if (($context["user"] ?? null)) {
            // line 9
            echo "        <p>Welcome back &nbsp;&nbsp; <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("profile");
            echo "\">";
            echo twig_escape_filter($this->env, ($context["user_name"] ?? null), "html", null, true);
            echo "</a></p>
        <p class='logout-div'>(or <a href=\"#\" data-request=\"onLogout\">Log out</a>)</p>
    ";
        } else {
            // line 12
            echo "        <p><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("signin");
            echo "\">Log in</a> &nbsp; or &nbsp; <a class=\"movie-button blue\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">Sign up</a></p> 
    ";
        }
        // line 14
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/themes/movierama/partials/sections/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  60 => 12,  51 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- application title -->
<div class=\"title-div\">
    <h1>{{ title }}</h1>
</div>

<!-- links for logging in or signing up -->
<div class=\"user-menu\">
    {% if user %}
        <p>Welcome back &nbsp;&nbsp; <a href=\"{{'profile'|page}}\">{{ user_name }}</a></p>
        <p class='logout-div'>(or <a href=\"#\" data-request=\"onLogout\">Log out</a>)</p>
    {% else %}
        <p><a href=\"{{'signin'|page}}\">Log in</a> &nbsp; or &nbsp; <a class=\"movie-button blue\" href=\"{{'register'|page}}\">Sign up</a></p> 
    {% endif %}
</div>", "C:\\Apache24\\htdocs\\movie_rama/themes/movierama/partials/sections/header.htm", "");
    }
}
