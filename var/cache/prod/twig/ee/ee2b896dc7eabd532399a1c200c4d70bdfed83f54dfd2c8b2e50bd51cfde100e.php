<?php

/* registration/register.html.twig */
class __TwigTemplate_97d1991bb9ec1b688d405f17a75236f8a86f1a86bcfc96ca90e512cba1c9e429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Créer un bénévole";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h2>Créer un bénévole</h2>

\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
   
    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "username", array()), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "username", array()), 'errors');
        echo "
      </div>
      <div class=\"form-group col-md-4\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "email", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "email", array()), 'errors');
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'errors');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget');
        echo "
      </div>
      <div class=\"form-group col-md-4\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'errors');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget');
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
      \t<label>Role</label>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "role", array()), 'errors');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "role", array()), 'widget');
        echo "
      </div>
    </div>

    <div>
      <a class=\"btn btn-warning\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("benevoles");
        echo "\">Annuler</a>
        <button class=\"btn btn-primary\" type=\"submit\">Enregister</button>
    </div>

";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  112 => 44,  104 => 39,  100 => 38,  90 => 31,  86 => 30,  80 => 27,  76 => 26,  67 => 20,  63 => 19,  57 => 16,  53 => 15,  46 => 11,  42 => 10,  38 => 8,  35 => 7,  29 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registration/register.html.twig", "/Users/clement/Projet/Distri/templates/registration/register.html.twig");
    }
}
