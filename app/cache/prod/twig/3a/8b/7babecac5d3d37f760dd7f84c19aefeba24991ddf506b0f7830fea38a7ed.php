<?php

/* BookBundle:Log:itineraire.html.twig */
class __TwigTemplate_3a8b7babecac5d3d37f760dd7f84c19aefeba24991ddf506b0f7830fea38a7ed extends Twig_Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/style-card-i.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/filter-i-style.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div>
\t<div class=\"banniere\"></div>
\t<div class=\"content-b\">
\t<!-----------------------------Filter------------------------------------>
\t<div class=\"filter\">
\t\t<div class=\"filter-img-leave\"></div>
\t\t<div class=\"filter-img\"></div>
\t</div>
\t<div class=\"filter-form\">
\t\t<div class=\"filter-form-header\">
\t\t\tVoulez-vous filtrer la liste ?
\t\t</div>
\t\t<div class=\"filter-form-content\">
\t\t\t<div class=\"filter-form-content-title\">
\t\t\t\tVeuillez renseigner les informations suivantes svp
\t\t\t</div>
\t\t\t<div class=\"filter-form-content-form\">
\t\t\t\t<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("book_filter_itineraire");
        echo "\" method=\"POST\">
\t\t\t\t\t<div class=\"filter-form-content-form-input\">
\t\t\t\t\t\t<input list=\"villes\" type=\"text\" name=\"depart\" placeholder=\"Départ\" class=\"filter-form-content-form-input-i\" required />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"filter-form-content-form-input\">
\t\t\t\t\t\t<input list=\"villes\" type=\"text\" name=\"destination\" placeholder=\"Destination\" class=\"filter-form-content-form-input-i\" required />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"filter-form-content-form-input\">
\t\t\t\t\t\t<input type=\"submit\" name=\"\" value=\"Valider\" class=\"filter-form-content-form-input-b\">
\t\t\t\t\t</div>
\t\t\t\t\t<datalist id=\"villes\">
\t\t\t\t\t\t";
        // line 37
        if (isset($context["villes"])) { $_villes_ = $context["villes"]; } else { $_villes_ = null; }
        if ((twig_length_filter($this->env, $_villes_) != 0)) {
            // line 38
            echo "\t                        ";
            if (isset($context["villes"])) { $_villes_ = $context["villes"]; } else { $_villes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_villes_);
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 39
                echo "\t                        \t<option value=\"";
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_a_, "localisation"), "html", null, true);
                echo "\">
\t                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t                    ";
        }
        // line 42
        echo "\t\t\t\t\t</datalist>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>\t\t
\t<!-----------------------------End Filter------------------------------------>
\t<!-----------------------------Card------------------------------------>

\t";
        // line 50
        if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
        $context["n"] = (twig_length_filter($this->env, $_itineraires_) - 1);
        // line 51
        echo "\t";
        if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, $_n_));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            echo "\t\t";
            $context["x"] = 0;
            // line 53
            echo "\t\t";
            if (isset($context["itinerairecoops"])) { $_itinerairecoops_ = $context["itinerairecoops"]; } else { $_itinerairecoops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_itinerairecoops_);
            foreach ($context['_seq'] as $context["_key"] => $context["itinerairecoop"]) {
                // line 54
                echo "\t\t\t";
                if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((($this->getAttribute($this->getAttribute($_itinerairecoop_, "itineraire"), "id") == $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "iditineraire", array(), "array")) && ($this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "idcooperative", array(), "array") == $this->getAttribute($this->getAttribute($_itinerairecoop_, "cooperative"), "id")))) {
                    // line 55
                    echo "\t\t\t\t";
                    if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
                    $context["x"] = ($_x_ + 1);
                    // line 56
                    echo "\t\t\t";
                }
                // line 57
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerairecoop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
\t\t";
            // line 59
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            if (($_x_ != 0)) {
                // line 60
                echo "\t\t<div class=\"card-it\">
\t\t";
                // line 61
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                $context["url"] = $this->env->getExtension('assets')->getAssetUrl(("uploads/logo/" . $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "logoitineraire", array(), "array")));
                // line 62
                echo "\t\t";
                $context["urllocalisation"] = $this->env->getExtension('assets')->getAssetUrl("uploads/localisation/default_localisation.jpg");
                // line 63
                echo "\t\t";
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (($this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "logoitineraire", array(), "array") != "")) {
                    // line 64
                    echo "\t\t\t";
                    if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    $context["urllocalisation"] = $this->env->getExtension('assets')->getAssetUrl(("uploads/localisation/" . $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "logoitineraire", array(), "array")));
                    // line 65
                    echo "\t\t";
                }
                // line 66
                echo "\t\t<div class=\"card-it-header\" style=\"background: url(";
                if (isset($context["urllocalisation"])) { $_urllocalisation_ = $context["urllocalisation"]; } else { $_urllocalisation_ = null; }
                echo twig_escape_filter($this->env, $_urllocalisation_, "html", null, true);
                echo ");background-size:  cover;background-repeat: no-repeat;\">
\t\t\t<div class=\"card-it-header-opacity\"></div>
\t\t\t<div class=\"card-it-header-logo\">
\t\t\t\t<img src=\"";
                // line 69
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/logo/" . $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "cooperativelogo", array(), "array"))), "html", null, true);
                echo "\" class=\"card-it-header-logo-img\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card-it-body\">
\t\t\t<div class=\"card-it-body-destination\">
\t\t\t\t";
                // line 74
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "itineraire", array(), "array"), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<div class=\"card-it-body-cooperative-name\">
\t\t\t\t<a href=\"";
                // line 77
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_detailcooperative", array("id" => $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "cooperativeid", array(), "array"))), "html", null, true);
                echo "\" class=\"card-it-body-link\">";
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "cooperative", array(), "array"), "html", null, true);
                echo "</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card-it-tarif\">
\t\t<br/>
\t\t";
                // line 82
                if (isset($context["itinerairecoops"])) { $_itinerairecoops_ = $context["itinerairecoops"]; } else { $_itinerairecoops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_itinerairecoops_);
                foreach ($context['_seq'] as $context["_key"] => $context["itinerairecoop"]) {
                    // line 83
                    echo "\t\t\t";
                    if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                    if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if ((($this->getAttribute($this->getAttribute($_itinerairecoop_, "itineraire"), "id") == $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "iditineraire", array(), "array")) && ($this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "idcooperative", array(), "array") == $this->getAttribute($this->getAttribute($_itinerairecoop_, "cooperative"), "id")))) {
                        // line 84
                        echo "\t\t\t\t<div class=\"group-info-body-c-i-destination-tarif\">
\t\t\t\t\t<div class=\"label-c-i-destination-tarif\">";
                        // line 85
                        if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_itinerairecoop_, "place"), "typeplace"), "html", null, true);
                        echo "</div><div class=\"prix-c-i-destination-tarif\">";
                        if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_itinerairecoop_, "prix"), "html", null, true);
                        echo " Ar</div>
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 88
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerairecoop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "\t\t\t
\t\t</div>
\t\t</div>
\t\t";
            }
            // line 93
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
\t";
        // line 96
        if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
        if ((twig_length_filter($this->env, $_itineraires_) == 0)) {
            // line 97
            echo "
\t<div style=\"margin-top:20px; line-height: 40px; text-align:center; background: #fff; width: 100%; min-height: 40px; height: auto; padding: 5px auto;\">
\tAucun resultat
\t</div>
\t";
        }
        // line 102
        echo "


\t
<!-----------------------------End card------------------------------------>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:itineraire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 102,  260 => 95,  241 => 88,  169 => 64,  161 => 62,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 258,  547 => 253,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 214,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 164,  356 => 161,  331 => 146,  323 => 144,  305 => 139,  289 => 129,  278 => 126,  266 => 97,  481 => 217,  476 => 215,  471 => 8,  467 => 212,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 206,  431 => 197,  422 => 193,  417 => 192,  383 => 171,  378 => 171,  360 => 165,  341 => 158,  336 => 156,  322 => 151,  317 => 149,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 93,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 143,  315 => 142,  311 => 126,  303 => 144,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 91,  203 => 77,  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 64,  148 => 58,  139 => 56,  145 => 58,  133 => 55,  126 => 50,  113 => 38,  94 => 36,  73 => 28,  185 => 69,  168 => 70,  151 => 59,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 128,  259 => 125,  199 => 78,  191 => 84,  179 => 93,  53 => 12,  141 => 75,  123 => 53,  252 => 92,  245 => 87,  234 => 94,  230 => 80,  227 => 79,  214 => 77,  190 => 76,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 52,  159 => 62,  64 => 24,  74 => 25,  116 => 49,  99 => 45,  82 => 38,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 96,  255 => 100,  242 => 96,  238 => 95,  228 => 84,  79 => 37,  125 => 52,  369 => 208,  364 => 165,  353 => 194,  345 => 189,  338 => 185,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 138,  248 => 119,  233 => 110,  225 => 95,  217 => 82,  213 => 102,  205 => 75,  174 => 65,  164 => 63,  154 => 60,  144 => 67,  136 => 77,  87 => 40,  75 => 24,  68 => 24,  61 => 29,  135 => 55,  128 => 79,  105 => 36,  91 => 29,  86 => 39,  54 => 24,  31 => 4,  549 => 162,  543 => 161,  538 => 250,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 211,  455 => 208,  450 => 126,  444 => 205,  441 => 204,  437 => 203,  434 => 119,  429 => 116,  423 => 200,  420 => 111,  416 => 110,  413 => 109,  408 => 196,  394 => 105,  390 => 172,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 156,  330 => 180,  327 => 145,  321 => 86,  307 => 125,  302 => 84,  295 => 81,  287 => 80,  279 => 135,  256 => 73,  251 => 120,  239 => 117,  231 => 85,  219 => 95,  201 => 89,  195 => 74,  189 => 86,  186 => 85,  162 => 67,  155 => 69,  143 => 66,  138 => 48,  134 => 47,  131 => 62,  122 => 70,  117 => 57,  108 => 47,  102 => 46,  92 => 31,  84 => 30,  72 => 20,  69 => 30,  51 => 20,  48 => 13,  35 => 6,  29 => 3,  312 => 96,  308 => 140,  293 => 121,  285 => 115,  281 => 127,  277 => 86,  274 => 85,  271 => 77,  264 => 128,  261 => 81,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 105,  207 => 81,  204 => 90,  198 => 87,  194 => 95,  178 => 61,  173 => 76,  158 => 72,  150 => 70,  147 => 51,  142 => 57,  130 => 45,  127 => 59,  112 => 42,  96 => 32,  76 => 37,  71 => 24,  55 => 18,  114 => 51,  109 => 37,  106 => 56,  101 => 42,  85 => 35,  77 => 23,  67 => 30,  39 => 10,  110 => 57,  100 => 38,  89 => 27,  65 => 26,  63 => 18,  58 => 17,  34 => 11,  26 => 6,  98 => 41,  88 => 39,  80 => 33,  78 => 26,  46 => 9,  44 => 14,  36 => 12,  60 => 17,  43 => 8,  40 => 9,  57 => 16,  50 => 11,  47 => 14,  38 => 5,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 9,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 136,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 81,  180 => 74,  171 => 77,  166 => 69,  163 => 63,  160 => 72,  157 => 61,  149 => 68,  146 => 67,  140 => 65,  137 => 71,  129 => 54,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 50,  107 => 41,  104 => 34,  97 => 42,  93 => 38,  90 => 47,  81 => 37,  70 => 31,  66 => 23,  62 => 18,  59 => 23,  56 => 16,  52 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
