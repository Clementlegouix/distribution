<?php

/* Adherent/voir.html.twig */
class __TwigTemplate_025326a888ddb89b569e57681f48c56fa5b76b5706358d9c051c6df15bb24fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "Adherent/voir.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Profile de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["adherent"] ?? null), "Prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["adherent"] ?? null), "Nom", array()), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t<div class=\"card\" style=\"width: 30rem;\">
\t  <div class=\"card-body\">
\t    <h5 class=\"card-title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["adherent"] ?? null), "Prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["adherent"] ?? null), "Nom", array()), "html", null, true);
        echo "</h5>
\t    <h6 class=\"card-subtitle mb-2 text-muted\">N° carte étudiant ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["adherent"] ?? null), "idCarte", array()), "html", null, true);
        echo "</h6>
\t    <h6 class=\"card-subtitle mb-2 text-muted\">N° carte de passage ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["adherent"] ?? null), "idDistri", array()), "html", null, true);
        echo "</h6>
\t    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t    <ul class=\"list-group list-group-flush\">
\t    \t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["passages"] ?? null));
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t  </ul>
\t\t<div class=\"card-body\">
\t\t\t<a class=\"card-link\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adherent");
        echo "\"><i data-feather=\"rotate-ccw\"></i>Retour</a>
\t\t    <a class=\"card-link\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimeradherent", array("adherent" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["adherent"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i data-feather=\"trash\"></i>Supprimer</a>
\t\t    <a href=\"#\" class=\"card-link\"><i data-feather=\"edit\"></i>Modifier</a>
\t\t</div>
\t  </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "Adherent/voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  86 => 23,  82 => 21,  73 => 18,  66 => 17,  62 => 16,  56 => 13,  52 => 12,  46 => 11,  41 => 8,  38 => 7,  29 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Adherent/voir.html.twig", "/Users/clement/Projet/Distri/templates/Adherent/voir.html.twig");
    }
}
