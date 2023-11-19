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

/* header_template.html.twig */
class __TwigTemplate_716df28ca4a8bb7ff1fac9cfa3f0ea0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header_template.html.twig"));

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
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

  <!-- Preloader -->
  <div class=\"preloader flex-column justify-content-center align-items-center\">
    <img class=\"animation__shake\" src=\"";
        // line 33
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
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" class=\"nav-link\">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
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
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 64
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
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">Administrateur</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/no-profile-picture-4-1024x1024.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "getNomUtilisateur", [], "any", false, false, false, 88), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "getPrenomUtilisateur", [], "any", false, false, false, 88), "html", null, true);
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
          ";
        // line 132
        echo "
          <li class=\"nav-item\">
            <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_requirements_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"receipt-sharp\"></ion-icon>
              <p>
               Annonce
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_requirements_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_requirements_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"reorder-four-sharp\"></ion-icon>
              <p>
                Service
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diplome_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"school-sharp\"></ion-icon>
              <p>
                Diplome
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diplome_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diplome_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adresse_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"location-sharp\"></ion-icon>
              <p>
                Adresse
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adresse_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adresse_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 230
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"funnel-sharp\"></ion-icon>
              <p>
                Domaine
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 245
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_domaine_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 254
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"albums-sharp\"></ion-icon>
              <p>
                Experience
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 263
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 269
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sexe_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"male-female-sharp\"></ion-icon>
              <p>
                Sexe
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 287
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sexe_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 293
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sexe_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 302
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matrimoniale_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"people-circle-sharp\"></ion-icon>
              <p>
                Situation matrimoniale
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 311
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matrimoniale_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 317
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matrimoniale_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class=\"nav-item\">
            <a href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nationalite_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"flag-sharp\"></ion-icon>
              <p>
                Nationalite
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 335
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nationalite_new");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 341
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_c_v_requirements_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"";
        // line 350
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        echo "\" class=\"nav-link\">
              <ion-icon name=\"people-sharp\"></ion-icon>
              <p>
                Employes
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 359
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 365
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_all_employes");
        echo "\" class=\"nav-link\">
                  <ion-icon name=\"cafe-sharp\"></ion-icon>
                  <p>Demandes de conges</p>
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
        return "header_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 365,  510 => 359,  498 => 350,  486 => 341,  477 => 335,  465 => 326,  453 => 317,  444 => 311,  432 => 302,  420 => 293,  411 => 287,  399 => 278,  387 => 269,  378 => 263,  366 => 254,  354 => 245,  345 => 239,  333 => 230,  321 => 221,  312 => 215,  300 => 206,  288 => 197,  279 => 191,  267 => 182,  255 => 173,  246 => 167,  234 => 158,  222 => 149,  213 => 143,  201 => 134,  197 => 132,  171 => 88,  165 => 85,  153 => 76,  138 => 64,  115 => 44,  101 => 33,  91 => 26,  86 => 24,  81 => 22,  76 => 20,  71 => 18,  66 => 16,  61 => 14,  54 => 10,  43 => 1,);
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
    </ul>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
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
      <img src=\"{{ asset('dist/img/AdminLTELogo.png') }}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">Administrateur</span>
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
          {# <li class=\"nav-item\">
            <a href=\"{{ path('app_annonce') }}\" class=\"nav-link\">
              <ion-icon name=\"receipt-sharp\"></ion-icon>
              <p>
                Annonce
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_annonce_new') }}\" class=\"nav-link {{ app.request.get('_route') == 'app_annonce_new' ? 'active' }}\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_annonce') }}\" class=\"nav-link {{ app.request.get('_route') == 'app_annonce' ? 'active' }}\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li> #}

          <li class=\"nav-item\">
            <a href=\"{{ path('app_c_v_requirements_index') }}\" class=\"nav-link\">
              <ion-icon name=\"receipt-sharp\"></ion-icon>
              <p>
               Annonce
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_c_v_requirements_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_c_v_requirements_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_service_index') }}\" class=\"nav-link\">
              <ion-icon name=\"reorder-four-sharp\"></ion-icon>
              <p>
                Service
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_service_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_service_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_diplome_index') }}\" class=\"nav-link\">
              <ion-icon name=\"school-sharp\"></ion-icon>
              <p>
                Diplome
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_diplome_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_diplome_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_adresse_index') }}\" class=\"nav-link\">
              <ion-icon name=\"location-sharp\"></ion-icon>
              <p>
                Adresse
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_adresse_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_adresse_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_domaine_index') }}\" class=\"nav-link\">
              <ion-icon name=\"funnel-sharp\"></ion-icon>
              <p>
                Domaine
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_domaine_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_domaine_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_experience_index') }}\" class=\"nav-link\">
              <ion-icon name=\"albums-sharp\"></ion-icon>
              <p>
                Experience
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_experience_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_experience_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_sexe_index') }}\" class=\"nav-link\">
              <ion-icon name=\"male-female-sharp\"></ion-icon>
              <p>
                Sexe
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_sexe_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_sexe_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_matrimoniale_index') }}\" class=\"nav-link\">
              <ion-icon name=\"people-circle-sharp\"></ion-icon>
              <p>
                Situation matrimoniale
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_matrimoniale_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_matrimoniale_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class=\"nav-item\">
            <a href=\"{{ path('app_nationalite_index') }}\" class=\"nav-link\">
              <ion-icon name=\"flag-sharp\"></ion-icon>
              <p>
                Nationalite
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_nationalite_new') }}\" class=\"nav-link\">
                  <ion-icon name=\"duplicate-sharp\"></ion-icon>
                  <p>Creer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_c_v_requirements_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a href=\"{{ path('app_employe_index') }}\" class=\"nav-link\">
              <ion-icon name=\"people-sharp\"></ion-icon>
              <p>
                Employes
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('app_employe_index') }}\" class=\"nav-link\">
                  <ion-icon name=\"eye-sharp\"></ion-icon>
                  <p>Voir</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('app_conge_all_employes') }}\" class=\"nav-link\">
                  <ion-icon name=\"cafe-sharp\"></ion-icon>
                  <p>Demandes de conges</p>
                </a>
              </li>
            </ul>
          </li>


      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>", "header_template.html.twig", "/home/miaro/Fianarana/ITU/S5/Mr_Tovo::Mr_Rojo/E_Manager/templates/header_template.html.twig");
    }
}
