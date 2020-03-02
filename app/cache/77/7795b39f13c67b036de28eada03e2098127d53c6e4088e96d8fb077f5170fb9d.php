<?php

/* editcontent/fields/_filelist.twig */
class __TwigTemplate_3ea74ab99fb9df27e82f50adc350aa0c9aa98990edd9270e3c1b0c84c8cd56a3 extends Twig_Template
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
        $context["option"] = array("extensions" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array()), array())) : (array())), "label" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "upload" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "upload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "upload", array()), "")) : ("")), "can_upload" => $this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "canUpload", array()), "info" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.filelist")) : ("info.upload.filelist")));
        // line 10
        echo "
";
        // line 12
        echo "
";
        // line 13
        $context["attr_fileupload"] = array("accept" => (($this->getAttribute(        // line 14
(isset($context["option"]) ? $context["option"] : null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "extensions", array()), ",."))) : ("")), "data_upload" => twig_jsonencode_filter(array("type" => "FileList", "key" =>         // line 15
(isset($context["key"]) ? $context["key"] : null))), "data_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("upload", array("handler" => $this->getAttribute(        // line 16
(isset($context["option"]) ? $context["option"] : null), "upload", array()))), "id" => ("fileupload-" .         // line 17
(isset($context["key"]) ? $context["key"] : null)), "name" => "files[]", "type" => "file", "multiple" => true);
        // line 22
        echo "
";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
            // line 24
            echo "    ";
            $context["list_json"] = twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"));
        } else {
            // line 26
            echo "    ";
            $context["list_json"] = "";
        }
        // line 28
        echo "
";
        // line 30
        echo "
";
        // line 31
        $context["block"] = $this;
        // line 32
        echo "
";
        // line 41
        echo "
";
        // line 43
        echo "
";
        // line 44
        ob_start();
        // line 45
        echo "    <p>";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("No files in the list, yet.");
        echo "</p>
";
        $context["list_empty"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
";
        // line 48
        ob_start();
        // line 49
        echo "    <div data-id=\"";
        echo "<ID>";
        echo "\" class=\"list-item ui-state-default\">
        <input type=\"text\" value=\"";
        // line 50
        echo "<VAL>";
        echo "\">
        <a href=\"#\" class=\"remove-button\"><i class=\"fa fa-times\"></i></a>
        <span>";
        // line 52
        echo "<FNAME>";
        echo "</span>
    </div>
";
        $context["list_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
";
        // line 56
        ob_start();
        // line 57
        echo "    <div class=\"uploading-list-element\">
        ";
        // line 58
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Uploading");
        echo " ";
        echo "<FNAME>";
        echo "
        <div class=\"progress files-progress progress-striped active\" id=\"progress-";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">
            <div class=\"progress-bar\" style=\"width: ";
        // line 60
        echo "<PROGRESS>";
        echo "\"></div>
        </div>
    </div>
";
        $context["list_item_uploading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        echo "
";
        // line 65
        $context["listdata"] = array("message" => array("remove" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Are you sure you want to remove this file?"), "removeMulti" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Are you sure you want to remove these images?"), "wrongtype" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("There was an error uploading the file.
Make sure that the file type is of:
%typelist%", array("%typelist%" => (($this->getAttribute(        // line 69
(isset($context["option"]) ? $context["option"] : null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "extensions", array()), ", ."))) : ("–"))))), "empty" => twig_trim_filter(        // line 71
(isset($context["list_empty"]) ? $context["list_empty"] : null)), "item" => $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter(        // line 72
(isset($context["list_item"]) ? $context["list_item"] : null)), "/>\\s+</", "><"), "itemUploading" => $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter(        // line 73
(isset($context["list_item_uploading"]) ? $context["list_item_uploading"] : null)), "/>\\s+</", "><"));
        // line 75
        echo "
<fieldset class=\"filelist\">
    <label class=\"col-sm-12 control-label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method"), "html", null, true);
        echo "</label>

    <div class=\"col-sm-12 filelistholder dropzone\" id=\"filelist-";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">

        <div class=\"list\" data-list=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["listdata"]) ? $context["listdata"] : null)), "html", null, true);
        echo "\"></div>

        ";
        // line 83
        $context["can_upload"] = ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "can_upload", array()) && $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "can_upload", array()));
        // line 84
        echo "
        <div class=\"clearfix\">
            ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "upload_buttons", array(0 => "file", 1 => (isset($context["key"]) ? $context["key"] : null), 2 => (isset($context["attr_fileupload"]) ? $context["attr_fileupload"] : null), 3 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "upload", array()), 4 => (isset($context["can_upload"]) ? $context["can_upload"] : null), 5 => true), "method"), "html", null, true);
        echo "

            <span type=\"button\" class=\"btn btn-default remove-selected-button\">
                <i class=\"fa fa-trash\"></i>
                <span>";
        // line 90
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Remove selected");
        echo "</span>
            </span>
        </div>

        <p class=\"uploading-list\"></p>

        <textarea name=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\" class=\"hide\">";
        echo twig_escape_filter($this->env, (isset($context["list_json"]) ? $context["list_json"] : null), "html", null, true);
        echo "</textarea>

    </div>

    ";
        // line 100
        echo $context["block"]->getserverselect((isset($context["key"]) ? $context["key"] : null));
        echo "
</fieldset>
";
    }

    // line 34
    public function getserverselect($__key__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "    <div class=\"modal fade\" id=\"selectModal-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
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
        return "editcontent/fields/_filelist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 35,  195 => 34,  188 => 100,  177 => 96,  168 => 90,  161 => 86,  157 => 84,  155 => 83,  150 => 81,  145 => 79,  140 => 77,  136 => 75,  134 => 73,  133 => 72,  132 => 71,  131 => 69,  128 => 65,  125 => 64,  118 => 60,  114 => 59,  108 => 58,  105 => 57,  103 => 56,  100 => 55,  94 => 52,  89 => 50,  84 => 49,  82 => 48,  79 => 47,  73 => 45,  71 => 44,  68 => 43,  65 => 41,  62 => 32,  60 => 31,  57 => 30,  54 => 28,  50 => 26,  46 => 24,  44 => 23,  41 => 22,  39 => 17,  38 => 16,  37 => 15,  36 => 14,  35 => 13,  32 => 12,  29 => 10,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
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
    extensions:  field.extensions|default([]),
    label:       field.label|default(''),
    upload:      field.upload|default(''),
    can_upload:  field.canUpload,
    info:        field.info|default('info.upload.filelist')
} %}

{#=== INIT ===========================================================================================================#}

{% set attr_fileupload = {
    accept:       option.extensions ? '.' ~ option.extensions|join(',.') : '',
    data_upload:  {type: 'FileList', key: key}|json_encode(),
    data_url:     url('upload', {'handler': option.upload}),
    id:           'fileupload-' ~ key,
    name:         'files[]',
    type:         'file',
    multiple:     true,
} %}

{% if context.content.get(key) is defined %}
    {% set list_json = context.content.get(contentkey)|json_encode() %}
{% else %}
    {% set list_json = '' %}
{% endif %}

{#=== BLOCKS =========================================================================================================#}

{% import _self as block %}

{# Modal \"select from server\" #}
{% macro serverselect(key) %}
    <div class=\"modal fade\" id=\"selectModal-{{ key }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\"></div>
        </div>
    </div>
{% endmacro %}

{#=== FIELDSET =======================================================================================================#}

{% set list_empty %}
    <p>{{ __('No files in the list, yet.') }}</p>
{% endset %}

{% set list_item %}
    <div data-id=\"{{ '<ID>' }}\" class=\"list-item ui-state-default\">
        <input type=\"text\" value=\"{{ '<VAL>' }}\">
        <a href=\"#\" class=\"remove-button\"><i class=\"fa fa-times\"></i></a>
        <span>{{ '<FNAME>' }}</span>
    </div>
{% endset %}

{% set list_item_uploading %}
    <div class=\"uploading-list-element\">
        {{ __('Uploading') }} {{ '<FNAME>' }}
        <div class=\"progress files-progress progress-striped active\" id=\"progress-{{ key }}\">
            <div class=\"progress-bar\" style=\"width: {{ '<PROGRESS>' }}\"></div>
        </div>
    </div>
{% endset %}

{% set listdata = {
    'message': {
        'remove':     __('Are you sure you want to remove this file?'),
        'removeMulti':  __('Are you sure you want to remove these images?'),
        'wrongtype':  __('There was an error uploading the file.\\nMake sure that the file type is of:\\n%typelist%', {'%typelist%': option.extensions ? '.' ~ option.extensions|join(', .') : '–'})
    },
    'empty':          list_empty|trim,
    'item':           list_item|trim|preg_replace('/>\\\\s+</', '><'),
    'itemUploading':     list_item_uploading|trim|preg_replace('/>\\\\s+</', '><'),
} %}

<fieldset class=\"filelist\">
    <label class=\"col-sm-12 control-label\">{{ macro.infopop(labelkey, option.info) }}</label>

    <div class=\"col-sm-12 filelistholder dropzone\" id=\"filelist-{{ key }}\">

        <div class=\"list\" data-list=\"{{ listdata|json_encode }}\"></div>

        {% set can_upload = context.can_upload and option.can_upload %}

        <div class=\"clearfix\">
            {{ macro.upload_buttons('file', key, attr_fileupload, option.upload, can_upload, true) }}

            <span type=\"button\" class=\"btn btn-default remove-selected-button\">
                <i class=\"fa fa-trash\"></i>
                <span>{{ __('Remove selected') }}</span>
            </span>
        </div>

        <p class=\"uploading-list\"></p>

        <textarea name=\"{{ name }}\" id=\"{{ key }}\" class=\"hide\">{{ list_json }}</textarea>

    </div>

    {{ block.serverselect(key) }}
</fieldset>
", "editcontent/fields/_filelist.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/fields/_filelist.twig");
    }
}
