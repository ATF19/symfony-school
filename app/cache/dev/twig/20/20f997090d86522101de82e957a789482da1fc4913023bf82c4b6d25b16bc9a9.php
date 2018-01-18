<?php

/* coefficient/index.html.twig */
class __TwigTemplate_43a9e20a98eeb0fc8a0fb9f6ed298373243717371d26df2da2dcd24fbec7d3cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coefficient/index.html.twig", 1);
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
        $__internal_f359fc2bf000fe026eeef0761e17685cf7d397d48fd1a4a550b395e168ff6efb = $this->env->getExtension("native_profiler");
        $__internal_f359fc2bf000fe026eeef0761e17685cf7d397d48fd1a4a550b395e168ff6efb->enter($__internal_f359fc2bf000fe026eeef0761e17685cf7d397d48fd1a4a550b395e168ff6efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coefficient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f359fc2bf000fe026eeef0761e17685cf7d397d48fd1a4a550b395e168ff6efb->leave($__internal_f359fc2bf000fe026eeef0761e17685cf7d397d48fd1a4a550b395e168ff6efb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92741f1ce9b93d48e3aa948a3fab1d477a297124c310ce70c7f35d005b850359 = $this->env->getExtension("native_profiler");
        $__internal_92741f1ce9b93d48e3aa948a3fab1d477a297124c310ce70c7f35d005b850359->enter($__internal_92741f1ce9b93d48e3aa948a3fab1d477a297124c310ce70c7f35d005b850359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_92741f1ce9b93d48e3aa948a3fab1d477a297124c310ce70c7f35d005b850359->leave($__internal_92741f1ce9b93d48e3aa948a3fab1d477a297124c310ce70c7f35d005b850359_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8afe2d8335a573a9ac62e4566d533776c57d9e9c0797194960f20bd1b7d7c50 = $this->env->getExtension("native_profiler");
        $__internal_d8afe2d8335a573a9ac62e4566d533776c57d9e9c0797194960f20bd1b7d7c50->enter($__internal_d8afe2d8335a573a9ac62e4566d533776c57d9e9c0797194960f20bd1b7d7c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Coefficient list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Coef</th>
                <th>Matiere</th>
                <th>Classe</th>
                <th>Afficher</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coefficients"]) ? $context["coefficients"] : $this->getContext($context, "coefficients")));
        foreach ($context['_seq'] as $context["_key"] => $context["coefficient"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coefficient_show", array("id" => $this->getAttribute($context["coefficient"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coefficient"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["coefficient"], "coef", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coefficient"], "matiere", array()), "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coefficient"], "classe", array()), "libelle", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coefficient_show", array("id" => $this->getAttribute($context["coefficient"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">show</a></td>
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coefficient_edit", array("id" => $this->getAttribute($context["coefficient"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">edit</a></td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coefficient_delete1", array("id" => $this->getAttribute($context["coefficient"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">supprimer</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coefficient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("coefficient_new");
        echo "\" class=\"btn btn-primary\">Ajouter</a>
";
        
        $__internal_d8afe2d8335a573a9ac62e4566d533776c57d9e9c0797194960f20bd1b7d7c50->leave($__internal_d8afe2d8335a573a9ac62e4566d533776c57d9e9c0797194960f20bd1b7d7c50_prof);

    }

    public function getTemplateName()
    {
        return "coefficient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  126 => 36,  116 => 32,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  89 => 25,  86 => 24,  82 => 23,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
/*     <h1>Coefficient list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Coef</th>*/
/*                 <th>Matiere</th>*/
/*                 <th>Classe</th>*/
/*                 <th>Afficher</th>*/
/*                 <th>Modifier</th>*/
/*                 <th>Supprimer</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for coefficient in coefficients %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('coefficient_show', { 'id': coefficient.id }) }}">{{ coefficient.id }}</a></td>*/
/*                 <td>{{ coefficient.coef }}</td>*/
/*                 <td>{{ coefficient.matiere.libelle }}</td>*/
/*                 <td>{{ coefficient.classe.libelle }}</td>*/
/*                 <td><a href="{{ path('coefficient_show', { 'id': coefficient.id }) }}" class="btn btn-primary">show</a></td>*/
/*                 <td><a href="{{ path('coefficient_edit', { 'id': coefficient.id }) }}" class="btn btn-warning">edit</a></td>*/
/*                 <td>*/
/*                     <a href="{{ path('coefficient_delete1', { 'id': coefficient.id }) }}" class="btn btn-danger">supprimer</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*             <a href="{{ path('coefficient_new') }}" class="btn btn-primary">Ajouter</a>*/
/* {% endblock %}*/
/* */
