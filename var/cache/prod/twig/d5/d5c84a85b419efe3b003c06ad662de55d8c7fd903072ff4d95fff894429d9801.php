<?php

/* base.html.twig */
class __TwigTemplate_70d49765dec2cb6edeff65f3f19f5234bbf66b040ece1eebbb5dd03b4aafdc1f extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        \t<!-- Custom styles for this template -->
    \t<link href=\"/modal.css\" rel=\"stylesheet\">
    \t";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "\t\t\t\t\t";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "        ";
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
        return array (  134 => 55,  131 => 54,  127 => 39,  124 => 38,  118 => 10,  115 => 9,  109 => 5,  102 => 56,  100 => 54,  84 => 40,  82 => 38,  74 => 33,  65 => 26,  59 => 24,  53 => 22,  51 => 21,  44 => 17,  38 => 13,  36 => 9,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/Users/clement/Projet/Distri/templates/base.html.twig");
    }
}
