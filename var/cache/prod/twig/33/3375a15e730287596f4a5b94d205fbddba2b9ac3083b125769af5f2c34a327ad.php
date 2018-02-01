<?php

/* security/login.html.twig */
class __TwigTemplate_aff1ea897fd49a94d26fdef427bdc50fc12b643c692f9d37d2c7d8a012dc9874 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"container\">    
        <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">                    ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        return array (  55 => 20,  43 => 10,  37 => 8,  35 => 7,  31 => 5,  28 => 4,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "/Users/clement/Projet/Distri/templates/security/login.html.twig");
    }
}
