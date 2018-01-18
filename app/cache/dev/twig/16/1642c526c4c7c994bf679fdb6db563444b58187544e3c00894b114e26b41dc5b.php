<?php

/* ::base.html.twig */
class __TwigTemplate_51f921f013bba5b642511f3d77f71e83b9b9033fbbbf99ff586ba15dc26f18d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0955bfe5d6dafcf8c750831ae965b3cb6f8628fef27af3df6bfbf9fec0fb28c = $this->env->getExtension("native_profiler");
        $__internal_f0955bfe5d6dafcf8c750831ae965b3cb6f8628fef27af3df6bfbf9fec0fb28c->enter($__internal_f0955bfe5d6dafcf8c750831ae965b3cb6f8628fef27af3df6bfbf9fec0fb28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <nav class=\"navbar navbar-inverse\" style=\"background-color:#2c3e50;\">
        <div class=\"container\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"http://localhost:8000/listStudent\">Eleves</a></li>
            <li><a href=\"http://localhost:8000/listenseignant\">Enseignants</a></li>
            <li><a href=\"http://localhost:8000/listClasse\">Classes</a></li>
            <li><a href=\"http://localhost:8000/listSpecialite\">Specialites</a></li>
            <li><a href=\"http://localhost:8000/matiere\">Matieres</a></li>
            <li><a href=\"http://localhost:8000/coefficient\">Coefficients</a></li>
            <li><a href=\"http://localhost:8000/note\">Notes</a></li>

            ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method") == null)) {
            // line 22
            echo "              <li><a href=\"http://localhost:8000/user\">Connecter</a></li>
    \t\t\t\t";
        } else {
            // line 24
            echo "              <li><a href=\"http://localhost:8000/user/logout\">Deconnecter</a></li>
    \t\t\t\t";
        }
        // line 26
        echo "            <li>
                <div class=\"form-inline\" style=\"padding-top: 10px\">
                  <select id=\"select\">
                    <option value=\"etudiant\">Etudiant</option>
                    <option value=\"enseignant\">Enseignant</option>
                  </select>
                  <input  type=\"text\" id=\"nom\" name=\"nom\" placeholder=\"recherche\" />
                  <button class=\"btn btn-primary\" style=\"padding: 5px\" onclick=\"recherche()\">Rechercher</button>
                </div>
            </li>
          </ul>
        </div>
      </nav>
        <div class=\"container\">
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "        <script>
          function recherche() {
            if(document.getElementById(\"select\").value == \"etudiant\")
              window.location = \"http://localhost:8000/rechStudent?nom=\"+document.getElementById(\"nom\").value;
            else
              window.location = \"http://localhost:8000/rechEnseignant?nom=\"+document.getElementById(\"nom\").value;
          }
        </script>
      </div>
    </body>
</html>
";
        
        $__internal_f0955bfe5d6dafcf8c750831ae965b3cb6f8628fef27af3df6bfbf9fec0fb28c->leave($__internal_f0955bfe5d6dafcf8c750831ae965b3cb6f8628fef27af3df6bfbf9fec0fb28c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e74df63226c493faeb602653cf2378d936adcad33381735001478c81129f770 = $this->env->getExtension("native_profiler");
        $__internal_5e74df63226c493faeb602653cf2378d936adcad33381735001478c81129f770->enter($__internal_5e74df63226c493faeb602653cf2378d936adcad33381735001478c81129f770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5e74df63226c493faeb602653cf2378d936adcad33381735001478c81129f770->leave($__internal_5e74df63226c493faeb602653cf2378d936adcad33381735001478c81129f770_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc38a131ee3dfcdbbdebe893a7515c9c0a7a8969c9824fa414f79d013721c1f1 = $this->env->getExtension("native_profiler");
        $__internal_dc38a131ee3dfcdbbdebe893a7515c9c0a7a8969c9824fa414f79d013721c1f1->enter($__internal_dc38a131ee3dfcdbbdebe893a7515c9c0a7a8969c9824fa414f79d013721c1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc38a131ee3dfcdbbdebe893a7515c9c0a7a8969c9824fa414f79d013721c1f1->leave($__internal_dc38a131ee3dfcdbbdebe893a7515c9c0a7a8969c9824fa414f79d013721c1f1_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_2da3a378739bac11e3bc866f7af6ff764d3d2ae977c280e86054c4ca6d0c74c3 = $this->env->getExtension("native_profiler");
        $__internal_2da3a378739bac11e3bc866f7af6ff764d3d2ae977c280e86054c4ca6d0c74c3->enter($__internal_2da3a378739bac11e3bc866f7af6ff764d3d2ae977c280e86054c4ca6d0c74c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2da3a378739bac11e3bc866f7af6ff764d3d2ae977c280e86054c4ca6d0c74c3->leave($__internal_2da3a378739bac11e3bc866f7af6ff764d3d2ae977c280e86054c4ca6d0c74c3_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86656e3403e68fa9131cda5b4f976ad2e474784043e333b54893f78bc6bb2bdc = $this->env->getExtension("native_profiler");
        $__internal_86656e3403e68fa9131cda5b4f976ad2e474784043e333b54893f78bc6bb2bdc->enter($__internal_86656e3403e68fa9131cda5b4f976ad2e474784043e333b54893f78bc6bb2bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_86656e3403e68fa9131cda5b4f976ad2e474784043e333b54893f78bc6bb2bdc->leave($__internal_86656e3403e68fa9131cda5b4f976ad2e474784043e333b54893f78bc6bb2bdc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  128 => 40,  117 => 6,  105 => 5,  87 => 42,  84 => 41,  82 => 40,  66 => 26,  62 => 24,  58 => 22,  56 => 21,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*       <nav class="navbar navbar-inverse" style="background-color:#2c3e50;">*/
/*         <div class="container">*/
/*           <ul class="nav navbar-nav">*/
/*             <li><a href="http://localhost:8000/listStudent">Eleves</a></li>*/
/*             <li><a href="http://localhost:8000/listenseignant">Enseignants</a></li>*/
/*             <li><a href="http://localhost:8000/listClasse">Classes</a></li>*/
/*             <li><a href="http://localhost:8000/listSpecialite">Specialites</a></li>*/
/*             <li><a href="http://localhost:8000/matiere">Matieres</a></li>*/
/*             <li><a href="http://localhost:8000/coefficient">Coefficients</a></li>*/
/*             <li><a href="http://localhost:8000/note">Notes</a></li>*/
/* */
/*             {% if app.session.get('login') == NULL%}*/
/*               <li><a href="http://localhost:8000/user">Connecter</a></li>*/
/*     				{% else %}*/
/*               <li><a href="http://localhost:8000/user/logout">Deconnecter</a></li>*/
/*     				{% endif %}*/
/*             <li>*/
/*                 <div class="form-inline" style="padding-top: 10px">*/
/*                   <select id="select">*/
/*                     <option value="etudiant">Etudiant</option>*/
/*                     <option value="enseignant">Enseignant</option>*/
/*                   </select>*/
/*                   <input  type="text" id="nom" name="nom" placeholder="recherche" />*/
/*                   <button class="btn btn-primary" style="padding: 5px" onclick="recherche()">Rechercher</button>*/
/*                 </div>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </nav>*/
/*         <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script>*/
/*           function recherche() {*/
/*             if(document.getElementById("select").value == "etudiant")*/
/*               window.location = "http://localhost:8000/rechStudent?nom="+document.getElementById("nom").value;*/
/*             else*/
/*               window.location = "http://localhost:8000/rechEnseignant?nom="+document.getElementById("nom").value;*/
/*           }*/
/*         </script>*/
/*       </div>*/
/*     </body>*/
/* </html>*/
/* */
