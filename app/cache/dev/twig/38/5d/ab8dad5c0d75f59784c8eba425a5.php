<?php

/* CompeteComBundle:Default:login.html.twig */
class __TwigTemplate_385dab8dad5c0d75f59784c8eba425a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("login_check"), "html", null, true);
        echo "\" method=\"post\">
        Email <input type=\"text\" name=\"_username\"><br><br>
    Password <input type=\"password\" name=\"'_password\"><br><br>
    <input type=\"submit\" value=\"login\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "CompeteComBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
