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

/* C:\Apache24\htdocs\movie_rama/plugins/egal/movierama/components/movies/new.htm */
class __TwigTemplate_6c86ad247f9626a387e33d3a89df3c1cf34e5d0bff1bf57c57542286034a2b03 extends \Twig\Template
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
<!-- The form to submit a new movie -->

<div class=\"page-content\">
    
    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "", ["model" => ($context["movie"] ?? null)]]);
        echo "
    
        <div id=\"new-movie\" class=\"new-movie\">
            
            <h2>New Movie</h2>

            <div>
                <input type='text' name='movie_title' placeholder='Enter title for the movie' required/>
            </div>

            <div>
                <textarea rows=\"6\" name=\"movie_summary\" placeholder='Enter description for the movie'></textarea>
            </div> 

            <!-- submit new movie or cancel action -->
            <div class='movie-buttons'>
                <a href='";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "' onclick=\"return confirmCancel();\">Cancel</a>
                    <span> &nbsp; &nbsp; </span>
                <button class=\"movie-button blue\" data-request=\"onAddMovie\" type='submit'>Submit +</button>                
            </div> 
        
        </div>
    
    ";
        // line 29
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    
    <div class=\"movies-menu\">
        <a class=\"movie-button green\" href='";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "'>All Movies<a/>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/new.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  73 => 29,  63 => 22,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- The form to submit a new movie -->

<div class=\"page-content\">
    
    {{ form_ajax('', { model: movie }) }}
    
        <div id=\"new-movie\" class=\"new-movie\">
            
            <h2>New Movie</h2>

            <div>
                <input type='text' name='movie_title' placeholder='Enter title for the movie' required/>
            </div>

            <div>
                <textarea rows=\"6\" name=\"movie_summary\" placeholder='Enter description for the movie'></textarea>
            </div> 

            <!-- submit new movie or cancel action -->
            <div class='movie-buttons'>
                <a href='{{ 'home'|page }}' onclick=\"return confirmCancel();\">Cancel</a>
                    <span> &nbsp; &nbsp; </span>
                <button class=\"movie-button blue\" data-request=\"onAddMovie\" type='submit'>Submit +</button>                
            </div> 
        
        </div>
    
    {{ form_close() }}
    
    <div class=\"movies-menu\">
        <a class=\"movie-button green\" href='{{ 'home'|page }}'>All Movies<a/>
    </div>
</div>

", "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/new.htm", "");
    }
}
