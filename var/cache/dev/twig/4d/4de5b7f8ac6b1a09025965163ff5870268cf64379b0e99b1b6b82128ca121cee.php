<?php

/* base.html.twig */
class __TwigTemplate_e13713d3ddb413789a04abc763a2d0b47fe41e5d97d743fbb83230d20dcba7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20b6db02dce195bba67bad3eb43a0c4bbccd9c6af1a4d69bb5d528e718383228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b6db02dce195bba67bad3eb43a0c4bbccd9c6af1a4d69bb5d528e718383228->enter($__internal_20b6db02dce195bba67bad3eb43a0c4bbccd9c6af1a4d69bb5d528e718383228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_617ef23ff08a820f28dff857efbc3c7472e4014b1ff8be72f907aeecd3bf1df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617ef23ff08a820f28dff857efbc3c7472e4014b1ff8be72f907aeecd3bf1df4->enter($__internal_617ef23ff08a820f28dff857efbc3c7472e4014b1ff8be72f907aeecd3bf1df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
        <link href=\"/dashboard.css\" rel=\"stylesheet\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
    \t
    \t<nav class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0\">
\t      <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Young Caritas</a>
\t      <ul class=\"navbar-nav px-3\">
\t        <li class=\"nav-item text-nowrap\">
\t        \t
\t        \t";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "\t        \t\t<a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a>        \t\t
\t        \t";
        } else {
            // line 24
            echo "\t        \t\t<a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Connexion</a>
\t        \t";
        }
        // line 26
        echo "\t        </li>
\t      </ul>
\t    </nav>
           \t<div class=\"container-fluid\">
\t\t      <div class=\"row\">
\t\t        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
\t\t          <div class=\"sidebar-sticky\">
\t\t          \t";
        // line 34
        echo "\t\t          \t<ul class=\"nav flex-column\">
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link active\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">
\t\t                  <span data-feather=\"home\"></span>
\t\t                  Distribution <span class=\"sr-only\">(current)</span>
\t\t                </a>
\t\t              </li>
\t\t              ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 42
            echo "\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\">
\t\t                  <span data-feather=\"file\"></span>
\t\t                  Adhérents
\t\t                </a>
\t\t              </li>
\t\t              ";
            // line 48
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"";
                // line 50
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
                echo "\">
\t\t                  <span data-feather=\"users\"></span>
\t\t                  Bénévoles
\t\t                </a>
\t\t              </li>
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"";
                // line 56
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
                echo "\">
\t\t                  <span data-feather=\"bar-chart-2\"></span>
\t\t                  Rapports
\t\t                </a>
\t\t              </li>
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"/admin\">
\t\t                  <span data-feather=\"bar-chart-2\"></span>
\t\t                  Administration
\t\t                </a>
\t\t              </li>
\t\t              ";
            }
            // line 68
            echo "\t\t              ";
        }
        // line 69
        echo "\t\t            </ul>
\t\t          </div>
\t\t        </nav>

\t\t        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 pt-3 px-4\">
\t\t        \t";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "\t\t        </main>
\t\t      </div>
\t\t    </div>
\t\t    <!-- JQuery & Bootstrap -->
\t        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- Icons -->
\t\t    <script src=\"https://unpkg.com/feather-icons/dist/feather.min.js\"></script>
\t\t    <script>
\t\t      feather.replace()
\t\t    </script>
\t\t    <!-- Graphs -->
\t\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js\"></script>
        ";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "
    </body>
</html>
";
        
        $__internal_20b6db02dce195bba67bad3eb43a0c4bbccd9c6af1a4d69bb5d528e718383228->leave($__internal_20b6db02dce195bba67bad3eb43a0c4bbccd9c6af1a4d69bb5d528e718383228_prof);

        
        $__internal_617ef23ff08a820f28dff857efbc3c7472e4014b1ff8be72f907aeecd3bf1df4->leave($__internal_617ef23ff08a820f28dff857efbc3c7472e4014b1ff8be72f907aeecd3bf1df4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_162733c71a3ad1a2325cb623667e0d3d106759728dafaf4f3770085ed06e0da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162733c71a3ad1a2325cb623667e0d3d106759728dafaf4f3770085ed06e0da6->enter($__internal_162733c71a3ad1a2325cb623667e0d3d106759728dafaf4f3770085ed06e0da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0479d1d5b2a85093bf01d910f89d1118a649c553bc5766e04e4f350bcf332fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0479d1d5b2a85093bf01d910f89d1118a649c553bc5766e04e4f350bcf332fb->enter($__internal_b0479d1d5b2a85093bf01d910f89d1118a649c553bc5766e04e4f350bcf332fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0479d1d5b2a85093bf01d910f89d1118a649c553bc5766e04e4f350bcf332fb->leave($__internal_b0479d1d5b2a85093bf01d910f89d1118a649c553bc5766e04e4f350bcf332fb_prof);

        
        $__internal_162733c71a3ad1a2325cb623667e0d3d106759728dafaf4f3770085ed06e0da6->leave($__internal_162733c71a3ad1a2325cb623667e0d3d106759728dafaf4f3770085ed06e0da6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de6743d17710ea4fc2f2c760d85dc10e536ec8be204108c075a79f9ac162b5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6743d17710ea4fc2f2c760d85dc10e536ec8be204108c075a79f9ac162b5a3->enter($__internal_de6743d17710ea4fc2f2c760d85dc10e536ec8be204108c075a79f9ac162b5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_09029308c3aff54829d4a343b621d1033fdf9f32082a19b98675af2aedfc79c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09029308c3aff54829d4a343b621d1033fdf9f32082a19b98675af2aedfc79c4->enter($__internal_09029308c3aff54829d4a343b621d1033fdf9f32082a19b98675af2aedfc79c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        \t<!-- Custom styles for this template -->
    \t<link href=\"/modal.css\" rel=\"stylesheet\">
    \t";
        
        $__internal_09029308c3aff54829d4a343b621d1033fdf9f32082a19b98675af2aedfc79c4->leave($__internal_09029308c3aff54829d4a343b621d1033fdf9f32082a19b98675af2aedfc79c4_prof);

        
        $__internal_de6743d17710ea4fc2f2c760d85dc10e536ec8be204108c075a79f9ac162b5a3->leave($__internal_de6743d17710ea4fc2f2c760d85dc10e536ec8be204108c075a79f9ac162b5a3_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8b7868e5e9320ed678a25120289091e39c95b238b981a4988fd6e9f6673793e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b7868e5e9320ed678a25120289091e39c95b238b981a4988fd6e9f6673793e->enter($__internal_c8b7868e5e9320ed678a25120289091e39c95b238b981a4988fd6e9f6673793e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0da16fcb7a7d96897bfe28a0d22546632eb1f7d0008db7eadcc18aebadabe961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da16fcb7a7d96897bfe28a0d22546632eb1f7d0008db7eadcc18aebadabe961->enter($__internal_0da16fcb7a7d96897bfe28a0d22546632eb1f7d0008db7eadcc18aebadabe961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "\t\t\t\t\t";
        
        $__internal_0da16fcb7a7d96897bfe28a0d22546632eb1f7d0008db7eadcc18aebadabe961->leave($__internal_0da16fcb7a7d96897bfe28a0d22546632eb1f7d0008db7eadcc18aebadabe961_prof);

        
        $__internal_c8b7868e5e9320ed678a25120289091e39c95b238b981a4988fd6e9f6673793e->leave($__internal_c8b7868e5e9320ed678a25120289091e39c95b238b981a4988fd6e9f6673793e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2eb151378001f58aee6257191c4b142bebf787a5b9821b230f55a95800aa6618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb151378001f58aee6257191c4b142bebf787a5b9821b230f55a95800aa6618->enter($__internal_2eb151378001f58aee6257191c4b142bebf787a5b9821b230f55a95800aa6618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c11ebc346c48d3aecaa89b39114f1e456fdaaa402685998e5f2c906bf4b1ed11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11ebc346c48d3aecaa89b39114f1e456fdaaa402685998e5f2c906bf4b1ed11->enter($__internal_c11ebc346c48d3aecaa89b39114f1e456fdaaa402685998e5f2c906bf4b1ed11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "        ";
        
        $__internal_c11ebc346c48d3aecaa89b39114f1e456fdaaa402685998e5f2c906bf4b1ed11->leave($__internal_c11ebc346c48d3aecaa89b39114f1e456fdaaa402685998e5f2c906bf4b1ed11_prof);

        
        $__internal_2eb151378001f58aee6257191c4b142bebf787a5b9821b230f55a95800aa6618->leave($__internal_2eb151378001f58aee6257191c4b142bebf787a5b9821b230f55a95800aa6618_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 91,  235 => 90,  225 => 75,  216 => 74,  204 => 10,  195 => 9,  177 => 5,  164 => 92,  162 => 90,  146 => 76,  144 => 74,  137 => 69,  134 => 68,  119 => 56,  110 => 50,  107 => 49,  105 => 48,  97 => 43,  94 => 42,  92 => 41,  84 => 36,  80 => 34,  71 => 26,  65 => 24,  59 => 22,  57 => 21,  50 => 17,  44 => 13,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
        <link href=\"/dashboard.css\" rel=\"stylesheet\">
        {% block stylesheets %}
        \t<!-- Custom styles for this template -->
    \t<link href=\"/modal.css\" rel=\"stylesheet\">
    \t{% endblock %}
    </head>
    <body>
    \t
    \t<nav class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0\">
\t      <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\" href=\"{{ path('home') }}\">Young Caritas</a>
\t      <ul class=\"navbar-nav px-3\">
\t        <li class=\"nav-item text-nowrap\">
\t        \t
\t        \t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t        \t\t<a class=\"nav-link\" href=\"{{ path('logout') }}\">Déconnexion</a>        \t\t
\t        \t{% else %}
\t        \t\t<a class=\"nav-link\" href=\"{{ path('login') }}\">Connexion</a>
\t        \t{% endif %}
\t        </li>
\t      </ul>
\t    </nav>
           \t<div class=\"container-fluid\">
\t\t      <div class=\"row\">
\t\t        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
\t\t          <div class=\"sidebar-sticky\">
\t\t          \t{# {{ knp_menu_render('main', {'currentClass': 'active'})}} #}
\t\t          \t<ul class=\"nav flex-column\">
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link active\" href=\"{{ path('home') }}\">
\t\t                  <span data-feather=\"home\"></span>
\t\t                  Distribution <span class=\"sr-only\">(current)</span>
\t\t                </a>
\t\t              </li>
\t\t              {% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"{{ path('home') }}\">
\t\t                  <span data-feather=\"file\"></span>
\t\t                  Adhérents
\t\t                </a>
\t\t              </li>
\t\t              {% if is_granted('ROLE_ADMIN') %}
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"{{ path('home') }}\">
\t\t                  <span data-feather=\"users\"></span>
\t\t                  Bénévoles
\t\t                </a>
\t\t              </li>
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"{{ path('home') }}\">
\t\t                  <span data-feather=\"bar-chart-2\"></span>
\t\t                  Rapports
\t\t                </a>
\t\t              </li>
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"/admin\">
\t\t                  <span data-feather=\"bar-chart-2\"></span>
\t\t                  Administration
\t\t                </a>
\t\t              </li>
\t\t              {% endif %}
\t\t              {% endif %}
\t\t            </ul>
\t\t          </div>
\t\t        </nav>

\t\t        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 pt-3 px-4\">
\t\t        \t{% block body %}
\t\t\t\t\t{% endblock %}
\t\t        </main>
\t\t      </div>
\t\t    </div>
\t\t    <!-- JQuery & Bootstrap -->
\t        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- Icons -->
\t\t    <script src=\"https://unpkg.com/feather-icons/dist/feather.min.js\"></script>
\t\t    <script>
\t\t      feather.replace()
\t\t    </script>
\t\t    <!-- Graphs -->
\t\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js\"></script>
        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "base.html.twig", "/Users/clement/Projet/Distri/templates/base.html.twig");
    }
}
