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

/* article_fournisseur/new.html.twig */
class __TwigTemplate_cf98b78e05d6fae375e8a9dfc90ac394 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_fournisseur/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_fournisseur/new.html.twig"));

        // line 1
        $this->loadTemplate("header_achat.html.twig", "article_fournisseur/new.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"card card-primary\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"> Article present dans un fournisseur </h3>
        </div>
        <div class=\"card-body\">

            ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "        </div>

</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 71
        $this->loadTemplate("footer_template.html.twig", "article_fournisseur/new.html.twig", 71)->display($context);
        
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
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label> Fournisseur </label>
                            <select name=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "fournisseur", [], "any", false, false, false, 24)), "html", null, true);
        echo "\" class=\"form-control\">
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "fournisseur", [], "any", false, false, false, 25)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 26
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label> Article </label>
                            <select name=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "article", [], "any", false, false, false, 37)), "html", null, true);
        echo "\" class=\"form-control\">
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "article", [], "any", false, false, false, 38)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 39
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\">

                <div class=\"form-group\">
                    <label> Prix actuel </label>
                    <input type=\"text\" class=\"form-control\" name=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "prix_actuel", [], "any", false, false, false, 50)), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"row\">
                <button class=\"btn btn-primary\">";
        // line 55
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 55, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_fournisseur_index");
        echo "\"><button type=\"button\" class=\"btn btn-info\">Voir</button></a>
            </div>

                ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "

                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "article_fournisseur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 59,  179 => 56,  175 => 55,  167 => 50,  156 => 41,  145 => 39,  141 => 38,  137 => 37,  126 => 28,  115 => 26,  111 => 25,  107 => 24,  97 => 17,  94 => 16,  84 => 15,  74 => 71,  63 => 62,  61 => 15,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_achat.html.twig' %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"card card-primary\">
        <div class=\"card-header\">
            <h3 class=\"card-title\"> Article present dans un fournisseur </h3>
        </div>
        <div class=\"card-body\">

            {% block body %}

            {{ form_start(form) }}


            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label> Fournisseur </label>
                            <select name=\"{{ field_name(form.fournisseur) }}\" class=\"form-control\">
                            {% for label, value in field_choices(form.fournisseur) %}
                                <option value=\"{{ value }}\">{{ label }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label> Article </label>
                            <select name=\"{{ field_name(form.article) }}\" class=\"form-control\">
                            {% for label, value in field_choices(form.article) %}
                                <option value=\"{{ value }}\">{{ label }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\">

                <div class=\"form-group\">
                    <label> Prix actuel </label>
                    <input type=\"text\" class=\"form-control\" name=\"{{ field_name(form.prix_actuel) }}\">
                </div>
            </div>

            <div class=\"row\">
                <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
                <a href=\"{{ path('app_article_fournisseur_index') }}\"><button type=\"button\" class=\"btn btn-info\">Voir</button></a>
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
", "article_fournisseur/new.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/article_fournisseur/new.html.twig");
    }
}
