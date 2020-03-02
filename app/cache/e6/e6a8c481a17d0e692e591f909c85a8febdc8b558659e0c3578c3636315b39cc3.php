<?php

/* editcontent/fields/_date.twig */
class __TwigTemplate_78d760eea5f6be404cb72b635bbcb15f4aba4d74ffe4ac1aaf00a39c998205f3 extends Twig_Template
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
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "variant" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "variant", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant", array()), "")) : ("")), "label" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "options" => (($this->getAttribute($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "datepicker", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "datepicker", array()), "")) : ("")), "default" => (((($this->getAttribute($this->getAttribute(        // line 9
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()) == null) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "Y-m-d")) : (null)), "required" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 11
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")));
        // line 13
        echo "
";
        // line 15
        echo "
";
        // line 16
        $context["attr_date"] = array("id" =>         // line 17
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 18
(isset($context["name"]) ? $context["name"] : null), "has_time" => false, "value" => ((($this->getAttribute($this->getAttribute(        // line 20
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method") != null)) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "Y-m-d")) : ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "default", array()))), "required" => $this->getAttribute(        // line 21
(isset($context["option"]) ? $context["option"] : null), "required", array()), "class" => $this->getAttribute(        // line 22
(isset($context["option"]) ? $context["option"] : null), "class", array()), "errortext" => $this->getAttribute(        // line 23
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "options" => $this->getAttribute(        // line 24
(isset($context["option"]) ? $context["option"] : null), "options", array()));
        // line 26
        echo "
";
        // line 28
        echo "
<fieldset class=\"date\">
    ";
        // line 30
        if (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "variant", array()) == "inline")) {
            // line 31
            echo "
        <label class=\"col-sm-3 control-label\">";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
            echo "</label>
        <div class=\"col-sm-9\">
            ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input_datetime", array(0 => (isset($context["attr_date"]) ? $context["attr_date"] : null)), "method"), "html", null, true);
            echo "
        </div>

    ";
        } else {
            // line 38
            echo "
        <div class=\"col-sm-12\">
            <label class=\"control-label\">";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
            echo "</label>
            ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input_datetime", array(0 => (isset($context["attr_date"]) ? $context["attr_date"] : null)), "method"), "html", null, true);
            echo "
        </div>

    ";
        }
        // line 45
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_date.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 45,  79 => 41,  75 => 40,  71 => 38,  64 => 34,  59 => 32,  56 => 31,  54 => 30,  50 => 28,  47 => 26,  45 => 24,  44 => 23,  43 => 22,  42 => 21,  41 => 20,  40 => 18,  39 => 17,  38 => 16,  35 => 15,  32 => 13,  30 => 11,  29 => 10,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
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
    class:     field.class|default(''),
    variant:   field.variant|default(''),
    label:     field.label|default(''),
    info:      field.info|default(''),
    options:   field.options.datepicker|default(''),
    default:   (context.content.id == null and field.default) ? context.content.get(contentkey)|date('Y-m-d') : null,
    required:  field.required|default(false),
    errortext: field.error|default(''),
} %}

{#=== INIT ===========================================================================================================#}

{% set attr_date = {
    id:         key,
    name:       name,
    has_time:   false,
    value:      (context.content.get(contentkey) != null) ? context.content.get(contentkey)|date('Y-m-d') : option.default,
    required:   option.required,
    class:      option.class,
    errortext:  option.errortext,
    options:    option.options,
} %}

{#=== FIELDSET =======================================================================================================#}

<fieldset class=\"date\">
    {% if option.variant == 'inline' %}

        <label class=\"col-sm-3 control-label\">{{ (option.info) ? macro.infopop(labelkey, option.info) : labelkey }}</label>
        <div class=\"col-sm-9\">
            {{ macro.input_datetime(attr_date) }}
        </div>

    {% else %}

        <div class=\"col-sm-12\">
            <label class=\"control-label\">{{ (option.info) ? macro.infopop(labelkey, option.info) : labelkey }}</label>
            {{ macro.input_datetime(attr_date) }}
        </div>

    {% endif %}
</fieldset>
", "editcontent/fields/_date.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/fields/_date.twig");
    }
}
