<?php

/* CompeteComBundle:StudyQuestions:search.html.twig */
class __TwigTemplate_fedd7e86051defbf52214781ddc1c9c0 extends Twig_Template
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
        echo "<h1>Search existing questions</h1>

    <form id=\"contactForm\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("studyquestions_result"), "html", null, true);
        echo "\" method=\"post\">
        
        Search keywords: <input type=\"text\" name=\"search\"><br>
        Grades: <select name=\"grade\" id=\"grade\">
\t\t\t<option>All Grades</option>
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : $this->getContext($context, "grades")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 12
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grade"]) ? $context["grade"] : $this->getContext($context, "grade")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grade"]) ? $context["grade"] : $this->getContext($context, "grade")), "name"), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo "                </select>        <br>
        Subjects: <select name=\"subject\" id=\"subject\">
                <option>All Subjects</option>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) ? $context["subjects"] : $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 18
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject")), "name"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "                </select><br>
                        
   
        <p>
            <button id=\"submit\" type=\"submit\">GO!</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("studyquestions"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CompeteComBundle:StudyQuestions:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  78 => 20,  67 => 18,  63 => 17,  58 => 14,  47 => 12,  43 => 11,  35 => 6,  31 => 4,  28 => 3,);
    }
}
