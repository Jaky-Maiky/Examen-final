<?php

/* editcontent/fields/_markdown.twig */
class __TwigTemplate_0f6d86532340d3c147e5b8cb29b6f8cdf47e9d1e16b8f0dd87cb4e797b95cd5d extends Twig_Template
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
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "height" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array()), "300px")) : ("300px")), "label" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.markdown")) : ("info.markdown")));
        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        $context["ukkit_conf"] = array("height" => $this->getAttribute(        // line 15
(isset($context["option"]) ? $context["option"] : null), "height", array()), "lblMarkedview" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.markdown.label.markedview"), "lblPreview" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.markdown.label.preview"), "markdown" => true, "markedOptions" => array("breaks" => false), "toolbar" => array(0 => "bold", 1 => "italic", 2 => "link", 3 => "image", 4 => "blockquote", 5 => "listUl", 6 => "listOl"));
        // line 24
        echo "
";
        // line 25
        $context["attr_text"] = array("class" => $this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "class", array()), "data_errortext" => $this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "data_uk_htmleditor" => twig_jsonencode_filter(        // line 28
(isset($context["ukkit_conf"]) ? $context["ukkit_conf"] : null)), "id" =>         // line 29
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 30
(isset($context["name"]) ? $context["name"] : null), "required" => $this->getAttribute(        // line 31
(isset($context["option"]) ? $context["option"] : null), "required", array()), "style" => (($this->getAttribute(        // line 32
(isset($context["option"]) ? $context["option"] : null), "height", array())) ? ((("height: " . $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array())) . " !important;")) : ("")));
        // line 34
        echo "
";
        // line 36
        echo "
<fieldset class=\"markdown\">
    <div class=\"col-sm-12\">
        <label class=\"control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method"), "html", null, true);
        echo "</label>
        <textarea";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_text"]) ? $context["attr_text"] : null)), "method"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_markdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  59 => 39,  54 => 36,  51 => 34,  49 => 32,  48 => 31,  47 => 30,  46 => 29,  45 => 28,  44 => 27,  43 => 26,  42 => 25,  39 => 24,  37 => 15,  36 => 14,  33 => 13,  30 => 11,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
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
    height:    field.height|default('300px'),
    label:     field.label|default(''),
    required:  field.required|default(false),
    errortext: field.error|default(''),
    info:      field.info|default('info.markdown')
} %}

{#=== INIT ===========================================================================================================#}

{% set ukkit_conf = {
    height:         option.height,
    lblMarkedview:  __('field.markdown.label.markedview'),
    lblPreview:     __('field.markdown.label.preview'),
    markdown:       true,
    markedOptions:  {
                        breaks: false,
                    },
    toolbar:        ['bold', 'italic', 'link', 'image', 'blockquote', 'listUl', 'listOl'],
} %}

{% set attr_text = {
    class:               option.class,
    data_errortext:      option.errortext,
    data_uk_htmleditor:  ukkit_conf|json_encode,
    id:                  key,
    name:                name,
    required:            option.required,
    style:               (option.height) ? 'height: ' ~ option.height ~ ' !important;' : '',
} %}

{#=== FIELDSET =======================================================================================================#}

<fieldset class=\"markdown\">
    <div class=\"col-sm-12\">
        <label class=\"control-label\">{{ macro.infopop(labelkey, option.info) }}</label>
        <textarea{{ macro.attr(attr_text) }}>{{ context.content.get(contentkey)|default('') }}</textarea>
    </div>
</fieldset>
", "editcontent/fields/_markdown.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/fields/_markdown.twig");
    }
}
