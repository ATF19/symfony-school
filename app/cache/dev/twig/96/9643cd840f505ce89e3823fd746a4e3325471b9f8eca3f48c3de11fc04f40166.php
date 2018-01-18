<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_9b0b21f61cb6017b4c997c01cb069ab001da6c24d2d489d51feba2ba63e077e1 extends Twig_Template
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
        $__internal_d84497a9e24dcc6d5ee23f553f7ada84739db572e7936fff8677468e648a1cb3 = $this->env->getExtension("native_profiler");
        $__internal_d84497a9e24dcc6d5ee23f553f7ada84739db572e7936fff8677468e648a1cb3->enter($__internal_d84497a9e24dcc6d5ee23f553f7ada84739db572e7936fff8677468e648a1cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_d84497a9e24dcc6d5ee23f553f7ada84739db572e7936fff8677468e648a1cb3->leave($__internal_d84497a9e24dcc6d5ee23f553f7ada84739db572e7936fff8677468e648a1cb3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
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
/* {{ value|date(field_options.format) }}*/
/* */
