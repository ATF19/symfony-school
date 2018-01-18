<?php

/* MyschoolBundle:Student:list_classe.html.twig */
class __TwigTemplate_cf56c66439d7abdb9dc5a12867e6f3ea863da99ebb89ad36919338140036844b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Student:list_classe.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_813c48bd9912480e01593013559b62ea613271365c841b60ac33fdd22921d912 = $this->env->getExtension("native_profiler");
        $__internal_813c48bd9912480e01593013559b62ea613271365c841b60ac33fdd22921d912->enter($__internal_813c48bd9912480e01593013559b62ea613271365c841b60ac33fdd22921d912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:list_classe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_813c48bd9912480e01593013559b62ea613271365c841b60ac33fdd22921d912->leave($__internal_813c48bd9912480e01593013559b62ea613271365c841b60ac33fdd22921d912_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7900606c9c39a64f91dd83ac20ee3b04ae15b9e56d6bea4c70c31dd8f4c6e001 = $this->env->getExtension("native_profiler");
        $__internal_7900606c9c39a64f91dd83ac20ee3b04ae15b9e56d6bea4c70c31dd8f4c6e001->enter($__internal_7900606c9c39a64f91dd83ac20ee3b04ae15b9e56d6bea4c70c31dd8f4c6e001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\">
                           <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_7900606c9c39a64f91dd83ac20ee3b04ae15b9e56d6bea4c70c31dd8f4c6e001->leave($__internal_7900606c9c39a64f91dd83ac20ee3b04ae15b9e56d6bea4c70c31dd8f4c6e001_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_814c07701a0d09b00e4038742eb025a2cc71c98bc9182b560cd11f9b10244d7f = $this->env->getExtension("native_profiler");
        $__internal_814c07701a0d09b00e4038742eb025a2cc71c98bc9182b560cd11f9b10244d7f->enter($__internal_814c07701a0d09b00e4038742eb025a2cc71c98bc9182b560cd11f9b10244d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"container\">
    <h1>Classe</h1>

    <table class=\"records_list table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "libelle", array()), "html", null, true);
            echo "</td>
                <td class=\"col-md-1\"><a class=\"btn btn-success\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_classe", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                <td class=\"col-md-1\"><a class=\"btn btn-danger\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_classe", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("classe_new");
        echo "\" class=\"btn btn-primary\">
                Ajouter
            </a>
    </div>
    ";
        
        $__internal_814c07701a0d09b00e4038742eb025a2cc71c98bc9182b560cd11f9b10244d7f->leave($__internal_814c07701a0d09b00e4038742eb025a2cc71c98bc9182b560cd11f9b10244d7f_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Student:list_classe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  106 => 29,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  82 => 22,  78 => 21,  65 => 10,  59 => 9,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* */
/* {% block body -%}*/
/* <div class="container">*/
/*     <h1>Classe</h1>*/
/* */
/*     <table class="records_list table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Libelle</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cl in enss %}*/
/*             <tr>*/
/*                 <td>{{ cl.id }}</td>*/
/*                 <td>{{ cl.libelle }}</td>*/
/*                 <td class="col-md-1"><a class="btn btn-success" href="{{ path('edit_classe', { 'id': cl.id }) }}">Modifier</a></td>*/
/*                 <td class="col-md-1"><a class="btn btn-danger" href="{{ path('remove_classe', { 'id': cl.id }) }}"><i class="glyphicon glyphicon-trash"></i> Supprimer</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*             <a href="{{ path('classe_new') }}" class="btn btn-primary">*/
/*                 Ajouter*/
/*             </a>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
