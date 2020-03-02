<?php

/* _macro/_macro.twig */
class __TwigTemplate_81fe88a6014b2e9a8613492d6fa4e17216d744222ac219a7bc4f26f0a280bd84 extends Twig_Template
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
        // line 8
        echo "
";
        // line 14
        echo "
";
        // line 20
        echo "
";
        // line 23
        echo "
";
        // line 28
        echo "
";
        // line 55
        echo "
";
        // line 69
        echo "
";
        // line 81
        echo "
";
        // line 100
        echo "

";
        // line 108
        echo "
";
        // line 118
        echo "
";
        // line 181
        echo "
";
        // line 192
        echo "
 # Renders a upload button combo [Upload] [Select from Server] [Select from Stack]
 #
 # @param string type Either 'image' or 'other,document'
 # @param string key Id of the input element
 # @param string attr_upload Attributes for the file upload button
 # @param string uploadpath Relative upload path
 #}
";
    }

    // line 3
    public function getuserlink($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 4
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array()), "html", null, true);
            // line 6
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getcontentlink_by_id($__contenttype__ = null, $__title__ = null, $__content_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "title" => $__title__,
            "content_id" => $__content_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 10
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array()), "id" => (isset($context["content_id"]) ? $context["content_id"] : null))), "html", null, true);
            echo "\">";
            // line 11
            echo _twig_default_filter($this->env->getExtension('Bolt\Twig\TwigExtension')->trim((isset($context["title"]) ? $context["title"] : null), 70), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("no title …")) . ")</em>"));
            // line 12
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getcontentlink($__contenttype__ = null, $__content__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["crosslinks"] = $this;
            // line 17
            echo "    ";
            $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(), "method");
            // line 18
            echo "    ";
            echo $context["crosslinks"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()));
            echo "
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

    // line 22
    public function getdatetime($__d__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "d" => $__d__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "<time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "</time>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getrequiredattr($__field__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    ";
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()))) {
                echo "required=\"required\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getattr($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            echo "    ";
            ob_start();
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["value"]) {
                // line 33
                echo "            ";
                if (($context["attrname"] == "value")) {
                    // line 34
                    echo "                value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
            ";
                } elseif ( !twig_test_empty(                // line 35
$context["value"])) {
                    // line 36
                    echo "                ";
                    if (twig_in_filter($context["attrname"], array(0 => "required", 1 => "disabled", 2 => "selected", 3 => "autofocus", 4 => "multiple", 5 => "readonly"))) {
                        // line 37
                        echo "                    ";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 38
$context["attrname"] == "name_id")) {
                        // line 39
                        echo "                    name=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 40
$context["attrname"] == "class")) {
                        // line 41
                        echo "                    class=\"";
                        echo twig_escape_filter($this->env, twig_trim_filter($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 42
$context["attrname"] == "style")) {
                        // line 43
                        echo "                    style=\"";
                        echo twig_escape_filter($this->env, twig_trim_filter($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 44
$context["attrname"] == "checked")) {
                        // line 45
                        echo "                    ";
                        if (($context["value"] != false)) {
                            echo "checked=\"checked\"";
                        }
                        // line 46
                        echo "                ";
                    } elseif (($context["attrname"] == "_bind")) {
                        // line 47
                        echo "                    data-bind=\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(array("bind" => $this->getAttribute($context["value"], 0, array(), "array")), (($this->getAttribute($context["value"], 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["value"], 1, array(), "array"), array())) : (array())))), "html", null, true);
                        echo "\"
                ";
                    } else {
                        // line 49
                        echo "                    ";
                        echo twig_escape_filter($this->env, twig_replace_filter($context["attrname"], array("_" => "-")), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    }
                    // line 51
                    echo "            ";
                }
                // line 52
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getinfopop($__label__ = null, $__infoid__ = null, $__afterlabel__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "infoid" => $__infoid__,
            "afterlabel" => $__afterlabel__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "    ";
            ob_start();
            // line 59
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            if (array_key_exists("afterlabel", $context)) {
                echo " ";
                echo (isset($context["afterlabel"]) ? $context["afterlabel"] : null);
            }
            // line 60
            echo "        <span class=\"label info-pop\"
              data-content=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => (isset($context["infoid"]) ? $context["infoid"] : null), 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\"
              data-html=\"true\"
              data-title=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "\"
              >
            ";
            // line 65
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Info");
            echo "
        </span>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getlabel($__key__ = null, $__field__ = null, $__class__ = null, $__for__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "field" => $__field__,
            "class" => $__class__,
            "for" => $__for__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            echo "    ";
            ob_start();
            // line 73
            echo "        <label
            ";
            // line 74
            echo " ";
            if ((isset($context["for"]) ? $context["for"] : null)) {
                echo "for=\"";
                echo twig_escape_filter($this->env, (isset($context["for"]) ? $context["for"] : null), "html", null, true);
                echo "\"";
            }
            // line 75
            echo "            ";
            echo " class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "control-label")) : ("control-label")), "html", null, true);
            echo "\"
        >
            ";
            // line 77
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->ucfirst((isset($context["key"]) ? $context["key"] : null)))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->ucfirst((isset($context["key"]) ? $context["key"] : null)))), "html", null, true);
            echo "
        </label>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 82
    public function getactionform($__content__ = null, $__action__ = null, $__icon__ = null, $__text__ = null, $__confirmation_text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "content" => $__content__,
            "action" => $__action__,
            "icon" => $__icon__,
            "text" => $__text__,
            "confirmation_text" => $__confirmation_text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 83
            echo "<form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contentaction", array("action" => (isset($context["action"]) ? $context["action"] : null), "contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\"
      method=\"POST\">
    ";
            // line 85
            $this->loadTemplate("_sub/_csrf_token.twig", "_macro/_macro.twig", 85)->display($context);
            // line 86
            echo "    <button type=\"submit\"
        ";
            // line 87
            if ((isset($context["confirmation_text"]) ? $context["confirmation_text"] : null)) {
                // line 88
                echo "            class=\"btn btn-link btn-block confirm\" data-confirm=\"";
                echo twig_escape_filter($this->env, (isset($context["confirmation_text"]) ? $context["confirmation_text"] : null), "html", null, true);
                echo "\"
        ";
            } else {
                // line 90
                echo "            class=\"btn btn-link btn-block\"
        ";
            }
            // line 92
            echo "    >
        <span class=\"pull-left\">
            <i class=\"fa ";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\"></i>
            ";
            // line 95
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans((isset($context["text"]) ? $context["text"] : null));
            echo "
        </span>
    </button>
</form>
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

    // line 102
    public function gettypepopover($__types__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $__types__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 103
            echo "    ";
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/accept_file_types"), "method")));
            // line 104
            echo "    ";
            $context["text"] = ((($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.allowed-filetypes") . "<code>") . twig_join_filter((isset($context["types"]) ? $context["types"] : null), "</code>, <code>")) . "</code>.");
            // line 105
            echo "    <span class=\"label info-pop\" data-title=\"\"
          data-html=\"true\" data-content=\"";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Types");
            echo "</span>
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

    // line 109
    public function getstackbutton($__file__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "file" => $__file__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") &&  !$this->env->getExtension('Bolt\Twig\TwigExtension')->stacked($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "newpath", array())))) {
                // line 111
                echo "        <a href=\"#\" class=\"btn btn-default btn-sm\" data-action=\"Bolt.stack.addToStack('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "newpath", array()), "html", null, true);
                echo "', this);\">
            <i class=\"fa fa-paperclip\"></i>
            <span class=\"visible-sm-inline visible-xs-inline\">";
                // line 113
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Stack");
                echo "</span>
            <span class=\"hidden-sm hidden-xs\">";
                // line 114
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Place on stack");
                echo "</span>
        </a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getinput_datetime($__opt__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["__internal_518b4b631d9076cedf22ddc7eabe0e2703d9d63670e56e1838a255db52e773a8"] = $this;
            // line 135
            echo "
    ";
            // line 136
            $context["class"] = (twig_replace_filter((($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array()), "")) : ("")), array("form-control" => "")) . " form-control");
            // line 137
            echo "
    ";
            // line 138
            $context["attr_data"] = array("id" => $this->getAttribute(            // line 139
(isset($context["opt"]) ? $context["opt"] : null), "id", array()), "name" => (($this->getAttribute(            // line 140
(isset($context["opt"]) ? $context["opt"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name", array()), $this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "id", array()))) : ($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "id", array()))), "value" => $this->getAttribute(            // line 141
(isset($context["opt"]) ? $context["opt"] : null), "value", array()), "type" => "hidden", "class" => "datetime", "data_notice" => (($this->getAttribute(            // line 144
(isset($context["opt"]) ? $context["opt"] : null), "notice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "notice", array()), "")) : ("")));
            // line 146
            echo "
    ";
            // line 147
            $context["attr_date"] = array("type" => "text", "disabled" => (($this->getAttribute(            // line 149
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 150
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)), "class" => twig_trim_filter((            // line 151
(isset($context["class"]) ? $context["class"] : null) . " datepicker")), "data_errortext" => (($this->getAttribute(            // line 152
(isset($context["opt"]) ? $context["opt"] : null), "errortext", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "errortext", array()), "")) : ("")), "data_field_options" => (((($this->getAttribute(            // line 153
(isset($context["opt"]) ? $context["opt"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()), false)) : (false))) ? (twig_jsonencode_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()))) : ("")));
            // line 155
            echo "
    ";
            // line 156
            $context["attr_time"] = array("type" => "text", "disabled" => (($this->getAttribute(            // line 158
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 159
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)), "class" => twig_trim_filter((            // line 160
(isset($context["class"]) ? $context["class"] : null) . " timepicker")), "title" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Time in 24h/12h format"), "style" => "margin-right: 6px;");
            // line 164
            echo "
    <input";
            // line 165
            echo $context["__internal_518b4b631d9076cedf22ddc7eabe0e2703d9d63670e56e1838a255db52e773a8"]->getattr((isset($context["attr_data"]) ? $context["attr_data"] : null));
            echo ">
    <div class=\"input-group\">
        <span class=\"input-group-btn\">
            <button class=\"btn btn-tertiary\" type=\"button\">
                <i class=\"fa fa-calendar\"></i>
            </button>
        </span>
        <input";
            // line 172
            echo $context["__internal_518b4b631d9076cedf22ddc7eabe0e2703d9d63670e56e1838a255db52e773a8"]->getattr((isset($context["attr_date"]) ? $context["attr_date"] : null));
            echo ">
        ";
            // line 173
            if (( !$this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "has_time", array(), "any", true, true) || ($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "has_time", array()) != false))) {
                // line 174
                echo "            <input";
                echo $context["__internal_518b4b631d9076cedf22ddc7eabe0e2703d9d63670e56e1838a255db52e773a8"]->getattr((isset($context["attr_time"]) ? $context["attr_time"] : null));
                echo ">
        ";
            }
            // line 176
            echo "        <button class=\"btn btn-default btn-xs\" type=\"button\" style=\"margin: 4px 0 0 0;\">
            <i class=\"fa fa-close\"></i>
        </button>
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

    // line 187
    public function gettimemoment($__datetime__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "datetime" => $__datetime__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 188
            echo "    ";
            ob_start();
            // line 189
            echo "        <time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datetime"]) ? $context["datetime"] : null), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["datetime"]) ? $context["datetime"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["datetime"]) ? $context["datetime"] : null), "html", null, true);
            echo "</time>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 200
    public function getupload_buttons($__type__ = null, $__key__ = null, $__attr_upload__ = null, $__uploadpath__ = null, $__canUpload__ = null, $__multiselect__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "key" => $__key__,
            "attr_upload" => $__attr_upload__,
            "uploadpath" => $__uploadpath__,
            "canUpload" => $__canUpload__,
            "multiselect" => $__multiselect__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 201
            echo "    ";
            $context["__internal_15cb142e2a611aed47b024b70214f40da03726db68c7e057cf6717375d915965"] = $this;
            // line 202
            echo "
    ";
            // line 203
            $context["items"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->stackItems(7, ((((isset($context["type"]) ? $context["type"] : null) == "image")) ? ("image") : ("other,document")));
            // line 204
            echo "    ";
            $context["href"] = ((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async", array()) . "browse/files") . (((isset($context["uploadpath"]) ? $context["uploadpath"] : null)) ? (("/" . (isset($context["uploadpath"]) ? $context["uploadpath"] : null))) : (""))) . "?key=") . (isset($context["key"]) ? $context["key"] : null)) . (((isset($context["multiselect"]) ? $context["multiselect"] : null)) ? (("&multiselect=" . (isset($context["multiselect"]) ? $context["multiselect"] : null))) : ("")));
            // line 205
            echo "    <div class=\"button-wrap fileselectbuttongroup\">

        ";
            // line 208
            echo "        ";
            if ((isset($context["canUpload"]) ? $context["canUpload"] : null)) {
                // line 209
                echo "            <span type=\"button\" class=\"btn btn-secondary fileinput-button\">
            \t<i class=\"fa fa-upload\"></i>
            \t<span>";
                // line 211
                echo ((((isset($context["type"]) ? $context["type"] : null) == "image")) ? ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Upload image")) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Upload file")));
                echo "</span>
            \t<input";
                // line 212
                echo $context["__internal_15cb142e2a611aed47b024b70214f40da03726db68c7e057cf6717375d915965"]->getattr((isset($context["attr_upload"]) ? $context["attr_upload"] : null));
                echo ">
        \t</span>
        ";
            } else {
                // line 215
                echo "            <button type=\"button\" class=\"btn\" disabled=\"disabled\">
                ";
                // line 216
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Upload not allowed");
                echo "
                ";
                // line 218
                echo "                ";
                $context["attr_upload"] = twig_array_merge((isset($context["attr_upload"]) ? $context["attr_upload"] : null), array("type" => "hidden"));
                // line 219
                echo "                <input";
                echo $context["__internal_15cb142e2a611aed47b024b70214f40da03726db68c7e057cf6717375d915965"]->getattr((isset($context["attr_upload"]) ? $context["attr_upload"] : null));
                echo ">
            </button>
        ";
            }
            // line 222
            echo "
        ";
            // line 224
            echo "        <button type=\"button\" class=\"btn btn-tertiary\" data-target=\"#selectModal-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["href"]) ? $context["href"] : null), "html", null, true);
            echo "\" data-toggle=\"modal\">
            <i class=\"fa fa-download\"></i>
            ";
            // line 226
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.select-from-server");
            echo "
        </button>

        ";
            // line 230
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") && (isset($context["items"]) ? $context["items"] : null))) {
                // line 231
                echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    ";
                // line 234
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.select-from-stack");
                echo "
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu\" id=\"stack-";
                // line 238
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
                    ";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 240
                    echo "                        ";
                    $context["info"] = ($this->getAttribute($context["item"], "filesize", array()) . (((($this->getAttribute($context["item"], "imagesize", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "imagesize", array()))) : (""))) ? (((", " . $this->getAttribute($context["item"], "imagesize", array())) . " px")) : ("")));
                    // line 241
                    echo "                        <li>
                            <a href=\"#\" data-action=\"Bolt.stack.selectFromPulldown('";
                    // line 242
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "filepath", array()), "html", null, true);
                    echo "');\">
                                ";
                    // line 243
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                    echo " <small>(";
                    echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : null), "html", null, true);
                    echo ")</small>
                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "                </ul>
            </div>
        ";
            }
            // line 250
            echo "
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
        return "_macro/_macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  881 => 250,  876 => 247,  864 => 243,  858 => 242,  855 => 241,  852 => 240,  848 => 239,  844 => 238,  837 => 234,  832 => 231,  829 => 230,  823 => 226,  815 => 224,  812 => 222,  805 => 219,  802 => 218,  798 => 216,  795 => 215,  789 => 212,  785 => 211,  781 => 209,  778 => 208,  774 => 205,  771 => 204,  769 => 203,  766 => 202,  763 => 201,  746 => 200,  723 => 189,  720 => 188,  708 => 187,  689 => 176,  683 => 174,  681 => 173,  677 => 172,  667 => 165,  664 => 164,  662 => 160,  661 => 159,  660 => 158,  659 => 156,  656 => 155,  654 => 153,  653 => 152,  652 => 151,  651 => 150,  650 => 149,  649 => 147,  646 => 146,  644 => 144,  643 => 141,  642 => 140,  641 => 139,  640 => 138,  637 => 137,  635 => 136,  632 => 135,  629 => 134,  617 => 133,  598 => 114,  594 => 113,  588 => 111,  585 => 110,  573 => 109,  554 => 106,  551 => 105,  548 => 104,  545 => 103,  533 => 102,  513 => 95,  509 => 94,  505 => 92,  501 => 90,  495 => 88,  493 => 87,  490 => 86,  488 => 85,  482 => 83,  466 => 82,  447 => 77,  440 => 75,  433 => 74,  430 => 73,  427 => 72,  412 => 71,  393 => 65,  388 => 63,  383 => 61,  380 => 60,  373 => 59,  370 => 58,  356 => 57,  340 => 53,  334 => 52,  331 => 51,  323 => 49,  317 => 47,  314 => 46,  309 => 45,  307 => 44,  302 => 43,  300 => 42,  295 => 41,  293 => 40,  286 => 39,  284 => 38,  277 => 37,  274 => 36,  272 => 35,  267 => 34,  264 => 33,  259 => 32,  256 => 31,  244 => 30,  226 => 26,  214 => 25,  182 => 22,  164 => 18,  161 => 17,  158 => 16,  145 => 15,  128 => 12,  126 => 11,  122 => 10,  107 => 9,  90 => 6,  88 => 5,  84 => 4,  71 => 3,  59 => 192,  56 => 181,  53 => 118,  50 => 108,  46 => 100,  43 => 81,  40 => 69,  37 => 55,  34 => 28,  31 => 23,  28 => 20,  25 => 14,  22 => 8,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# A little collection of links for various backend entities #}

{% macro userlink(user) %}{% spaceless %}
<a href=\"{{ path('useredit', {'id': user.id}) }}\">
    {{- user.displayname -}}
</a>
{% endspaceless %}{% endmacro %}

{% macro contentlink_by_id(contenttype, title, content_id) %}{% spaceless %}
<a href=\"{{ path('editcontent', {'contenttypeslug': contenttype.slug, 'id': content_id}) }}\">
    {{- title|trimtext(70)|default(\"<em>(\" ~ __(\"no title …\") ~ \")</em>\")|raw -}}
</a>
{% endspaceless %}{% endmacro %}

{% macro contentlink(contenttype, content) %}
    {% import _self as crosslinks %}
    {% set title = content.getTitle() %}
    {{ crosslinks.contentlink_by_id(contenttype, title, content.id) }}
{% endmacro %}

{# output a 'relative' datetime #}
{% macro datetime(d) %}<time class=\"moment\" datetime=\"{{ d|date(\"c\") }}\" title=\"{{ d }}\">{{ d }}</time>{% endmacro %}

{# output the required=\"required\" attribute for field in the form. #}
{% macro requiredattr(field) %}
    {% if field.required is defined and field.required %}required=\"required\"{% endif %}
{% endmacro %}

{# outputs tag attributes #}
{% macro attr(attributes) %}
    {% spaceless %}
        {% for attrname, value in attributes %}
            {% if attrname == 'value' %}
                value=\"{{ value }}\"
            {% elseif value is not empty %}
                {% if attrname in ['required', 'disabled', 'selected', 'autofocus', 'multiple', 'readonly'] %}
                    {{ attrname }}=\"{{ attrname }}\"
                {% elseif attrname == 'name_id' %}
                    name=\"{{ value }}\" id=\"{{ value }}\"
                {% elseif attrname == 'class' %}
                    class=\"{{ value|trim }}\"
                {% elseif attrname == 'style' %}
                    style=\"{{ value|trim }}\"
                {% elseif attrname == 'checked' %}
                    {% if value != false %}checked=\"checked\"{% endif %}
                {% elseif attrname == '_bind' %}
                    data-bind=\"{{ {bind: value[0]}|merge(value[1]|default({}))|json_encode }}\"
                {% else %}
                    {{ attrname|replace({'_': '-'}) }}=\"{{ value }}\"
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endspaceless %}
{% endmacro %}

{# Info popup #}
{% macro infopop(label, infoid, afterlabel) %}
    {% spaceless %}
        {{ label }}{% if afterlabel is defined %} {{ afterlabel|raw }}{% endif %}
        <span class=\"label info-pop\"
              data-content=\"{{ app.translator.trans(infoid, {}, 'infos') }}\"
              data-html=\"true\"
              data-title=\"{{ label|trans }}\"
              >
            {{ __('Info') }}
        </span>
    {% endspaceless %}
{% endmacro %}

{# label for forms when editing content #}
{% macro label(key, field, class, for) %}
    {% spaceless %}
        <label
            {# for   #} {% if for %}for=\"{{ for }}\"{% endif %}
            {# class #} class=\"{{ class|default('control-label') }}\"
        >
            {{ field.label|default(key|ucfirst) }}
        </label>
    {% endspaceless %}
{% endmacro %}

{% macro actionform(content, action, icon, text, confirmation_text) %}
<form action=\"{{ path('contentaction', {'action': action, 'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\"
      method=\"POST\">
    {% include('_sub/_csrf_token.twig') %}
    <button type=\"submit\"
        {% if confirmation_text %}
            class=\"btn btn-link btn-block confirm\" data-confirm=\"{{ confirmation_text }}\"
        {% else %}
            class=\"btn btn-link btn-block\"
        {% endif %}
    >
        <span class=\"pull-left\">
            <i class=\"fa {{ icon }}\"></i>
            {{ __(text) }}
        </span>
    </button>
</form>
{% endmacro %}


{% macro typepopover(types) %}
    {% set types = types|default(app.config.get('general/accept_file_types')) %}
    {% set text = __(\"field.general.allowed-filetypes\") ~ \"<code>\" ~ types|join(\"</code>, <code>\") ~ \"</code>.\" %}
    <span class=\"label info-pop\" data-title=\"\"
          data-html=\"true\" data-content=\"{{ text }}\">{{ __('Types') }}</span>
{% endmacro %}

{% macro stackbutton(file) %}
    {% if not app.config.get('general/backend/stack/disable', false) and not stacked(file.newpath) %}
        <a href=\"#\" class=\"btn btn-default btn-sm\" data-action=\"Bolt.stack.addToStack('{{ file.newpath }}', this);\">
            <i class=\"fa fa-paperclip\"></i>
            <span class=\"visible-sm-inline visible-xs-inline\">{{ __('Stack') }}</span>
            <span class=\"hidden-sm hidden-xs\">{{ __('Place on stack') }}</span>
        </a>
    {% endif %}
{% endmacro %}

{##
 # Renders a datetime/date input component
 #
 # Required options:
 #    id:                 id of that group
 # Optional options:
 #    disabled  [false]:  disabled input
 #    required  [false]:  make input required
 #    class     []:       class added to date/time input
 #    errortext []:       error text
 #    options   []:       options passed to datepicker
 #
 # @param array opt Options defining the component
 #}
{% macro input_datetime(opt) %}
    {% from _self import attr %}

    {% set class = opt.class|default('')|replace({'form-control': ''}) ~ ' form-control' %}

    {% set attr_data = {
        id:          opt.id,
        name:        opt.name|default(opt.id),
        value:       opt.value,
        type:        'hidden',
        class:       'datetime',
        data_notice: opt.notice|default('')
    } %}

    {% set attr_date = {
        type:                'text',
        disabled:            opt.disabled|default(false),
        required:            opt.required|default(false),
        class:               (class ~ ' datepicker')|trim,
        data_errortext:      opt.errortext|default(''),
        data_field_options:  opt.options|default(false) ? opt.options|json_encode : ''
    } %}

    {% set attr_time = {
        type:      'text',
        disabled:  opt.disabled|default(false),
        required:  opt.required|default(false),
        class:     (class ~ ' timepicker')|trim,
        title:     __('Time in 24h/12h format'),
        style:     'margin-right: 6px;'
    } %}

    <input{{ attr(attr_data) }}>
    <div class=\"input-group\">
        <span class=\"input-group-btn\">
            <button class=\"btn btn-tertiary\" type=\"button\">
                <i class=\"fa fa-calendar\"></i>
            </button>
        </span>
        <input{{ attr(attr_date) }}>
        {% if opt.has_time is not defined or opt.has_time != false %}
            <input{{ attr(attr_time) }}>
        {% endif %}
        <button class=\"btn btn-default btn-xs\" type=\"button\" style=\"margin: 4px 0 0 0;\">
            <i class=\"fa fa-close\"></i>
        </button>
    </div>
{% endmacro %}

{##
 # Renders a datetime/date input component
 #
 # @param string datetime ISO-datetime to display
 #}
{% macro timemoment(datetime) %}
    {% spaceless %}
        <time class=\"moment\" datetime=\"{{ datetime|date(\"c\") }}\" title=\"{{ datetime }}\">{{ datetime }}</time>
    {% endspaceless %}
{% endmacro %}

 # Renders a upload button combo [Upload] [Select from Server] [Select from Stack]
 #
 # @param string type Either 'image' or 'other,document'
 # @param string key Id of the input element
 # @param string attr_upload Attributes for the file upload button
 # @param string uploadpath Relative upload path
 #}
{% macro upload_buttons(type, key, attr_upload, uploadpath, canUpload, multiselect) %}
    {% from _self import attr %}

    {% set items = stackitems(7, (type == 'image') ?  'image' : 'other,document') %}
    {% set href = paths.async ~ 'browse/files' ~ (uploadpath ? '/' ~ uploadpath : '' ) ~ '?key=' ~ key ~ (multiselect ? '&multiselect=' ~ multiselect : '') %}
    <div class=\"button-wrap fileselectbuttongroup\">

        {# Button: Upload #}
        {% if canUpload %}
            <span type=\"button\" class=\"btn btn-secondary fileinput-button\">
            \t<i class=\"fa fa-upload\"></i>
            \t<span>{{ (type == 'image') ? __('Upload image') : __('Upload file') }}</span>
            \t<input{{ attr(attr_upload) }}>
        \t</span>
        {% else %}
            <button type=\"button\" class=\"btn\" disabled=\"disabled\">
                {{ __('Upload not allowed') }}
                {# creating a dummy stub, instead of the uploader. Needed (currently) to attach events to #}
                {% set attr_upload = attr_upload|merge({'type' : 'hidden'}) %}
                <input{{ attr(attr_upload) }}>
            </button>
        {% endif %}

        {# Button: Select from Server #}
        <button type=\"button\" class=\"btn btn-tertiary\" data-target=\"#selectModal-{{ key }}\" href=\"{{ href }}\" data-toggle=\"modal\">
            <i class=\"fa fa-download\"></i>
            {{ __('field.general.select-from-server') }}
        </button>

        {# Button: Select from Stack #}
        {% if not app.config.get('general/backend/stack/disable', false) and items %}
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    {{ __('field.general.select-from-stack') }}
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu\" id=\"stack-{{ key }}\">
                    {% for item in items %}
                        {% set info = item.filesize ~ (item.imagesize|default() ? ', ' ~ item.imagesize ~ ' px' : '') %}
                        <li>
                            <a href=\"#\" data-action=\"Bolt.stack.selectFromPulldown('{{ key }}', '{{ item.filepath }}');\">
                                {{ item.basename }} <small>({{ info }})</small>
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}

    </div>
{% endmacro %}
", "_macro/_macro.twig", "/var/www/vendor/bolt/bolt/app/view/twig/_macro/_macro.twig");
    }
}
