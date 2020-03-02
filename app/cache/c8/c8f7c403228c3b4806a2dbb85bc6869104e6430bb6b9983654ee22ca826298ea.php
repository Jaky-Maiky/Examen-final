<?php

/* editcontent/fields/_select.twig */
class __TwigTemplate_635d566bb7e91ef2c0df188b62e17eef150abf5956f835ae7a8ee7452fb3c2ce extends Twig_Template
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
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "multiple" => ($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "multiple", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())), "values" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "values", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values", array()), array())) : (array())), "info" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)));
        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        if (twig_test_iterable($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array()))) {
            // line 15
            echo "    ";
            $context["values"] = $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array());
        } else {
            // line 17
            echo "    ";
            $context["lookuptype"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->first(twig_split_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array()), "/"));
            // line 18
            echo "    ";
            $context["lookupfield"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->last(twig_split_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array()), "/"));
            // line 19
            echo "    ";
            if (twig_in_filter(",", (isset($context["lookupfield"]) ? $context["lookupfield"] : null))) {
                // line 20
                echo "        ";
                $context["lookupfield"] = twig_split_filter($this->env, (isset($context["lookupfield"]) ? $context["lookupfield"] : null), ",");
                // line 21
                echo "    ";
            }
            // line 22
            echo "    ";
            $context["sortingorder"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sort", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->first((isset($context["lookupfield"]) ? $context["lookupfield"] : null)))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->first((isset($context["lookupfield"]) ? $context["lookupfield"] : null))));
            // line 23
            echo "    ";
            $context["querylimit"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "limit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "limit", array()), 500)) : (500));
            // line 24
            echo "    ";
            $context["wherefilter"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array()), array())) : (array()));
            // line 25
            echo "    ";
            $template_storage = new Bolt\Storage($context['app']);
            $context['lookups'] =             $template_storage->getContent((isset($context["lookuptype"]) ? $context["lookuptype"] : null), array("order" => (isset($context["sortingorder"]) ? $context["sortingorder"] : null), "hydrate" => false, "limit" => (isset($context["querylimit"]) ? $context["querylimit"] : null)), $pager, (isset($context["wherefilter"]) ? $context["wherefilter"] : null) );
            // line 26
            echo "    ";
            $context["values"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->selectField((isset($context["lookups"]) ? $context["lookups"] : null), (isset($context["lookupfield"]) ? $context["lookupfield"] : null), $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "multiple", array()), (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "keys", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "keys", array()), "id")) : ("id")));
        }
        // line 28
        echo "
";
        // line 30
        $context["selection"] = (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), null)) : (null));
        // line 31
        if ( !twig_test_iterable((isset($context["selection"]) ? $context["selection"] : null))) {
            // line 32
            echo "    ";
            $context["selection"] = array(0 => (isset($context["selection"]) ? $context["selection"] : null));
        }
        // line 34
        echo "
";
        // line 36
        if (twig_in_filter($this->env->getExtension('Bolt\Twig\TwigExtension')->first((isset($context["selection"]) ? $context["selection"] : null)), twig_get_array_keys_filter((isset($context["values"]) ? $context["values"] : null)))) {
            // line 37
            echo "    ";
            $context["onlyids"] = true;
        } else {
            // line 39
            echo "    ";
            $context["onlyids"] = false;
        }
        // line 41
        echo "
";
        // line 42
        $context["attr_select"] = array("class" => $this->getAttribute(        // line 43
(isset($context["option"]) ? $context["option"] : null), "class", array()), "id" =>         // line 44
(isset($context["key"]) ? $context["key"] : null), "multiple" => $this->getAttribute(        // line 45
(isset($context["option"]) ? $context["option"] : null), "multiple", array()), "required" => $this->getAttribute(        // line 46
(isset($context["option"]) ? $context["option"] : null), "required", array()), "name" => (($this->getAttribute(        // line 47
(isset($context["option"]) ? $context["option"] : null), "multiple", array())) ? (((isset($context["name"]) ? $context["name"] : null) . "[]")) : ((isset($context["name"]) ? $context["name"] : null))));
        // line 49
        echo "
";
        // line 51
        if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), false)) : (false))) {
            // line 52
            echo "    ";
            $context["attr_select"] = twig_array_merge((isset($context["attr_select"]) ? $context["attr_select"] : null), array("class" => ""));
            // line 53
            echo "    ";
            $context["attr_select"] = twig_array_merge((isset($context["attr_select"]) ? $context["attr_select"] : null), array("style" => "width: 100%;"));
        }
        // line 55
        echo "
";
        // line 57
        echo "
<fieldset class=\"multiselect\">

    <label class=\"col-sm-3 control-label\">";
        // line 60
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>
    <div class=\"col-sm-9\">
        <select";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_select"]) ? $context["attr_select"] : null)), "method"), "html", null, true);
        echo ">
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["value"]) {
            // line 64
            echo "
                ";
            // line 65
            $context["is_array"] = (twig_test_iterable($context["value"]) && (twig_length_filter($this->env, $context["value"]) > 1));
            // line 66
            echo "                ";
            $context["attr_opt"] = array("value" =>             // line 67
$context["id"], "selected" => (twig_in_filter(            // line 68
$context["id"], (isset($context["selection"]) ? $context["selection"] : null)) || ( !(isset($context["onlyids"]) ? $context["onlyids"] : null) && twig_in_filter((((isset($context["is_array"]) ? $context["is_array"] : null)) ? ($this->getAttribute($context["value"], 0, array(), "array")) : ($context["value"])), (isset($context["selection"]) ? $context["selection"] : null)))));
            // line 70
            echo "
                <option";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (((isset($context["is_array"]) ? $context["is_array"] : null)) ? (twig_join_filter(twig_slice($this->env, $context["value"], 0, null), " / ")) : ($context["value"])), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </select>

        ";
        // line 75
        if (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "multiple", array()) &&  !(($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), false)) : (false)))) {
            // line 76
            echo "        <div>";
            // line 77
            echo "            <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo " option').prop('selected', true); return false;\">
                <i class=\"fa fa-fw fa-check-square-o\"></i>";
            // line 78
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Select all");
            echo "
            </a>
            <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo " option').prop('selected', false); return false;\">
                <i class=\"fa fa-fw fa-square-o\"></i>";
            // line 81
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Select none");
            echo "
            </a>
        </div>
        ";
        }
        // line 85
        echo "    </div>

    ";
        // line 87
        if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), false)) : (false))) {
            // line 88
            echo "    <script>
        \$(function() {
            \$('#";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "').select2({
                placeholder: \"";
            // line 91
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(none)");
            echo "\",
                allowClear: true
            });
        });
    </script>
    ";
        }
        // line 97
        echo "
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 97,  207 => 91,  203 => 90,  199 => 88,  197 => 87,  193 => 85,  186 => 81,  182 => 80,  177 => 78,  172 => 77,  170 => 76,  168 => 75,  164 => 73,  154 => 71,  151 => 70,  149 => 68,  148 => 67,  146 => 66,  144 => 65,  141 => 64,  137 => 63,  133 => 62,  128 => 60,  123 => 57,  120 => 55,  116 => 53,  113 => 52,  111 => 51,  108 => 49,  106 => 47,  105 => 46,  104 => 45,  103 => 44,  102 => 43,  101 => 42,  98 => 41,  94 => 39,  90 => 37,  88 => 36,  85 => 34,  81 => 32,  79 => 31,  77 => 30,  74 => 28,  70 => 26,  66 => 25,  63 => 24,  60 => 23,  57 => 22,  54 => 21,  51 => 20,  48 => 19,  45 => 18,  42 => 17,  38 => 15,  36 => 14,  33 => 13,  30 => 11,  28 => 9,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
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
    label:     field.label|default(''),
    multiple:  (field.multiple is defined and field.multiple),
    values:    field.values|default([]),
    info:      field.info|default(''),
    required:  field.required|default(false)
} %}

{#=== INIT ===========================================================================================================#}

{% if option.values is iterable %}
    {% set values = option.values %}
{% else %}
    {% set lookuptype = option.values|split('/')|first %}
    {% set lookupfield = option.values|split('/')|last %}
    {% if ',' in lookupfield %}
        {% set lookupfield = lookupfield|split(',') %}
    {% endif %}
    {% set sortingorder = field.sort|default(lookupfield|first) %}
    {% set querylimit = field.limit|default(500) %}
    {% set wherefilter = field.filter|default({}) %}
    {% setcontent lookups = lookuptype where wherefilter order sortingorder nohydrate limit querylimit %}
    {% set values = lookups|selectfield(lookupfield, option.multiple, field.keys|default('id')) %}
{% endif %}

{# get the current selection. Either a single value, or an array. #}
{% set selection = context.content.get(contentkey)|default(null) %}
{% if selection is not iterable %}
    {% set selection = [ selection ] %}
{% endif %}

{# If the current selection contains an existing id, we must use _only_ the id, and not accept a fallback. #}
{% if selection|first in values|keys %}
    {% set onlyids = true %}
{% else %}
    {% set onlyids = false %}
{% endif %}

{% set attr_select = {
    class:     option.class,
    id:        key,
    multiple:  option.multiple,
    required:  option.required,
    name:      (option.multiple) ? name ~ '[]' : name,
} %}

{# If the field has autocomplete, we need to set our own style, and remove the class attribute. #}
{% if field.autocomplete|default(false) %}
    {% set attr_select = attr_select|merge({'class': ''}) %}
    {% set attr_select = attr_select|merge({'style': 'width: 100%;'}) %}
{% endif %}

{#=== FIELDSET =======================================================================================================#}

<fieldset class=\"multiselect\">

    <label class=\"col-sm-3 control-label\">{{ (option.info) ? macro.infopop(labelkey, option.info) : labelkey }}</label>
    <div class=\"col-sm-9\">
        <select{{ macro.attr(attr_select) }}>
            {% for id, value in values %}

                {% set is_array = (value is iterable and (value | length) > 1) %}
                {% set attr_opt = {
                    value:     id,
                    selected:  id in selection or (not onlyids and (is_array ? value[0] : value) in selection),
                } %}

                <option{{ macro.attr(attr_opt) }}>{{ is_array ? value[0:]|join(' / ') : value }}</option>
            {% endfor %}
        </select>

        {% if option.multiple and not field.autocomplete|default(false) %}
        <div>{# TODO: move onclick-events to JS #}
            <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#{{ key }} option').prop('selected', true); return false;\">
                <i class=\"fa fa-fw fa-check-square-o\"></i>{{ __(\"Select all\") }}
            </a>
            <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#{{ key }} option').prop('selected', false); return false;\">
                <i class=\"fa fa-fw fa-square-o\"></i>{{ __(\"Select none\") }}
            </a>
        </div>
        {% endif %}
    </div>

    {% if field.autocomplete|default(false) %}
    <script>
        \$(function() {
            \$('#{{ key }}').select2({
                placeholder: \"{{ __('(none)') }}\",
                allowClear: true
            });
        });
    </script>
    {% endif %}

</fieldset>
", "editcontent/fields/_select.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/fields/_select.twig");
    }
}
