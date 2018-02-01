<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_6106334c1b5cdb0227b4bdb2de0e93d9607d44025963fa09f5b6781e48f8de16 extends Twig_Template
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
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("", "EasyAdminBundle:default:field_tel.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
