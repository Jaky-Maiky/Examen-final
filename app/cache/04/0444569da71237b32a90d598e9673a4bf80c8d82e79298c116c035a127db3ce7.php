<?php

/* editcontent/fields/_file.twig */
class __TwigTemplate_ab730f43f506ee2cee6f310c3c46e315fffcb3f34d0c00a99488965dcb87d13b extends Twig_Template
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
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "extensions" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array()), array())) : (array())), "upload" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "upload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "upload", array()), "")) : ("")), "can_upload" => $this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "canUpload", array()), "info" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.file")) : ("info.upload.file")));
        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        $context["attr_filepath"] = array("class" => ($this->getAttribute(        // line 15
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " imageinput"), "id" => ("field-" .         // line 16
(isset($context["key"]) ? $context["key"] : null)), "name" =>         // line 17
(isset($context["name"]) ? $context["name"] : null), "type" => "text", "placeholder" => ((($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.allowed-filetypes") . " ") . twig_join_filter($this->getAttribute(        // line 19
(isset($context["option"]) ? $context["option"] : null), "extensions", array()), ", ")) . " …"), "value" => $this->getAttribute($this->getAttribute(        // line 20
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"));
        // line 22
        echo "
";
        // line 23
        $context["attr_upload"] = array("accept" => (($this->getAttribute(        // line 24
(isset($context["option"]) ? $context["option"] : null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "extensions", array()), ",."))) : ("")), "data_upload" => twig_jsonencode_filter(array("type" => "File", "key" =>         // line 25
(isset($context["key"]) ? $context["key"] : null))), "data_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("upload", array("handler" => $this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "upload", array()))), "id" => ("fileupload-" .         // line 27
(isset($context["key"]) ? $context["key"] : null)), "name" => "files[]", "type" => "file");
        // line 31
        echo "
";
        // line 33
        echo "
";
        // line 34
        $context["block"] = $this;
        // line 35
        echo "
";
        // line 41
        echo "
";
        // line 50
        echo "
";
        // line 52
        echo "
<fieldset class=\"file\">
    <label class=\"col-sm-12 control-label\">";
        // line 54
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>

    <div class=\"col-sm-12 dropzone clearfix\" id=\"dropzone-";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">
        <input";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_filepath"]) ? $context["attr_filepath"] : null)), "method"), "html", null, true);
        echo ">
        ";
        // line 58
        $context["can_upload"] = ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "can_upload", array()) && $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "can_upload", array()));
        // line 59
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "upload_buttons", array(0 => "file", 1 => (isset($context["key"]) ? $context["key"] : null), 2 => (isset($context["attr_upload"]) ? $context["attr_upload"] : null), 3 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "upload", array()), 4 => (isset($context["can_upload"]) ? $context["can_upload"] : null), 5 => false), "method"), "html", null, true);
        echo "
        ";
        // line 60
        echo $context["block"]->getprogress((isset($context["key"]) ? $context["key"] : null));
        echo "
        ";
        // line 61
        echo $context["block"]->getserverselect((isset($context["key"]) ? $context["key"] : null), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Cancel"));
        echo "

        ";
        // line 63
        if ( !$this->env->getExtension('Bolt\Twig\TwigExtension')->isMobileClient()) {
            // line 64
            echo "            <div style=\"clear: left;\" class=\"hidden-xs\">
                <small>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "info.upload.filesmall", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "</small>
            </div>
        ";
        }
        // line 68
        echo "    </div>

</fieldset>
";
    }

    // line 36
    public function getprogress($__key__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 37
            echo "    <div class=\"progress file-progress progress-striped active\" id=\"progress-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
        <div class=\"progress-bar\" style=\"width: 0%;\"></div>
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

    // line 43
    public function getserverselect($__key__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 44
            echo "    <div class=\"modal fade\" id=\"selectModal-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\"></div>
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
        return "editcontent/fields/_file.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 44,  152 => 43,  132 => 37,  120 => 36,  113 => 68,  107 => 65,  104 => 64,  102 => 63,  97 => 61,  93 => 60,  88 => 59,  86 => 58,  82 => 57,  78 => 56,  73 => 54,  69 => 52,  66 => 50,  63 => 41,  60 => 35,  58 => 34,  55 => 33,  52 => 31,  50 => 27,  49 => 26,  48 => 25,  47 => 24,  46 => 23,  43 => 22,  41 => 20,  40 => 19,  39 => 17,  38 => 16,  37 => 15,  36 => 14,  33 => 13,  30 => 11,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
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
    class:       field.class|default(''),
    label:       field.label|default(''),
    extensions:  field.extensions|default([]),
    upload:      field.upload|default(''),
    can_upload:  field.canUpload,
    info:        field.info|default('info.upload.file')
} %}

{#=== INIT ===========================================================================================================#}

{% set attr_filepath = {
    class:       option.class ~ ' imageinput',
    id:          'field-' ~ key,
    name:        name,
    type:        'text',
    placeholder: __('field.general.allowed-filetypes') ~ ' ' ~ option.extensions|join(', ') ~ ' …',
    value:       context.content.get(contentkey),
} %}

{% set attr_upload = {
    accept:       option.extensions ? '.' ~ option.extensions|join(',.') : '',
    data_upload:  {type: 'File', key: key}|json_encode(),
    data_url:     url('upload', {'handler': option.upload}),
    id:           'fileupload-' ~ key,
    name:         'files[]',
    type:         'file',
} %}

{#=== BLOCKS =========================================================================================================#}

{% import _self as block %}

{% macro progress(key) %}
    <div class=\"progress file-progress progress-striped active\" id=\"progress-{{ key }}\">
        <div class=\"progress-bar\" style=\"width: 0%;\"></div>
    </div>
{% endmacro %}

{# Modal \"select from server\" #}
{% macro serverselect(key) %}
    <div class=\"modal fade\" id=\"selectModal-{{ key }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\"></div>
        </div>
    </div>
{% endmacro %}

{#=== FIELDSET =======================================================================================================#}

<fieldset class=\"file\">
    <label class=\"col-sm-12 control-label\">{{ (option.info) ? macro.infopop(labelkey, option.info) : labelkey }}</label>

    <div class=\"col-sm-12 dropzone clearfix\" id=\"dropzone-{{ key }}\">
        <input{{ macro.attr(attr_filepath) }}>
        {% set can_upload = context.can_upload and option.can_upload %}
        {{ macro.upload_buttons('file', key, attr_upload, option.upload, can_upload, false) }}
        {{ block.progress(key) }}
        {{ block.serverselect(key, __('Cancel')) }}

        {% if not ismobileclient() %}
            <div style=\"clear: left;\" class=\"hidden-xs\">
                <small>{{ app.translator.trans('info.upload.filesmall', {}, 'infos') }}</small>
            </div>
        {% endif %}
    </div>

</fieldset>
", "editcontent/fields/_file.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/fields/_file.twig");
    }
}
