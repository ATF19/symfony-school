<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_cafddfbbc3525c063ebc9c63c9c5e85923632898b493fa69f85912deb3d27bb6 extends Twig_Template
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
        $__internal_a2b96d9b1226ffc4d827377808676dfc7bfe7e31e2a10595a38ef6193fae6c15 = $this->env->getExtension("native_profiler");
        $__internal_a2b96d9b1226ffc4d827377808676dfc7bfe7e31e2a10595a38ef6193fae6c15->enter($__internal_a2b96d9b1226ffc4d827377808676dfc7bfe7e31e2a10595a38ef6193fae6c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_a2b96d9b1226ffc4d827377808676dfc7bfe7e31e2a10595a38ef6193fae6c15->leave($__internal_a2b96d9b1226ffc4d827377808676dfc7bfe7e31e2a10595a38ef6193fae6c15_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
