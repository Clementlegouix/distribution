<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7bf49995f4ec92bda6850e223f50d6752f81d933bb12c8b6d17a9d05bbf029a1 extends Twig_Template
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
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:error.rdf.twig", "/Users/clement/Projet/Distri/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
