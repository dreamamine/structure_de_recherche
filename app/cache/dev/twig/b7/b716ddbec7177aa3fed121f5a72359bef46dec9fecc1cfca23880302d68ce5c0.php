<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b6765b62a603cf93099223863498f434b8e90814d8a3864cc682b25d5cf89e8c extends Twig_Template
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
        $__internal_9de4d7f3994de376d0a3cdf25c8193fb16a7ec075150ba0fc0b0892fc669fa8e = $this->env->getExtension("native_profiler");
        $__internal_9de4d7f3994de376d0a3cdf25c8193fb16a7ec075150ba0fc0b0892fc669fa8e->enter($__internal_9de4d7f3994de376d0a3cdf25c8193fb16a7ec075150ba0fc0b0892fc669fa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9de4d7f3994de376d0a3cdf25c8193fb16a7ec075150ba0fc0b0892fc669fa8e->leave($__internal_9de4d7f3994de376d0a3cdf25c8193fb16a7ec075150ba0fc0b0892fc669fa8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
