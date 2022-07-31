<?php

/* BookBundle:Logout:index.html.twig */
class __TwigTemplate_7cca4ccc5094316cd72623485ee9e0e3372c5ae27ce09f4c9be7431b11862f38 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/footer.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/counter-box.css"), "html", null, true);
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
        // line 19
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><button class=\"stl-btn-log\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion"), "html", null, true);
        echo "</button></a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><button class=\"stl-btn-log\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inscription"), "html", null, true);
        echo "</button></a></li>
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
\t\t<div class=\"form-search\">
\t\t\t<form class=\"f-form-search-e\" action=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("search_log_out");
        echo "\" method=\"POST\">

\t\t\t\t<div class=\"input-e\">
\t\t\t\t\t<input list=\"villes\" type=\"text\" name=\"depart\" class=\"input-search\" placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Départ"), "html", null, true);
        echo "\" required />
\t\t\t\t</div>

\t\t\t\t<div class=\"input-e\">
\t\t\t\t\t<input list=\"villes\" type=\"text\" name=\"destination\" class=\"input-search\" placeholder=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Destination"), "html", null, true);
        echo "\" required />
\t\t\t\t</div>

\t\t\t\t<datalist id=\"villes\">
\t\t\t\t\t";
        // line 55
        if (isset($context["villes"])) { $_villes_ = $context["villes"]; } else { $_villes_ = null; }
        if ((twig_length_filter($this->env, $_villes_) != 0)) {
            // line 56
            echo "                        ";
            if (isset($context["villes"])) { $_villes_ = $context["villes"]; } else { $_villes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_villes_);
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 57
                echo "                        \t<option value=\"";
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_a_, "localisation"), "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                    ";
        }
        // line 60
        echo "\t\t\t\t</datalist>
\t\t\t\t
\t\t\t\t<div class=\"input-e\">
\t\t\t\t\t<input type=\"date\" name=\"date\" class=\"input-search\" placeholder=\"Date\" required />
\t\t\t\t</div>

\t\t\t\t<div class=\"input-e\">
\t\t\t\t\t<select class=\"input-search\" name=\"cooperative\" placeholder=\"Cooperative\">
\t\t\t\t\t\t<option value=\"\">TOUS</option>
\t\t\t\t\t\t";
        // line 69
        if (isset($context["cooperatives"])) { $_cooperatives_ = $context["cooperatives"]; } else { $_cooperatives_ = null; }
        if ((twig_length_filter($this->env, $_cooperatives_) != 0)) {
            // line 70
            echo "\t                        ";
            if (isset($context["cooperatives"])) { $_cooperatives_ = $context["cooperatives"]; } else { $_cooperatives_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_cooperatives_);
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 71
                echo "\t                        \t<option value=\"";
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_c_, "nom"), "html", null, true);
                echo "\">";
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_c_, "nom"), "html", null, true);
                echo "</option>
\t                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                   \t\t";
        }
        // line 74
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"input-e-b\">
\t\t\t\t\t<div class=\"number-count\">
\t\t\t\t\t\t<div class=\"number-count-l\" onclick=\"prevNum()\">-</div>
\t\t\t\t\t\t<div class=\"number-count-c\" id=\"number-count-c\">
\t\t\t\t\t\t\t<span style=\"display: initial;\">1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span></div>
\t\t\t\t\t\t<div class=\"number-count-r\" onclick=\"nextNum()\">+</div>
\t\t\t\t\t\t<input type=\"hidden\" name=\"nbrPlace\" id=\"nbrPlace\" value=\"1\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"input-e\">
\t\t\t\t\t<input type=\"submit\" name=\"\" class=\"input-search-btn\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

\t<!-----------------------------End Body 1------------------------------------>
\t
\t<div class=\"about-us\">
\t\t<div class=\"abouts-us-content\">\t
\t\t\t<div class=\"abouts-us-title\">
\t\t\t\t<div class=\"tiret-aut\"></div>&nbsp;A propos de nous
\t\t\t</div>
\t\t\t<div class=\"abouts-us-content-c\">
\t\t\t\t<div id=\"about-us-card\" class=\"about-us-card-1\">
\t\t\t\t\t<div class=\"about-us-picture\">
\t\t\t\t\t\t<img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/rapide.png"), "html", null, true);
        echo "\" class=\"about-us-picture-img\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"about-us-card-title\">
\t\t\t\t\t\tRapide
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"about-us-card-content\">
\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"about-us-card\" class=\"about-us-card-2\">
\t\t\t\t\t<div class=\"about-us-picture\">
\t\t\t\t\t\t<img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/securise.png"), "html", null, true);
        echo "\" class=\"about-us-picture-img\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"about-us-card-title\">
\t\t\t\t\t\tSécurisé
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"about-us-card-content\">
\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"about-us-card\" class=\"about-us-card-3\">
\t\t\t\t\t<div class=\"about-us-picture\">
\t\t\t\t\t\t<img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/facile.png"), "html", null, true);
        echo "\" class=\"about-us-picture-img\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"about-us-card-title\">
\t\t\t\t\t\tFacile
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"about-us-card-content\">
\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"footer\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"footer-top-card\">
\t\t\t\t<div class=\"footer-top-card-title\">
\t\t\t\t\tTermes et conditions d'utilisations
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-top-card-content\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Confidentialités de données</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Conditions générales d'utilisation</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-top-card\">
\t\t\t\t<div class=\"footer-top-card-title\">
\t\t\t\t\tInformation
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-top-card-content\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Contactez-nous</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contactez le Service Client</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Aide</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-top-card\" >
\t\t\t\t<div class=\"footer-top-card-lang\">
\t\t\t\t\tLangue :
\t\t\t\t\t<select class=\"footer-lang\" id=\"langue-home\">
\t\t\t\t\t\t";
        // line 168
        if (array_key_exists("langue", $context)) {
            // line 169
            echo "\t\t\t\t\t\t\t<option value=\"en_EN\" ";
            if (isset($context["langue"])) { $_langue_ = $context["langue"]; } else { $_langue_ = null; }
            if (($_langue_ == "en_EN")) {
                echo "selected";
            }
            echo ">Anglais</option>
\t\t\t\t\t\t\t<option value=\"fr_FR\" ";
            // line 170
            if (isset($context["langue"])) { $_langue_ = $context["langue"]; } else { $_langue_ = null; }
            if (($_langue_ == "fr_FR")) {
                echo "selected";
            }
            echo ">Français</option>
\t\t\t\t\t\t\t<option value=\"mg_MG\" ";
            // line 171
            if (isset($context["langue"])) { $_langue_ = $context["langue"]; } else { $_langue_ = null; }
            if (($_langue_ == "mg_MG")) {
                echo "selected";
            }
            echo ">Malagasy</option>
\t\t\t\t\t\t";
        }
        // line 173
        echo "
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script-number.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/langue.js"), "html", null, true);
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "BookBundle:Logout:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 185,  313 => 182,  288 => 171,  598 => 246,  594 => 245,  590 => 244,  585 => 243,  582 => 242,  577 => 239,  573 => 237,  560 => 234,  554 => 232,  546 => 229,  525 => 221,  519 => 217,  506 => 214,  499 => 212,  484 => 206,  480 => 204,  462 => 199,  459 => 198,  454 => 197,  447 => 194,  445 => 193,  426 => 182,  419 => 179,  415 => 178,  399 => 171,  396 => 170,  392 => 169,  386 => 167,  334 => 145,  243 => 88,  200 => 70,  508 => 351,  504 => 350,  500 => 349,  496 => 211,  492 => 209,  440 => 299,  350 => 222,  262 => 152,  221 => 142,  209 => 138,  184 => 65,  182 => 130,  188 => 74,  181 => 64,  119 => 50,  358 => 156,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 181,  299 => 122,  283 => 116,  258 => 151,  220 => 93,  273 => 169,  260 => 95,  241 => 88,  169 => 64,  161 => 60,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 233,  547 => 253,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 201,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 157,  356 => 161,  331 => 146,  323 => 144,  305 => 180,  289 => 129,  278 => 126,  266 => 101,  481 => 217,  476 => 203,  471 => 8,  467 => 200,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 206,  431 => 183,  422 => 193,  417 => 192,  383 => 171,  378 => 171,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 183,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 72,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 115,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 61,  152 => 64,  148 => 58,  139 => 55,  145 => 105,  133 => 55,  126 => 49,  113 => 44,  94 => 47,  73 => 25,  185 => 73,  168 => 66,  151 => 59,  407 => 174,  402 => 186,  397 => 11,  388 => 168,  384 => 217,  377 => 165,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 153,  259 => 125,  199 => 136,  191 => 68,  179 => 93,  53 => 12,  141 => 69,  123 => 53,  252 => 149,  245 => 147,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 76,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 45,  83 => 41,  132 => 41,  120 => 48,  159 => 59,  64 => 28,  74 => 34,  116 => 49,  99 => 43,  82 => 38,  306 => 125,  301 => 121,  292 => 211,  290 => 113,  282 => 205,  275 => 155,  267 => 196,  263 => 96,  255 => 93,  242 => 103,  238 => 102,  228 => 144,  79 => 36,  125 => 52,  369 => 159,  364 => 158,  353 => 194,  345 => 153,  338 => 216,  326 => 132,  318 => 174,  304 => 166,  296 => 173,  291 => 119,  248 => 119,  233 => 110,  225 => 80,  217 => 141,  213 => 73,  205 => 75,  174 => 65,  164 => 63,  154 => 50,  144 => 70,  136 => 43,  87 => 30,  75 => 24,  68 => 21,  61 => 22,  135 => 103,  128 => 79,  105 => 35,  91 => 32,  86 => 39,  54 => 15,  31 => 4,  549 => 230,  543 => 228,  538 => 250,  530 => 222,  526 => 153,  522 => 151,  512 => 215,  505 => 148,  502 => 213,  497 => 146,  491 => 144,  488 => 207,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 211,  455 => 208,  450 => 195,  444 => 205,  441 => 204,  437 => 203,  434 => 296,  429 => 116,  423 => 200,  420 => 111,  416 => 110,  413 => 109,  408 => 196,  394 => 105,  390 => 172,  375 => 241,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 219,  330 => 180,  327 => 145,  321 => 184,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 117,  231 => 85,  219 => 77,  201 => 89,  195 => 78,  189 => 74,  186 => 85,  162 => 67,  155 => 107,  143 => 66,  138 => 57,  134 => 54,  131 => 53,  122 => 51,  117 => 57,  108 => 55,  102 => 46,  92 => 61,  84 => 30,  72 => 20,  69 => 30,  51 => 14,  48 => 19,  35 => 5,  29 => 9,  312 => 96,  308 => 125,  293 => 121,  285 => 115,  281 => 170,  277 => 106,  274 => 85,  271 => 168,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 85,  207 => 83,  204 => 137,  198 => 104,  194 => 69,  178 => 68,  173 => 76,  158 => 59,  150 => 71,  147 => 47,  142 => 57,  130 => 60,  127 => 59,  112 => 46,  96 => 32,  76 => 35,  71 => 22,  55 => 18,  114 => 51,  109 => 37,  106 => 56,  101 => 51,  85 => 35,  77 => 26,  67 => 29,  39 => 10,  110 => 36,  100 => 34,  89 => 34,  65 => 23,  63 => 29,  58 => 17,  34 => 11,  26 => 6,  98 => 39,  88 => 44,  80 => 27,  78 => 26,  46 => 20,  44 => 8,  36 => 10,  60 => 17,  43 => 20,  40 => 9,  57 => 21,  50 => 11,  47 => 9,  38 => 5,  32 => 9,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 10,  28 => 8,  22 => 1,  19 => 1,  232 => 145,  226 => 126,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 135,  193 => 88,  187 => 66,  183 => 71,  180 => 74,  171 => 62,  166 => 74,  163 => 73,  160 => 72,  157 => 61,  149 => 55,  146 => 56,  140 => 45,  137 => 71,  129 => 40,  124 => 39,  121 => 50,  118 => 46,  115 => 37,  111 => 56,  107 => 73,  104 => 41,  97 => 69,  93 => 38,  90 => 47,  81 => 27,  70 => 31,  66 => 23,  62 => 17,  59 => 19,  56 => 16,  52 => 19,  49 => 11,  45 => 11,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
