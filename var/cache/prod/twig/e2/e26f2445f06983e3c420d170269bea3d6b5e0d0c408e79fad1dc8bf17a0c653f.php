<?php

/* EasyAdminBundle:default/includes:_delete_form.html.twig */
class __TwigTemplate_03ae8abbcf7ad43cf4d1878165b8ced43423027deaabff50c5655b5d578d513f extends Twig_Template
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
        echo         // line 2
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form', array("action" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 3
($context["delete_form"] ?? null), "vars", array()), "action", array()) . "&referer=") . ($context["referer"] ?? null)), "method" => "DELETE", "attr" => array("id" => "delete-form", "style" => "display: none")));
        // line 7
        echo "

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.content", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.cancel", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "
                </button>

                ";
        // line 21
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled(($context["view"] ?? null), "delete", twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "name", array()))) {
            // line 22
            echo "                    ";
            $context["_delete_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration(($context["view"] ?? null), "delete", twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "name", array()));
            // line 23
            echo "                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["_delete_action"] ?? null), "target", array()), "html", null, true);
            echo "\">
                        ";
            // line 24
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["_delete_action"] ?? null), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["_delete_action"] ?? null), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.action", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  64 => 25,  58 => 24,  53 => 23,  50 => 22,  48 => 21,  42 => 18,  35 => 14,  31 => 13,  23 => 7,  21 => 3,  20 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default/includes:_delete_form.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/includes/_delete_form.html.twig");
    }
}
