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
        $__internal_01237d0991ed3d9f6c6822bcbbf89d2fbb25a1776c774f1e918e83feea210cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01237d0991ed3d9f6c6822bcbbf89d2fbb25a1776c774f1e918e83feea210cf8->enter($__internal_01237d0991ed3d9f6c6822bcbbf89d2fbb25a1776c774f1e918e83feea210cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7a3879ae7983045f5c7112d06771662a689bd5d333edf421e5d3beca9afa9035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3879ae7983045f5c7112d06771662a689bd5d333edf421e5d3beca9afa9035->enter($__internal_7a3879ae7983045f5c7112d06771662a689bd5d333edf421e5d3beca9afa9035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 33
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("main", array("currentClass" => "active"));
        echo "
\t\t          </div>
\t\t        </nav>

\t\t        <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 pt-3 px-4\">
\t\t        \t";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
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
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
    </body>
</html>
";
        
        $__internal_01237d0991ed3d9f6c6822bcbbf89d2fbb25a1776c774f1e918e83feea210cf8->leave($__internal_01237d0991ed3d9f6c6822bcbbf89d2fbb25a1776c774f1e918e83feea210cf8_prof);

        
        $__internal_7a3879ae7983045f5c7112d06771662a689bd5d333edf421e5d3beca9afa9035->leave($__internal_7a3879ae7983045f5c7112d06771662a689bd5d333edf421e5d3beca9afa9035_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7c87ed72a7b27278aa17fda4da092c33d082230e279a8cc5f2d591c692979f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c87ed72a7b27278aa17fda4da092c33d082230e279a8cc5f2d591c692979f2->enter($__internal_a7c87ed72a7b27278aa17fda4da092c33d082230e279a8cc5f2d591c692979f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_834b0e20d631fbdbc68a4b95f6048abc64f8c0166efcecd3a8a21938b679627d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834b0e20d631fbdbc68a4b95f6048abc64f8c0166efcecd3a8a21938b679627d->enter($__internal_834b0e20d631fbdbc68a4b95f6048abc64f8c0166efcecd3a8a21938b679627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_834b0e20d631fbdbc68a4b95f6048abc64f8c0166efcecd3a8a21938b679627d->leave($__internal_834b0e20d631fbdbc68a4b95f6048abc64f8c0166efcecd3a8a21938b679627d_prof);

        
        $__internal_a7c87ed72a7b27278aa17fda4da092c33d082230e279a8cc5f2d591c692979f2->leave($__internal_a7c87ed72a7b27278aa17fda4da092c33d082230e279a8cc5f2d591c692979f2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48936e936bed0a226eaf4629abb434382213af01d3f5365c9ec24c59cf51e0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48936e936bed0a226eaf4629abb434382213af01d3f5365c9ec24c59cf51e0c5->enter($__internal_48936e936bed0a226eaf4629abb434382213af01d3f5365c9ec24c59cf51e0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_717310917ba1f399869f5a47ec0eb8ce1850bd42e2c35863b4b77fec9b735003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717310917ba1f399869f5a47ec0eb8ce1850bd42e2c35863b4b77fec9b735003->enter($__internal_717310917ba1f399869f5a47ec0eb8ce1850bd42e2c35863b4b77fec9b735003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        \t<!-- Custom styles for this template -->
    \t<link href=\"/modal.css\" rel=\"stylesheet\">
    \t";
        
        $__internal_717310917ba1f399869f5a47ec0eb8ce1850bd42e2c35863b4b77fec9b735003->leave($__internal_717310917ba1f399869f5a47ec0eb8ce1850bd42e2c35863b4b77fec9b735003_prof);

        
        $__internal_48936e936bed0a226eaf4629abb434382213af01d3f5365c9ec24c59cf51e0c5->leave($__internal_48936e936bed0a226eaf4629abb434382213af01d3f5365c9ec24c59cf51e0c5_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b64dd124e1590f32436ed1454d7ff58d3593ce798dafcfe6685b030d95a0c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b64dd124e1590f32436ed1454d7ff58d3593ce798dafcfe6685b030d95a0c1b->enter($__internal_2b64dd124e1590f32436ed1454d7ff58d3593ce798dafcfe6685b030d95a0c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88ba58d5efe4b693365334f3a48fc34717f5df726531c6fdc7ab93054aeb39d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ba58d5efe4b693365334f3a48fc34717f5df726531c6fdc7ab93054aeb39d8->enter($__internal_88ba58d5efe4b693365334f3a48fc34717f5df726531c6fdc7ab93054aeb39d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "\t\t\t\t\t";
        
        $__internal_88ba58d5efe4b693365334f3a48fc34717f5df726531c6fdc7ab93054aeb39d8->leave($__internal_88ba58d5efe4b693365334f3a48fc34717f5df726531c6fdc7ab93054aeb39d8_prof);

        
        $__internal_2b64dd124e1590f32436ed1454d7ff58d3593ce798dafcfe6685b030d95a0c1b->leave($__internal_2b64dd124e1590f32436ed1454d7ff58d3593ce798dafcfe6685b030d95a0c1b_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5be1fe253f887d665c5d412028384a1774dfdd76b76fb1e5331f5b28037dc877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be1fe253f887d665c5d412028384a1774dfdd76b76fb1e5331f5b28037dc877->enter($__internal_5be1fe253f887d665c5d412028384a1774dfdd76b76fb1e5331f5b28037dc877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9124408e38982ec70ee29aa17e54a2c6027262d8304ee5ea4767c8365671d787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9124408e38982ec70ee29aa17e54a2c6027262d8304ee5ea4767c8365671d787->enter($__internal_9124408e38982ec70ee29aa17e54a2c6027262d8304ee5ea4767c8365671d787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "        ";
        
        $__internal_9124408e38982ec70ee29aa17e54a2c6027262d8304ee5ea4767c8365671d787->leave($__internal_9124408e38982ec70ee29aa17e54a2c6027262d8304ee5ea4767c8365671d787_prof);

        
        $__internal_5be1fe253f887d665c5d412028384a1774dfdd76b76fb1e5331f5b28037dc877->leave($__internal_5be1fe253f887d665c5d412028384a1774dfdd76b76fb1e5331f5b28037dc877_prof);

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
        return array (  188 => 55,  179 => 54,  169 => 39,  160 => 38,  148 => 10,  139 => 9,  121 => 5,  108 => 56,  106 => 54,  90 => 40,  88 => 38,  80 => 33,  71 => 26,  65 => 24,  59 => 22,  57 => 21,  50 => 17,  44 => 13,  42 => 9,  35 => 5,  29 => 1,);
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
\t\t          \t{{ knp_menu_render('main', {'currentClass': 'active'})}}
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
