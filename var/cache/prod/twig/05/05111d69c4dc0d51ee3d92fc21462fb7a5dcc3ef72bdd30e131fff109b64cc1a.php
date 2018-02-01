<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0255402e3e540810a9a06d065fa0ca2d03432d26101a16fdcbe4ba0a0e0767cc extends Twig_Template
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
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/hidden_row.html.php", "/Users/clement/Projet/Distri/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
