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

/* heure_suplementaire/employe.html.twig */
class __TwigTemplate_00eae9775a5b13d5ae0efc24ee0f1984 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "heure_suplementaire/employe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "heure_suplementaire/employe.html.twig"));

        // line 1
        $this->loadTemplate("header_client_template.html.twig", "heure_suplementaire/employe.html.twig", 1)->display($context);
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
    <center><h1 style=\"font-family: Times New Roman\">Liste des demandes d'heure suplementaire</h1></center>
</div>

";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 56
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
        // line 68
        $this->loadTemplate("footer_client_template.html.twig", "heure_suplementaire/employe.html.twig", 68)->display($context);
        
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

        echo "Demande de 'heure suplementaire";
        
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
                <th>Date de l'heure sup</th>
                <th>Duree</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["heuresups"]) || array_key_exists("heuresups", $context) ? $context["heuresups"] : (function () { throw new RuntimeError('Variable "heuresups" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["heuresup"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["heuresup"], "getEmploye", [], "method", false, false, false, 33), "getUtilisateur", [], "method", false, false, false, 33), "getNomUtilisateur", [], "method", false, false, false, 33), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["heuresup"], "getEmploye", [], "method", false, false, false, 33), "getUtilisateur", [], "method", false, false, false, 33), "getPrenomUtilisateur", [], "method", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heuresup"], "getDate", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heuresup"], "getDuree", [], "method", false, false, false, 35), "h:i"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accepter_heure_sup", ["id" => twig_get_attribute($this->env, $this->source, $context["heuresup"], "getId", [], "method", false, false, false, 37)]), "html", null, true);
            echo "\">
                        <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><ion-icon name=\"checkmark-sharp\"></ion-icon></button>
                    </a>
                </td>
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_refuser_heure_sup", ["id" => twig_get_attribute($this->env, $this->source, $context["heuresup"], "getId", [], "method", false, false, false, 42)]), "html", null, true);
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
                <td colspan=\"6\" style=\"text-align:center\">Il n'y a pas de demande d'heure supplementaire actuellement</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heuresup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "heure_suplementaire/employe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 52,  179 => 48,  168 => 42,  160 => 37,  155 => 35,  151 => 34,  145 => 33,  142 => 32,  137 => 31,  120 => 16,  110 => 15,  91 => 3,  81 => 68,  67 => 56,  65 => 15,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_client_template.html.twig' %}

{% block title %}Demande de 'heure suplementaire{% endblock %}
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-header\">
    <center><h1 style=\"font-family: Times New Roman\">Liste des demandes d'heure suplementaire</h1></center>
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
                <th>Date de l'heure sup</th>
                <th>Duree</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for heuresup in heuresups %}
            <tr>
                <td>{{ heuresup.getEmploye().getUtilisateur().getNomUtilisateur() }} {{ heuresup.getEmploye().getUtilisateur().getPrenomUtilisateur() }}</td>
                <td>{{ heuresup.getDate|date('Y-m-d') }}</td>
                <td>{{ heuresup.getDuree()|date('h:i') }}</td>
                <td>
                    <a href=\"{{ path('app_accepter_heure_sup', { 'id': heuresup.getId() }) }}\">
                        <button type=\"button\" class=\"btn btn-block bg-gradient-success\"><ion-icon name=\"checkmark-sharp\"></ion-icon></button>
                    </a>
                </td>
                <td>
                    <a href=\"{{ path('app_refuser_heure_sup', { 'id': heuresup.getId() }) }}\">
                        <button type=\"button\" class=\"btn btn-block bg-gradient-danger\"><ion-icon name=\"close-sharp\"></ion-icon></button>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\" style=\"text-align:center\">Il n'y a pas de demande d'heure supplementaire actuellement</td>
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
", "heure_suplementaire/employe.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/heure_suplementaire/employe.html.twig");
    }
}
