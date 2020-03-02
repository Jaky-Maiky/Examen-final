<?php

/* editcontent/_aside-delete.twig */
class __TwigTemplate_a9fd58544b208508a194b7eaa29ec01186a9259d964dd4e3bc240659d16e3d7a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("editcontent.delete", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Are you sure you wish to delete this record? There is no undo.")), "html", null, true);
        echo "

<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-silent-danger\" id=\"sidebardeletebutton\">
        <i class=\"fa fa-trash\"></i> ";
        // line 5
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </button>

</div>
";
    }

    public function getTemplateName()
    {
        return "editcontent/_aside-delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ data('editcontent.delete', __('Are you sure you wish to delete this record? There is no undo.')) }}

<div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-silent-danger\" id=\"sidebardeletebutton\">
        <i class=\"fa fa-trash\"></i> {{ __('contenttypes.generic.delete', {'%contenttype%': context.contenttype.slug}) }}
    </button>

</div>
", "editcontent/_aside-delete.twig", "/var/www/vendor/bolt/bolt/app/view/twig/editcontent/_aside-delete.twig");
    }
}
