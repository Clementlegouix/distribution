<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f423122150a3e13964f6b74070750a5fe7766bc131cd79f7e759e09348655c8f extends Twig_Template
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
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? null);
        echo " ";
        echo ($context["status_text"] ?? null);
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error.txt.twig", "/Users/clement/Projet/Distri/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
