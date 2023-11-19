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

/* cv_requirements/liste_candidats_cv.html.twig */
class __TwigTemplate_7b0dbcef03e1f2b4242d098a92ebe5f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_requirements/liste_candidats_cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_requirements/liste_candidats_cv.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "cv_requirements/liste_candidats_cv.html.twig", 1)->display($context);
        // line 3
        echo "

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">

<div class=\"row\">
          <div class=\"col-12\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Liste des candidats pour le poste</h3>

                <div class=\"card-tools\">
                  <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                    <input type=\"text\" name=\"table_search\" class=\"form-control float-right\" placeholder=\"Search\">

                    <div class=\"input-group-append\">
                      <button type=\"submit\" class=\"btn btn-default\">
                        <i class=\"fas fa-search\"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class=\"card-body table-responsive p-0\">
                <table class=\"table table-hover text-nowrap\">
                  <thead>
                    <tr>
                      <th>Utilisateur</th>
                      <th>Note</th>
                      <th colspan=\"2\" style=\"text-align:center\">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cvCandidats"]) || array_key_exists("cvCandidats", $context) ? $context["cvCandidats"] : (function () { throw new RuntimeError('Variable "cvCandidats" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cv_candidat"]) {
            // line 40
            echo "                    <tr>
                      <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cv_candidat"], "getUtilisateur", [], "method", false, false, false, 41), "getNomUtilisateur", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
                      <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cv_candidat"], "getNote", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
                      <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_candidat_by_candidat", ["idcandidat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cv_candidat"], "getUtilisateur", [], "method", false, false, false, 43), "getId", [], "method", false, false, false, 43)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-block btn-outline-info btn-sm\">Consulter CV</button></a></td>
                      <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_new", ["idcandidat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cv_candidat"], "getUtilisateur", [], "method", false, false, false, 44), "getId", [], "method", false, false, false, 44)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-block btn-outline-success btn-sm\">Embaucher</button></a></td>
                    </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cv_candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

</div>
</section>
</div>

";
        // line 60
        $this->loadTemplate("footer_template.html.twig", "cv_requirements/liste_candidats_cv.html.twig", 60)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cv_requirements/liste_candidats_cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  111 => 47,  102 => 44,  98 => 43,  94 => 42,  90 => 41,  87 => 40,  83 => 39,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}
{# {% block title %}Liste candidature pour le pose de {{ cvRequirement.getPosteDescription() }} {% endblock %} #}


<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">

<div class=\"row\">
          <div class=\"col-12\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Liste des candidats pour le poste</h3>

                <div class=\"card-tools\">
                  <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                    <input type=\"text\" name=\"table_search\" class=\"form-control float-right\" placeholder=\"Search\">

                    <div class=\"input-group-append\">
                      <button type=\"submit\" class=\"btn btn-default\">
                        <i class=\"fas fa-search\"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class=\"card-body table-responsive p-0\">
                <table class=\"table table-hover text-nowrap\">
                  <thead>
                    <tr>
                      <th>Utilisateur</th>
                      <th>Note</th>
                      <th colspan=\"2\" style=\"text-align:center\">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  {% for cv_candidat in cvCandidats %}
                    <tr>
                      <td>{{ cv_candidat.getUtilisateur().getNomUtilisateur() }}</td>
                      <td>{{ cv_candidat.getNote() }}</td>
                      <td><a href=\"{{ path('app_c_v_candidat_by_candidat', {'idcandidat': cv_candidat.getUtilisateur().getId()}) }}\"><button type=\"button\" class=\"btn btn-block btn-outline-info btn-sm\">Consulter CV</button></a></td>
                      <td><a href=\"{{ path('app_employe_new', {'idcandidat': cv_candidat.getUtilisateur().getId()}) }}\"><button type=\"button\" class=\"btn btn-block btn-outline-success btn-sm\">Embaucher</button></a></td>
                    </tr>
                   {% endfor %}
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

</div>
</section>
</div>

{% include 'footer_template.html.twig' %}
", "cv_requirements/liste_candidats_cv.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/cv_requirements/liste_candidats_cv.html.twig");
    }
}
