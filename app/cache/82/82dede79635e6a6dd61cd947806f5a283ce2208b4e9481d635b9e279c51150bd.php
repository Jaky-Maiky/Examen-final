<?php

/* editcontent/_aside-status.twig */
class __TwigTemplate_f8deffe33786ac11a3a1cf89d2640853d32c60056be351faf8035e6da8055176 extends Twig_Template
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
        echo "<p>
    ";
        // line 2
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Current (saved) status:");
        echo "
    <a href=\"#statusselect\" id=\"lastsavedstatus\" title=\"";
        // line 3
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Click to change current status.");
        echo "\">
        <strong>
            <i class=\"fa fa-circle status-";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("none"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("none"))), "html", null, true);
        echo "\"></i>
            ";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()), array(), "array"), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("None"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("None"))), "html", null, true);
        echo "
        </strong>
    </a>
</p>

<p class=\"lastsaved\">
    ";
        // line 12
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()))) {
            // line 13
            echo "    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Saved on:");
            echo " <strong>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()), "%c");
            echo "</strong>
    <small>(";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "datetime", array(0 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array())), "method"), "html", null, true);
            echo ")</small></p>
";
        } else {
            // line 16
            echo "    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
";
        }
        // line 18
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  58 => 16,  53 => 14,  46 => 13,  44 => 12,  35 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>
    {{ __(\"Current (saved) status:\") }}
    <a href=\"#statusselect\" id=\"lastsavedstatus\" title=\"{{ __(\"Click to change current status.\") }}\">
        <strong>
            <i class=\"fa fa-circle status-{{ context.content.status|default(__(\"none\")) }}\"></i>
            {{ status_names[context.content.status]|default(__(\"None\")) }}
        </strong>
    </a>
</p>

<p class=\"lastsaved\">
    {% if context.content.id is not empty %}
    {{ __('Saved on:') }} <strong>{{ context.content.datechanged|localdate(\"%c\") }}</strong>
    <small>({{ macro.datetime(context.content.datechanged) }})</small></p>
{% else %}
    {{ __('contenttypes.generic.not-saved-yet', {'%contenttype%': context.contenttype.slug}) }}
{% endif %}
</p>
", "editcontent/_aside-status.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/_aside-status.twig");
    }
}
