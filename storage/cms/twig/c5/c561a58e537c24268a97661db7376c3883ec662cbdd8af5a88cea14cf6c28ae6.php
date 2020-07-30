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

/* C:\Apache24\htdocs\movie_rama/plugins/rainlab/user/components/account/register.htm */
class __TwigTemplate_d3697964edecd73c7faad4bc9188e94647d2168b5653ca951ef401a8f8fa23ee extends \Twig\Template
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
";
        // line 2
        if (($context["canRegister"] ?? null)) {
            // line 3
            echo "   
    ";
            // line 4
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRegister"]);
            echo "

    <div class=\"page-content\">
        <div class=\"sign-in\">
            <h2>Register</h2>

            <div class=\"form-group\">
                <label for=\"registerName\">Full Name:</label>
                <input
                    name=\"name\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerName\"
                    placeholder=\"Enter your full name\" />
            </div>

            <div class=\"form-group\">
                <label for=\"registerEmail\">Email:</label>
                <input
                    name=\"email\"
                    type=\"email\"
                    class=\"form-control\"
                    id=\"registerEmail\"
                    placeholder=\"Enter your email\" />
            </div>

            ";
            // line 30
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 31
                echo "                <div class=\"form-group\">
                    <label for=\"registerUsername\">Username</label>
                    <input
                        name=\"username\"
                        type=\"text\"
                        class=\"form-control\"
                        id=\"registerUsername\"
                        placeholder=\"Enter your username\" />
                </div>
            ";
            }
            // line 41
            echo "
            <div class=\"form-group\">
                <label for=\"registerPassword\">Password</label>
                <input
                    name=\"password\"
                    type=\"password\"
                    class=\"form-control\"
                    id=\"registerPassword\"
                    placeholder=\"Choose a password\" />
            </div>

            <div class='user-buttons'>
                <button type=\"submit\" class=\"btn btn-default movie-button blue\">Register</button>
            </div>   
        
        </div>
        
        <div class=\"movies-menu\">
            <a class=\"movie-button green\" href='";
            // line 59
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "'>All Movies<a/>
        </div>
    </div>
    
    ";
            // line 63
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
";
        } else {
            // line 65
            echo "    <!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/rainlab/user/components/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 65,  115 => 63,  108 => 59,  88 => 41,  76 => 31,  74 => 30,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if canRegister %}
   
    {{ form_ajax('onRegister') }}

    <div class=\"page-content\">
        <div class=\"sign-in\">
            <h2>Register</h2>

            <div class=\"form-group\">
                <label for=\"registerName\">Full Name:</label>
                <input
                    name=\"name\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerName\"
                    placeholder=\"Enter your full name\" />
            </div>

            <div class=\"form-group\">
                <label for=\"registerEmail\">Email:</label>
                <input
                    name=\"email\"
                    type=\"email\"
                    class=\"form-control\"
                    id=\"registerEmail\"
                    placeholder=\"Enter your email\" />
            </div>

            {% if loginAttribute == \"username\" %}
                <div class=\"form-group\">
                    <label for=\"registerUsername\">Username</label>
                    <input
                        name=\"username\"
                        type=\"text\"
                        class=\"form-control\"
                        id=\"registerUsername\"
                        placeholder=\"Enter your username\" />
                </div>
            {% endif %}

            <div class=\"form-group\">
                <label for=\"registerPassword\">Password</label>
                <input
                    name=\"password\"
                    type=\"password\"
                    class=\"form-control\"
                    id=\"registerPassword\"
                    placeholder=\"Choose a password\" />
            </div>

            <div class='user-buttons'>
                <button type=\"submit\" class=\"btn btn-default movie-button blue\">Register</button>
            </div>   
        
        </div>
        
        <div class=\"movies-menu\">
            <a class=\"movie-button green\" href='{{ 'home'|page }}'>All Movies<a/>
        </div>
    </div>
    
    {{ form_close() }}
{% else %}
    <!-- Registration is disabled. -->
{% endif %}
", "C:\\Apache24\\htdocs\\movie_rama/plugins/rainlab/user/components/account/register.htm", "");
    }
}
