<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_aaf8d2403ea2da6b979a13e988c529ab extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  113 => 40,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  300 => 105,  297 => 104,  291 => 102,  288 => 101,  274 => 97,  243 => 92,  347 => 163,  344 => 119,  329 => 154,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  263 => 95,  256 => 109,  210 => 81,  191 => 67,  179 => 68,  172 => 64,  165 => 60,  161 => 63,  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 164,  349 => 149,  339 => 161,  336 => 145,  330 => 141,  327 => 114,  324 => 113,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 133,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 101,  244 => 97,  242 => 101,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  212 => 78,  206 => 77,  190 => 76,  180 => 63,  174 => 65,  159 => 53,  148 => 46,  34 => 5,  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  204 => 76,  201 => 94,  181 => 88,  178 => 66,  170 => 85,  160 => 81,  153 => 77,  110 => 22,  90 => 42,  76 => 25,  58 => 14,  134 => 54,  102 => 40,  65 => 22,  59 => 13,  63 => 18,  81 => 34,  104 => 37,  97 => 23,  77 => 25,  53 => 17,  259 => 158,  253 => 155,  249 => 105,  245 => 153,  239 => 150,  232 => 93,  221 => 86,  218 => 85,  213 => 82,  205 => 78,  202 => 77,  192 => 16,  188 => 14,  185 => 74,  175 => 65,  129 => 103,  127 => 60,  100 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 118,  337 => 160,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 129,  283 => 100,  278 => 98,  268 => 161,  264 => 160,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 68,  177 => 162,  169 => 60,  143 => 51,  140 => 58,  132 => 48,  128 => 49,  119 => 40,  107 => 27,  38 => 7,  71 => 29,  155 => 56,  135 => 49,  126 => 47,  114 => 42,  84 => 40,  70 => 15,  67 => 20,  61 => 17,  196 => 17,  183 => 82,  171 => 58,  166 => 56,  163 => 82,  158 => 62,  156 => 62,  151 => 59,  142 => 51,  138 => 50,  136 => 48,  121 => 50,  117 => 39,  105 => 18,  91 => 34,  62 => 21,  49 => 14,  87 => 33,  31 => 4,  26 => 9,  28 => 6,  25 => 35,  21 => 2,  94 => 34,  89 => 29,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  24 => 1,  19 => 1,  93 => 31,  88 => 32,  78 => 26,  46 => 13,  44 => 9,  27 => 3,  79 => 21,  72 => 18,  69 => 17,  47 => 15,  40 => 11,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 45,  120 => 44,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 30,  96 => 35,  83 => 33,  74 => 27,  66 => 19,  55 => 13,  52 => 12,  50 => 16,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 78,  203 => 78,  199 => 76,  193 => 69,  189 => 73,  187 => 75,  182 => 66,  176 => 64,  173 => 74,  168 => 57,  164 => 59,  162 => 54,  154 => 60,  149 => 51,  147 => 53,  144 => 53,  141 => 73,  133 => 55,  130 => 39,  125 => 51,  122 => 41,  116 => 31,  112 => 36,  109 => 35,  106 => 51,  103 => 25,  99 => 36,  95 => 35,  92 => 27,  86 => 28,  82 => 28,  80 => 27,  73 => 23,  64 => 23,  60 => 20,  57 => 19,  54 => 13,  51 => 12,  48 => 11,  45 => 14,  42 => 8,  39 => 6,  36 => 9,  33 => 4,  30 => 7,);
    }
}