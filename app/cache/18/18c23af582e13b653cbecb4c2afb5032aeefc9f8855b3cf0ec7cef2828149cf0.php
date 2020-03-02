<?php

/* _macro/_files_path.twig */
class __TwigTemplate_511c2626a04f495d5313ffea57b14e4f9ac8749e996a65c720e92dca2c5a77c6 extends Twig_Template
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
    public function getfiles_path($__pathsegments__ = null, $__namespace__ = null, $__pathoptions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pathsegments" => $__pathsegments__,
            "namespace" => $__namespace__,
            "pathoptions" => $__pathoptions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["namespace_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", (isset($context["pathoptions"]) ? $context["pathoptions"] : null));
            // line 3
            echo "    <p>
        ";
            // line 4
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Path:");
            echo "
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["namespace_path"]) ? $context["namespace_path"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
            echo "</a>

        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pathsegments"]) ? $context["pathsegments"] : null));
            foreach ($context['_seq'] as $context["path"] => $context["segment"]) {
                // line 8
                echo "            /
            ";
                // line 9
                $context["pathoptions"] = twig_array_merge((isset($context["pathoptions"]) ? $context["pathoptions"] : null), array("path" => $context["path"], "namespace" => (isset($context["namespace"]) ? $context["namespace"] : null)));
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", (isset($context["pathoptions"]) ? $context["pathoptions"] : null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["segment"], "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </p>
";
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
        return "_macro/_files_path.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  61 => 10,  59 => 9,  56 => 8,  52 => 7,  45 => 5,  41 => 4,  38 => 3,  35 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro files_path(pathsegments, namespace, pathoptions) %}
    {% set namespace_path = path('files', pathoptions) %}
    <p>
        {{ __('Path:') }}
        <a href=\"{{ namespace_path }}\">{{ namespace }}</a>

        {% for path, segment in pathsegments %}
            /
            {% set pathoptions = pathoptions|merge({'path': path, 'namespace': namespace}) %}
            <a href=\"{{ path('files', pathoptions) }}\">{{ segment }}</a>
        {% endfor %}
    </p>
{% endmacro %}
", "_macro/_files_path.twig", "/var/www/vendor/bolt/bolt/app/view/twig/_macro/_files_path.twig");
    }
}
