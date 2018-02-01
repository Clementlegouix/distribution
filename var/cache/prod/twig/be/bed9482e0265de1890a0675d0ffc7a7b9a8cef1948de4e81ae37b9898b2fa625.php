<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_babdd6b8d6695398466f3099e52d34093e276503de64441202fe867c59c95de5 extends Twig_Template
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
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, ($context["uuid"] ?? null), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? null)), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, ($context["uuid"] ?? null), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? null)), "html", null, true);
        echo "\">
</div>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:field_image.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_image.html.twig");
    }
}
