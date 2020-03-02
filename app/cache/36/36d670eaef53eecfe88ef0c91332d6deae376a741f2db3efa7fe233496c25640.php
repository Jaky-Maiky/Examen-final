<?php

/* users/_aside.twig */
class __TwigTemplate_6fe086d6d89bc3fa6b5dbd5c67cbd9f59e06adb8dc3c6a84a4e0848e86a3fb5a extends Twig_Template
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
        // line 1
        $this->loadTemplate("users/_panel-actions_users.twig", "users/_aside.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"latestactivity\">
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("latestactivity"));
        echo "
</div>

<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\"><!-- intentionally left blank --></div>
";
    }

    public function getTemplateName()
    {
        return "users/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'users/_panel-actions_users.twig' %}

<div id=\"latestactivity\">
    {{ render(path(\"latestactivity\")) }}
</div>

<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\"><!-- intentionally left blank --></div>
", "users/_aside.twig", "/var/www/vendor/bolt/bolt/app/view/twig/users/_aside.twig");
    }
}
