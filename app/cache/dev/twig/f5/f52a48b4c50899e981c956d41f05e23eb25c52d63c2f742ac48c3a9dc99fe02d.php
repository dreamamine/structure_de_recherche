<?php

/* :these:edit.html.twig */
class __TwigTemplate_4204e88a15f1facdb6361ba8fe3d136afd51d57bc624fda4a7d4936e8f7469c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":these:edit.html.twig", 1);
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
        $__internal_ecb3fd4719585b4aeb1da1c0602ae858bd9c4d4ee841c9930da183b15ee4949c = $this->env->getExtension("native_profiler");
        $__internal_ecb3fd4719585b4aeb1da1c0602ae858bd9c4d4ee841c9930da183b15ee4949c->enter($__internal_ecb3fd4719585b4aeb1da1c0602ae858bd9c4d4ee841c9930da183b15ee4949c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":these:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb3fd4719585b4aeb1da1c0602ae858bd9c4d4ee841c9930da183b15ee4949c->leave($__internal_ecb3fd4719585b4aeb1da1c0602ae858bd9c4d4ee841c9930da183b15ee4949c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbdf3b8604cbdfb5fabcfafc33ec9a2bc00ea982a06b879dd0aae8a9db0ce7ca = $this->env->getExtension("native_profiler");
        $__internal_cbdf3b8604cbdfb5fabcfafc33ec9a2bc00ea982a06b879dd0aae8a9db0ce7ca->enter($__internal_cbdf3b8604cbdfb5fabcfafc33ec9a2bc00ea982a06b879dd0aae8a9db0ce7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>These edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("these_index");
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
        
        $__internal_cbdf3b8604cbdfb5fabcfafc33ec9a2bc00ea982a06b879dd0aae8a9db0ce7ca->leave($__internal_cbdf3b8604cbdfb5fabcfafc33ec9a2bc00ea982a06b879dd0aae8a9db0ce7ca_prof);

    }

    public function getTemplateName()
    {
        return ":these:edit.html.twig";
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
/* {% block body %}*/
/*     <h1>These edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('these_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
