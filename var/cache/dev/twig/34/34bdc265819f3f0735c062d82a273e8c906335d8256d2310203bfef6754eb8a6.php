<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_913a98045bcf5e89a5672ce1aa702c8f431d6a56e21ef92f511bbc9226328b2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afea83332872f0d3a2ab66b07c12a7bd9ed32b0114ac6416ddfa8cd1659765ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afea83332872f0d3a2ab66b07c12a7bd9ed32b0114ac6416ddfa8cd1659765ee->enter($__internal_afea83332872f0d3a2ab66b07c12a7bd9ed32b0114ac6416ddfa8cd1659765ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_afea83332872f0d3a2ab66b07c12a7bd9ed32b0114ac6416ddfa8cd1659765ee->leave($__internal_afea83332872f0d3a2ab66b07c12a7bd9ed32b0114ac6416ddfa8cd1659765ee_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle::Components/motd.html.twig", "C:\\projects\\example\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
