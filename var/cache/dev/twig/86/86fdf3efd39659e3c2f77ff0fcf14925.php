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

/* nationalite/show.html.twig */
class __TwigTemplate_c0c23b9becbcd31f6b2761eebe16704c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nationalite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nationalite/show.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "nationalite/show.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-\">
<div class=\"card\">
<div class=\"card-header\">
    <h1>Service</h1>
</div>
    
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 46
        $this->loadTemplate("footer_template.html.twig", "nationalite/show.html.twig", 46)->display($context);
        
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

        echo "Nationalite";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <h1>Nationalite</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nationalite"]) || array_key_exists("nationalite", $context) ? $context["nationalite"] : (function () { throw new RuntimeError('Variable "nationalite" does not exist.', 23, $this->source); })()), "getId", [], "method", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Des_nationalite</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nationalite"]) || array_key_exists("nationalite", $context) ? $context["nationalite"] : (function () { throw new RuntimeError('Variable "nationalite" does not exist.', 27, $this->source); })()), "getDesNationalite", [], "method", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nationalite_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nationalite_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["nationalite"]) || array_key_exists("nationalite", $context) ? $context["nationalite"] : (function () { throw new RuntimeError('Variable "nationalite" does not exist.', 34, $this->source); })()), "getId", [], "method", false, false, false, 34)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 36
        echo twig_include($this->env, $context, "nationalite/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "nationalite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  145 => 34,  140 => 32,  132 => 27,  125 => 23,  117 => 17,  107 => 16,  88 => 3,  78 => 46,  68 => 38,  66 => 16,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}

{% block title %}Nationalite{% endblock %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-\">
<div class=\"card\">
<div class=\"card-header\">
    <h1>Service</h1>
</div>
    
{% block body %}
    <h1>Nationalite</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ nationalite.getId() }}</td>
            </tr>
            <tr>
                <th>Des_nationalite</th>
                <td>{{ nationalite.getDesNationalite() }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_nationalite_index') }}\">back to list</a>

    <a href=\"{{ path('app_nationalite_edit', {'id': nationalite.getId()}) }}\">edit</a>

    {{ include('nationalite/_delete_form.html.twig') }}
{% endblock %}

</div>
</div>
</div>
</div>
</section>
</div>

{% include 'footer_template.html.twig' %}", "nationalite/show.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/nationalite/show.html.twig");
    }
}
