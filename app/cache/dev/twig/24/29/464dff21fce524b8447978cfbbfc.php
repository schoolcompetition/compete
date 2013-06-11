<?php

/* CompeteComBundle:Default:role.html.twig */
class __TwigTemplate_2429464dff21fce524b8447978cfbbfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'documentReady' => array($this, 'block_documentReady'),
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
        echo "<h1>Registeration</h1>

Register as: <br><br>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("compete_selectrole"), "html", null, true);
        echo "\" method=\"get\">
    <input type=\"radio\" name=\"role\" value=\"s\" /> Student<br />
    <input type=\"radio\" name=\"role\" value=\"t\" /> Teacher<br />
    <input type=\"radio\" name=\"role\" value=\"sch\" /> School<br /><br>

</form>
<div id=\"displayData\"><img src=\" asset l";
        // line 13
        echo "img/info-red.png";
        echo " \"/> </div>
";
    }

    // line 15
    public function block_documentReady($context, array $blocks = array())
    {
        // line 16
        echo "\$(\"input[name='role']\").click(function(){
if (\$(\"input[name='role']:checked\").val() ==\"s\"){

    \$.post(

        '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("users_new", array("role" => "s")), "html", null, true);
        echo "', 


        function(response){

        \$(\"#displayData\").html(response);      \t\t
     
        return false\t\t\t

    });


}
else if(\$(\"input[name='role']:checked\").val() ==\"t\"){

        \$.post(

        '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("users_new", array("role" => "t")), "html", null, true);
        echo "', 


        function(response){

        \$(\"#displayData\").html(response);      \t\t
     
        return false\t\t\t

    });

}
else if(\$(\"input[name='role']:checked\").val() ==\"sch\"){

    
        \$.post(

        '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("schools_new"), "html", null, true);
        echo "', 


        function(response){

        \$(\"#displayData\").html(response);      \t\t
     
        return false\t\t\t

    });
}

});







\t  ";
    }

    public function getTemplateName()
    {
        return "CompeteComBundle:Default:role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 55,  82 => 38,  62 => 21,  55 => 16,  52 => 15,  46 => 13,  37 => 7,  32 => 4,  29 => 3,);
    }
}
