<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_945b6dde419e2335cbb70cac742ce5c12d3b7c5cfb291db7fe5d2305a724ae00 extends Twig_Template
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
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 3,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:label_inaccessible.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
