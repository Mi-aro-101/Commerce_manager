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

/* header_client_template.html.twig */
class __TwigTemplate_8182c9b3d0fdef32bba66fee62ef6d6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_client_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_client_template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- JQVMap -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
  <!-- summernote -->
  <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/summernote/summernote-bs4.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
  <!-- fullCalendar -->
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/fullcalendar/main.css"), "html", null, true);
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

  <!-- Preloader -->
  <div class=\"preloader flex-column justify-content-center align-items-center\">
    <img class=\"animation__shake\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
  </div>

  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Navbar Search -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
          <i class=\"fas fa-expand-arrows-alt\"></i>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
          <i class=\"fas fa-th-large\"></i>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" role=\"button\">
          <ion-icon name=\"power-sharp\" size=\"large\" style=\"color: red\"></ion-icon>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/images.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">Client</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/no-profile-picture-4-1024x1024.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "getNomUtilisateur", [], "any", false, false, false, 97), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "getPrenomUtilisateur", [], "any", false, false, false, 97), "html", null, true);
        echo "</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class=\"form-inline\">
        <div class=\"input-group\" data-widget=\"sidebar-search\">
          <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-sidebar\">
              <i class=\"fas fa-search fa-fw\"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item\">
            <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce");
        echo "\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-copy\"></i>
              <p>
                Annonce
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              ";
        // line 133
        echo "              <li class=\"nav-item\">
                <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_candidat_liste");
        echo "\" class=\"nav-link ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "get", ["_route"], "method", false, false, false, 134) == "app_annonce")) ? ("active") : (""));
        echo "\">
                  <i class=\"nav-icon fas fa-file\"></i>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"cafe-sharp\"></ion-icon>
              <p>
                Conge
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_new");
        echo "\" class=\"nav-link ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "request", [], "any", false, false, false, 152), "get", ["_route"], "method", false, false, false, 152) == "app_conge_new")) ? ("active") : (""));
        echo "\">
                  <i class=\"nav-icon fas fa-edit\"></i>
                  <p>Demander un conge</p>
                </a>
              </li>
              ";
        // line 163
        echo "            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_view");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"people-sharp\"></ion-icon>
              <p>
                Mes employes
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_view");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_conge");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"person-remove-sharp\"></ion-icon>
                  <p>Demandes de conge</p>
                </a>
              </li>
               <li class=\"nav-item\">
                <a href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_heure_suplementaire_employe");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"time-sharp\"></ion-icon>
                  <p>Demandes d'heure sup</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_heure_suplementaire_new");
        echo "\" class=\"nav-link\">
             <ion-icon name=\"alarm-sharp\"></ion-icon>
              <p>
                Heure Suplementaire
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_heure_suplementaire_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"hourglass-sharp\"></ion-icon>
                  <p>Demander heure sup</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_heure_suplementaire_employe");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir les demandes</p>
                </a>
              </li>
            </ul>
          </li>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "header_client_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 212,  326 => 206,  314 => 197,  302 => 188,  293 => 182,  284 => 176,  272 => 167,  266 => 163,  256 => 152,  244 => 143,  230 => 134,  227 => 133,  216 => 119,  189 => 97,  183 => 94,  171 => 85,  156 => 73,  131 => 51,  117 => 40,  107 => 33,  102 => 31,  97 => 29,  91 => 26,  86 => 24,  81 => 22,  76 => 20,  71 => 18,  66 => 16,  61 => 14,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel=\"stylesheet\" href=\"{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
  <!-- JQVMap -->
  <link rel=\"stylesheet\" href=\"{{ asset('plugins/jqvmap/jqvmap.min.css') }}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{ asset('dist/css/adminlte.min.css') }}\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"{{ asset('plugins/daterangepicker/daterangepicker.css') }}\">
  <!-- summernote -->
  <link rel=\"stylesheet\" href=\"{{ asset('plugins/summernote/summernote-bs4.min.css') }}\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"{{ asset('/plugins/fontawesome-free/css/all.min.css') }}\">
  <!-- fullCalendar -->
  <link rel=\"stylesheet\" href=\"{{ asset('/plugins/fullcalendar/main.css') }}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{ asset('/dist/css/adminlte.min.css') }}\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

  <!-- Preloader -->
  <div class=\"preloader flex-column justify-content-center align-items-center\">
    <img class=\"animation__shake\" src=\"{{ asset('dist/img/AdminLTELogo.png') }}\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
  </div>

  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"{{ path('app_home_page') }}\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Navbar Search -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
          <i class=\"fas fa-expand-arrows-alt\"></i>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
          <i class=\"fas fa-th-large\"></i>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_logout')  }}\" role=\"button\">
          <ion-icon name=\"power-sharp\" size=\"large\" style=\"color: red\"></ion-icon>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"{{ asset('/img/images.png') }}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">Client</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"{{ asset('/img/no-profile-picture-4-1024x1024.jpg') }}\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">{{ app.user.getNomUtilisateur }} {{ app.user.getPrenomUtilisateur }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class=\"form-inline\">
        <div class=\"input-group\" data-widget=\"sidebar-search\">
          <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-sidebar\">
              <i class=\"fas fa-search fa-fw\"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item\">
            <a href=\"{{ path('app_annonce') }}\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-copy\"></i>
              <p>
                Annonce
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              {# <li class=\"nav-item\">
                <a href=\"{{ path('app_annonce_new') }}\" class=\"nav-link {{ app.request.get('_route') == 'app_annonce_new' ? 'active' }}\">
                  <i class=\"nav-icon fas fa-edit\"></i>
                  <p>Creer</p>
                </a>
              </li> #}
              <li class=\"nav-item\">
                <a href=\"{{ path('app_c_v_candidat_liste') }}\" class=\"nav-link {{ app.request.get('_route') == 'app_annonce' ? 'active' }}\">
                  <i class=\"nav-icon fas fa-file\"></i>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_annonce') }}\" class=\"nav-link\">
              <ion-icon name=\"cafe-sharp\"></ion-icon>
              <p>
                Conge
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_conge_new') }}\" class=\"nav-link {{ app.request.get('_route') == 'app_conge_new' ? 'active' }}\">
                  <i class=\"nav-icon fas fa-edit\"></i>
                  <p>Demander un conge</p>
                </a>
              </li>
              {# <li class=\"nav-item\">
                <a href=\"{{ path('app_c_v_candidat_liste') }}\" class=\"nav-link {{ app.request.get('_route') == 'app_annonce' ? 'active' }}\">
                  <i class=\"nav-icon fas fa-file\"></i>
                  <p>Voir</p>
                </a>
              </li> #}
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_employe_view') }}\" class=\"nav-link\">
              <ion-icon name=\"people-sharp\"></ion-icon>
              <p>
                Mes employes
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_employe_view') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('employe_conge') }}\" class=\"nav-link\">
                  <ion-icon name=\"person-remove-sharp\"></ion-icon>
                  <p>Demandes de conge</p>
                </a>
              </li>
               <li class=\"nav-item\">
                <a href=\"{{ path('app_heure_suplementaire_employe') }}\" class=\"nav-link\">
                  <ion-icon name=\"time-sharp\"></ion-icon>
                  <p>Demandes d'heure sup</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_heure_suplementaire_new') }}\" class=\"nav-link\">
             <ion-icon name=\"alarm-sharp\"></ion-icon>
              <p>
                Heure Suplementaire
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_heure_suplementaire_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"hourglass-sharp\"></ion-icon>
                  <p>Demander heure sup</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_heure_suplementaire_employe') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir les demandes</p>
                </a>
              </li>
            </ul>
          </li>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>", "header_client_template.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/header_client_template.html.twig");
    }
}
