<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9a1af91012511bce66075390e490831f1ac0d6fbc9cc598f25adaa5d071a84a4 extends Twig_Template
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
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_enctype.html.php", "/Users/clement/Projet/Distri/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
