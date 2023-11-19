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

/* diplome/index.html.twig */
class __TwigTemplate_c6d30c94e5ed8709000d67c7bce4867d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diplome/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diplome/index.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "diplome/index.html.twig", 1)->display($context);
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
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "</div>table-bordered
</div>
</div>
</div>
</section>
</div>

";
        // line 52
        $this->loadTemplate("footer_template.html.twig", "diplome/index.html.twig", 52)->display($context);
        
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

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Des_diplome</th>
                <th>Niv_diplome</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diplomes"]) || array_key_exists("diplomes", $context) ? $context["diplomes"] : (function () { throw new RuntimeError('Variable "diplomes" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diplome"], "getDesDiplome", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
                <td style=\"text-align:right\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diplome"], "getNivDiplome", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
                <td style=\"text-align:center\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diplome_show", ["id_diplome" => twig_get_attribute($this->env, $this->source, $context["diplome"], "getId", [], "method", false, false, false, 29)]), "html", null, true);
            echo "\"><button class=\"btn btn-success\"><i class=\"nav-icon fas fa-file\"></i></button></a>
                </td>
                <td style=\"text-align:center\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diplome_edit", ["id_diplome" => twig_get_attribute($this->env, $this->source, $context["diplome"], "getId", [], "method", false, false, false, 32)]), "html", null, true);
            echo "\"><button class=\"btn btn-warning\"><i class=\"nav-icon fas fa-edit\"></i></button></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diplome_new");
        echo "\"><button class=\"btn btn-info\">Create new</button></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "diplome/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 43,  166 => 40,  157 => 36,  148 => 32,  142 => 29,  137 => 27,  133 => 26,  130 => 25,  125 => 24,  114 => 15,  104 => 14,  85 => 3,  75 => 52,  66 => 45,  64 => 14,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
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
    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Des_diplome</th>
                <th>Niv_diplome</th>
                <th colspan=\"2\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for diplome in diplomes %}
            <tr>
                <td>{{ diplome.getDesDiplome() }}</td>
                <td style=\"text-align:right\">{{ diplome.getNivDiplome() }}</td>
                <td style=\"text-align:center\">
                    <a href=\"{{ path('app_diplome_show', {'id_diplome': diplome.getId()}) }}\"><button class=\"btn btn-success\"><i class=\"nav-icon fas fa-file\"></i></button></a>
                </td>
                <td style=\"text-align:center\">
                    <a href=\"{{ path('app_diplome_edit', {'id_diplome': diplome.getId()}) }}\"><button class=\"btn btn-warning\"><i class=\"nav-icon fas fa-edit\"></i></button></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_diplome_new') }}\"><button class=\"btn btn-info\">Create new</button></a>
{% endblock %}
</div>table-bordered
</div>
</div>
</div>
</section>
</div>

{% include 'footer_template.html.twig' %}
", "diplome/index.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/diplome/index.html.twig");
    }
}
