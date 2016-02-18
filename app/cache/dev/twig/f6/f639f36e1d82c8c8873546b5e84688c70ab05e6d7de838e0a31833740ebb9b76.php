<?php

/* SfWebAppFrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_f9a3f670c06207e4deb2a23671bbffade2f7de4c788dae78c0814bef78446f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::layout.html.twig", "SfWebAppFrontOfficeBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppFrontOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a55bd0ffc6d5fcdba58db393b18b64661f36aa6ca88bd89a5a12159360cb251a = $this->env->getExtension("native_profiler");
        $__internal_a55bd0ffc6d5fcdba58db393b18b64661f36aa6ca88bd89a5a12159360cb251a->enter($__internal_a55bd0ffc6d5fcdba58db393b18b64661f36aa6ca88bd89a5a12159360cb251a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55bd0ffc6d5fcdba58db393b18b64661f36aa6ca88bd89a5a12159360cb251a->leave($__internal_a55bd0ffc6d5fcdba58db393b18b64661f36aa6ca88bd89a5a12159360cb251a_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c98532f35e59bb058be21a07bedc3a8c0848f6c691d01927f8232a51b47ae23 = $this->env->getExtension("native_profiler");
        $__internal_5c98532f35e59bb058be21a07bedc3a8c0848f6c691d01927f8232a51b47ae23->enter($__internal_5c98532f35e59bb058be21a07bedc3a8c0848f6c691d01927f8232a51b47ae23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dashboard"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"panel-body\">

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5c98532f35e59bb058be21a07bedc3a8c0848f6c691d01927f8232a51b47ae23->leave($__internal_5c98532f35e59bb058be21a07bedc3a8c0848f6c691d01927f8232a51b47ae23_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'SfWebAppFrontOfficeBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     <h2 class="panel-title">{{ 'dashboard'|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
