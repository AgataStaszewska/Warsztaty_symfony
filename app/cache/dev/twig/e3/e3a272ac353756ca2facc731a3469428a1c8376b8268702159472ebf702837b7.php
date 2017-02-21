<?php

/* CodersLabBundle:Contact:show.html.twig */
class __TwigTemplate_f0915e495dcf554e524259b8a3a6ba1e007bef63e7a17c3d7e830330506de2a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CodersLabBundle:Contact:show.html.twig", 1);
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
        $__internal_14c6c834526dd5323a0c10dea84ad952e46a24a02dd3109700e7c62d325b6e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c6c834526dd5323a0c10dea84ad952e46a24a02dd3109700e7c62d325b6e38->enter($__internal_14c6c834526dd5323a0c10dea84ad952e46a24a02dd3109700e7c62d325b6e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle:Contact:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14c6c834526dd5323a0c10dea84ad952e46a24a02dd3109700e7c62d325b6e38->leave($__internal_14c6c834526dd5323a0c10dea84ad952e46a24a02dd3109700e7c62d325b6e38_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_08d311fd1b6da4d08d486b81bc44608a7153283198108848f206da0952078f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d311fd1b6da4d08d486b81bc44608a7153283198108848f206da0952078f88->enter($__internal_08d311fd1b6da4d08d486b81bc44608a7153283198108848f206da0952078f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "surname", array()), "html", null, true);
        echo "</h1>
    <hr>
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "description", array()), "html", null, true);
        echo "
    <hr>
    <a class=\"btn btn-default\" href='";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coderslab_contact_index");
        echo "'>Back to list</a>
    <a class=\"btn btn-default\" href='";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coderslab_contact_edit", array("id" => $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "'>Edit</a>
    <a class=\"btn btn-danger\" href='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coderslab_contact_delete", array("id" => $this->getAttribute(($context["contact"] ?? $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "'>Remove</a>
";
        
        $__internal_08d311fd1b6da4d08d486b81bc44608a7153283198108848f206da0952078f88->leave($__internal_08d311fd1b6da4d08d486b81bc44608a7153283198108848f206da0952078f88_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle:Contact:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  57 => 8,  53 => 7,  48 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
    <h1>{{contact.name}} {{contact.surname}}</h1>
    <hr>
    {{contact.description}}
    <hr>
    <a class=\"btn btn-default\" href='{{path('coderslab_contact_index')}}'>Back to list</a>
    <a class=\"btn btn-default\" href='{{path('coderslab_contact_edit',{'id':contact.id})}}'>Edit</a>
    <a class=\"btn btn-danger\" href='{{path('coderslab_contact_delete', {'id':contact.id}) }}'>Remove</a>
{% endblock %}
", "CodersLabBundle:Contact:show.html.twig", "/home/agata/Workspace/WARSZTATY_SYMFONY/src/CodersLabBundle/Resources/views/Contact/show.html.twig");
    }
}
