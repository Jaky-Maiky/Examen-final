<?php

/* changelog/_macros.twig */
class __TwigTemplate_b70e2448f91976428e371fab140c6f6f4529497d2b50e3029e110b9e9ceb2495 extends Twig_Template
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
        // line 23
        echo "
";
        // line 229
        echo "

";
    }

    // line 1
    public function getchangelog_pager($__currentpage__ = null, $__pagecount__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "currentpage" => $__currentpage__,
            "pagecount" => $__pagecount__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "        <ul class=\"pagination pagination-centered\">
            ";
            // line 3
            if (((isset($context["currentpage"]) ? $context["currentpage"] : null) > 1)) {
                // line 4
                echo "                <li><a href=\"?page=1\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></a></li>
                <li><a href=\"?page=";
                // line 5
                echo twig_escape_filter($this->env, ((isset($context["currentpage"]) ? $context["currentpage"] : null) - 1), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></a></li>
            ";
            } else {
                // line 7
                echo "                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></span></li>
            ";
            }
            // line 10
            echo "
            <li><span>";
            // line 11
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("component.changelog-pager.page");
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["currentpage"]) ? $context["currentpage"] : null), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["pagecount"]) ? $context["pagecount"] : null), "html", null, true);
            echo "</span></li>

            ";
            // line 13
            if (((isset($context["currentpage"]) ? $context["currentpage"] : null) < (isset($context["pagecount"]) ? $context["pagecount"] : null))) {
                // line 14
                echo "                <li><a href=\"?page=";
                echo twig_escape_filter($this->env, ((isset($context["currentpage"]) ? $context["currentpage"] : null) + 1), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></a></li>
                <li><a href=\"?page=";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["pagecount"]) ? $context["pagecount"] : null), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></a></li>
            ";
            } else {
                // line 17
                echo "                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></span></li>
            ";
            }
            // line 20
            echo "        </ul>

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

    // line 24
    public function getchangelog_details($__entry__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entry" => $__entry__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "changelog/_macros.twig", 25);
            // line 26
            echo "
    ";
            // line 27
            $context["preview_w"] = 200;
            // line 28
            echo "    ";
            $context["preview_h"] = 150;
            // line 29
            echo "
    <h3>
        \"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title", array()), "html", null, true);
            echo "\"
        ";
            // line 32
            echo $this->getAttribute($this, "changelog_mutation", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mutation_type", array())), "method");
            echo "
        ";
            // line 33
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("component.changelog-detail.by");
            echo " <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "username", array()), "html", null, true);
            echo "</strong>
    </h3>

    <div class=\"changelog-details\">
        <div class=\"user\">
           <i class=\"icon icon-user\"></i>
        </div>

        <div class=\"body\">
            <div class=\"time\">
                <p>
                    <span>";
            // line 44
            echo $this->getAttribute($this, "changelog_mutation", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mutation_type", array())), "method");
            echo " ";
            echo $context["macro"]->getdatetime($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "date", array()));
            echo "</span>
                    ";
            // line 45
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("component.changelog-detail.by");
            echo " <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "username", array()), "html", null, true);
            echo "</strong>
                </p>
                ";
            // line 47
            if ($this->env->getExtension('Bolt\Twig\TwigExtension')->isChangelogEnabled()) {
                // line 48
                echo "                    ";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array()), false)) : (false))) {
                    echo "<h4><strong>Comment</strong>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array()), "html", null, true);
                    echo "</h4>";
                }
                // line 49
                echo "                ";
            }
            // line 50
            echo "            </div>


            <table class=\"table table-bordered table-condensed table-changelog-details\">
                <thead>
                    <tr>
                        <th>";
            // line 56
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("component.changelog-detail.field");
            echo "</th>
                        <th>";
            // line 57
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("component.changelog-detail.value-old");
            echo "</th>
                        <th>";
            // line 58
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("component.changelog-detail.value-new");
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "changedfields", array()));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 63
                echo "                    <tr>
                        <td><strong>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true);
                echo "</strong></td>

                        ";
                // line 66
                if (($this->getAttribute($context["field"], "type", array()) == "normal")) {
                    // line 67
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 73
$context["field"], "type", array()) == "html")) {
                    // line 74
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 75
                    echo $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array());
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 78
                    echo $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array());
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 80
$context["field"], "type", array()) == "filelist")) {
                    // line 81
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 83
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                        echo "

                                    ";
                        // line 86
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 87
                            echo "                                    <br><br>
                                    ";
                        }
                        // line 89
                        echo "                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 93
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 94
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                        echo "

                                    ";
                        // line 96
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 97
                            echo "                                    <br><br>
                                    ";
                        }
                        // line 99
                        echo "                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 101
$context["field"], "type", array()) == "geolocation")) {
                    // line 102
                    echo "                            <td class=\"change-log-item\">
                                <strong>Address:</strong> ";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "address", array()), "html", null, true);
                    echo "<br>
                                <strong>Latitude:</strong> ";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "latitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Longitude:</strong> ";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "longitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Matched address:</strong> ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "formatted_address", array()), "html", null, true);
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Address:</strong> ";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "address", array()), "html", null, true);
                    echo "<br>
                                <strong>Latitude:</strong> ";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "latitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Longitude:</strong> ";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "longitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Matched address:</strong> ";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "formatted_address", array()), "html", null, true);
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 114
$context["field"], "type", array()) == "image")) {
                    // line 115
                    echo "                            <td class=\"change-log-item\">
                                <strong>File:</strong> ";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()), "html", null, true);
                    echo "<br>
                                <strong>Title:</strong> ";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-";
                    // line 118
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                ";
                    // line 119
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()) != "")) {
                        // line 120
                        echo "                                    ";
                        $context["preview_path"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                        // line 121
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                        echo "\" alt=\"Preview\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 123
                    echo "                                </div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>File:</strong> ";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()), "html", null, true);
                    echo "<br>
                                <strong>Title:</strong> ";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-";
                    // line 128
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                ";
                    // line 129
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()) != "")) {
                        // line 130
                        echo "                                    ";
                        $context["preview_path"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                        // line 131
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                        echo "\" alt=\"Preview\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 133
                    echo "                                </div>
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 135
$context["field"], "type", array()) == "imagelist")) {
                    // line 136
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 138
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 139
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                        echo "<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-";
                        // line 140
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
                                    ";
                        // line 141
                        if (($this->getAttribute($context["image"], "filename", array()) != "")) {
                            // line 142
                            echo "                                        ";
                            $context["preview_path"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($context["image"], "filename", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                            // line 143
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                            echo "\" alt=\"Preview\" width=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                            echo "\" height=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                            echo "\">
                                    ";
                        }
                        // line 145
                        echo "                                    </div>

                                    ";
                        // line 147
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 148
                            echo "                                    <br>
                                    ";
                        }
                        // line 150
                        echo "                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 153
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 154
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 155
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                        echo "<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-";
                        // line 156
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
                                    ";
                        // line 157
                        if (($this->getAttribute($context["image"], "filename", array()) != "")) {
                            // line 158
                            echo "                                        ";
                            $context["preview_path"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($context["image"], "filename", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                            // line 159
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                            echo "\" alt=\"Preview\" width=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                            echo "\" height=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                            echo "\">
                                    ";
                        }
                        // line 161
                        echo "                                    </div>

                                    ";
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                    <br>
                                    ";
                        }
                        // line 166
                        echo "                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 167
                    echo "                            </td>
                        ";
                } elseif ((($this->getAttribute(                // line 168
$context["field"], "type", array()) == "markdown") || ($this->getAttribute($context["field"], "type", array()) == "textarea"))) {
                    // line 169
                    echo "                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                    echo "</pre>
                            </td>
                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">";
                    // line 173
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                    echo "</pre>
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 175
$context["field"], "type", array()) == "select")) {
                    // line 176
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 177
                    if (twig_test_iterable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()))) {
                        // line 178
                        echo "                                    <ul>
                                    ";
                        // line 179
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                            // line 180
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["select"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 182
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 184
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 186
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 188
                    if (twig_test_iterable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()))) {
                        // line 189
                        echo "                                    <ul>
                                    ";
                        // line 190
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                            // line 191
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["select"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 193
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 195
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 197
                    echo "                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 198
$context["field"], "type", array()) == "video")) {
                    // line 199
                    echo "                            <td class=\"change-log-item\">
                                <strong>Title:</strong> ";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <strong>URL:</strong> ";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "url", array()), "html", null, true);
                    echo "<br>
                                <strong>Size:</strong> ";
                    // line 202
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "width", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "height", array()), "html", null, true);
                    echo "<br>
                                <div class=\"imageholder\" id=\"thumbnail-";
                    // line 203
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                    ";
                    // line 204
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array()), "")) : (""))) {
                        // line 205
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "thumbnail", array()), "html", null, true);
                        echo "\" width=\"200\" height=\"150\">
                                    ";
                    }
                    // line 207
                    echo "                                </div>
                                <div class=\"hidden video\" id=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", array());
                    echo "</div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Title:</strong> ";
                    // line 211
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <strong>URL:</strong> ";
                    // line 212
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "url", array()), "html", null, true);
                    echo "<br>
                                <strong>Size:</strong> ";
                    // line 213
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "width", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "height", array()), "html", null, true);
                    echo "<br>
                                <div class=\"imageholder\" id=\"thumbnail-";
                    // line 214
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                    ";
                    // line 215
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array()), "")) : (""))) {
                        // line 216
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "thumbnail", array()), "html", null, true);
                        echo "\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                    ";
                    }
                    // line 218
                    echo "                                </div>
                                <div class=\"hidden video\" id=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", array());
                    echo "</div>
                            </td>
                        ";
                }
                // line 222
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                </tbody>
            </table>
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

    // line 231
    public function getchangelog_mutation($__raw__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "raw" => $__raw__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 232
            echo "    ";
            $context["mapping"] = array("UPDATE" => "changed", "INSERT" => "created", "DELETE" => "deleted", "HOLD" => "put on hold", "PUBLISH" => "published", "DRAFT" => "depublished");
            // line 233
            echo "    ";
            if ($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["raw"]) ? $context["raw"] : null), "html", null, true);
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

    public function getTemplateName()
    {
        return "changelog/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  820 => 233,  817 => 232,  805 => 231,  786 => 224,  779 => 222,  771 => 219,  768 => 218,  758 => 216,  756 => 215,  752 => 214,  746 => 213,  742 => 212,  738 => 211,  730 => 208,  727 => 207,  721 => 205,  719 => 204,  715 => 203,  709 => 202,  705 => 201,  701 => 200,  698 => 199,  696 => 198,  693 => 197,  687 => 195,  683 => 193,  674 => 191,  670 => 190,  667 => 189,  665 => 188,  661 => 186,  655 => 184,  651 => 182,  642 => 180,  638 => 179,  635 => 178,  633 => 177,  630 => 176,  628 => 175,  623 => 173,  617 => 170,  614 => 169,  612 => 168,  609 => 167,  595 => 166,  591 => 164,  589 => 163,  585 => 161,  575 => 159,  572 => 158,  570 => 157,  566 => 156,  562 => 155,  557 => 154,  540 => 153,  536 => 151,  522 => 150,  518 => 148,  516 => 147,  512 => 145,  502 => 143,  499 => 142,  497 => 141,  493 => 140,  489 => 139,  484 => 138,  467 => 137,  464 => 136,  462 => 135,  458 => 133,  448 => 131,  445 => 130,  443 => 129,  439 => 128,  435 => 127,  431 => 126,  426 => 123,  416 => 121,  413 => 120,  411 => 119,  407 => 118,  403 => 117,  399 => 116,  396 => 115,  394 => 114,  389 => 112,  385 => 111,  381 => 110,  377 => 109,  371 => 106,  367 => 105,  363 => 104,  359 => 103,  356 => 102,  354 => 101,  351 => 100,  337 => 99,  333 => 97,  331 => 96,  326 => 94,  321 => 93,  304 => 92,  300 => 90,  286 => 89,  282 => 87,  280 => 86,  275 => 84,  270 => 83,  253 => 82,  250 => 81,  248 => 80,  243 => 78,  237 => 75,  234 => 74,  232 => 73,  227 => 71,  221 => 68,  218 => 67,  216 => 66,  211 => 64,  208 => 63,  204 => 62,  197 => 58,  193 => 57,  189 => 56,  181 => 50,  178 => 49,  171 => 48,  169 => 47,  162 => 45,  156 => 44,  140 => 33,  136 => 32,  132 => 31,  128 => 29,  125 => 28,  123 => 27,  120 => 26,  117 => 25,  105 => 24,  88 => 20,  83 => 17,  78 => 15,  73 => 14,  71 => 13,  62 => 11,  59 => 10,  54 => 7,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  28 => 1,  22 => 229,  19 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro changelog_pager(currentpage, pagecount) %}
        <ul class=\"pagination pagination-centered\">
            {% if currentpage > 1 %}
                <li><a href=\"?page=1\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></a></li>
                <li><a href=\"?page={{ currentpage - 1 }}\"><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></a></li>
            {% else %}
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></span></li>
            {% endif %}

            <li><span>{{ __('component.changelog-pager.page') }} {{ currentpage }} / {{ pagecount }}</span></li>

            {% if currentpage < pagecount %}
                <li><a href=\"?page={{ currentpage + 1 }}\"><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></a></li>
                <li><a href=\"?page={{ pagecount }}\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></a></li>
            {% else %}
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></span></li>
            {% endif %}
        </ul>

{% endmacro %}

{% macro changelog_details(entry) %}
    {% import '_macro/_macro.twig' as macro %}

    {% set preview_w = 200 %}
    {% set preview_h = 150 %}

    <h3>
        \"{{ entry.title }}\"
        {{ _self.changelog_mutation(entry.mutation_type) }}
        {{ __('component.changelog-detail.by') }} <strong>{{ entry.username }}</strong>
    </h3>

    <div class=\"changelog-details\">
        <div class=\"user\">
           <i class=\"icon icon-user\"></i>
        </div>

        <div class=\"body\">
            <div class=\"time\">
                <p>
                    <span>{{ _self.changelog_mutation(entry.mutation_type) }} {{ macro.datetime(entry.date) }}</span>
                    {{ __('component.changelog-detail.by') }} <strong>{{ entry.username }}</strong>
                </p>
                {% if ischangelogenabled() %}
                    {% if entry.comment|default(false) %}<h4><strong>Comment</strong>: {{ entry.comment }}</h4>{% endif %}
                {% endif %}
            </div>


            <table class=\"table table-bordered table-condensed table-changelog-details\">
                <thead>
                    <tr>
                        <th>{{ __('component.changelog-detail.field') }}</th>
                        <th>{{ __('component.changelog-detail.value-old') }}</th>
                        <th>{{ __('component.changelog-detail.value-new') }}</th>
                    </tr>
                </thead>
                <tbody>
                {% for key, field in entry.changedfields %}
                    <tr>
                        <td><strong>{{ field.label }}</strong></td>

                        {% if field.type == 'normal' %}
                            <td class=\"change-log-item\">
                                {{ field.before.render }}
                            </td>
                            <td class=\"change-log-item\">
                                {{ field.after.render }}
                            </td>
                        {% elseif field.type == 'html' %}
                            <td class=\"change-log-item\">
                                {{ field.before.render|raw }}
                            </td>
                            <td class=\"change-log-item\">
                                {{ field.after.render|raw }}
                            </td>
                        {% elseif field.type == 'filelist' %}
                            <td class=\"change-log-item\">
                                {% for file in field.before.render %}
                                    <strong>File:</strong> {{ file.filename }}<br>
                                    <strong>Title:</strong> {{ file.title }}

                                    {% if not loop.last %}
                                    <br><br>
                                    {% endif %}
                                {% endfor %}
                            </td>
                            <td class=\"change-log-item\">
                                {% for file in field.after.render %}
                                    <strong>File:</strong> {{ file.filename }}<br>
                                    <strong>Title:</strong> {{ file.title }}

                                    {% if not loop.last %}
                                    <br><br>
                                    {% endif %}
                                {% endfor %}
                            </td>
                        {% elseif field.type == 'geolocation' %}
                            <td class=\"change-log-item\">
                                <strong>Address:</strong> {{ field.before.render.address }}<br>
                                <strong>Latitude:</strong> {{ field.before.render.latitude }}<br>
                                <strong>Longitude:</strong> {{ field.before.render.longitude }}<br>
                                <strong>Matched address:</strong> {{ field.before.render.formatted_address }}
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Address:</strong> {{ field.after.render.address }}<br>
                                <strong>Latitude:</strong> {{ field.after.render.latitude }}<br>
                                <strong>Longitude:</strong> {{ field.after.render.longitude }}<br>
                                <strong>Matched address:</strong> {{ field.after.render.formatted_address }}
                            </td>
                        {% elseif field.type == 'image' %}
                            <td class=\"change-log-item\">
                                <strong>File:</strong> {{ field.before.render.file }}<br>
                                <strong>Title:</strong> {{ field.before.render.title }}<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-{{ key }}\">
                                {% if field.before.render.file != '' %}
                                    {% set preview_path = field.before.render.file|thumbnail(preview_w, preview_h, 'c') %}
                                    <img src=\"{{ preview_path }}\" alt=\"Preview\" width=\"{{ preview_w }}\" height=\"{{ preview_h }}\">
                                {% endif %}
                                </div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>File:</strong> {{ field.after.render.file }}<br>
                                <strong>Title:</strong> {{ field.after.render.title }}<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-{{ key }}\">
                                {% if field.after.render.file != '' %}
                                    {% set preview_path = field.after.render.file|thumbnail(preview_w, preview_h, 'c') %}
                                    <img src=\"{{ preview_path }}\" alt=\"Preview\" width=\"{{ preview_w }}\" height=\"{{ preview_h }}\">
                                {% endif %}
                                </div>
                            </td>
                        {% elseif field.type == 'imagelist' %}
                            <td class=\"change-log-item\">
                                {% for image in field.before.render %}
                                    <strong>File:</strong> {{ image.filename }}<br>
                                    <strong>Title:</strong> {{ image.title }}<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-{{ key }}\">
                                    {% if image.filename != '' %}
                                        {% set preview_path = image.filename|thumbnail(preview_w, preview_h, 'c') %}
                                        <img src=\"{{ preview_path }}\" alt=\"Preview\" width=\"{{ preview_w }}\" height=\"{{ preview_h }}\">
                                    {% endif %}
                                    </div>

                                    {% if not loop.last %}
                                    <br>
                                    {% endif %}
                                {% endfor %}
                            </td>
                            <td class=\"change-log-item\">
                                {% for image in field.after.render %}
                                    <strong>File:</strong> {{ image.filename }}<br>
                                    <strong>Title:</strong> {{ image.title }}<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-{{ key }}\">
                                    {% if image.filename != '' %}
                                        {% set preview_path = image.filename|thumbnail(preview_w, preview_h, 'c') %}
                                        <img src=\"{{ preview_path }}\" alt=\"Preview\" width=\"{{ preview_w }}\" height=\"{{ preview_h }}\">
                                    {% endif %}
                                    </div>

                                    {% if not loop.last %}
                                    <br>
                                    {% endif %}
                                {% endfor %}
                            </td>
                        {% elseif field.type == 'markdown' or field.type == 'textarea' %}
                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">{{ field.before.render }}</pre>
                            </td>
                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">{{ field.after.render }}</pre>
                            </td>
                        {% elseif field.type == 'select' %}
                            <td class=\"change-log-item\">
                                {% if field.before.render is iterable %}
                                    <ul>
                                    {% for select in field.before.render %}
                                        <li>{{ select }}</li>
                                    {% endfor %}
                                    </ul>
                                {% else %}
                                    {{ field.before.render }}
                                {% endif %}
                            </td>
                            <td class=\"change-log-item\">
                                {% if field.after.render is iterable %}
                                    <ul>
                                    {% for select in field.after.render %}
                                        <li>{{ select }}</li>
                                    {% endfor %}
                                    </ul>
                                {% else %}
                                    {{ field.after.render }}
                                {% endif %}
                            </td>
                        {% elseif field.type == 'video' %}
                            <td class=\"change-log-item\">
                                <strong>Title:</strong> {{ field.before.render.title }}<br>
                                <strong>URL:</strong> {{ field.before.render.url }}<br>
                                <strong>Size:</strong> {{ field.before.render.width }} x {{ field.before.render.height }}<br>
                                <div class=\"imageholder\" id=\"thumbnail-{{ key }}\">
                                    {% if field.before.render.thumbnail|default('') %}
                                        <img src=\"{{ field.before.render.thumbnail }}\" width=\"200\" height=\"150\">
                                    {% endif %}
                                </div>
                                <div class=\"hidden video\" id=\"{{ key }}\">{{ field.after.render.html|raw }}</div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Title:</strong> {{ field.after.render.title }}<br>
                                <strong>URL:</strong> {{ field.after.render.url }}<br>
                                <strong>Size:</strong> {{ field.after.render.width }} x {{ field.after.render.height }}<br>
                                <div class=\"imageholder\" id=\"thumbnail-{{ key }}\">
                                    {% if field.after.render.thumbnail|default('') %}
                                        <img src=\"{{ field.after.render.thumbnail }}\" width=\"{{ preview_w }}\" height=\"{{ preview_h }}\">
                                    {% endif %}
                                </div>
                                <div class=\"hidden video\" id=\"{{ key }}\">{{ field.after.render.html|raw }}</div>
                            </td>
                        {% endif %}
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endmacro %}


{% macro changelog_mutation(raw) %}
    {% set mapping = {'UPDATE': 'changed', 'INSERT': 'created', 'DELETE': 'deleted', 'HOLD': 'put on hold', 'PUBLISH': 'published', 'DRAFT': 'depublished'} %}
    {% if mapping[raw] is defined %}{{ mapping[raw] }}{% else %}{{ raw }}{% endif %}
{% endmacro %}
", "changelog/_macros.twig", "/var/www/vendor/bolt/bolt/app/view/twig/changelog/_macros.twig");
    }
}
