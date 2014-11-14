<?php

/* base.html */
class __TwigTemplate_0174e77033fc06d77fb54d170eddee574f4c553a9c42732b663ee1db5af230dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>

        ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "
    </head>

    <body>

        <div id=\"content\">";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        ";
        // line 19
        $context["forms"] = $this->env->loadTemplate("forms.html");
        // line 20
        echo "
        <p>";
        // line 21
        echo $context["forms"]->getinput("username");
        echo "</p>

        ";
        // line 23
        $context["__internal_f6d8178bad3d64972d26a7d8b8d9ba0ce5b1a7f7ff66459a5e63c5f4e08b3ac3"] = $this->env->loadTemplate("forms.html");
        // line 24
        echo "
        <dl>

            <dt>Username</dt>

            <dd>";
        // line 29
        echo $context["__internal_f6d8178bad3d64972d26a7d8b8d9ba0ce5b1a7f7ff66459a5e63c5f4e08b3ac3"]->getinput("username");
        echo "</dd>

            <dt>Password</dt>

            <dd>";
        // line 33
        echo $context["__internal_f6d8178bad3d64972d26a7d8b8d9ba0ce5b1a7f7ff66459a5e63c5f4e08b3ac3"]->getinput("password", "", "password");
        echo "</dd>
        </dl>


        {

        <div id=\"footer\">

            ";
        // line 41
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "            
        </div>
        ";
        // line 50
        echo twig_escape_filter($this->env, (("foo " . (1 + 2)) . " baz"), "html", null, true);
        echo "
        ";
        // line 51
        ob_start();
        // line 52
        echo "
        <div>

            <strong>foo bar</strong>

        </div>

        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 60
        echo "
    </body>
</html>



";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "
        <link rel=\"stylesheet\" href=\"style.css\" />

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>

        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "


            &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.

            ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 42,  136 => 41,  131 => 18,  120 => 10,  115 => 7,  112 => 6,  102 => 60,  92 => 52,  90 => 51,  86 => 50,  82 => 48,  80 => 41,  69 => 33,  62 => 29,  55 => 24,  53 => 23,  48 => 21,  45 => 20,  43 => 19,  39 => 18,  32 => 13,  30 => 6,  23 => 1,);
    }
}
