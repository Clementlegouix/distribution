<?php

/* security/login.html.twig */
class __TwigTemplate_b00726039aaa82a39346484026ff5aa221c4951d3dc0a4a957c95f78f9d55dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55d3217c21e670cfe22a060147f33c9feb697d7ccc5da06bacee4ccd6175fa7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d3217c21e670cfe22a060147f33c9feb697d7ccc5da06bacee4ccd6175fa7b->enter($__internal_55d3217c21e670cfe22a060147f33c9feb697d7ccc5da06bacee4ccd6175fa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_3c39f4bd5032c9b59ca8ffa8c7aaf6226cac117aa3978a7d3fcbb8d1ba2b3a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c39f4bd5032c9b59ca8ffa8c7aaf6226cac117aa3978a7d3fcbb8d1ba2b3a4e->enter($__internal_3c39f4bd5032c9b59ca8ffa8c7aaf6226cac117aa3978a7d3fcbb8d1ba2b3a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d3217c21e670cfe22a060147f33c9feb697d7ccc5da06bacee4ccd6175fa7b->leave($__internal_55d3217c21e670cfe22a060147f33c9feb697d7ccc5da06bacee4ccd6175fa7b_prof);

        
        $__internal_3c39f4bd5032c9b59ca8ffa8c7aaf6226cac117aa3978a7d3fcbb8d1ba2b3a4e->leave($__internal_3c39f4bd5032c9b59ca8ffa8c7aaf6226cac117aa3978a7d3fcbb8d1ba2b3a4e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_84fa520f2482e0f9202a4ffa0f15afef61046408c8b7f3000aca838c6e476fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fa520f2482e0f9202a4ffa0f15afef61046408c8b7f3000aca838c6e476fdf->enter($__internal_84fa520f2482e0f9202a4ffa0f15afef61046408c8b7f3000aca838c6e476fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d4f2992d5d4b159761bd96b30623863a2b8432c2d1750973c7d123441149920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4f2992d5d4b159761bd96b30623863a2b8432c2d1750973c7d123441149920->enter($__internal_2d4f2992d5d4b159761bd96b30623863a2b8432c2d1750973c7d123441149920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"container\">    
        <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">                    ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "            <div class=\"panel panel-info\" >
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">Se connecter</div>
                        
                    </div>     

                    <div style=\"padding-top:30px\" class=\"panel-body\" >

                        <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>
                            
                        <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\" id=\"loginform\" class=\"form-horizontal\" role=\"form\">
                                    
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"username\">                                        
                                    </div>
                                
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"password\">
                                    </div>


                                <div style=\"margin-top:10px\" class=\"form-group\">
                                    <!-- Button -->

                                    <div class=\"col-sm-12 controls\">
                                        <input type=\"submit\" name=\"login\" class=\"btn btn-success\" value=\"Login\">
                                    </div>
                                </div>
   
                            </form>     



                        </div>                     
                    </div>  
        </div>             
    </div> 
";
        
        $__internal_2d4f2992d5d4b159761bd96b30623863a2b8432c2d1750973c7d123441149920->leave($__internal_2d4f2992d5d4b159761bd96b30623863a2b8432c2d1750973c7d123441149920_prof);

        
        $__internal_84fa520f2482e0f9202a4ffa0f15afef61046408c8b7f3000aca838c6e476fdf->leave($__internal_84fa520f2482e0f9202a4ffa0f15afef61046408c8b7f3000aca838c6e476fdf_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  61 => 10,  55 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}

    <div class=\"container\">    
        <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">                    {% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
            <div class=\"panel panel-info\" >
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">Se connecter</div>
                        
                    </div>     

                    <div style=\"padding-top:30px\" class=\"panel-body\" >

                        <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>
                            
                        <form action=\"{{ path('login') }}\" method=\"post\" id=\"loginform\" class=\"form-horizontal\" role=\"form\">
                                    
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"username\">                                        
                                    </div>
                                
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"password\">
                                    </div>


                                <div style=\"margin-top:10px\" class=\"form-group\">
                                    <!-- Button -->

                                    <div class=\"col-sm-12 controls\">
                                        <input type=\"submit\" name=\"login\" class=\"btn btn-success\" value=\"Login\">
                                    </div>
                                </div>
   
                            </form>     



                        </div>                     
                    </div>  
        </div>             
    </div> 
{% endblock %}", "security/login.html.twig", "/Users/clement/Projet/Distri/templates/security/login.html.twig");
    }
}
