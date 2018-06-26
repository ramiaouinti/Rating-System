<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5ff6eaf9edfbf939978400bfba3aa7146691d730ae9e0e097d5294de8faacdc4 extends Twig_Template
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
        $__internal_12f27b2aaa24a5087ca9bbeeeef4ad0b78a6b52c60ea2be2a7fc257f6f2316f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f27b2aaa24a5087ca9bbeeeef4ad0b78a6b52c60ea2be2a7fc257f6f2316f6->enter($__internal_12f27b2aaa24a5087ca9bbeeeef4ad0b78a6b52c60ea2be2a7fc257f6f2316f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_12f27b2aaa24a5087ca9bbeeeef4ad0b78a6b52c60ea2be2a7fc257f6f2316f6->leave($__internal_12f27b2aaa24a5087ca9bbeeeef4ad0b78a6b52c60ea2be2a7fc257f6f2316f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\projects\\example\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
