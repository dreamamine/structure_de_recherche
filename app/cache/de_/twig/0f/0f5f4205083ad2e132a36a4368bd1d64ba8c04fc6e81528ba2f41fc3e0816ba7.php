<?php

/* :soutenance:index.html.twig */
class __TwigTemplate_2aa9535531d762d890d8a911c10fb5929e94ebbecf6677542278e9eddd567f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":soutenance:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_628ff3272a76683d58ee2713c9ec70212c398970609cc103ca390dce2e60290e = $this->env->getExtension("native_profiler");
        $__internal_628ff3272a76683d58ee2713c9ec70212c398970609cc103ca390dce2e60290e->enter($__internal_628ff3272a76683d58ee2713c9ec70212c398970609cc103ca390dce2e60290e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":soutenance:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628ff3272a76683d58ee2713c9ec70212c398970609cc103ca390dce2e60290e->leave($__internal_628ff3272a76683d58ee2713c9ec70212c398970609cc103ca390dce2e60290e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97d0a1fb92966e3b4370c1e5b08edaa13256cff8d0d1b9e40e1fb186107acda2 = $this->env->getExtension("native_profiler");
        $__internal_97d0a1fb92966e3b4370c1e5b08edaa13256cff8d0d1b9e40e1fb186107acda2->enter($__internal_97d0a1fb92966e3b4370c1e5b08edaa13256cff8d0d1b9e40e1fb186107acda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Soutenance list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datesout</th>
                <th>Mention</th>
                <th>Jury</th>
                <th>Created</th>
                <th>Updated</th>
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["soutenances"]) ? $context["soutenances"] : $this->getContext($context, "soutenances")));
        foreach ($context['_seq'] as $context["_key"] => $context["soutenance"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soutenance_show", array("id" => $this->getAttribute($context["soutenance"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["soutenance"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            if ($this->getAttribute($context["soutenance"], "dateSout", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["soutenance"], "dateSout", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["soutenance"], "mention", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["soutenance"], "jury", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["soutenance"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["soutenance"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["soutenance"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["soutenance"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soutenance_show", array("id" => $this->getAttribute($context["soutenance"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soutenance_edit", array("id" => $this->getAttribute($context["soutenance"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['soutenance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("soutenance_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_97d0a1fb92966e3b4370c1e5b08edaa13256cff8d0d1b9e40e1fb186107acda2->leave($__internal_97d0a1fb92966e3b4370c1e5b08edaa13256cff8d0d1b9e40e1fb186107acda2_prof);

    }

    public function getTemplateName()
    {
        return ":soutenance:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  119 => 41,  107 => 35,  101 => 32,  91 => 27,  85 => 26,  81 => 25,  77 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Soutenance list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Datesout</th>*/
/*                 <th>Mention</th>*/
/*                 <th>Jury</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*                 */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for soutenance in soutenances %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('soutenance_show', { 'id': soutenance.id }) }}">{{ soutenance.id }}</a></td>*/
/*                 <td>{% if soutenance.dateSout %}{{ soutenance.dateSout|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ soutenance.mention }}</td>*/
/*                 <td>{{ soutenance.jury }}</td>*/
/*                 <td>{% if soutenance.created %}{{ soutenance.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if soutenance.updated %}{{ soutenance.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('soutenance_show', { 'id': soutenance.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('soutenance_edit', { 'id': soutenance.id }) }}">edit</a>*/
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
/*             <a href="{{ path('soutenance_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
