<?php

/* editcontent/_buttons.twig */
class __TwigTemplate_9c70429447e7bab234691c38a883fc24cfd9cca05a35c5ee25f284a628761020 extends Twig_Template
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
        // line 1
        echo "<div class=\"form-group\" style=\"margin-top: 40px;\">
    <div class=\"col-sm-12\">

        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"savecontinuebutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 6
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
            </button>
            <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savebutton\">
                        <i class=\"fa fa-flag\"></i> ";
        // line 15
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Save & return to overview");
        echo "
                    </button>
                </li>
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savenewbutton\">
                        <i class=\"fa fa-flag\"></i> ";
        // line 20
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Save & create new record");
        echo "
                    </button>
                </li>
            </ul>
        </div>

        ";
        // line 26
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 27
            echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary\" id=\"live-editor-button\">
                    <i class=\"fa fa-pencil\"></i> ";
            // line 29
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Live Edit");
            echo "
                </button>
            </div>
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 35
            echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default\" id=\"previewbutton\" data-url=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-external-link-square\"></i> ";
            // line 37
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Preview");
            echo "
                </button>
                ";
            // line 39
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 40
                echo "                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> ";
                // line 47
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View (saved version) on site");
                echo "</a></li>
                        </a>
                        </li>
                    </ul>
                ";
            }
            // line 52
            echo "            </div>
        ";
        }
        // line 54
        echo "

        <p class=\"lastsaved\" style=\"margin-top: 12px;\">
            ";
        // line 57
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()) != 0)) {
            // line 58
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Saved on:");
            echo " <strong>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()), "%c");
            echo "</strong> <small>(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "datetime", array(0 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array())), "method"), "html", null, true);
            echo ")</small></p>
            ";
        } else {
            // line 60
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
            ";
        }
        // line 62
        echo "        </p>

    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 62,  128 => 60,  118 => 58,  116 => 57,  111 => 54,  107 => 52,  99 => 47,  95 => 46,  87 => 40,  85 => 39,  80 => 37,  76 => 36,  73 => 35,  71 => 34,  68 => 33,  61 => 29,  57 => 27,  55 => 26,  46 => 20,  38 => 15,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-group\" style=\"margin-top: 40px;\">
    <div class=\"col-sm-12\">

        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"savecontinuebutton\">
                <i class=\"fa fa-flag\"></i> {{ __('contenttypes.generic.save', {'%contenttype%': context.contenttype.slug}) }}
            </button>
            <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savebutton\">
                        <i class=\"fa fa-flag\"></i> {{ __('Save & return to overview') }}
                    </button>
                </li>
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savenewbutton\">
                        <i class=\"fa fa-flag\"></i> {{ __('Save & create new record') }}
                    </button>
                </li>
            </ul>
        </div>

        {% if context.contenttype.liveeditor is not defined or context.contenttype.liveeditor %}
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary\" id=\"live-editor-button\">
                    <i class=\"fa fa-pencil\"></i> {{ __('Live Edit') }}
                </button>
            </div>
        {% endif %}

        {% if not context.contenttype.viewless|default(false) %}{# don't show for viewless contenttypes. #}
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default\" id=\"previewbutton\" data-url=\"{{ path('preview', {'contenttypeslug': context.contenttype.singular_slug}) }}\">
                    <i class=\"fa fa-external-link-square\"></i> {{ __('Preview') }}
                </button>
                {% if context.content.status == \"published\" and context.content.link is defined %}
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"{{ context.content.link }}\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> {{ __('View (saved version) on site') }}</a></li>
                        </a>
                        </li>
                    </ul>
                {% endif %}
            </div>
        {% endif %}


        <p class=\"lastsaved\" style=\"margin-top: 12px;\">
            {% if context.content.id != 0 %}
                {{ __('Saved on:') }} <strong>{{ context.content.datechanged|localdate(\"%c\") }}</strong> <small>({{ macro.datetime(context.content.datechanged) }})</small></p>
            {% else %}
                {{ __('contenttypes.generic.not-saved-yet', {'%contenttype%': context.contenttype.slug}) }}
            {% endif %}
        </p>

    </div>

</div>
", "editcontent/_buttons.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/_buttons.twig");
    }
}
