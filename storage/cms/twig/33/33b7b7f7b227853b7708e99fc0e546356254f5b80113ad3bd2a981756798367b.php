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

/* C:\Apache24\htdocs\movie_rama/plugins/rainlab/user/components/account/default.htm */
class __TwigTemplate_ce481ffe217baa7301d91f169b5a1816b3291ac7370317de307c1e056abd3a3f extends \Twig\Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "
    ";
            // line 3
            if (twig_in_filter("/signin", call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]))) {
                // line 4
                echo "        
        ";
                // line 5
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::signin")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 6
                echo "        
    ";
            } elseif (twig_in_filter("/register", call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]))) {
                // line 8
                echo "        
        ";
                // line 9
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::register")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 10
                echo "        
    ";
            }
            // line 12
            echo "    
";
        } elseif (twig_in_filter("/profile", call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]))) {
            // line 14
            echo "
    ";
            // line 15
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 16
            echo "    
    
    
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/rainlab/user/components/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  73 => 15,  70 => 14,  66 => 12,  62 => 10,  58 => 9,  55 => 8,  51 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}

    {% if '/signin' in url_current() %}
        
        {% partial __SELF__ ~ '::signin' %}
        
    {% elseif '/register' in url_current() %}
        
        {% partial __SELF__ ~ '::register' %}
        
    {% endif %}
    
{% elseif '/profile' in url_current() %}

    {% partial __SELF__ ~ '::update' %}
    
    
    
{% endif %}
", "C:\\Apache24\\htdocs\\movie_rama/plugins/rainlab/user/components/account/default.htm", "");
    }
}
