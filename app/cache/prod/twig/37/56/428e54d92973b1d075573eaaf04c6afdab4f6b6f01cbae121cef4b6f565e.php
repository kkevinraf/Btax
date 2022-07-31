<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3756428e54d92973b1d075573eaaf04c6afdab4f6b6f01cbae121cef4b6f565e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/styles-ind.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/login.css"), "html", null, true);
        echo "\">
\t<style type=\"text/css\">
\t\t#error_messsage
\t\t{
\t\t\tcolor: red;
\t\t\ttext-align: center;
\t\t}
\t</style>
</head>
<body>
\t<!-----------------------------Header------------------------------------>
\t<header class=\"topbar-c\">
\t\t<div class=\"nav-c\">
\t\t\t<!-----------------------------Header Left------------------------------------>
\t\t\t<div class=\"nav-c-left\">
\t\t\t\t<div class=\"logo-place\">
\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("book_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/logo-f.png"), "html", null, true);
        echo "\" class=\"logo-place-img\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-----------------------------End Header Left------------------------------------>


\t\t\t<!-----------------------------Header Right------------------------------------>
\t\t\t<div class=\"nav-c-right\">
\t\t\t\t<div class=\"nav-c-right-space\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><button class=\"stl-btn-log\">Connexion</button></a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><button class=\"stl-btn-log\">Inscription</button></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-----------------------------End Header Right------------------------------------>

\t\t</div>
\t</header>
\t<!-----------------------------End Header------------------------------------>
\t<div class=\"banniere\"></div>
\t<!-----------------------------Body 1------------------------------------>

\t<div class=\"body1\">
\t\t<div class=\"b-body\">
\t\t\t
\t\t\t<div class=\"form-login\">
\t\t\t\t<form action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    \t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        if (isset($context["csrf_token"])) { $_csrf_token_ = $context["csrf_token"]; } else { $_csrf_token_ = null; }
        echo twig_escape_filter($this->env, $_csrf_token_, "html", null, true);
        echo "\" />
    \t\t\t";
        // line 54
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ((array_key_exists("error", $context) && ($_error_ != ""))) {
            echo " 
    \t\t\t<div class=\"form-login-body\">
\t\t\t\t\t<div class=\"group-input-login\">
\t\t\t\t\t\t<span class=\"login-label\" id=\"error_messsage\">";
            // line 57
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $_error_, "html", null, true);
            echo "</span><br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
    \t\t\t<div class=\"form-login-body\">
\t\t\t\t\t<div class=\"group-input-login\">
\t\t\t\t\t\t<span class=\"login-label\" id=\"error_messsage\">";
            // line 64
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $_message_, "html", null, true);
            echo "</span><br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t<div class=\"form-login-body\">
\t\t\t\t\t<div class=\"group-input-login\">
\t\t\t\t\t\t<span class=\"login-label\">Adresse e-mail </span><br>
\t\t\t\t\t\t<input class=\"login-input\" type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 71
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-login-body\">
\t\t\t\t\t<div class=\"group-input-login\">
\t\t\t\t\t\t<span class=\"login-label\">Mot de passe </span><br>
\t\t\t\t\t\t<input class=\"login-input\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"password-body\">
\t\t\t\t\t<div class=\"left-logincontent\"></div>
\t\t\t\t\t<div class=\"right-logincontent\"><a href=\"#\">Mot de passe oublie ?</a></div>
\t\t\t\t</div>
\t\t\t\t

\t\t\t\t<div class=\"form-login-body\">
\t\t\t\t\t<div class=\"group-input-login\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Se connecter\" class=\"login-button\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"form-login-footer\">
\t\t\t\t\tPas encore membre ? <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Inscrivez-vous</a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t<script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script.js"), "html", null, true);
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 100,  23 => 4,  20 => 1,  567 => 276,  563 => 275,  559 => 274,  555 => 273,  551 => 272,  541 => 267,  535 => 263,  532 => 262,  514 => 255,  501 => 249,  495 => 248,  485 => 245,  477 => 241,  456 => 234,  451 => 233,  448 => 232,  443 => 231,  439 => 229,  436 => 228,  391 => 205,  380 => 202,  337 => 187,  236 => 104,  325 => 185,  313 => 182,  288 => 171,  598 => 246,  594 => 245,  590 => 244,  585 => 243,  582 => 242,  577 => 239,  573 => 237,  560 => 234,  554 => 232,  546 => 229,  525 => 221,  519 => 256,  506 => 214,  499 => 212,  484 => 206,  480 => 204,  462 => 199,  459 => 198,  454 => 197,  447 => 194,  445 => 193,  426 => 182,  419 => 179,  415 => 216,  399 => 208,  396 => 170,  392 => 169,  386 => 167,  334 => 145,  243 => 88,  200 => 70,  508 => 251,  504 => 350,  500 => 349,  496 => 348,  492 => 347,  440 => 299,  350 => 190,  262 => 152,  221 => 142,  209 => 96,  184 => 89,  182 => 130,  188 => 74,  181 => 64,  119 => 66,  358 => 156,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 181,  299 => 122,  283 => 116,  258 => 151,  220 => 101,  273 => 169,  260 => 95,  241 => 88,  169 => 84,  161 => 60,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 233,  547 => 271,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 201,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 193,  356 => 192,  331 => 146,  323 => 144,  305 => 180,  289 => 129,  278 => 126,  266 => 101,  481 => 243,  476 => 203,  471 => 8,  467 => 200,  465 => 237,  461 => 235,  457 => 209,  453 => 208,  449 => 206,  431 => 183,  422 => 193,  417 => 192,  383 => 171,  378 => 201,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 183,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 72,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 97,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 93,  152 => 64,  148 => 58,  139 => 71,  145 => 62,  133 => 55,  126 => 71,  113 => 61,  94 => 47,  73 => 42,  185 => 73,  168 => 66,  151 => 59,  407 => 174,  402 => 186,  397 => 11,  388 => 204,  384 => 203,  377 => 165,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 153,  259 => 125,  199 => 94,  191 => 134,  179 => 101,  53 => 12,  141 => 60,  123 => 64,  252 => 149,  245 => 147,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 92,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 45,  83 => 41,  132 => 41,  120 => 48,  159 => 59,  64 => 19,  74 => 34,  116 => 54,  99 => 59,  82 => 43,  306 => 125,  301 => 121,  292 => 211,  290 => 113,  282 => 205,  275 => 155,  267 => 196,  263 => 120,  255 => 150,  242 => 103,  238 => 102,  228 => 144,  79 => 36,  125 => 56,  369 => 199,  364 => 158,  353 => 191,  345 => 153,  338 => 216,  326 => 132,  318 => 174,  304 => 166,  296 => 173,  291 => 119,  248 => 112,  233 => 110,  225 => 80,  217 => 100,  213 => 140,  205 => 75,  174 => 65,  164 => 75,  154 => 50,  144 => 79,  136 => 75,  87 => 30,  75 => 24,  68 => 21,  61 => 22,  135 => 58,  128 => 79,  105 => 57,  91 => 51,  86 => 24,  54 => 15,  31 => 4,  549 => 230,  543 => 228,  538 => 250,  530 => 222,  526 => 153,  522 => 151,  512 => 215,  505 => 148,  502 => 213,  497 => 146,  491 => 247,  488 => 246,  483 => 142,  473 => 240,  469 => 238,  466 => 131,  460 => 211,  455 => 208,  450 => 195,  444 => 205,  441 => 204,  437 => 203,  434 => 227,  429 => 116,  423 => 200,  420 => 217,  416 => 110,  413 => 109,  408 => 213,  394 => 105,  390 => 172,  375 => 241,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 219,  330 => 180,  327 => 145,  321 => 184,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 105,  231 => 85,  219 => 77,  201 => 89,  195 => 78,  189 => 74,  186 => 85,  162 => 67,  155 => 80,  143 => 66,  138 => 59,  134 => 68,  131 => 53,  122 => 51,  117 => 68,  108 => 62,  102 => 46,  92 => 25,  84 => 30,  72 => 20,  69 => 37,  51 => 25,  48 => 19,  35 => 6,  29 => 6,  312 => 96,  308 => 125,  293 => 121,  285 => 115,  281 => 170,  277 => 106,  274 => 85,  271 => 168,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 85,  207 => 83,  204 => 137,  198 => 104,  194 => 69,  178 => 86,  173 => 76,  158 => 59,  150 => 106,  147 => 47,  142 => 57,  130 => 73,  127 => 59,  112 => 66,  96 => 27,  76 => 21,  71 => 22,  55 => 10,  114 => 67,  109 => 37,  106 => 52,  101 => 51,  85 => 44,  77 => 43,  67 => 29,  39 => 10,  110 => 36,  100 => 51,  89 => 52,  65 => 23,  63 => 29,  58 => 32,  34 => 7,  26 => 12,  98 => 54,  88 => 44,  80 => 27,  78 => 49,  46 => 20,  44 => 12,  36 => 6,  60 => 17,  43 => 20,  40 => 8,  57 => 21,  50 => 11,  47 => 14,  38 => 5,  32 => 9,  27 => 5,  25 => 3,  24 => 7,  95 => 58,  42 => 10,  28 => 8,  22 => 3,  19 => 1,  232 => 145,  226 => 102,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 135,  193 => 93,  187 => 132,  183 => 71,  180 => 74,  171 => 62,  166 => 74,  163 => 73,  160 => 72,  157 => 72,  149 => 55,  146 => 56,  140 => 77,  137 => 71,  129 => 40,  124 => 39,  121 => 50,  118 => 46,  115 => 37,  111 => 56,  107 => 73,  104 => 41,  97 => 50,  93 => 53,  90 => 45,  81 => 27,  70 => 36,  66 => 35,  62 => 17,  59 => 18,  56 => 16,  52 => 12,  49 => 11,  45 => 11,  41 => 7,  37 => 7,  33 => 4,  30 => 4,);
    }
}
