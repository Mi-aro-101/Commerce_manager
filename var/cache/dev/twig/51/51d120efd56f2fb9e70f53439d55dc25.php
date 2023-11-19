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

/* heure_suplementaire/new.html.twig */
class __TwigTemplate_8cf766bf63b27460ae3bfc6d15eed404 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "heure_suplementaire/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "heure_suplementaire/new.html.twig"));

        // line 19
        echo "
";
        // line 20
        $this->loadTemplate("header_client_template.html.twig", "heure_suplementaire/new.html.twig", 20)->display($context);
        // line 21
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-5\">
<div class=\"card card-primary\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"> <strong>Fiche de demande d'heure suplementaire </strong></h3>
        </div>
        <div class=\"card-body\">

            ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        </div>

</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 67
        $this->loadTemplate("footer_client_template.html.twig", "heure_suplementaire/new.html.twig", 67)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "

            <div class=\"row\">

                <div class=\"form-group\" style=\"font-size: 110%\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41), 'row');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "duree", [], "any", false, false, false, 47), 'row');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <button class=\"btn btn-primary\">";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 52, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
            </div>

                ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "

                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "heure_suplementaire/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 55,  125 => 52,  117 => 47,  108 => 41,  100 => 36,  97 => 35,  87 => 34,  77 => 67,  66 => 58,  64 => 34,  49 => 21,  47 => 20,  44 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}New HeureSuplementaire{% endblock %}

{% block body %}
    <h1>Create new HeureSuplementaire</h1>
    {{ form_start(form) }}

    {{ include('heure_suplementaire/_form.html.twig') }}
    <p> {{ form_row(form.date) }} </p>
    <p> {{ form_row(form.duree) }} </p>

    <button class=\"btn\" type=\"submit\">Save</button>

    {{ form_end(form) }}

    <a href=\"{{ path('app_heure_suplementaire_index') }}\">back to list</a>
{% endblock %} #}

{% include 'header_client_template.html.twig' %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-5\">
<div class=\"card card-primary\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"> <strong>Fiche de demande d'heure suplementaire </strong></h3>
        </div>
        <div class=\"card-body\">

            {% block body %}

            {{ form_start(form) }}

            <div class=\"row\">

                <div class=\"form-group\" style=\"font-size: 110%\">
                    {{ form_row(form.date) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    {{ form_row(form.duree) }}
                </div>
            </div>

            <div class=\"row\">
                <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
            </div>

                {{ form_end(form) }}

                {% endblock %}
        </div>

</div>
</div>
</div>
</div>
</section>
</div>

{% include 'footer_client_template.html.twig' %}
", "heure_suplementaire/new.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/heure_suplementaire/new.html.twig");
    }
}
