<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a0dcfab0d34aa83fb59e70415e1f5755087c8244b671aebe7c2331e4c7df7ddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_853ebd0e2b90ac931c67069e548b1124d68fb4069f8e93bc6e77470e33fb51f5 = $this->env->getExtension("native_profiler");
        $__internal_853ebd0e2b90ac931c67069e548b1124d68fb4069f8e93bc6e77470e33fb51f5->enter($__internal_853ebd0e2b90ac931c67069e548b1124d68fb4069f8e93bc6e77470e33fb51f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853ebd0e2b90ac931c67069e548b1124d68fb4069f8e93bc6e77470e33fb51f5->leave($__internal_853ebd0e2b90ac931c67069e548b1124d68fb4069f8e93bc6e77470e33fb51f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fb30a788a5f77ecbb92b03023ae56e7d0ee9e5e738058ffb6803ada6283b115 = $this->env->getExtension("native_profiler");
        $__internal_7fb30a788a5f77ecbb92b03023ae56e7d0ee9e5e738058ffb6803ada6283b115->enter($__internal_7fb30a788a5f77ecbb92b03023ae56e7d0ee9e5e738058ffb6803ada6283b115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7fb30a788a5f77ecbb92b03023ae56e7d0ee9e5e738058ffb6803ada6283b115->leave($__internal_7fb30a788a5f77ecbb92b03023ae56e7d0ee9e5e738058ffb6803ada6283b115_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
