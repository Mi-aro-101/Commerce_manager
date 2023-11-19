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

/* diplome/_form.html.twig */
class __TwigTemplate_5760e61c1b85917068929eed78182d53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diplome/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diplome/_form.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "diplome/_form.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"card card-primary\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"> Diplome </h3>
        </div>
        <div class=\"card-body\">

            ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        </div>

</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 50
        $this->loadTemplate("footer_template.html.twig", "diplome/_form.html.twig", 50)->display($context);
        
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
                    <label> Designation Diplome </label>
                    <input type=\"text\" class=\"form-control\" name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "des_diplome", [], "any", false, false, false, 23)), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\">
                    <label> Niveau diplome </label>
                    <input type=\"text\" class=\"form-control\" name=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "niv_diplome", [], "any", false, false, false, 30)), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"row\">
                <button class=\"btn btn-primary\">";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
            </div>

                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "

                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "diplome/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  124 => 35,  116 => 30,  106 => 23,  97 => 17,  94 => 16,  84 => 15,  74 => 50,  63 => 41,  61 => 15,  46 => 2,  44 => 1,);
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
            <h3 class=\"card-title\"> Diplome </h3>
        </div>
        <div class=\"card-body\">

            {% block body %}

            {{ form_start(form) }}

            <div class=\"row\">

                <div class=\"form-group\">
                    <label> Designation Diplome </label>
                    <input type=\"text\" class=\"form-control\" name=\"{{ field_name(form.des_diplome) }}\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\">
                    <label> Niveau diplome </label>
                    <input type=\"text\" class=\"form-control\" name=\"{{ field_name(form.niv_diplome) }}\">
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

{% include 'footer_template.html.twig' %}", "diplome/_form.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/diplome/_form.html.twig");
    }
}
