<?php

/* CompeteComBundle:TournamentQuestions:showunapproved.html.twig */
class __TwigTemplate_6c708dc16e7690c7ff3f70d7025c8131 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournamentquestions_approve", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
                <th>Approve it</th>
                <td><input type=\"checkbox\" name=\"approveit\"> </td>
            </tr>
            
            <tr>
                <th>Answers</th>
                ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answers"));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 28
            echo "                <td> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "choice"), "html", null, true);
            echo " </td>
                <td> <input type=\"checkbox\" name=\"rightanswer\" value=";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answer"]) ? $context["answer"] : $this->getContext($context, "answer")), "id"), "html", null, true);
            echo "> </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
        return "CompeteComBundle:TournamentQuestions:showunapproved.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 60,  97 => 43,  88 => 36,  85 => 31,  77 => 29,  72 => 28,  68 => 27,  56 => 18,  49 => 14,  42 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}
