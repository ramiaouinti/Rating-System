<?php

/* base.html.twig */
class __TwigTemplate_6ab69664328c4dc945f698c16b69d2c865ee1fca20a0c2d088afe98be24c1f57 extends Twig_Template
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
        $__internal_1f728a184734c5e9d9e5cbcdb23697da6217437c7d6dcae8b20e9e7050c61b7b = $this->env->getExtension("native_profiler");
        $__internal_1f728a184734c5e9d9e5cbcdb23697da6217437c7d6dcae8b20e9e7050c61b7b->enter($__internal_1f728a184734c5e9d9e5cbcdb23697da6217437c7d6dcae8b20e9e7050c61b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_1f728a184734c5e9d9e5cbcdb23697da6217437c7d6dcae8b20e9e7050c61b7b->leave($__internal_1f728a184734c5e9d9e5cbcdb23697da6217437c7d6dcae8b20e9e7050c61b7b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1010168524d5127e4f5e4488b5cbf25a7c30182dc3a17a596770addc01a9808b = $this->env->getExtension("native_profiler");
        $__internal_1010168524d5127e4f5e4488b5cbf25a7c30182dc3a17a596770addc01a9808b->enter($__internal_1010168524d5127e4f5e4488b5cbf25a7c30182dc3a17a596770addc01a9808b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1010168524d5127e4f5e4488b5cbf25a7c30182dc3a17a596770addc01a9808b->leave($__internal_1010168524d5127e4f5e4488b5cbf25a7c30182dc3a17a596770addc01a9808b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bdb82781dac38132c6cf68267339c5b8d6ef24503124bd6a60acc97ade744c0 = $this->env->getExtension("native_profiler");
        $__internal_8bdb82781dac38132c6cf68267339c5b8d6ef24503124bd6a60acc97ade744c0->enter($__internal_8bdb82781dac38132c6cf68267339c5b8d6ef24503124bd6a60acc97ade744c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8bdb82781dac38132c6cf68267339c5b8d6ef24503124bd6a60acc97ade744c0->leave($__internal_8bdb82781dac38132c6cf68267339c5b8d6ef24503124bd6a60acc97ade744c0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb601c31c2b2c493a2c57e545742f159823e7f5077eb1d1bb9ce0fada6c16b79 = $this->env->getExtension("native_profiler");
        $__internal_eb601c31c2b2c493a2c57e545742f159823e7f5077eb1d1bb9ce0fada6c16b79->enter($__internal_eb601c31c2b2c493a2c57e545742f159823e7f5077eb1d1bb9ce0fada6c16b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb601c31c2b2c493a2c57e545742f159823e7f5077eb1d1bb9ce0fada6c16b79->leave($__internal_eb601c31c2b2c493a2c57e545742f159823e7f5077eb1d1bb9ce0fada6c16b79_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82620e2bf04e17ec3011c745b55855c9735c27a70896d72ea4c1adfa54ee2f52 = $this->env->getExtension("native_profiler");
        $__internal_82620e2bf04e17ec3011c745b55855c9735c27a70896d72ea4c1adfa54ee2f52->enter($__internal_82620e2bf04e17ec3011c745b55855c9735c27a70896d72ea4c1adfa54ee2f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82620e2bf04e17ec3011c745b55855c9735c27a70896d72ea4c1adfa54ee2f52->leave($__internal_82620e2bf04e17ec3011c745b55855c9735c27a70896d72ea4c1adfa54ee2f52_prof);

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
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
