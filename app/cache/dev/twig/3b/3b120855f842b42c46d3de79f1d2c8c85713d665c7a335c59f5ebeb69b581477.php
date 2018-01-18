<?php

/* user/show.html.twig */
class __TwigTemplate_c651334197b36bd48340f020123a761485bb7e259bbbde01727b4c138968fbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d318c6ad2fde678396be68edb66d910831c909bc2d5239905de9b620d5b45f11 = $this->env->getExtension("native_profiler");
        $__internal_d318c6ad2fde678396be68edb66d910831c909bc2d5239905de9b620d5b45f11->enter($__internal_d318c6ad2fde678396be68edb66d910831c909bc2d5239905de9b620d5b45f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d318c6ad2fde678396be68edb66d910831c909bc2d5239905de9b620d5b45f11->leave($__internal_d318c6ad2fde678396be68edb66d910831c909bc2d5239905de9b620d5b45f11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_559ea7f853ecb62d76912d543f7a2fef7fe9b4d639ea35be1f77af99b04f8a03 = $this->env->getExtension("native_profiler");
        $__internal_559ea7f853ecb62d76912d543f7a2fef7fe9b4d639ea35be1f77af99b04f8a03->enter($__internal_559ea7f853ecb62d76912d543f7a2fef7fe9b4d639ea35be1f77af99b04f8a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
";
        
        $__internal_559ea7f853ecb62d76912d543f7a2fef7fe9b4d639ea35be1f77af99b04f8a03->leave($__internal_559ea7f853ecb62d76912d543f7a2fef7fe9b4d639ea35be1f77af99b04f8a03_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* {% endblock %}*/
/* */
