<?php

/* adherent/creer.html.twig */
class __TwigTemplate_7c9b867ed2dc1062c3672c8d66c3cf182417bd4c7ea480020efa57fcca7d910d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "adherent/creer.html.twig", 2);
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
        $__internal_d9a399b3e4ec971a72b534c40fe2464d7a5c90d8912e601faa0a1bc6412af095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a399b3e4ec971a72b534c40fe2464d7a5c90d8912e601faa0a1bc6412af095->enter($__internal_d9a399b3e4ec971a72b534c40fe2464d7a5c90d8912e601faa0a1bc6412af095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adherent/creer.html.twig"));

        $__internal_ae6a9c996630383375c370a21ca359f6e85d2d249baaaf92ff3920ffe0bf63ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6a9c996630383375c370a21ca359f6e85d2d249baaaf92ff3920ffe0bf63ac->enter($__internal_ae6a9c996630383375c370a21ca359f6e85d2d249baaaf92ff3920ffe0bf63ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adherent/creer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a399b3e4ec971a72b534c40fe2464d7a5c90d8912e601faa0a1bc6412af095->leave($__internal_d9a399b3e4ec971a72b534c40fe2464d7a5c90d8912e601faa0a1bc6412af095_prof);

        
        $__internal_ae6a9c996630383375c370a21ca359f6e85d2d249baaaf92ff3920ffe0bf63ac->leave($__internal_ae6a9c996630383375c370a21ca359f6e85d2d249baaaf92ff3920ffe0bf63ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44ebaab1dd326cb0c181ecb0caa393f2c0bbf39f4423d6ea558318ba61a8d6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ebaab1dd326cb0c181ecb0caa393f2c0bbf39f4423d6ea558318ba61a8d6ff->enter($__internal_44ebaab1dd326cb0c181ecb0caa393f2c0bbf39f4423d6ea558318ba61a8d6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ba77236cd9fc11b6afe5ede587378cd54bdaa76fd7d70336f18d2df2d33df9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba77236cd9fc11b6afe5ede587378cd54bdaa76fd7d70336f18d2df2d33df9d->enter($__internal_5ba77236cd9fc11b6afe5ede587378cd54bdaa76fd7d70336f18d2df2d33df9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Créeer un adhérent";
        
        $__internal_5ba77236cd9fc11b6afe5ede587378cd54bdaa76fd7d70336f18d2df2d33df9d->leave($__internal_5ba77236cd9fc11b6afe5ede587378cd54bdaa76fd7d70336f18d2df2d33df9d_prof);

        
        $__internal_44ebaab1dd326cb0c181ecb0caa393f2c0bbf39f4423d6ea558318ba61a8d6ff->leave($__internal_44ebaab1dd326cb0c181ecb0caa393f2c0bbf39f4423d6ea558318ba61a8d6ff_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c07c84ce120106083bcf332a53e5652565338ae030f4452ffdd9d3b700a2e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c07c84ce120106083bcf332a53e5652565338ae030f4452ffdd9d3b700a2e40->enter($__internal_4c07c84ce120106083bcf332a53e5652565338ae030f4452ffdd9d3b700a2e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b68f0891902a0b9982279c3a7a603bf35152df8db69c66f478b5427ba1e484ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68f0891902a0b9982279c3a7a603bf35152df8db69c66f478b5427ba1e484ad->enter($__internal_b68f0891902a0b9982279c3a7a603bf35152df8db69c66f478b5427ba1e484ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b68f0891902a0b9982279c3a7a603bf35152df8db69c66f478b5427ba1e484ad->leave($__internal_b68f0891902a0b9982279c3a7a603bf35152df8db69c66f478b5427ba1e484ad_prof);

        
        $__internal_4c07c84ce120106083bcf332a53e5652565338ae030f4452ffdd9d3b700a2e40->leave($__internal_4c07c84ce120106083bcf332a53e5652565338ae030f4452ffdd9d3b700a2e40_prof);

    }

    public function getTemplateName()
    {
        return "adherent/creer.html.twig";
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
{% endblock %}", "adherent/creer.html.twig", "/Users/clement/Projet/Distri/templates/adherent/creer.html.twig");
    }
}
