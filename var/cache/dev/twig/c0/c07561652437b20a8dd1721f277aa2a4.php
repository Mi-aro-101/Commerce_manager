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

/* experience/index.html.twig */
class __TwigTemplate_cf40acfec0a37cae99a18230d28ab19a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience/index.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "experience/index.html.twig", 1)->display($context);
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
    <h1>Liste des diplomes</h1>
</div>

";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "
</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 56
        $this->loadTemplate("footer_template.html.twig", "experience/index.html.twig", 56)->display($context);
        
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

        echo "Service index";
        
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
        echo "    <center><h1>Experience index</h1></center>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Des_xp</th>
                <th>Niv_xp</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experiences"]) || array_key_exists("experiences", $context) ? $context["experiences"] : (function () { throw new RuntimeError('Variable "experiences" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "getDesXp", [], "method", false, false, false, 29), "html", null, true);
            echo "</td>
                <td style=\"text-align:right\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "getNivXp", [], "method", false, false, false, 30), "html", null, true);
            echo "</td>
                <td style=\"text-align:center\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_show", ["id" => twig_get_attribute($this->env, $this->source, $context["experience"], "getId", [], "method", false, false, false, 32)]), "html", null, true);
            echo "\"><button class=\"btn btn-success\"><i class=\"nav-icon fas fa-file\"></i></button></a>
                </td>
                <td style=\"text-align:center\">
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["experience"], "getId", [], "method", false, false, false, 35)]), "html", null, true);
            echo "\"><button class=\"btn btn-warning\"><i class=\"nav-icon fas fa-edit\"></i></button></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_new");
        echo "\"><button class=\"btn btn-info\">Create new</button></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "experience/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 46,  170 => 43,  161 => 39,  152 => 35,  146 => 32,  141 => 30,  137 => 29,  134 => 28,  129 => 27,  116 => 16,  106 => 15,  87 => 3,  77 => 56,  67 => 48,  65 => 15,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}

{% block title %}Service index{% endblock %}
<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-9\">
<div class=\"card\">
<div class=\"card-header\">
    <h1>Liste des diplomes</h1>
</div>

{% block body %}
    <center><h1>Experience index</h1></center>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Des_xp</th>
                <th>Niv_xp</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for experience in experiences %}
            <tr>
                <td>{{ experience.getDesXp() }}</td>
                <td style=\"text-align:right\">{{ experience.getNivXp() }}</td>
                <td style=\"text-align:center\">
                    <a href=\"{{ path('app_experience_show', {'id': experience.getId()}) }}\"><button class=\"btn btn-success\"><i class=\"nav-icon fas fa-file\"></i></button></a>
                </td>
                <td style=\"text-align:center\">
                    <a href=\"{{ path('app_experience_edit', {'id': experience.getId()}) }}\"><button class=\"btn btn-warning\"><i class=\"nav-icon fas fa-edit\"></i></button></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_experience_new') }}\"><button class=\"btn btn-info\">Create new</button></a>
{% endblock %}

</div>
</div>
</div>
</div>
</section>
</div>

{% include 'footer_template.html.twig' %}
", "experience/index.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/experience/index.html.twig");
    }
}
