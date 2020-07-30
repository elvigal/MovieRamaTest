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

/* C:\Apache24\htdocs\movie_rama/themes/movierama/layouts/default.htm */
class __TwigTemplate_d18a8afbe271f5ae323c42c41875c8f83dddc09f6d3c951b3da5919d1489a48e extends \Twig\Template
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
        echo "<html>
    
    <head>
        <!-- Insert head meta data -->
        ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/meta_head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    </head>

    <body>
        <!-- Insert scripts -->
        ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "        
        <div class=\"app-container\">
            
            <!-- Header -->
            <div class=\"app-header\">
                ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "            </div>

            <!-- Output page content -->
            <div class=\"page-container\">
                ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 22
        echo "            </div>
        </div>
        
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/themes/movierama/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  74 => 21,  68 => 17,  64 => 16,  57 => 11,  53 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    
    <head>
        <!-- Insert head meta data -->
        {% partial \"html_base/meta_head\" %}
    </head>

    <body>
        <!-- Insert scripts -->
        {% partial 'html_base/scripts' %}
        
        <div class=\"app-container\">
            
            <!-- Header -->
            <div class=\"app-header\">
                {% partial \"sections/header\" %}
            </div>

            <!-- Output page content -->
            <div class=\"page-container\">
                {% page %}
            </div>
        </div>
        
    </body>

</html>", "C:\\Apache24\\htdocs\\movie_rama/themes/movierama/layouts/default.htm", "");
    }
}
