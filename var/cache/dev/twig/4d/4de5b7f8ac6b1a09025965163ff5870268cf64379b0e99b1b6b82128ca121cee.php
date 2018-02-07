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
        $__internal_53f0dc559cbbef02a8ec6b43ddda6101bf4775a40005556bc8ce23f7abf444e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f0dc559cbbef02a8ec6b43ddda6101bf4775a40005556bc8ce23f7abf444e0->enter($__internal_53f0dc559cbbef02a8ec6b43ddda6101bf4775a40005556bc8ce23f7abf444e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cc9439d4117f26ea79fca8ec3e777d947914c6823cf4a204fc608e2fb6a3f8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9439d4117f26ea79fca8ec3e777d947914c6823cf4a204fc608e2fb6a3f8d5->enter($__internal_cc9439d4117f26ea79fca8ec3e777d947914c6823cf4a204fc608e2fb6a3f8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t          \t<ul class=\"nav flex-column\">
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link active\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">
\t\t                  <span data-feather=\"home\"></span>
\t\t                  Distribution
\t\t                </a>
\t\t              </li>
\t\t              ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 41
            echo "\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adherent");
            echo "\">
\t\t                  <span data-feather=\"file\"></span>
\t\t                  Adhérents
\t\t                </a>
\t\t              </li>
\t\t              ";
            // line 47
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 48
                echo "\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"";
                // line 49
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benevoles");
                echo "\">
\t\t                  <span data-feather=\"users\"></span>
\t\t                  Bénévoles
\t\t                </a>
\t\t              </li>
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"";
                // line 55
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
            // line 67
            echo "\t\t              ";
        }
        // line 68
        echo "\t\t            </ul>
\t\t          </div>
\t\t        </nav>

\t\t        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 pt-3 px-4\">
\t\t        \t";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 75
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
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "
    </body>
</html>
";
        
        $__internal_53f0dc559cbbef02a8ec6b43ddda6101bf4775a40005556bc8ce23f7abf444e0->leave($__internal_53f0dc559cbbef02a8ec6b43ddda6101bf4775a40005556bc8ce23f7abf444e0_prof);

        
        $__internal_cc9439d4117f26ea79fca8ec3e777d947914c6823cf4a204fc608e2fb6a3f8d5->leave($__internal_cc9439d4117f26ea79fca8ec3e777d947914c6823cf4a204fc608e2fb6a3f8d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e44dadad79e1372128454eab8a1405436966702e920e9ce77a419f654e687ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44dadad79e1372128454eab8a1405436966702e920e9ce77a419f654e687ba9->enter($__internal_e44dadad79e1372128454eab8a1405436966702e920e9ce77a419f654e687ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4272fd32019075edb96ad6309eabe15d15185c56479b8b300a94ef7d44ac0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4272fd32019075edb96ad6309eabe15d15185c56479b8b300a94ef7d44ac0ff->enter($__internal_d4272fd32019075edb96ad6309eabe15d15185c56479b8b300a94ef7d44ac0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d4272fd32019075edb96ad6309eabe15d15185c56479b8b300a94ef7d44ac0ff->leave($__internal_d4272fd32019075edb96ad6309eabe15d15185c56479b8b300a94ef7d44ac0ff_prof);

        
        $__internal_e44dadad79e1372128454eab8a1405436966702e920e9ce77a419f654e687ba9->leave($__internal_e44dadad79e1372128454eab8a1405436966702e920e9ce77a419f654e687ba9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d97e6cd88e724ad34dd17d3a194b662f4a70b5be53c7b78fa646bace06fe253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d97e6cd88e724ad34dd17d3a194b662f4a70b5be53c7b78fa646bace06fe253->enter($__internal_1d97e6cd88e724ad34dd17d3a194b662f4a70b5be53c7b78fa646bace06fe253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ca2b85aad3db75b789d95db51fd6648b22d62c6a4133d0bb5ca64b3f8f93a916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2b85aad3db75b789d95db51fd6648b22d62c6a4133d0bb5ca64b3f8f93a916->enter($__internal_ca2b85aad3db75b789d95db51fd6648b22d62c6a4133d0bb5ca64b3f8f93a916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        \t<!-- Custom styles for this template -->
    \t<link href=\"/modal.css\" rel=\"stylesheet\">
    \t";
        
        $__internal_ca2b85aad3db75b789d95db51fd6648b22d62c6a4133d0bb5ca64b3f8f93a916->leave($__internal_ca2b85aad3db75b789d95db51fd6648b22d62c6a4133d0bb5ca64b3f8f93a916_prof);

        
        $__internal_1d97e6cd88e724ad34dd17d3a194b662f4a70b5be53c7b78fa646bace06fe253->leave($__internal_1d97e6cd88e724ad34dd17d3a194b662f4a70b5be53c7b78fa646bace06fe253_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_d032e4e85fa65ecd84fb1907cec5c28bad269ee7315457e79eb1ecb0b8996772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d032e4e85fa65ecd84fb1907cec5c28bad269ee7315457e79eb1ecb0b8996772->enter($__internal_d032e4e85fa65ecd84fb1907cec5c28bad269ee7315457e79eb1ecb0b8996772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65e3a49ffa13fb550105d78ddf62b992aff2aa38be5f3b690c5f5ee2ca46160e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e3a49ffa13fb550105d78ddf62b992aff2aa38be5f3b690c5f5ee2ca46160e->enter($__internal_65e3a49ffa13fb550105d78ddf62b992aff2aa38be5f3b690c5f5ee2ca46160e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "\t\t\t\t\t";
        
        $__internal_65e3a49ffa13fb550105d78ddf62b992aff2aa38be5f3b690c5f5ee2ca46160e->leave($__internal_65e3a49ffa13fb550105d78ddf62b992aff2aa38be5f3b690c5f5ee2ca46160e_prof);

        
        $__internal_d032e4e85fa65ecd84fb1907cec5c28bad269ee7315457e79eb1ecb0b8996772->leave($__internal_d032e4e85fa65ecd84fb1907cec5c28bad269ee7315457e79eb1ecb0b8996772_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_979be8172f704e4ef50754f5f6c8cdaac664a31eff33aa0df39526658ff78706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979be8172f704e4ef50754f5f6c8cdaac664a31eff33aa0df39526658ff78706->enter($__internal_979be8172f704e4ef50754f5f6c8cdaac664a31eff33aa0df39526658ff78706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_821810b2f0fe31c5e5ef9cae940d64047bf1b3835a74bd64af320dd93f8f4606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821810b2f0fe31c5e5ef9cae940d64047bf1b3835a74bd64af320dd93f8f4606->enter($__internal_821810b2f0fe31c5e5ef9cae940d64047bf1b3835a74bd64af320dd93f8f4606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "        ";
        
        $__internal_821810b2f0fe31c5e5ef9cae940d64047bf1b3835a74bd64af320dd93f8f4606->leave($__internal_821810b2f0fe31c5e5ef9cae940d64047bf1b3835a74bd64af320dd93f8f4606_prof);

        
        $__internal_979be8172f704e4ef50754f5f6c8cdaac664a31eff33aa0df39526658ff78706->leave($__internal_979be8172f704e4ef50754f5f6c8cdaac664a31eff33aa0df39526658ff78706_prof);

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
        return array (  242 => 90,  233 => 89,  223 => 74,  214 => 73,  202 => 10,  193 => 9,  175 => 5,  162 => 91,  160 => 89,  144 => 75,  142 => 73,  135 => 68,  132 => 67,  117 => 55,  108 => 49,  105 => 48,  103 => 47,  95 => 42,  92 => 41,  90 => 40,  82 => 35,  71 => 26,  65 => 24,  59 => 22,  57 => 21,  50 => 17,  44 => 13,  42 => 9,  35 => 5,  29 => 1,);
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
\t\t          \t<ul class=\"nav flex-column\">
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link active\" href=\"{{ path('home') }}\">
\t\t                  <span data-feather=\"home\"></span>
\t\t                  Distribution
\t\t                </a>
\t\t              </li>
\t\t              {% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"{{ path('adherent') }}\">
\t\t                  <span data-feather=\"file\"></span>
\t\t                  Adhérents
\t\t                </a>
\t\t              </li>
\t\t              {% if is_granted('ROLE_ADMIN') %}
\t\t              <li class=\"nav-item\">
\t\t                <a class=\"nav-link\" href=\"{{ path('benevoles') }}\">
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
