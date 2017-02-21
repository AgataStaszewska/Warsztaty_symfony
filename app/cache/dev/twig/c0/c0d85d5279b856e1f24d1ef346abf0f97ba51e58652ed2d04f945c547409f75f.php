<?php

/* ::base.html.twig */
class __TwigTemplate_7261afcc27ca9585b19985ef3ca1ca8bdb074c3631cd98419c3545ec763b9487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7624d01a95444814badc14cd9b18ed71e9c6a6d74e9567755fae9f4e70730d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7624d01a95444814badc14cd9b18ed71e9c6a6d74e9567755fae9f4e70730d6->enter($__internal_d7624d01a95444814badc14cd9b18ed71e9c6a6d74e9567755fae9f4e70730d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_d7624d01a95444814badc14cd9b18ed71e9c6a6d74e9567755fae9f4e70730d6->leave($__internal_d7624d01a95444814badc14cd9b18ed71e9c6a6d74e9567755fae9f4e70730d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce0fb2aa5ef8d51a685945a0cad74c67592d9074afd24777630d62ffb85c5adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0fb2aa5ef8d51a685945a0cad74c67592d9074afd24777630d62ffb85c5adb->enter($__internal_ce0fb2aa5ef8d51a685945a0cad74c67592d9074afd24777630d62ffb85c5adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ce0fb2aa5ef8d51a685945a0cad74c67592d9074afd24777630d62ffb85c5adb->leave($__internal_ce0fb2aa5ef8d51a685945a0cad74c67592d9074afd24777630d62ffb85c5adb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e1b674c7822194a1e1c1015b01ac55f27bd87fb78e72b2b405a15e6b2768209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1b674c7822194a1e1c1015b01ac55f27bd87fb78e72b2b405a15e6b2768209->enter($__internal_9e1b674c7822194a1e1c1015b01ac55f27bd87fb78e72b2b405a15e6b2768209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e1b674c7822194a1e1c1015b01ac55f27bd87fb78e72b2b405a15e6b2768209->leave($__internal_9e1b674c7822194a1e1c1015b01ac55f27bd87fb78e72b2b405a15e6b2768209_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_984d782bc04d77b1a7fe5b813cc61f85aa45c2d8ffe8b001ecab18a5a3963d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984d782bc04d77b1a7fe5b813cc61f85aa45c2d8ffe8b001ecab18a5a3963d72->enter($__internal_984d782bc04d77b1a7fe5b813cc61f85aa45c2d8ffe8b001ecab18a5a3963d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_984d782bc04d77b1a7fe5b813cc61f85aa45c2d8ffe8b001ecab18a5a3963d72->leave($__internal_984d782bc04d77b1a7fe5b813cc61f85aa45c2d8ffe8b001ecab18a5a3963d72_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_957766168919ff0f5c3ca6e681f0db3a7c1a183b74e512061c73bb5979a4de41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957766168919ff0f5c3ca6e681f0db3a7c1a183b74e512061c73bb5979a4de41->enter($__internal_957766168919ff0f5c3ca6e681f0db3a7c1a183b74e512061c73bb5979a4de41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_957766168919ff0f5c3ca6e681f0db3a7c1a183b74e512061c73bb5979a4de41->leave($__internal_957766168919ff0f5c3ca6e681f0db3a7c1a183b74e512061c73bb5979a4de41_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  84 => 12,  73 => 6,  61 => 5,  52 => 14,  49 => 13,  47 => 12,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/agata/Workspace/WARSZTATY_SYMFONY/app/Resources/views/base.html.twig");
    }
}
