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

/* cv_requirements/index.html.twig */
class __TwigTemplate_fa4cac7c3a5bc458dc0d49175d2f3d25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_requirements/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_requirements/index.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "cv_requirements/index.html.twig", 1)->display($context);
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
    <h1>CVRequirements index</h1>
</div>
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
</div>
</div>
</div>
</div>
</section>
</div>

";
        // line 88
        $this->loadTemplate("footer_template.html.twig", "cv_requirements/index.html.twig", 88)->display($context);
        
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

        echo "CVRequirements index";
        
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
                <th>Date d'envoie</th>
                <th>Date fin</th>
                <th>Poste_description</th>
                <th>Service</th>
                <th>Domaine</th>
                <th>Diplome</th>
                <th>Coef_diplome</th>
                <th>Experience</th>
                <th>Coef_xp</th>
                <th>Adresse</th>
                <th>Coef_adresse</th>
                <th>Sexe</th>
                <th>Coef_Sexe</th>
                <th>Nationalite</th>
                <th>Coef_Nationalite</th>
                <th>Matrimoniale</th>
                <th>Coef_Matrimoniale</th>
                <th colspan=\"3\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["c_v_requirements"]) || array_key_exists("c_v_requirements", $context) ? $context["c_v_requirements"] : (function () { throw new RuntimeError('Variable "c_v_requirements" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["c_v_requirement"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "dateEnvoie", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "dateEnvoie", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "dateEnvoie", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "dateFin", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "posteDescription", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "service", [], "any", false, false, false, 46), "getDesService", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "domaine", [], "any", false, false, false, 47), "getDesDomaine", [], "method", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "diplome", [], "any", false, false, false, 48), "getDesDiplome", [], "method", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "coefDiplome", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "experience", [], "any", false, false, false, 50), "getDesXp", [], "method", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "coefXp", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "adresse", [], "any", false, false, false, 52), "getDesAdresse", [], "method", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "coefAdresse", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "sexe", [], "any", false, false, false, 54), "getDesSexe", [], "method", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "coefSexe", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "nationalite", [], "any", false, false, false, 56), "getDesNationalite", [], "method", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "coefNationalite", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "matrimoniale", [], "any", false, false, false, 58), "getDesMatrimoniale", [], "method", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "coefMatrimoniale", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_requirements_show", ["id" => twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">show</a>
                </td>
                <td>
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test_aptitude_new", ["id" => twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">create a Test_aptitude</a>
                </td>
                <td>
                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_requirements_liste_candidat_cv", ["id" => twig_get_attribute($this->env, $this->source, $context["c_v_requirement"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Liste candidature</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_v_requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_requirements_new");
        echo "\"><button class=\"btn btn-info\">Create new</button></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cv_requirements/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 78,  250 => 75,  241 => 71,  232 => 67,  226 => 64,  220 => 61,  215 => 59,  211 => 58,  207 => 57,  203 => 56,  199 => 55,  195 => 54,  191 => 53,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  171 => 48,  167 => 47,  163 => 46,  159 => 45,  155 => 44,  151 => 43,  148 => 42,  143 => 41,  116 => 16,  106 => 15,  87 => 3,  77 => 88,  67 => 80,  65 => 15,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}

{% block title %}CVRequirements index{% endblock %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-\">
<div class=\"card\">
<div class=\"card-header\">
    <h1>CVRequirements index</h1>
</div>
{% block body %}

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Date d'envoie</th>
                <th>Date fin</th>
                <th>Poste_description</th>
                <th>Service</th>
                <th>Domaine</th>
                <th>Diplome</th>
                <th>Coef_diplome</th>
                <th>Experience</th>
                <th>Coef_xp</th>
                <th>Adresse</th>
                <th>Coef_adresse</th>
                <th>Sexe</th>
                <th>Coef_Sexe</th>
                <th>Nationalite</th>
                <th>Coef_Nationalite</th>
                <th>Matrimoniale</th>
                <th>Coef_Matrimoniale</th>
                <th colspan=\"3\" style=\"text-align:center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for c_v_requirement in c_v_requirements %}
            <tr>
                <td>{{ c_v_requirement.dateEnvoie ? c_v_requirement.dateEnvoie|date('Y-m-d') : '' }}</td>
                <td>{{ c_v_requirement.dateEnvoie ? c_v_requirement.dateFin|date('Y-m-d') : '' }}</td>
                <td>{{ c_v_requirement.posteDescription }}</td>
                <td>{{ c_v_requirement.service.getDesService() }}</td>
                <td>{{ c_v_requirement.domaine.getDesDomaine() }}</td>
                <td>{{ c_v_requirement.diplome.getDesDiplome() }}</td>
                <td>{{ c_v_requirement.coefDiplome }}</td>
                <td>{{ c_v_requirement.experience.getDesXp() }}</td>
                <td>{{ c_v_requirement.coefXp }}</td>
                <td>{{ c_v_requirement.adresse.getDesAdresse() }}</td>
                <td>{{ c_v_requirement.coefAdresse }}</td>
                <td>{{ c_v_requirement.sexe.getDesSexe() }}</td>
                <td>{{ c_v_requirement.coefSexe }}</td>
                <td>{{ c_v_requirement.nationalite.getDesNationalite() }}</td>
                <td>{{ c_v_requirement.coefNationalite }}</td>
                <td>{{ c_v_requirement.matrimoniale.getDesMatrimoniale() }}</td>
                <td>{{ c_v_requirement.coefMatrimoniale }}</td>
                <td>
                    <a href=\"{{ path('app_c_v_requirements_show', {'id': c_v_requirement.id}) }}\">show</a>
                </td>
                <td>
                    <a href=\"{{ path('app_test_aptitude_new', {'id': c_v_requirement.id}) }}\">create a Test_aptitude</a>
                </td>
                <td>
                    <a href=\"{{ path('app_c_v_requirements_liste_candidat_cv', {'id': c_v_requirement.id}) }}\">Liste candidature</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_c_v_requirements_new') }}\"><button class=\"btn btn-info\">Create new</button></a>
{% endblock %}

</div>
</div>
</div>
</div>
</section>
</div>

{% include 'footer_template.html.twig' %}
", "cv_requirements/index.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/cv_requirements/index.html.twig");
    }
}
