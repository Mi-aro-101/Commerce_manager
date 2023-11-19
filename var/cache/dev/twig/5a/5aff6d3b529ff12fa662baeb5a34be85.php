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

/* security/login.html.twig */
class __TwigTemplate_c93988033006bda1c7b063b9a75bc071 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\"/>
<style>
  .back-img { background: url(\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nyc-aerial-skyline.jpg"), "html", null, true);
        echo "\")no-repeat   center center}
</style>
  <div class=\"signin\">
    <div class=\"back-img\">
      <div class=\"sign-in-text\">
        <h2 class=\"active\">Sign In</h2>
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><h2 class=\"nonactive\">Sign Up</h2></a>
      </div><!--/.sign-in-text-->
      <div class=\"layer\">
      </div><!--/.layer-->
      <p class=\"point\">&#9650;</p>
    </div><!--/.back-img-->
    <div class=\"form-section\">

    ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 26
        echo "
      <form method=\"post\">
        <!--Email-->
        <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
          <input class=\"mdl-textfield__input\" type=\"email\"  name=\"mail\" id=\"sample3\">
          <label class=\"mdl-textfield__label\" for=\"sample3\">Email</label>
        </div>
        <br/>
        <br/>
        <!--Password-->
        <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
          <input pattern=\".{6,}\" class=\"mdl-textfield__input\" type=\"password\"  name=\"password\" id=\"sample3\">
          <label class=\"mdl-textfield__label\" for=\"sample3\">Mot de passe</label>
        </div>
        <br/>
        <p class=\"forgot-text\">Forgot Password ?</p>
        <!--CheckBox-->
        <label class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\" for=\"checkbox-1\">
        <input type=\"checkbox\" id=\"checkbox-1\" class=\"mdl-checkbox__input\" checked>
        <span class=\"keep-text mdl-checkbox__label\">Keep me Signed In</span>
      </label>
    </div><!--/.form-section-->

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

    <button type=\"submit\" class=\"sign-in-btn mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored\">
      Se connecter
    </button><!--/button-->
      </form>
 </div><!--/.signin-->


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  124 => 26,  118 => 24,  116 => 23,  105 => 15,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}

<link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\"/>
<style>
  .back-img { background: url(\"{{ asset('img/nyc-aerial-skyline.jpg')}}\")no-repeat   center center}
</style>
  <div class=\"signin\">
    <div class=\"back-img\">
      <div class=\"sign-in-text\">
        <h2 class=\"active\">Sign In</h2>
        <a href=\"{{ path('app_register') }}\"><h2 class=\"nonactive\">Sign Up</h2></a>
      </div><!--/.sign-in-text-->
      <div class=\"layer\">
      </div><!--/.layer-->
      <p class=\"point\">&#9650;</p>
    </div><!--/.back-img-->
    <div class=\"form-section\">

    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

      <form method=\"post\">
        <!--Email-->
        <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
          <input class=\"mdl-textfield__input\" type=\"email\"  name=\"mail\" id=\"sample3\">
          <label class=\"mdl-textfield__label\" for=\"sample3\">Email</label>
        </div>
        <br/>
        <br/>
        <!--Password-->
        <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
          <input pattern=\".{6,}\" class=\"mdl-textfield__input\" type=\"password\"  name=\"password\" id=\"sample3\">
          <label class=\"mdl-textfield__label\" for=\"sample3\">Mot de passe</label>
        </div>
        <br/>
        <p class=\"forgot-text\">Forgot Password ?</p>
        <!--CheckBox-->
        <label class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\" for=\"checkbox-1\">
        <input type=\"checkbox\" id=\"checkbox-1\" class=\"mdl-checkbox__input\" checked>
        <span class=\"keep-text mdl-checkbox__label\">Keep me Signed In</span>
      </label>
    </div><!--/.form-section-->

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    <button type=\"submit\" class=\"sign-in-btn mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored\">
      Se connecter
    </button><!--/button-->
      </form>
 </div><!--/.signin-->


{% endblock %}
", "security/login.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/security/login.html.twig");
    }
}
