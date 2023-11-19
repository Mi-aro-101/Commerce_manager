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

/* annonce/nouvelle_annonce.html.twig */
class __TwigTemplate_5a7ef83efdb64b7ad8cd2516e9008311 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/nouvelle_annonce.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/nouvelle_annonce.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "annonce/nouvelle_annonce.html.twig", 1)->display($context);
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
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 216
        echo "    </div>

</div>
</section>
</div>

";
        // line 222
        $this->loadTemplate("footer_template.html.twig", "annonce/nouvelle_annonce.html.twig", 222)->display($context);
        
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

        echo "Generer une annonce";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "            <div class=\"col-md-6\">
                <div class=\"card card-primary\">
                    <div class=\"card-header\">
                        <h2 class=\"card-title\">CV Requis</h2>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Service </label>
                                    <select name=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 22, $this->source); })()), "service", [], "any", false, false, false, 22)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 23, $this->source); })()), "service", [], "any", false, false, false, 23)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 24
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Description Poste </label>
                                    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 32, $this->source); })()), "poste_description", [], "any", false, false, false, 32)), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Domaine </label>
                                     <select name=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 43, $this->source); })()), "domaine", [], "any", false, false, false, 43)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 44, $this->source); })()), "domaine", [], "any", false, false, false, 44)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 45
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                    </select>
                                </div>
                            </div>
                            ";
        // line 58
        echo "                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Date d'envoie </label>
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 66, $this->source); })()), "date_envoie", [], "any", false, false, false, 66), 'row', ["attr" => ["class" => "form-control", "id" => "exampleInputPassword1"]]);
        // line 68
        echo "
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Date de fin </label>
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 74, $this->source); })()), "date_fin", [], "any", false, false, false, 74), 'row', ["attr" => ["class" => "form-control", "id" => "exampleInputPassword1"]]);
        // line 76
        echo "
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Diplome </label>
                                    <select name=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 87, $this->source); })()), "diplome", [], "any", false, false, false, 87)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 88, $this->source); })()), "diplome", [], "any", false, false, false, 88)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 89
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient Diplome </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 97, $this->source); })()), "coef_diplome", [], "any", false, false, false, 97)), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Experience </label>
                                      <select name=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 109, $this->source); })()), "experience", [], "any", false, false, false, 109)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 110, $this->source); })()), "experience", [], "any", false, false, false, 110)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 111
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient Experience </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 119, $this->source); })()), "coef_xp", [], "any", false, false, false, 119)), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Adresse </label>
                                    <select name=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 130, $this->source); })()), "adresse", [], "any", false, false, false, 130)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 131, $this->source); })()), "adresse", [], "any", false, false, false, 131)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 132
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient Adresse </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 140, $this->source); })()), "coef_adresse", [], "any", false, false, false, 140)), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Sexe </label>
                                    <select name=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 151, $this->source); })()), "sexe", [], "any", false, false, false, 151)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 152, $this->source); })()), "sexe", [], "any", false, false, false, 152)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 153
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient Sexe </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 161, $this->source); })()), "coef_sexe", [], "any", false, false, false, 161)), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Situation matrimoniale </label>
                                     <select name=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 173, $this->source); })()), "matrimoniale", [], "any", false, false, false, 173)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 174, $this->source); })()), "matrimoniale", [], "any", false, false, false, 174)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 175
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient  </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 183, $this->source); })()), "coef_matrimoniale", [], "any", false, false, false, 183)), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Nationalite </label>
                                     <select name=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 195, $this->source); })()), "nationalite", [], "any", false, false, false, 195)), "html", null, true);
        echo "\" class=\"form-control\">
                                        ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 196, $this->source); })()), "nationalite", [], "any", false, false, false, 196)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 197
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient nationalite </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 205, $this->source); })()), "coef_nationalite", [], "any", false, false, false, 205)), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>
                     <center><button type=\"submit\" class=\"btn btn-primary\">";
        // line 210
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 210, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button></center>

                </div>
            </div>
    ";
        // line 214
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcv"]) || array_key_exists("formcv", $context) ? $context["formcv"] : (function () { throw new RuntimeError('Variable "formcv" does not exist.', 214, $this->source); })()), 'form_end');
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "annonce/nouvelle_annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 214,  468 => 210,  460 => 205,  452 => 199,  441 => 197,  437 => 196,  433 => 195,  418 => 183,  410 => 177,  399 => 175,  395 => 174,  391 => 173,  376 => 161,  368 => 155,  357 => 153,  353 => 152,  349 => 151,  335 => 140,  327 => 134,  316 => 132,  312 => 131,  308 => 130,  294 => 119,  286 => 113,  275 => 111,  271 => 110,  267 => 109,  252 => 97,  244 => 91,  233 => 89,  229 => 88,  225 => 87,  212 => 76,  210 => 74,  202 => 68,  200 => 66,  190 => 58,  185 => 47,  174 => 45,  170 => 44,  166 => 43,  152 => 32,  144 => 26,  133 => 24,  129 => 23,  125 => 22,  113 => 12,  103 => 11,  84 => 3,  74 => 222,  66 => 216,  64 => 11,  59 => 9,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}

{% block title %}Generer une annonce{% endblock %}

<div class=\"content-wrapper\" style=\"min-height: 1302.4px;\">

<section class=\"content\">
<div class=\"container-fluid\">
    {{ form_start(formcv) }}
    <div class=\"row\">
        {% block body %}
            <div class=\"col-md-6\">
                <div class=\"card card-primary\">
                    <div class=\"card-header\">
                        <h2 class=\"card-title\">CV Requis</h2>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Service </label>
                                    <select name=\"{{ field_name(formcv.service) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.service) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Description Poste </label>
                                    <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"{{ field_name(formcv.poste_description) }}\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Domaine </label>
                                     <select name=\"{{ field_name(formcv.domaine) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.domaine) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            {# <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Date d'envoie </label>
                                    {{ form_row(formcv.date_envoie, 
                                        {'attr': {'class':'form-control', 'id': 'exampleInputPassword1'}
                                    }) }}
                                </div>
                            </div> #}
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Date d'envoie </label>
                                    {{ form_row(formcv.date_envoie, 
                                        {'attr': {'class':'form-control', 'id': 'exampleInputPassword1'}
                                    }) }}
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                  <label> Date de fin </label>
                                    {{ form_row(formcv.date_fin, 
                                        {'attr': {'class':'form-control', 'id': 'exampleInputPassword1'}
                                    }) }}
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Diplome </label>
                                    <select name=\"{{ field_name(formcv.diplome) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.diplome) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient Diplome </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"{{ field_name(formcv.coef_diplome) }}\">
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Experience </label>
                                      <select name=\"{{ field_name(formcv.experience) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.experience) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient Experience </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"{{ field_name(formcv.coef_xp) }}\">
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Adresse </label>
                                    <select name=\"{{ field_name(formcv.adresse) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.adresse) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient Adresse </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"{{ field_name(formcv.coef_adresse) }}\">
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Sexe </label>
                                    <select name=\"{{ field_name(formcv.sexe) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.sexe) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient Sexe </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"{{ field_name(formcv.coef_sexe) }}\">
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Situation matrimoniale </label>
                                     <select name=\"{{ field_name(formcv.matrimoniale) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.matrimoniale) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient  </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"{{ field_name(formcv.coef_matrimoniale) }}\">
                                </div>
                            </div>
                        </div>
                    </div>   


                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                <label> Nationalite </label>
                                     <select name=\"{{ field_name(formcv.nationalite) }}\" class=\"form-control\">
                                        {% for label, value in field_choices(formcv.nationalite) %}
                                            <option value=\"{{ value }}\">{{ label }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label> Coefficient nationalite </label>                                 
                                    <input type=\"number\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"{{ field_name(formcv.coef_nationalite) }}\">
                                </div>
                            </div>
                        </div>
                    </div>
                     <center><button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button></center>

                </div>
            </div>
    {{ form_end(formcv) }}
        {% endblock %}
    </div>

</div>
</section>
</div>

{% include 'footer_template.html.twig' %}", "annonce/nouvelle_annonce.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/annonce/nouvelle_annonce.html.twig");
    }
}
