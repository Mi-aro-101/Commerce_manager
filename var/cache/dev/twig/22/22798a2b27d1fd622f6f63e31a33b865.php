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

/* cv_candidat/liste_annonce.html.twig */
class __TwigTemplate_1e2b928a063211a5f3c652bedd24377a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_candidat/liste_annonce.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_candidat/liste_annonce.html.twig"));

        // line 1
        $this->loadTemplate("header_client_template.html.twig", "cv_candidat/liste_annonce.html.twig", 1)->display($context);
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
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-header\">
    <h1>Liste d'annonce</h1>
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
</section>
</div>

";
        // line 55
        $this->loadTemplate("footer_client_template.html.twig", "cv_candidat/liste_annonce.html.twig", 55)->display($context);
        
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

        echo "Liste des annonce disponible";
        
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
        echo "     <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Date fin de depot</th> 
                <th>Poste_description</th>
                <th>Diplome requis</th>
                <th>Experience minimum</th>
                <th colspan=\"2\" style=\"text-align:center\">Action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context["i"] = 0;
        // line 28
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_v_disponibles"]) || array_key_exists("c_v_disponibles", $context) ? $context["c_v_disponibles"] : (function () { throw new RuntimeError('Variable "c_v_disponibles" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cv"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cv"], "getDateFin", [], "method", false, false, false, 30), "Y-m-d"), "html", null, true);
            echo "</td> 
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cv"], "getPosteDescription", [], "method", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cv"], "diplome", [], "any", false, false, false, 32), "getDesDiplome", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cv"], "experience", [], "any", false, false, false, 33), "getDesXp", [], "method", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_candidat_new", ["id" => twig_get_attribute($this->env, $this->source, $context["cv"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Envoyer mon cv</a>
                </td>
                <td>
                    ";
            // line 39
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 39, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 39, $this->source); })()), [], "array", false, false, false, 39);
            echo "
                </td>
            </tr>
            ";
            // line 42
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 42, $this->source); })()) + 1);
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
     </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cv_candidat/liste_annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 44,  171 => 43,  169 => 42,  162 => 39,  156 => 35,  151 => 33,  147 => 32,  143 => 31,  139 => 30,  136 => 29,  131 => 28,  129 => 27,  116 => 16,  106 => 15,  87 => 3,  77 => 55,  67 => 47,  65 => 15,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_client_template.html.twig' %}

{% block title %}Liste des annonce disponible{% endblock %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-header\">
    <h1>Liste d'annonce</h1>
</div>
{% block body %}
     <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Date fin de depot</th> 
                <th>Poste_description</th>
                <th>Diplome requis</th>
                <th>Experience minimum</th>
                <th colspan=\"2\" style=\"text-align:center\">Action</th>
            </tr>
        </thead>
        <tbody>
        {% set i = 0 %}
        {% for cv in c_v_disponibles %}
            <tr>
                <td>{{ cv.getDateFin()|date('Y-m-d') }}</td> 
                <td>{{ cv.getPosteDescription() }}</td>
                <td>{{ cv.diplome.getDesDiplome() }}</td>
                <td>{{ cv.experience.getDesXp() }}</td>
                <td>
                    <a href=\"{{ path('app_c_v_candidat_new', {'id': cv.id}) }}\">Envoyer mon cv</a>
                </td>
                <td>
                    {# <a href=\"{{ path('app_test_resultat_new', {'id': cv.id}) }}\">test-aptidude</a> #}
                    {{ links[i] | raw }}
                </td>
            </tr>
            {% set i = i+1 %}
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

{% include 'footer_client_template.html.twig' %}
", "cv_candidat/liste_annonce.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/cv_candidat/liste_annonce.html.twig");
    }
}
