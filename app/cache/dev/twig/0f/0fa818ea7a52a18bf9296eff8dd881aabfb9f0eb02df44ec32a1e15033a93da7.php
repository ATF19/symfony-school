<?php

/* user/new.html.twig */
class __TwigTemplate_436a1468e33af1ec195c5e8f91e067f3fbec30ec850b392c1e148ca320a71b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57a53ff98919a85b3888d6e233a95c88cc5c9177d329289d56109ebce7738b4e = $this->env->getExtension("native_profiler");
        $__internal_57a53ff98919a85b3888d6e233a95c88cc5c9177d329289d56109ebce7738b4e->enter($__internal_57a53ff98919a85b3888d6e233a95c88cc5c9177d329289d56109ebce7738b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57a53ff98919a85b3888d6e233a95c88cc5c9177d329289d56109ebce7738b4e->leave($__internal_57a53ff98919a85b3888d6e233a95c88cc5c9177d329289d56109ebce7738b4e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bfa0cc18f9227384798a4f30b1e254ed7415e2f513cd42163f1e16460c2145b5 = $this->env->getExtension("native_profiler");
        $__internal_bfa0cc18f9227384798a4f30b1e254ed7415e2f513cd42163f1e16460c2145b5->enter($__internal_bfa0cc18f9227384798a4f30b1e254ed7415e2f513cd42163f1e16460c2145b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\">
                           <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_bfa0cc18f9227384798a4f30b1e254ed7415e2f513cd42163f1e16460c2145b5->leave($__internal_bfa0cc18f9227384798a4f30b1e254ed7415e2f513cd42163f1e16460c2145b5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa8f52e331b4b640d2df48ac90a985610819afb44ab518adf06de3b6d41290b1 = $this->env->getExtension("native_profiler");
        $__internal_aa8f52e331b4b640d2df48ac90a985610819afb44ab518adf06de3b6d41290b1->enter($__internal_aa8f52e331b4b640d2df48ac90a985610819afb44ab518adf06de3b6d41290b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>S'inscrire</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"S'inscrire\" class=\"btn btn-primary\" />
        <input type=\"reset\" value=\"Annuler\" class=\"btn btn-warning\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_aa8f52e331b4b640d2df48ac90a985610819afb44ab518adf06de3b6d41290b1->leave($__internal_aa8f52e331b4b640d2df48ac90a985610819afb44ab518adf06de3b6d41290b1_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  73 => 11,  69 => 10,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
/*     <h1>S'inscrire</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="S'inscrire" class="btn btn-primary" />*/
/*         <input type="reset" value="Annuler" class="btn btn-warning" />*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
