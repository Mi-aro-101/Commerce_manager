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

/* test_resultat/new.html.twig */
class __TwigTemplate_d917189f0126b385cef3b59171296f53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_resultat/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_resultat/new.html.twig"));

        // line 1
        $this->loadTemplate("header_client_template.html.twig", "test_resultat/new.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 9
        echo "
    ";
        // line 12
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

    <section class=\"content\">
        <div class=\"container-fluid\">

                <div class=\"col-sm-6\">
                    <h1>Test d'aptitude</strong></h1>
                </div><br>
            <div class=\"row\">

            <div class=\"col-10\">
                <div class=\"card card-row card-default\">

                <div class=\"card-header bg-info\">
                    <h3 class=\"card-title\">
                     Test, <strong>toutes les questions sont obligatoires</strong>
                    </h3>
                </div>
                ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
                </div>
            </div>

            </div>

        </div>
    </section>
</div>

";
        // line 123
        echo "
";
        // line 124
        $this->loadTemplate("footer_client_template.html.twig", "test_resultat/new.html.twig", 124)->display($context);
        // line 125
        echo "

";
        
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

        echo "New TestResultat";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "
                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
                <div class=\"card-body\">
                    <div class=\"card-info card-outline\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\"></h5>
                        </div>
                        <div class=\"card-body\">
                            <h6>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "date_envoie", [], "any", false, false, false, 40), 'row');
        echo "</h6>
                        </div>
                    </div>

                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 45
            echo "                    <div class=\"card-info card-outline\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\"><strong>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "getDesQuestion", [], "method", false, false, false, 47), "html", null, true);
            echo "</strong></h5>
                        </div>
                        <div class=\"card-body\">
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "getReponseSections", [], "method", false, false, false, 50));
            foreach ($context['_seq'] as $context["value"] => $context["reponse"]) {
                // line 51
                echo "                            <div class=\"\">
                                <input type=\"radio\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "getId", [], "method", false, false, false, 52), "html", null, true);
                echo "\" name=\"sectionReponses[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "getId", [], "method", false, false, false, 52), "html", null, true);
                echo "]\">
                                <label for=\"\" class=\"\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "getDesReponse", [], "method", false, false, false, 53), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                </div>

                <center><button class=\"btn btn-primary\" type=\"submit\" id=\"save-section\">Soumettre</button></center>

                ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "

                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "test_resultat/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 63,  202 => 58,  195 => 56,  186 => 53,  180 => 52,  177 => 51,  173 => 50,  167 => 47,  163 => 45,  159 => 44,  152 => 40,  142 => 33,  139 => 32,  129 => 31,  110 => 3,  98 => 125,  96 => 124,  93 => 123,  81 => 66,  79 => 31,  58 => 12,  55 => 9,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_client_template.html.twig' %}

{% block title %}New TestResultat{% endblock %}

{# {% block body %}
    <h1>Repondre au test</h1>

    {# {{ include('test_resultat/_form.html.twig') }} #}

    {# <a href=\"{{ path('app_test_resultat_index') }}\">back to list</a> #}
{# {% endblock %}  #}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

    <section class=\"content\">
        <div class=\"container-fluid\">

                <div class=\"col-sm-6\">
                    <h1>Test d'aptitude</strong></h1>
                </div><br>
            <div class=\"row\">

            <div class=\"col-10\">
                <div class=\"card card-row card-default\">

                <div class=\"card-header bg-info\">
                    <h3 class=\"card-title\">
                     Test, <strong>toutes les questions sont obligatoires</strong>
                    </h3>
                </div>
                {% block body %}

                {{ form_start(form) }}
                <div class=\"card-body\">
                    <div class=\"card-info card-outline\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\"></h5>
                        </div>
                        <div class=\"card-body\">
                            <h6>{{ form_row(form.date_envoie) }}</h6>
                        </div>
                    </div>

                    {% for section in sections %}
                    <div class=\"card-info card-outline\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\"><strong>{{ section.getDesQuestion() }}</strong></h5>
                        </div>
                        <div class=\"card-body\">
                        {% for value, reponse in  section.getReponseSections() %}
                            <div class=\"\">
                                <input type=\"radio\" value=\"{{ reponse.getId() }}\" name=\"sectionReponses[{{ section.getId() }}]\">
                                <label for=\"\" class=\"\">{{ reponse.getDesReponse() }}</label>
                            </div>
                        {% endfor %}
                        </div>
                    {% endfor %}

                </div>

                <center><button class=\"btn btn-primary\" type=\"submit\" id=\"save-section\">Soumettre</button></center>

                {{ form_end(form) }}

                {% endblock %}

                </div>
            </div>

            </div>

        </div>
    </section>
</div>

{# <div class=\"content-wrapper\" style=\"min-height : 1345.6px\">
    <section class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-10\">
                    <div class=\"card card-warning\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\"> Test d'aptitude </h3>
                        </div>
                        <div class=\"card-body\">

                        {% block body %}

                        {{ form_start(form) }}

                                <div id=\"sections\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">

                                                {{ form_row(form.date_envoie) }}

                                            </div>
                                            {% for section in sections %}
                                            <div class=\"form-group\">
                                                <label> {{ section.getDesQuestion() }} </label>
                                                {% for value, reponse in  section.getReponseSections() %}
                                                    {{ reponse.getDesReponse() }}<input type=\"radio\" value=\"{{ reponse.getId() }}\" name=\"sectionReponses[{{ section.getId() }}]\">
                                                {% endfor %}
                                            </div>
                                            {% endfor %}
                                        </div>
                                    </div>
                                </div>

                                <button class=\"btn btn-primary\" type=\"submit\" id=\"save-section\">Soumettre</button>

                        {{ form_end(form) }}

                        {% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> #}

{% include 'footer_client_template.html.twig' %}


{# <p> {{ form_row(form.date_envoie) }} </p>

    {% for section in sections %}
        <label> {{ section.getDesQuestion() }} </label>
        {% for value, reponse in  section.getReponseSections() %}
            <p>{{ reponse.getDesReponse() }}<input type=\"radio\" value=\"{{ reponse.getId() }}\" name=\"sectionReponses[{{ section.getId() }}]\"></p>
        {% endfor %}
    {% endfor %} #}", "test_resultat/new.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/test_resultat/new.html.twig");
    }
}
