<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0fefd4ea9e0a452fd63c9d45ec52f80fa667243cb6ebbc79065fb1502480624d extends Twig_Template
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
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "/Users/clement/Projet/Distri/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
