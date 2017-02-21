<?php

/* CodersLabBundle:Contact:new.html.twig */
class __TwigTemplate_689c17f3e3094bd1be3f102f27fdccfe5c908cc9f46932b0d0fe9f4edbeab782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CodersLabBundle:Contact:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'div' => array($this, 'block_div'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_401369770453519618b3382bcc9331ce2a3eac0656493fd6d0257535f1e88d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401369770453519618b3382bcc9331ce2a3eac0656493fd6d0257535f1e88d79->enter($__internal_401369770453519618b3382bcc9331ce2a3eac0656493fd6d0257535f1e88d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle:Contact:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_401369770453519618b3382bcc9331ce2a3eac0656493fd6d0257535f1e88d79->leave($__internal_401369770453519618b3382bcc9331ce2a3eac0656493fd6d0257535f1e88d79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_882e4339673492f963851458577bc092073590024673361710255072d4c57dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882e4339673492f963851458577bc092073590024673361710255072d4c57dff->enter($__internal_882e4339673492f963851458577bc092073590024673361710255072d4c57dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('div', $context, $blocks);
        
        $__internal_882e4339673492f963851458577bc092073590024673361710255072d4c57dff->leave($__internal_882e4339673492f963851458577bc092073590024673361710255072d4c57dff_prof);

    }

    public function block_div($context, array $blocks = array())
    {
        $__internal_6ff1f45ee4b7d3133325135c1244c6d4dd3df3791bac5de4f0781f2a6ec68df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff1f45ee4b7d3133325135c1244c6d4dd3df3791bac5de4f0781f2a6ec68df2->enter($__internal_6ff1f45ee4b7d3133325135c1244c6d4dd3df3791bac5de4f0781f2a6ec68df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        // line 5
        echo "<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-4\"></div>
<div class=\"col-md-4\">
  ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <br>
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'label');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <br>
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <br>
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
</div>
<div class=\"col-md-4\"></div>
  ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  ";
        
        $__internal_6ff1f45ee4b7d3133325135c1244c6d4dd3df3791bac5de4f0781f2a6ec68df2->leave($__internal_6ff1f45ee4b7d3133325135c1244c6d4dd3df3791bac5de4f0781f2a6ec68df2_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle:Contact:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  91 => 20,  86 => 18,  82 => 17,  77 => 15,  73 => 14,  68 => 12,  64 => 11,  59 => 9,  53 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
{% block div %}
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-4\"></div>
<div class=\"col-md-4\">
  {{form_start(form)}}

    {{form_label(form.name)}}
    {{form_widget(form.name, {'attr':{'class':'form-control'}})}}
    <br>
    {{form_label(form.surname)}}
    {{form_widget(form.surname, {'attr':{'class':'form-control'}})}}
    <br>
    {{form_label(form.description)}}
    {{form_widget(form.description, {'attr':{'class':'form-control'}})}}
    <br>
    {{form_widget(form.save, {'attr':{'class':'btn btn-primary'}})}}
</div>
<div class=\"col-md-4\"></div>
  {{form_end(form)}}
  {% endblock %}
{% endblock %}
", "CodersLabBundle:Contact:new.html.twig", "/home/agata/Workspace/WARSZTATY_SYMFONY/src/CodersLabBundle/Resources/views/Contact/new.html.twig");
    }
}
