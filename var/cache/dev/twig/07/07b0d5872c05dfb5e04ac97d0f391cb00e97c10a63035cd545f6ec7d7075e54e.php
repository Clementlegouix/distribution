<?php

/* adherent/edit.html.twig */
class __TwigTemplate_be404c644e18dce5bbac533327cbcedcb4a9a6e2596149c382a55df5899dbc89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "adherent/edit.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16c09f08783047adb6b38d62d6ba76791517d8ce5b58180dbc2410d39bbc1cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c09f08783047adb6b38d62d6ba76791517d8ce5b58180dbc2410d39bbc1cd1->enter($__internal_16c09f08783047adb6b38d62d6ba76791517d8ce5b58180dbc2410d39bbc1cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adherent/edit.html.twig"));

        $__internal_f5d8120a31b69726aaf41c32b8b9ba673ce007a7dff0370ddcadf1aa149f84e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d8120a31b69726aaf41c32b8b9ba673ce007a7dff0370ddcadf1aa149f84e9->enter($__internal_f5d8120a31b69726aaf41c32b8b9ba673ce007a7dff0370ddcadf1aa149f84e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adherent/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c09f08783047adb6b38d62d6ba76791517d8ce5b58180dbc2410d39bbc1cd1->leave($__internal_16c09f08783047adb6b38d62d6ba76791517d8ce5b58180dbc2410d39bbc1cd1_prof);

        
        $__internal_f5d8120a31b69726aaf41c32b8b9ba673ce007a7dff0370ddcadf1aa149f84e9->leave($__internal_f5d8120a31b69726aaf41c32b8b9ba673ce007a7dff0370ddcadf1aa149f84e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45777d7c3b2afd9a266ed1888c068fc8002f0b6421cf76064f1ac43170b92282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45777d7c3b2afd9a266ed1888c068fc8002f0b6421cf76064f1ac43170b92282->enter($__internal_45777d7c3b2afd9a266ed1888c068fc8002f0b6421cf76064f1ac43170b92282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4652ac177270cd6573dd1bbd4d3bbccb1d778eb6e17eb18c5136284bbc28fa68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4652ac177270cd6573dd1bbd4d3bbccb1d778eb6e17eb18c5136284bbc28fa68->enter($__internal_4652ac177270cd6573dd1bbd4d3bbccb1d778eb6e17eb18c5136284bbc28fa68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Créeer un adhérent";
        
        $__internal_4652ac177270cd6573dd1bbd4d3bbccb1d778eb6e17eb18c5136284bbc28fa68->leave($__internal_4652ac177270cd6573dd1bbd4d3bbccb1d778eb6e17eb18c5136284bbc28fa68_prof);

        
        $__internal_45777d7c3b2afd9a266ed1888c068fc8002f0b6421cf76064f1ac43170b92282->leave($__internal_45777d7c3b2afd9a266ed1888c068fc8002f0b6421cf76064f1ac43170b92282_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7c655c17ff04e412cb7bb08b034371693294c4c8cf50b1dc502cd9065635e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c655c17ff04e412cb7bb08b034371693294c4c8cf50b1dc502cd9065635e89->enter($__internal_e7c655c17ff04e412cb7bb08b034371693294c4c8cf50b1dc502cd9065635e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ade79d3554cf5e2d29e31ebbc5d336a72dd652813a4c28b48bb34840eadc109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ade79d3554cf5e2d29e31ebbc5d336a72dd652813a4c28b48bb34840eadc109->enter($__internal_3ade79d3554cf5e2d29e31ebbc5d336a72dd652813a4c28b48bb34840eadc109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<h2>Créer un adhérent</h2>

\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'errors');
        echo "
   
    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "Nom", array()), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "Nom", array()), 'errors');
        echo "
      </div>
      <div class=\"form-group col-md-4\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "Prenom", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "Prenom", array()), 'errors');
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "Idcarte", array()), 'errors');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "Idcarte", array()), 'widget');
        echo "
      </div>
      <div class=\"form-group col-md-4\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "Iddistri", array()), 'errors');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "Iddistri", array()), 'widget');
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "ordrePassage", array()), 'errors');
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "ordrePassage", array()), 'widget');
        echo "
      </div>
    </div>

    <div>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "Enregistrer", array()), 'widget');
        echo "
    </div>

";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_3ade79d3554cf5e2d29e31ebbc5d336a72dd652813a4c28b48bb34840eadc109->leave($__internal_3ade79d3554cf5e2d29e31ebbc5d336a72dd652813a4c28b48bb34840eadc109_prof);

        
        $__internal_e7c655c17ff04e412cb7bb08b034371693294c4c8cf50b1dc502cd9065635e89->leave($__internal_e7c655c17ff04e412cb7bb08b034371693294c4c8cf50b1dc502cd9065635e89_prof);

    }

    public function getTemplateName()
    {
        return "adherent/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 46,  141 => 43,  133 => 38,  129 => 37,  120 => 31,  116 => 30,  110 => 27,  106 => 26,  97 => 20,  93 => 19,  87 => 16,  83 => 15,  76 => 11,  72 => 10,  68 => 8,  59 => 7,  41 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/adherent/creer.html.twig #}
{% extends 'base.html.twig' %}


{% block title %}Créeer un adhérent{% endblock %}

{% block body %}
\t<h2>Créer un adhérent</h2>

\t\t{{ form_start(form) }}
    {{ form_errors(form) }}
   
    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        {{ form_widget(form.Nom) }}
        {{ form_errors(form.Nom) }}
      </div>
      <div class=\"form-group col-md-4\">
        {{ form_widget(form.Prenom) }}
        {{ form_errors(form.Prenom) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        {{ form_errors(form.Idcarte) }}
        {{ form_widget(form.Idcarte) }}
      </div>
      <div class=\"form-group col-md-4\">
        {{ form_errors(form.Iddistri) }}
        {{ form_widget(form.Iddistri) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        {{ form_errors(form.ordrePassage) }}
        {{ form_widget(form.ordrePassage) }}
      </div>
    </div>

    <div>
        {{ form_widget(form.Enregistrer) }}
    </div>

{{ form_end(form) }}
{% endblock %}", "adherent/edit.html.twig", "/Users/clement/Projet/Distri/templates/adherent/edit.html.twig");
    }
}
