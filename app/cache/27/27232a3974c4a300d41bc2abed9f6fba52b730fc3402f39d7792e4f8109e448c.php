<?php

/* editcontent/fields/_float.twig */
class __TwigTemplate_635e4875731a9515fa258365993172f57a85c307647a62d7e66e04d512543c8c extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["option"] = array("class" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "label" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "placeholder" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "readonly" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "readonly", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), false)) : (false)), "title" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "errortext" => (($this->getAttribute(        // line 11
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "min" => (($this->getAttribute(        // line 12
(isset($context["field"]) ? $context["field"] : null), "min", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "min", array()), "")) : ("")), "max" => (($this->getAttribute(        // line 13
(isset($context["field"]) ? $context["field"] : null), "max", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "max", array()), "")) : ("")), "step" => (($this->getAttribute(        // line 14
(isset($context["field"]) ? $context["field"] : null), "step", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "step", array()), "0.00000001")) : ("0.00000001")));
        // line 16
        echo "
";
        // line 18
        echo "
";
        // line 19
        $context["validation"] = array("float" => null);
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("validation.float", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Has to be a floating point number!")), "html", null, true);
        echo "

";
        // line 22
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "required", array())) {
            // line 23
            echo "    ";
            $context["validation"] = twig_array_merge((isset($context["validation"]) ? $context["validation"] : null), array("required" => true));
            // line 24
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("validation.required", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Is required!")), "html", null, true);
            echo "
";
        }
        // line 26
        echo "
";
        // line 27
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "min", array())) {
            // line 28
            echo "    ";
            $context["validation"] = twig_array_merge((isset($context["validation"]) ? $context["validation"] : null), array("min" => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "min", array())));
            // line 29
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("validation.min", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("The value has to be at least “%MINVAL%”!")), "html", null, true);
            echo "
";
        }
        // line 31
        echo "
";
        // line 32
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "max", array())) {
            // line 33
            echo "    ";
            $context["validation"] = twig_array_merge((isset($context["validation"]) ? $context["validation"] : null), array("max" => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "max", array())));
            // line 34
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("validation.max", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("The value must not be greater than “%MAXVAL%”!")), "html", null, true);
            echo "
";
        }
        // line 36
        echo "
";
        // line 37
        $context["attr_number"] = array("class" => ($this->getAttribute(        // line 38
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " narrow"), "name" =>         // line 39
(isset($context["name"]) ? $context["name"] : null), "id" =>         // line 40
(isset($context["key"]) ? $context["key"] : null), "placeholder" => $this->getAttribute(        // line 41
(isset($context["option"]) ? $context["option"] : null), "placeholder", array()), "readonly" => $this->getAttribute(        // line 42
(isset($context["option"]) ? $context["option"] : null), "readonly", array()), "title" => $this->getAttribute(        // line 43
(isset($context["option"]) ? $context["option"] : null), "title", array()), "type" => "text", "value" => (0 + $this->getAttribute($this->getAttribute(        // line 45
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method")), "data_errortext" => $this->getAttribute(        // line 46
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "data_validate" => twig_jsonencode_filter(        // line 47
(isset($context["validation"]) ? $context["validation"] : null)));
        // line 49
        echo "
";
        // line 51
        echo "
<fieldset class=\"float\">

    <label for=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\" class=\"col-sm-3 control-label\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>
    <div class=\"col-sm-9\">
        <input";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_number"]) ? $context["attr_number"] : null)), "method"), "html", null, true);
        echo ">
    </div>

</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_float.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 56,  109 => 54,  104 => 51,  101 => 49,  99 => 47,  98 => 46,  97 => 45,  96 => 43,  95 => 42,  94 => 41,  93 => 40,  92 => 39,  91 => 38,  90 => 37,  87 => 36,  81 => 34,  78 => 33,  76 => 32,  73 => 31,  67 => 29,  64 => 28,  62 => 27,  59 => 26,  53 => 24,  50 => 23,  48 => 22,  43 => 20,  41 => 19,  38 => 18,  35 => 16,  33 => 14,  32 => 13,  31 => 12,  30 => 11,  29 => 10,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
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
    class:        field.class|default(''),
    label:        field.label|default(''),
    placeholder:  field.placeholder|default(''),
    required:     field.required|default(false),
    readonly:     field.readonly|default(false),
    title:        field.title|default(''),
    info:         field.info|default(''),
    errortext:    field.error|default(''),
    min:          field.min|default(''),
    max:          field.max|default(''),
    step:         field.step|default('0.00000001'),
} %}

{#=== INIT ===========================================================================================================#}

{% set validation = {float: null} %}
{{ data('validation.float', __('Has to be a floating point number!')) }}

{% if option.required %}
    {% set validation = validation|merge({required: true}) %}
    {{ data('validation.required', __('Is required!')) }}
{% endif %}

{% if option.min %}
    {% set validation = validation|merge({min: option.min}) %}
    {{ data('validation.min', __('The value has to be at least “%MINVAL%”!')) }}
{% endif %}

{% if option.max %}
    {% set validation = validation|merge({max: option.max}) %}
    {{ data('validation.max', __('The value must not be greater than “%MAXVAL%”!')) }}
{% endif %}

{% set attr_number = {
    class:          option.class ~ ' narrow',
    name:           name,
    id:             key,
    placeholder:    option.placeholder,
    readonly:       option.readonly,
    title:          option.title,
    type:           'text',
    value:          0 + context.content.get(contentkey),
    data_errortext: option.errortext,
    data_validate:  validation|json_encode,
} %}

{#=== FIELDSET =======================================================================================================#}

<fieldset class=\"float\">

    <label for=\"{{ key }}\" class=\"col-sm-3 control-label\">{{ (option.info) ? macro.infopop(labelkey, option.info) : labelkey }}</label>
    <div class=\"col-sm-9\">
        <input{{ macro.attr(attr_number) }}>
    </div>

</fieldset>
", "editcontent/fields/_float.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/fields/_float.twig");
    }
}
