<?php

/* editcontent/fields/_integer.twig */
class __TwigTemplate_c6e0fdef9aa4ef0c676193d13bc77a5fa8e4f8987970cb7b2f9eed9d754978b6 extends Twig_Template
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
        $context["field_step"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "step", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "step", array()), 1)) : (1));
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
(isset($context["field"]) ? $context["field"] : null), "min", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "min", array()), ("-" . ((int) floor((2147483647 / (isset($context["field_step"]) ? $context["field_step"] : null))) * (isset($context["field_step"]) ? $context["field_step"] : null))))) : (("-" . ((int) floor((2147483647 / (isset($context["field_step"]) ? $context["field_step"] : null))) * (isset($context["field_step"]) ? $context["field_step"] : null))))), "max" => (($this->getAttribute(        // line 13
(isset($context["field"]) ? $context["field"] : null), "max", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "max", array()), "2147483647")) : ("2147483647")), "step" => (($this->getAttribute(        // line 14
(isset($context["field"]) ? $context["field"] : null), "step", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "step", array()), "1")) : ("1")));
        // line 16
        echo "
";
        // line 18
        echo "
";
        // line 19
        $context["attr_number"] = array("class" => ($this->getAttribute(        // line 20
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " narrow"), "name" =>         // line 21
(isset($context["name"]) ? $context["name"] : null), "id" =>         // line 22
(isset($context["key"]) ? $context["key"] : null), "placeholder" => $this->getAttribute(        // line 23
(isset($context["option"]) ? $context["option"] : null), "placeholder", array()), "required" => $this->getAttribute(        // line 24
(isset($context["option"]) ? $context["option"] : null), "required", array()), "readonly" => $this->getAttribute(        // line 25
(isset($context["option"]) ? $context["option"] : null), "readonly", array()), "step" => $this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "step", array()), "min" => max($this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : null), "min", array()), "-2147483647"), "max" => min($this->getAttribute(        // line 28
(isset($context["option"]) ? $context["option"] : null), "max", array()), "2147483647"), "title" => $this->getAttribute(        // line 29
(isset($context["option"]) ? $context["option"] : null), "title", array()), "type" => "number", "value" => (0 + $this->getAttribute($this->getAttribute(        // line 31
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method")), "data_errortext" => $this->getAttribute(        // line 32
(isset($context["option"]) ? $context["option"] : null), "errortext", array()));
        // line 34
        echo "
";
        // line 36
        echo "
<fieldset class=\"integer\">
    <label class=\"col-sm-3 control-label\">";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>
    <div class=\"col-sm-9\">
        <input";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_number"]) ? $context["attr_number"] : null)), "method"), "html", null, true);
        echo ">
    </div>

</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_integer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 40,  61 => 38,  57 => 36,  54 => 34,  52 => 32,  51 => 31,  50 => 29,  49 => 28,  48 => 27,  47 => 26,  46 => 25,  45 => 24,  44 => 23,  43 => 22,  42 => 21,  41 => 20,  40 => 19,  37 => 18,  34 => 16,  32 => 14,  31 => 13,  30 => 12,  29 => 11,  28 => 10,  27 => 9,  26 => 8,  25 => 7,  24 => 6,  23 => 5,  22 => 4,  21 => 3,  19 => 2,);
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
{% set field_step = field.step|default(1) %}
{% set option = {
    class:        field.class|default(''),
    label:        field.label|default(''),
    placeholder:  field.placeholder|default(''),
    required:     field.required|default(false),
    readonly:     field.readonly|default(false),
    title:        field.title|default(''),
    info:         field.info|default(''),
    errortext:    field.error|default(''),
    min:          field.min|default('-' ~ ((2147483647 // field_step) * field_step)),
    max:          field.max|default('2147483647'),
    step:         field.step|default('1'),
} %}

{#=== INIT ===========================================================================================================#}

{% set attr_number = {
    class:          option.class ~ ' narrow',
    name:           name,
    id:             key,
    placeholder:    option.placeholder,
    required:       option.required,
    readonly:       option.readonly,
    step:           option.step,
    min:            max(option.min,'-2147483647'),
    max:            min(option.max,'2147483647'),
    title:          option.title,
    type:           'number',
    value:          0 + context.content.get(contentkey),
    data_errortext: option.errortext,
} %}

{#=== FIELDSET =======================================================================================================#}

<fieldset class=\"integer\">
    <label class=\"col-sm-3 control-label\">{{ (option.info) ? macro.infopop(labelkey, option.info) : labelkey }}</label>
    <div class=\"col-sm-9\">
        <input{{ macro.attr(attr_number) }}>
    </div>

</fieldset>
", "editcontent/fields/_integer.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/fields/_integer.twig");
    }
}
