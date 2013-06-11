<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9e838b89afaf4a5c40858c9c3b6a23ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  327 => 140,  324 => 139,  317 => 135,  311 => 131,  308 => 130,  303 => 128,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 107,  261 => 105,  255 => 103,  251 => 101,  244 => 97,  242 => 96,  237 => 93,  231 => 89,  228 => 88,  225 => 87,  223 => 86,  212 => 79,  206 => 77,  190 => 68,  180 => 63,  174 => 59,  159 => 53,  148 => 46,  34 => 5,  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  204 => 76,  201 => 94,  181 => 88,  178 => 87,  170 => 85,  160 => 81,  153 => 77,  110 => 22,  90 => 42,  76 => 17,  58 => 25,  134 => 66,  102 => 17,  65 => 21,  59 => 13,  63 => 19,  81 => 34,  104 => 42,  97 => 23,  77 => 33,  53 => 11,  259 => 158,  253 => 155,  249 => 100,  245 => 153,  239 => 150,  232 => 148,  221 => 100,  218 => 83,  213 => 75,  205 => 20,  202 => 19,  192 => 16,  188 => 14,  185 => 66,  175 => 86,  129 => 103,  127 => 60,  100 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 147,  337 => 103,  322 => 138,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 125,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 161,  264 => 160,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 149,  229 => 147,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 162,  169 => 60,  143 => 43,  140 => 42,  132 => 51,  128 => 49,  119 => 48,  107 => 27,  38 => 7,  71 => 29,  155 => 58,  135 => 62,  126 => 61,  114 => 42,  84 => 40,  70 => 15,  67 => 14,  61 => 12,  196 => 17,  183 => 82,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 66,  151 => 47,  142 => 71,  138 => 57,  136 => 71,  121 => 46,  117 => 19,  105 => 18,  91 => 34,  62 => 27,  49 => 14,  87 => 41,  31 => 4,  26 => 9,  28 => 3,  25 => 35,  21 => 2,  94 => 34,  89 => 36,  85 => 32,  75 => 30,  68 => 30,  56 => 11,  24 => 1,  19 => 1,  93 => 43,  88 => 20,  78 => 26,  46 => 13,  44 => 10,  27 => 4,  79 => 18,  72 => 31,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 74,  139 => 63,  131 => 61,  123 => 35,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 43,  98 => 45,  96 => 35,  83 => 32,  74 => 27,  66 => 23,  55 => 9,  52 => 14,  50 => 22,  43 => 11,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 73,  193 => 69,  189 => 71,  187 => 67,  182 => 66,  176 => 64,  173 => 74,  168 => 57,  164 => 59,  162 => 54,  154 => 54,  149 => 51,  147 => 75,  144 => 53,  141 => 73,  133 => 55,  130 => 39,  125 => 44,  122 => 43,  116 => 31,  112 => 43,  109 => 52,  106 => 51,  103 => 25,  99 => 36,  95 => 35,  92 => 21,  86 => 39,  82 => 19,  80 => 30,  73 => 16,  64 => 13,  60 => 22,  57 => 16,  54 => 25,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
