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

/* registration/register.html.twig */
class __TwigTemplate_f29ce5edfb128bd8dbea991c0952ca05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Inscription!";
        
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
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><h2 class=\"nonactive\">Sign In</h2></a>
        <h2 class=\"active\">Sign Up</h2>
      </div><!--/.sign-in-text-->
      <div class=\"layer\">
      </div><!--/.layer-->
      <p class=\"point\">&#9650;</p>
    </div><!--/.back-img-->
    <div class=\"form-section\">

    ";
        // line 24
        echo "
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'form_start');
        echo "

        

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
        <label class=\"mdl-textfield__label\" for=\"sample3\">Email</label>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "mail", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "mdl-textfield__input"]]);
        // line 33
        echo "
    </div>
    </br>

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
        <label class=\"mdl-textfield__label\" for=\"sample3\">Mot de passe</label>
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), 'row', ["attr" => ["class" => "mdl-textfield__input", "id" => "sample3"]]);
        // line 41
        echo "
    </div>
    </br>

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
    <label class=\"mdl-textfield__label\" for=\"sample3\">Nom</label>
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "nom_utilisateur", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "mdl-textfield__input", "id" => "sample3"]]);
        // line 49
        echo "

    </div>
    </br>
    
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
    <label class=\"mdl-textfield__label\" for=\"sample3\">Prenom</label>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "prenom_utilisateur", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "mdl-textfield__input", "id" => "sample3"]]);
        // line 58
        echo "
    </div>
    </br>

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
    <label class=\"mdl-textfield__label\" for=\"sample3\">Date de naissance</label>
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "mdl-textfield__input", "id" => "sample3"]]);
        // line 66
        echo "

    </div>
    </br>

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "agreeTerms", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "mdl-checkbox__input"]]);
        // line 74
        echo "
    </div>
    </br>
    </div>
    

    <button type=\"submit\" class=\"sign-up-btn mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored\">
      S'inscrire
    </button><!--/button-->    
    
    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), 'form_end');
        echo "

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 84,  181 => 74,  179 => 72,  171 => 66,  169 => 64,  161 => 58,  159 => 56,  150 => 49,  148 => 47,  140 => 41,  138 => 39,  130 => 33,  128 => 31,  119 => 25,  116 => 24,  104 => 14,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription!{% endblock %}

{% block body %}

<link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\"/>
<style>
  .back-img { background: url(\"{{ asset('img/nyc-aerial-skyline.jpg')}}\")no-repeat   center center}
</style>
  <div class=\"signin\">
    <div class=\"back-img\">
      <div class=\"sign-in-text\">
        <a href=\"{{ path('app_login') }}\"><h2 class=\"nonactive\">Sign In</h2></a>
        <h2 class=\"active\">Sign Up</h2>
      </div><!--/.sign-in-text-->
      <div class=\"layer\">
      </div><!--/.layer-->
      <p class=\"point\">&#9650;</p>
    </div><!--/.back-img-->
    <div class=\"form-section\">

    {# {{ form_errors(registrationForm) }} #}

    {{ form_start(registrationForm) }}

        

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
        <label class=\"mdl-textfield__label\" for=\"sample3\">Email</label>
        {{ form_row(registrationForm.mail, 
          {'attr': {'class':'mdl-textfield__input'}
        }) }}
    </div>
    </br>

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
        <label class=\"mdl-textfield__label\" for=\"sample3\">Mot de passe</label>
        {{ form_row(registrationForm.plainPassword, {
            'attr': {'class': 'mdl-textfield__input', 'id': 'sample3'}
        }) }}
    </div>
    </br>

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
    <label class=\"mdl-textfield__label\" for=\"sample3\">Nom</label>
        {{ form_row(registrationForm.nom_utilisateur, 
        {'attr': {'class':'mdl-textfield__input', 'id': 'sample3'}
        }) }}

    </div>
    </br>
    
    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
    <label class=\"mdl-textfield__label\" for=\"sample3\">Prenom</label>
        {{ form_row(registrationForm.prenom_utilisateur, 
            {'attr': {'class':'mdl-textfield__input', 'id': 'sample3'}
        }) }}
    </div>
    </br>

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
    <label class=\"mdl-textfield__label\" for=\"sample3\">Date de naissance</label>
        {{ form_row(registrationForm.date_de_naissance, 
            {'attr': {'class':'mdl-textfield__input', 'id': 'sample3'}
        }) }}

    </div>
    </br>

    <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
        {{ form_row(registrationForm.agreeTerms, 
        {'attr': {'class':'mdl-checkbox__input'}
        }) }}
    </div>
    </br>
    </div>
    

    <button type=\"submit\" class=\"sign-up-btn mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored\">
      S'inscrire
    </button><!--/button-->    
    
    {{ form_end(registrationForm) }}

    </div>
{% endblock %}
", "registration/register.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/registration/register.html.twig");
    }
}
