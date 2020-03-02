<?php

/* _sub_searchbox.twig */
class __TwigTemplate_c1dd97e157edd38b0b113fe0f99d76a0565464f767ab1d82601fb45f5fce5880 extends Twig_Template
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
        echo "<li class=\"divider\"></li>
<li class=\"has-form\">
    <form method=\"get\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "search\" id=\"searchform\" enctype=\"text/plain\">
          <div class=\"row collapse\">
            <div class=\"large-8 small-9 columns\">
                <input type=\"search\" value=\"";
        // line 6
        if (array_key_exists("search", $context)) {
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Search …");
        echo "\" name=\"search\">
            </div>
            <div class=\"large-4 small-3 columns\">
                 <button type=\"submit\" class=\"alert button expand\">";
        // line 9
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Search");
        echo "</button>
            </div>
          </div>
  </form>
</li>
";
    }

    public function getTemplateName()
    {
        return "_sub_searchbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"divider\"></li>
<li class=\"has-form\">
    <form method=\"get\" action=\"{{ paths.root }}search\" id=\"searchform\" enctype=\"text/plain\">
          <div class=\"row collapse\">
            <div class=\"large-8 small-9 columns\">
                <input type=\"search\" value=\"{% if search is defined %}{{ search|escape }}{% endif %}\" placeholder=\"{{ __(\"Search …\") }}\" name=\"search\">
            </div>
            <div class=\"large-4 small-3 columns\">
                 <button type=\"submit\" class=\"alert button expand\">{{ __(\"Search\") }}</button>
            </div>
          </div>
  </form>
</li>
", "_sub_searchbox.twig", "/var/www/public/theme/base-2014/_sub_searchbox.twig");
    }
}
