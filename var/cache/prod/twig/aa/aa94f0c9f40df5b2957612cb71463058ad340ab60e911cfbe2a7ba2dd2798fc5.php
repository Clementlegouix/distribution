<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_7bae12510c9d8cdb0d99f8b90c53af1f45712509f99713d37df907ced21fc30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_options"] ?? null), "format", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:field_datetimetz.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
