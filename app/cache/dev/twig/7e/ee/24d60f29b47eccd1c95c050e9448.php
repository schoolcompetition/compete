<?php

/* CompeteComBundle:TournamentQuestions:new.html.twig */
class __TwigTemplate_7eee24d60f29b47eccd1c95c050e9448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
     
   
    function addAnswerFormDeleteLink(\$answerFormLi) {
    var \$removeFormA = \$('<a href=\"#\">delete this Answer</a>');
    \$answerFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        \$answerFormLi.remove();
    });
}
    function addAnswerForm(collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = collectionHolder.data('prototype');
    //alert(prototype);
    // get the new index
    var index = collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);
    //alert(newForm);
    // increase the index with one for the next item
     collectionHolder.data('index', index + 1);
     //collectionHolder.append(newForm);
    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<li></li>').html(newForm);
    \$newLinkLi.before(\$newFormLi);
    addAnswerFormDeleteLink(\$newFormLi);

}
jQuery(document).ready(function() {
       // Get the ul that holds the collection of tags
var collectionHolder = \$('ul.answers');

// setup an \"add a tag\" link
var \$addAnswerLink = \$('<a href=\"#\" class=\"add_Answers_link\">Add Answer</a>');
var \$newLinkLi = \$('<li></li>').append(\$addAnswerLink);
 // add a delete link to all of the existing tag form li elements
    collectionHolder.find('li').each(function() {
        addAnswerFormDeleteLink(\$(this));
    });
    // add the \"add a tag\" anchor and li to the tags ul
    collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    collectionHolder.data('index', collectionHolder.find(':input').length);

    \$addAnswerLink.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addAnswerForm(collectionHolder, \$newLinkLi);
    });


});
    </script>
";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "<h1>TournamentQuestions creation</h1>

    <form action=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournamentquestions_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
     ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subj"), 'row');
        echo "
     ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grade"), 'row');
        echo "
     ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'row');
        echo "
       
       <ul class=\"answers\" data-prototype=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answers"), "vars"), "prototype"), 'widget'), "html");
        echo "\">
           <li>        ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answers"));
        foreach ($context['_seq'] as $context["_key"] => $context["anserForm"]) {
            // line 81
            echo "               ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["anserForm"]) ? $context["anserForm"] : $this->getContext($context, "anserForm")), 'widget');
            echo "
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anserForm'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 83
        echo "      </li>                        
     </ul>  
     ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "           
                <p>
                    <button type=\"submit\">Create</button>
                </p>
     </form>

      
      
       
    
    
    
    
    <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tournamentquestions"), "html", null, true);
        echo "\">
                        Back to the list
                    </a>
                </li>
            </ul>

";
    }

    public function getTemplateName()
    {
        return "CompeteComBundle:TournamentQuestions:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 100,  150 => 85,  146 => 83,  137 => 81,  133 => 80,  129 => 79,  124 => 77,  120 => 76,  116 => 75,  110 => 74,  106 => 72,  103 => 70,  32 => 3,  29 => 2,);
    }
}
