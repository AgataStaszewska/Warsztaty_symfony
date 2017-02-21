<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_75a9e844ea6ee811690ab171b9ecc6b87071b58b195c21f7b5ffc7bfa5fbfd20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2e7c9c1d4c7de29a68c4fbdbf80edd5a9875a3d0513c3e708335f15144eadf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e7c9c1d4c7de29a68c4fbdbf80edd5a9875a3d0513c3e708335f15144eadf4->enter($__internal_e2e7c9c1d4c7de29a68c4fbdbf80edd5a9875a3d0513c3e708335f15144eadf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e7c9c1d4c7de29a68c4fbdbf80edd5a9875a3d0513c3e708335f15144eadf4->leave($__internal_e2e7c9c1d4c7de29a68c4fbdbf80edd5a9875a3d0513c3e708335f15144eadf4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b22ce478a6ee30ad654c22356f3432f3c583d2199c646b1a1df658609107aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b22ce478a6ee30ad654c22356f3432f3c583d2199c646b1a1df658609107aae->enter($__internal_0b22ce478a6ee30ad654c22356f3432f3c583d2199c646b1a1df658609107aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b22ce478a6ee30ad654c22356f3432f3c583d2199c646b1a1df658609107aae->leave($__internal_0b22ce478a6ee30ad654c22356f3432f3c583d2199c646b1a1df658609107aae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_58b0475406512a52e5a5bc33d7fd13c4074d99fe01c662a3f3e7bdff7d8d6693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b0475406512a52e5a5bc33d7fd13c4074d99fe01c662a3f3e7bdff7d8d6693->enter($__internal_58b0475406512a52e5a5bc33d7fd13c4074d99fe01c662a3f3e7bdff7d8d6693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_58b0475406512a52e5a5bc33d7fd13c4074d99fe01c662a3f3e7bdff7d8d6693->leave($__internal_58b0475406512a52e5a5bc33d7fd13c4074d99fe01c662a3f3e7bdff7d8d6693_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a9ed3fb0bc26844b0bc64be4c1029e19a670eabbb38214252db103bb0f97796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9ed3fb0bc26844b0bc64be4c1029e19a670eabbb38214252db103bb0f97796->enter($__internal_6a9ed3fb0bc26844b0bc64be4c1029e19a670eabbb38214252db103bb0f97796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a9ed3fb0bc26844b0bc64be4c1029e19a670eabbb38214252db103bb0f97796->leave($__internal_6a9ed3fb0bc26844b0bc64be4c1029e19a670eabbb38214252db103bb0f97796_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/agata/Workspace/WARSZTATY_SYMFONY/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
