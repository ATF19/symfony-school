<?php

/* user/index.html.twig */
class __TwigTemplate_fb8b8b49c5c27c7df47724a06bed0721186f074234eaa32f7882439c7d8584a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_9f47037756bbf6e46daf88edb6e24e332bc3e51912e107379a9d6074ec1084d4 = $this->env->getExtension("native_profiler");
        $__internal_9f47037756bbf6e46daf88edb6e24e332bc3e51912e107379a9d6074ec1084d4->enter($__internal_9f47037756bbf6e46daf88edb6e24e332bc3e51912e107379a9d6074ec1084d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f47037756bbf6e46daf88edb6e24e332bc3e51912e107379a9d6074ec1084d4->leave($__internal_9f47037756bbf6e46daf88edb6e24e332bc3e51912e107379a9d6074ec1084d4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_836afe08960ca76011d668d4a8b2279d017ad0e14af068c44755f222aa5cc8f8 = $this->env->getExtension("native_profiler");
        $__internal_836afe08960ca76011d668d4a8b2279d017ad0e14af068c44755f222aa5cc8f8->enter($__internal_836afe08960ca76011d668d4a8b2279d017ad0e14af068c44755f222aa5cc8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_836afe08960ca76011d668d4a8b2279d017ad0e14af068c44755f222aa5cc8f8->leave($__internal_836afe08960ca76011d668d4a8b2279d017ad0e14af068c44755f222aa5cc8f8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_672211920cdf7d7c36f82a18749175152a3d9a4e9b906a35ed583b3fc51dd53f = $this->env->getExtension("native_profiler");
        $__internal_672211920cdf7d7c36f82a18749175152a3d9a4e9b906a35ed583b3fc51dd53f->enter($__internal_672211920cdf7d7c36f82a18749175152a3d9a4e9b906a35ed583b3fc51dd53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"container text-center\">
<h1>Connecter</h1>
    <form method=\"POST\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\">
      Login: <input type=\"text\" placeholder=\"Login\" name=\"login\" /><br /><br />
      Password: <input type=\"password\" placeholder=\"password\" name=\"password\" /> <br /><br />
      ";
        // line 14
        if (array_key_exists("message", $context)) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo " <br /><br />
      ";
        }
        // line 17
        echo "      <input type=\"submit\" value=\"Connecter\" class=\"btn btn-primary\" />
      <input type=\"reset\" value=\"Annuler\" class=\"btn btn-warning\" />
    </form>

    <br/> <br/><br/>
<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>
</div>
";
        
        $__internal_672211920cdf7d7c36f82a18749175152a3d9a4e9b906a35ed583b3fc51dd53f->leave($__internal_672211920cdf7d7c36f82a18749175152a3d9a4e9b906a35ed583b3fc51dd53f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  83 => 17,  77 => 15,  75 => 14,  69 => 11,  65 => 9,  59 => 8,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container text-center">*/
/* <h1>Connecter</h1>*/
/*     <form method="POST" action="{{ path('user_login') }}">*/
/*       Login: <input type="text" placeholder="Login" name="login" /><br /><br />*/
/*       Password: <input type="password" placeholder="password" name="password" /> <br /><br />*/
/*       {%if(message is defined)%}*/
/*         {{message}} <br /><br />*/
/*       {%endif%}*/
/*       <input type="submit" value="Connecter" class="btn btn-primary" />*/
/*       <input type="reset" value="Annuler" class="btn btn-warning" />*/
/*     </form>*/
/* */
/*     <br/> <br/><br/>*/
/* <a href="{{ path('user_new') }}" class="btn btn-primary">S'inscrire</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
