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

/* C:\Apache24\htdocs\movie_rama/plugins/egal/movierama/components/movies/movies.htm */
class __TwigTemplate_3f2529d0c7f23923e4de5c16bf175dbe8f0ce8464e915cfd646975d7302e1c75 extends \Twig\Template
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
<a href='";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("new");
        echo "'>New Movie<a/>

<div id=\"movies-list\">
    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "", ["model" => ($context["movie"] ?? null)]]);
        echo "
    
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            echo "    
            <div class=\"movie-container\" data-like-count=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "likes", [], "any", false, false, false, 8), "html", null, true);
            echo "\" data-hate-count=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "hates", [], "any", false, false, false, 8), "html", null, true);
            echo "\" data-public-date=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "public_date", [], "any", false, false, false, 8), "html", null, true);
            echo "\" style=\"border: 1px solid grey\">
                <p>Movie Id ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>

                <p>Movie Title: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>

                <p>Movie User: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "user", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>

                <p>Movie Date: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "public_date", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>

                <p>Movie Description: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>

                <p>Movie Likes: ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "likes", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>

                <p>Movie Hates: ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "hates", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>

                <button data-request-data=\"{movie_id:";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo ",vote_type:'like'}\" data-request=\"onVote\" type=\"submit\">Like</button>

                <button data-request-data=\"{movie_id:";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo ",vote_type:'hate'}\" data-request=\"onVote\" type=\"submit\">Hate</button>

            </div>           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  
    
    ";
        // line 30
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/movies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 30,  115 => 28,  105 => 25,  100 => 23,  95 => 21,  90 => 19,  85 => 17,  80 => 15,  75 => 13,  70 => 11,  65 => 9,  57 => 8,  51 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<a href='{{ 'new'|page }}'>New Movie<a/>

<div id=\"movies-list\">
    {{ form_ajax('', { model: movie }) }}
    
        {% for movie in movies %}    
            <div class=\"movie-container\" data-like-count=\"{{movie.likes}}\" data-hate-count=\"{{movie.hates}}\" data-public-date=\"{{movie.public_date}}\" style=\"border: 1px solid grey\">
                <p>Movie Id {{movie.id}}</p>

                <p>Movie Title: {{movie.title}}</p>

                <p>Movie User: {{movie.user}}</p>

                <p>Movie Date: {{movie.public_date}}</p>

                <p>Movie Description: {{movie.description}}</p>

                <p>Movie Likes: {{movie.likes}}</p>

                <p>Movie Hates: {{movie.hates}}</p>

                <button data-request-data=\"{movie_id:{{movie.id}},vote_type:'like'}\" data-request=\"onVote\" type=\"submit\">Like</button>

                <button data-request-data=\"{movie_id:{{movie.id}},vote_type:'hate'}\" data-request=\"onVote\" type=\"submit\">Hate</button>

            </div>           
        {% endfor %}  
    
    {{ form_close() }}
</div>

", "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/movies.htm", "");
    }
}
