<?php

/* SfWebAppFrontOfficeBundle::layout.html.twig */
class __TwigTemplate_34a59612c1c621ec1b61c59be9616c4036ddc624e53bd0263cd8004f539d1407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SfWebAppFrontOfficeBundle::front-office.html.twig", "SfWebAppFrontOfficeBundle::layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SfWebAppFrontOfficeBundle::front-office.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f70fff0077a71137ad463daa0e07846887ccb27b88e2c80feadfb35b58789b9 = $this->env->getExtension("native_profiler");
        $__internal_4f70fff0077a71137ad463daa0e07846887ccb27b88e2c80feadfb35b58789b9->enter($__internal_4f70fff0077a71137ad463daa0e07846887ccb27b88e2c80feadfb35b58789b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SfWebAppFrontOfficeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f70fff0077a71137ad463daa0e07846887ccb27b88e2c80feadfb35b58789b9->leave($__internal_4f70fff0077a71137ad463daa0e07846887ccb27b88e2c80feadfb35b58789b9_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d6452a26648d6376faba060c5dd71590340eb10159f334ac76108e0c972b0064 = $this->env->getExtension("native_profiler");
        $__internal_d6452a26648d6376faba060c5dd71590340eb10159f334ac76108e0c972b0064->enter($__internal_d6452a26648d6376faba060c5dd71590340eb10159f334ac76108e0c972b0064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "
    <nav class=\"navbar navbar-default main-nav\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "                    <ul class=\"nav navbar-nav\">

                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("my_account"), "html", null, true);
            echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("logout"), "html", null, true);
            echo "</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                ";
        } else {
            // line 40
            echo "                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sf_web_app"), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                ";
        }
        // line 46
        echo "            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>

";
        
        $__internal_d6452a26648d6376faba060c5dd71590340eb10159f334ac76108e0c972b0064->leave($__internal_d6452a26648d6376faba060c5dd71590340eb10159f334ac76108e0c972b0064_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_4fd8347e6421256b5309c3410ba8fbf9ab5320dd1166d82c66b9e3af92195d71 = $this->env->getExtension("native_profiler");
        $__internal_4fd8347e6421256b5309c3410ba8fbf9ab5320dd1166d82c66b9e3af92195d71->enter($__internal_4fd8347e6421256b5309c3410ba8fbf9ab5320dd1166d82c66b9e3af92195d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4fd8347e6421256b5309c3410ba8fbf9ab5320dd1166d82c66b9e3af92195d71->leave($__internal_4fd8347e6421256b5309c3410ba8fbf9ab5320dd1166d82c66b9e3af92195d71_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7dbf70ba13b49e2a476728ff7dd0e82925c7da03926ffe0742fe944ed6a5a6a7 = $this->env->getExtension("native_profiler");
        $__internal_7dbf70ba13b49e2a476728ff7dd0e82925c7da03926ffe0742fe944ed6a5a6a7->enter($__internal_7dbf70ba13b49e2a476728ff7dd0e82925c7da03926ffe0742fe944ed6a5a6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7dbf70ba13b49e2a476728ff7dd0e82925c7da03926ffe0742fe944ed6a5a6a7->leave($__internal_7dbf70ba13b49e2a476728ff7dd0e82925c7da03926ffe0742fe944ed6a5a6a7_prof);

    }

    public function getTemplateName()
    {
        return "SfWebAppFrontOfficeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  121 => 53,  109 => 46,  102 => 42,  98 => 40,  86 => 33,  78 => 30,  70 => 27,  63 => 22,  61 => 21,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'SfWebAppFrontOfficeBundle::front-office.html.twig' %}*/
/* */
/* {% block header %}*/
/* */
/*     <nav class="navbar navbar-default main-nav">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/* */
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/* */
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                     <ul class="nav navbar-nav">*/
/* */
/*                     </ul>*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class="dropdown">*/
/*                             <a class="dropdown-toggle" href="" data-toggle="dropdown">{{ app.user.firstname }} {{ app.user.lastname }} <b class="caret"></b></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li>*/
/*                                     <a href="{{ path('fos_user_profile_show') }}">{{ 'my_account'|trans }}</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('fos_user_security_logout') }}">{{ 'logout'|trans }}</a>*/
/*                                 </li>*/
/* */
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 {% else %}*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li>*/
/*                             <a href="">{{ 'sf_web_app'|trans }}</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </div><!-- /.navbar-collapse -->*/
/* */
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}{% endblock %}*/
/* */
/* {% block footer %}{% endblock %}*/
