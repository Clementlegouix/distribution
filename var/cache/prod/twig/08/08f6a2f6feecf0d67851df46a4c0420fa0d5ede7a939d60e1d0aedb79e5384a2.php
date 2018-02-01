<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_a67e854bfc3441401818aca011353264c60b5d0c52415d673e904b0c994ce65f extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? null) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:field_boolean.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
