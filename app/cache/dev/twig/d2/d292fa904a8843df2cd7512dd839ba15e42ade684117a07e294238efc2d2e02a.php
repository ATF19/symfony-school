<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_d8e92615885686f552d9e8e491c69dbb1230169a44c4aecae550e38ab9b9cbf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_039c004ebf906380586e0bd5d5ecee3324cf1868f1eae7e49f40abc307224af3 = $this->env->getExtension("native_profiler");
        $__internal_039c004ebf906380586e0bd5d5ecee3324cf1868f1eae7e49f40abc307224af3->enter($__internal_039c004ebf906380586e0bd5d5ecee3324cf1868f1eae7e49f40abc307224af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1"]) ? $context["__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1"] : $this->getContext($context, "__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1"))), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1"]) ? $context["__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1"] : $this->getContext($context, "__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_039c004ebf906380586e0bd5d5ecee3324cf1868f1eae7e49f40abc307224af3->leave($__internal_039c004ebf906380586e0bd5d5ecee3324cf1868f1eae7e49f40abc307224af3_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d30a9992f106298efb54ed6e567147b0bf05ab51f7e3739fed7cabdae605e93d = $this->env->getExtension("native_profiler");
        $__internal_d30a9992f106298efb54ed6e567147b0bf05ab51f7e3739fed7cabdae605e93d->enter($__internal_d30a9992f106298efb54ed6e567147b0bf05ab51f7e3739fed7cabdae605e93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_d30a9992f106298efb54ed6e567147b0bf05ab51f7e3739fed7cabdae605e93d->leave($__internal_d30a9992f106298efb54ed6e567147b0bf05ab51f7e3739fed7cabdae605e93d_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a528c97b96ce9ccc0d550e6a19ad21e5486806e82386919ed5658027aa4160cb = $this->env->getExtension("native_profiler");
        $__internal_a528c97b96ce9ccc0d550e6a19ad21e5486806e82386919ed5658027aa4160cb->enter($__internal_a528c97b96ce9ccc0d550e6a19ad21e5486806e82386919ed5658027aa4160cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_a528c97b96ce9ccc0d550e6a19ad21e5486806e82386919ed5658027aa4160cb->leave($__internal_a528c97b96ce9ccc0d550e6a19ad21e5486806e82386919ed5658027aa4160cb_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_be9e037a6c1da7d0cabed7ab43b89cf3ab5170d2b088cffb8c62ad1188b6d508 = $this->env->getExtension("native_profiler");
        $__internal_be9e037a6c1da7d0cabed7ab43b89cf3ab5170d2b088cffb8c62ad1188b6d508->enter($__internal_be9e037a6c1da7d0cabed7ab43b89cf3ab5170d2b088cffb8c62ad1188b6d508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1"]) ? $context["__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1"] : $this->getContext($context, "__internal_667d3d84771dba9f1d30ba934d79babc33a07f6cba8922604068d22901d788e1")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_be9e037a6c1da7d0cabed7ab43b89cf3ab5170d2b088cffb8c62ad1188b6d508->leave($__internal_be9e037a6c1da7d0cabed7ab43b89cf3ab5170d2b088cffb8c62ad1188b6d508_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_6a71b5db94bd39fa8c5d89c5469a9c12d4aef94f42a628511f32f0780a62c89e = $this->env->getExtension("native_profiler");
        $__internal_6a71b5db94bd39fa8c5d89c5469a9c12d4aef94f42a628511f32f0780a62c89e->enter($__internal_6a71b5db94bd39fa8c5d89c5469a9c12d4aef94f42a628511f32f0780a62c89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_6a71b5db94bd39fa8c5d89c5469a9c12d4aef94f42a628511f32f0780a62c89e->leave($__internal_6a71b5db94bd39fa8c5d89c5469a9c12d4aef94f42a628511f32f0780a62c89e_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_a844e8f5bb396ca9aa9a51a43dba4e372570ad60606e93ca0da3af8305a36038 = $this->env->getExtension("native_profiler");
        $__internal_a844e8f5bb396ca9aa9a51a43dba4e372570ad60606e93ca0da3af8305a36038->enter($__internal_a844e8f5bb396ca9aa9a51a43dba4e372570ad60606e93ca0da3af8305a36038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_a844e8f5bb396ca9aa9a51a43dba4e372570ad60606e93ca0da3af8305a36038->leave($__internal_a844e8f5bb396ca9aa9a51a43dba4e372570ad60606e93ca0da3af8305a36038_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_4e1d74ae59397706c42a027072ca3e9ed522f3fe3115e9ee7590a1f3365cc88a = $this->env->getExtension("native_profiler");
        $__internal_4e1d74ae59397706c42a027072ca3e9ed522f3fe3115e9ee7590a1f3365cc88a->enter($__internal_4e1d74ae59397706c42a027072ca3e9ed522f3fe3115e9ee7590a1f3365cc88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_4e1d74ae59397706c42a027072ca3e9ed522f3fe3115e9ee7590a1f3365cc88a->leave($__internal_4e1d74ae59397706c42a027072ca3e9ed522f3fe3115e9ee7590a1f3365cc88a_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  141 => 30,  133 => 26,  127 => 25,  117 => 21,  104 => 20,  98 => 19,  88 => 15,  87 => 4,  85 => 15,  82 => 14,  80 => 13,  74 => 12,  62 => 10,  50 => 9,  43 => 7,  41 => 4,  40 => 5,  39 => 4,  38 => 5,  36 => 4,  34 => 3,  32 => 1,  23 => 7,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% trans_default_domain _entity_config.translation_domain %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-new-' ~ _entity_config.name %}*/
/* {% block body_class 'new new-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/*         });*/
/*     </script>*/
/* */
/*     {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}*/
/* {% endblock %}*/
/* */
