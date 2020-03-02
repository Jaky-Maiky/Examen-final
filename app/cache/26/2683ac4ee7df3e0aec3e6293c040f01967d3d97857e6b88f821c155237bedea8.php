<?php

/* editcontent/fields/_geolocation.twig */
class __TwigTemplate_24509e58fc808d7464686780efc09cf82c46a320ea744e7afac918a7eee422ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 89
        $this->parent = $this->loadTemplate("_base/_fieldset.twig", "editcontent/fields/_geolocation.twig", 89);
        $this->blocks = array(
            'fieldset' => array($this, 'block_fieldset'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["option"] = array("label" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.geolocation")) : ("info.geolocation")));
        // line 10
        $context["geolocation"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method");
        // line 14
        $context["attributes"] = array("address" => array("class" => "form-control address", "name" => (        // line 17
(isset($context["name"]) ? $context["name"] : null) . "[address]"), "placeholder" => ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.geolocation.placeholder.address") . " …"), "type" => "text"), "latitude" => array("class" => "form-control latitude", "name" => (        // line 23
(isset($context["name"]) ? $context["name"] : null) . "[latitude]"), "readonly" => true, "step" => "any", "type" => "number"), "longitude" => array("class" => "form-control longitude", "name" => (        // line 30
(isset($context["name"]) ? $context["name"] : null) . "[longitude]"), "readonly" => true, "type" => "number", "step" => "any"), "formatted" => array("class" => "matched", "name" => (        // line 37
(isset($context["name"]) ? $context["name"] : null) . "[formatted_address]"), "readonly" => true, "type" => "text", "placeholder" => "—"), "snap" => array("checked" => true, "class" => "snap", "name" => (        // line 45
(isset($context["name"]) ? $context["name"] : null) . "[snap]"), "type" => "checkbox"));
        // line 90
        $context["__internal_06e4a7bdbe9f1e67905a85d3cbdbb897f2d7ca80db743e7e203c4654152a1d1a"] = $this;
        // line 93
        $context["fieldset"] = array("geolocation" => array("key" =>         // line 95
(isset($context["key"]) ? $context["key"] : null), "latitude" => (($this->getAttribute(        // line 96
(isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array()), 52.08184)) : (52.08184)), "longitude" => (($this->getAttribute(        // line 97
(isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array()), 4.292368)) : (4.292368))));
        // line 89
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 101
    public function block_fieldset($context, array $blocks = array())
    {
        // line 102
        echo "    <label class=\"control-label col-xs-12\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method"), "html", null, true);
        echo "</label>
    <div class=\"field-container col-xs-12\">
        <div class=\"field-slot row\">
            ";
        // line 105
        echo $context["__internal_06e4a7bdbe9f1e67905a85d3cbdbb897f2d7ca80db743e7e203c4654152a1d1a"]->getslot((isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["key"]) ? $context["key"] : null), (isset($context["geolocation"]) ? $context["geolocation"] : null));
        echo "
        </div>
    </div>
";
    }

    // line 50
    public function getslot($__attributes__ = null, $__key__ = null, $__geolocation__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "key" => $__key__,
            "geolocation" => $__geolocation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 51
            echo "    ";
            $context["__internal_38a269d2c28fce8f317f08978497ddc797fdb7e3793cf84e1b3d53dae8b03cbe"] = $this->loadTemplate("_macro/_macro.twig", "editcontent/fields/_geolocation.twig", 51);
            // line 52
            echo "
    <div class=\"col-sm-8\">
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label>";
            // line 56
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.geolocation.label.address-lookup");
            echo "</label>
                <input";
            // line 57
            echo $context["__internal_38a269d2c28fce8f317f08978497ddc797fdb7e3793cf84e1b3d53dae8b03cbe"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "address", array()));
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "address", array()), "")) : ("")), "html", null, true);
            echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-xs-6\">
                <label>";
            // line 62
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.geolocation.label.latitude");
            echo "</label>
                <input";
            // line 63
            echo $context["__internal_38a269d2c28fce8f317f08978497ddc797fdb7e3793cf84e1b3d53dae8b03cbe"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "latitude", array()));
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array()), "")) : ("")), "html", null, true);
            echo "\">
            </div>
            <div class=\"col-xs-6\">
                <label>";
            // line 66
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.geolocation.label.longitude");
            echo "</label>
                <input ";
            // line 67
            echo $context["__internal_38a269d2c28fce8f317f08978497ddc797fdb7e3793cf84e1b3d53dae8b03cbe"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "longitude", array()));
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array()), "")) : ("")), "html", null, true);
            echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label>";
            // line 72
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.geolocation.matched-address");
            echo "</label>
                <input";
            // line 73
            echo $context["__internal_38a269d2c28fce8f317f08978497ddc797fdb7e3793cf84e1b3d53dae8b03cbe"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "formatted", array()));
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address", array()), "")) : ("")), "html", null, true);
            echo "\">
            </div>
        </div>
    </div>

    <div class=\"col-sm-4\">
        <label>";
            // line 79
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.geolocation.label.marker-placement");
            echo "</label>
        <div class=\"mapholder\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>
        <div class=\"checkbox\">
            <label><input";
            // line 82
            echo $context["__internal_38a269d2c28fce8f317f08978497ddc797fdb7e3793cf84e1b3d53dae8b03cbe"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "snap", array()));
            echo ">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.geolocation.label.snap");
            echo "</label>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_geolocation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 82,  145 => 79,  134 => 73,  130 => 72,  120 => 67,  116 => 66,  108 => 63,  104 => 62,  94 => 57,  90 => 56,  84 => 52,  81 => 51,  67 => 50,  59 => 105,  52 => 102,  49 => 101,  45 => 89,  43 => 97,  42 => 96,  41 => 95,  40 => 93,  38 => 90,  36 => 45,  35 => 37,  34 => 30,  33 => 23,  32 => 17,  31 => 14,  29 => 10,  27 => 5,  26 => 4,  25 => 3,  11 => 89,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#=== OPTIONS ========================================================================================================#}

{% set option = {
    label:  field.label|default(''),
    info:   field.info|default('info.geolocation')
} %}

{#=== INIT ===========================================================================================================#}

{% set geolocation = context.content.get(contentkey) %}

{#=== SLOT ===========================================================================================================#}

{% set attributes = {
    address: {
        class:       'form-control address',
        name:        name ~ '[address]',
        placeholder: __('field.geolocation.placeholder.address') ~ ' …',
        type:        'text',
    },
    latitude: {
        class:       'form-control latitude',
        name:        name ~ '[latitude]',
        readonly:    true,
        step:        'any',
        type:        'number',
    },
    longitude: {
        class:       'form-control longitude',
        name:        name ~ '[longitude]',
        readonly:    true,
        type:        'number',
        step:        'any',
    },
    formatted: {
        class:      'matched',
        name:        name ~ '[formatted_address]',
        readonly:    true,
        type:        'text',
        placeholder: '—',
    },
    snap: {
        checked:     true,
        class:       'snap',
        name:        name ~ '[snap]',
        type:        'checkbox',
    }
} %}

{% macro slot(attributes, key, geolocation) %}
    {% from '_macro/_macro.twig' import attr %}

    <div class=\"col-sm-8\">
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label>{{ __('field.geolocation.label.address-lookup') }}</label>
                <input{{ attr(attributes.address) }} value=\"{{ geolocation.address|default('') }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-xs-6\">
                <label>{{ __('field.geolocation.label.latitude') }}</label>
                <input{{ attr(attributes.latitude) }} value=\"{{ geolocation.latitude|default('') }}\">
            </div>
            <div class=\"col-xs-6\">
                <label>{{ __('field.geolocation.label.longitude') }}</label>
                <input {{ attr(attributes.longitude) }} value=\"{{ geolocation.longitude|default('') }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label>{{ __('field.geolocation.matched-address') }}</label>
                <input{{ attr(attributes.formatted) }} value=\"{{ geolocation.formatted_address|default('') }}\">
            </div>
        </div>
    </div>

    <div class=\"col-sm-4\">
        <label>{{ __('field.geolocation.label.marker-placement') }}</label>
        <div class=\"mapholder\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>
        <div class=\"checkbox\">
            <label><input{{ attr(attributes.snap) }}>{{ __('field.geolocation.label.snap') }}</label>
        </div>
    </div>
{% endmacro %}

{#=== FIELDSET =======================================================================================================#}

{% extends '_base/_fieldset.twig' %}
{% from _self import slot %}

{# Default location is Two Kings, for now. #}
{% set fieldset = {
    geolocation: {
        key: key,
        latitude: geolocation.latitude|default(52.08184),
        longitude: geolocation.longitude|default(4.292368),
    }
}%}

{% block fieldset %}
    <label class=\"control-label col-xs-12\">{{ macro.infopop(labelkey, option.info) }}</label>
    <div class=\"field-container col-xs-12\">
        <div class=\"field-slot row\">
            {{ slot(attributes, key, geolocation) }}
        </div>
    </div>
{% endblock fieldset %}
", "editcontent/fields/_geolocation.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/fields/_geolocation.twig");
    }
}
