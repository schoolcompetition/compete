<?php

/* CompeteComBundle:TournamentQuestions:approve.html.twig */
class __TwigTemplate_d08916f624b7f37e888cd875b0d387cb extends Twig_Template
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
        echo "<h1>TournamentQuestions</h1>
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournamentquestions_approveupdate", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" >
    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Question</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "question"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                
                <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "approveit"), 'row');
        echo " </td>
            </tr>
            
            <tr>
                <th>Answers</th>
               ";
        // line 29
        echo "                <td> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rightanswer"), 'row');
        echo " </td>
                ";
        // line 31
        echo "            </tr>            
            ";
        // line 36
        echo "        
        </tbody>
    </table>
            <input type=\"submit\" value=\"submit\" />
        </form>
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournamentquestions_unapproved"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    ";
        // line 60
        echo "    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CompeteComBundle:TournamentQuestions:approve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 60,  88 => 43,  79 => 36,  76 => 31,  71 => 29,  63 => 22,  56 => 18,  49 => 14,  42 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}
