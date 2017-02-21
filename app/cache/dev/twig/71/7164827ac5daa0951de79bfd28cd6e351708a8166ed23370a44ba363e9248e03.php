<?php

/* CodersLabBundle:Contact:edit.html.twig */
class __TwigTemplate_e4eeafd221c938e367359e76db7ce5e766df5756281072e476b502c257c4749f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CodersLabBundle:Contact:edit.html.twig", 1);
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
        $__internal_0f2c369d90a46cc15bf97fdc38a6995667659a5680a42c4b495e381025f6f344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2c369d90a46cc15bf97fdc38a6995667659a5680a42c4b495e381025f6f344->enter($__internal_0f2c369d90a46cc15bf97fdc38a6995667659a5680a42c4b495e381025f6f344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle:Contact:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f2c369d90a46cc15bf97fdc38a6995667659a5680a42c4b495e381025f6f344->leave($__internal_0f2c369d90a46cc15bf97fdc38a6995667659a5680a42c4b495e381025f6f344_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fdf1fad36c443ea6063b864440b8e9b6ff2e7ed0a79ff9d0554dc1b522be2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdf1fad36c443ea6063b864440b8e9b6ff2e7ed0a79ff9d0554dc1b522be2dc->enter($__internal_1fdf1fad36c443ea6063b864440b8e9b6ff2e7ed0a79ff9d0554dc1b522be2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('div', $context, $blocks);
        
        $__internal_1fdf1fad36c443ea6063b864440b8e9b6ff2e7ed0a79ff9d0554dc1b522be2dc->leave($__internal_1fdf1fad36c443ea6063b864440b8e9b6ff2e7ed0a79ff9d0554dc1b522be2dc_prof);

    }

    public function block_div($context, array $blocks = array())
    {
        $__internal_63bde4774f1a1e63030b385a354f158c645c37a8b490f6adba1fe188357b5b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bde4774f1a1e63030b385a354f158c645c37a8b490f6adba1fe188357b5b4f->enter($__internal_63bde4774f1a1e63030b385a354f158c645c37a8b490f6adba1fe188357b5b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

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
        
        $__internal_63bde4774f1a1e63030b385a354f158c645c37a8b490f6adba1fe188357b5b4f->leave($__internal_63bde4774f1a1e63030b385a354f158c645c37a8b490f6adba1fe188357b5b4f_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle:Contact:edit.html.twig";
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
", "CodersLabBundle:Contact:edit.html.twig", "/home/agata/Workspace/WARSZTATY_SYMFONY/src/CodersLabBundle/Resources/views/Contact/edit.html.twig");
    }
}
