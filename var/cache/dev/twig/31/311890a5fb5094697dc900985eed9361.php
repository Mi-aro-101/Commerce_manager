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

/* conge/view_emp_conge.html.twig */
class __TwigTemplate_c7cf53902bc88705c94182a0f88f4508 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/view_emp_conge.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/view_emp_conge.html.twig"));

        // line 1
        $this->loadTemplate("header_client_template.html.twig", "conge/view_emp_conge.html.twig", 1)->display($context);
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
    <center><h1 style=\"font-family: Times New Roman\">Liste des demandes de conges</h1></center>
</div>

";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 57
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
        // line 69
        $this->loadTemplate("footer_client_template.html.twig", "conge/view_emp_conge.html.twig", 69)->display($context);
        
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

        echo "Demande de conges";
        
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
                <th>Date de debut de conge</th>
                <th>Date de fin de conge</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conges"]) || array_key_exists("conges", $context) ? $context["conges"] : (function () { throw new RuntimeError('Variable "conges" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conge"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "getEmploye", [], "method", false, false, false, 33), "getUtilisateur", [], "method", false, false, false, 33), "getNomUtilisateur", [], "method", false, false, false, 33), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "getEmploye", [], "method", false, false, false, 33), "getUtilisateur", [], "method", false, false, false, 33), "getPrenomUtilisateur", [], "method", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "getDateDebut", [], "method", false, false, false, 34), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "getDateFin", [], "method", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_accepter", ["idconge" => twig_get_attribute($this->env, $this->source, $context["conge"], "getId", [], "method", false, false, false, 37)]), "html", null, true);
            echo "\">
                        <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><ion-icon name=\"checkmark-sharp\"></ion-icon></button>
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_refuser", ["idconge" => twig_get_attribute($this->env, $this->source, $context["conge"], "getId", [], "method", false, false, false, 42)]), "html", null, true);
            echo "\">
                        <button type=\"button\" class=\"btn btn-block bg-gradient-danger\"><ion-icon name=\"close-sharp\"></ion-icon></button>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "            <tr>
                <td colspan=\"6\" style=\"text-align:center\">Il n'y a pas de demande de conge actuellement</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
    <center><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_calendrier");
        echo "\"><button type=\"button\" class=\"btn btn-block bg-gradient-info\">Voir le calendrier</button></a></center>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "conge/view_emp_conge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 54,  188 => 52,  179 => 48,  168 => 42,  160 => 37,  155 => 35,  151 => 34,  145 => 33,  142 => 32,  137 => 31,  120 => 16,  110 => 15,  91 => 3,  81 => 69,  67 => 57,  65 => 15,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_client_template.html.twig' %}

{% block title %}Demande de conges{% endblock %}
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-header\">
    <center><h1 style=\"font-family: Times New Roman\">Liste des demandes de conges</h1></center>
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
                <th>Date de debut de conge</th>
                <th>Date de fin de conge</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for conge in conges %}
            <tr>
                <td>{{ conge.getEmploye().getUtilisateur().getNomUtilisateur() }} {{ conge.getEmploye().getUtilisateur().getPrenomUtilisateur() }}</td>
                <td>{{ conge.getDateDebut()|date('Y-m-d') }}</td>
                <td>{{ conge.getDateFin()|date('Y-m-d') }}</td>
                <td>
                    <a href=\"{{ path('app_conge_accepter', { 'idconge': conge.getId() }) }}\">
                        <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><ion-icon name=\"checkmark-sharp\"></ion-icon></button>
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('app_conge_refuser', { 'idconge': conge.getId() }) }}\">
                        <button type=\"button\" class=\"btn btn-block bg-gradient-danger\"><ion-icon name=\"close-sharp\"></ion-icon></button>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\" style=\"text-align:center\">Il n'y a pas de demande de conge actuellement</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <center><a href=\"{{ path('app_conge_calendrier') }}\"><button type=\"button\" class=\"btn btn-block bg-gradient-info\">Voir le calendrier</button></a></center>

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
", "conge/view_emp_conge.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/conge/view_emp_conge.html.twig");
    }
}
