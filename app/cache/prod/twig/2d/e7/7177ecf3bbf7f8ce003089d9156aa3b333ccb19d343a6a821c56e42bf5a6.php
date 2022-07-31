<?php

/* BookBundle:Log:successpaiement.html.twig */
class __TwigTemplate_2de77177ecf3bbf7f8ce003089d9156aa3b333ccb19d343a6a821c56e42bf5a6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>B'tax</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/styles.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/confirmation-paiement.css"), "html", null, true);
        echo "\">
</head>
<body>
\t<!-----------------------------Header------------------------------------>
\t<header class=\"topbar-c\">
\t\t<div class=\"nav-c\">


\t\t\t<!-----------------------------Header Left------------------------------------>
\t\t\t<div class=\"nav-c-left\">
\t\t\t\t<div class=\"logo-place\">
\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("book_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/logo-f.png"), "html", null, true);
        echo "\" class=\"logo-place-img\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-----------------------------End Header Left------------------------------------>


\t\t\t

\t\t</div>
\t</header>
\t<!-----------------------------End Header------------------------------------>

\t<div>
\t\t<div class=\"banniere\"></div>
\t\t<div class=\"content-b\">

\t\t\t<div class=\"confirmation-paiement\">
\t\t\t\t<div class=\"confirmation-paiement-header\">
\t\t\t\t\t<div class=\"success-img\"></div>
\t\t\t\t\t<div class=\"confirmation-paiement-header-description\">
\t\t\t\t\t\t<div class=\"confirmation-paiement-header-description-title\">
\t\t\t\t\t\t\tPaiement effectue avec succes
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"confirmation-paiement-header-description-transaction\">
\t\t\t\t\t\t\tNumero de transaction :<br>
\t\t\t\t\t\t\t- xxxxxxxxxxxxxxxxxxxxxxxxxx<br>
\t\t\t\t\t\t\t- xxxxxxxxxxxxxxxxxxxxxxxxxx
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"confirmation-paiement-center\">
\t\t\t\t\t<div class=\"confirmation-paiement-center-l\"></div>
\t\t\t\t\t<div class=\"confirmation-paiement-center-c\"></div>
\t\t\t\t\t<div class=\"confirmation-paiement-center-r\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"confirmation-paiement-bottom\">
\t\t\t\t\t<div class=\"confirmation-paiement-bottom-description\">
\t\t\t\t\t\tMontant regle : 300 000 Ar<br>
\t\t\t\t\t\tMoyen de paiement : MVOLA
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"confirmation-paiement-bottom-btn\">
\t\t\t\t\t\t<a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("book_homepage");
        echo "\"><button class=\"back-to-site-paiement\">Revenir sur le site</button></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t


\t\t</div>
\t</div>

</body>
\t<script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:successpaiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 246,  594 => 245,  590 => 244,  585 => 243,  582 => 242,  577 => 239,  573 => 237,  560 => 234,  554 => 232,  546 => 229,  525 => 221,  519 => 217,  506 => 214,  499 => 212,  484 => 206,  480 => 204,  462 => 199,  459 => 198,  454 => 197,  447 => 194,  445 => 193,  426 => 182,  419 => 179,  415 => 178,  399 => 171,  396 => 170,  392 => 169,  386 => 167,  334 => 145,  243 => 88,  200 => 70,  508 => 351,  504 => 350,  500 => 349,  496 => 211,  492 => 209,  440 => 299,  350 => 222,  262 => 152,  221 => 142,  209 => 138,  184 => 65,  182 => 130,  188 => 74,  181 => 64,  119 => 50,  358 => 156,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 126,  299 => 122,  283 => 116,  258 => 151,  220 => 93,  273 => 105,  260 => 95,  241 => 88,  169 => 64,  161 => 60,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 233,  547 => 253,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 201,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 157,  356 => 161,  331 => 146,  323 => 144,  305 => 139,  289 => 129,  278 => 126,  266 => 101,  481 => 217,  476 => 203,  471 => 8,  467 => 200,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 206,  431 => 183,  422 => 193,  417 => 192,  383 => 171,  378 => 171,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 131,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 72,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 91,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 61,  152 => 64,  148 => 58,  139 => 55,  145 => 105,  133 => 55,  126 => 49,  113 => 44,  94 => 36,  73 => 25,  185 => 73,  168 => 66,  151 => 59,  407 => 174,  402 => 186,  397 => 11,  388 => 168,  384 => 217,  377 => 165,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 153,  259 => 125,  199 => 136,  191 => 68,  179 => 93,  53 => 12,  141 => 75,  123 => 53,  252 => 149,  245 => 147,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 76,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 45,  83 => 41,  132 => 41,  120 => 48,  159 => 59,  64 => 28,  74 => 34,  116 => 49,  99 => 43,  82 => 38,  306 => 125,  301 => 121,  292 => 211,  290 => 113,  282 => 205,  275 => 155,  267 => 196,  263 => 96,  255 => 93,  242 => 103,  238 => 102,  228 => 144,  79 => 36,  125 => 52,  369 => 159,  364 => 158,  353 => 194,  345 => 153,  338 => 216,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 119,  248 => 119,  233 => 110,  225 => 80,  217 => 141,  213 => 73,  205 => 75,  174 => 65,  164 => 63,  154 => 50,  144 => 67,  136 => 43,  87 => 30,  75 => 24,  68 => 21,  61 => 22,  135 => 103,  128 => 79,  105 => 35,  91 => 32,  86 => 39,  54 => 15,  31 => 4,  549 => 230,  543 => 228,  538 => 250,  530 => 222,  526 => 153,  522 => 151,  512 => 215,  505 => 148,  502 => 213,  497 => 146,  491 => 144,  488 => 207,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 211,  455 => 208,  450 => 195,  444 => 205,  441 => 204,  437 => 203,  434 => 296,  429 => 116,  423 => 200,  420 => 111,  416 => 110,  413 => 109,  408 => 196,  394 => 105,  390 => 172,  375 => 241,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 219,  330 => 180,  327 => 145,  321 => 86,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 117,  231 => 85,  219 => 77,  201 => 89,  195 => 78,  189 => 74,  186 => 85,  162 => 67,  155 => 107,  143 => 66,  138 => 57,  134 => 54,  131 => 53,  122 => 51,  117 => 57,  108 => 47,  102 => 46,  92 => 61,  84 => 30,  72 => 20,  69 => 24,  51 => 14,  48 => 13,  35 => 5,  29 => 3,  312 => 96,  308 => 125,  293 => 121,  285 => 115,  281 => 107,  277 => 106,  274 => 85,  271 => 112,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 85,  207 => 83,  204 => 137,  198 => 87,  194 => 69,  178 => 68,  173 => 76,  158 => 59,  150 => 48,  147 => 47,  142 => 57,  130 => 102,  127 => 59,  112 => 46,  96 => 32,  76 => 35,  71 => 22,  55 => 18,  114 => 51,  109 => 37,  106 => 56,  101 => 42,  85 => 35,  77 => 26,  67 => 29,  39 => 10,  110 => 36,  100 => 34,  89 => 34,  65 => 23,  63 => 18,  58 => 17,  34 => 11,  26 => 6,  98 => 39,  88 => 31,  80 => 27,  78 => 26,  46 => 20,  44 => 8,  36 => 12,  60 => 17,  43 => 20,  40 => 9,  57 => 21,  50 => 11,  47 => 9,  38 => 5,  32 => 9,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 10,  28 => 8,  22 => 1,  19 => 1,  232 => 145,  226 => 136,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 135,  193 => 88,  187 => 66,  183 => 71,  180 => 74,  171 => 62,  166 => 69,  163 => 62,  160 => 72,  157 => 61,  149 => 55,  146 => 56,  140 => 45,  137 => 71,  129 => 40,  124 => 39,  121 => 50,  118 => 46,  115 => 37,  111 => 50,  107 => 73,  104 => 41,  97 => 33,  93 => 38,  90 => 47,  81 => 27,  70 => 31,  66 => 23,  62 => 17,  59 => 19,  56 => 16,  52 => 19,  49 => 11,  45 => 11,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
