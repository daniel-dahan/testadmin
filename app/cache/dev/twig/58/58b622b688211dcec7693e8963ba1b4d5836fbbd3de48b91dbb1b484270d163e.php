<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_75c98bfca16415c062029864c0e96d67490ea09ab6e41d175fff1cb86570305e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa7d1912f725d9344dcaa653635901e5761bd3c5560cdc54c192c8b0a53d7d07 = $this->env->getExtension("native_profiler");
        $__internal_fa7d1912f725d9344dcaa653635901e5761bd3c5560cdc54c192c8b0a53d7d07->enter($__internal_fa7d1912f725d9344dcaa653635901e5761bd3c5560cdc54c192c8b0a53d7d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa7d1912f725d9344dcaa653635901e5761bd3c5560cdc54c192c8b0a53d7d07->leave($__internal_fa7d1912f725d9344dcaa653635901e5761bd3c5560cdc54c192c8b0a53d7d07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52418e5fa96314601dbe91b40fdcc3f78c9aef26475bc0b88fce3bcc82779c5d = $this->env->getExtension("native_profiler");
        $__internal_52418e5fa96314601dbe91b40fdcc3f78c9aef26475bc0b88fce3bcc82779c5d->enter($__internal_52418e5fa96314601dbe91b40fdcc3f78c9aef26475bc0b88fce3bcc82779c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52418e5fa96314601dbe91b40fdcc3f78c9aef26475bc0b88fce3bcc82779c5d->leave($__internal_52418e5fa96314601dbe91b40fdcc3f78c9aef26475bc0b88fce3bcc82779c5d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd31c1437cc4cfd59c75643d2815196157575cecc08bb103153ba228cf534d49 = $this->env->getExtension("native_profiler");
        $__internal_fd31c1437cc4cfd59c75643d2815196157575cecc08bb103153ba228cf534d49->enter($__internal_fd31c1437cc4cfd59c75643d2815196157575cecc08bb103153ba228cf534d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd31c1437cc4cfd59c75643d2815196157575cecc08bb103153ba228cf534d49->leave($__internal_fd31c1437cc4cfd59c75643d2815196157575cecc08bb103153ba228cf534d49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc0cca99736713a0f8d516ea6a229249135eec7a442539272c7eccde5140469c = $this->env->getExtension("native_profiler");
        $__internal_fc0cca99736713a0f8d516ea6a229249135eec7a442539272c7eccde5140469c->enter($__internal_fc0cca99736713a0f8d516ea6a229249135eec7a442539272c7eccde5140469c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc0cca99736713a0f8d516ea6a229249135eec7a442539272c7eccde5140469c->leave($__internal_fc0cca99736713a0f8d516ea6a229249135eec7a442539272c7eccde5140469c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
