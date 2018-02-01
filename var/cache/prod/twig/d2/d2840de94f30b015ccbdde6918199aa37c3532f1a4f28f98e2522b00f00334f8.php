<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_3d6b07e5d0465f61cabfdc1e17317bd8ba3fd3769314005210adbb8cedf2bcb7 extends Twig_Template
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
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("", "EasyAdminBundle:default:field_object.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
