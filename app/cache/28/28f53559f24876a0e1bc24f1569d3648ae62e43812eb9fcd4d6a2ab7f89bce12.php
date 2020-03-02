<?php

/* _base/_fieldset.twig */
class __TwigTemplate_089e89d1edb1c52c6f9ee4445b17ae12167e9d6415b23c1d7baddd03f33f09e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fieldset' => array($this, 'block_fieldset'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["ftype"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->first(twig_get_array_keys_filter((isset($context["fieldset"]) ? $context["fieldset"] : null)));
        // line 2
        $context["fconf"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->first((isset($context["fieldset"]) ? $context["fieldset"] : null));
        // line 3
        echo "
<fieldset data-bolt-field=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["ftype"]) ? $context["ftype"] : null), "html", null, true);
        echo "\" data-bolt-fconf=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["fconf"]) ? $context["fconf"] : null)), "html", null, true);
        echo "\">
";
        // line 5
        $this->displayBlock('fieldset', $context, $blocks);
        // line 6
        echo "</fieldset>
";
    }

    // line 5
    public function block_fieldset($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_base/_fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 6,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set ftype = fieldset|keys|first %}
{% set fconf = fieldset|first %}

<fieldset data-bolt-field=\"{{ ftype }}\" data-bolt-fconf=\"{{ fconf|json_encode }}\">
{% block fieldset %}{% endblock fieldset %}
</fieldset>
", "_base/_fieldset.twig", "/var/www/vendor/bolt/bolt/app/view/twig/_base/_fieldset.twig");
    }
}
