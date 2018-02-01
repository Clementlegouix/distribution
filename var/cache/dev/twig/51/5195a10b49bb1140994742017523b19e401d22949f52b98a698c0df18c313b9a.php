<?php

/* adherent/voir.html.twig */
class __TwigTemplate_90bd665927e7720b7fc9e69c1cdcab9c144885f4ec52ca6dad2a8782d018c402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "adherent/voir.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_522bee6fadc01e3eb31533186471f975b310074a8020b5dd2d0bfdc1c830e809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522bee6fadc01e3eb31533186471f975b310074a8020b5dd2d0bfdc1c830e809->enter($__internal_522bee6fadc01e3eb31533186471f975b310074a8020b5dd2d0bfdc1c830e809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adherent/voir.html.twig"));

        $__internal_86ba976e5164a56a021346a3350a38e9079a7591d1e39411c6d01a768d8f46c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ba976e5164a56a021346a3350a38e9079a7591d1e39411c6d01a768d8f46c2->enter($__internal_86ba976e5164a56a021346a3350a38e9079a7591d1e39411c6d01a768d8f46c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adherent/voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_522bee6fadc01e3eb31533186471f975b310074a8020b5dd2d0bfdc1c830e809->leave($__internal_522bee6fadc01e3eb31533186471f975b310074a8020b5dd2d0bfdc1c830e809_prof);

        
        $__internal_86ba976e5164a56a021346a3350a38e9079a7591d1e39411c6d01a768d8f46c2->leave($__internal_86ba976e5164a56a021346a3350a38e9079a7591d1e39411c6d01a768d8f46c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe935cb0c5043b166be2da3ce48bea030dc2778c04f1aecaa6206073aff94148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe935cb0c5043b166be2da3ce48bea030dc2778c04f1aecaa6206073aff94148->enter($__internal_fe935cb0c5043b166be2da3ce48bea030dc2778c04f1aecaa6206073aff94148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd37fdbcce3dd40f249f6eef7c7a2b9c0a848219f092e7782f6b1e162538ed17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd37fdbcce3dd40f249f6eef7c7a2b9c0a848219f092e7782f6b1e162538ed17->enter($__internal_dd37fdbcce3dd40f249f6eef7c7a2b9c0a848219f092e7782f6b1e162538ed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profile de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 5, $this->getSourceContext()); })()), "Prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 5, $this->getSourceContext()); })()), "Nom", array()), "html", null, true);
        
        $__internal_dd37fdbcce3dd40f249f6eef7c7a2b9c0a848219f092e7782f6b1e162538ed17->leave($__internal_dd37fdbcce3dd40f249f6eef7c7a2b9c0a848219f092e7782f6b1e162538ed17_prof);

        
        $__internal_fe935cb0c5043b166be2da3ce48bea030dc2778c04f1aecaa6206073aff94148->leave($__internal_fe935cb0c5043b166be2da3ce48bea030dc2778c04f1aecaa6206073aff94148_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3877a68c7954255d96cafc7a3dc0b726267b9de3723f3a766cf1a56c4be4762f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3877a68c7954255d96cafc7a3dc0b726267b9de3723f3a766cf1a56c4be4762f->enter($__internal_3877a68c7954255d96cafc7a3dc0b726267b9de3723f3a766cf1a56c4be4762f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8989314c61dba3116f573ea5e2f76fd9b5b7a11468016435029584889737d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8989314c61dba3116f573ea5e2f76fd9b5b7a11468016435029584889737d40->enter($__internal_a8989314c61dba3116f573ea5e2f76fd9b5b7a11468016435029584889737d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<div class=\"card\" style=\"width: 30rem;\">
\t  <div class=\"card-body\">
\t    <h5 class=\"card-title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 11, $this->getSourceContext()); })()), "Prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 11, $this->getSourceContext()); })()), "Nom", array()), "html", null, true);
        echo "</h5>
\t    <h6 class=\"card-subtitle mb-2 text-muted\">N° carte étudiant ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 12, $this->getSourceContext()); })()), "idCarte", array()), "html", null, true);
        echo "</h6>
\t    <h6 class=\"card-subtitle mb-2 text-muted\">N° carte de passage ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 13, $this->getSourceContext()); })()), "idDistri", array()), "html", null, true);
        echo "</h6>
\t    <p class=\"card-text\">Ordre de passage <i data-feather=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 14, $this->getSourceContext()); })()), "ordrePassage", array()), "html", null, true);
        echo "\"></i></p>
\t    <ul class=\"list-group list-group-flush\">
\t    \t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 16, $this->getSourceContext()); })()), "passages", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
            // line 17
            echo "\t    \t\t<li class=\"list-group-item\">Passage le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["passage"], "datePassage", array()), "d/m/Y à H:m:s"), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["passage"], "user", array()), "username", array()), "html", null, true);
            echo "
\t    \t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerPassage", array("passage" => twig_get_attribute($this->env, $this->getSourceContext(), $context["passage"], "id", array()))), "html", null, true);
            echo "\"><i data-feather=\"trash-2\"></i></a>
\t    \t\t</li>
\t    \t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "\t    \t\tPas de passages
\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t  </ul>
\t\t<div class=\"card-body\">
\t\t\t<a class=\"card-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adherent");
        echo "\"><i data-feather=\"rotate-ccw\"></i>Retour</a>
\t\t    <a class=\"card-link\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimeradherent", array("adherent" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 26, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"><i data-feather=\"trash\"></i>Supprimer</a>
\t\t    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editerAdherent", array("adherent" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["adherent"]) || array_key_exists("adherent", $context) ? $context["adherent"] : (function () { throw new Twig_Error_Runtime('Variable "adherent" does not exist.', 27, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"card-link\"><i data-feather=\"edit\"></i>Modifier</a>
\t\t</div>
\t  </div>
\t</div>
";
        
        $__internal_a8989314c61dba3116f573ea5e2f76fd9b5b7a11468016435029584889737d40->leave($__internal_a8989314c61dba3116f573ea5e2f76fd9b5b7a11468016435029584889737d40_prof);

        
        $__internal_3877a68c7954255d96cafc7a3dc0b726267b9de3723f3a766cf1a56c4be4762f->leave($__internal_3877a68c7954255d96cafc7a3dc0b726267b9de3723f3a766cf1a56c4be4762f_prof);

    }

    public function getTemplateName()
    {
        return "adherent/voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 27,  130 => 26,  126 => 25,  122 => 23,  115 => 21,  107 => 18,  100 => 17,  95 => 16,  90 => 14,  86 => 13,  82 => 12,  76 => 11,  71 => 8,  62 => 7,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/adherent/voir.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Profile de {{ adherent.Prenom }} {{ adherent.Nom }}{% endblock %}

{% block body %}

\t<div class=\"card\" style=\"width: 30rem;\">
\t  <div class=\"card-body\">
\t    <h5 class=\"card-title\">{{ adherent.Prenom }} {{ adherent.Nom }}</h5>
\t    <h6 class=\"card-subtitle mb-2 text-muted\">N° carte étudiant {{ adherent.idCarte }}</h6>
\t    <h6 class=\"card-subtitle mb-2 text-muted\">N° carte de passage {{ adherent.idDistri }}</h6>
\t    <p class=\"card-text\">Ordre de passage <i data-feather=\"{{ adherent.ordrePassage }}\"></i></p>
\t    <ul class=\"list-group list-group-flush\">
\t    \t{% for passage in adherent.passages %}
\t    \t\t<li class=\"list-group-item\">Passage le {{ passage.datePassage|date('d/m/Y à H:m:s') }} par {{ passage.user.username }}
\t    \t\t\t<a href=\"{{ path('supprimerPassage', {'passage': passage.id }) }}\"><i data-feather=\"trash-2\"></i></a>
\t    \t\t</li>
\t    \t{% else %}
\t    \t\tPas de passages
\t    \t{% endfor %}
\t\t  </ul>
\t\t<div class=\"card-body\">
\t\t\t<a class=\"card-link\" href=\"{{ path('adherent') }}\"><i data-feather=\"rotate-ccw\"></i>Retour</a>
\t\t    <a class=\"card-link\" href=\"{{ path('supprimeradherent', {'adherent': adherent.id }) }}\"><i data-feather=\"trash\"></i>Supprimer</a>
\t\t    <a href=\"{{ path('editerAdherent', {'adherent': adherent.id }) }}\" class=\"card-link\"><i data-feather=\"edit\"></i>Modifier</a>
\t\t</div>
\t  </div>
\t</div>
{% endblock %}
", "adherent/voir.html.twig", "/Users/clement/Projet/Distri/templates/adherent/voir.html.twig");
    }
}
