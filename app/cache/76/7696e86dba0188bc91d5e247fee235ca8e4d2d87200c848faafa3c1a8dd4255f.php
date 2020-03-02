<?php

/* nav/_secondary-filemanagement.twig */
class __TwigTemplate_e64fde10b14055b01c8c98466ace17929f451c8a2524dfd023971514b412a084 extends Twig_Template
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
        $context["sub"] = array(0 => array("icon" => "fa:folder-open-o", "label" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Uploaded files"), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", array("namespace" => "files", "path" => "")), "isallowed" => "files:uploads"), 1 => array("icon" => "fa:desktop", "label" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View/edit Templates"), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", array("namespace" => "theme", "path" => "")), "isallowed" => "files:theme"));
        // line 14
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:folder-open", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("File Management"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/FileManagement")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-filemanagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 15,  21 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set sub = [
    {
        icon: 'fa:folder-open-o',
        label: __('Uploaded files'),
        link: path('files', {'namespace': 'files', 'path': ''}),
        isallowed: 'files:uploads'
    }, {
        icon: 'fa:desktop',
        label: __('View/edit Templates'),
        link: path('files', {'namespace': 'theme', 'path': ''}),
        isallowed: 'files:theme'
    }
] %}

{{ nav.submenu('fa:folder-open', __('File Management'), sub, (page_nav == 'Settings/FileManagement')) }}
", "nav/_secondary-filemanagement.twig", "/var/www/vendor/bolt/bolt/app/view/twig/nav/_secondary-filemanagement.twig");
    }
}
