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

/* C:\Apache24\htdocs\movie_rama/themes/movierama/partials/html_base/scripts.htm */
class __TwigTemplate_915cb2a4da4f0ecd44f87a65914539eec83a30d8b9225ce37aa04f1aae82e667 extends \Twig\Template
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
        echo "<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>

";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 4
        echo "
<!-- include ajax framework -->
";
        // line 6
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/themes/movierama/partials/html_base/scripts.htm";
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>

{% scripts %}

<!-- include ajax framework -->
{% framework extras %}", "C:\\Apache24\\htdocs\\movie_rama/themes/movierama/partials/html_base/scripts.htm", "");
    }
}
