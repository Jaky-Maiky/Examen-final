<?php

/* editcontent/_aside-live-editor.twig */
class __TwigTemplate_6930a382e31f75e40815c4e633ce3a58738521dab62bfa93e2097a30b9fc3f7d extends Twig_Template
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
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 2
            echo "<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-tertiary\" id=\"sidebar-live-editor-button\">
        <i class=\"fa fa-pencil\"></i> ";
            // line 4
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Live Edit");
            echo "
    </button>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-live-editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if context.contenttype.liveeditor is not defined or context.contenttype.liveeditor %}{# don't show for viewless contenttypes. #}
<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-tertiary\" id=\"sidebar-live-editor-button\">
        <i class=\"fa fa-pencil\"></i> {{ __('Live Edit') }}
    </button>
</div>
{% endif %}
", "editcontent/_aside-live-editor.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/_aside-live-editor.twig");
    }
}
