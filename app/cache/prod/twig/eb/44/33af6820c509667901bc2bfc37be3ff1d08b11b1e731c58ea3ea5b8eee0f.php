<?php

/* BookBundle:Log:notification.html.twig */
class __TwigTemplate_eb4433af6820c509667901bc2bfc37be3ff1d08b11b1e731c58ea3ea5b8eee0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_user.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/style-notification.css"), "html", null, true);
        echo "\">

";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<div>
\t<div class=\"banniere\"></div>
\t<div class=\"content-b\">

\t";
        // line 14
        if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
        if ((array_key_exists("notification", $context) && (twig_length_filter($this->env, $_notification_) > 0))) {
            // line 15
            echo "
\t\t";
            // line 16
            if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_notification_);
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 17
                echo "\t<!--------------------------------------- card----------------------------------------->
\t<!------------------------------------------------------------------------------------->

\t<div class=\"notification-card\">
\t\t";
                // line 21
                if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                $context["url"] = ("uploads/localisation/" . $this->getAttribute($this->getAttribute($_n_, "destination"), "photo"));
                // line 22
                echo "
\t\t<div class=\"notification-card-header\" style=\"background:url(";
                // line 23
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($_url_), "html", null, true);
                echo ") center no-repeat; background-size: cover;\">
\t\t\t<div class=\"c-i-baniere-bg-opacity\">
\t\t\t\t<div class=\"c-i-baniere-link\">
\t\t\t\t\t<div class=\"delete-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<div class=\"delete-icon-i\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"notif-icon\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<div class=\"notif-icon-i\"></div>
\t\t\t\t\t\t\t<div class=\"counter-notification\">";
                // line 34
                if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_n_, "nbrResult"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t
\t\t\t\t<div class=\"notification-card-destination\">
\t\t\t\t\t";
                // line 39
                if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_n_, "depart"), "html", null, true);
                echo " - ";
                if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_n_, "destination"), "html", null, true);
                echo "
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"notification-card-body\">
\t\t\t<div class=\"notification-card-body-title\">
\t\t\t\t";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vos crit??res"), "html", null, true);
                echo " :
\t\t\t</div>
\t\t\t<div class=\"notification-card-body-details\">
\t\t\t\t<ul style=\"min-height: 115px; height: auto;\">
\t\t\t\t\t";
                // line 50
                if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                if (($this->getAttribute($_n_, "cooperative") != null)) {
                    // line 51
                    echo "\t\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Coop??rative"), "html", null, true);
                    echo " : ";
                    if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_n_, "cooperative"), "html", null, true);
                    echo "</li>
\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t
\t\t\t\t\t<li>Date : ";
                // line 54
                if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_n_, "date"), "d/m/Y"), "html", null, true);
                echo "</li>
\t\t\t\t\t<li>";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nombre de place"), "html", null, true);
                echo " : ";
                if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_n_, "nbrPlace"), "html", null, true);
                echo "</li>
\t\t\t\t\t";
                // line 56
                if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                if (($this->getAttribute($_n_, "cooperative") != null)) {
                    // line 57
                    echo "\t\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Type de place"), "html", null, true);
                    echo " : ";
                    if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_n_, "place"), "html", null, true);
                    echo "</li>
\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<a href=\"";
                // line 62
                if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_notification_search", array("id" => $this->getAttribute($_n_, "id"))), "html", null, true);
                echo "\"><input type=\"submit\" name=\"\" class=\"card-notification-button\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recherche"), "html", null, true);
                echo "\"></1>
\t\t\t</div>
\t\t</div>

\t</div>

<!--------------------------------------- end card----------------------------------------->
<!------------------------------------------------------------------------------------->
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
\t";
        } else {
            // line 73
            echo "\t\t<div style=\"margin-top:20px; line-height: 40px; text-align:center; background: #fff; width: 100%; min-height: 40px; height: auto; padding: 5px auto;\">
\t\t";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aucune recherche enregistr??e"), "html", null, true);
            echo "
\t\t</div>

\t";
        }
        // line 78
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 74,  181 => 71,  119 => 50,  358 => 152,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 126,  299 => 122,  283 => 116,  258 => 109,  220 => 93,  273 => 102,  260 => 95,  241 => 88,  169 => 64,  161 => 62,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 258,  547 => 253,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 214,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 164,  356 => 161,  331 => 146,  323 => 144,  305 => 139,  289 => 129,  278 => 126,  266 => 111,  481 => 217,  476 => 215,  471 => 8,  467 => 212,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 206,  431 => 197,  422 => 193,  417 => 192,  383 => 171,  378 => 171,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 149,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 93,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 91,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 64,  148 => 58,  139 => 55,  145 => 58,  133 => 55,  126 => 49,  113 => 44,  94 => 36,  73 => 24,  185 => 73,  168 => 66,  151 => 59,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 128,  259 => 125,  199 => 78,  191 => 84,  179 => 93,  53 => 12,  141 => 75,  123 => 53,  252 => 108,  245 => 87,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 76,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 52,  159 => 65,  64 => 24,  74 => 23,  116 => 49,  99 => 45,  82 => 38,  306 => 125,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 96,  255 => 100,  242 => 103,  238 => 102,  228 => 84,  79 => 37,  125 => 52,  369 => 208,  364 => 165,  353 => 194,  345 => 189,  338 => 185,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 119,  248 => 119,  233 => 110,  225 => 95,  217 => 82,  213 => 102,  205 => 75,  174 => 65,  164 => 63,  154 => 60,  144 => 67,  136 => 77,  87 => 30,  75 => 24,  68 => 21,  61 => 29,  135 => 55,  128 => 79,  105 => 36,  91 => 29,  86 => 39,  54 => 15,  31 => 4,  549 => 162,  543 => 161,  538 => 250,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 211,  455 => 208,  450 => 126,  444 => 205,  441 => 204,  437 => 203,  434 => 119,  429 => 116,  423 => 200,  420 => 111,  416 => 110,  413 => 109,  408 => 196,  394 => 105,  390 => 172,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 156,  330 => 180,  327 => 145,  321 => 86,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 117,  231 => 85,  219 => 95,  201 => 89,  195 => 78,  189 => 74,  186 => 85,  162 => 67,  155 => 69,  143 => 66,  138 => 57,  134 => 54,  131 => 53,  122 => 51,  117 => 57,  108 => 47,  102 => 46,  92 => 31,  84 => 30,  72 => 20,  69 => 30,  51 => 14,  48 => 13,  35 => 5,  29 => 3,  312 => 96,  308 => 140,  293 => 121,  285 => 115,  281 => 127,  277 => 86,  274 => 85,  271 => 112,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 105,  207 => 83,  204 => 90,  198 => 87,  194 => 95,  178 => 68,  173 => 76,  158 => 59,  150 => 70,  147 => 63,  142 => 57,  130 => 45,  127 => 59,  112 => 46,  96 => 32,  76 => 37,  71 => 22,  55 => 18,  114 => 51,  109 => 37,  106 => 56,  101 => 42,  85 => 35,  77 => 23,  67 => 30,  39 => 10,  110 => 57,  100 => 38,  89 => 34,  65 => 26,  63 => 18,  58 => 17,  34 => 11,  26 => 6,  98 => 39,  88 => 39,  80 => 27,  78 => 26,  46 => 9,  44 => 8,  36 => 12,  60 => 17,  43 => 8,  40 => 9,  57 => 16,  50 => 11,  47 => 9,  38 => 5,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 9,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 136,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 71,  180 => 74,  171 => 77,  166 => 69,  163 => 62,  160 => 72,  157 => 61,  149 => 57,  146 => 56,  140 => 65,  137 => 71,  129 => 54,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 50,  107 => 41,  104 => 41,  97 => 37,  93 => 38,  90 => 47,  81 => 37,  70 => 31,  66 => 23,  62 => 17,  59 => 19,  56 => 16,  52 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
