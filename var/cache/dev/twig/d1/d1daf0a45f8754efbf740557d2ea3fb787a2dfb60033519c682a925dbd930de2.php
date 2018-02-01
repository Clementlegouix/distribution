<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_016951e25aceaef5edeb3f0f1c7757b52e209c410b4c366e3598aca9015e74fb extends Twig_Template
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
        $__internal_dfd265aa931cb22a1878c8eda4c42626c826b6a4695709b6b41dfda6864251e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd265aa931cb22a1878c8eda4c42626c826b6a4695709b6b41dfda6864251e9->enter($__internal_dfd265aa931cb22a1878c8eda4c42626c826b6a4695709b6b41dfda6864251e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_e361d9a0d7d157f0ff04b2d6dc7833cfcedb7c21907fa65d4429c5dbd41e802e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e361d9a0d7d157f0ff04b2d6dc7833cfcedb7c21907fa65d4429c5dbd41e802e->enter($__internal_e361d9a0d7d157f0ff04b2d6dc7833cfcedb7c21907fa65d4429c5dbd41e802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_dfd265aa931cb22a1878c8eda4c42626c826b6a4695709b6b41dfda6864251e9->leave($__internal_dfd265aa931cb22a1878c8eda4c42626c826b6a4695709b6b41dfda6864251e9_prof);

        
        $__internal_e361d9a0d7d157f0ff04b2d6dc7833cfcedb7c21907fa65d4429c5dbd41e802e->leave($__internal_e361d9a0d7d157f0ff04b2d6dc7833cfcedb7c21907fa65d4429c5dbd41e802e_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/Users/clement/Projet/Distri/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
