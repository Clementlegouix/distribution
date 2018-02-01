<?php

/* knp_menu.html.twig */
class __TwigTemplate_56a4f1cd845810a90a3ba5907796f850e68ca8a3e4426fdc109d91e2d525fe38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1183863d42f3d0f9f2277102319901b844241e8ab76275492a08e8c81dd9a2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1183863d42f3d0f9f2277102319901b844241e8ab76275492a08e8c81dd9a2fb->enter($__internal_1183863d42f3d0f9f2277102319901b844241e8ab76275492a08e8c81dd9a2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_0ae2a89b1df1d9105cb71285880f31e6a4af890a068d96391b5225e3789159a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae2a89b1df1d9105cb71285880f31e6a4af890a068d96391b5225e3789159a2->enter($__internal_0ae2a89b1df1d9105cb71285880f31e6a4af890a068d96391b5225e3789159a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1183863d42f3d0f9f2277102319901b844241e8ab76275492a08e8c81dd9a2fb->leave($__internal_1183863d42f3d0f9f2277102319901b844241e8ab76275492a08e8c81dd9a2fb_prof);

        
        $__internal_0ae2a89b1df1d9105cb71285880f31e6a4af890a068d96391b5225e3789159a2->leave($__internal_0ae2a89b1df1d9105cb71285880f31e6a4af890a068d96391b5225e3789159a2_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_fd50576503cbcd0c9bb6e106daf7c09258c0ab0ef5028042b0c7564556d110a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd50576503cbcd0c9bb6e106daf7c09258c0ab0ef5028042b0c7564556d110a3->enter($__internal_fd50576503cbcd0c9bb6e106daf7c09258c0ab0ef5028042b0c7564556d110a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_e0c59a3170437dd965c761af18f67a3d22a4e9e273aafb138aa107f362f9fcef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c59a3170437dd965c761af18f67a3d22a4e9e273aafb138aa107f362f9fcef->enter($__internal_e0c59a3170437dd965c761af18f67a3d22a4e9e273aafb138aa107f362f9fcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e0c59a3170437dd965c761af18f67a3d22a4e9e273aafb138aa107f362f9fcef->leave($__internal_e0c59a3170437dd965c761af18f67a3d22a4e9e273aafb138aa107f362f9fcef_prof);

        
        $__internal_fd50576503cbcd0c9bb6e106daf7c09258c0ab0ef5028042b0c7564556d110a3->leave($__internal_fd50576503cbcd0c9bb6e106daf7c09258c0ab0ef5028042b0c7564556d110a3_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_f716cdfd6973f5bdb77fc0a9c5fb271c0244e3c6324725eaf9ca1546fd829b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f716cdfd6973f5bdb77fc0a9c5fb271c0244e3c6324725eaf9ca1546fd829b2a->enter($__internal_f716cdfd6973f5bdb77fc0a9c5fb271c0244e3c6324725eaf9ca1546fd829b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_1f9f9552d859b2a4cea9a926186eafca5ef1983373b5ea81a5390d42148bed2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9f9552d859b2a4cea9a926186eafca5ef1983373b5ea81a5390d42148bed2b->enter($__internal_1f9f9552d859b2a4cea9a926186eafca5ef1983373b5ea81a5390d42148bed2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_1f9f9552d859b2a4cea9a926186eafca5ef1983373b5ea81a5390d42148bed2b->leave($__internal_1f9f9552d859b2a4cea9a926186eafca5ef1983373b5ea81a5390d42148bed2b_prof);

        
        $__internal_f716cdfd6973f5bdb77fc0a9c5fb271c0244e3c6324725eaf9ca1546fd829b2a->leave($__internal_f716cdfd6973f5bdb77fc0a9c5fb271c0244e3c6324725eaf9ca1546fd829b2a_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_dfbde5c78a543a6540270c0abecb2f3629460e1a62ce7f47124fe1e1c6fb80cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbde5c78a543a6540270c0abecb2f3629460e1a62ce7f47124fe1e1c6fb80cf->enter($__internal_dfbde5c78a543a6540270c0abecb2f3629460e1a62ce7f47124fe1e1c6fb80cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_8b3288462c15c44284e8f73a2cab1afd10fdec55ec4a5cda4201f8b3c1d4fae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3288462c15c44284e8f73a2cab1afd10fdec55ec4a5cda4201f8b3c1d4fae3->enter($__internal_8b3288462c15c44284e8f73a2cab1afd10fdec55ec4a5cda4201f8b3c1d4fae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 23, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 25, $this->getSourceContext()); })()));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_8b3288462c15c44284e8f73a2cab1afd10fdec55ec4a5cda4201f8b3c1d4fae3->leave($__internal_8b3288462c15c44284e8f73a2cab1afd10fdec55ec4a5cda4201f8b3c1d4fae3_prof);

        
        $__internal_dfbde5c78a543a6540270c0abecb2f3629460e1a62ce7f47124fe1e1c6fb80cf->leave($__internal_dfbde5c78a543a6540270c0abecb2f3629460e1a62ce7f47124fe1e1c6fb80cf_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_5c9b9f1c9753cfe5fe5e85eacba4e803a86b6e04f0e12ae5044dd859b92a5adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9b9f1c9753cfe5fe5e85eacba4e803a86b6e04f0e12ae5044dd859b92a5adb->enter($__internal_5c9b9f1c9753cfe5fe5e85eacba4e803a86b6e04f0e12ae5044dd859b92a5adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_e49c6d3641b93db12680dc52e353af6d6d37021b5062a631832c3d037f5f73ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49c6d3641b93db12680dc52e353af6d6d37021b5062a631832c3d037f5f73ea->enter($__internal_e49c6d3641b93db12680dc52e353af6d6d37021b5062a631832c3d037f5f73ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 33, $this->getSourceContext()); })());
        // line 34
        $context["currentItem"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->getSourceContext()); })());
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 36, $this->getSourceContext()); })()), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 37, $this->getSourceContext()); })()), array("depth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 37, $this->getSourceContext()); })()), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->getSourceContext()); })()), "matchingDepth", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->getSourceContext()); })()), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 41, $this->getSourceContext()); })()), array("matchingDepth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 41, $this->getSourceContext()); })()), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 43, $this->getSourceContext()); })()), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 47, $this->getSourceContext()); })());
        // line 48
        $context["options"] = (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 48, $this->getSourceContext()); })());
        
        $__internal_e49c6d3641b93db12680dc52e353af6d6d37021b5062a631832c3d037f5f73ea->leave($__internal_e49c6d3641b93db12680dc52e353af6d6d37021b5062a631832c3d037f5f73ea_prof);

        
        $__internal_5c9b9f1c9753cfe5fe5e85eacba4e803a86b6e04f0e12ae5044dd859b92a5adb->leave($__internal_5c9b9f1c9753cfe5fe5e85eacba4e803a86b6e04f0e12ae5044dd859b92a5adb_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_a9c4f10712b202512995870ca946541de21c413050d252e7fccd79c94caaf6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c4f10712b202512995870ca946541de21c413050d252e7fccd79c94caaf6cb->enter($__internal_a9c4f10712b202512995870ca946541de21c413050d252e7fccd79c94caaf6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_eb93609753dabad3ce1fcf9dfdd7246175ec3a2261fa757460f2688295d37c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb93609753dabad3ce1fcf9dfdd7246175ec3a2261fa757460f2688295d37c28->enter($__internal_eb93609753dabad3ce1fcf9dfdd7246175ec3a2261fa757460f2688295d37c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 52, $this->getSourceContext()); })()), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 55, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 55, $this->getSourceContext()); })())), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 56, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 56, $this->getSourceContext()); })()), "currentClass", array())));
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 57
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 57, $this->getSourceContext()); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 57, $this->getSourceContext()); })()), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 58, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 58, $this->getSourceContext()); })()), "ancestorClass", array())));
            }
            // line 60
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 60, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 61, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 61, $this->getSourceContext()); })()), "firstClass", array())));
            }
            // line 63
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 63, $this->getSourceContext()); })()), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 64, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 64, $this->getSourceContext()); })()), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 68, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 68, $this->getSourceContext()); })()), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 69, $this->getSourceContext()); })()), "branch_class", array())) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->getSourceContext()); })()), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 70, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 70, $this->getSourceContext()); })()), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 72, $this->getSourceContext()); })()), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 73, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 73, $this->getSourceContext()); })()), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 76, $this->getSourceContext()); })()), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 77, $this->getSourceContext()); })()))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 78, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 78, $this->getSourceContext()); })()), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 82, $this->getSourceContext()); })()));
            echo ">";
            // line 83
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->getSourceContext()); })()), "uri", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 83, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->getSourceContext()); })())), "method") || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 83, $this->getSourceContext()); })()), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 90, $this->getSourceContext()); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->getSourceContext()); })()), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 91, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 91, $this->getSourceContext()); })()), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_eb93609753dabad3ce1fcf9dfdd7246175ec3a2261fa757460f2688295d37c28->leave($__internal_eb93609753dabad3ce1fcf9dfdd7246175ec3a2261fa757460f2688295d37c28_prof);

        
        $__internal_a9c4f10712b202512995870ca946541de21c413050d252e7fccd79c94caaf6cb->leave($__internal_a9c4f10712b202512995870ca946541de21c413050d252e7fccd79c94caaf6cb_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_79777c27749cbf96234122623cbc994bfc53dafe5d13356cad2bae3e4f7d45ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79777c27749cbf96234122623cbc994bfc53dafe5d13356cad2bae3e4f7d45ef->enter($__internal_79777c27749cbf96234122623cbc994bfc53dafe5d13356cad2bae3e4f7d45ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_3d21e3b186b7cc1e2e27fbbfb75641bd5ba964fcc462291c354d150a5a7ab2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d21e3b186b7cc1e2e27fbbfb75641bd5ba964fcc462291c354d150a5a7ab2d2->enter($__internal_3d21e3b186b7cc1e2e27fbbfb75641bd5ba964fcc462291c354d150a5a7ab2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 98
        echo "    ";
        $context["knp_menu"] = $this;
        // line 99
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 99, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 99, $this->getSourceContext()); })())), "method")) {
            // line 100
            echo "    <a class=\"active nav-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 100, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
            echo "\"";
            echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 100, $this->getSourceContext()); })()), "linkAttributes", array()));
            echo ">
        ";
            // line 101
            $this->displayBlock("label", $context, $blocks);
            echo "
    </a>
    ";
        } else {
            // line 104
            echo "        <a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 104, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
            echo "\"";
            echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 104, $this->getSourceContext()); })()), "linkAttributes", array()));
            echo ">
        ";
            // line 105
            $this->displayBlock("label", $context, $blocks);
            echo "
    </a>
    ";
        }
        
        $__internal_3d21e3b186b7cc1e2e27fbbfb75641bd5ba964fcc462291c354d150a5a7ab2d2->leave($__internal_3d21e3b186b7cc1e2e27fbbfb75641bd5ba964fcc462291c354d150a5a7ab2d2_prof);

        
        $__internal_79777c27749cbf96234122623cbc994bfc53dafe5d13356cad2bae3e4f7d45ef->leave($__internal_79777c27749cbf96234122623cbc994bfc53dafe5d13356cad2bae3e4f7d45ef_prof);

    }

    // line 110
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_ef179de9bc32bef56cf80d150405c3163224b15bf2f3ebe7328cd4389136a221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef179de9bc32bef56cf80d150405c3163224b15bf2f3ebe7328cd4389136a221->enter($__internal_ef179de9bc32bef56cf80d150405c3163224b15bf2f3ebe7328cd4389136a221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_5386817c26f49d98002cafc28e7b790f7eca28c75fddfe6ce278e889b4196784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5386817c26f49d98002cafc28e7b790f7eca28c75fddfe6ce278e889b4196784->enter($__internal_5386817c26f49d98002cafc28e7b790f7eca28c75fddfe6ce278e889b4196784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 110, $this->getSourceContext()); })()), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_5386817c26f49d98002cafc28e7b790f7eca28c75fddfe6ce278e889b4196784->leave($__internal_5386817c26f49d98002cafc28e7b790f7eca28c75fddfe6ce278e889b4196784_prof);

        
        $__internal_ef179de9bc32bef56cf80d150405c3163224b15bf2f3ebe7328cd4389136a221->leave($__internal_ef179de9bc32bef56cf80d150405c3163224b15bf2f3ebe7328cd4389136a221_prof);

    }

    // line 112
    public function block_label($context, array $blocks = array())
    {
        $__internal_ca511d9e578b47eed528b309bcae78588f627cecc099ad375eef54047fb9d209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca511d9e578b47eed528b309bcae78588f627cecc099ad375eef54047fb9d209->enter($__internal_ca511d9e578b47eed528b309bcae78588f627cecc099ad375eef54047fb9d209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_7e97ef1a84c5af32d83aa17e952eede5a75dee06d7c811726c9301576e7f15ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e97ef1a84c5af32d83aa17e952eede5a75dee06d7c811726c9301576e7f15ff->enter($__internal_7e97ef1a84c5af32d83aa17e952eede5a75dee06d7c811726c9301576e7f15ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 112, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 112, $this->getSourceContext()); })()), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 112, $this->getSourceContext()); })()), "label", array());
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 112, $this->getSourceContext()); })()), "label", array()), "html", null, true);
        }
        
        $__internal_7e97ef1a84c5af32d83aa17e952eede5a75dee06d7c811726c9301576e7f15ff->leave($__internal_7e97ef1a84c5af32d83aa17e952eede5a75dee06d7c811726c9301576e7f15ff_prof);

        
        $__internal_ca511d9e578b47eed528b309bcae78588f627cecc099ad375eef54047fb9d209->leave($__internal_ca511d9e578b47eed528b309bcae78588f627cecc099ad375eef54047fb9d209_prof);

    }

    // line 3
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_05ea040a6311cd49727ad909636e73606fc9beded9bb3efd733d91916594fc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_05ea040a6311cd49727ad909636e73606fc9beded9bb3efd733d91916594fc1e->enter($__internal_05ea040a6311cd49727ad909636e73606fc9beded9bb3efd733d91916594fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_ffc5b659c56bd9e576092db78705f45aecd6b994cf6492c50b32619ec974ebd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ffc5b659c56bd9e576092db78705f45aecd6b994cf6492c50b32619ec974ebd5->enter($__internal_ffc5b659c56bd9e576092db78705f45aecd6b994cf6492c50b32619ec974ebd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 4, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_ffc5b659c56bd9e576092db78705f45aecd6b994cf6492c50b32619ec974ebd5->leave($__internal_ffc5b659c56bd9e576092db78705f45aecd6b994cf6492c50b32619ec974ebd5_prof);

            
            $__internal_05ea040a6311cd49727ad909636e73606fc9beded9bb3efd733d91916594fc1e->leave($__internal_05ea040a6311cd49727ad909636e73606fc9beded9bb3efd733d91916594fc1e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 6,  406 => 5,  402 => 4,  384 => 3,  362 => 112,  339 => 110,  325 => 105,  318 => 104,  312 => 101,  305 => 100,  303 => 99,  300 => 98,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}
    {% import _self as knp_menu %}
    {%- if matcher.isCurrent(item) %}
    <a class=\"active nav-link\" href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>
        {{ block('label') }}
    </a>
    {% else %}
        <a class=\"nav-link\" href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>
        {{ block('label') }}
    </a>
    {% endif %}
{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/Users/clement/Projet/Distri/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
