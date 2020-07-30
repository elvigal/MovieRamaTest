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

/* C:\Apache24\htdocs\movie_rama/plugins/egal/movierama/components/movies/list.htm */
class __TwigTemplate_85bcb4003706095f2bdd2863badbdb6149a7e0eb14c20112f06305c19f04302f extends \Twig\Template
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
<!-- Display movies submitted to the platform -->

<div class=\"page-content\">
    
    <!-- use model movie to display its attributes -->
    ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "", ["model" => ($context["movie"] ?? null)]]);
        echo "
    
    <div id=\"movies-list\" class=\"movies-list\">
        
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies_ls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            echo "   
        
            <div class=\"movie-container\" data-like-num=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "likes", [], "any", false, false, false, 13), "html", null, true);
            echo "\" data-hate-num=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "hates", [], "any", false, false, false, 13), "html", null, true);
            echo "\" data-public-date=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "published_at", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
                
                <h2>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</h2>

                <!-- references user that submitted the movie and links to his movies page -->
                <div>
                    <p>Posted by&nbsp; <a href=\"";
            // line 19
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("user_movies", ["user_id" => twig_get_attribute($this->env, $this->source, $context["movie"], "user_id", [], "any", false, false, false, 19)]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "user_name", [], "any", false, false, false, 19), "html", null, true);
            echo "</a>&nbsp; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "published_for", [], "any", false, false, false, 19), "html", null, true);
            echo " ago</p>
                </div>
                
                <div>
                    <p>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "summary", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                </div>
                
                <div>
                    ";
            // line 27
            if (( !($context["user_id"] ?? null) || (($context["user_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["movie"], "user_id", [], "any", false, false, false, 27)))) {
                echo "    <!-- user not logged in or movie record belongs to current user  -->                   
                        <p>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "likes", [], "any", false, false, false, 28), "html", null, true);
                echo " likes | ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "hates", [], "any", false, false, false, 28), "html", null, true);
                echo " hates</p>
                        
                    ";
            } else {
                // line 31
                echo "                    
                        ";
                // line 32
                if (((twig_get_attribute($this->env, $this->source, $context["movie"], "likes", [], "any", false, false, false, 32) == 0) && (twig_get_attribute($this->env, $this->source, $context["movie"], "hates", [], "any", false, false, false, 32) == 0))) {
                    echo "      <!-- movie not voted yet -->  
                            <span>Be the first to vote for this movie: </span>
                            <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 34), "html", null, true);
                    echo ",vote_type:'like'}\" type=\"submit\">Like</button>
                            <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo ",vote_type:'hate'}\" type=\"submit\">Hate</button>
                        
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 37
$context["movie"], "user_voted", [], "any", false, false, false, 37) == "like")) {
                    echo "       <!-- movie liked by the current user -->  
                            <div class=\"vote-left\">
                                <span>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "likes", [], "any", false, false, false, 39), "html", null, true);
                    echo " likes | </span>
                                <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 40), "html", null, true);
                    echo ",vote_type:'hate'}\" type=\"submit\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "hates", [], "any", false, false, false, 40), "html", null, true);
                    echo " hates</button>
                            </div>
                            <div class=\"vote-right\">
                                <span>You like this movie | </span>
                                <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 44), "html", null, true);
                    echo ",retract:'1'}\" type=\"submit\">Unlike</button>
                            </div>
                        
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 47
$context["movie"], "user_voted", [], "any", false, false, false, 47) == "hate")) {
                    echo "       <!-- movie hated by the current user -->  
                            <div class=\"vote-left\">
                                <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo ",vote_type:'like'}\" type=\"submit\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "likes", [], "any", false, false, false, 49), "html", null, true);
                    echo " likes</button> | 
                                <span>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "hates", [], "any", false, false, false, 50), "html", null, true);
                    echo " hates</span>
                            </div>
                            <div class=\"vote-right\">
                                <span>You hate this movie</span> | 
                                <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 54), "html", null, true);
                    echo ",retract:'1'}\" type=\"submit\">Unhate</button>       
                            </div>
                            
                        ";
                } else {
                    // line 57
                    echo "      <!-- movie not voted by the current user -->  
                            <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 58), "html", null, true);
                    echo ",vote_type:'like'}\" type=\"submit\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "likes", [], "any", false, false, false, 58), "html", null, true);
                    echo " likes</button>
                            <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 59), "html", null, true);
                    echo ",vote_type:'hate'}\" type=\"submit\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "hates", [], "any", false, false, false, 59), "html", null, true);
                    echo " hates</button>
                        ";
                }
                // line 61
                echo "                        
                    ";
            }
            // line 63
            echo "                </div>
                
            </div>    
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "  

    </div>

    <!-- menu with new movie and all movies options -->
    <div class=\"movies-menu\">
        ";
        // line 73
        if (($context["user"] ?? null)) {
            // line 74
            echo "            <a class=\"movie-button green\" href='";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("new");
            echo "'>New Movie<a/>
        ";
        }
        // line 76
        echo "
        ";
        // line 77
        if (twig_in_filter("/user_movies", call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]))) {
            // line 78
            echo "            <a class=\"movie-button green\" href='";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "'>All Movies<a/>
        ";
        }
        // line 80
        echo "    </div>
    
    ";
        // line 82
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 82,  228 => 80,  222 => 78,  220 => 77,  217 => 76,  211 => 74,  209 => 73,  201 => 67,  191 => 63,  187 => 61,  180 => 59,  174 => 58,  171 => 57,  164 => 54,  157 => 50,  151 => 49,  146 => 47,  140 => 44,  131 => 40,  127 => 39,  122 => 37,  117 => 35,  113 => 34,  108 => 32,  105 => 31,  97 => 28,  93 => 27,  86 => 23,  75 => 19,  68 => 15,  59 => 13,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Display movies submitted to the platform -->

<div class=\"page-content\">
    
    <!-- use model movie to display its attributes -->
    {{ form_ajax('', { model: movie }) }}
    
    <div id=\"movies-list\" class=\"movies-list\">
        
        {% for movie in movies_ls %}   
        
            <div class=\"movie-container\" data-like-num=\"{{movie.likes}}\" data-hate-num=\"{{movie.hates}}\" data-public-date=\"{{movie.published_at}}\">
                
                <h2>{{movie.title}}</h2>

                <!-- references user that submitted the movie and links to his movies page -->
                <div>
                    <p>Posted by&nbsp; <a href=\"{{'user_movies'|page({ user_id:movie.user_id }) }}\">{{movie.user_name}}</a>&nbsp; {{movie.published_for}} ago</p>
                </div>
                
                <div>
                    <p>{{movie.summary}}</p>
                </div>
                
                <div>
                    {% if not user_id or user_id == movie.user_id %}    <!-- user not logged in or movie record belongs to current user  -->                   
                        <p>{{movie.likes}} likes | {{movie.hates}} hates</p>
                        
                    {% else %}
                    
                        {% if movie.likes==0 and movie.hates==0 %}      <!-- movie not voted yet -->  
                            <span>Be the first to vote for this movie: </span>
                            <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:{{movie.id}},vote_type:'like'}\" type=\"submit\">Like</button>
                            <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:{{movie.id}},vote_type:'hate'}\" type=\"submit\">Hate</button>
                        
                        {% elseif movie.user_voted=='like' %}       <!-- movie liked by the current user -->  
                            <div class=\"vote-left\">
                                <span>{{movie.likes}} likes | </span>
                                <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:{{movie.id}},vote_type:'hate'}\" type=\"submit\">{{movie.hates}} hates</button>
                            </div>
                            <div class=\"vote-right\">
                                <span>You like this movie | </span>
                                <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:{{movie.id}},retract:'1'}\" type=\"submit\">Unlike</button>
                            </div>
                        
                        {% elseif movie.user_voted=='hate' %}       <!-- movie hated by the current user -->  
                            <div class=\"vote-left\">
                                <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:{{movie.id}},vote_type:'like'}\" type=\"submit\">{{movie.likes}} likes</button> | 
                                <span>{{movie.hates}} hates</span>
                            </div>
                            <div class=\"vote-right\">
                                <span>You hate this movie</span> | 
                                <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:{{movie.id}},retract:'1'}\" type=\"submit\">Unhate</button>       
                            </div>
                            
                        {% else %}      <!-- movie not voted by the current user -->  
                            <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:{{movie.id}},vote_type:'like'}\" type=\"submit\">{{movie.likes}} likes</button>
                            <button class=\"link-style\" data-request=\"onVote\" data-request-data=\"{movie_id:{{movie.id}},vote_type:'hate'}\" type=\"submit\">{{movie.hates}} hates</button>
                        {% endif %}
                        
                    {% endif %}
                </div>
                
            </div>    
        
        {% endfor %}  

    </div>

    <!-- menu with new movie and all movies options -->
    <div class=\"movies-menu\">
        {% if user %}
            <a class=\"movie-button green\" href='{{ 'new'|page }}'>New Movie<a/>
        {% endif %}

        {% if '/user_movies' in url_current() %}
            <a class=\"movie-button green\" href='{{ 'home'|page }}'>All Movies<a/>
        {% endif %}
    </div>
    
    {{ form_close() }}

</div>

", "C:\\Apache24\\htdocs\\movie_rama/plugins/egal/movierama/components/movies/list.htm", "");
    }
}
