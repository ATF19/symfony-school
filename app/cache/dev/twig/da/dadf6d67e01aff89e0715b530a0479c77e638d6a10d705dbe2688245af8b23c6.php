<?php

/* MyschoolBundle:Student:list_student.html.twig */
class __TwigTemplate_0e6e42514eaf377bcbc7113c7fdfc003e74363e279d1f9f25ee328407fecfea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Student:list_student.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_f159a16513ecd92493b0699cf811f398736625ed1c9c99addb2c5a697dfd72f7 = $this->env->getExtension("native_profiler");
        $__internal_f159a16513ecd92493b0699cf811f398736625ed1c9c99addb2c5a697dfd72f7->enter($__internal_f159a16513ecd92493b0699cf811f398736625ed1c9c99addb2c5a697dfd72f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:list_student.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f159a16513ecd92493b0699cf811f398736625ed1c9c99addb2c5a697dfd72f7->leave($__internal_f159a16513ecd92493b0699cf811f398736625ed1c9c99addb2c5a697dfd72f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e319d8c81c27548af05f60d9aab16372e073461c512131e77a5d5c2e31417fe5 = $this->env->getExtension("native_profiler");
        $__internal_e319d8c81c27548af05f60d9aab16372e073461c512131e77a5d5c2e31417fe5->enter($__internal_e319d8c81c27548af05f60d9aab16372e073461c512131e77a5d5c2e31417fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ecoleEcoleBundle:Enseignant:listEnseignant";
        
        $__internal_e319d8c81c27548af05f60d9aab16372e073461c512131e77a5d5c2e31417fe5->leave($__internal_e319d8c81c27548af05f60d9aab16372e073461c512131e77a5d5c2e31417fe5_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94ae7334c8a1c2eee01ac06d07a721fcba454b5ae9e43dc0f8011cb90a1670c0 = $this->env->getExtension("native_profiler");
        $__internal_94ae7334c8a1c2eee01ac06d07a721fcba454b5ae9e43dc0f8011cb90a1670c0->enter($__internal_94ae7334c8a1c2eee01ac06d07a721fcba454b5ae9e43dc0f8011cb90a1670c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\">
                           <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_94ae7334c8a1c2eee01ac06d07a721fcba454b5ae9e43dc0f8011cb90a1670c0->leave($__internal_94ae7334c8a1c2eee01ac06d07a721fcba454b5ae9e43dc0f8011cb90a1670c0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_307ca061e58ce3deec905567e885b779e2c112b375ebf972f9d296bdcf1bb19b = $this->env->getExtension("native_profiler");
        $__internal_307ca061e58ce3deec905567e885b779e2c112b375ebf972f9d296bdcf1bb19b->enter($__internal_307ca061e58ce3deec905567e885b779e2c112b375ebf972f9d296bdcf1bb19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<div class=\"container\">
<h1>Etudiants</h1>
<form style=\"margin-bottom: 10px;\" action=\"rechStudent\" method=\"GET\">
  <input class=\"form-control\" type=\"text\" placeholder=\"Recherche par nom\" name=\"nom\" />
</form>
<!-- <form>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Genre</th>
                <th>Date Naissance</th>
                <th>Lieu</th>
                <th>image</th>


            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studs"]) ? $context["studs"] : $this->getContext($context, "studs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "genre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "lieu", array()), "html", null, true);
            echo "</td>
                <td> <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute($context["st"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 75px; height: 75px;\" /></td>
                <td><a class=\"btn btn-success\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_student", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                <td><a class=\"btn btn-danger\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_student", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "<tr><td>Aucun Etudiant n''a été trouvé.</td></tr>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\" class=\"btn btn-primary\">
                Ajouter
            </a>

</form> -->

";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studs"]) ? $context["studs"] : $this->getContext($context, "studs")));
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 57
            echo "<div class=\"col-md-3 text-center\" style=\"margin-bottom: 35px;font-size:18px;padding: 5px;\">
  <div style=\"border: 1px solid rgba(0,0,0,0.1);\">
  <div style=\"margin-bottom:7px;\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nom", array()), "html", null, true);
            echo "</div>
  <div style=\"margin-bottom:7px;\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "prenom", array()), "html", null, true);
            echo "</div>
  <div style=\"margin-bottom:7px;\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "genre", array()), "html", null, true);
            echo "</div>
  <div style=\"margin-bottom:7px;\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["st"], "classe", array()), "libelle", array()), "html", null, true);
            echo "</div>
  <div style=\"margin-bottom:7px;\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</div>
  <div style=\"margin-bottom:7px;\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "lieu", array()), "html", null, true);
            echo "</div>
  <div style=\"margin-bottom:7px;\"> <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute($context["st"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 150px; height: 150px;\" /></div>
  <div style=\"margin-bottom:7px;\"><a class=\"btn btn-success btn-block\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_student", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></div>
  <div><a class=\"btn btn-danger btn-block\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_student", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></div>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "<div>
</div>
    ";
        
        $__internal_307ca061e58ce3deec905567e885b779e2c112b375ebf972f9d296bdcf1bb19b->leave($__internal_307ca061e58ce3deec905567e885b779e2c112b375ebf972f9d296bdcf1bb19b_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Student:list_student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 71,  211 => 67,  207 => 66,  203 => 65,  199 => 64,  195 => 63,  191 => 62,  187 => 61,  183 => 60,  179 => 59,  175 => 57,  171 => 56,  162 => 50,  158 => 48,  150 => 45,  142 => 42,  138 => 41,  134 => 40,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  110 => 34,  107 => 33,  102 => 32,  78 => 10,  72 => 9,  63 => 7,  59 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ecoleEcoleBundle:Enseignant:listEnseignant{% endblock %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
/* */
/* <div class="container">*/
/* <h1>Etudiants</h1>*/
/* <form style="margin-bottom: 10px;" action="rechStudent" method="GET">*/
/*   <input class="form-control" type="text" placeholder="Recherche par nom" name="nom" />*/
/* </form>*/
/* <!-- <form>*/
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prénom</th>*/
/*                 <th>Genre</th>*/
/*                 <th>Date Naissance</th>*/
/*                 <th>Lieu</th>*/
/*                 <th>image</th>*/
/* */
/* */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for st in studs %}*/
/*             <tr>*/
/*                 <td>{{ st.id }}</td>*/
/*                 <td>{{ st.nom }}</td>*/
/*                 <td>{{ st.prenom }}</td>*/
/*                 <td>{{ st.genre }}</td>*/
/*                 <td>{{ st.date|date('d-m-Y') }}</td>*/
/*                 <td>{{ st.lieu }}</td>*/
/*                 <td> <img src="{{ asset('images/'~st.path)}}" alt="" style="width: 75px; height: 75px;" /></td>*/
/*                 <td><a class="btn btn-success" href="{{ path('edit_student', { 'id': st.id }) }}">Modifier</a></td>*/
/*                 <td><a class="btn btn-danger" href="{{ path('remove_student', { 'id': st.id }) }}"><i class="glyphicon glyphicon-trash"></i> Supprimer</a></td>*/
/* </tr>*/
/* {% else %}*/
/* <tr><td>Aucun Etudiant n''a été trouvé.</td></tr>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*             <a href="{{ path('student_new') }}" class="btn btn-primary">*/
/*                 Ajouter*/
/*             </a>*/
/* */
/* </form> -->*/
/* */
/* {% for st in studs %}*/
/* <div class="col-md-3 text-center" style="margin-bottom: 35px;font-size:18px;padding: 5px;">*/
/*   <div style="border: 1px solid rgba(0,0,0,0.1);">*/
/*   <div style="margin-bottom:7px;">{{ st.nom }}</div>*/
/*   <div style="margin-bottom:7px;">{{ st.prenom }}</div>*/
/*   <div style="margin-bottom:7px;">{{ st.genre }}</div>*/
/*   <div style="margin-bottom:7px;">{{ st.classe.libelle }}</div>*/
/*   <div style="margin-bottom:7px;">{{ st.date|date('d-m-Y') }}</div>*/
/*   <div style="margin-bottom:7px;">{{ st.lieu }}</div>*/
/*   <div style="margin-bottom:7px;"> <img src="{{ asset('images/'~st.path)}}" alt="" style="width: 150px; height: 150px;" /></div>*/
/*   <div style="margin-bottom:7px;"><a class="btn btn-success btn-block" href="{{ path('edit_student', { 'id': st.id }) }}">Modifier</a></div>*/
/*   <div><a class="btn btn-danger btn-block" href="{{ path('remove_student', { 'id': st.id }) }}"><i class="glyphicon glyphicon-trash"></i> Supprimer</a></div>*/
/*   </div>*/
/* </div>*/
/* {% endfor %}*/
/* <div>*/
/* </div>*/
/*     {% endblock %}*/
/* */
