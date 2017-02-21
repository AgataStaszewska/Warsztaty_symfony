<?php

/* CodersLabBundle:Contact:index.html.twig */
class __TwigTemplate_f414ee69c0768eb3f0d270e0934d852bbdd29961de0e6eefd3168e81a42ec418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CodersLabBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4f1ca2ce6b80075cb0875264369b8148adb770417844a0237808ce300d72338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f1ca2ce6b80075cb0875264369b8148adb770417844a0237808ce300d72338->enter($__internal_d4f1ca2ce6b80075cb0875264369b8148adb770417844a0237808ce300d72338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f1ca2ce6b80075cb0875264369b8148adb770417844a0237808ce300d72338->leave($__internal_d4f1ca2ce6b80075cb0875264369b8148adb770417844a0237808ce300d72338_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ab887904320c11be79500eb2e66d902b2ec2777098e27e75a0c3f6f452f22ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab887904320c11be79500eb2e66d902b2ec2777098e27e75a0c3f6f452f22ca->enter($__internal_5ab887904320c11be79500eb2e66d902b2ec2777098e27e75a0c3f6f452f22ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? $this->getContext($context, "contacts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 4
            echo "   <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coderslab_contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">
   ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "surname", array()), "html", null, true);
            echo "
   </a>
   <a class=\"btn btn-default\" href='";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coderslab_contact_edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "'>Edit</a>
   <a class=\"btn btn-danger\" href='";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coderslab_contact_delete", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "'>Remove</a>

    <br>
   ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "     No contacts!
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "

   <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coderslab_contact_new");
        echo "\" class=\"btn btn-success\">
    <i class='fa fa-plus'></i>
    Add new
   </a>
";
        
        $__internal_5ab887904320c11be79500eb2e66d902b2ec2777098e27e75a0c3f6f452f22ca->leave($__internal_5ab887904320c11be79500eb2e66d902b2ec2777098e27e75a0c3f6f452f22ca_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  77 => 14,  70 => 12,  61 => 8,  57 => 7,  50 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
{% for contact in contacts %}
   <a href=\"{{path('coderslab_contact_show', {'id':contact.id}) }}\">
   {{contact.name}} {{contact.surname}}
   </a>
   <a class=\"btn btn-default\" href='{{path('coderslab_contact_edit',{'id':contact.id})}}'>Edit</a>
   <a class=\"btn btn-danger\" href='{{path('coderslab_contact_delete', {'id':contact.id}) }}'>Remove</a>

    <br>
   {% else %}
     No contacts!
{% endfor %}


   <a href=\"{{path('coderslab_contact_new') }}\" class=\"btn btn-success\">
    <i class='fa fa-plus'></i>
    Add new
   </a>
{% endblock %}
", "CodersLabBundle:Contact:index.html.twig", "/home/agata/Workspace/WARSZTATY_SYMFONY/src/CodersLabBundle/Resources/views/Contact/index.html.twig");
    }
}
