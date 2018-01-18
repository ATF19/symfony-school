<?php

/* note/index.html.twig */
class __TwigTemplate_1a28f59002e12d53b86d55c422f31f592ee1484a65b649a95dfa939c6b7666d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "note/index.html.twig", 1);
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
        $__internal_21e69cd095d9dc9c1655f9e7fb50a8cf4afdd42956c99e861b3b61e267f6e17b = $this->env->getExtension("native_profiler");
        $__internal_21e69cd095d9dc9c1655f9e7fb50a8cf4afdd42956c99e861b3b61e267f6e17b->enter($__internal_21e69cd095d9dc9c1655f9e7fb50a8cf4afdd42956c99e861b3b61e267f6e17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e69cd095d9dc9c1655f9e7fb50a8cf4afdd42956c99e861b3b61e267f6e17b->leave($__internal_21e69cd095d9dc9c1655f9e7fb50a8cf4afdd42956c99e861b3b61e267f6e17b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc3de9ca00b23bf7edc6cda19f155d9cc4a4bfe93710b566e7cbe268944d27f3 = $this->env->getExtension("native_profiler");
        $__internal_cc3de9ca00b23bf7edc6cda19f155d9cc4a4bfe93710b566e7cbe268944d27f3->enter($__internal_cc3de9ca00b23bf7edc6cda19f155d9cc4a4bfe93710b566e7cbe268944d27f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cc3de9ca00b23bf7edc6cda19f155d9cc4a4bfe93710b566e7cbe268944d27f3->leave($__internal_cc3de9ca00b23bf7edc6cda19f155d9cc4a4bfe93710b566e7cbe268944d27f3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c185bac53248c5c791dd02982e3cb79f391a794c9f03f3fdcbd3521e95a897d4 = $this->env->getExtension("native_profiler");
        $__internal_c185bac53248c5c791dd02982e3cb79f391a794c9f03f3fdcbd3521e95a897d4->enter($__internal_c185bac53248c5c791dd02982e3cb79f391a794c9f03f3fdcbd3521e95a897d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Notes</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Etudiant</th>
                <th>Matiere</th>
                <th>Type</th>
                <th>Semestre</th>
                <th>Note</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "student", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "student", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "matiere", array()), "libelle", array()), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 27
            if (($this->getAttribute($context["note"], "type", array()) == "D")) {
                // line 28
                echo "                  DS
                ";
            } else {
                // line 30
                echo "                  Examen
                ";
            }
            // line 32
            echo "                </td>
                <td>Semestre ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "semestre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "note", array()), "html", null, true);
            echo "</td>
                <td>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_show", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Afficher</a>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_edit", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

            <a class=\"btn btn-primary\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("note_new");
        echo "\">Ajouter une note</a>
";
        
        $__internal_c185bac53248c5c791dd02982e3cb79f391a794c9f03f3fdcbd3521e95a897d4->leave($__internal_c185bac53248c5c791dd02982e3cb79f391a794c9f03f3fdcbd3521e95a897d4_prof);

    }

    public function getTemplateName()
    {
        return "note/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 44,  135 => 41,  125 => 37,  121 => 36,  116 => 34,  112 => 33,  109 => 32,  105 => 30,  101 => 28,  99 => 27,  94 => 25,  88 => 24,  85 => 23,  81 => 22,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
/*     <h1>Notes</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Etudiant</th>*/
/*                 <th>Matiere</th>*/
/*                 <th>Type</th>*/
/*                 <th>Semestre</th>*/
/*                 <th>Note</th>*/
/*                 <th></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for note in notes %}*/
/*             <tr>*/
/*                 <td>{{ note.student.nom }} {{ note.student.prenom }}</td>*/
/*                 <td>{{ note.matiere.libelle }}</td>*/
/*                 <td>*/
/*                 {%if(note.type == 'D')%}*/
/*                   DS*/
/*                 {%else%}*/
/*                   Examen*/
/*                 {%endif%}*/
/*                 </td>*/
/*                 <td>Semestre {{ note.semestre }}</td>*/
/*                 <td>{{ note.note }}</td>*/
/*                 <td>*/
/*                             <a href="{{ path('note_show', { 'id': note.id }) }}" class="btn btn-primary">Afficher</a>*/
/*                             <a href="{{ path('note_edit', { 'id': note.id }) }}" class="btn btn-warning">Modifier</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*             <a class="btn btn-primary" href="{{ path('note_new') }}">Ajouter une note</a>*/
/* {% endblock %}*/
/* */
