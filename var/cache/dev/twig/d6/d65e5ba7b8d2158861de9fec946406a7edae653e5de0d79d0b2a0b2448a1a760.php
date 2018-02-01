<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7bda55978a005354a2a536e527f1987908e39ad88658ce776d302e457fbe3f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07723d74edc6ceeb85b1867aa20a756c72406d4ae6fc66d93b06191ac81eca22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07723d74edc6ceeb85b1867aa20a756c72406d4ae6fc66d93b06191ac81eca22->enter($__internal_07723d74edc6ceeb85b1867aa20a756c72406d4ae6fc66d93b06191ac81eca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e5e256faae7e1365e83f090d679f7f7d40ca28e49719049d219248d1b07a3f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e256faae7e1365e83f090d679f7f7d40ca28e49719049d219248d1b07a3f9f->enter($__internal_e5e256faae7e1365e83f090d679f7f7d40ca28e49719049d219248d1b07a3f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07723d74edc6ceeb85b1867aa20a756c72406d4ae6fc66d93b06191ac81eca22->leave($__internal_07723d74edc6ceeb85b1867aa20a756c72406d4ae6fc66d93b06191ac81eca22_prof);

        
        $__internal_e5e256faae7e1365e83f090d679f7f7d40ca28e49719049d219248d1b07a3f9f->leave($__internal_e5e256faae7e1365e83f090d679f7f7d40ca28e49719049d219248d1b07a3f9f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28a9e498a15ce845dcfc995daf2141c77224284e04cac4041c9f500576a67ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a9e498a15ce845dcfc995daf2141c77224284e04cac4041c9f500576a67ce8->enter($__internal_28a9e498a15ce845dcfc995daf2141c77224284e04cac4041c9f500576a67ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a33d28910eecc4d1cd272c57b0621cbc14fd6da32573f75f465d03fe866d6d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33d28910eecc4d1cd272c57b0621cbc14fd6da32573f75f465d03fe866d6d33->enter($__internal_a33d28910eecc4d1cd272c57b0621cbc14fd6da32573f75f465d03fe866d6d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a33d28910eecc4d1cd272c57b0621cbc14fd6da32573f75f465d03fe866d6d33->leave($__internal_a33d28910eecc4d1cd272c57b0621cbc14fd6da32573f75f465d03fe866d6d33_prof);

        
        $__internal_28a9e498a15ce845dcfc995daf2141c77224284e04cac4041c9f500576a67ce8->leave($__internal_28a9e498a15ce845dcfc995daf2141c77224284e04cac4041c9f500576a67ce8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_621681e731f6dc806ee0a896d7c0063e1d2ee86d359a2b10cc874dfbf07772f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621681e731f6dc806ee0a896d7c0063e1d2ee86d359a2b10cc874dfbf07772f1->enter($__internal_621681e731f6dc806ee0a896d7c0063e1d2ee86d359a2b10cc874dfbf07772f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9234728fffb0c603f4cf9627bff2957740937d22a6603b91bc07638e378a15ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9234728fffb0c603f4cf9627bff2957740937d22a6603b91bc07638e378a15ee->enter($__internal_9234728fffb0c603f4cf9627bff2957740937d22a6603b91bc07638e378a15ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_9234728fffb0c603f4cf9627bff2957740937d22a6603b91bc07638e378a15ee->leave($__internal_9234728fffb0c603f4cf9627bff2957740937d22a6603b91bc07638e378a15ee_prof);

        
        $__internal_621681e731f6dc806ee0a896d7c0063e1d2ee86d359a2b10cc874dfbf07772f1->leave($__internal_621681e731f6dc806ee0a896d7c0063e1d2ee86d359a2b10cc874dfbf07772f1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9daf211fef8b5face707aa23d2451257c3ce1a1e7795985d425107662072bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9daf211fef8b5face707aa23d2451257c3ce1a1e7795985d425107662072bfe->enter($__internal_c9daf211fef8b5face707aa23d2451257c3ce1a1e7795985d425107662072bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ea6ca82299146e9183c30ffcc86985fb2187c5b6ed30fc64c41a29689b7248e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea6ca82299146e9183c30ffcc86985fb2187c5b6ed30fc64c41a29689b7248e->enter($__internal_8ea6ca82299146e9183c30ffcc86985fb2187c5b6ed30fc64c41a29689b7248e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8ea6ca82299146e9183c30ffcc86985fb2187c5b6ed30fc64c41a29689b7248e->leave($__internal_8ea6ca82299146e9183c30ffcc86985fb2187c5b6ed30fc64c41a29689b7248e_prof);

        
        $__internal_c9daf211fef8b5face707aa23d2451257c3ce1a1e7795985d425107662072bfe->leave($__internal_c9daf211fef8b5face707aa23d2451257c3ce1a1e7795985d425107662072bfe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/clement/Projet/Distri/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
