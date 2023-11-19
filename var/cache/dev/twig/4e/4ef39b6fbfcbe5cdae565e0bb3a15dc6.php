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

/* employe/view_myemp.html.twig */
class __TwigTemplate_de8dc1ab55ed269fe4ca872450deb1fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/view_myemp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/view_myemp.html.twig"));

        // line 1
        $this->loadTemplate("header_client_template.html.twig", "employe/view_myemp.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-header\">
    <center><h1 style=\"font-family: Times New Roman\">Liste des mes employes</h1></center>
</div>

";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 59
        $this->loadTemplate("footer_client_template.html.twig", "employe/view_myemp.html.twig", 59)->display($context);
        
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

        echo "Mes employes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "<div class=\"card-body\">
<div id=\"example2_wrapper\" class=\"dataTables_wrapper dt-bootstrap4>
<div class=\"row\">
<div class=\"col-sm-12\">

    <table id=\"example2\" class=\"table table-bordered table-hover dataTable dtr-inline\" role=\"grid\" aria-describedby=\"example2_info\">
        <thead>
            <tr>
                <th>Nom et prenom(s)</th>
                <th>Date_embauche</th>
                <th>Cnaps</th>
                <th>Osti</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employe"], "getUtilisateur", [], "method", false, false, false, 33), "getNomUtilisateur", [], "method", false, false, false, 33), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employe"], "getUtilisateur", [], "method", false, false, false, 33), "getPrenomUtilisateur", [], "method", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["employe"], "dateEmbauche", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "dateEmbauche", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 35
            echo ((twig_get_attribute($this->env, $this->source, $context["employe"], "cnaps", [], "any", false, false, false, 35)) ? ("Oui") : ("Non"));
            echo "</td>
                <td>";
            // line 36
            echo ((twig_get_attribute($this->env, $this->source, $context["employe"], "osti", [], "any", false, false, false, 36)) ? ("Oui") : ("Non"));
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "            <tr>
                <td colspan=\"6\">Vous n'avez pas d'employe actuellement</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employe/view_myemp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 43,  167 => 39,  159 => 36,  155 => 35,  151 => 34,  145 => 33,  142 => 32,  137 => 31,  120 => 16,  110 => 15,  91 => 3,  81 => 59,  67 => 47,  65 => 15,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_client_template.html.twig' %}

{% block title %}Mes employes{% endblock %}
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-header\">
    <center><h1 style=\"font-family: Times New Roman\">Liste des mes employes</h1></center>
</div>

{% block body %}
<div class=\"card-body\">
<div id=\"example2_wrapper\" class=\"dataTables_wrapper dt-bootstrap4>
<div class=\"row\">
<div class=\"col-sm-12\">

    <table id=\"example2\" class=\"table table-bordered table-hover dataTable dtr-inline\" role=\"grid\" aria-describedby=\"example2_info\">
        <thead>
            <tr>
                <th>Nom et prenom(s)</th>
                <th>Date_embauche</th>
                <th>Cnaps</th>
                <th>Osti</th>
            </tr>
        </thead>
        <tbody>
        {% for employe in employes %}
            <tr>
                <td>{{ employe.getUtilisateur().getNomUtilisateur() }} {{ employe.getUtilisateur().getPrenomUtilisateur() }}</td>
                <td>{{ employe.dateEmbauche ? employe.dateEmbauche|date('Y-m-d') : '' }}</td>
                <td>{{ employe.cnaps ? 'Oui' : 'Non' }}</td>
                <td>{{ employe.osti ? 'Oui' : 'Non' }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">Vous n'avez pas d'employe actuellement</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>

{% include 'footer_client_template.html.twig' %}
", "employe/view_myemp.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/employe/view_myemp.html.twig");
    }
}
