<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_49e9aa2a7a2e851a0745096a0ba7ce1a6167c3d26e07a8ddba741befd9609bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e70328b96d8fe8262f085c9f1d4d7f76c9e5018a53772f1e61b5fffaf0d9757a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70328b96d8fe8262f085c9f1d4d7f76c9e5018a53772f1e61b5fffaf0d9757a->enter($__internal_e70328b96d8fe8262f085c9f1d4d7f76c9e5018a53772f1e61b5fffaf0d9757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8732b8e39910c098e83e573d8c3c04c43d67a8a35befb23fbf007b0922db1027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8732b8e39910c098e83e573d8c3c04c43d67a8a35befb23fbf007b0922db1027->enter($__internal_8732b8e39910c098e83e573d8c3c04c43d67a8a35befb23fbf007b0922db1027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e70328b96d8fe8262f085c9f1d4d7f76c9e5018a53772f1e61b5fffaf0d9757a->leave($__internal_e70328b96d8fe8262f085c9f1d4d7f76c9e5018a53772f1e61b5fffaf0d9757a_prof);

        
        $__internal_8732b8e39910c098e83e573d8c3c04c43d67a8a35befb23fbf007b0922db1027->leave($__internal_8732b8e39910c098e83e573d8c3c04c43d67a8a35befb23fbf007b0922db1027_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fba0945df334ce8ef75c6eff5a4b50b3e972631ece68fead25c57dba3a443ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fba0945df334ce8ef75c6eff5a4b50b3e972631ece68fead25c57dba3a443ea->enter($__internal_7fba0945df334ce8ef75c6eff5a4b50b3e972631ece68fead25c57dba3a443ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80ab3875f478209ab4166e2f2b5667af19ca49c674bdde9eb87f897ee51e1f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ab3875f478209ab4166e2f2b5667af19ca49c674bdde9eb87f897ee51e1f4c->enter($__internal_80ab3875f478209ab4166e2f2b5667af19ca49c674bdde9eb87f897ee51e1f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_80ab3875f478209ab4166e2f2b5667af19ca49c674bdde9eb87f897ee51e1f4c->leave($__internal_80ab3875f478209ab4166e2f2b5667af19ca49c674bdde9eb87f897ee51e1f4c_prof);

        
        $__internal_7fba0945df334ce8ef75c6eff5a4b50b3e972631ece68fead25c57dba3a443ea->leave($__internal_7fba0945df334ce8ef75c6eff5a4b50b3e972631ece68fead25c57dba3a443ea_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3121d1e3da07ca3322691c0ca09c68271a8b6bb4831dd1898d317e0b36bc3ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3121d1e3da07ca3322691c0ca09c68271a8b6bb4831dd1898d317e0b36bc3ddd->enter($__internal_3121d1e3da07ca3322691c0ca09c68271a8b6bb4831dd1898d317e0b36bc3ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43f475f1781d06a9922ad2955543c959c8c0ef00a7092b756610afe700219fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f475f1781d06a9922ad2955543c959c8c0ef00a7092b756610afe700219fc1->enter($__internal_43f475f1781d06a9922ad2955543c959c8c0ef00a7092b756610afe700219fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_43f475f1781d06a9922ad2955543c959c8c0ef00a7092b756610afe700219fc1->leave($__internal_43f475f1781d06a9922ad2955543c959c8c0ef00a7092b756610afe700219fc1_prof);

        
        $__internal_3121d1e3da07ca3322691c0ca09c68271a8b6bb4831dd1898d317e0b36bc3ddd->leave($__internal_3121d1e3da07ca3322691c0ca09c68271a8b6bb4831dd1898d317e0b36bc3ddd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_97fea36a139f1ef7fd5db7223cd283696d2fa0b444b7ccdcefeca9a0139c69a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fea36a139f1ef7fd5db7223cd283696d2fa0b444b7ccdcefeca9a0139c69a2->enter($__internal_97fea36a139f1ef7fd5db7223cd283696d2fa0b444b7ccdcefeca9a0139c69a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_164dfb70bc7f119a6592759c80fb70fd21cfffe537738df42c8139bd3fccb77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164dfb70bc7f119a6592759c80fb70fd21cfffe537738df42c8139bd3fccb77b->enter($__internal_164dfb70bc7f119a6592759c80fb70fd21cfffe537738df42c8139bd3fccb77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_164dfb70bc7f119a6592759c80fb70fd21cfffe537738df42c8139bd3fccb77b->leave($__internal_164dfb70bc7f119a6592759c80fb70fd21cfffe537738df42c8139bd3fccb77b_prof);

        
        $__internal_97fea36a139f1ef7fd5db7223cd283696d2fa0b444b7ccdcefeca9a0139c69a2->leave($__internal_97fea36a139f1ef7fd5db7223cd283696d2fa0b444b7ccdcefeca9a0139c69a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/clement/Projet/Distri/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
