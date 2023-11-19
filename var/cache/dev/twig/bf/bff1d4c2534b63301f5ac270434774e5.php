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

/* cv_requirements/show.html.twig */
class __TwigTemplate_27a4038a0bbeec164d753bd84af00dbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_requirements/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_requirements/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cv_requirements/show.html.twig", 1);
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

        echo "CVRequirements";
        
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
        echo "    <h1>CVRequirements</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_v_requirement"]) || array_key_exists("c_v_requirement", $context) ? $context["c_v_requirement"] : (function () { throw new RuntimeError('Variable "c_v_requirement" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_envoie</th>
                <td>";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["c_v_requirement"]) || array_key_exists("c_v_requirement", $context) ? $context["c_v_requirement"] : (function () { throw new RuntimeError('Variable "c_v_requirement" does not exist.', 16, $this->source); })()), "dateEnvoie", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_v_requirement"]) || array_key_exists("c_v_requirement", $context) ? $context["c_v_requirement"] : (function () { throw new RuntimeError('Variable "c_v_requirement" does not exist.', 16, $this->source); })()), "dateEnvoie", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Poste_description</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_v_requirement"]) || array_key_exists("c_v_requirement", $context) ? $context["c_v_requirement"] : (function () { throw new RuntimeError('Variable "c_v_requirement" does not exist.', 20, $this->source); })()), "posteDescription", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coef_diplome</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_v_requirement"]) || array_key_exists("c_v_requirement", $context) ? $context["c_v_requirement"] : (function () { throw new RuntimeError('Variable "c_v_requirement" does not exist.', 24, $this->source); })()), "coefDiplome", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coef_xp</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_v_requirement"]) || array_key_exists("c_v_requirement", $context) ? $context["c_v_requirement"] : (function () { throw new RuntimeError('Variable "c_v_requirement" does not exist.', 28, $this->source); })()), "coefXp", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coef_adresse</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_v_requirement"]) || array_key_exists("c_v_requirement", $context) ? $context["c_v_requirement"] : (function () { throw new RuntimeError('Variable "c_v_requirement" does not exist.', 32, $this->source); })()), "coefAdresse", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_requirements_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_requirements_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["c_v_requirement"]) || array_key_exists("c_v_requirement", $context) ? $context["c_v_requirement"] : (function () { throw new RuntimeError('Variable "c_v_requirement" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "cv_requirements/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cv_requirements/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  144 => 39,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CVRequirements{% endblock %}

{% block body %}
    <h1>CVRequirements</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ c_v_requirement.id }}</td>
            </tr>
            <tr>
                <th>Date_envoie</th>
                <td>{{ c_v_requirement.dateEnvoie ? c_v_requirement.dateEnvoie|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Poste_description</th>
                <td>{{ c_v_requirement.posteDescription }}</td>
            </tr>
            <tr>
                <th>Coef_diplome</th>
                <td>{{ c_v_requirement.coefDiplome }}</td>
            </tr>
            <tr>
                <th>Coef_xp</th>
                <td>{{ c_v_requirement.coefXp }}</td>
            </tr>
            <tr>
                <th>Coef_adresse</th>
                <td>{{ c_v_requirement.coefAdresse }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_c_v_requirements_index') }}\">back to list</a>

    <a href=\"{{ path('app_c_v_requirements_edit', {'id': c_v_requirement.id}) }}\">edit</a>

    {{ include('cv_requirements/_delete_form.html.twig') }}
{% endblock %}
", "cv_requirements/show.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/cv_requirements/show.html.twig");
    }
}
