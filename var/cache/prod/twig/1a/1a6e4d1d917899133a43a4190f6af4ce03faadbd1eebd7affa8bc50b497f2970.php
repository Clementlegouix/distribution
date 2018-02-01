<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_7d1f3183ea0dc96118be1e5dd87b2e2dd2207913bed4814f6332bd332ee22672 extends Twig_Template
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
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("", "EasyAdminBundle:default:label_empty.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
