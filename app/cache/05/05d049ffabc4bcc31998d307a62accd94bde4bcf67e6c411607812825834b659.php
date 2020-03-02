<?php

/* users/_roles-permissons.twig */
class __TwigTemplate_59a6bdf93c97e7a75068596f7449869822a074ed78ffdd1c2adc9389fdd54da3 extends Twig_Template
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
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("The settings for roles and permissions are stored in <code>%permissions%</code>.", array("%permissions%" => "permissions.yml"));
        echo "
</p>
<a class=\"btn btn-tertiary btn-small\" href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("roles");
        echo "\">
    ";
        // line 5
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View Roles");
        echo "
</a>
<a class=\"btn btn-tertiary btn-small\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fileedit", array("namespace" => "config", "file" => "permissions.yml")), "html", null, true);
        echo "\">
    ";
        // line 8
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Edit Roles and Permissions");
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "users/_roles-permissons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
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
    {{ __('The settings for roles and permissions are stored in <code>%permissions%</code>.', {'%permissions%': 'permissions.yml'}) }}
</p>
<a class=\"btn btn-tertiary btn-small\" href=\"{{ path('roles') }}\">
    {{ __(\"View Roles\") }}
</a>
<a class=\"btn btn-tertiary btn-small\" href=\"{{ path('fileedit', {'namespace': 'config', 'file': 'permissions.yml'}) }}\">
    {{ __(\"Edit Roles and Permissions\") }}
</a>
", "users/_roles-permissons.twig", "/var/www/vendor/bolt/bolt/app/view/twig/users/_roles-permissons.twig");
    }
}
