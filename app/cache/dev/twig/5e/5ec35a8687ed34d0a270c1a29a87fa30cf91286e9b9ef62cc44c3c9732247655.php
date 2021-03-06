<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d22619b6ebb56e4c7e9c5e6b984076629f8924f8f7736bb59ff88d901b222d10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d78fae0e84c50ff685d956e5e48585f8c6a99ede5baa98a354c57fad5a006b9 = $this->env->getExtension("native_profiler");
        $__internal_4d78fae0e84c50ff685d956e5e48585f8c6a99ede5baa98a354c57fad5a006b9->enter($__internal_4d78fae0e84c50ff685d956e5e48585f8c6a99ede5baa98a354c57fad5a006b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d78fae0e84c50ff685d956e5e48585f8c6a99ede5baa98a354c57fad5a006b9->leave($__internal_4d78fae0e84c50ff685d956e5e48585f8c6a99ede5baa98a354c57fad5a006b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5820b35b67020fe270cc76e2ddeb297fc23f76529df4004d87892bb63c6b905e = $this->env->getExtension("native_profiler");
        $__internal_5820b35b67020fe270cc76e2ddeb297fc23f76529df4004d87892bb63c6b905e->enter($__internal_5820b35b67020fe270cc76e2ddeb297fc23f76529df4004d87892bb63c6b905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5820b35b67020fe270cc76e2ddeb297fc23f76529df4004d87892bb63c6b905e->leave($__internal_5820b35b67020fe270cc76e2ddeb297fc23f76529df4004d87892bb63c6b905e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f60e5fbbfb50a1d87b38dcc349e220233578a8933f3f3b353bfab1a0acba814 = $this->env->getExtension("native_profiler");
        $__internal_2f60e5fbbfb50a1d87b38dcc349e220233578a8933f3f3b353bfab1a0acba814->enter($__internal_2f60e5fbbfb50a1d87b38dcc349e220233578a8933f3f3b353bfab1a0acba814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f60e5fbbfb50a1d87b38dcc349e220233578a8933f3f3b353bfab1a0acba814->leave($__internal_2f60e5fbbfb50a1d87b38dcc349e220233578a8933f3f3b353bfab1a0acba814_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2029e8dbc76608c44b8efde8bf3bed0d25cadb2c93f0211342b2b3179c8ebea1 = $this->env->getExtension("native_profiler");
        $__internal_2029e8dbc76608c44b8efde8bf3bed0d25cadb2c93f0211342b2b3179c8ebea1->enter($__internal_2029e8dbc76608c44b8efde8bf3bed0d25cadb2c93f0211342b2b3179c8ebea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2029e8dbc76608c44b8efde8bf3bed0d25cadb2c93f0211342b2b3179c8ebea1->leave($__internal_2029e8dbc76608c44b8efde8bf3bed0d25cadb2c93f0211342b2b3179c8ebea1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
