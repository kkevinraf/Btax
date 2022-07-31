<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_349d73f191352e4cbd98e09fb330cd21ca48515440b7d010309eca45683e998a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($_app_, "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            echo "            ";
            if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_messages_);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                <div class=\"flash-";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                    ";
                // line 21
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $_message_, "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        <div>
            ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "        </div>
    </body>
</html>
";
    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 28
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  567 => 276,  563 => 275,  559 => 274,  555 => 273,  551 => 272,  541 => 267,  535 => 263,  532 => 262,  514 => 255,  501 => 249,  495 => 248,  485 => 245,  477 => 241,  456 => 234,  451 => 233,  448 => 232,  443 => 231,  439 => 229,  436 => 228,  391 => 205,  380 => 202,  337 => 187,  236 => 104,  325 => 185,  313 => 182,  288 => 171,  598 => 246,  594 => 245,  590 => 244,  585 => 243,  582 => 242,  577 => 239,  573 => 237,  560 => 234,  554 => 232,  546 => 229,  525 => 221,  519 => 256,  506 => 214,  499 => 212,  484 => 206,  480 => 204,  462 => 199,  459 => 198,  454 => 197,  447 => 194,  445 => 193,  426 => 182,  419 => 179,  415 => 216,  399 => 208,  396 => 170,  392 => 169,  386 => 167,  334 => 145,  243 => 88,  200 => 70,  508 => 251,  504 => 350,  500 => 349,  496 => 348,  492 => 347,  440 => 299,  350 => 190,  262 => 152,  221 => 142,  209 => 96,  184 => 89,  182 => 130,  188 => 74,  181 => 64,  119 => 55,  358 => 156,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 181,  299 => 122,  283 => 116,  258 => 151,  220 => 101,  273 => 169,  260 => 95,  241 => 88,  169 => 84,  161 => 60,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 233,  547 => 271,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 201,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 193,  356 => 192,  331 => 146,  323 => 144,  305 => 180,  289 => 129,  278 => 126,  266 => 101,  481 => 243,  476 => 203,  471 => 8,  467 => 200,  465 => 237,  461 => 235,  457 => 209,  453 => 208,  449 => 206,  431 => 183,  422 => 193,  417 => 192,  383 => 171,  378 => 201,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 183,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 72,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 97,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 61,  152 => 64,  148 => 58,  139 => 55,  145 => 62,  133 => 55,  126 => 71,  113 => 44,  94 => 47,  73 => 38,  185 => 73,  168 => 66,  151 => 59,  407 => 174,  402 => 186,  397 => 11,  388 => 204,  384 => 203,  377 => 165,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 153,  259 => 125,  199 => 94,  191 => 134,  179 => 93,  53 => 12,  141 => 60,  123 => 53,  252 => 149,  245 => 147,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 92,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 45,  83 => 41,  132 => 41,  120 => 48,  159 => 59,  64 => 19,  74 => 34,  116 => 54,  99 => 43,  82 => 43,  306 => 125,  301 => 121,  292 => 211,  290 => 113,  282 => 205,  275 => 155,  267 => 196,  263 => 120,  255 => 150,  242 => 103,  238 => 102,  228 => 144,  79 => 36,  125 => 56,  369 => 199,  364 => 158,  353 => 191,  345 => 153,  338 => 216,  326 => 132,  318 => 174,  304 => 166,  296 => 173,  291 => 119,  248 => 112,  233 => 110,  225 => 80,  217 => 100,  213 => 140,  205 => 75,  174 => 65,  164 => 75,  154 => 50,  144 => 79,  136 => 75,  87 => 30,  75 => 24,  68 => 21,  61 => 22,  135 => 58,  128 => 79,  105 => 27,  91 => 51,  86 => 24,  54 => 15,  31 => 9,  549 => 230,  543 => 228,  538 => 250,  530 => 222,  526 => 153,  522 => 151,  512 => 215,  505 => 148,  502 => 213,  497 => 146,  491 => 247,  488 => 246,  483 => 142,  473 => 240,  469 => 238,  466 => 131,  460 => 211,  455 => 208,  450 => 195,  444 => 205,  441 => 204,  437 => 203,  434 => 227,  429 => 116,  423 => 200,  420 => 217,  416 => 110,  413 => 109,  408 => 213,  394 => 105,  390 => 172,  375 => 241,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 219,  330 => 180,  327 => 145,  321 => 184,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 105,  231 => 85,  219 => 77,  201 => 89,  195 => 78,  189 => 74,  186 => 85,  162 => 67,  155 => 80,  143 => 66,  138 => 59,  134 => 54,  131 => 53,  122 => 51,  117 => 68,  108 => 28,  102 => 46,  92 => 25,  84 => 30,  72 => 20,  69 => 37,  51 => 14,  48 => 19,  35 => 5,  29 => 8,  312 => 96,  308 => 125,  293 => 121,  285 => 115,  281 => 170,  277 => 106,  274 => 85,  271 => 168,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 85,  207 => 83,  204 => 137,  198 => 104,  194 => 69,  178 => 86,  173 => 76,  158 => 59,  150 => 106,  147 => 47,  142 => 57,  130 => 73,  127 => 59,  112 => 66,  96 => 27,  76 => 21,  71 => 22,  55 => 16,  114 => 67,  109 => 37,  106 => 52,  101 => 51,  85 => 44,  77 => 26,  67 => 29,  39 => 10,  110 => 36,  100 => 51,  89 => 34,  65 => 23,  63 => 29,  58 => 17,  34 => 11,  26 => 6,  98 => 29,  88 => 44,  80 => 27,  78 => 26,  46 => 20,  44 => 12,  36 => 10,  60 => 17,  43 => 20,  40 => 11,  57 => 21,  50 => 11,  47 => 14,  38 => 5,  32 => 9,  27 => 3,  25 => 3,  24 => 4,  95 => 52,  42 => 10,  28 => 3,  22 => 1,  19 => 1,  232 => 145,  226 => 102,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 135,  193 => 93,  187 => 132,  183 => 71,  180 => 74,  171 => 62,  166 => 74,  163 => 73,  160 => 72,  157 => 72,  149 => 55,  146 => 56,  140 => 77,  137 => 71,  129 => 40,  124 => 39,  121 => 50,  118 => 46,  115 => 37,  111 => 56,  107 => 73,  104 => 41,  97 => 50,  93 => 38,  90 => 45,  81 => 27,  70 => 20,  66 => 36,  62 => 17,  59 => 18,  56 => 16,  52 => 19,  49 => 11,  45 => 11,  41 => 11,  37 => 10,  33 => 4,  30 => 3,);
    }
}
