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

/* conge/calendrier.html.twig */
class __TwigTemplate_c2a5d6604a5a2cbf5ca53b214cde0459 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/calendrier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/calendrier.html.twig"));

        // line 1
        $this->loadTemplate("header_client_template.html.twig", "conge/calendrier.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content-wrapper\">
 <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"sticky-top mb-3\">
              <div class=\"card\">
                <div class=\"card-header\">
                  <h4 class=\"card-title\">Draggable Events</h4>
                </div>
                <div class=\"card-body\">
                  <!-- the events -->
                  <div id=\"external-events\">
                    <div class=\"external-event bg-success\">Lunch</div>
                    <div class=\"external-event bg-warning\">Go home</div>
                    <div class=\"external-event bg-info\">Do homework</div>
                    <div class=\"external-event bg-primary\">Work on UI design</div>
                    <div class=\"external-event bg-danger\">Sleep tight</div>
                    <div class=\"checkbox\">
                      <label for=\"drop-remove\">
                        <input type=\"checkbox\" id=\"drop-remove\">
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
          <div class=\"col-md-9\">
            <div class=\"card card-primary\">
              <div class=\"card-body p-0\">
                <!-- THE CALENDAR -->
                <div id=\"calendar\"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

";
        // line 55
        $this->loadTemplate("footer_client_template.html.twig", "conge/calendrier.html.twig", 55)->display($context);
        // line 56
        echo "
<!-- Page specific script -->
<script>
  \$(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: \$.trim(\$(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        \$(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        \$(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events(\$('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conges"]) || array_key_exists("conges", $context) ? $context["conges"] : (function () { throw new RuntimeError('Variable "conges" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conge"]) {
            // line 127
            echo "        {
          title          : '";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conge"], "getEmploye", [], "method", false, false, false, 128), "getUtilisateur", [], "method", false, false, false, 128), "getNomUtilisateur", [], "method", false, false, false, 128), "html", null, true);
            echo "',
          start          : new Date(\"";
            // line 129
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "getDateDebut", [], "method", false, false, false, 129), "Y-m-d"), "html", null, true);
            echo "\"),
          end            : new Date(\"";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conge"], "getDateFin", [], "method", false, false, false, 130), "Y-m-d"), "html", null, true);
            echo "\"),
          backgroundColor: '#f56954', //yellow
          borderColor    : '#f56954' //yellow
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the \"remove after drop\" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the \"Draggable Events\" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // \$('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    \$('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = \$(this).css('color')
      // Add color effect to button
      \$('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    \$('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = \$('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = \$('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      \$('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      \$('#new-event').val('')
    })
  })
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "conge/calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 135,  189 => 130,  185 => 129,  181 => 128,  178 => 127,  174 => 126,  102 => 56,  100 => 55,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header_client_template.html.twig' %}

<div class=\"content-wrapper\">
 <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"sticky-top mb-3\">
              <div class=\"card\">
                <div class=\"card-header\">
                  <h4 class=\"card-title\">Draggable Events</h4>
                </div>
                <div class=\"card-body\">
                  <!-- the events -->
                  <div id=\"external-events\">
                    <div class=\"external-event bg-success\">Lunch</div>
                    <div class=\"external-event bg-warning\">Go home</div>
                    <div class=\"external-event bg-info\">Do homework</div>
                    <div class=\"external-event bg-primary\">Work on UI design</div>
                    <div class=\"external-event bg-danger\">Sleep tight</div>
                    <div class=\"checkbox\">
                      <label for=\"drop-remove\">
                        <input type=\"checkbox\" id=\"drop-remove\">
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
          <div class=\"col-md-9\">
            <div class=\"card card-primary\">
              <div class=\"card-body p-0\">
                <!-- THE CALENDAR -->
                <div id=\"calendar\"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

{% include 'footer_client_template.html.twig' %}

<!-- Page specific script -->
<script>
  \$(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: \$.trim(\$(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        \$(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        \$(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events(\$('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
    {% for conge in conges %}
        {
          title          : '{{ conge.getEmploye().getUtilisateur().getNomUtilisateur() }}',
          start          : new Date(\"{{ conge.getDateDebut()|date('Y-m-d') }}\"),
          end            : new Date(\"{{ conge.getDateFin()|date('Y-m-d') }}\"),
          backgroundColor: '#f56954', //yellow
          borderColor    : '#f56954' //yellow
        }
    {% endfor %}
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the \"remove after drop\" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the \"Draggable Events\" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // \$('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    \$('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = \$(this).css('color')
      // Add color effect to button
      \$('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    \$('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = \$('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = \$('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      \$('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      \$('#new-event').val('')
    })
  })
</script>
", "conge/calendrier.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/conge/calendrier.html.twig");
    }
}
