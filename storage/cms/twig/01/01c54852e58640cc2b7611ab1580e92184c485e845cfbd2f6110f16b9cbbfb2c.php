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

/* C:\Apache24\htdocs\movie_rama/plugins/rainlab/user/components/account/update.htm */
class __TwigTemplate_72ec70c597e3936f4494e81ef5715e47ee314702aa8e27291d83a212fcbc3150 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate"]);
        echo "

<div class=\"page-content\">
    <div class=\"profile\">
        
        <h2>Profile</h2>
        
        <div class=\"form-group\">
            <label for=\"accountName\">Full Name:</label>
            <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountEmail\">Email:</label>
            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountPassword\">New Password:</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountPasswordConfirm\">Confirm New Password:</label>
            <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
        </div>

        ";
        // line 28
        if (($context["updateRequiresPassword"] ?? null)) {
            // line 29
            echo "            <p>To change these details, please confirm your current password.</p>
            <div class=\"form-group\">
                <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
                <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
            </div>
        ";
        }
        // line 35
        echo "        
        <div class='user-buttons'>
            <button type=\"submit\" class=\"btn btn-default movie-button blue\">Save</button>
        </div>       

    </div>
    
    <div class=\"movies-menu\">
        <a class=\"movie-button green\" href='";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "'>All Movies<a/>
    </div>
    
</div>
";
        // line 47
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\Apache24\\htdocs\\movie_rama/plugins/rainlab/user/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 47,  93 => 43,  83 => 35,  75 => 29,  73 => 28,  57 => 15,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onUpdate') }}

<div class=\"page-content\">
    <div class=\"profile\">
        
        <h2>Profile</h2>
        
        <div class=\"form-group\">
            <label for=\"accountName\">Full Name:</label>
            <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ user.name }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountEmail\">Email:</label>
            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountPassword\">New Password:</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountPasswordConfirm\">Confirm New Password:</label>
            <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
        </div>

        {% if updateRequiresPassword %}
            <p>To change these details, please confirm your current password.</p>
            <div class=\"form-group\">
                <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
                <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
            </div>
        {% endif %}
        
        <div class='user-buttons'>
            <button type=\"submit\" class=\"btn btn-default movie-button blue\">Save</button>
        </div>       

    </div>
    
    <div class=\"movies-menu\">
        <a class=\"movie-button green\" href='{{ 'home'|page }}'>All Movies<a/>
    </div>
    
</div>
{{ form_close() }}
", "C:\\Apache24\\htdocs\\movie_rama/plugins/rainlab/user/components/account/update.htm", "");
    }
}
