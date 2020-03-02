<?php

/* editcontent/_aside-preview.twig */
class __TwigTemplate_9cdb0b3520c11e4b8640e2ff23fec37fdb23986a2c2e1753d2df46f233617745 extends Twig_Template
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
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 2
            echo "<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-default\" id=\"sidebarpreviewbutton\" data-url=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()))), "html", null, true);
            echo "\">
        <i class=\"fa fa-external-link-square\"></i> ";
            // line 4
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Preview");
            echo "
    </button>

    ";
            // line 7
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 8
                echo "        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
            <li>
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link-square\"></i> ";
                // line 16
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View (saved version) on site");
                echo "</a></li>
                </a>
            </li>
        </ul>
    ";
            }
            // line 21
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  49 => 16,  45 => 15,  36 => 8,  34 => 7,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not context.contenttype.viewless|default(false) %}{# don't show for viewless contenttypes. #}
<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-default\" id=\"sidebarpreviewbutton\" data-url=\"{{ path('preview', {'contenttypeslug': context.contenttype.singular_slug}) }}\">
        <i class=\"fa fa-external-link-square\"></i> {{ __('Preview') }}
    </button>

    {% if context.content.status == \"published\" and context.content.link is defined %}
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
            <li>
                <a href=\"{{ context.content.link }}\" target=\"_blank\">
                    <i class=\"fa fa-external-link-square\"></i> {{ __('View (saved version) on site') }}</a></li>
                </a>
            </li>
        </ul>
    {% endif %}
</div>
{% endif %}
", "editcontent/_aside-preview.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/_aside-preview.twig");
    }
}
