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

/* cv_candidat/show_candidat.html.twig */
class __TwigTemplate_f0511766f0aa52399d5ab85530476430 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_candidat/show_candidat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv_candidat/show_candidat.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "cv_candidat/show_candidat.html.twig", 1)->display($context);
        // line 3
        echo "

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">

        <div class=\"col-sm-6\">
            <h1>Domaine : <strong>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cvCandidat"]) || array_key_exists("cvCandidat", $context) ? $context["cvCandidat"] : (function () { throw new RuntimeError('Variable "cvCandidat" does not exist.', 11, $this->source); })()), "getDomaine", [], "method", false, false, false, 11), "getDesDomaine", [], "method", false, false, false, 11), "html", null, true);
        echo "</strong></h1>
          </div><br>
<div class=\"row\">


          <div class=\"col-6\">
            <div class=\"card card-row card-default\">

              <div class=\"card-header bg-info\">
                <h3 class=\"card-title\">
                  Information <strong>personnelle</strong>
                </h3>
              </div>

              <div class=\"card-body\">
                <div class=\"card-info card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Nom et prenom</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cvCandidat"]) || array_key_exists("cvCandidat", $context) ? $context["cvCandidat"] : (function () { throw new RuntimeError('Variable "cvCandidat" does not exist.', 31, $this->source); })()), "getUtilisateur", [], "method", false, false, false, 31), "getNomUtilisateur", [], "method", false, false, false, 31), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cvCandidat"]) || array_key_exists("cvCandidat", $context) ? $context["cvCandidat"] : (function () { throw new RuntimeError('Variable "cvCandidat" does not exist.', 31, $this->source); })()), "getUtilisateur", [], "method", false, false, false, 31), "getPrenomUtilisateur", [], "method", false, false, false, 31), "html", null, true);
        echo "</strong></h5>
                  </div>
                </div>

                <div class=\"card-info card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Sexe</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cvCandidat"]) || array_key_exists("cvCandidat", $context) ? $context["cvCandidat"] : (function () { throw new RuntimeError('Variable "cvCandidat" does not exist.', 40, $this->source); })()), "getSexe", [], "method", false, false, false, 40), "getDesSexe", [], "method", false, false, false, 40), "html", null, true);
        echo "</strong></h5>
                  </div>
                </div>

                <div class=\"card-info card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Nationalite</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cvCandidat"]) || array_key_exists("cvCandidat", $context) ? $context["cvCandidat"] : (function () { throw new RuntimeError('Variable "cvCandidat" does not exist.', 49, $this->source); })()), "getNationalite", [], "method", false, false, false, 49), "getDesNationalite", [], "method", false, false, false, 49), "html", null, true);
        echo "</strong></h5>
                  </div>
                </div>

                <div class=\"card-info card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Situation matrimoniale</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cvCandidat"]) || array_key_exists("cvCandidat", $context) ? $context["cvCandidat"] : (function () { throw new RuntimeError('Variable "cvCandidat" does not exist.', 58, $this->source); })()), "getMatrimoniale", [], "method", false, false, false, 58), "getDesMatrimoniale", [], "method", false, false, false, 58), "html", null, true);
        echo "</strong></h5>
                  </div>
                </div>

              </div>

            </div>
          </div>

          <div class=\"col-6\">

            <div class=\"card card-row card-primary\">

              <div class=\"card-header bg-primary\">
                <h3 class=\"card-title\">
                  Information <strong>professionnelle</strong>
                </h3>
              </div>

              <div class=\"card-body\">
                <div class=\"card-primary card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Diplome</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cvCandidat"]) || array_key_exists("cvCandidat", $context) ? $context["cvCandidat"] : (function () { throw new RuntimeError('Variable "cvCandidat" does not exist.', 83, $this->source); })()), "getDiplome", [], "method", false, false, false, 83), "getDesDiplome", [], "method", false, false, false, 83), "html", null, true);
        echo "</strong></h5>
                  </div>
                </div>

                <div class=\"card-primary card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Experience dans le domaine</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cvCandidat"]) || array_key_exists("cvCandidat", $context) ? $context["cvCandidat"] : (function () { throw new RuntimeError('Variable "cvCandidat" does not exist.', 92, $this->source); })()), "getExperience", [], "method", false, false, false, 92), "getDesXp", [], "method", false, false, false, 92), "html", null, true);
        echo "</strong></h5>
                  </div>
                </div>

                <div class=\"card-primary card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Situation par rapport au lieu de travail</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cvCandidat"]) || array_key_exists("cvCandidat", $context) ? $context["cvCandidat"] : (function () { throw new RuntimeError('Variable "cvCandidat" does not exist.', 101, $this->source); })()), "getAdresse", [], "method", false, false, false, 101), "getDesAdresse", [], "method", false, false, false, 101), "html", null, true);
        echo "</strong></h5>
                  </div>
                </div>

              </div>

            </div>

          </div>

          <div class=\"col-12\">
          <center>";
        // line 112
        echo (isset($context["validButton"]) || array_key_exists("validButton", $context) ? $context["validButton"] : (function () { throw new RuntimeError('Variable "validButton" does not exist.', 112, $this->source); })());
        echo "</center>
          </div>
            ";
        // line 161
        echo "            <!-- /.card -->

</div>
</div>
</section>
</div>

";
        // line 168
        $this->loadTemplate("footer_template.html.twig", "cv_candidat/show_candidat.html.twig", 168)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cv_candidat/show_candidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 168,  187 => 161,  182 => 112,  168 => 101,  156 => 92,  144 => 83,  116 => 58,  104 => 49,  92 => 40,  78 => 31,  55 => 11,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}
{# {% block title %}Liste candidature pour le pose de {{ cvRequirement.getPosteDescription() }} {% endblock %} #}


<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">

        <div class=\"col-sm-6\">
            <h1>Domaine : <strong>{{ cvCandidat.getDomaine().getDesDomaine() }}</strong></h1>
          </div><br>
<div class=\"row\">


          <div class=\"col-6\">
            <div class=\"card card-row card-default\">

              <div class=\"card-header bg-info\">
                <h3 class=\"card-title\">
                  Information <strong>personnelle</strong>
                </h3>
              </div>

              <div class=\"card-body\">
                <div class=\"card-info card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Nom et prenom</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>{{ cvCandidat.getUtilisateur().getNomUtilisateur() }} {{ cvCandidat.getUtilisateur().getPrenomUtilisateur() }}</strong></h5>
                  </div>
                </div>

                <div class=\"card-info card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Sexe</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>{{ cvCandidat.getSexe().getDesSexe() }}</strong></h5>
                  </div>
                </div>

                <div class=\"card-info card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Nationalite</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>{{ cvCandidat.getNationalite().getDesNationalite() }}</strong></h5>
                  </div>
                </div>

                <div class=\"card-info card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Situation matrimoniale</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>{{ cvCandidat.getMatrimoniale().getDesMatrimoniale() }}</strong></h5>
                  </div>
                </div>

              </div>

            </div>
          </div>

          <div class=\"col-6\">

            <div class=\"card card-row card-primary\">

              <div class=\"card-header bg-primary\">
                <h3 class=\"card-title\">
                  Information <strong>professionnelle</strong>
                </h3>
              </div>

              <div class=\"card-body\">
                <div class=\"card-primary card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Diplome</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>{{ cvCandidat.getDiplome().getDesDiplome() }}</strong></h5>
                  </div>
                </div>

                <div class=\"card-primary card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Experience dans le domaine</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>{{ cvCandidat.getExperience().getDesXp() }}</strong></h5>
                  </div>
                </div>

                <div class=\"card-primary card-outline\">
                  <div class=\"card-header\">
                      <h5 class=\"card-title\">Situation par rapport au lieu de travail</h5>
                  </div>
                  <div class=\"card-body\">
                    <h5><strong>{{ cvCandidat.getAdresse().getDesAdresse() }}</strong></h5>
                  </div>
                </div>

              </div>

            </div>

          </div>

          <div class=\"col-12\">
          <center>{{ validButton|raw }}</center>
          </div>
            {# <div class=\"card card-success\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Detail du candidat <strong>{{ cvCandidat.getUtilisateur().getNomUtilisateur() }} {{ cvCandidat.getUtilisateur().getPrenomUtilisateur() }}</strong></h3>

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
                      <th>Diplome</th>
                      <th>Experience</th>
                      <th>Sexe</th>
                      <th>Nationalite</th>
                      <th>Adresse</th>
                      <th>Situation matrimoniale</th>
                      <th>Date de depot</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ cvCandidat.getUtilisateur().getNomUtilisateur() }} {{ cvCandidat.getUtilisateur().getPrenomUtilisateur() }}</td>
                      <td>{{ cvCandidat.getDiplome().getDesDiplome() }}</td>
                      <td>{{ cvCandidat.getExperience().getDesXp() }}</td>
                      <td>{{ cvCandidat.getSexe().getDesSexe() }}</td>
                      <td>{{ cvCandidat.getNationalite().getDesNationalite() }}</td>
                      <td>{{ cvCandidat.getAdresse().getDesAdresse() }}</td>
                      <td>{{ cvCandidat.getMatrimoniale().getDesMatrimoniale() }}</td>
                      <td>{{ cvCandidat.getDateDepot()|date('Y-m-d') }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div> #}
            <!-- /.card -->

</div>
</div>
</section>
</div>

{% include 'footer_template.html.twig' %}
", "cv_candidat/show_candidat.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/cv_candidat/show_candidat.html.twig");
    }
}
