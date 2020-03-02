<?php

/* _sub/_csrf_token.twig */
class __TwigTemplate_4f8085b265ba4cd9c037357d0404ab623284122c3683df6c97717ce3f131be46 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"bolt_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->token(), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "_sub/_csrf_token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"hidden\" name=\"bolt_csrf_token\" value=\"{{ token() }}\">
", "_sub/_csrf_token.twig", "/var/www/vendor/bolt/bolt/app/view/twig/_sub/_csrf_token.twig");
    }
}
