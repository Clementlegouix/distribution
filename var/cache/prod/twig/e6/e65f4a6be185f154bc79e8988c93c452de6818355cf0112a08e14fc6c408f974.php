<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7bb71a34c0feb14e92ef38ef081f0ad8ac350617b13b97f5a41e49f334e27510 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/password_widget.html.php", "/Users/clement/Projet/Distri/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
