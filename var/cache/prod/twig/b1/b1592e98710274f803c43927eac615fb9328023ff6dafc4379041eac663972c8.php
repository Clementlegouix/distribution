<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_9d61cae01c1edba65fed62e1995518b550564a01b03acf77de8ff6658ce01d25 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_options"] ?? null), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf(twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_options"] ?? null), "format", array()), ($context["value"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:field_integer.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
