<?php

/* base.html.twig */
class __TwigTemplate_3d67c83a03c247b4a410c887af237bd43d34500cbd24e509343b0a1ad251a11a extends Twig_Template
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
        $__internal_7aa1531fd0c45918e3e1000fa4ac000b095be0176068144363a97dbc70da04e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa1531fd0c45918e3e1000fa4ac000b095be0176068144363a97dbc70da04e8->enter($__internal_7aa1531fd0c45918e3e1000fa4ac000b095be0176068144363a97dbc70da04e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7aa1531fd0c45918e3e1000fa4ac000b095be0176068144363a97dbc70da04e8->leave($__internal_7aa1531fd0c45918e3e1000fa4ac000b095be0176068144363a97dbc70da04e8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac18f07eb5f233bdf3117f481764f56021b7dd8fe21058cf4ce5e4fd5ea79efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac18f07eb5f233bdf3117f481764f56021b7dd8fe21058cf4ce5e4fd5ea79efb->enter($__internal_ac18f07eb5f233bdf3117f481764f56021b7dd8fe21058cf4ce5e4fd5ea79efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ac18f07eb5f233bdf3117f481764f56021b7dd8fe21058cf4ce5e4fd5ea79efb->leave($__internal_ac18f07eb5f233bdf3117f481764f56021b7dd8fe21058cf4ce5e4fd5ea79efb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de1e5a378fefb8e8a52e45ba6d07ab60cb7794dcfdfc2b87dcab2d5ca57440ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1e5a378fefb8e8a52e45ba6d07ab60cb7794dcfdfc2b87dcab2d5ca57440ec->enter($__internal_de1e5a378fefb8e8a52e45ba6d07ab60cb7794dcfdfc2b87dcab2d5ca57440ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_de1e5a378fefb8e8a52e45ba6d07ab60cb7794dcfdfc2b87dcab2d5ca57440ec->leave($__internal_de1e5a378fefb8e8a52e45ba6d07ab60cb7794dcfdfc2b87dcab2d5ca57440ec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f2838c07d1d201380e415c579a79deec3eb6994e2d08ed0e002974a8df8784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f2838c07d1d201380e415c579a79deec3eb6994e2d08ed0e002974a8df8784->enter($__internal_20f2838c07d1d201380e415c579a79deec3eb6994e2d08ed0e002974a8df8784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20f2838c07d1d201380e415c579a79deec3eb6994e2d08ed0e002974a8df8784->leave($__internal_20f2838c07d1d201380e415c579a79deec3eb6994e2d08ed0e002974a8df8784_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fceb037593ca3dd18aa92e8f7b3115daac9fb8a6016be38d7d3c2f6382b5136a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fceb037593ca3dd18aa92e8f7b3115daac9fb8a6016be38d7d3c2f6382b5136a->enter($__internal_fceb037593ca3dd18aa92e8f7b3115daac9fb8a6016be38d7d3c2f6382b5136a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fceb037593ca3dd18aa92e8f7b3115daac9fb8a6016be38d7d3c2f6382b5136a->leave($__internal_fceb037593ca3dd18aa92e8f7b3115daac9fb8a6016be38d7d3c2f6382b5136a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\projects\\Rating_System\\app\\Resources\\views\\base.html.twig");
    }
}
