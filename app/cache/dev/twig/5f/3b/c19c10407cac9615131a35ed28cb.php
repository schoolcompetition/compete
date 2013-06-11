<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_5f3bc19c10407cac9615131a35ed28cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommandations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  771 => 181,  769 => 180,  766 => 179,  758 => 175,  756 => 174,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  685 => 147,  683 => 146,  670 => 138,  669 => 137,  667 => 135,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  639 => 123,  631 => 121,  627 => 120,  622 => 119,  616 => 117,  613 => 116,  590 => 109,  587 => 108,  571 => 104,  569 => 103,  566 => 102,  549 => 98,  530 => 93,  528 => 92,  523 => 91,  502 => 89,  500 => 88,  497 => 87,  488 => 82,  485 => 81,  482 => 80,  476 => 78,  466 => 75,  463 => 74,  450 => 72,  448 => 71,  438 => 69,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  405 => 58,  369 => 43,  364 => 41,  356 => 37,  353 => 36,  350 => 35,  345 => 33,  342 => 32,  334 => 27,  323 => 24,  316 => 22,  295 => 16,  290 => 14,  287 => 13,  269 => 5,  267 => 4,  260 => 330,  254 => 327,  250 => 325,  248 => 324,  238 => 319,  236 => 313,  233 => 312,  226 => 298,  215 => 285,  200 => 262,  197 => 261,  195 => 252,  184 => 239,  146 => 178,  124 => 129,  348 => 322,  346 => 321,  343 => 320,  20 => 1,  118 => 49,  113 => 40,  332 => 116,  321 => 23,  318 => 111,  315 => 110,  300 => 105,  297 => 277,  291 => 102,  288 => 101,  274 => 97,  243 => 92,  347 => 34,  344 => 119,  329 => 26,  320 => 149,  313 => 145,  306 => 107,  299 => 278,  263 => 95,  256 => 328,  210 => 273,  191 => 67,  179 => 222,  172 => 64,  165 => 60,  161 => 199,  385 => 160,  382 => 48,  376 => 158,  367 => 42,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 164,  349 => 149,  339 => 161,  336 => 145,  330 => 141,  327 => 114,  324 => 113,  317 => 135,  311 => 20,  308 => 130,  303 => 106,  292 => 15,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 6,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 101,  244 => 322,  242 => 101,  237 => 93,  231 => 306,  228 => 305,  225 => 87,  223 => 297,  212 => 78,  206 => 77,  190 => 242,  180 => 63,  174 => 214,  159 => 193,  148 => 46,  34 => 5,  796 => 475,  793 => 474,  782 => 186,  778 => 471,  774 => 182,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 148,  684 => 455,  680 => 145,  676 => 453,  672 => 139,  668 => 136,  665 => 450,  663 => 449,  646 => 448,  635 => 122,  620 => 442,  615 => 440,  611 => 115,  608 => 114,  606 => 437,  592 => 110,  555 => 401,  537 => 96,  520 => 90,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  204 => 76,  201 => 94,  181 => 88,  178 => 66,  170 => 85,  160 => 81,  153 => 77,  110 => 38,  90 => 27,  76 => 31,  58 => 14,  134 => 158,  102 => 30,  65 => 17,  59 => 13,  63 => 21,  81 => 40,  104 => 87,  97 => 23,  77 => 28,  53 => 14,  259 => 158,  253 => 155,  249 => 105,  245 => 153,  239 => 150,  232 => 93,  221 => 86,  218 => 286,  213 => 274,  205 => 267,  202 => 265,  192 => 251,  188 => 14,  185 => 74,  175 => 65,  129 => 145,  127 => 60,  100 => 36,  480 => 162,  474 => 77,  469 => 76,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 70,  437 => 147,  435 => 68,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 59,  402 => 57,  398 => 129,  393 => 52,  387 => 50,  384 => 49,  381 => 120,  379 => 47,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 332,  355 => 106,  341 => 118,  337 => 160,  322 => 138,  314 => 21,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 129,  283 => 100,  278 => 8,  268 => 161,  264 => 3,  258 => 329,  252 => 326,  247 => 78,  241 => 321,  235 => 85,  229 => 92,  224 => 81,  220 => 295,  214 => 69,  208 => 268,  177 => 162,  169 => 207,  143 => 51,  140 => 58,  132 => 48,  128 => 49,  119 => 114,  107 => 37,  38 => 7,  71 => 19,  155 => 56,  135 => 49,  126 => 144,  114 => 108,  84 => 41,  70 => 19,  67 => 18,  61 => 2,  196 => 17,  183 => 82,  171 => 213,  166 => 206,  163 => 82,  158 => 62,  156 => 192,  151 => 185,  142 => 51,  138 => 50,  136 => 165,  121 => 128,  117 => 39,  105 => 18,  91 => 29,  62 => 16,  49 => 12,  87 => 26,  31 => 4,  26 => 3,  28 => 3,  25 => 35,  21 => 2,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 12,  56 => 14,  24 => 3,  19 => 1,  93 => 28,  88 => 30,  78 => 24,  46 => 10,  44 => 8,  27 => 7,  79 => 32,  72 => 21,  69 => 13,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 323,  157 => 56,  145 => 52,  139 => 166,  131 => 157,  123 => 45,  120 => 44,  115 => 40,  111 => 107,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 31,  74 => 22,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 76,  193 => 69,  189 => 73,  187 => 241,  182 => 223,  176 => 220,  173 => 74,  168 => 57,  164 => 200,  162 => 54,  154 => 186,  149 => 179,  147 => 53,  144 => 173,  141 => 172,  133 => 55,  130 => 39,  125 => 51,  122 => 41,  116 => 113,  112 => 39,  109 => 102,  106 => 101,  103 => 25,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 26,  80 => 24,  73 => 27,  64 => 17,  60 => 20,  57 => 15,  54 => 19,  51 => 37,  48 => 10,  45 => 11,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
