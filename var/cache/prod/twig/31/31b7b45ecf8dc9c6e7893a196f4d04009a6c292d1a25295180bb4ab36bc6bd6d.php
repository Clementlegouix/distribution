<?php

/* Adherent/index.html.twig */
class __TwigTemplate_4c461fff7ca128fed9e23a40ab948f45b4e583665ac32d672a98add86f51f82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "Adherent/index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Liste des adhérents";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h2>Liste des adhérents</h2>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            echo "\t    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "\t        <div id=\"success-alert\" class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\" role=\"alert\">
\t            ";
                // line 12
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t        </div>
\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    <div class=\"table-responsive\">
        <table id=\"example\" class=\"table table-striped table-hover\">
\t        <thead>
\t            <tr>
\t            \t<th scope=\"col\">N° Distribution</th>
\t                <th scope=\"col\">Nom</th>
\t                <th scope=\"col\">Prénom</th>
\t                <th scope=\"col\">N° Carte étudiante</th>
\t                <th scope=\"col\">Date de création</th>
\t                <th scope=\"col\">Ordre</th>
\t                <th scope=\"col\">Passages</th>
\t                <th scope=\"col\">Actions</th>
\t            </tr>
\t        </thead>
\t        <tbody>
\t            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["adherents"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["adherent"]) {
            // line 32
            echo "\t            \t";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "CheckPassage", array())) {
                // line 33
                echo "\t            \t\t<tr>
\t            \t";
            } else {
                // line 35
                echo "\t            \t\t<tr class=\"table-danger\">
\t\t\t        ";
            }
            // line 36
            echo "\t\t\t\t
\t\t\t        
\t\t\t        \t<td scope=\"row\" class=\"align-middle\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "iddistri", array()), "html", null, true);
            echo "</td>
\t\t\t        \t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t        \t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t        \t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "idcarte", array()), "html", null, true);
            echo "</td>
\t\t\t        \t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "datecreation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t        \t<td><i data-feather=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "ordrePassage", array()), "html", null, true);
            echo "\"></i></td>
\t\t\t        \t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "getNbPassage", array()), "html", null, true);
            echo "</td>
\t\t\t        \t<td>
\t\t\t        \t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("VoirAdherent", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "id", array()))), "html", null, true);
            echo "\"><i data-feather=\"edit\"></i></a>&nbsp;&nbsp;
\t\t\t        \t\t";
            // line 47
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "CheckPassage", array())) {
                // line 48
                echo "\t\t\t        \t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPassage", array("adherent" => twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "id", array()), "user" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\"><i data-feather=\"plus-circle\"></i></a>
\t\t\t        \t\t";
            }
            // line 49
            echo "\t
\t\t\t        \t</td>
\t\t\t        </tr>
\t\t\t    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "\t\t\t        Pas d adherent !
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t        </tbody>
\t    </table>
      </div>

";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "\t<script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
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
        return "Adherent/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  172 => 61,  164 => 55,  157 => 53,  149 => 49,  143 => 48,  141 => 47,  137 => 46,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  104 => 36,  100 => 35,  96 => 33,  93 => 32,  88 => 31,  71 => 16,  65 => 15,  56 => 12,  51 => 11,  46 => 10,  42 => 9,  39 => 8,  36 => 7,  30 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Adherent/index.html.twig", "/Users/clement/Projet/Distri/templates/Adherent/index.html.twig");
    }
}
