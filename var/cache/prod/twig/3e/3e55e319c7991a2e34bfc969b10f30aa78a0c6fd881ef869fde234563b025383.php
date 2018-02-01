<?php

/* User/index.html.twig */
class __TwigTemplate_34fa1ccf4252aafaa468f46a337464ca78051540a88d6cbbffff18e73bdbc172 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Liste des Bénévoles";
    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
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
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "    <h2>Liste des bénévoles</h2>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "flashes", array()));
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  186 => 75,  183 => 74,  175 => 69,  169 => 65,  162 => 63,  154 => 60,  151 => 59,  145 => 57,  139 => 55,  137 => 54,  132 => 52,  128 => 51,  124 => 50,  121 => 49,  116 => 48,  102 => 36,  96 => 35,  87 => 32,  82 => 31,  77 => 30,  73 => 29,  70 => 28,  67 => 27,  52 => 15,  43 => 9,  40 => 8,  37 => 7,  31 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "User/index.html.twig", "/Users/clement/Projet/Distri/templates/User/index.html.twig");
    }
}
