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

/* cv_candidat/new.html.twig */
class __TwigTemplate_0bd5d19296e7d5dea03444328cc3e6b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_candidat/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_candidat/new.html.twig"));

        // line 9
        $this->loadTemplate("header_client_template.html.twig", "cv_candidat/new.html.twig", 9)->display($context);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "    </div>

</div>
</section>
</div>

";
        // line 169
        $this->loadTemplate("footer_client_template.html.twig", "cv_candidat/new.html.twig", 169)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Generer une annonce";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "            <div class=\"col-md-6\">
                <div class=\"card card-primary\">
                    <div class=\"card-header\">
                        <h2 class=\"card-title\">CV Requis</h2>
                    </div>
                    
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Date de depot </label>
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 31, $this->source); })()), "date_depot", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control", "id" => "exampleInputPassword1"]]);
        // line 33
        echo "
                                </div>
                            </div>
                            ";
        // line 44
        echo "                        </div>
                    </div>  

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Domaine </label>
                                     <select name=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 52, $this->source); })()), "domaine", [], "any", false, false, false, 52)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 53, $this->source); })()), "domaine", [], "any", false, false, false, 53)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 54
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   
                    ";
        // line 62
        echo "                    ";
        // line 64
        echo "
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Diplome </label>
                                    <select name=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 70, $this->source); })()), "diplome", [], "any", false, false, false, 70)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 71, $this->source); })()), "diplome", [], "any", false, false, false, 71)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 72
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Experience </label>
                                      <select name=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 86, $this->source); })()), "experience", [], "any", false, false, false, 86)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 87, $this->source); })()), "experience", [], "any", false, false, false, 87)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 88
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Adresse </label>
                                    <select name=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 101, $this->source); })()), "adresse", [], "any", false, false, false, 101)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 102, $this->source); })()), "adresse", [], "any", false, false, false, 102)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 103
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Sexe </label>
                                    <select name=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 116, $this->source); })()), "sexe", [], "any", false, false, false, 116)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 117, $this->source); })()), "sexe", [], "any", false, false, false, 117)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 118
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Situation matrimoniale </label>
                                     <select name=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 132, $this->source); })()), "matrimoniale", [], "any", false, false, false, 132)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 133, $this->source); })()), "matrimoniale", [], "any", false, false, false, 133)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 134
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Nationalite </label>
                                     <select name=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 148, $this->source); })()), "nationalite", [], "any", false, false, false, 148)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 149, $this->source); })()), "nationalite", [], "any", false, false, false, 149)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 150
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>    
                     <center><button type=\"submit\" class=\"btn btn-primary\">";
        // line 157
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 157, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button></center>

                </div>
            </div>
    ";
        // line 161
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 161, $this->source); })()), 'form_end');
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cv_candidat/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 161,  368 => 157,  361 => 152,  350 => 150,  346 => 149,  342 => 148,  328 => 136,  317 => 134,  313 => 133,  309 => 132,  295 => 120,  284 => 118,  280 => 117,  276 => 116,  263 => 105,  252 => 103,  248 => 102,  244 => 101,  231 => 90,  220 => 88,  216 => 87,  212 => 86,  198 => 74,  187 => 72,  183 => 71,  179 => 70,  171 => 64,  169 => 62,  162 => 56,  151 => 54,  147 => 53,  143 => 52,  133 => 44,  128 => 33,  126 => 31,  113 => 20,  103 => 19,  84 => 11,  74 => 169,  66 => 163,  64 => 19,  59 => 17,  52 => 12,  50 => 11,  47 => 10,  45 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% block title %}New CVCandidat{% endblock %}

{% block body %}
<center> <h1>Create new CVCandidat</h1> </center>
    {{ include('cv_candidat/_form.html.twig') }}

    <a href=\"{{ path('app_c_v_candidat_index') }}\">back to list</a>
{% endblock %} #}
{% include 'header_client_template.html.twig' %}

{% block title %}Generer une annonce{% endblock %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
    {{ form_start(formcv) }}
    <div class=\"row\">
        {% block body %}
            <div class=\"col-md-6\">
                <div class=\"card card-primary\">
                    <div class=\"card-header\">
                        <h2 class=\"card-title\">CV Requis</h2>
                    </div>
                    
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Date de depot </label>
                                    {{ form_row(formcv.date_depot, 
                                        {'attr': {'class':'form-control', 'id': 'exampleInputPassword1'}
                                    }) }}
                                </div>
                            </div>
                            {# <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Date de fin </label>
                                    {{ form_row(formcv.date_fin, 
                                        {'attr': {'class':'form-control', 'id': 'exampleInputPassword1'}
                                    }) }}
                                </div>
                            </div> #}
                        </div>
                    </div>  

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Domaine </label>
                                     <select name=\"{{ field_name(formcv.domaine) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.domaine) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   
                    {# <input type=\"hidden\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"id_cv\" value=\" {{ cv_requirements.getId() }}\"> #}
                    {# <input type=\"hidden\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"{{ field_name(formcv.statue)}}\" value=5 >
                    <input type=\"hidden\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"{{ field_name(formcv.date_reponse)}}\" value= null > #}

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Diplome </label>
                                    <select name=\"{{ field_name(formcv.diplome) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.diplome) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Experience </label>
                                      <select name=\"{{ field_name(formcv.experience) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.experience) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Adresse </label>
                                    <select name=\"{{ field_name(formcv.adresse) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.adresse) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Sexe </label>
                                    <select name=\"{{ field_name(formcv.sexe) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.sexe) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Situation matrimoniale </label>
                                     <select name=\"{{ field_name(formcv.matrimoniale) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.matrimoniale) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Nationalite </label>
                                     <select name=\"{{ field_name(formcv.nationalite) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.nationalite) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>    
                     <center><button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button></center>

                </div>
            </div>
    {{ form_end(formcv) }}
        {% endblock %}
    </div>

</div>
</section>
</div>

{% include 'footer_client_template.html.twig' %}", "cv_candidat/new.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/cv_candidat/new.html.twig");
    }
}
