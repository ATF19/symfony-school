<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_8171acdcea2480ef50629c7cd7b5f43270de2d6db1744cfaa0599eb6e3e90a1d extends Twig_Template
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
        $__internal_906efcef0cbfd0cf5d23f03865404132222f466baace572ec2f1d247accb4f24 = $this->env->getExtension("native_profiler");
        $__internal_906efcef0cbfd0cf5d23f03865404132222f466baace572ec2f1d247accb4f24->enter($__internal_906efcef0cbfd0cf5d23f03865404132222f466baace572ec2f1d247accb4f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_906efcef0cbfd0cf5d23f03865404132222f466baace572ec2f1d247accb4f24->leave($__internal_906efcef0cbfd0cf5d23f03865404132222f466baace572ec2f1d247accb4f24_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
