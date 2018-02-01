<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f61667f6dc1572c40dce626e0173e94bea218877ca8a41f0d73822af9f09f3f2 extends Twig_Template
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
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_rows.html.php", "/Users/clement/Projet/Distri/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
