<?php

/* forms.html */
class __TwigTemplate_c491fdfe45c6fc631960a435ec5e09e17497eca5d8cc65a60d455c86bdcc54a7 extends Twig_Template
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
        // line 6
        echo "
";
    }

    // line 1
    public function getinput($_name = null, $_value = null, $_type = null, $_size = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "type" => $_type,
            "size" => $_size,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
<input type=\"";
            // line 3
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null));
            echo "\"
 size=\"";
            // line 4
            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : null), 20)) : (20)), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  41 => 3,  38 => 2,  24 => 1,  19 => 6,);
    }
}
