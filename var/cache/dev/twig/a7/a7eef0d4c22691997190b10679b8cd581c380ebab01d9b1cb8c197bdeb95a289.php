<?php

/* User/index.html.twig */
class __TwigTemplate_6f55363867a7eba8bcc6acb49cac6178de3829ebcfa808015f6da090b8e9a595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "User/index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_948c722504923975c1bd99b566e9adea665a79cdcd6d486d4f6b62a703783c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948c722504923975c1bd99b566e9adea665a79cdcd6d486d4f6b62a703783c9f->enter($__internal_948c722504923975c1bd99b566e9adea665a79cdcd6d486d4f6b62a703783c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/index.html.twig"));

        $__internal_ba56c61259cf847819ca7f6d19809d99d675c0c36604f19ba68eecfe3ff8f42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba56c61259cf847819ca7f6d19809d99d675c0c36604f19ba68eecfe3ff8f42a->enter($__internal_ba56c61259cf847819ca7f6d19809d99d675c0c36604f19ba68eecfe3ff8f42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948c722504923975c1bd99b566e9adea665a79cdcd6d486d4f6b62a703783c9f->leave($__internal_948c722504923975c1bd99b566e9adea665a79cdcd6d486d4f6b62a703783c9f_prof);

        
        $__internal_ba56c61259cf847819ca7f6d19809d99d675c0c36604f19ba68eecfe3ff8f42a->leave($__internal_ba56c61259cf847819ca7f6d19809d99d675c0c36604f19ba68eecfe3ff8f42a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5eeef434fbda82fe74bad5dd6e7062ba063bc5ebe7f1a215db8eac86471db1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5eeef434fbda82fe74bad5dd6e7062ba063bc5ebe7f1a215db8eac86471db1b->enter($__internal_e5eeef434fbda82fe74bad5dd6e7062ba063bc5ebe7f1a215db8eac86471db1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82a92d710eaa025e0239367bc05db805e63bcca039e458883bd46579c0d0e643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a92d710eaa025e0239367bc05db805e63bcca039e458883bd46579c0d0e643->enter($__internal_82a92d710eaa025e0239367bc05db805e63bcca039e458883bd46579c0d0e643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Bénévoles";
        
        $__internal_82a92d710eaa025e0239367bc05db805e63bcca039e458883bd46579c0d0e643->leave($__internal_82a92d710eaa025e0239367bc05db805e63bcca039e458883bd46579c0d0e643_prof);

        
        $__internal_e5eeef434fbda82fe74bad5dd6e7062ba063bc5ebe7f1a215db8eac86471db1b->leave($__internal_e5eeef434fbda82fe74bad5dd6e7062ba063bc5ebe7f1a215db8eac86471db1b_prof);

    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
        $__internal_90cfecedd11a8bfbbf9a9b39fe362a08605f0852b3382b11a39623f766890a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cfecedd11a8bfbbf9a9b39fe362a08605f0852b3382b11a39623f766890a75->enter($__internal_90cfecedd11a8bfbbf9a9b39fe362a08605f0852b3382b11a39623f766890a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_434e40715df25e886003f9c5a219f0ecf06be52d76dd2976189a7e797e4bd528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434e40715df25e886003f9c5a219f0ecf06be52d76dd2976189a7e797e4bd528->enter($__internal_434e40715df25e886003f9c5a219f0ecf06be52d76dd2976189a7e797e4bd528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 8
        echo "  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">
      <span data-feather=\"home\"></span>
      Distribution 
    </a>
  </li>
  <li>
  \t<a class=\"nav-link active\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adherent");
        echo "\"><span data-feather=\"users\"></span>
      Adhérents <span class=\"sr-only\">(current)</span>
  \t</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">
      <span data-feather=\"bar-chart-2\"></span>
      Reports
    </a>
  </li>
";
        
        $__internal_434e40715df25e886003f9c5a219f0ecf06be52d76dd2976189a7e797e4bd528->leave($__internal_434e40715df25e886003f9c5a219f0ecf06be52d76dd2976189a7e797e4bd528_prof);

        
        $__internal_90cfecedd11a8bfbbf9a9b39fe362a08605f0852b3382b11a39623f766890a75->leave($__internal_90cfecedd11a8bfbbf9a9b39fe362a08605f0852b3382b11a39623f766890a75_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4b496475535c4bc17bbcb95208127a927013dcc230cb4adbbd1c2689e35805c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b496475535c4bc17bbcb95208127a927013dcc230cb4adbbd1c2689e35805c->enter($__internal_e4b496475535c4bc17bbcb95208127a927013dcc230cb4adbbd1c2689e35805c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69d97d4bd7160b158b1c232f55ec1a817f4529dbfe60db4d957596e13d93713e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d97d4bd7160b158b1c232f55ec1a817f4529dbfe60db4d957596e13d93713e->enter($__internal_69d97d4bd7160b158b1c232f55ec1a817f4529dbfe60db4d957596e13d93713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <h2>Liste des bénévoles</h2>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 30
            echo "\t    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "\t        <div id=\"success-alert\" class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
\t            ";
                // line 32
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t        </div>
\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    <div class=\"table-responsive\">
        <table id=\"example\" class=\"table table-striped table-hover\">
\t        <thead>
\t            <tr>
\t            \t<th scope=\"col\">Identifiant</th>
\t                <th scope=\"col\">Nom</th>
\t                <th scope=\"col\">Email</th>
\t                <th scope=\"col\">Actif</th>
\t                <th scope=\"col\">Rôles</th>
\t            </tr>
\t        </thead>
\t        <tbody>
\t            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 48, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 49
            echo "\t            \t<tr>
\t\t\t        \t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t        \t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t        \t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t        \t<td>
\t\t\t        \t\t";
            // line 54
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "isActive", array())) {
                // line 55
                echo "\t\t\t        \t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desactiverbenevoles", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
                echo "\"><i stroke=\"green\" data-feather=\"check\"></i></a>
\t\t\t        \t\t";
            } else {
                // line 57
                echo "\t\t\t        \t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activerbenevoles", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
                echo "\"><i stroke=\"red\" data-feather=\"x\"></i></a>
\t\t\t        \t\t";
            }
            // line 59
            echo "\t\t\t        \t</td>
\t\t\t        \t<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "RoleNamed", array()), "html", null, true);
            echo "</td>
\t\t\t        </tr>
\t\t\t    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "\t\t\t        Pas d'utilisateur !
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t        </tbody>
\t    </table>
      </div>
      <div>
      \t<a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
        echo "\"><i data-feather=\"user-plus\"></i> Créer un bénévole</a>
      </div>

";
        
        $__internal_69d97d4bd7160b158b1c232f55ec1a817f4529dbfe60db4d957596e13d93713e->leave($__internal_69d97d4bd7160b158b1c232f55ec1a817f4529dbfe60db4d957596e13d93713e_prof);

        
        $__internal_e4b496475535c4bc17bbcb95208127a927013dcc230cb4adbbd1c2689e35805c->leave($__internal_e4b496475535c4bc17bbcb95208127a927013dcc230cb4adbbd1c2689e35805c_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01a85da8dc8a0940817515cbac0cbd1bde516e7a84fd58585d558810383eaea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a85da8dc8a0940817515cbac0cbd1bde516e7a84fd58585d558810383eaea7->enter($__internal_01a85da8dc8a0940817515cbac0cbd1bde516e7a84fd58585d558810383eaea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4c0c9a2533c19ae0a54e9c69a7c3668c9c4e3a4ca6b99756c83b98cdbe4af419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0c9a2533c19ae0a54e9c69a7c3668c9c4e3a4ca6b99756c83b98cdbe4af419->enter($__internal_4c0c9a2533c19ae0a54e9c69a7c3668c9c4e3a4ca6b99756c83b98cdbe4af419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "\t<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
\t<script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function() 
\t\t\t{
\t\t\t\t\$('#example').DataTable( {
\t\t\t        \"info\":     false,
\t\t\t        \"language\": {
\t\t\t\t\t    
\t\t\t\t\t\t\t\"sProcessing\":     \"Traitement en cours...\",
\t\t\t\t\t\t\t\"sSearch\":         \"Rechercher&nbsp;:\",
\t\t\t\t\t\t    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
\t\t\t\t\t\t\t\"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
\t\t\t\t\t\t\t\"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
\t\t\t\t\t\t\t\"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
\t\t\t\t\t\t\t\"sInfoPostFix\":    \"\",
\t\t\t\t\t\t\t\"sLoadingRecords\": \"Chargement en cours...\",
\t\t\t\t\t\t    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
\t\t\t\t\t\t\t\"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
\t\t\t\t\t\t\t\"oPaginate\": {
\t\t\t\t\t\t\t\t\"sFirst\":      \"Premier\",
\t\t\t\t\t\t\t\t\"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
\t\t\t\t\t\t\t\t\"sNext\":       \"Suivant\",
\t\t\t\t\t\t\t\t\"sLast\":       \"Dernier\"
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\"oAria\": {
\t\t\t\t\t\t\t\t\"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
\t\t\t\t\t\t\t\t\"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t    } );
\t\t\t} );\t
\t        </script>
";
        
        $__internal_4c0c9a2533c19ae0a54e9c69a7c3668c9c4e3a4ca6b99756c83b98cdbe4af419->leave($__internal_4c0c9a2533c19ae0a54e9c69a7c3668c9c4e3a4ca6b99756c83b98cdbe4af419_prof);

        
        $__internal_01a85da8dc8a0940817515cbac0cbd1bde516e7a84fd58585d558810383eaea7->leave($__internal_01a85da8dc8a0940817515cbac0cbd1bde516e7a84fd58585d558810383eaea7_prof);

    }

    public function getTemplateName()
    {
        return "User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 75,  231 => 74,  217 => 69,  211 => 65,  204 => 63,  196 => 60,  193 => 59,  187 => 57,  181 => 55,  179 => 54,  174 => 52,  170 => 51,  166 => 50,  163 => 49,  158 => 48,  144 => 36,  138 => 35,  129 => 32,  124 => 31,  119 => 30,  115 => 29,  112 => 28,  103 => 27,  82 => 15,  73 => 9,  70 => 8,  61 => 7,  43 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/User/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Liste des Bénévoles{% endblock %}

{% block nav %}
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('home') }}\">
      <span data-feather=\"home\"></span>
      Distribution 
    </a>
  </li>
  <li>
  \t<a class=\"nav-link active\" href=\"{{ path('adherent') }}\"><span data-feather=\"users\"></span>
      Adhérents <span class=\"sr-only\">(current)</span>
  \t</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">
      <span data-feather=\"bar-chart-2\"></span>
      Reports
    </a>
  </li>
{% endblock %}

{% block body %}
    <h2>Liste des bénévoles</h2>
    {% for label, messages in app.flashes %}
\t    {% for message in messages %}
\t        <div id=\"success-alert\" class=\"alert alert-{{ label }}\" role=\"alert\">
\t            {{ message }}
\t        </div>
\t    {% endfor %}
\t{% endfor %}
    <div class=\"table-responsive\">
        <table id=\"example\" class=\"table table-striped table-hover\">
\t        <thead>
\t            <tr>
\t            \t<th scope=\"col\">Identifiant</th>
\t                <th scope=\"col\">Nom</th>
\t                <th scope=\"col\">Email</th>
\t                <th scope=\"col\">Actif</th>
\t                <th scope=\"col\">Rôles</th>
\t            </tr>
\t        </thead>
\t        <tbody>
\t            {% for user in users %}
\t            \t<tr>
\t\t\t        \t<td>{{ user.id }}</td>
\t\t\t        \t<td>{{ user.username }}</td>
\t\t\t        \t<td>{{ user.email }}</td>
\t\t\t        \t<td>
\t\t\t        \t\t{% if user.isActive %}
\t\t\t        \t\t\t<a href=\"{{ path('desactiverbenevoles', {'id': user.id }) }}\"><i stroke=\"green\" data-feather=\"check\"></i></a>
\t\t\t        \t\t{% else %}
\t\t\t        \t\t\t<a href=\"{{ path('activerbenevoles', {'id': user.id }) }}\"><i stroke=\"red\" data-feather=\"x\"></i></a>
\t\t\t        \t\t{% endif %}
\t\t\t        \t</td>
\t\t\t        \t<td>{{ user.RoleNamed }}</td>
\t\t\t        </tr>
\t\t\t    {% else %}
\t\t\t        Pas d'utilisateur !
\t\t\t    {% endfor %}
\t        </tbody>
\t    </table>
      </div>
      <div>
      \t<a href=\"{{ path('user_registration') }}\"><i data-feather=\"user-plus\"></i> Créer un bénévole</a>
      </div>

{% endblock %}

{% block javascripts %}
\t<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
\t<script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
\t<script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function() 
\t\t\t{
\t\t\t\t\$('#example').DataTable( {
\t\t\t        \"info\":     false,
\t\t\t        \"language\": {
\t\t\t\t\t    
\t\t\t\t\t\t\t\"sProcessing\":     \"Traitement en cours...\",
\t\t\t\t\t\t\t\"sSearch\":         \"Rechercher&nbsp;:\",
\t\t\t\t\t\t    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
\t\t\t\t\t\t\t\"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
\t\t\t\t\t\t\t\"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
\t\t\t\t\t\t\t\"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
\t\t\t\t\t\t\t\"sInfoPostFix\":    \"\",
\t\t\t\t\t\t\t\"sLoadingRecords\": \"Chargement en cours...\",
\t\t\t\t\t\t    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
\t\t\t\t\t\t\t\"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
\t\t\t\t\t\t\t\"oPaginate\": {
\t\t\t\t\t\t\t\t\"sFirst\":      \"Premier\",
\t\t\t\t\t\t\t\t\"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
\t\t\t\t\t\t\t\t\"sNext\":       \"Suivant\",
\t\t\t\t\t\t\t\t\"sLast\":       \"Dernier\"
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\"oAria\": {
\t\t\t\t\t\t\t\t\"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
\t\t\t\t\t\t\t\t\"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t    } );
\t\t\t} );\t
\t        </script>
{% endblock %}
", "User/index.html.twig", "/Users/clement/Projet/Distri/templates/User/index.html.twig");
    }
}
