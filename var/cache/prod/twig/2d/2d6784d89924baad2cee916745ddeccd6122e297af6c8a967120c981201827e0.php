<?php

/* Adherent/creer.html.twig */
class __TwigTemplate_39f7d6c8a43a2450af44488ad85d5ccc63df1d27a6e9991e8b1b347400b5be18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Adherent/creer.html.twig", 2);
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
        echo "Créeer un adhérent";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<h2>Créer un adhérent</h2>

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Nom", array()), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Nom", array()), 'errors');
        echo "
      </div>
      <div class=\"form-group col-md-4\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Prenom", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Prenom", array()), 'errors');
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Idcarte", array()), 'errors');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Idcarte", array()), 'widget');
        echo "
      </div>
      <div class=\"form-group col-md-4\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Iddistri", array()), 'errors');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Iddistri", array()), 'widget');
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"form-group col-md-4\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "ordrePassage", array()), 'errors');
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "ordrePassage", array()), 'widget');
        echo "
      </div>
    </div>

    <div>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "Enregistrer", array()), 'widget');
        echo "
    </div>

";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "Adherent/creer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  111 => 43,  103 => 38,  99 => 37,  90 => 31,  86 => 30,  80 => 27,  76 => 26,  67 => 20,  63 => 19,  57 => 16,  53 => 15,  46 => 11,  42 => 10,  38 => 8,  35 => 7,  29 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Adherent/creer.html.twig", "/Users/clement/Projet/Distri/templates/Adherent/creer.html.twig");
    }
}
