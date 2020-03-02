<?php

/* _footer.twig */
class __TwigTemplate_2eb1d3a3708d1ed50334da2b1ab7d14c07aadce21a650762cf890db1cdde61ef extends Twig_Template
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
        echo "
<!-- Footer -->
        <footer class=\"large-12 columns\">
            <hr />
            <div class=\"large-6 columns\">
                <p>";
        // line 6
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.", array("%url%" => "http://bolt.cm"));
        echo "
                </p>
            </div>
            <div class=\"large-6 columns\">
                <ul class=\"inline-list\">
                    ";
        // line 11
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->menu($this->env);
        echo "
                </ul>
            </div>
        </footer>
    </div>
</div>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/jquery-2.2.3.min.js\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/foundation.min.js\"></script>
    ";
        // line 21
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/jquery.magnific-popup.min.js\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/app.js\" async defer></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  51 => 21,  47 => 18,  43 => 17,  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!-- Footer -->
        <footer class=\"large-12 columns\">
            <hr />
            <div class=\"large-6 columns\">
                <p>{{ __(\"This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.\",{'%url%':'http://bolt.cm'}) }}
                </p>
            </div>
            <div class=\"large-6 columns\">
                <ul class=\"inline-list\">
                    {{ menu() }}
                </ul>
            </div>
        </footer>
    </div>
</div>
    <script src=\"{{ paths.theme }}javascripts/jquery-2.2.3.min.js\"></script>
    <script src=\"{{ paths.theme }}javascripts/foundation.min.js\"></script>
    {# Bolt comes with Magnific Popup, as it's used in the backend. We can use it here, or you can
       just swap it out for the image-viewing script of your choice. Or delete it altogether. #}
    <script src=\"{{ paths.theme }}javascripts/jquery.magnific-popup.min.js\"></script>
    <script src=\"{{ paths.theme }}javascripts/app.js\" async defer></script>
</body>
</html>
", "_footer.twig", "/var/www/public/theme/base-2014/_footer.twig");
    }
}
