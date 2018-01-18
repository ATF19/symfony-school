<?php

/* note/show.html.twig */
class __TwigTemplate_397b03d23bd0a04e5397b84bfe0aa946a4be6ca1d21d644a5bfa1466cc2d6185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "note/show.html.twig", 1);
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
        $__internal_06cf88e8e3ecd3932395486550da8e63633f7665e47481cb06ade6e789ed3c12 = $this->env->getExtension("native_profiler");
        $__internal_06cf88e8e3ecd3932395486550da8e63633f7665e47481cb06ade6e789ed3c12->enter($__internal_06cf88e8e3ecd3932395486550da8e63633f7665e47481cb06ade6e789ed3c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06cf88e8e3ecd3932395486550da8e63633f7665e47481cb06ade6e789ed3c12->leave($__internal_06cf88e8e3ecd3932395486550da8e63633f7665e47481cb06ade6e789ed3c12_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb8a81d8e99a47266c5e6e0a107588c35b9fe650f50eedb3bb731f9a23911040 = $this->env->getExtension("native_profiler");
        $__internal_eb8a81d8e99a47266c5e6e0a107588c35b9fe650f50eedb3bb731f9a23911040->enter($__internal_eb8a81d8e99a47266c5e6e0a107588c35b9fe650f50eedb3bb731f9a23911040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_eb8a81d8e99a47266c5e6e0a107588c35b9fe650f50eedb3bb731f9a23911040->leave($__internal_eb8a81d8e99a47266c5e6e0a107588c35b9fe650f50eedb3bb731f9a23911040_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_38c6c82eba9316dda30bf318145ee9a94652f90cb3c8427413b79c0485e3e2f3 = $this->env->getExtension("native_profiler");
        $__internal_38c6c82eba9316dda30bf318145ee9a94652f90cb3c8427413b79c0485e3e2f3->enter($__internal_38c6c82eba9316dda30bf318145ee9a94652f90cb3c8427413b79c0485e3e2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Note</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etudiant</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "student", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "student", array()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matiere</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "matiere", array()), "libelle", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Semestre</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "semestre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("note_index");
        echo "\" class=\"btn btn-primary\">Retourner</a><br /><br />
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_edit", array("id" => $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a><br /><br />
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_38c6c82eba9316dda30bf318145ee9a94652f90cb3c8427413b79c0485e3e2f3->leave($__internal_38c6c82eba9316dda30bf318145ee9a94652f90cb3c8427413b79c0485e3e2f3_prof);

    }

    public function getTemplateName()
    {
        return "note/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  126 => 42,  122 => 41,  118 => 40,  110 => 35,  103 => 31,  96 => 27,  89 => 23,  80 => 19,  73 => 15,  65 => 9,  59 => 8,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*     <h1>Note</h1>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ note.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Etudiant</th>*/
/*                 <td>{{ note.student.nom }} {{ note.student.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Matiere</th>*/
/*                 <td>{{ note.matiere.libelle }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ note.type }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Semestre</th>*/
/*                 <td>{{ note.semestre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Note</th>*/
/*                 <td>{{ note.note }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*             <a href="{{ path('note_index') }}" class="btn btn-primary">Retourner</a><br /><br />*/
/*             <a href="{{ path('note_edit', { 'id': note.id }) }}" class="btn btn-warning">Modifier</a><br /><br />*/
/*             {{ form_start(delete_form) }}*/
/*                 <input class="btn btn-danger" type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/* {% endblock %}*/
/* */
