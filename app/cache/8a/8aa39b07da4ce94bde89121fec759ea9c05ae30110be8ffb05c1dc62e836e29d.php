<?php

/* nav/_secondary-search.twig */
class __TwigTemplate_fa09c4912d72dce416314c0a9a8348caf3181c0b21e9ffd420ef511f448ae367 extends Twig_Template
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
        echo "<li class=\"search\">
    <form class=\"navbar-form\" role=\"search\">
        <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback\">
            <input type=\"text\" class=\"form-control omnisearch\" placeholder=\"";
        // line 4
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Find");
        echo "…\">
        </div>
    </form>
</li>
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"search\">
    <form class=\"navbar-form\" role=\"search\">
        <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback\">
            <input type=\"text\" class=\"form-control omnisearch\" placeholder=\"{{ __('Find') }}…\">
        </div>
    </form>
</li>
", "nav/_secondary-search.twig", "/var/www/vendor/bolt/bolt/app/view/twig/nav/_secondary-search.twig");
    }
}
