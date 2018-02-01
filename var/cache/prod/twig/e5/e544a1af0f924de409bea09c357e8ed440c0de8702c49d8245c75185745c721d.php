<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_648cff7837afe17cf610c1a93214f5dd57c597e62f03537e1b4ba454bca66cb9 extends Twig_Template
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
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/button_row.html.php", "/Users/clement/Projet/Distri/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
