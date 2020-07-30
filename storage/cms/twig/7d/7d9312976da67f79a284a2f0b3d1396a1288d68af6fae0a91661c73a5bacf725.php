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

/* C:\Apache24\htdocs\movie_rama/plugins/egal/movierama/components/movies/default.htm */
class __TwigTemplate_519fe1471a2432ea9da131b49957e3da33ae74c95ad2d7ec3a6e062feef5c737 extends \Twig\Template
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

<!-- Submit new movie -->
";
        // line 4
        if (twig_in_filter("/new", call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]))) {
            // line 5
            echo "
    ";
            // line 6
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::new")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "
<!-- Display movies submitted by a specific user -->
";
        } elseif (twig_in_filter("/user_movies", call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]))) {
            // line 10
            echo "
    ";
            // line 11
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::filters")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "    
    ";
            // line 13
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['movies_ls'] = ($context["user_movies"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::list")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "    
<!-- Display all submitted movies -->
";
        } else {
            // line 17
            echo "
    ";
            // line 18
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::filters")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "    
    ";
            // line 20
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['movies_ls'] = ($context["movies"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::list")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 21
            echo "    
";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  91 => 21,  86 => 20,  83 => 19,  79 => 18,  76 => 17,  71 => 14,  66 => 13,  63 => 12,  59 => 11,  56 => 10,  51 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!-- Submit new movie -->
{% if '/new' in url_current() %}

    {% partial __SELF__ ~ '::new' %}

<!-- Display movies submitted by a specific user -->
{% elseif '/user_movies' in url_current() %}

    {% partial __SELF__ ~ '::filters' %}
    
    {% partial __SELF__ ~ '::list' movies_ls=user_movies %}
    
<!-- Display all submitted movies -->
{% else %}

    {% partial __SELF__ ~ '::filters' %}
    
    {% partial __SELF__ ~ '::list' movies_ls=movies %}
    
{% endif %}

", "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/default.htm", "");
    }
}
