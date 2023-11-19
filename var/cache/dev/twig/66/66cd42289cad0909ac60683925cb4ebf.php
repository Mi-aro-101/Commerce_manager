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

/* matrimoniale/index.html.twig */
class __TwigTemplate_bc1f12d6c429625be2df7ab6904a02cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matrimoniale/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matrimoniale/index.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "matrimoniale/index.html.twig", 1)->display($context);
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-9\">
<div class=\"card\">
<div class=\"card-header\">
    <h1>Liste des situations matrimoniales</h1>
</div>

";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 58
        $this->loadTemplate("footer_template.html.twig", "matrimoniale/index.html.twig", 58)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Matrimoniale index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "   <center> <h1>Sexe index</h1> </center>
  

    <table class=\"table\">
        <thead>
            <tr>
                <th>Des_matrimoniale</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matrimoniales"]) || array_key_exists("matrimoniales", $context) ? $context["matrimoniales"] : (function () { throw new RuntimeError('Variable "matrimoniales" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["matrimoniale"]) {
            // line 31
            echo "            <tr>

                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matrimoniale"], "desMatrimoniale", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td style=\"text-align:center\">
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matrimoniale_show", ["id" => twig_get_attribute($this->env, $this->source, $context["matrimoniale"], "getId", [], "method", false, false, false, 35)]), "html", null, true);
            echo "\"><button class=\"btn btn-success\"><i class=\"nav-icon fas fa-file\"></i></button></a>
                </td style=\"text-align:center\">
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matrimoniale_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["matrimoniale"], "getId", [], "method", false, false, false, 38)]), "html", null, true);
            echo "\"><button class=\"btn btn-warning\"><i class=\"nav-icon fas fa-edit\"></i></button></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matrimoniale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matrimoniale_new");
        echo "\"><button class=\"btn btn-info\">Create new</button></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "matrimoniale/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 49,  169 => 46,  160 => 42,  151 => 38,  145 => 35,  140 => 33,  136 => 31,  131 => 30,  117 => 18,  107 => 17,  88 => 4,  78 => 58,  69 => 51,  67 => 17,  53 => 5,  51 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}


{% block title %}Matrimoniale index{% endblock %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-9\">
<div class=\"card\">
<div class=\"card-header\">
    <h1>Liste des situations matrimoniales</h1>
</div>

{% block body %}
   <center> <h1>Sexe index</h1> </center>
  

    <table class=\"table\">
        <thead>
            <tr>
                <th>Des_matrimoniale</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>

            </tr>
        </thead>
        <tbody>
        {% for matrimoniale in matrimoniales %}
            <tr>

                <td>{{ matrimoniale.desMatrimoniale }}</td>
                <td style=\"text-align:center\">
                    <a href=\"{{ path('app_matrimoniale_show', {'id': matrimoniale.getId()}) }}\"><button class=\"btn btn-success\"><i class=\"nav-icon fas fa-file\"></i></button></a>
                </td style=\"text-align:center\">
                <td>
                    <a href=\"{{ path('app_matrimoniale_edit', {'id': matrimoniale.getId()}) }}\"><button class=\"btn btn-warning\"><i class=\"nav-icon fas fa-edit\"></i></button></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_matrimoniale_new') }}\"><button class=\"btn btn-info\">Create new</button></a>
{% endblock %}
</div>
</div>
</div>
</div>
</section>
</div>

{% include 'footer_template.html.twig' %}", "matrimoniale/index.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/matrimoniale/index.html.twig");
    }
}
