<?php

/* adherent/index.html.twig */
class __TwigTemplate_4168bc2e86eaa4f849623d59259fdc5a01ff674a6949a2a4f91da3547dea33d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "adherent/index.html.twig", 3);
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
        $__internal_52449faaeaa64a78c0a8c7928bf7fdef165dac4f95ff0003f299c3e4a799fcaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52449faaeaa64a78c0a8c7928bf7fdef165dac4f95ff0003f299c3e4a799fcaf->enter($__internal_52449faaeaa64a78c0a8c7928bf7fdef165dac4f95ff0003f299c3e4a799fcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adherent/index.html.twig"));

        $__internal_09cc1152f6e508ea60c5f7cb27610580731dee2af8f6b2caec9415af42acc0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09cc1152f6e508ea60c5f7cb27610580731dee2af8f6b2caec9415af42acc0e4->enter($__internal_09cc1152f6e508ea60c5f7cb27610580731dee2af8f6b2caec9415af42acc0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adherent/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52449faaeaa64a78c0a8c7928bf7fdef165dac4f95ff0003f299c3e4a799fcaf->leave($__internal_52449faaeaa64a78c0a8c7928bf7fdef165dac4f95ff0003f299c3e4a799fcaf_prof);

        
        $__internal_09cc1152f6e508ea60c5f7cb27610580731dee2af8f6b2caec9415af42acc0e4->leave($__internal_09cc1152f6e508ea60c5f7cb27610580731dee2af8f6b2caec9415af42acc0e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_243d4803dfe69d7ec3eebdef614a39322bda5a34b2b3c5c4c1acf1c94666e1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243d4803dfe69d7ec3eebdef614a39322bda5a34b2b3c5c4c1acf1c94666e1ee->enter($__internal_243d4803dfe69d7ec3eebdef614a39322bda5a34b2b3c5c4c1acf1c94666e1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0d5af8c535fc1b0eaea19ac0d7fabd6372cd52073f4207eb20d8fbe66aac844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d5af8c535fc1b0eaea19ac0d7fabd6372cd52073f4207eb20d8fbe66aac844->enter($__internal_e0d5af8c535fc1b0eaea19ac0d7fabd6372cd52073f4207eb20d8fbe66aac844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des adhérents";
        
        $__internal_e0d5af8c535fc1b0eaea19ac0d7fabd6372cd52073f4207eb20d8fbe66aac844->leave($__internal_e0d5af8c535fc1b0eaea19ac0d7fabd6372cd52073f4207eb20d8fbe66aac844_prof);

        
        $__internal_243d4803dfe69d7ec3eebdef614a39322bda5a34b2b3c5c4c1acf1c94666e1ee->leave($__internal_243d4803dfe69d7ec3eebdef614a39322bda5a34b2b3c5c4c1acf1c94666e1ee_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d684198865569933ef5e64e58a6babd9614c6f0e0f93d854d3d21f4e4da72e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d684198865569933ef5e64e58a6babd9614c6f0e0f93d854d3d21f4e4da72e8->enter($__internal_0d684198865569933ef5e64e58a6babd9614c6f0e0f93d854d3d21f4e4da72e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b64a2a92b8ef8f47c463c9479651ad3fdbb3b95a3474bd8b4fce01f5ecb7e0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64a2a92b8ef8f47c463c9479651ad3fdbb3b95a3474bd8b4fce01f5ecb7e0a8->enter($__internal_b64a2a92b8ef8f47c463c9479651ad3fdbb3b95a3474bd8b4fce01f5ecb7e0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h2>Liste des adhérents</h2>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "flashes", array()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["adherents"]) || array_key_exists("adherents", $context) ? $context["adherents"] : (function () { throw new Twig_Error_Runtime('Variable "adherents" does not exist.', 31, $this->getSourceContext()); })()));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPassage", array("adherent" => twig_get_attribute($this->env, $this->getSourceContext(), $context["adherent"], "id", array()), "user" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->getSourceContext()); })()), "user", array()), "id", array()))), "html", null, true);
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
        
        $__internal_b64a2a92b8ef8f47c463c9479651ad3fdbb3b95a3474bd8b4fce01f5ecb7e0a8->leave($__internal_b64a2a92b8ef8f47c463c9479651ad3fdbb3b95a3474bd8b4fce01f5ecb7e0a8_prof);

        
        $__internal_0d684198865569933ef5e64e58a6babd9614c6f0e0f93d854d3d21f4e4da72e8->leave($__internal_0d684198865569933ef5e64e58a6babd9614c6f0e0f93d854d3d21f4e4da72e8_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2a10774b843ded92d6355956322f9cb7479b3b419072f4854b4bc5f5262a1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a10774b843ded92d6355956322f9cb7479b3b419072f4854b4bc5f5262a1de->enter($__internal_b2a10774b843ded92d6355956322f9cb7479b3b419072f4854b4bc5f5262a1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a6d89319f1b1ebf2f8ec9aff3821894c242c3784d4e6cef0ada308abef5756c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d89319f1b1ebf2f8ec9aff3821894c242c3784d4e6cef0ada308abef5756c7->enter($__internal_a6d89319f1b1ebf2f8ec9aff3821894c242c3784d4e6cef0ada308abef5756c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a6d89319f1b1ebf2f8ec9aff3821894c242c3784d4e6cef0ada308abef5756c7->leave($__internal_a6d89319f1b1ebf2f8ec9aff3821894c242c3784d4e6cef0ada308abef5756c7_prof);

        
        $__internal_b2a10774b843ded92d6355956322f9cb7479b3b419072f4854b4bc5f5262a1de->leave($__internal_b2a10774b843ded92d6355956322f9cb7479b3b419072f4854b4bc5f5262a1de_prof);

    }

    public function getTemplateName()
    {
        return "adherent/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 62,  208 => 61,  194 => 55,  187 => 53,  179 => 49,  173 => 48,  171 => 47,  167 => 46,  162 => 44,  158 => 43,  154 => 42,  150 => 41,  146 => 40,  142 => 39,  138 => 38,  134 => 36,  130 => 35,  126 => 33,  123 => 32,  118 => 31,  101 => 16,  95 => 15,  86 => 12,  81 => 11,  76 => 10,  72 => 9,  69 => 8,  60 => 7,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/adherent/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Liste des adhérents{% endblock %}

{% block body %}
    <h2>Liste des adhérents</h2>
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
\t            {% for adherent in adherents %}
\t            \t{% if adherent.CheckPassage %}
\t            \t\t<tr>
\t            \t{% else %}
\t            \t\t<tr class=\"table-danger\">
\t\t\t        {% endif %}\t\t\t\t
\t\t\t        
\t\t\t        \t<td scope=\"row\" class=\"align-middle\">{{ adherent.iddistri }}</td>
\t\t\t        \t<td>{{ adherent.nom }}</td>
\t\t\t        \t<td>{{ adherent.prenom }}</td>
\t\t\t        \t<td>{{ adherent.idcarte }}</td>
\t\t\t        \t<td>{{ adherent.datecreation|date('d/m/Y') }}</td>
\t\t\t        \t<td><i data-feather=\"{{ adherent.ordrePassage }}\"></i></td>
\t\t\t        \t<td>{{ adherent.getNbPassage }}</td>
\t\t\t        \t<td>
\t\t\t        \t\t<a href=\"{{ path('VoirAdherent', {'id': adherent.id }) }}\"><i data-feather=\"edit\"></i></a>&nbsp;&nbsp;
\t\t\t        \t\t{% if adherent.CheckPassage %}
\t\t\t        \t\t<a href=\"{{ path('ajouterPassage', {'adherent': adherent.id, 'user': app.user.id }) }}\"><i data-feather=\"plus-circle\"></i></a>
\t\t\t        \t\t{% endif %}\t
\t\t\t        \t</td>
\t\t\t        </tr>
\t\t\t    {% else %}
\t\t\t        Pas d adherent !
\t\t\t    {% endfor %}
\t        </tbody>
\t    </table>
      </div>

{% endblock %}

{% block javascripts %}
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
", "adherent/index.html.twig", "/Users/clement/Projet/Distri/templates/adherent/index.html.twig");
    }
}
