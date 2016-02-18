<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2e81148984545142beb405383dcc895178ca66cfb3d041c19750441bb376f480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d22a1292da72e729edf4812dc9abadef82c3b1e7e1eee9cd563eea5cd7bd65aa = $this->env->getExtension("native_profiler");
        $__internal_d22a1292da72e729edf4812dc9abadef82c3b1e7e1eee9cd563eea5cd7bd65aa->enter($__internal_d22a1292da72e729edf4812dc9abadef82c3b1e7e1eee9cd563eea5cd7bd65aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d22a1292da72e729edf4812dc9abadef82c3b1e7e1eee9cd563eea5cd7bd65aa->leave($__internal_d22a1292da72e729edf4812dc9abadef82c3b1e7e1eee9cd563eea5cd7bd65aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71073ff5fe4926f33395b755432584b3f1752b4306799dabff7ba4631a1276a9 = $this->env->getExtension("native_profiler");
        $__internal_71073ff5fe4926f33395b755432584b3f1752b4306799dabff7ba4631a1276a9->enter($__internal_71073ff5fe4926f33395b755432584b3f1752b4306799dabff7ba4631a1276a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_71073ff5fe4926f33395b755432584b3f1752b4306799dabff7ba4631a1276a9->leave($__internal_71073ff5fe4926f33395b755432584b3f1752b4306799dabff7ba4631a1276a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a29d05a09e66c874a9746feec354f27f3b8ae83d047949246684248532253cf = $this->env->getExtension("native_profiler");
        $__internal_4a29d05a09e66c874a9746feec354f27f3b8ae83d047949246684248532253cf->enter($__internal_4a29d05a09e66c874a9746feec354f27f3b8ae83d047949246684248532253cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a29d05a09e66c874a9746feec354f27f3b8ae83d047949246684248532253cf->leave($__internal_4a29d05a09e66c874a9746feec354f27f3b8ae83d047949246684248532253cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b92ea9a46f8d721ece572359691844035ac41fee23cdfb726a3a8cc371d978c = $this->env->getExtension("native_profiler");
        $__internal_7b92ea9a46f8d721ece572359691844035ac41fee23cdfb726a3a8cc371d978c->enter($__internal_7b92ea9a46f8d721ece572359691844035ac41fee23cdfb726a3a8cc371d978c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7b92ea9a46f8d721ece572359691844035ac41fee23cdfb726a3a8cc371d978c->leave($__internal_7b92ea9a46f8d721ece572359691844035ac41fee23cdfb726a3a8cc371d978c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
