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

/* C:\Apache24\htdocs\movie_rama/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_e3a8ce1fd4a72726b0b622558b8be0d4d6c65eb928104dccbf1cd897da3671a7 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSignin"]);
        echo "

<div class=\"page-content\">
    <div class=\"sign-in\">
        <h2>Login in</h2>

        <div class=\"form-group\">
            <label for=\"userSigninLogin\">Email:</label>
            <input
                name=\"login\"
                type=\"text\"
                class=\"form-control\"
                id=\"userSigninLogin\"
                placeholder=\"Enter your ";
        // line 14
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
        echo "\" />
        </div>

        <div class=\"form-group\">
            <label for=\"userSigninPassword\">Password:</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"userSigninPassword\"
                placeholder=\"Enter your password\" />
        </div>

        ";
        // line 27
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 28
            echo "        <div class=\"form-group\">
            <div class=\"checkbox\">
            <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
            </div>
        </div>
        ";
        }
        // line 34
        echo "
        <div class='user-buttons'>
            <button class=\"movie-button blue\" type='submit'>Login in</button>
        </div> 
    </div>

    <div class=\"movies-menu\">
        <a class=\"movie-button green\" href='";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "'>All Movies<a/>
    </div>
</div>

";
        // line 45
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/rainlab/user/components/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 45,  88 => 41,  79 => 34,  71 => 28,  69 => 27,  53 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onSignin') }}

<div class=\"page-content\">
    <div class=\"sign-in\">
        <h2>Login in</h2>

        <div class=\"form-group\">
            <label for=\"userSigninLogin\">Email:</label>
            <input
                name=\"login\"
                type=\"text\"
                class=\"form-control\"
                id=\"userSigninLogin\"
                placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" />
        </div>

        <div class=\"form-group\">
            <label for=\"userSigninPassword\">Password:</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"userSigninPassword\"
                placeholder=\"Enter your password\" />
        </div>

        {% if rememberLoginMode == 'ask' %}
        <div class=\"form-group\">
            <div class=\"checkbox\">
            <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
            </div>
        </div>
        {% endif %}

        <div class='user-buttons'>
            <button class=\"movie-button blue\" type='submit'>Login in</button>
        </div> 
    </div>

    <div class=\"movies-menu\">
        <a class=\"movie-button green\" href='{{ 'home'|page }}'>All Movies<a/>
    </div>
</div>

{{ form_close() }}
", "C:\\Apache24\\htdocs\\movie_rama/plugins/rainlab/user/components/account/signin.htm", "");
    }
}
