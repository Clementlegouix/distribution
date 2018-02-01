<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_97fc4284dbfd9a116f3515ab267f6f178e5c3b735a2ef7c5bf0c44a1a4810d22 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/submit_widget.html.php", "/Users/clement/Projet/Distri/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
