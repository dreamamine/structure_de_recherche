<?php

/* :user:edit.html.twig */
class __TwigTemplate_96be3a8b4cbedd110067f700d362d99888b1d4bf706cd79a65ce1c20b130ff87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":user:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1e1d2d64a5d9745f0fe8e641a7c39122dee79ae5ac52e5f8a748aa04547db31 = $this->env->getExtension("native_profiler");
        $__internal_a1e1d2d64a5d9745f0fe8e641a7c39122dee79ae5ac52e5f8a748aa04547db31->enter($__internal_a1e1d2d64a5d9745f0fe8e641a7c39122dee79ae5ac52e5f8a748aa04547db31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e1d2d64a5d9745f0fe8e641a7c39122dee79ae5ac52e5f8a748aa04547db31->leave($__internal_a1e1d2d64a5d9745f0fe8e641a7c39122dee79ae5ac52e5f8a748aa04547db31_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1d72bb5b26f3071aabb23d0e4c5b046eacf258bbbfdc2b9883c1b5969b5aaa1 = $this->env->getExtension("native_profiler");
        $__internal_e1d72bb5b26f3071aabb23d0e4c5b046eacf258bbbfdc2b9883c1b5969b5aaa1->enter($__internal_e1d72bb5b26f3071aabb23d0e4c5b046eacf258bbbfdc2b9883c1b5969b5aaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e1d72bb5b26f3071aabb23d0e4c5b046eacf258bbbfdc2b9883c1b5969b5aaa1->leave($__internal_e1d72bb5b26f3071aabb23d0e4c5b046eacf258bbbfdc2b9883c1b5969b5aaa1_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block content %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
