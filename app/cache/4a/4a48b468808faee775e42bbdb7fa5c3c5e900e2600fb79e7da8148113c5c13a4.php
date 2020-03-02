<?php

/* users/_sessions.twig */
class __TwigTemplate_916d6a08eee2d8438ddd8ce8610b9148f69db03582b85fd5733b535036bdfb13 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
    <table class=\"table table-striped dashboardlisting\">
        <thead>
            <tr>
                <th>";
        // line 5
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Username");
        echo "</th>
                <th>";
        // line 6
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Last seen");
        echo "</th>
                <th>";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Session expires");
        echo "</th>
                <th>";
        // line 8
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("IP address");
        echo "</th>
                <th>";
        // line 9
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Browser / platform");
        echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "sessions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "username", array()), "html", null, true);
            echo "</td>
                    <td>
                        <time class=\"moment\" datetime=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "lastseen", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "lastseen", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "lastseen", array()), "html", null, true);
            echo "</time>
                    </td>
                    <td>
                        <time class=\"moment\" datetime=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "validity", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "validity", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "validity", array()), "html", null, true);
            echo "</time>
                    </td>
                    <td>
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "ip", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <span class=\"useragent label info-pop\" data-html=\"true\" data-content=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "useragent", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "browser", array()), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "users/_sessions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  87 => 27,  81 => 24,  71 => 21,  61 => 18,  56 => 16,  53 => 15,  49 => 14,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"table-responsive\">
    <table class=\"table table-striped dashboardlisting\">
        <thead>
            <tr>
                <th>{{ __('Username') }}</th>
                <th>{{ __('Last seen') }}</th>
                <th>{{ __('Session expires') }}</th>
                <th>{{ __('IP address') }}</th>
                <th>{{ __('Browser / platform') }}</th>
            </tr>
        </thead>

        <tbody>
            {% for session in context.sessions %}
                <tr>
                    <td>{{ session.username }}</td>
                    <td>
                        <time class=\"moment\" datetime=\"{{ session.lastseen|date(\"c\") }}\" title=\"{{ session.lastseen }}\">{{ session.lastseen }}</time>
                    </td>
                    <td>
                        <time class=\"moment\" datetime=\"{{ session.validity|date(\"c\") }}\" title=\"{{ session.validity }}\">{{ session.validity }}</time>
                    </td>
                    <td>
                        {{ session.ip }}
                    </td>
                    <td>
                        <span class=\"useragent label info-pop\" data-html=\"true\" data-content=\"{{ session.useragent }}\">{{ session.browser }}</span>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
", "users/_sessions.twig", "/var/www/vendor/bolt/bolt/app/view/twig/users/_sessions.twig");
    }
}
