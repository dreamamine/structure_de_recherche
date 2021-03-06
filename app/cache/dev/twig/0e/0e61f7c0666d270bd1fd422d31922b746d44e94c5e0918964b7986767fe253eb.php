<?php

/* researchteam/index.html.twig */
class __TwigTemplate_e876254105801893dabf82c404b909909e751c10684e51e9f71675a5fa1aabfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "researchteam/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9a5e483a4020d689e47be46bc0d47778ddd09c935459cf0a5c1beb419273552 = $this->env->getExtension("native_profiler");
        $__internal_e9a5e483a4020d689e47be46bc0d47778ddd09c935459cf0a5c1beb419273552->enter($__internal_e9a5e483a4020d689e47be46bc0d47778ddd09c935459cf0a5c1beb419273552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "researchteam/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a5e483a4020d689e47be46bc0d47778ddd09c935459cf0a5c1beb419273552->leave($__internal_e9a5e483a4020d689e47be46bc0d47778ddd09c935459cf0a5c1beb419273552_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c396a7e3c040d629549d42652cb728b0cc185d8566bbbeda0ebefd9177afcf8 = $this->env->getExtension("native_profiler");
        $__internal_6c396a7e3c040d629549d42652cb728b0cc185d8566bbbeda0ebefd9177afcf8->enter($__internal_6c396a7e3c040d629549d42652cb728b0cc185d8566bbbeda0ebefd9177afcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ResearchTeam list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Productionindex</th>
                <th>Created</th>
                <th>Updated</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["researchTeams"]) ? $context["researchTeams"] : $this->getContext($context, "researchTeams")));
        foreach ($context['_seq'] as $context["_key"] => $context["researchTeam"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("researchteam_show", array("id" => $this->getAttribute($context["researchTeam"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["researchTeam"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["researchTeam"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["researchTeam"], "productionIndex", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["researchTeam"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["researchTeam"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["researchTeam"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["researchTeam"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
              
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("researchteam_show", array("id" => $this->getAttribute($context["researchTeam"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("researchteam_edit", array("id" => $this->getAttribute($context["researchTeam"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['researchTeam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("researchteam_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_6c396a7e3c040d629549d42652cb728b0cc185d8566bbbeda0ebefd9177afcf8->leave($__internal_6c396a7e3c040d629549d42652cb728b0cc185d8566bbbeda0ebefd9177afcf8_prof);

    }

    public function getTemplateName()
    {
        return "researchteam/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  112 => 39,  100 => 33,  94 => 30,  84 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>ResearchTeam list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Productionindex</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*                */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for researchTeam in researchTeams %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('researchteam_show', { 'id': researchTeam.id }) }}">{{ researchTeam.id }}</a></td>*/
/*                 <td>{{ researchTeam.name }}</td>*/
/*                 <td>{{ researchTeam.productionIndex }}</td>*/
/*                 <td>{% if researchTeam.created %}{{ researchTeam.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if researchTeam.updated %}{{ researchTeam.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*               */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('researchteam_show', { 'id': researchTeam.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('researchteam_edit', { 'id': researchTeam.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('researchteam_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
