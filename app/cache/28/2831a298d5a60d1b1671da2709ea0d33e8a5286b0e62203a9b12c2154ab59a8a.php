<?php

/* _base/_listing.twig */
class __TwigTemplate_08e65d8c7d2060ae5e7ce34f65f718dd32b1d52883cbf8f5f21e430177bf8672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "_base/_listing.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["modifiable"] = (((($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "create", array()) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "edit", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "publish", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "depublish", array()));
        // line 4
        echo "
";
        // line 6
        if (((( !(isset($context["compact"]) ? $context["compact"] : null) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null)))) && ($this->env->getExtension('Bolt\Twig\TwigExtension')->request("order") == ""))) {
            // line 7
            echo "    ";
            if ( !$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "</tbody>";
            }
            // line 8
            echo "    <tbody ";
            if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
                echo "class=\"sortable\"";
            }
            echo ">
    <tr class=\"grouping\">
        <th colspan=\"";
            // line 10
            $this->displayBlock('listing_columns', $context, $blocks);
            echo "\">
            <h3 ";
            // line 11
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "class=\"first\"";
            }
            echo ">
                ";
            // line 12
            if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array())) {
                // line 13
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 15
                echo "                    ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no group)");
                echo "
                ";
            }
            // line 17
            echo "            </h3>
        </th>
    </tr>
";
        }
        // line 21
        echo "
";
        // line 23
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))) && ($this->env->getExtension('Bolt\Twig\TwigExtension')->request("order") == ""))))) {
            // line 24
            echo "    ";
            $context["lastgroup"] = (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array()))) : (""));
            // line 25
            echo "    ";
            if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array())))) {
                // line 26
                echo "        ";
                $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), "filter", array())) . "&");
                // line 27
                echo "    ";
            } else {
                // line 28
                echo "        ";
                $context["filter"] = "";
                // line 29
                echo "    ";
            }
            // line 30
            echo "
    ";
            // line 31
            $context["link"] = (("?" . (isset($context["filter"]) ? $context["filter"] : null)) . "order=");
            // line 32
            echo "    <tr>
        ";
            // line 33
            $this->displayBlock('listing_header', $context, $blocks);
            // line 56
            echo "    </tr>
";
        }
        // line 58
        echo "
<tr ";
        // line 59
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
            echo "class=\"dim\"";
        }
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["modifiable"]) ? $context["modifiable"] : null))) {
            echo " id=\"item_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 60
        $this->displayBlock('listing_id', $context, $blocks);
        // line 70
        echo "
    ";
        // line 71
        $this->displayBlock('listing_content', $context, $blocks);
        // line 102
        echo "
    ";
        // line 103
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            // line 104
            echo "        ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 123
            echo "    ";
        }
        // line 124
        echo "
    ";
        // line 125
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 212
        echo "
</tr>
";
    }

    // line 10
    public function block_listing_columns($context, array $blocks = array())
    {
        echo "6";
    }

    // line 33
    public function block_listing_header($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["modifiable"]) ? $context["modifiable"] : null))) {
            // line 35
            echo "            <th class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\" title=\"";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Select all");
            echo "\" /></th>
        ";
        } else {
            // line 37
            echo "            <th style=\"margin: 0; padding: 0;\"></th>
        ";
        }
        // line 39
        echo "
        <th class=\"hidden-xs\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt\Twig\TwigExtension')->request("order") == "id")) {
            echo "-";
        }
        echo "id\">
            ";
        // line 41
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Id");
        echo "
        </a></th>

        <th style=\"width:80%\">
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt\Twig\TwigExtension')->request("order") == $this->env->getExtension('Bolt\Twig\TwigExtension')->first($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method")))) {
            echo "-";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->first($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method")), "html", null, true);
        echo "\">
                ";
        // line 46
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Title");
        echo " / ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Excerpt");
        echo "
            </a>
        </th>

        <th>&nbsp;</th>

        <th class=\"username hidden-xs\"><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt\Twig\TwigExtension')->request("order") == "datecreated")) {
            echo "-";
        }
        echo "datecreated\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Meta");
        echo "</a></th>

        <th><a href=\"?\">";
        // line 54
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Actions");
        echo "</a></th>
        ";
    }

    // line 60
    public function block_listing_id($context, array $blocks = array())
    {
        // line 61
        echo "
        ";
        // line 62
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array()))) {
            // line 63
            echo "            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        ";
        } else {
            // line 65
            echo "            <td style=\"margin: 0; padding: 0;\"></td>
        ";
        }
        // line 67
        echo "        <td class=\"id hidden-xs\">№ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "</td>

    ";
    }

    // line 71
    public function block_listing_content($context, array $blocks = array())
    {
        // line 72
        echo "        <td class=\"excerpt ";
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            echo "large";
        }
        echo "\">
            ";
        // line 73
        $context["title"] = (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array()), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("no title …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("no title …")) . ")</em>")));
        // line 74
        echo "            <span>
                <strong class=\"visible-xs\">№ ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo ". </strong>
                <strong>
                    ";
        // line 77
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            // line 78
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
            echo "\">
                            ";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            // line 80
            echo "</a>
                    ";
        } else {
            // line 82
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                     ";
        }
        // line 84
        echo "                </strong>
                ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "excerpt", array(0 => ((isset($context["excerptlength"]) ? $context["excerptlength"] : null) - twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : null)))), "method"), "html", null, true);
        echo "
            </span>
        </td>
        <td class=\"listthumb\">
            ";
        // line 89
        if ( !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()))) {
            // line 90
            echo "                ";
            // line 91
            echo "                ";
            // line 92
            echo "                ";
            $context["thumb_height"] = twig_round(((isset($context["thumbsize"]) ? $context["thumbsize"] : null) * 0.75));
            // line 93
            echo "                ";
            $context["thumb_small"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), (isset($context["thumbsize"]) ? $context["thumbsize"] : null), (isset($context["thumb_height"]) ? $context["thumb_height"] : null), "c");
            // line 94
            echo "                ";
            $context["thumb_large"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), 1000, 800, "r");
            // line 95
            echo "                ";
            $context["thumb_title"] = (($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Image") . ": ") . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()));
            // line 96
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_large"]) ? $context["thumb_large"] : null), "html", null, true);
            echo "\" class=\"magnific\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_title"]) ? $context["thumb_title"] : null), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["thumb_small"]) ? $context["thumb_small"] : null), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["thumbsize"]) ? $context["thumbsize"] : null), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_height"]) ? $context["thumb_height"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Thumbnail");
            echo "\">
                </a>
            ";
        }
        // line 100
        echo "        </td>
    ";
    }

    // line 104
    public function block_listing_meta($context, array $blocks = array())
    {
        // line 105
        echo "            <td class=\"username hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                ";
        // line 107
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 108
            echo "                    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                ";
        } else {
            // line 110
            echo "                    <s>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), 15);
            echo "</s>
                ";
        }
        // line 111
        echo "<br>
                ";
        // line 112
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "timed")) {
            // line 113
            echo "                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> <time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "</time><br>
                ";
        } else {
            // line 115
            echo "                    <i class=\"fa fa-circle status-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
            echo " fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "%x");
            echo "<br>
                ";
        }
        // line 117
        echo "
                ";
        // line 118
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true) &&  !($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array()) === false))) {
            // line 119
            echo "                    <i class=\"fa fa-sort fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Order: %sort%", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array())));
            echo "<br>
                ";
        }
        // line 121
        echo "            </td>
        ";
    }

    // line 125
    public function block_listing_actions($context, array $blocks = array())
    {
        // line 126
        echo "        <td class=\"actions\">
            <div class=\"btn-group\">
                ";
        // line 128
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            // line 129
            echo "                <a class=\"btn btn-default btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-edit\"></i> ";
            // line 130
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Edit");
            echo "
                </a>
                ";
        }
        // line 133
        echo "                <button class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">

                    <i class=\"fa fa-info-sign\"></i>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu pull-right\">
                ";
        // line 139
        if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "published") && $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array(), "any", true, true))) {
            // line 140
            echo "                    <li>
                        <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
                            <i class=\"fa fa-external-link-square\"></i> ";
            // line 142
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View on site");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 146
        echo "                ";
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation", array())) {
            // line 147
            echo "                    <li>
                        <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("relatedto", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-link\"></i> ";
            // line 149
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View related content");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 153
        echo "

                ";
        // line 155
        $context["__internal_1748447246372d50080e3c766e4a8cb2b4ea2234f4eea40165c7bf9c2eec564f"] = $this;
        // line 156
        echo "                ";
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            // line 157
            echo "                    ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
                // line 158
                echo "                        ";
                if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "publish", array())) {
                    // line 159
                    echo "                        <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "publish", "fa-circle status-published", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.publish", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))));
                    echo "</li>
                        ";
                }
                // line 161
                echo "                    ";
            } else {
                // line 162
                echo "                        ";
                if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "depublish", array())) {
                    // line 163
                    echo "                        <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "held", "fa-circle status-held", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Change status to 'held'"));
                    echo "</li>
                        <li>";
                    // line 164
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "draft", "fa-circle status-draft", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Change status to 'draft'"));
                    echo "</li>

                        ";
                }
                // line 167
                echo "                    ";
            }
            // line 168
            echo "                    ";
            if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "create", array())) {
                // line 169
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "duplicate" => 1)), "html", null, true);
                echo "\">
                        <i class=\"fa fa-copy\"></i> ";
                // line 170
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.duplicate", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array())));
                echo "</a></li>
                    ";
            }
            // line 172
            echo "                    ";
            if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array())) {
                // line 173
                echo "                    <li>";
                echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "delete", "fa-trash", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute(                // line 175
(isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))), (("Are you sure you want to delete '" . $this->getAttribute(                // line 176
(isset($context["content"]) ? $context["content"] : null), "getTitle", array())) . "'?"));
                echo "
                    </li>

                    ";
            }
            // line 180
            echo "                    <li class=\"divider\"></li>
                ";
        }
        // line 182
        echo "                    <li><a class=\"nolink\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Author:");
        echo " <strong><i class=\"fa fa-user\"></i>
                        ";
        // line 183
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 184
            echo "                            ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                        ";
        } else {
            // line 186
            echo "                            <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), "html", null, true);
            echo " </s>
                        ";
        }
        // line 187
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 188
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Current status:");
        echo "
                        <strong>";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 190
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Slug:");
        echo "
                        <code title=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), 24);
        echo "</code></a></li>
                    <li><a class=\"nolink\">";
        // line 192
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Created on:");
        echo "
                        <i class=\"fa fa-asterisk\"></i> ";
        // line 193
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 194
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Published on:");
        echo "
                        <i class=\"fa fa-calendar\"></i> ";
        // line 195
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 196
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Last edited on:");
        echo "
                        <i class=\"fa fa-refresh\"></i> ";
        // line 197
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array()));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 199
            echo "                        ";
            if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                // line 200
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 201
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trim(twig_join_filter($context["values"], ", "), 24);
                echo "</a></li>
                        ";
            } else {
                // line 203
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "singular_name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 204
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trim($this->env->getExtension('Bolt\Twig\TwigExtension')->first($context["values"]), 24);
                echo "</a></li>
                        ";
            }
            // line 206
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                </ul>
            </div>

        </td>
    ";
    }

    public function getTemplateName()
    {
        return "_base/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 207,  634 => 206,  629 => 204,  624 => 203,  619 => 201,  614 => 200,  611 => 199,  607 => 198,  603 => 197,  599 => 196,  595 => 195,  591 => 194,  587 => 193,  583 => 192,  577 => 191,  573 => 190,  569 => 189,  565 => 188,  562 => 187,  556 => 186,  550 => 184,  548 => 183,  543 => 182,  539 => 180,  532 => 176,  531 => 175,  529 => 173,  526 => 172,  521 => 170,  516 => 169,  513 => 168,  510 => 167,  504 => 164,  499 => 163,  496 => 162,  493 => 161,  487 => 159,  484 => 158,  481 => 157,  478 => 156,  476 => 155,  472 => 153,  465 => 149,  461 => 148,  458 => 147,  455 => 146,  448 => 142,  444 => 141,  441 => 140,  439 => 139,  431 => 133,  425 => 130,  420 => 129,  418 => 128,  414 => 126,  411 => 125,  406 => 121,  400 => 119,  398 => 118,  395 => 117,  387 => 115,  377 => 113,  375 => 112,  372 => 111,  366 => 110,  360 => 108,  358 => 107,  354 => 105,  351 => 104,  346 => 100,  334 => 97,  327 => 96,  324 => 95,  321 => 94,  318 => 93,  315 => 92,  313 => 91,  311 => 90,  309 => 89,  302 => 85,  299 => 84,  293 => 82,  289 => 80,  287 => 79,  280 => 78,  278 => 77,  273 => 75,  270 => 74,  268 => 73,  261 => 72,  258 => 71,  250 => 67,  246 => 65,  242 => 63,  240 => 62,  237 => 61,  234 => 60,  228 => 54,  218 => 52,  207 => 46,  199 => 45,  192 => 41,  185 => 40,  182 => 39,  178 => 37,  172 => 35,  169 => 34,  166 => 33,  160 => 10,  154 => 212,  152 => 125,  149 => 124,  146 => 123,  143 => 104,  141 => 103,  138 => 102,  136 => 71,  133 => 70,  131 => 60,  120 => 59,  117 => 58,  113 => 56,  111 => 33,  108 => 32,  106 => 31,  103 => 30,  100 => 29,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  83 => 23,  80 => 21,  74 => 17,  68 => 15,  62 => 13,  60 => 12,  54 => 11,  50 => 10,  42 => 8,  37 => 7,  35 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '_macro/_macro.twig' as macro %}

{% set modifiable = permissions.create or permissions.edit or permissions.delete or permissions.publish or permissions.depublish %}

{# If we have 'grouping', print the row with the groupname. #}
{% if not compact and content.group.name is defined and (loop.first or content.group.name != lastgroup) and request('order') == '' %}
    {% if not loop.first %}</tbody>{% endif %}
    <tbody {% if modifiable %}class=\"sortable\"{% endif %}>
    <tr class=\"grouping\">
        <th colspan=\"{% block listing_columns %}6{% endblock %}\">
            <h3 {% if loop.first %}class=\"first\"{% endif %}>
                {% if content.group.name %}
                    {{ content.group.name }}
                {% else %}
                    {{ __('(no group)') }}
                {% endif %}
            </h3>
        </th>
    </tr>
{% endif %}

{# print the header for the first row. #}
{% if not compact and (loop.first or (content.group.name is defined and content.group.name != lastgroup) and request('order') == '') %}
    {% set lastgroup = content.group.name|default %}
    {% if \"filter\" in app.request.query.all|keys %}
        {% set filter = \"filter=\" ~ app.request.query.all.filter ~ \"&\" %}
    {% else %}
        {% set filter = \"\" %}
    {% endif %}

    {% set link = \"?\" ~ filter ~ \"order=\" %}
    <tr>
        {% block listing_header %}
        {% if not compact and modifiable %}
            <th class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\" title=\"{{ __('Select all') }}\" /></th>
        {% else %}
            <th style=\"margin: 0; padding: 0;\"></th>
        {% endif %}

        <th class=\"hidden-xs\"><a href=\"{{ link }}{% if request('order') == 'id' %}-{% endif %}id\">
            {{ __('Id') }}
        </a></th>

        <th style=\"width:80%\">
            <a href=\"{{ link }}{% if request('order') == content.TitleColumnName()|first %}-{% endif %}{{ content.TitleColumnName()|first }}\">
                {{ __('Title') }} / {{ __('Excerpt') }}
            </a>
        </th>

        <th>&nbsp;</th>

        <th class=\"username hidden-xs\"><a href=\"{{ link }}{% if request('order') == \"datecreated\" %}-{% endif %}datecreated\">{{ __('Meta') }}</a></th>

        <th><a href=\"?\">{{ __('Actions') }}</a></th>
        {% endblock %}
    </tr>
{% endif %}

<tr {% if content.status!='published' %}class=\"dim\"{% endif %}{% if not compact and modifiable %} id=\"item_{{ content.id }}\"{% endif %}>
    {% block listing_id %}

        {% if not compact and permissions.delete %}
            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        {% else %}
            <td style=\"margin: 0; padding: 0;\"></td>
        {% endif %}
        <td class=\"id hidden-xs\">№ {{ content.id }}</td>

    {% endblock %}

    {% block listing_content %}
        <td class=\"excerpt {% if not compact %}large{% endif %}\">
            {% set title = content.getTitle|default(\"<em>(\" ~ __(\"no title …\") ~ \")</em>\")|raw %}
            <span>
                <strong class=\"visible-xs\">№ {{ content.id }}. </strong>
                <strong>
                    {% if modifiable %}
                        <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\" title=\"Slug: {{ content.slug }}\">
                            {{ title -}}
                        </a>
                    {% else %}
                        {{ title }}
                     {% endif %}
                </strong>
                {{ content.excerpt(excerptlength - title|length) }}
            </span>
        </td>
        <td class=\"listthumb\">
            {% if content.getImage is not empty %}
                {# Hack to add alt attribute #}
                {#{ content.getImage|popup(thumbsize, thumbsize * 0.75, 'c') }#}
                {% set thumb_height = (thumbsize * 0.75)|round %}
                {% set thumb_small = content.getImage|thumbnail(thumbsize, thumb_height, 'c') %}
                {% set thumb_large = content.getImage|thumbnail(1000, 800, 'r') %}
                {% set thumb_title = __('Image') ~ ': ' ~ content.getImage %}
                <a href=\"{{ thumb_large }}\" class=\"magnific\" title=\"{{ thumb_title }}\">
                    <img src=\"{{ thumb_small }}\" width=\"{{ thumbsize }}\" height=\"{{ thumb_height }}\" alt=\"{{ __('Thumbnail') }}\">
                </a>
            {% endif %}
        </td>
    {% endblock %}

    {% if not compact %}
        {% block listing_meta %}
            <td class=\"username hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                {% if content.user.displayname is defined %}
                    {{ content.user.displayname|trimtext(15) }}
                {% else %}
                    <s>{{ content.values.ownerid|trimtext(15) }}</s>
                {% endif %}<br>
                {% if content.status==\"timed\" %}
                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> <time class=\"moment\" datetime=\"{{ content.datepublish|date(\"c\") }}\" title=\"{{ content.datepublish }}\">{{ content.datepublish }}</time><br>
                {% else %}
                    <i class=\"fa fa-circle status-{{ content.status }} fa-fw\"></i> {{ content.datepublish|localdate('%x') }}<br>
                {% endif %}

                {% if content.sortorder is defined and content.sortorder is not sameas(false) %}
                    <i class=\"fa fa-sort fa-fw\"></i> {{ __('Order: %sort%',{'%sort%': content.sortorder}) }}<br>
                {% endif %}
            </td>
        {% endblock %}
    {% endif %}

    {% block listing_actions %}
        <td class=\"actions\">
            <div class=\"btn-group\">
                {% if modifiable %}
                <a class=\"btn btn-default btn-xs\" href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\">
                    <i class=\"fa fa-edit\"></i> {{ __('Edit') }}
                </a>
                {% endif %}
                <button class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">

                    <i class=\"fa fa-info-sign\"></i>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu pull-right\">
                {% if content.status == \"published\" and content.link is defined %}
                    <li>
                        <a href=\"{{ content.link }}\" target=\"_blank\">
                            <i class=\"fa fa-external-link-square\"></i> {{ __('View on site') }}
                        </a>
                    </li>
                {% endif %}
                {% if content.relation %}{# i.e. we're viewing this as \"related content\" on the \"edit record\" page. #}
                    <li>
                        <a href=\"{{ path('relatedto', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\">
                            <i class=\"fa fa-link\"></i> {{ __('View related content') }}
                        </a>
                    </li>
                {% endif %}


                {% from _self import actionform %}
                {% if modifiable %}
                    {% if content.status != 'published' %}
                        {% if permissions.publish %}
                        <li>{{ macro.actionform(content, 'publish', 'fa-circle status-published', __('contenttypes.generic.publish',{'%contenttype%':content.contenttype.slug})) }}</li>
                        {% endif %}
                    {% else %}
                        {% if permissions.depublish %}
                        <li>{{ macro.actionform(content, 'held', 'fa-circle status-held', __(\"Change status to 'held'\")) }}</li>
                        <li>{{ macro.actionform(content, 'draft', 'fa-circle status-draft', __(\"Change status to 'draft'\")) }}</li>

                        {% endif %}
                    {% endif %}
                    {% if permissions.create %}
                    <li><a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id, 'duplicate': 1}) }}\">
                        <i class=\"fa fa-copy\"></i> {{ __('contenttypes.generic.duplicate', {'%contenttype%': content.contenttype.slug}) }}</a></li>
                    {% endif %}
                    {% if permissions.delete %}
                    <li>{{ macro.actionform(content, 'delete',
                                          'fa-trash',
                                          __('contenttypes.generic.delete', {'%contenttype%': content.contenttype.slug}),
                                          \"Are you sure you want to delete '\" ~ content.getTitle ~ \"'?\" ) }}
                    </li>

                    {% endif %}
                    <li class=\"divider\"></li>
                {% endif %}
                    <li><a class=\"nolink\">{{ __('Author:') }} <strong><i class=\"fa fa-user\"></i>
                        {% if content.user.displayname is defined %}
                            {{ content.user.displayname|trimtext(15) }}
                        {% else %}
                            <s>user {{ content.values.ownerid }} </s>
                        {% endif %}</strong></a></li>
                    <li><a class=\"nolink\">{{ __('Current status:') }}
                        <strong>{{ content.status }}</strong></a></li>
                    <li><a class=\"nolink\">{{ __('Slug:') }}
                        <code title=\"{{ content.slug }}\">{{ content.slug|trimtext(24) }}</code></a></li>
                    <li><a class=\"nolink\">{{ __('Created on:') }}
                        <i class=\"fa fa-asterisk\"></i> {{ content.datecreated|date(\"Y-m-d H:i\") }}</a></li>
                    <li><a class=\"nolink\">{{ __('Published on:') }}
                        <i class=\"fa fa-calendar\"></i> {{ content.datepublish|date(\"Y-m-d H:i\") }}</a></li>
                    <li><a class=\"nolink\">{{ __('Last edited on:') }}
                        <i class=\"fa fa-refresh\"></i> {{ content.datechanged|date(\"Y-m-d H:i\") }}</a></li>
                    {% for taxonomyslug, values in content.taxonomy %}
                        {% if values|length > 1 %}
                            <li><a class=\"nolink\">{{ config.get('taxonomy')[taxonomyslug].name }}:
                                <i class=\"fa fa-tag\"></i> {{ values|join(\", \")|trimtext(24) }}</a></li>
                        {% else %}
                            <li><a class=\"nolink\">{{ config.get('taxonomy')[taxonomyslug].singular_name }}:
                                <i class=\"fa fa-tag\"></i> {{ values|first|trimtext(24) }}</a></li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>

        </td>
    {% endblock %}

</tr>
", "_base/_listing.twig", "/var/www/vendor/bolt/bolt/app/view/twig/_base/_listing.twig");
    }
}
