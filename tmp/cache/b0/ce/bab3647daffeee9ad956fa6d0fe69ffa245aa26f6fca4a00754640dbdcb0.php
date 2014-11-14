<?php

/* extend.html */
class __TwigTemplate_b0cebab3647daffeee9ad956fa6d0fe69ffa245aa26f6fca4a00754640dbdcb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<style type=\"text/css\">
    .important { color: #336699; }
</style>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<h1>Index</h1>
<p class=\"important\">
    Welcome to my awesome homepage.
</p>
";
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        // line 20
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<p>This is ankit comment</p>
";
    }

    public function getTemplateName()
    {
        return "extend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  60 => 19,  52 => 13,  49 => 12,  40 => 6,  37 => 5,  31 => 3,);
    }
}
