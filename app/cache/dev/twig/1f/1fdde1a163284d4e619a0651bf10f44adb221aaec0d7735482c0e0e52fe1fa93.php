<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_2566005eda6f13ba29dc95bb7fef6fbfa46091edd5f8e58cd2cdbbae46cb0098 extends Twig_Template
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
        $__internal_5d9acb9651f5b0e973aa21bdd38ed2b769d79711c86a70d37bea77ecfcaeada5 = $this->env->getExtension("native_profiler");
        $__internal_5d9acb9651f5b0e973aa21bdd38ed2b769d79711c86a70d37bea77ecfcaeada5->enter($__internal_5d9acb9651f5b0e973aa21bdd38ed2b769d79711c86a70d37bea77ecfcaeada5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_5d9acb9651f5b0e973aa21bdd38ed2b769d79711c86a70d37bea77ecfcaeada5->leave($__internal_5d9acb9651f5b0e973aa21bdd38ed2b769d79711c86a70d37bea77ecfcaeada5_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
