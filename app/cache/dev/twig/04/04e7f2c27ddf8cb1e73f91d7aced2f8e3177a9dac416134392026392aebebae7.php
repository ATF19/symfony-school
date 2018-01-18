<?php

/* matiere/index.html.twig */
class __TwigTemplate_99d9aae06c2f8f72d1255281c6448af34eca8d717680900d709518fb5fe53230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matiere/index.html.twig", 1);
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
        $__internal_0613ea3dbddf47a8cf4cbb6c2c6b0bdefb37d0028b52d1cdf238fe6c89078fc0 = $this->env->getExtension("native_profiler");
        $__internal_0613ea3dbddf47a8cf4cbb6c2c6b0bdefb37d0028b52d1cdf238fe6c89078fc0->enter($__internal_0613ea3dbddf47a8cf4cbb6c2c6b0bdefb37d0028b52d1cdf238fe6c89078fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0613ea3dbddf47a8cf4cbb6c2c6b0bdefb37d0028b52d1cdf238fe6c89078fc0->leave($__internal_0613ea3dbddf47a8cf4cbb6c2c6b0bdefb37d0028b52d1cdf238fe6c89078fc0_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b1383e6004963a1df3effb244ef821bc6856720239c27fcf8511079161b3477 = $this->env->getExtension("native_profiler");
        $__internal_4b1383e6004963a1df3effb244ef821bc6856720239c27fcf8511079161b3477->enter($__internal_4b1383e6004963a1df3effb244ef821bc6856720239c27fcf8511079161b3477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4b1383e6004963a1df3effb244ef821bc6856720239c27fcf8511079161b3477->leave($__internal_4b1383e6004963a1df3effb244ef821bc6856720239c27fcf8511079161b3477_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_455e298abf426dce8ac80b90f9e4ab04421773267cabaa1bcd3758b66adace59 = $this->env->getExtension("native_profiler");
        $__internal_455e298abf426dce8ac80b90f9e4ab04421773267cabaa1bcd3758b66adace59->enter($__internal_455e298abf426dce8ac80b90f9e4ab04421773267cabaa1bcd3758b66adace59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Matieres</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Afficher</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_show", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_show", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">show</a>

                </td>
                <td>
                  <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_edit", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">edit</a>
                </td>
                <td>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_delete1", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">supprimer</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

            <a class=\"btn btn-primary\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("matiere_new");
        echo "\">Ajouter</a>
";
        
        $__internal_455e298abf426dce8ac80b90f9e4ab04421773267cabaa1bcd3758b66adace59->leave($__internal_455e298abf426dce8ac80b90f9e4ab04421773267cabaa1bcd3758b66adace59_prof);

    }

    public function getTemplateName()
    {
        return "matiere/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  121 => 37,  111 => 33,  105 => 30,  98 => 26,  93 => 24,  87 => 23,  84 => 22,  80 => 21,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
/*     <h1>Matieres</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Libelle</th>*/
/*                 <th>Afficher</th>*/
/*                 <th>Modifier</th>*/
/*                 <th>Supprimer</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for matiere in matieres %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('matiere_show', { 'id': matiere.id }) }}">{{ matiere.id }}</a></td>*/
/*                 <td>{{ matiere.libelle }}</td>*/
/*                 <td>*/
/*                             <a href="{{ path('matiere_show', { 'id': matiere.id }) }}" class="btn btn-primary">show</a>*/
/* */
/*                 </td>*/
/*                 <td>*/
/*                   <a href="{{ path('matiere_edit', { 'id': matiere.id }) }}" class="btn btn-warning">edit</a>*/
/*                 </td>*/
/*                 <td>*/
/*                     <a href="{{ path('matiere_delete1', { 'id': matiere.id }) }}" class="btn btn-danger">supprimer</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*             <a class="btn btn-primary" href="{{ path('matiere_new') }}">Ajouter</a>*/
/* {% endblock %}*/
/* */
