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

/* test_aptitude/new.html.twig */
class __TwigTemplate_b9365051678da238f0c5a95faa336d67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_aptitude/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test_aptitude/new.html.twig"));

        // line 1
        $this->loadTemplate("header_template.html.twig", "test_aptitude/new.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content-wrapper\" style=\"min-height : 1345.6px\">
    <section class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card card-success\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\"> Generer test d'aptitude </h3>
                        </div>
                        <div class=\"card-body\">

                        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script>

document.addEventListener('DOMContentLoaded', function() {
    const addButton = document.getElementById('add-section');

    addButton.addEventListener('click', function() {
        const sectionsContainer = document.getElementById('sections');
        const sectionIndex = sectionsContainer.children.length;

        // Create a new section container
        const newSectionContainer = document.createElement('div');
        newSectionContainer.classList.add('row');

        // Add new section HTML
        newSectionContainer.innerHTML = `
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label> Question </label>
                    <input type=\"text\" class=\"form-control\" name=\"test_aptitude[sections][\${sectionIndex}][des_question]\">
                </div>
                <div class=\"form-group\">
                    <label> Coefficient section </label>
                    <input type=\"number\" class=\"form-control\" name=\"test_aptitude[sections][\${sectionIndex}][coef_section]\">
                </div>
            </div>
            <div class=\"reponse-sections\"></div>
        `;

        // Append the new section container
        sectionsContainer.appendChild(newSectionContainer);

        // Add response section button and handler
        const addResponseButton = document.createElement('button');
        addResponseButton.type = 'button';
        addResponseButton.classList.add('add-response');
        addResponseButton.textContent = 'Add a Response Section';

        newSectionContainer.appendChild(addResponseButton);

        addResponseButton.addEventListener('click', function() {
            const responseSectionsContainer = newSectionContainer.querySelector('.reponse-sections');
            const responseSectionIndex = responseSectionsContainer.children.length;

            const newResponseSection = document.createElement('div');
            newResponseSection.classList.add('col-sm-12');

            newResponseSection.innerHTML = `
                <div class=\"form-group\">
                    <label> Reponse </label>
                    <input type=\"text\" class=\"form-control\" name=\"test_aptitude[sections][\${sectionIndex}][reponseSections][\${responseSectionIndex}][des_reponse]\">
                </div>
                <div class=\"form-group\">
                    <label> Est vrai </label>
                    <input type=\"checkbox\" class=\"form-control\" name=\"test_aptitude[sections][\${sectionIndex}][reponseSections][\${responseSectionIndex}][is_true]\">
                </div>
            `;

            responseSectionsContainer.appendChild(newResponseSection);
        });
    });
});



</script>

";
        // line 138
        $this->loadTemplate("footer_template.html.twig", "test_aptitude/new.html.twig", 138)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "
                        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

                                <div id=\"sections\">
                                    <div class=\"row\">
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "sections", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 21
            echo "                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label> Question </label>
                                                <input type=\"text\" class=\"form-control\" name=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, $context["section"], "des_question", [], "any", false, false, false, 24)), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label> Coefficient section </label>
                                                <input type=\"number\" class=\"form-control\" name=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, $context["section"], "coef_section", [], "any", false, false, false, 28)), "html", null, true);
            echo "\">
                                            </div>
                                            ";
            // line 32
            echo "                                        </div>
                                                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "reponseSections", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 34
                echo "                                            <div class=\"reponse-sections\">
                                                <div class=\"col-sm-12\">
                                                    <div class=\"form-group\">
                                                        <label> Reponse </label>
                                                        <input type=\"text\" class=\"form-control\" name=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, $context["reponse"], "des_reponse", [], "any", false, false, false, 38)), "html", null, true);
                echo "\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <div class=\"col-sm-4\">
                                                            <label> Est vrai </label>
                                                            <input type=\"checkbox\" class=\"form-control\" name=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, $context["reponse"], "is_true", [], "any", false, false, false, 43)), "html", null, true);
                echo "\">
                                                        </div>
                                                    </div>
                                                    ";
                // line 48
                echo "                                                </div>
                                            </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                    </div>
                                </div>

                            <input type=\"hidden\" name=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "cv_requirements", [], "any", false, false, false, 55)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cv_requirements"]) || array_key_exists("cv_requirements", $context) ? $context["cv_requirements"] : (function () { throw new RuntimeError('Variable "cv_requirements" does not exist.', 55, $this->source); })()), "getId", [], "method", false, false, false, 55), "html", null, true);
        echo "\" />

                            <button type=\"button\" id=\"add-section\">Add Section</button>
                            <button type=\"submit\" id=\"save-section\">Save</button>

                        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "

                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "test_aptitude/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 60,  239 => 55,  234 => 52,  228 => 51,  220 => 48,  214 => 43,  206 => 38,  200 => 34,  196 => 33,  193 => 32,  188 => 28,  181 => 24,  176 => 21,  172 => 20,  165 => 16,  162 => 15,  152 => 14,  142 => 138,  72 => 71,  62 => 63,  60 => 14,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_template.html.twig' %}

<div class=\"content-wrapper\" style=\"min-height : 1345.6px\">
    <section class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card card-success\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\"> Generer test d'aptitude </h3>
                        </div>
                        <div class=\"card-body\">

                        {% block body %}

                        {{ form_start(form) }}

                                <div id=\"sections\">
                                    <div class=\"row\">
                                    {% for section in form.sections %}
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label> Question </label>
                                                <input type=\"text\" class=\"form-control\" name=\"{{ field_name(section.des_question) }}\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label> Coefficient section </label>
                                                <input type=\"number\" class=\"form-control\" name=\"{{ field_name(section.coef_section) }}\">
                                            </div>
                                            {# {{ form_row(section.des_question) }}
                                            {{ form_row(section.coef_section) }} #}
                                        </div>
                                                {% for reponse in section.reponseSections %}
                                            <div class=\"reponse-sections\">
                                                <div class=\"col-sm-12\">
                                                    <div class=\"form-group\">
                                                        <label> Reponse </label>
                                                        <input type=\"text\" class=\"form-control\" name=\"{{ field_name(reponse.des_reponse) }}\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <div class=\"col-sm-4\">
                                                            <label> Est vrai </label>
                                                            <input type=\"checkbox\" class=\"form-control\" name=\"{{ field_name(reponse.is_true) }}\">
                                                        </div>
                                                    </div>
                                                    {# {{ form_row(reponse.des_reponse) }}
                                                    {{ form_row(reponse.is_true) }} #}
                                                </div>
                                            </div>
                                            {% endfor %}
                                    {% endfor %}
                                    </div>
                                </div>

                            <input type=\"hidden\" name=\"{{ field_name(form.cv_requirements) }}\" value=\"{{ cv_requirements.getId() }}\" />

                            <button type=\"button\" id=\"add-section\">Add Section</button>
                            <button type=\"submit\" id=\"save-section\">Save</button>

                        {{ form_end(form) }}

                        {% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src=\"{{ asset('dist/js/jquery.js') }}\"></script>
<script>

document.addEventListener('DOMContentLoaded', function() {
    const addButton = document.getElementById('add-section');

    addButton.addEventListener('click', function() {
        const sectionsContainer = document.getElementById('sections');
        const sectionIndex = sectionsContainer.children.length;

        // Create a new section container
        const newSectionContainer = document.createElement('div');
        newSectionContainer.classList.add('row');

        // Add new section HTML
        newSectionContainer.innerHTML = `
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <label> Question </label>
                    <input type=\"text\" class=\"form-control\" name=\"test_aptitude[sections][\${sectionIndex}][des_question]\">
                </div>
                <div class=\"form-group\">
                    <label> Coefficient section </label>
                    <input type=\"number\" class=\"form-control\" name=\"test_aptitude[sections][\${sectionIndex}][coef_section]\">
                </div>
            </div>
            <div class=\"reponse-sections\"></div>
        `;

        // Append the new section container
        sectionsContainer.appendChild(newSectionContainer);

        // Add response section button and handler
        const addResponseButton = document.createElement('button');
        addResponseButton.type = 'button';
        addResponseButton.classList.add('add-response');
        addResponseButton.textContent = 'Add a Response Section';

        newSectionContainer.appendChild(addResponseButton);

        addResponseButton.addEventListener('click', function() {
            const responseSectionsContainer = newSectionContainer.querySelector('.reponse-sections');
            const responseSectionIndex = responseSectionsContainer.children.length;

            const newResponseSection = document.createElement('div');
            newResponseSection.classList.add('col-sm-12');

            newResponseSection.innerHTML = `
                <div class=\"form-group\">
                    <label> Reponse </label>
                    <input type=\"text\" class=\"form-control\" name=\"test_aptitude[sections][\${sectionIndex}][reponseSections][\${responseSectionIndex}][des_reponse]\">
                </div>
                <div class=\"form-group\">
                    <label> Est vrai </label>
                    <input type=\"checkbox\" class=\"form-control\" name=\"test_aptitude[sections][\${sectionIndex}][reponseSections][\${responseSectionIndex}][is_true]\">
                </div>
            `;

            responseSectionsContainer.appendChild(newResponseSection);
        });
    });
});



</script>

{% include 'footer_template.html.twig' %}", "test_aptitude/new.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/test_aptitude/new.html.twig");
    }
}
