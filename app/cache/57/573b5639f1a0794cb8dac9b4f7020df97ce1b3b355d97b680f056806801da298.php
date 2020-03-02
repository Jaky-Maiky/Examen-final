<?php

/* editcontent/fields/_checkbox.twig */
class __TwigTemplate_9389d7c85bb0d6a2821b47a6bc35d634c531fe3bf28cddfc55e1f27ff862bbda extends Twig_Template
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
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 8
        echo "
";
        // line 10
        echo "
";
        // line 11
        $context["attr_checkbox"] = array("checked" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "class" => $this->getAttribute(        // line 13
(isset($context["option"]) ? $context["option"] : null), "class", array()), "name" =>         // line 14
(isset($context["name"]) ? $context["name"] : null), "id" =>         // line 15
(isset($context["key"]) ? $context["key"] : null), "type" => "checkbox", "value" => 1);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 23
        echo "<fieldset class=\"checkbox\">
    <div class=\"col-sm-12\">
        <label class=\"col-sm-3 control-label\" for=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">
            ";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "
        </label>
        <label class=\"col-sm-9 control-label\">
            <input";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_checkbox"]) ? $context["attr_checkbox"] : null)), "method"), "html", null, true);
        echo ">
        </label>
    </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 29,  53 => 26,  49 => 25,  45 => 23,  42 => 21,  39 => 19,  37 => 15,  36 => 14,  35 => 13,  34 => 12,  33 => 11,  30 => 10,  27 => 8,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
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
    class:  field.class|default(''),
    label:  field.label|default(''),
    info:   field.info|default('')
} %}

{#=== INIT ===========================================================================================================#}

{% set attr_checkbox = {
    checked:  context.content.get(contentkey),
    class:    option.class,
    name:     name,
    id:       key,
    type:     'checkbox',
    value:    1
} %}

{#=== FIELDSET =======================================================================================================#}

{# fieldset.checkbox already used: -> chkbox #}
<fieldset class=\"checkbox\">
    <div class=\"col-sm-12\">
        <label class=\"col-sm-3 control-label\" for=\"{{ key }}\">
            {{ (option.info) ? macro.infopop(labelkey, option.info) : labelkey }}
        </label>
        <label class=\"col-sm-9 control-label\">
            <input{{ macro.attr(attr_checkbox) }}>
        </label>
    </div>
</fieldset>
", "editcontent/fields/_checkbox.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/fields/_checkbox.twig");
    }
}
