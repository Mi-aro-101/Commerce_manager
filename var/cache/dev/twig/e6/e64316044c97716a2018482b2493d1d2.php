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

/* adresse/_form.html.twig */
class __TwigTemplate_660bb0d6c78ddbf018a3c0f19d8eedbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adresse/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adresse/_form.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "adresse/_form.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"card card-primary\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"> Adresse </h3>
        </div>
        <div class=\"card-body\">

            ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        </div>

</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 51
        $this->loadTemplate("footer_template.html.twig", "adresse/_form.html.twig", 51)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "

            <div class=\"row\">

                <div class=\"form-group\">
                    <label> Designation adresse </label>
                    <input type=\"text\" class=\"form-control\" name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "des_adresse", [], "any", false, false, false, 23)), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\">
                    <label> Niveau adresse </label>
                    <input type=\"text\" class=\"form-control\" name=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "niv_adresse", [], "any", false, false, false, 30)), "html", null, true);
        echo "\">
                </div>
            </div>

                ";
        // line 35
        echo "            <div class=\"row\">
                <button class=\"btn btn-primary\">";
        // line 36
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 36, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
            </div>

                ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "

                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "adresse/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  126 => 36,  123 => 35,  116 => 30,  106 => 23,  97 => 17,  94 => 16,  84 => 15,  74 => 51,  63 => 42,  61 => 15,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"card card-primary\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"> Adresse </h3>
        </div>
        <div class=\"card-body\">

            {% block body %}

            {{ form_start(form) }}

            <div class=\"row\">

                <div class=\"form-group\">
                    <label> Designation adresse </label>
                    <input type=\"text\" class=\"form-control\" name=\"{{ field_name(form.des_adresse) }}\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\">
                    <label> Niveau adresse </label>
                    <input type=\"text\" class=\"form-control\" name=\"{{ field_name(form.niv_adresse) }}\">
                </div>
            </div>

                {# {{ form_widget(form) }} #}
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

{% include 'footer_template.html.twig' %}
", "adresse/_form.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/adresse/_form.html.twig");
    }
}
