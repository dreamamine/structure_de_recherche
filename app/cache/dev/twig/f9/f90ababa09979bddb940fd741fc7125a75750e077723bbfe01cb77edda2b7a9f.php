<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_1a1d8bb108a5b223867d5f09f37b00c9be4f8adc09aaaedb4c8f69107c86fad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58178c4526f9df26c98ec5371227f9e3cd8deae14dd9adb3cfbe5811bb9bf6f0 = $this->env->getExtension("native_profiler");
        $__internal_58178c4526f9df26c98ec5371227f9e3cd8deae14dd9adb3cfbe5811bb9bf6f0->enter($__internal_58178c4526f9df26c98ec5371227f9e3cd8deae14dd9adb3cfbe5811bb9bf6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_58178c4526f9df26c98ec5371227f9e3cd8deae14dd9adb3cfbe5811bb9bf6f0->leave($__internal_58178c4526f9df26c98ec5371227f9e3cd8deae14dd9adb3cfbe5811bb9bf6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
