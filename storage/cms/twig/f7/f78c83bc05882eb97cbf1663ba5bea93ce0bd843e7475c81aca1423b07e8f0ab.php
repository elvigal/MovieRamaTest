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

/* C:\Apache24\htdocs\movie_rama/plugins/egal/movierama/components/movies/filters.htm */
class __TwigTemplate_fc916257dd248821455ac3a58a05e35c48f1afd56943b12ee5d21b1cb3782a13 extends \Twig\Template
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
<!-- Sorting filters for number of likes, hates and publication data -->

<div class=\"sorting-filters\">
    <p>Sort by:</p>
    <div>
        <a onclick=\"sortItems('movies-list','movie-container','like-num');\">Likes</a> |
        <a onclick=\"sortItems('movies-list','movie-container','hate-num');\">Hates</a> |
        <a onclick=\"sortItems('movies-list','movie-container','public-date');\">Date</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/filters.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Sorting filters for number of likes, hates and publication data -->

<div class=\"sorting-filters\">
    <p>Sort by:</p>
    <div>
        <a onclick=\"sortItems('movies-list','movie-container','like-num');\">Likes</a> |
        <a onclick=\"sortItems('movies-list','movie-container','hate-num');\">Hates</a> |
        <a onclick=\"sortItems('movies-list','movie-container','public-date');\">Date</a>
    </div>
</div>", "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/filters.htm", "");
    }
}
