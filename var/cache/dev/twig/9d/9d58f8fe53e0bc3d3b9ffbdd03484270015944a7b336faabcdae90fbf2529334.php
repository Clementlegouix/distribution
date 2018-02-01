<?php

/* form_div_layout.html.twig */
class __TwigTemplate_36674a8072c605a176e8cd27c02bbbf680364711d76e5c29aa04925f77170eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ec936dab632bd13553601244fc5a0fd60c6bede54430ce76ce92a85964563b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec936dab632bd13553601244fc5a0fd60c6bede54430ce76ce92a85964563b5->enter($__internal_2ec936dab632bd13553601244fc5a0fd60c6bede54430ce76ce92a85964563b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_b6346ffa00cb8594d3857ab0a53f7582a127722d9b3dddc946e0e55d32d01b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6346ffa00cb8594d3857ab0a53f7582a127722d9b3dddc946e0e55d32d01b7e->enter($__internal_b6346ffa00cb8594d3857ab0a53f7582a127722d9b3dddc946e0e55d32d01b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_2ec936dab632bd13553601244fc5a0fd60c6bede54430ce76ce92a85964563b5->leave($__internal_2ec936dab632bd13553601244fc5a0fd60c6bede54430ce76ce92a85964563b5_prof);

        
        $__internal_b6346ffa00cb8594d3857ab0a53f7582a127722d9b3dddc946e0e55d32d01b7e->leave($__internal_b6346ffa00cb8594d3857ab0a53f7582a127722d9b3dddc946e0e55d32d01b7e_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_bafa98b39da3a4b963114f3986bcfbf902d99b9c8a2016045f599165df77e3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafa98b39da3a4b963114f3986bcfbf902d99b9c8a2016045f599165df77e3cb->enter($__internal_bafa98b39da3a4b963114f3986bcfbf902d99b9c8a2016045f599165df77e3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_2f81e2349472bec237907c0543d1715c3c4c86119c67cf78219612531816d8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f81e2349472bec237907c0543d1715c3c4c86119c67cf78219612531816d8c7->enter($__internal_2f81e2349472bec237907c0543d1715c3c4c86119c67cf78219612531816d8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_2f81e2349472bec237907c0543d1715c3c4c86119c67cf78219612531816d8c7->leave($__internal_2f81e2349472bec237907c0543d1715c3c4c86119c67cf78219612531816d8c7_prof);

        
        $__internal_bafa98b39da3a4b963114f3986bcfbf902d99b9c8a2016045f599165df77e3cb->leave($__internal_bafa98b39da3a4b963114f3986bcfbf902d99b9c8a2016045f599165df77e3cb_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6140dbbeeba4d3a919eb90941173b11ae944b2713e489cd12fc9dbb5a8a41fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6140dbbeeba4d3a919eb90941173b11ae944b2713e489cd12fc9dbb5a8a41fac->enter($__internal_6140dbbeeba4d3a919eb90941173b11ae944b2713e489cd12fc9dbb5a8a41fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f540a8685e7cace45c5b010ae05d5e78f1928f9a269186d8689ec9ae28b962d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f540a8685e7cace45c5b010ae05d5e78f1928f9a269186d8689ec9ae28b962d8->enter($__internal_f540a8685e7cace45c5b010ae05d5e78f1928f9a269186d8689ec9ae28b962d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_f540a8685e7cace45c5b010ae05d5e78f1928f9a269186d8689ec9ae28b962d8->leave($__internal_f540a8685e7cace45c5b010ae05d5e78f1928f9a269186d8689ec9ae28b962d8_prof);

        
        $__internal_6140dbbeeba4d3a919eb90941173b11ae944b2713e489cd12fc9dbb5a8a41fac->leave($__internal_6140dbbeeba4d3a919eb90941173b11ae944b2713e489cd12fc9dbb5a8a41fac_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_140bb9f2597ba66e05829f514fa64587ca49caa7fc30934f99d0d12c2f72fed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140bb9f2597ba66e05829f514fa64587ca49caa7fc30934f99d0d12c2f72fed6->enter($__internal_140bb9f2597ba66e05829f514fa64587ca49caa7fc30934f99d0d12c2f72fed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_dfa5f6eb144c5a8296b57931ec8b463937d0e24776b3fc0c198ea9847ae10a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa5f6eb144c5a8296b57931ec8b463937d0e24776b3fc0c198ea9847ae10a4a->enter($__internal_dfa5f6eb144c5a8296b57931ec8b463937d0e24776b3fc0c198ea9847ae10a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_dfa5f6eb144c5a8296b57931ec8b463937d0e24776b3fc0c198ea9847ae10a4a->leave($__internal_dfa5f6eb144c5a8296b57931ec8b463937d0e24776b3fc0c198ea9847ae10a4a_prof);

        
        $__internal_140bb9f2597ba66e05829f514fa64587ca49caa7fc30934f99d0d12c2f72fed6->leave($__internal_140bb9f2597ba66e05829f514fa64587ca49caa7fc30934f99d0d12c2f72fed6_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_3a5a80017c1f2a821f1d5a70b10095ea7e0467ec047089e19a92706c97e576ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5a80017c1f2a821f1d5a70b10095ea7e0467ec047089e19a92706c97e576ca->enter($__internal_3a5a80017c1f2a821f1d5a70b10095ea7e0467ec047089e19a92706c97e576ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_63ff7033bc118ecb20188ebb66676e420a0d35818de143b38952ff8e31b50113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ff7033bc118ecb20188ebb66676e420a0d35818de143b38952ff8e31b50113->enter($__internal_63ff7033bc118ecb20188ebb66676e420a0d35818de143b38952ff8e31b50113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_63ff7033bc118ecb20188ebb66676e420a0d35818de143b38952ff8e31b50113->leave($__internal_63ff7033bc118ecb20188ebb66676e420a0d35818de143b38952ff8e31b50113_prof);

        
        $__internal_3a5a80017c1f2a821f1d5a70b10095ea7e0467ec047089e19a92706c97e576ca->leave($__internal_3a5a80017c1f2a821f1d5a70b10095ea7e0467ec047089e19a92706c97e576ca_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1b07da3f1e52519091ebeeabc01dfd2534f9c183647b1eb8d40461e81efdd086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b07da3f1e52519091ebeeabc01dfd2534f9c183647b1eb8d40461e81efdd086->enter($__internal_1b07da3f1e52519091ebeeabc01dfd2534f9c183647b1eb8d40461e81efdd086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_28a63a024d6b5fe32b38cedec946663fb62af103c2d9db0201fedaa01f4f8d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a63a024d6b5fe32b38cedec946663fb62af103c2d9db0201fedaa01f4f8d0d->enter($__internal_28a63a024d6b5fe32b38cedec946663fb62af103c2d9db0201fedaa01f4f8d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_28a63a024d6b5fe32b38cedec946663fb62af103c2d9db0201fedaa01f4f8d0d->leave($__internal_28a63a024d6b5fe32b38cedec946663fb62af103c2d9db0201fedaa01f4f8d0d_prof);

        
        $__internal_1b07da3f1e52519091ebeeabc01dfd2534f9c183647b1eb8d40461e81efdd086->leave($__internal_1b07da3f1e52519091ebeeabc01dfd2534f9c183647b1eb8d40461e81efdd086_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_91585493e007db6cef2bd607567780aa4eaf4347b9de3e607162a21f60ced5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91585493e007db6cef2bd607567780aa4eaf4347b9de3e607162a21f60ced5be->enter($__internal_91585493e007db6cef2bd607567780aa4eaf4347b9de3e607162a21f60ced5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_708f82b1f0fb8f984b14b80aaa52a201d3a08952e10142197ef84efc750c50cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708f82b1f0fb8f984b14b80aaa52a201d3a08952e10142197ef84efc750c50cf->enter($__internal_708f82b1f0fb8f984b14b80aaa52a201d3a08952e10142197ef84efc750c50cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_708f82b1f0fb8f984b14b80aaa52a201d3a08952e10142197ef84efc750c50cf->leave($__internal_708f82b1f0fb8f984b14b80aaa52a201d3a08952e10142197ef84efc750c50cf_prof);

        
        $__internal_91585493e007db6cef2bd607567780aa4eaf4347b9de3e607162a21f60ced5be->leave($__internal_91585493e007db6cef2bd607567780aa4eaf4347b9de3e607162a21f60ced5be_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a5fd0b33ad01d244d81548366039e08b654b723a18071319acdba291400fd764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fd0b33ad01d244d81548366039e08b654b723a18071319acdba291400fd764->enter($__internal_a5fd0b33ad01d244d81548366039e08b654b723a18071319acdba291400fd764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_0bc176c2904f3b5e171b32a7cd10f5076ced9a1a747661537f844ccbbb5ffcc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc176c2904f3b5e171b32a7cd10f5076ced9a1a747661537f844ccbbb5ffcc4->enter($__internal_0bc176c2904f3b5e171b32a7cd10f5076ced9a1a747661537f844ccbbb5ffcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_0bc176c2904f3b5e171b32a7cd10f5076ced9a1a747661537f844ccbbb5ffcc4->leave($__internal_0bc176c2904f3b5e171b32a7cd10f5076ced9a1a747661537f844ccbbb5ffcc4_prof);

        
        $__internal_a5fd0b33ad01d244d81548366039e08b654b723a18071319acdba291400fd764->leave($__internal_a5fd0b33ad01d244d81548366039e08b654b723a18071319acdba291400fd764_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6a594a957f03b63aaa61a812a3fddace17f25295f551a56eeabc2f2c1c103aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a594a957f03b63aaa61a812a3fddace17f25295f551a56eeabc2f2c1c103aa0->enter($__internal_6a594a957f03b63aaa61a812a3fddace17f25295f551a56eeabc2f2c1c103aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_37b45fdb17ddb20d66e0417b315da9a0615184ade622189db9216a76bdbc8378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b45fdb17ddb20d66e0417b315da9a0615184ade622189db9216a76bdbc8378->enter($__internal_37b45fdb17ddb20d66e0417b315da9a0615184ade622189db9216a76bdbc8378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_37b45fdb17ddb20d66e0417b315da9a0615184ade622189db9216a76bdbc8378->leave($__internal_37b45fdb17ddb20d66e0417b315da9a0615184ade622189db9216a76bdbc8378_prof);

        
        $__internal_6a594a957f03b63aaa61a812a3fddace17f25295f551a56eeabc2f2c1c103aa0->leave($__internal_6a594a957f03b63aaa61a812a3fddace17f25295f551a56eeabc2f2c1c103aa0_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_55a1ade980c12ba97d6c077caf867312b62141d8536af428b4edb8b818d44945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a1ade980c12ba97d6c077caf867312b62141d8536af428b4edb8b818d44945->enter($__internal_55a1ade980c12ba97d6c077caf867312b62141d8536af428b4edb8b818d44945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_12bc259ea703c824430d13c7af9456aa4700f5838048398fa814151e0c497be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bc259ea703c824430d13c7af9456aa4700f5838048398fa814151e0c497be9->enter($__internal_12bc259ea703c824430d13c7af9456aa4700f5838048398fa814151e0c497be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_ac2f49f7e8038a208fa801daecac1fa90c60ef8c33b63fad7a7e4a088ed3e55e = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_ac2f49f7e8038a208fa801daecac1fa90c60ef8c33b63fad7a7e4a088ed3e55e)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_ac2f49f7e8038a208fa801daecac1fa90c60ef8c33b63fad7a7e4a088ed3e55e);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_12bc259ea703c824430d13c7af9456aa4700f5838048398fa814151e0c497be9->leave($__internal_12bc259ea703c824430d13c7af9456aa4700f5838048398fa814151e0c497be9_prof);

        
        $__internal_55a1ade980c12ba97d6c077caf867312b62141d8536af428b4edb8b818d44945->leave($__internal_55a1ade980c12ba97d6c077caf867312b62141d8536af428b4edb8b818d44945_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c0dca5d616138426d6dbb42f1ef5c8467ae7b851a40f41810ae27f4dd98369e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dca5d616138426d6dbb42f1ef5c8467ae7b851a40f41810ae27f4dd98369e9->enter($__internal_c0dca5d616138426d6dbb42f1ef5c8467ae7b851a40f41810ae27f4dd98369e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d9a53c8f728a55377782569d357b399db9575de7b40a40aa8dd823025845805e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a53c8f728a55377782569d357b399db9575de7b40a40aa8dd823025845805e->enter($__internal_d9a53c8f728a55377782569d357b399db9575de7b40a40aa8dd823025845805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_d9a53c8f728a55377782569d357b399db9575de7b40a40aa8dd823025845805e->leave($__internal_d9a53c8f728a55377782569d357b399db9575de7b40a40aa8dd823025845805e_prof);

        
        $__internal_c0dca5d616138426d6dbb42f1ef5c8467ae7b851a40f41810ae27f4dd98369e9->leave($__internal_c0dca5d616138426d6dbb42f1ef5c8467ae7b851a40f41810ae27f4dd98369e9_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ebcc6edddec66c5becbadbe7a8ae6b43acc1693c7c8905dfb6718a1817d6d7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcc6edddec66c5becbadbe7a8ae6b43acc1693c7c8905dfb6718a1817d6d7dc->enter($__internal_ebcc6edddec66c5becbadbe7a8ae6b43acc1693c7c8905dfb6718a1817d6d7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_21170f7efca6af5006c8b483027dfdec125c8c2def0165a187ad13892a8b1366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21170f7efca6af5006c8b483027dfdec125c8c2def0165a187ad13892a8b1366->enter($__internal_21170f7efca6af5006c8b483027dfdec125c8c2def0165a187ad13892a8b1366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_21170f7efca6af5006c8b483027dfdec125c8c2def0165a187ad13892a8b1366->leave($__internal_21170f7efca6af5006c8b483027dfdec125c8c2def0165a187ad13892a8b1366_prof);

        
        $__internal_ebcc6edddec66c5becbadbe7a8ae6b43acc1693c7c8905dfb6718a1817d6d7dc->leave($__internal_ebcc6edddec66c5becbadbe7a8ae6b43acc1693c7c8905dfb6718a1817d6d7dc_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8b3fb5904f073edba868ebdcac735dd17afa22cf030d092cb75ebebd6813bd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3fb5904f073edba868ebdcac735dd17afa22cf030d092cb75ebebd6813bd41->enter($__internal_8b3fb5904f073edba868ebdcac735dd17afa22cf030d092cb75ebebd6813bd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a04880b42e0d36b365272997b91acf7e40febd637d4e2f804f63f5382c078ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04880b42e0d36b365272997b91acf7e40febd637d4e2f804f63f5382c078ae1->enter($__internal_a04880b42e0d36b365272997b91acf7e40febd637d4e2f804f63f5382c078ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_a04880b42e0d36b365272997b91acf7e40febd637d4e2f804f63f5382c078ae1->leave($__internal_a04880b42e0d36b365272997b91acf7e40febd637d4e2f804f63f5382c078ae1_prof);

        
        $__internal_8b3fb5904f073edba868ebdcac735dd17afa22cf030d092cb75ebebd6813bd41->leave($__internal_8b3fb5904f073edba868ebdcac735dd17afa22cf030d092cb75ebebd6813bd41_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4a0a016cff4e2b30741003a5e2afa0b89a1fb15a22d3990e52eca72c26a3fb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0a016cff4e2b30741003a5e2afa0b89a1fb15a22d3990e52eca72c26a3fb04->enter($__internal_4a0a016cff4e2b30741003a5e2afa0b89a1fb15a22d3990e52eca72c26a3fb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_2b81eb345475da3fcf326c722679dc8cffd19241484e2eaf5db632f2e669ebe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b81eb345475da3fcf326c722679dc8cffd19241484e2eaf5db632f2e669ebe8->enter($__internal_2b81eb345475da3fcf326c722679dc8cffd19241484e2eaf5db632f2e669ebe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_2b81eb345475da3fcf326c722679dc8cffd19241484e2eaf5db632f2e669ebe8->leave($__internal_2b81eb345475da3fcf326c722679dc8cffd19241484e2eaf5db632f2e669ebe8_prof);

        
        $__internal_4a0a016cff4e2b30741003a5e2afa0b89a1fb15a22d3990e52eca72c26a3fb04->leave($__internal_4a0a016cff4e2b30741003a5e2afa0b89a1fb15a22d3990e52eca72c26a3fb04_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_686a56b8f34394d44a1013477f2ca2655d4b6af52eb239ca86d5fe9fbedd2893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686a56b8f34394d44a1013477f2ca2655d4b6af52eb239ca86d5fe9fbedd2893->enter($__internal_686a56b8f34394d44a1013477f2ca2655d4b6af52eb239ca86d5fe9fbedd2893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_27cbf6c6fdf7f1baf73f385d90cc40bfb17af01508d528119f26329449fb855e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cbf6c6fdf7f1baf73f385d90cc40bfb17af01508d528119f26329449fb855e->enter($__internal_27cbf6c6fdf7f1baf73f385d90cc40bfb17af01508d528119f26329449fb855e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_27cbf6c6fdf7f1baf73f385d90cc40bfb17af01508d528119f26329449fb855e->leave($__internal_27cbf6c6fdf7f1baf73f385d90cc40bfb17af01508d528119f26329449fb855e_prof);

        
        $__internal_686a56b8f34394d44a1013477f2ca2655d4b6af52eb239ca86d5fe9fbedd2893->leave($__internal_686a56b8f34394d44a1013477f2ca2655d4b6af52eb239ca86d5fe9fbedd2893_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d09deef9673724550728bccbed361c8e7a1d01f27baabe494516d85ed5187c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09deef9673724550728bccbed361c8e7a1d01f27baabe494516d85ed5187c23->enter($__internal_d09deef9673724550728bccbed361c8e7a1d01f27baabe494516d85ed5187c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6f97ab7ee8181dc135cc7680cc524fb026008622ce3458614d0952432be2ab9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f97ab7ee8181dc135cc7680cc524fb026008622ce3458614d0952432be2ab9d->enter($__internal_6f97ab7ee8181dc135cc7680cc524fb026008622ce3458614d0952432be2ab9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_6f97ab7ee8181dc135cc7680cc524fb026008622ce3458614d0952432be2ab9d->leave($__internal_6f97ab7ee8181dc135cc7680cc524fb026008622ce3458614d0952432be2ab9d_prof);

        
        $__internal_d09deef9673724550728bccbed361c8e7a1d01f27baabe494516d85ed5187c23->leave($__internal_d09deef9673724550728bccbed361c8e7a1d01f27baabe494516d85ed5187c23_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_d2cabb88b69975ead8960a9d12195a5a7d3680ad419c7e9d095835ffd6f51938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cabb88b69975ead8960a9d12195a5a7d3680ad419c7e9d095835ffd6f51938->enter($__internal_d2cabb88b69975ead8960a9d12195a5a7d3680ad419c7e9d095835ffd6f51938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_8331e090a30dfcf50a134faea17f90d161c036a59cb704ba7e98358e04526c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8331e090a30dfcf50a134faea17f90d161c036a59cb704ba7e98358e04526c5d->enter($__internal_8331e090a30dfcf50a134faea17f90d161c036a59cb704ba7e98358e04526c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8331e090a30dfcf50a134faea17f90d161c036a59cb704ba7e98358e04526c5d->leave($__internal_8331e090a30dfcf50a134faea17f90d161c036a59cb704ba7e98358e04526c5d_prof);

        
        $__internal_d2cabb88b69975ead8960a9d12195a5a7d3680ad419c7e9d095835ffd6f51938->leave($__internal_d2cabb88b69975ead8960a9d12195a5a7d3680ad419c7e9d095835ffd6f51938_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_82230169055980606a5d8a601b7d3b6416002f95c5330a419a0f4bed170d088c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82230169055980606a5d8a601b7d3b6416002f95c5330a419a0f4bed170d088c->enter($__internal_82230169055980606a5d8a601b7d3b6416002f95c5330a419a0f4bed170d088c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_2ea1de6f9f7f1ac8e9375965616e2b849ee0f2fe2f86134266bc7d77b0b8e582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea1de6f9f7f1ac8e9375965616e2b849ee0f2fe2f86134266bc7d77b0b8e582->enter($__internal_2ea1de6f9f7f1ac8e9375965616e2b849ee0f2fe2f86134266bc7d77b0b8e582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2ea1de6f9f7f1ac8e9375965616e2b849ee0f2fe2f86134266bc7d77b0b8e582->leave($__internal_2ea1de6f9f7f1ac8e9375965616e2b849ee0f2fe2f86134266bc7d77b0b8e582_prof);

        
        $__internal_82230169055980606a5d8a601b7d3b6416002f95c5330a419a0f4bed170d088c->leave($__internal_82230169055980606a5d8a601b7d3b6416002f95c5330a419a0f4bed170d088c_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_188cd70ecdb346ff358fedf47d081ac27ced726b198e1654f040bde4207f98a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188cd70ecdb346ff358fedf47d081ac27ced726b198e1654f040bde4207f98a6->enter($__internal_188cd70ecdb346ff358fedf47d081ac27ced726b198e1654f040bde4207f98a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_0aed680821f229bc03cb31f74bb3f744573bd8fea45cc2f55907e53b1afab904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aed680821f229bc03cb31f74bb3f744573bd8fea45cc2f55907e53b1afab904->enter($__internal_0aed680821f229bc03cb31f74bb3f744573bd8fea45cc2f55907e53b1afab904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_0aed680821f229bc03cb31f74bb3f744573bd8fea45cc2f55907e53b1afab904->leave($__internal_0aed680821f229bc03cb31f74bb3f744573bd8fea45cc2f55907e53b1afab904_prof);

        
        $__internal_188cd70ecdb346ff358fedf47d081ac27ced726b198e1654f040bde4207f98a6->leave($__internal_188cd70ecdb346ff358fedf47d081ac27ced726b198e1654f040bde4207f98a6_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_ccf026dc3bed30d377d0f87d44508c2deb8078ebc5d91404deb56d929db5d896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf026dc3bed30d377d0f87d44508c2deb8078ebc5d91404deb56d929db5d896->enter($__internal_ccf026dc3bed30d377d0f87d44508c2deb8078ebc5d91404deb56d929db5d896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_aa69216a5387d0934489cadc1356707be8c287b30dfd5e4a8c1dfa7252c84a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa69216a5387d0934489cadc1356707be8c287b30dfd5e4a8c1dfa7252c84a3e->enter($__internal_aa69216a5387d0934489cadc1356707be8c287b30dfd5e4a8c1dfa7252c84a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_aa69216a5387d0934489cadc1356707be8c287b30dfd5e4a8c1dfa7252c84a3e->leave($__internal_aa69216a5387d0934489cadc1356707be8c287b30dfd5e4a8c1dfa7252c84a3e_prof);

        
        $__internal_ccf026dc3bed30d377d0f87d44508c2deb8078ebc5d91404deb56d929db5d896->leave($__internal_ccf026dc3bed30d377d0f87d44508c2deb8078ebc5d91404deb56d929db5d896_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_a2f01ce3ebdb40a33b000d1152db164851fe31adc70c8aefad2093e72ec34682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f01ce3ebdb40a33b000d1152db164851fe31adc70c8aefad2093e72ec34682->enter($__internal_a2f01ce3ebdb40a33b000d1152db164851fe31adc70c8aefad2093e72ec34682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_94578f2b4356c212c9ef75718dfda2ba921c585a8c1ef47d85aa3b83277abbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94578f2b4356c212c9ef75718dfda2ba921c585a8c1ef47d85aa3b83277abbbc->enter($__internal_94578f2b4356c212c9ef75718dfda2ba921c585a8c1ef47d85aa3b83277abbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_94578f2b4356c212c9ef75718dfda2ba921c585a8c1ef47d85aa3b83277abbbc->leave($__internal_94578f2b4356c212c9ef75718dfda2ba921c585a8c1ef47d85aa3b83277abbbc_prof);

        
        $__internal_a2f01ce3ebdb40a33b000d1152db164851fe31adc70c8aefad2093e72ec34682->leave($__internal_a2f01ce3ebdb40a33b000d1152db164851fe31adc70c8aefad2093e72ec34682_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d0f32d68a3bd6cfbade114e0d434a38967d609fa9935082ed777a0fa4da94c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f32d68a3bd6cfbade114e0d434a38967d609fa9935082ed777a0fa4da94c1d->enter($__internal_d0f32d68a3bd6cfbade114e0d434a38967d609fa9935082ed777a0fa4da94c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_68e99cefb82c8593d766f760bed845b21193942b1dfd88880fa5deb679417045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e99cefb82c8593d766f760bed845b21193942b1dfd88880fa5deb679417045->enter($__internal_68e99cefb82c8593d766f760bed845b21193942b1dfd88880fa5deb679417045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_68e99cefb82c8593d766f760bed845b21193942b1dfd88880fa5deb679417045->leave($__internal_68e99cefb82c8593d766f760bed845b21193942b1dfd88880fa5deb679417045_prof);

        
        $__internal_d0f32d68a3bd6cfbade114e0d434a38967d609fa9935082ed777a0fa4da94c1d->leave($__internal_d0f32d68a3bd6cfbade114e0d434a38967d609fa9935082ed777a0fa4da94c1d_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_e060ee953ec928f9bb8bad40961fc2fd928ca0b3d2b968f28a3dc21f5f9e3132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e060ee953ec928f9bb8bad40961fc2fd928ca0b3d2b968f28a3dc21f5f9e3132->enter($__internal_e060ee953ec928f9bb8bad40961fc2fd928ca0b3d2b968f28a3dc21f5f9e3132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_19d85c43d36d8b4acfaa1f1223578054904711800feca6c71e4f6d65b52cf1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d85c43d36d8b4acfaa1f1223578054904711800feca6c71e4f6d65b52cf1a3->enter($__internal_19d85c43d36d8b4acfaa1f1223578054904711800feca6c71e4f6d65b52cf1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_19d85c43d36d8b4acfaa1f1223578054904711800feca6c71e4f6d65b52cf1a3->leave($__internal_19d85c43d36d8b4acfaa1f1223578054904711800feca6c71e4f6d65b52cf1a3_prof);

        
        $__internal_e060ee953ec928f9bb8bad40961fc2fd928ca0b3d2b968f28a3dc21f5f9e3132->leave($__internal_e060ee953ec928f9bb8bad40961fc2fd928ca0b3d2b968f28a3dc21f5f9e3132_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_9fee6d333fd9944240708c45757b7411ab4246a668cb36887f5029d3a56abd53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fee6d333fd9944240708c45757b7411ab4246a668cb36887f5029d3a56abd53->enter($__internal_9fee6d333fd9944240708c45757b7411ab4246a668cb36887f5029d3a56abd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_cca8098248a9d8722263c6efe06ca3c8d13de173a72aac31a098ec0a9ec56324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca8098248a9d8722263c6efe06ca3c8d13de173a72aac31a098ec0a9ec56324->enter($__internal_cca8098248a9d8722263c6efe06ca3c8d13de173a72aac31a098ec0a9ec56324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cca8098248a9d8722263c6efe06ca3c8d13de173a72aac31a098ec0a9ec56324->leave($__internal_cca8098248a9d8722263c6efe06ca3c8d13de173a72aac31a098ec0a9ec56324_prof);

        
        $__internal_9fee6d333fd9944240708c45757b7411ab4246a668cb36887f5029d3a56abd53->leave($__internal_9fee6d333fd9944240708c45757b7411ab4246a668cb36887f5029d3a56abd53_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_34c5df238d8270a0353618f7578d786128e257344516587af972131db55e6551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c5df238d8270a0353618f7578d786128e257344516587af972131db55e6551->enter($__internal_34c5df238d8270a0353618f7578d786128e257344516587af972131db55e6551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_0429e84d4b5a6fb134440d28b88da2e21199d8b0c8c153d9c1456738fb9a27b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0429e84d4b5a6fb134440d28b88da2e21199d8b0c8c153d9c1456738fb9a27b3->enter($__internal_0429e84d4b5a6fb134440d28b88da2e21199d8b0c8c153d9c1456738fb9a27b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0429e84d4b5a6fb134440d28b88da2e21199d8b0c8c153d9c1456738fb9a27b3->leave($__internal_0429e84d4b5a6fb134440d28b88da2e21199d8b0c8c153d9c1456738fb9a27b3_prof);

        
        $__internal_34c5df238d8270a0353618f7578d786128e257344516587af972131db55e6551->leave($__internal_34c5df238d8270a0353618f7578d786128e257344516587af972131db55e6551_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_0bce1500fd9c1eac20be313a9326db764e7594ad7b17ff80cc3b048907416244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bce1500fd9c1eac20be313a9326db764e7594ad7b17ff80cc3b048907416244->enter($__internal_0bce1500fd9c1eac20be313a9326db764e7594ad7b17ff80cc3b048907416244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_93e5ae3b41fda55e613c00cbd4f76f59f11daa13c61b77737e30038e6dbd3f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e5ae3b41fda55e613c00cbd4f76f59f11daa13c61b77737e30038e6dbd3f10->enter($__internal_93e5ae3b41fda55e613c00cbd4f76f59f11daa13c61b77737e30038e6dbd3f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_93e5ae3b41fda55e613c00cbd4f76f59f11daa13c61b77737e30038e6dbd3f10->leave($__internal_93e5ae3b41fda55e613c00cbd4f76f59f11daa13c61b77737e30038e6dbd3f10_prof);

        
        $__internal_0bce1500fd9c1eac20be313a9326db764e7594ad7b17ff80cc3b048907416244->leave($__internal_0bce1500fd9c1eac20be313a9326db764e7594ad7b17ff80cc3b048907416244_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1ab937fc6e78ea8d6e6d5849c31cf100fc736fdedd58e677296dda5093b65014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab937fc6e78ea8d6e6d5849c31cf100fc736fdedd58e677296dda5093b65014->enter($__internal_1ab937fc6e78ea8d6e6d5849c31cf100fc736fdedd58e677296dda5093b65014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_baaed8e8b008777f7640b67433849cd68aa22a840c63c6044a6a33910a9b15b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baaed8e8b008777f7640b67433849cd68aa22a840c63c6044a6a33910a9b15b9->enter($__internal_baaed8e8b008777f7640b67433849cd68aa22a840c63c6044a6a33910a9b15b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_baaed8e8b008777f7640b67433849cd68aa22a840c63c6044a6a33910a9b15b9->leave($__internal_baaed8e8b008777f7640b67433849cd68aa22a840c63c6044a6a33910a9b15b9_prof);

        
        $__internal_1ab937fc6e78ea8d6e6d5849c31cf100fc736fdedd58e677296dda5093b65014->leave($__internal_1ab937fc6e78ea8d6e6d5849c31cf100fc736fdedd58e677296dda5093b65014_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_772e9e697d06025e97a41ead57db89cff594207bb914890eff6d02f908823b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772e9e697d06025e97a41ead57db89cff594207bb914890eff6d02f908823b21->enter($__internal_772e9e697d06025e97a41ead57db89cff594207bb914890eff6d02f908823b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_e1eef84d95c85a07356fda782604eaafbe445df910d5ef28f442dfb1e99fd128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1eef84d95c85a07356fda782604eaafbe445df910d5ef28f442dfb1e99fd128->enter($__internal_e1eef84d95c85a07356fda782604eaafbe445df910d5ef28f442dfb1e99fd128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_e1eef84d95c85a07356fda782604eaafbe445df910d5ef28f442dfb1e99fd128->leave($__internal_e1eef84d95c85a07356fda782604eaafbe445df910d5ef28f442dfb1e99fd128_prof);

        
        $__internal_772e9e697d06025e97a41ead57db89cff594207bb914890eff6d02f908823b21->leave($__internal_772e9e697d06025e97a41ead57db89cff594207bb914890eff6d02f908823b21_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_976b52385ce4d80994dc475e88ac7c02ad9510e42e39d9b5b63e2183edcca77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976b52385ce4d80994dc475e88ac7c02ad9510e42e39d9b5b63e2183edcca77c->enter($__internal_976b52385ce4d80994dc475e88ac7c02ad9510e42e39d9b5b63e2183edcca77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_5055e9acf022163efe60ecbeb7c7e31cbf72d4d45808f7e2dd096cc134837ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5055e9acf022163efe60ecbeb7c7e31cbf72d4d45808f7e2dd096cc134837ec3->enter($__internal_5055e9acf022163efe60ecbeb7c7e31cbf72d4d45808f7e2dd096cc134837ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_5055e9acf022163efe60ecbeb7c7e31cbf72d4d45808f7e2dd096cc134837ec3->leave($__internal_5055e9acf022163efe60ecbeb7c7e31cbf72d4d45808f7e2dd096cc134837ec3_prof);

        
        $__internal_976b52385ce4d80994dc475e88ac7c02ad9510e42e39d9b5b63e2183edcca77c->leave($__internal_976b52385ce4d80994dc475e88ac7c02ad9510e42e39d9b5b63e2183edcca77c_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_d10e2c6537fa9e1da612c452e19befb1d7839d001a31cf70a34027f7a05b5e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10e2c6537fa9e1da612c452e19befb1d7839d001a31cf70a34027f7a05b5e7e->enter($__internal_d10e2c6537fa9e1da612c452e19befb1d7839d001a31cf70a34027f7a05b5e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_e3cb6c858979a434bf96f652bbe9402f31908838c3dcf66ef3ae7da3c261be7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cb6c858979a434bf96f652bbe9402f31908838c3dcf66ef3ae7da3c261be7b->enter($__internal_e3cb6c858979a434bf96f652bbe9402f31908838c3dcf66ef3ae7da3c261be7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e3cb6c858979a434bf96f652bbe9402f31908838c3dcf66ef3ae7da3c261be7b->leave($__internal_e3cb6c858979a434bf96f652bbe9402f31908838c3dcf66ef3ae7da3c261be7b_prof);

        
        $__internal_d10e2c6537fa9e1da612c452e19befb1d7839d001a31cf70a34027f7a05b5e7e->leave($__internal_d10e2c6537fa9e1da612c452e19befb1d7839d001a31cf70a34027f7a05b5e7e_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_eaa4f7a3c5877c6f6dc68c11851395d5dbacca472fe9eefc189a313b923cc64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa4f7a3c5877c6f6dc68c11851395d5dbacca472fe9eefc189a313b923cc64f->enter($__internal_eaa4f7a3c5877c6f6dc68c11851395d5dbacca472fe9eefc189a313b923cc64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_daee4faab5ee9da487e7502475590270a9fe560eafdb9150e113d66d2a81edf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daee4faab5ee9da487e7502475590270a9fe560eafdb9150e113d66d2a81edf4->enter($__internal_daee4faab5ee9da487e7502475590270a9fe560eafdb9150e113d66d2a81edf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_daee4faab5ee9da487e7502475590270a9fe560eafdb9150e113d66d2a81edf4->leave($__internal_daee4faab5ee9da487e7502475590270a9fe560eafdb9150e113d66d2a81edf4_prof);

        
        $__internal_eaa4f7a3c5877c6f6dc68c11851395d5dbacca472fe9eefc189a313b923cc64f->leave($__internal_eaa4f7a3c5877c6f6dc68c11851395d5dbacca472fe9eefc189a313b923cc64f_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_30b8a8d9f91208688352cf3c487016e8eff3a19910e4664bd0a0c8b84c05610e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b8a8d9f91208688352cf3c487016e8eff3a19910e4664bd0a0c8b84c05610e->enter($__internal_30b8a8d9f91208688352cf3c487016e8eff3a19910e4664bd0a0c8b84c05610e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f83bcb762086fe70b184ce6aea3cf8fe5c16e297313459222391ddeea8b14d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83bcb762086fe70b184ce6aea3cf8fe5c16e297313459222391ddeea8b14d22->enter($__internal_f83bcb762086fe70b184ce6aea3cf8fe5c16e297313459222391ddeea8b14d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_afe8a9b68d73c897be02e57f364639f12ab60c718084c4c79ff7e3424c92bcf5 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_afe8a9b68d73c897be02e57f364639f12ab60c718084c4c79ff7e3424c92bcf5)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_afe8a9b68d73c897be02e57f364639f12ab60c718084c4c79ff7e3424c92bcf5);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_f83bcb762086fe70b184ce6aea3cf8fe5c16e297313459222391ddeea8b14d22->leave($__internal_f83bcb762086fe70b184ce6aea3cf8fe5c16e297313459222391ddeea8b14d22_prof);

        
        $__internal_30b8a8d9f91208688352cf3c487016e8eff3a19910e4664bd0a0c8b84c05610e->leave($__internal_30b8a8d9f91208688352cf3c487016e8eff3a19910e4664bd0a0c8b84c05610e_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_1f4a3221564972bb9f8a1e7a13929b81ef576241c68357a2e3fa21df07622048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4a3221564972bb9f8a1e7a13929b81ef576241c68357a2e3fa21df07622048->enter($__internal_1f4a3221564972bb9f8a1e7a13929b81ef576241c68357a2e3fa21df07622048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_513c440f43584c1827f5bfe5d5b6775636d9c164aa802f1f551c320a708f78c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513c440f43584c1827f5bfe5d5b6775636d9c164aa802f1f551c320a708f78c0->enter($__internal_513c440f43584c1827f5bfe5d5b6775636d9c164aa802f1f551c320a708f78c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_513c440f43584c1827f5bfe5d5b6775636d9c164aa802f1f551c320a708f78c0->leave($__internal_513c440f43584c1827f5bfe5d5b6775636d9c164aa802f1f551c320a708f78c0_prof);

        
        $__internal_1f4a3221564972bb9f8a1e7a13929b81ef576241c68357a2e3fa21df07622048->leave($__internal_1f4a3221564972bb9f8a1e7a13929b81ef576241c68357a2e3fa21df07622048_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_32ab9181accb290d90edce108b2d3382b57a932f3d6b3b0beda162e3aa24c77f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ab9181accb290d90edce108b2d3382b57a932f3d6b3b0beda162e3aa24c77f->enter($__internal_32ab9181accb290d90edce108b2d3382b57a932f3d6b3b0beda162e3aa24c77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_ad90f71ec14cbdc3189fdfe496dca02fbaaaba6b61acc27bea1442385d8a9c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad90f71ec14cbdc3189fdfe496dca02fbaaaba6b61acc27bea1442385d8a9c48->enter($__internal_ad90f71ec14cbdc3189fdfe496dca02fbaaaba6b61acc27bea1442385d8a9c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_ad90f71ec14cbdc3189fdfe496dca02fbaaaba6b61acc27bea1442385d8a9c48->leave($__internal_ad90f71ec14cbdc3189fdfe496dca02fbaaaba6b61acc27bea1442385d8a9c48_prof);

        
        $__internal_32ab9181accb290d90edce108b2d3382b57a932f3d6b3b0beda162e3aa24c77f->leave($__internal_32ab9181accb290d90edce108b2d3382b57a932f3d6b3b0beda162e3aa24c77f_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fdee625be2de87516bc044ea2a6ba458962d589dbb78850f96e951106429c786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdee625be2de87516bc044ea2a6ba458962d589dbb78850f96e951106429c786->enter($__internal_fdee625be2de87516bc044ea2a6ba458962d589dbb78850f96e951106429c786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_10bfd1783e650ca1d6c9a20d64ed2f4634db675806861ae269f3dd3480f2ed1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bfd1783e650ca1d6c9a20d64ed2f4634db675806861ae269f3dd3480f2ed1b->enter($__internal_10bfd1783e650ca1d6c9a20d64ed2f4634db675806861ae269f3dd3480f2ed1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_10bfd1783e650ca1d6c9a20d64ed2f4634db675806861ae269f3dd3480f2ed1b->leave($__internal_10bfd1783e650ca1d6c9a20d64ed2f4634db675806861ae269f3dd3480f2ed1b_prof);

        
        $__internal_fdee625be2de87516bc044ea2a6ba458962d589dbb78850f96e951106429c786->leave($__internal_fdee625be2de87516bc044ea2a6ba458962d589dbb78850f96e951106429c786_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0c904b4b8b8e49169791445f8dca1ee9147f23bdd51853ec9f41343805ecdea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c904b4b8b8e49169791445f8dca1ee9147f23bdd51853ec9f41343805ecdea2->enter($__internal_0c904b4b8b8e49169791445f8dca1ee9147f23bdd51853ec9f41343805ecdea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_fecc49f638a18aecc4e61510ba60181825d7864a75dfdb98bc781dfb000e502a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecc49f638a18aecc4e61510ba60181825d7864a75dfdb98bc781dfb000e502a->enter($__internal_fecc49f638a18aecc4e61510ba60181825d7864a75dfdb98bc781dfb000e502a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_fecc49f638a18aecc4e61510ba60181825d7864a75dfdb98bc781dfb000e502a->leave($__internal_fecc49f638a18aecc4e61510ba60181825d7864a75dfdb98bc781dfb000e502a_prof);

        
        $__internal_0c904b4b8b8e49169791445f8dca1ee9147f23bdd51853ec9f41343805ecdea2->leave($__internal_0c904b4b8b8e49169791445f8dca1ee9147f23bdd51853ec9f41343805ecdea2_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b3bc192933271892c83f0f85f866f324edc075c5d5345feeafc683a94aad6a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bc192933271892c83f0f85f866f324edc075c5d5345feeafc683a94aad6a36->enter($__internal_b3bc192933271892c83f0f85f866f324edc075c5d5345feeafc683a94aad6a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_abb7ef6a452060010843fa4a16dffa8829b207eb94020cb75037572739bfd0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb7ef6a452060010843fa4a16dffa8829b207eb94020cb75037572739bfd0db->enter($__internal_abb7ef6a452060010843fa4a16dffa8829b207eb94020cb75037572739bfd0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_abb7ef6a452060010843fa4a16dffa8829b207eb94020cb75037572739bfd0db->leave($__internal_abb7ef6a452060010843fa4a16dffa8829b207eb94020cb75037572739bfd0db_prof);

        
        $__internal_b3bc192933271892c83f0f85f866f324edc075c5d5345feeafc683a94aad6a36->leave($__internal_b3bc192933271892c83f0f85f866f324edc075c5d5345feeafc683a94aad6a36_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_d414de5f7749619dc42281883570421d74c0be072d910b53a8b857aa6a42f929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d414de5f7749619dc42281883570421d74c0be072d910b53a8b857aa6a42f929->enter($__internal_d414de5f7749619dc42281883570421d74c0be072d910b53a8b857aa6a42f929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_361b17dedbb8c92556da6db9dd3bba672cfd65ceee618f30c90c4206e17a68ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361b17dedbb8c92556da6db9dd3bba672cfd65ceee618f30c90c4206e17a68ef->enter($__internal_361b17dedbb8c92556da6db9dd3bba672cfd65ceee618f30c90c4206e17a68ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_361b17dedbb8c92556da6db9dd3bba672cfd65ceee618f30c90c4206e17a68ef->leave($__internal_361b17dedbb8c92556da6db9dd3bba672cfd65ceee618f30c90c4206e17a68ef_prof);

        
        $__internal_d414de5f7749619dc42281883570421d74c0be072d910b53a8b857aa6a42f929->leave($__internal_d414de5f7749619dc42281883570421d74c0be072d910b53a8b857aa6a42f929_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_cb6b70f973664faeba48aa2be8f0689768b9098b392c3aa6f11e8cbc603c3d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6b70f973664faeba48aa2be8f0689768b9098b392c3aa6f11e8cbc603c3d5d->enter($__internal_cb6b70f973664faeba48aa2be8f0689768b9098b392c3aa6f11e8cbc603c3d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_06377a488069afbb1c3d95f7a9b269c53bcf6edca3f128098e561e63dd5214da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06377a488069afbb1c3d95f7a9b269c53bcf6edca3f128098e561e63dd5214da->enter($__internal_06377a488069afbb1c3d95f7a9b269c53bcf6edca3f128098e561e63dd5214da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_06377a488069afbb1c3d95f7a9b269c53bcf6edca3f128098e561e63dd5214da->leave($__internal_06377a488069afbb1c3d95f7a9b269c53bcf6edca3f128098e561e63dd5214da_prof);

        
        $__internal_cb6b70f973664faeba48aa2be8f0689768b9098b392c3aa6f11e8cbc603c3d5d->leave($__internal_cb6b70f973664faeba48aa2be8f0689768b9098b392c3aa6f11e8cbc603c3d5d_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_a60270857f21801b5fa33033aeaff9759f9cb4b23028a85befd77b9f0a898244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60270857f21801b5fa33033aeaff9759f9cb4b23028a85befd77b9f0a898244->enter($__internal_a60270857f21801b5fa33033aeaff9759f9cb4b23028a85befd77b9f0a898244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_73df70dd1e56fd2a52ee3d6bc59ea413c72debb4d163ede36430c4a0cf62ca09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73df70dd1e56fd2a52ee3d6bc59ea413c72debb4d163ede36430c4a0cf62ca09->enter($__internal_73df70dd1e56fd2a52ee3d6bc59ea413c72debb4d163ede36430c4a0cf62ca09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_73df70dd1e56fd2a52ee3d6bc59ea413c72debb4d163ede36430c4a0cf62ca09->leave($__internal_73df70dd1e56fd2a52ee3d6bc59ea413c72debb4d163ede36430c4a0cf62ca09_prof);

        
        $__internal_a60270857f21801b5fa33033aeaff9759f9cb4b23028a85befd77b9f0a898244->leave($__internal_a60270857f21801b5fa33033aeaff9759f9cb4b23028a85befd77b9f0a898244_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5092298f77e54fc778aaf6959ad2dccfcb78a728c82a57a45f18915c85ea920f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5092298f77e54fc778aaf6959ad2dccfcb78a728c82a57a45f18915c85ea920f->enter($__internal_5092298f77e54fc778aaf6959ad2dccfcb78a728c82a57a45f18915c85ea920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e3b64dffa3ef9f39c170ac1682ed11bd921f59d8b3b9bb098d60236faeab08fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b64dffa3ef9f39c170ac1682ed11bd921f59d8b3b9bb098d60236faeab08fe->enter($__internal_e3b64dffa3ef9f39c170ac1682ed11bd921f59d8b3b9bb098d60236faeab08fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_e3b64dffa3ef9f39c170ac1682ed11bd921f59d8b3b9bb098d60236faeab08fe->leave($__internal_e3b64dffa3ef9f39c170ac1682ed11bd921f59d8b3b9bb098d60236faeab08fe_prof);

        
        $__internal_5092298f77e54fc778aaf6959ad2dccfcb78a728c82a57a45f18915c85ea920f->leave($__internal_5092298f77e54fc778aaf6959ad2dccfcb78a728c82a57a45f18915c85ea920f_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_a30d267eeff75b999ebf853b7b07a5ad7fe2d1cd327304717d1d2de91f32db84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30d267eeff75b999ebf853b7b07a5ad7fe2d1cd327304717d1d2de91f32db84->enter($__internal_a30d267eeff75b999ebf853b7b07a5ad7fe2d1cd327304717d1d2de91f32db84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_750f6a1074e155045d859165de116aacc3afd476ab277bccdd7c58426f519b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750f6a1074e155045d859165de116aacc3afd476ab277bccdd7c58426f519b24->enter($__internal_750f6a1074e155045d859165de116aacc3afd476ab277bccdd7c58426f519b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_750f6a1074e155045d859165de116aacc3afd476ab277bccdd7c58426f519b24->leave($__internal_750f6a1074e155045d859165de116aacc3afd476ab277bccdd7c58426f519b24_prof);

        
        $__internal_a30d267eeff75b999ebf853b7b07a5ad7fe2d1cd327304717d1d2de91f32db84->leave($__internal_a30d267eeff75b999ebf853b7b07a5ad7fe2d1cd327304717d1d2de91f32db84_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_4ffe04869151ae59f09e40940ef045c67495d90bb5d5e4c93f6e97c72c8580ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffe04869151ae59f09e40940ef045c67495d90bb5d5e4c93f6e97c72c8580ff->enter($__internal_4ffe04869151ae59f09e40940ef045c67495d90bb5d5e4c93f6e97c72c8580ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_12823ac00bfcc675fbbd40e63b9446c07bfe2a2ce11934ad9041f131d84ec2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12823ac00bfcc675fbbd40e63b9446c07bfe2a2ce11934ad9041f131d84ec2ac->enter($__internal_12823ac00bfcc675fbbd40e63b9446c07bfe2a2ce11934ad9041f131d84ec2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_12823ac00bfcc675fbbd40e63b9446c07bfe2a2ce11934ad9041f131d84ec2ac->leave($__internal_12823ac00bfcc675fbbd40e63b9446c07bfe2a2ce11934ad9041f131d84ec2ac_prof);

        
        $__internal_4ffe04869151ae59f09e40940ef045c67495d90bb5d5e4c93f6e97c72c8580ff->leave($__internal_4ffe04869151ae59f09e40940ef045c67495d90bb5d5e4c93f6e97c72c8580ff_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_7f8f1b62aef1ac8e5f7f11bacbedc525c68077546b3bcf99a68100dcc91e1a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8f1b62aef1ac8e5f7f11bacbedc525c68077546b3bcf99a68100dcc91e1a37->enter($__internal_7f8f1b62aef1ac8e5f7f11bacbedc525c68077546b3bcf99a68100dcc91e1a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_625f7cf893ba83fa71620067a6c282fd90a0b65189286232451cc363a395eb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625f7cf893ba83fa71620067a6c282fd90a0b65189286232451cc363a395eb76->enter($__internal_625f7cf893ba83fa71620067a6c282fd90a0b65189286232451cc363a395eb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_625f7cf893ba83fa71620067a6c282fd90a0b65189286232451cc363a395eb76->leave($__internal_625f7cf893ba83fa71620067a6c282fd90a0b65189286232451cc363a395eb76_prof);

        
        $__internal_7f8f1b62aef1ac8e5f7f11bacbedc525c68077546b3bcf99a68100dcc91e1a37->leave($__internal_7f8f1b62aef1ac8e5f7f11bacbedc525c68077546b3bcf99a68100dcc91e1a37_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_4223de267d5c45accb8a26be034ea3742ed0d1baef1baa091162d151ec6aacbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4223de267d5c45accb8a26be034ea3742ed0d1baef1baa091162d151ec6aacbb->enter($__internal_4223de267d5c45accb8a26be034ea3742ed0d1baef1baa091162d151ec6aacbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_fdcf1d47968f8b65024b114b198ee5d0dbce3c554bb24e1eb114c157af69ac09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcf1d47968f8b65024b114b198ee5d0dbce3c554bb24e1eb114c157af69ac09->enter($__internal_fdcf1d47968f8b65024b114b198ee5d0dbce3c554bb24e1eb114c157af69ac09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_fdcf1d47968f8b65024b114b198ee5d0dbce3c554bb24e1eb114c157af69ac09->leave($__internal_fdcf1d47968f8b65024b114b198ee5d0dbce3c554bb24e1eb114c157af69ac09_prof);

        
        $__internal_4223de267d5c45accb8a26be034ea3742ed0d1baef1baa091162d151ec6aacbb->leave($__internal_4223de267d5c45accb8a26be034ea3742ed0d1baef1baa091162d151ec6aacbb_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_1da4cf46619c71853f162d01792fd5e9c3a86e28d83142b5e14c512a21ac3ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da4cf46619c71853f162d01792fd5e9c3a86e28d83142b5e14c512a21ac3ccf->enter($__internal_1da4cf46619c71853f162d01792fd5e9c3a86e28d83142b5e14c512a21ac3ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_0001529035a91e3bbde9f80dd07c6acdb1be1b6a00fd674d0f21b407df321377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0001529035a91e3bbde9f80dd07c6acdb1be1b6a00fd674d0f21b407df321377->enter($__internal_0001529035a91e3bbde9f80dd07c6acdb1be1b6a00fd674d0f21b407df321377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_0001529035a91e3bbde9f80dd07c6acdb1be1b6a00fd674d0f21b407df321377->leave($__internal_0001529035a91e3bbde9f80dd07c6acdb1be1b6a00fd674d0f21b407df321377_prof);

        
        $__internal_1da4cf46619c71853f162d01792fd5e9c3a86e28d83142b5e14c512a21ac3ccf->leave($__internal_1da4cf46619c71853f162d01792fd5e9c3a86e28d83142b5e14c512a21ac3ccf_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_ba6353bb2be859e9e148fa688ce99fd018f9b846d862b0e4beceddcb9c1d1e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6353bb2be859e9e148fa688ce99fd018f9b846d862b0e4beceddcb9c1d1e3a->enter($__internal_ba6353bb2be859e9e148fa688ce99fd018f9b846d862b0e4beceddcb9c1d1e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_7c6b5a0d73f4f9dcdbf6d907700c9a317f1e03f9a19ee2600ef7a747435213dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6b5a0d73f4f9dcdbf6d907700c9a317f1e03f9a19ee2600ef7a747435213dc->enter($__internal_7c6b5a0d73f4f9dcdbf6d907700c9a317f1e03f9a19ee2600ef7a747435213dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7c6b5a0d73f4f9dcdbf6d907700c9a317f1e03f9a19ee2600ef7a747435213dc->leave($__internal_7c6b5a0d73f4f9dcdbf6d907700c9a317f1e03f9a19ee2600ef7a747435213dc_prof);

        
        $__internal_ba6353bb2be859e9e148fa688ce99fd018f9b846d862b0e4beceddcb9c1d1e3a->leave($__internal_ba6353bb2be859e9e148fa688ce99fd018f9b846d862b0e4beceddcb9c1d1e3a_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/Users/clement/Projet/Distri/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
