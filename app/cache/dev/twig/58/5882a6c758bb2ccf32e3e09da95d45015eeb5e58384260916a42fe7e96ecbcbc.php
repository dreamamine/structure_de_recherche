<?php

/* :etablissement:new.html.twig */
class __TwigTemplate_1f9ee8afd278eccdd7ca20820f75c646cf926ce3d1fd19c5af9de3ba4001e29f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":etablissement:new.html.twig", 1);
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
        $__internal_d2e23e816176c60917cd9be9e448f56a0e045845cbb829000330c59bea2498fe = $this->env->getExtension("native_profiler");
        $__internal_d2e23e816176c60917cd9be9e448f56a0e045845cbb829000330c59bea2498fe->enter($__internal_d2e23e816176c60917cd9be9e448f56a0e045845cbb829000330c59bea2498fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":etablissement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2e23e816176c60917cd9be9e448f56a0e045845cbb829000330c59bea2498fe->leave($__internal_d2e23e816176c60917cd9be9e448f56a0e045845cbb829000330c59bea2498fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5fa8abe7459406c1151ef87c66bb592b7aa04f2e9eaddd5a781f3b61df50b6b = $this->env->getExtension("native_profiler");
        $__internal_b5fa8abe7459406c1151ef87c66bb592b7aa04f2e9eaddd5a781f3b61df50b6b->enter($__internal_b5fa8abe7459406c1151ef87c66bb592b7aa04f2e9eaddd5a781f3b61df50b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etablissement creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("etablissement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b5fa8abe7459406c1151ef87c66bb592b7aa04f2e9eaddd5a781f3b61df50b6b->leave($__internal_b5fa8abe7459406c1151ef87c66bb592b7aa04f2e9eaddd5a781f3b61df50b6b_prof);

    }

    public function getTemplateName()
    {
        return ":etablissement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>Etablissement creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('etablissement_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
