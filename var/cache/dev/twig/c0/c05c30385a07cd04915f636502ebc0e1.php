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

/* employe/_form.html.twig */
class __TwigTemplate_bad854f8fe7da509860dca0f6e24a05e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_form.html.twig"));

        // line 1
        $this->loadTemplate("header_client_template.html.twig", "employe/_form.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-5\">
<div class=\"card card-success\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"> <strong>Nouvel employe(e) </strong></h3>
        </div>
        <div class=\"card-body\">

            ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "        </div>

</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 78
        $this->loadTemplate("footer_client_template.html.twig", "employe/_form.html.twig", 78)->display($context);
        
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

                <div class=\"form-group\" style=\"font-size: 110%\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date_embauche", [], "any", false, false, false, 22), 'row');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "cnaps", [], "any", false, false, false, 28), 'row');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "osti", [], "any", false, false, false, 34), 'row');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "salaire", [], "any", false, false, false, 40), 'row');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "service", [], "any", false, false, false, 46), 'row');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "poste", [], "any", false, false, false, 52), 'row');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "statut", [], "any", false, false, false, 58), 'row');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <button class=\"btn btn-primary\">";
        // line 63
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 63, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
            </div>

                ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "

                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employe/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 66,  167 => 63,  159 => 58,  150 => 52,  141 => 46,  132 => 40,  123 => 34,  114 => 28,  105 => 22,  97 => 17,  94 => 16,  84 => 15,  74 => 78,  63 => 69,  61 => 15,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_client_template.html.twig' %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-5\">
<div class=\"card card-success\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"> <strong>Nouvel employe(e) </strong></h3>
        </div>
        <div class=\"card-body\">

            {% block body %}

            {{ form_start(form) }}

            <div class=\"row\">

                <div class=\"form-group\" style=\"font-size: 110%\">
                    {{ form_row(form.date_embauche) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    {{ form_row(form.cnaps) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    {{ form_row(form.osti) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    {{ form_row(form.salaire) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    {{ form_row(form.service) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    {{ form_row(form.poste) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"form-group\" style=\"font-size: 110%\">
                    {{ form_row(form.statut) }}
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

{% include 'footer_client_template.html.twig' %}", "employe/_form.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/employe/_form.html.twig");
    }
}
