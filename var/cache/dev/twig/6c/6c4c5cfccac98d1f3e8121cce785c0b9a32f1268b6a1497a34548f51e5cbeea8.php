<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_edf653f5ef8b6e5206973c045f244e4546918def65d430fe82c75d543ae49e3e extends Twig_Template
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
        $__internal_00c606c69630fe635d2e9a3de9aeb87b3a08afbc961378241af68cf5b53219dc = $this->env->getExtension("native_profiler");
        $__internal_00c606c69630fe635d2e9a3de9aeb87b3a08afbc961378241af68cf5b53219dc->enter($__internal_00c606c69630fe635d2e9a3de9aeb87b3a08afbc961378241af68cf5b53219dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_00c606c69630fe635d2e9a3de9aeb87b3a08afbc961378241af68cf5b53219dc->leave($__internal_00c606c69630fe635d2e9a3de9aeb87b3a08afbc961378241af68cf5b53219dc_prof);

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
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
