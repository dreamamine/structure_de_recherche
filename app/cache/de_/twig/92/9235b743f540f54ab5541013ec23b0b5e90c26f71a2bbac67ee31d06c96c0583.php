<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6491a15a8a5c6cbb121530d2ba0e0057f4c2c103e912d103f04bd4dfa6d60e54 extends Twig_Template
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
        $__internal_3eb3707ff0c2b5710a4c4a973510bafd274d0820994c3913929f430c0e6a83b6 = $this->env->getExtension("native_profiler");
        $__internal_3eb3707ff0c2b5710a4c4a973510bafd274d0820994c3913929f430c0e6a83b6->enter($__internal_3eb3707ff0c2b5710a4c4a973510bafd274d0820994c3913929f430c0e6a83b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_3eb3707ff0c2b5710a4c4a973510bafd274d0820994c3913929f430c0e6a83b6->leave($__internal_3eb3707ff0c2b5710a4c4a973510bafd274d0820994c3913929f430c0e6a83b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
