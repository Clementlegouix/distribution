<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_fc9e53fa4e447da313538085348fbea7b8d3712f25c226b5b1998192c9b25c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a33ee5d155b1b5e87fce218134c63f02281d7a58041cd3f4aa5f3c57c9800c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a33ee5d155b1b5e87fce218134c63f02281d7a58041cd3f4aa5f3c57c9800c->enter($__internal_44a33ee5d155b1b5e87fce218134c63f02281d7a58041cd3f4aa5f3c57c9800c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_26a4d568e488b0ccf82b930c4b34fbdb2b644ffdc44605bfad17d4ebc49e05af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a4d568e488b0ccf82b930c4b34fbdb2b644ffdc44605bfad17d4ebc49e05af->enter($__internal_26a4d568e488b0ccf82b930c4b34fbdb2b644ffdc44605bfad17d4ebc49e05af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a33ee5d155b1b5e87fce218134c63f02281d7a58041cd3f4aa5f3c57c9800c->leave($__internal_44a33ee5d155b1b5e87fce218134c63f02281d7a58041cd3f4aa5f3c57c9800c_prof);

        
        $__internal_26a4d568e488b0ccf82b930c4b34fbdb2b644ffdc44605bfad17d4ebc49e05af->leave($__internal_26a4d568e488b0ccf82b930c4b34fbdb2b644ffdc44605bfad17d4ebc49e05af_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_511102ad56b780e9ff7aa9527c6d3ed9c671fd157f53d1fb225d1ede0fe975c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511102ad56b780e9ff7aa9527c6d3ed9c671fd157f53d1fb225d1ede0fe975c5->enter($__internal_511102ad56b780e9ff7aa9527c6d3ed9c671fd157f53d1fb225d1ede0fe975c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_669b57e96ad14d62f3526bedc7cb19c05147c6ceb18c768cd0ba471d8a2ad97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669b57e96ad14d62f3526bedc7cb19c05147c6ceb18c768cd0ba471d8a2ad97a->enter($__internal_669b57e96ad14d62f3526bedc7cb19c05147c6ceb18c768cd0ba471d8a2ad97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->getSourceContext()); })()), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 7, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 7, $this->getSourceContext()); })()));
        }
        // line 9
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 9, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 9, $this->getSourceContext()); })());
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        }
        
        $__internal_669b57e96ad14d62f3526bedc7cb19c05147c6ceb18c768cd0ba471d8a2ad97a->leave($__internal_669b57e96ad14d62f3526bedc7cb19c05147c6ceb18c768cd0ba471d8a2ad97a_prof);

        
        $__internal_511102ad56b780e9ff7aa9527c6d3ed9c671fd157f53d1fb225d1ede0fe975c5->leave($__internal_511102ad56b780e9ff7aa9527c6d3ed9c671fd157f53d1fb225d1ede0fe975c5_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "/Users/clement/Projet/Distri/vendor/knplabs/knp-menu-bundle/src/Resources/views/menu.html.twig");
    }
}
