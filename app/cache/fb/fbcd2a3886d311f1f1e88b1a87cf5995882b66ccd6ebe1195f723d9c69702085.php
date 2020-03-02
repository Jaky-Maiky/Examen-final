<?php

/* files/_upload.twig */
class __TwigTemplate_3388ac0f7df2ec74d37e9b71f6c9dfe71f528c0961762fbcbf7713b970dbe17b extends Twig_Template
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
        echo "<form method=\"post\" id=\"filescreenuploader\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'enctype');
        echo ">
    <fieldset>
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'widget');
        echo "
        <div>
        <button type=\"submit\" class=\"btn btn-primary\" disabled>
            <i class=\"fa fa-fw fa-upload\"></i>
            <span>";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Upload file");
        echo "</span>
        </button>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "typepopover", array(), "method"), "html", null, true);
        echo "
        </div>
    </fieldset>
</form>

<script>
    \$(function() {
        \$('input[type=file]').addClass('btn-secondary').bootstrapFileInput();

        \$('input:file').change(
            function(){
                if (\$(this).val()) {
                    \$('button:submit').removeAttr('disabled');
                }
            }
        );

    });

</script>
";
    }

    public function getTemplateName()
    {
        return "files/_upload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  32 => 7,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"post\" id=\"filescreenuploader\" {{ form_enctype(context.form) }}>
    <fieldset>
        {{ form_widget(context.form) }}
        <div>
        <button type=\"submit\" class=\"btn btn-primary\" disabled>
            <i class=\"fa fa-fw fa-upload\"></i>
            <span>{{ __('Upload file') }}</span>
        </button>
        {{ macro.typepopover() }}
        </div>
    </fieldset>
</form>

<script>
    \$(function() {
        \$('input[type=file]').addClass('btn-secondary').bootstrapFileInput();

        \$('input:file').change(
            function(){
                if (\$(this).val()) {
                    \$('button:submit').removeAttr('disabled');
                }
            }
        );

    });

</script>
", "files/_upload.twig", "/var/www/vendor/bolt/bolt/app/view/twig/files/_upload.twig");
    }
}
