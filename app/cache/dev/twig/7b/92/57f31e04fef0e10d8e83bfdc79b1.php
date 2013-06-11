<?php

/* ::base.html.twig */
class __TwigTemplate_7b9257f31e04fef0e10d8e83bfdc79b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
            'javascripts' => array($this, 'block_javascripts'),
            'documentReady' => array($this, 'block_documentReady'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Madison Template</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width\">
\t
\t\t<!-- CSS -->
\t\t  ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "\t\t";
        $this->displayBlock('javascript', $context, $blocks);
        // line 23
        echo "\t</head>
\t<body>
\t
\t\t
\t\t<!-- WRAPPER -->
\t\t<div class=\"wrapper\">
\t\t\t\t
\t\t\t<!-- HEADER -->
\t\t\t<header class=\"cf\">
\t\t\t\t<div id=\"logo\"><a href=\"index.html\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Madison Template\" /></a></div>
\t\t\t\t
\t\t\t\t<!-- social-bar -->
\t\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("compete_selectrole"), "html", null, true);
        echo "\" class=\"cf\">Register</a>
                                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("login"), "html", null, true);
        echo "\" class=\"cf\">Login</a>
\t\t\t\t<ul id=\"social-bar\" class=\"cf\">
\t\t\t\t\t
\t\t\t\t\t<li class=\"dribbble\"><a href=\"http://www.dribbble.com/ansimuz\"  title=\"Dribbble\" ></a></li>
\t\t\t\t\t<li class=\"facebook\"><a href=\"http://www.facebook.com/pages/Ansimuz/224538697564461\"  title=\"Facebook\" ></a></li>
\t\t\t\t\t<li class=\"googleplus\"><a href=\"https://plus.google.com/109030791898417339180/posts\"  title=\"googleplus\" ></a></li>
\t\t\t\t\t<li class=\"twitter\"><a href=\"https://twitter.com/ansimuz\"  title=\"twitter\" ></a></li>
\t\t\t\t</ul>
\t\t\t\t<!-- ENDS social-bar -->
\t\t\t\t
\t\t\t</header>
\t\t\t<!-- ENDS HEADER -->
\t\t\t
\t\t\t<!-- NAV -->
\t\t\t<nav class=\"cf\">
\t\t\t\t<ul id=\"nav\" class=\"sf-menu\">
\t\t\t\t\t<li><a href=\"index.html\">HOME</a></li>
\t\t\t\t\t<li><a href=\"blog.html\">BLOG</a></li>
\t\t\t\t\t<li class=\"current-menu-item\"><a href=\"page.html\">QA</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("studyquestions_new"), "html", null, true);
        echo "\">Post a question</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("studyquestions_newSearch"), "html", null, true);
        echo "\">Search</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>\t
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"work.html\">WORK</a></li>
\t\t\t\t\t<li><a href=\"contact.html\">CONTACT</a></li>
\t\t\t\t\t<li class=\"important\"><a href=\"http://luiszuno.com/blog/downloads/madison-template/\">GET IT NOW</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- ENDS NAV -->
\t\t\t
\t\t\t
\t\t\t<!-- MAIN -->
\t\t\t<div id=\"main\" class=\"cf\">
\t\t\t\t
\t\t\t\t<!-- page-content -->
\t\t\t\t<div class=\"page-content\">
\t\t\t\t\t
\t\t\t\t\t<!-- entry-content -->\t
\t\t        \t<div class=\"entry-content cf\">
                      ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        echo "\t\t\t\t\t    \t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- ENDS entry-content -->
\t
\t\t\t\t</div><!-- ENDS page-content -->\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- ENDS MAIN -->
\t\t\t
\t\t\t
\t\t\t<!-- WIDGETS -->
\t\t\t<ul  class=\"widget-cols cf\">
\t\t\t\t<li class=\"first-col\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"widget-block\">
\t\t\t\t\t\t<h4>MADISON TEMPLATE</h4>
\t\t\t\t\t\t<p>Use this template on your commercial or personal projects no links back required but much appreciated. Read the complete license agreement on this <a href=\"http://luiszuno.com/blog/license/\" >link</a> </p>
\t\t     \t\t</div>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"second-col\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"widget-block\">
\t\t\t\t\t\t<h4>LATEST TWEETS</h4>
\t\t\t\t\t\t";
        // line 101
        $this->displayBlock('js', $context, $blocks);
        // line 105
        echo "\t\t     \t\t</div>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"third-col\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"widget-block\">
\t\t\t\t\t\t<h4>DUMMY TEXT</h4>
\t\t\t\t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
\t\t     \t\t</div>
\t\t     \t\t
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"fourth-col\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"widget-block\">
\t\t\t\t\t\t<h4>CATEGORIES</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"cat-item\"><a href=\"#\" >Design</a></li>
\t\t\t\t\t\t\t<li class=\"cat-item\"><a href=\"#\" >Photo</a></li>
\t\t\t\t\t\t\t<li class=\"cat-item\"><a href=\"#\" >Art</a></li>
\t\t\t\t\t\t\t<li class=\"cat-item\"><a href=\"#\" >Game</a></li>
\t\t\t\t\t\t\t<li class=\"cat-item\"><a href=\"#\" >Film</a></li>
\t\t\t\t\t\t\t<li class=\"cat-item\"><a href=\"#\" >TV</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t     \t\t
\t\t\t\t</li>
\t\t\t\t<li class=\"scroll\"></li>
\t\t\t</ul>
\t\t\t<!-- ENDS WIDGETS -->
\t\t\t
\t\t\t
\t\t\t<!-- FOOTER -->
\t\t\t<div class=\"footer-divider\"></div>
\t\t\t<footer class=\"cf\">
\t\t\t\tMadison Theme by <a href=\"http://www.luiszuno.com\" >luiszuno.com</a> 
\t\t\t</footer>
\t\t\t<!-- ENDS FOOTER -->
\t\t
\t\t</div>
\t\t<!-- ENDS WRAPPER -->
\t\t
\t\t<!-- JS -->
\t\t ";
        // line 149
        $this->displayBlock('javascripts', $context, $blocks);
        // line 164
        echo "\t
\t\t<!-- ENDS JS -->
\t</body>
        <script>
            \$(document).ready(function() {
                   ";
        // line 169
        $this->displayBlock('documentReady', $context, $blocks);
        // line 170
        echo "            });
        </script>
</html>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "\t\t<link href='http://fonts.googleapis.com/css?family=Arvo:400' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
\t\t";
    }

    // line 19
    public function block_javascript($context, array $blocks = array())
    {
        // line 20
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
               
\t    ";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
    }

    // line 101
    public function block_js($context, array $blocks = array())
    {
        // line 102
        echo "\t\t\t\t\t\t<script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chirp.js"), "html", null, true);
        echo "></script>
\t\t\t\t\t\t<script>Chirp({user:'ansimuz',max:2})</script>
\t\t\t\t\t\t";
    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        // line 150
        echo "\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js\"></script>
\t\t<script>window.jQuery || document.write('<script src=";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "><\\/script>')</script>
\t\t<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"</script>
\t\t
\t\t<!-- superfish -->
\t\t<script  src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish-1.4.8/js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
\t\t<script  src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish-1.4.8/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t\t<script  src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish-1.4.8/js/supersubs.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- ENDS superfish -->
\t\t
\t\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/css3-mediaqueries.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nivoslider.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tabs.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 169
    public function block_documentReady($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 169,  291 => 163,  287 => 162,  282 => 160,  276 => 157,  272 => 156,  268 => 155,  262 => 152,  258 => 151,  255 => 150,  252 => 149,  244 => 102,  241 => 101,  236 => 77,  228 => 20,  225 => 19,  219 => 17,  215 => 16,  211 => 14,  208 => 13,  201 => 170,  199 => 169,  192 => 164,  190 => 149,  144 => 105,  142 => 101,  115 => 77,  92 => 57,  88 => 56,  65 => 36,  61 => 35,  55 => 32,  44 => 23,  41 => 19,  39 => 13,  25 => 1,);
    }
}
