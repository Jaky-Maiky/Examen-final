<?php

/* dashboard/_aside.twig */
class __TwigTemplate_74c9aff5a2adfd12cf92028e96d5494a1699d7bdfabc2b9eb479e61417a2f235 extends Twig_Template
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
        $context["panels"] = $this->loadTemplate("_macro/_panels.twig", "dashboard/_aside.twig", 1);
        // line 2
        echo "
";
        // line 4
        echo "<noscript>
    <section>
        <h2>";
        // line 6
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("generic.noscript.headline");
        echo "</h2>
        <p>";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("generic.noscript.message");
        echo "</p>
    </section>
</noscript>

";
        // line 12
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "bolt_released", array()) == false)) {
            // line 13
            echo "<div class=\"panel panel-default panel-news\">
    <div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\">
        <b><i class=\"fa fa-fw fa-bullhorn\"></i> Warning: Development version </b>
    </div>
    <div class=\"panel-body\">
        <p>This is a development version of Bolt, so it might contain bugs and unfinished features. Use at your own risk! For 'production' websites, we advise you to stick with the official stable releases.</p>
    </div>
</div>
";
        }
        // line 22
        echo "
";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardnews"));
        echo "

";
        // line 27
        echo $context["panels"]->getstack(7, true);
        echo "

";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->widget("dashboard", "right_first"), "html", null, true);
        echo "

";
        // line 33
        echo "<div id=\"latestactivity\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("latestactivity"));
        echo "
</div>

";
        // line 38
        echo "<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\">
    <!-- intentionally left blank -->
</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 38,  73 => 34,  70 => 33,  65 => 30,  60 => 27,  55 => 24,  52 => 22,  41 => 13,  39 => 12,  32 => 7,  28 => 6,  24 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '_macro/_panels.twig' as panels %}

{# No Javascript #}
<noscript>
    <section>
        <h2>{{ __('generic.noscript.headline') }}</h2>
        <p>{{ __('generic.noscript.message') }}</p>
    </section>
</noscript>

{# If we're running a development version, show annoying message. #}
{% if app.bolt_released == false %}
<div class=\"panel panel-default panel-news\">
    <div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\">
        <b><i class=\"fa fa-fw fa-bullhorn\"></i> Warning: Development version </b>
    </div>
    <div class=\"panel-body\">
        <p>This is a development version of Bolt, so it might contain bugs and unfinished features. Use at your own risk! For 'production' websites, we advise you to stick with the official stable releases.</p>
    </div>
</div>
{% endif %}

{# News #}
{{ render(path('dashboardnews')) }}

{# Stack #}
{{ panels.stack(7, true) }}

{# Dashboard Widget #}
{{ widget('dashboard', 'right_first') }}

{# Latest Activity #}
<div id=\"latestactivity\">
    {{ render(path('latestactivity')) }}
</div>

{# ? #}
<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\">
    <!-- intentionally left blank -->
</div>
", "dashboard/_aside.twig", "/var/www/vendor/bolt/bolt/app/view/twig/dashboard/_aside.twig");
    }
}
