<?php

/* EasyAdminBundle:default/includes:_actions.html.twig */
class __TwigTemplate_9d5ed3d98fdcbde1ef18e9b90e4190001b15002691bbac7593dbe762a09bbf66 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "name", array()))) {
                // line 3
                echo "        ";
                $context["action_href"] = ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["request_parameters"] ?? null), "referer", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["request_parameters"] ?? null), "referer", array()), "")) : (""))) ? (urldecode(twig_get_attribute($this->env, $this->getSourceContext(), ($context["request_parameters"] ?? null), "referer", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["request_parameters"] ?? null), array("action" => "list")))));
                // line 4
                echo "    ";
            } elseif (("method" == twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "type", array()))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["request_parameters"] ?? null), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "name", array()), "id" => ($context["item_id"] ?? null))));
                // line 6
                echo "    ";
            } elseif (("route" == twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "type", array()))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "name", array()), twig_array_merge(($context["request_parameters"] ?? null), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "name", array()), "id" => ($context["item_id"] ?? null))));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <a class=\"";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array()), "")) : ("")))) ? ("") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array()), ($context["trans_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["action_href"] ?? null), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "target", array()), "html", null, true);
            echo "\">";
            // line 11
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "icon", array()), "html", null, true);
                echo "\"></i> ";
            }
            // line 12
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "label", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "label", array())))) {
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "label", array()), twig_array_merge(($context["trans_parameters"] ?? null), array("%entity_id%" => ($context["item_id"] ?? null))), ($context["translation_domain"] ?? null)), "html", null, true);
            }
            // line 15
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  64 => 13,  62 => 12,  56 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default/includes:_actions.html.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/includes/_actions.html.twig");
    }
}
