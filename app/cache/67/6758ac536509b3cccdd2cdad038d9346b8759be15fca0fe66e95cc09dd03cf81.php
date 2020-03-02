<?php

/* dbcheck/_macros.twig */
class __TwigTemplate_f5852a323042d3d7190e4759308a8e9065484e1059bc153bd3e3d07de1eaf88a extends Twig_Template
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
    }

    // line 1
    public function getlist($__headline__ = null, $__list__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "headline" => $__headline__,
            "list" => $__list__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null)) > 0)) {
                // line 3
                echo "        <h4>";
                echo twig_escape_filter($this->env, (isset($context["headline"]) ? $context["headline"] : null), "html", null, true);
                echo "</h4>

        <ul>
            ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 7
                    echo "                <li>";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->decorateTT($context["item"]);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "        </ul>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "dbcheck/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  48 => 7,  44 => 6,  37 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro list(headline, list) %}
    {% if list|length > 0 %}
        <h4>{{ headline }}</h4>

        <ul>
            {% for item in list %}
                <li>{{ item|tt }}</li>
            {% endfor %}
        </ul>
    {% endif %}
{% endmacro %}
", "dbcheck/_macros.twig", "/var/www/vendor/bolt/bolt/app/view/twig/dbcheck/_macros.twig");
    }
}
