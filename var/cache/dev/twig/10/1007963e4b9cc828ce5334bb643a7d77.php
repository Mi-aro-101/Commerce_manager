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

/* employe/index.html.twig */
class __TwigTemplate_dd704813c4fba758f46207a03efea2d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "employe/index.html.twig", 1)->display($context);
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
<div class=\"col-md-9\">
<div class=\"card\">
<div class=\"card-header\">
    <center><h1 style=\"font-family: Times New Roman\">Liste des employes</h1></center>
</div>

";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 62
        $this->loadTemplate("footer_template.html.twig", "employe/index.html.twig", 62)->display($context);
        
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

        echo "Employes";
        
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
        echo "
    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Nom et prenom(s)</th>
                <th>Date_embauche</th>
                <th>Superieur</th>
                <th>Cnaps</th>
                <th>Osti</th>
                <th colspan=\"2\" style=\"text-align:center\">actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context["i"] = 0;
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employe"], "getUtilisateur", [], "method", false, false, false, 32), "getNomUtilisateur", [], "method", false, false, false, 32), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employe"], "getUtilisateur", [], "method", false, false, false, 32), "getPrenomUtilisateur", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["employe"], "dateEmbauche", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "dateEmbauche", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["managers"]) || array_key_exists("managers", $context) ? $context["managers"] : (function () { throw new RuntimeError('Variable "managers" does not exist.', 34, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo ((twig_get_attribute($this->env, $this->source, $context["employe"], "cnaps", [], "any", false, false, false, 35)) ? ("Oui") : ("Non"));
            echo "</td>
                <td>";
            // line 36
            echo ((twig_get_attribute($this->env, $this->source, $context["employe"], "osti", [], "any", false, false, false, 36)) ? ("Oui") : ("Non"));
            echo "</td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_fiche", ["id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">fiche de paie</a>
                </td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
            ";
            // line 44
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 44, $this->source); })()) + 1);
            // line 45
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 50,  184 => 46,  179 => 45,  177 => 44,  171 => 41,  165 => 38,  160 => 36,  156 => 35,  152 => 34,  148 => 33,  142 => 32,  139 => 31,  133 => 30,  131 => 29,  116 => 16,  106 => 15,  87 => 3,  77 => 62,  67 => 54,  65 => 15,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}

{% block title %}Employes{% endblock %}
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-9\">
<div class=\"card\">
<div class=\"card-header\">
    <center><h1 style=\"font-family: Times New Roman\">Liste des employes</h1></center>
</div>

{% block body %}

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Nom et prenom(s)</th>
                <th>Date_embauche</th>
                <th>Superieur</th>
                <th>Cnaps</th>
                <th>Osti</th>
                <th colspan=\"2\" style=\"text-align:center\">actions</th>
            </tr>
        </thead>
        <tbody>
        {% set i = 0 %}
        {% for employe in employes %}
            <tr>
                <td>{{ employe.getUtilisateur().getNomUtilisateur() }} {{ employe.getUtilisateur().getPrenomUtilisateur() }}</td>
                <td>{{ employe.dateEmbauche ? employe.dateEmbauche|date('Y-m-d') : '' }}</td>
                <td>{{ managers[i] }}</td>
                <td>{{ employe.cnaps ? 'Oui' : 'Non' }}</td>
                <td>{{ employe.osti ? 'Oui' : 'Non' }}</td>
                <td>
                    <a href=\"{{ path('app_employe_fiche', {'id': employe.id}) }}\">fiche de paie</a>
                </td>
                <td>
                    <a href=\"{{ path('app_employe_edit', {'id': employe.id}) }}\">edit</a>
                </td>
            </tr>
            {% set i = i+1 %}
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}

</div>
</div>
</div>
</div>
</section>
</div>

{% include 'footer_template.html.twig' %}
", "employe/index.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/employe/index.html.twig");
    }
}
