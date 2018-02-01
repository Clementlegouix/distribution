<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_9cbf2bb04ede5ace05ebc99667d881b8baf6fe86ffeebd7ff51e7c6de1098499 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["filename"] ?? null)), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:field_file.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_file.html.twig");
    }
}
