<?php

/* hello.phtml */
class __TwigTemplate_8446bf05a9c2db3b051090a68dd73c502cd0573cfd83345c827bcbc1bb38bb3d extends Twig_Template
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
        echo "<html>
    <head><title>My first Twig template!</title></head>
    <body>

        <h3>";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", null, "Asia/Kolkata"), "html", null, true);
        echo "</h3> 


        ";
        // line 8
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()) == "admin")) {
            // line 9
            echo "        <br /><b>Hello, administrator!</b>
        ";
        } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()) == "user")) {
            // line 11
            echo "        <br /><b>Hello, user!</b>
        ";
        } else {
            // line 13
            echo "        <br /><b>You don't have a role defined.</b>
        ";
        }
        // line 15
        echo "

        <br />My name is ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo ".
        <br />My friends are:
        <ul>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["family"]) ? $context["family"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 21
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "firstname", array()));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "lastname", array()));
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        </ul>

        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "        item number ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ", 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        <br />

        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range("a", "z"));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 33
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : null), "html", null, true);
            echo ", 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        <br />

        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["myarray"]) ? $context["myarray"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 39
            echo "        <br />key: ";
            echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
            echo " 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
        <br />
        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myarray"]) ? $context["myarray"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 44
            echo "        <br />key: ";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo ", val: ";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "        <br /> no items in the array
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "
        <br />";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ",
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
        // line 54
        $this->env->loadTemplate("sidebar.html")->display($context);
        // line 55
        echo "
        ";
        // line 57
        echo "
        Everything will be automatically escaped in this block (using the HTML strategy)
        ";
        // line 60
        echo "



    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "hello.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 60,  176 => 57,  173 => 55,  171 => 54,  168 => 53,  160 => 51,  157 => 50,  153 => 49,  150 => 48,  143 => 46,  133 => 44,  128 => 43,  124 => 41,  115 => 39,  111 => 38,  106 => 35,  97 => 33,  93 => 32,  88 => 29,  79 => 27,  75 => 26,  70 => 23,  59 => 21,  55 => 20,  49 => 17,  45 => 15,  41 => 13,  37 => 11,  33 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
