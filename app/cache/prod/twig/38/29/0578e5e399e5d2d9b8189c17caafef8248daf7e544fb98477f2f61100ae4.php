<?php

/* BookBundle:Log:reservation.html.twig */
class __TwigTemplate_38290578e5e399e5d2d9b8189c17caafef8248daf7e544fb98477f2f61100ae4 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/style-reservation.css"), "html", null, true);
        echo "\">

";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "


<div>
\t<div class=\"banniere\"></div>
\t<div class=\"content-b\">\t
\t<div class=\"table-wrap\">
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Référence"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nom"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Itinéraire"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Type"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Numéro de place"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 31
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ((array_key_exists("data", $context) && (twig_length_filter($this->env, $_data_) > 0))) {
            // line 32
            echo "\t\t\t";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_data_);
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 33
                echo "\t\t\t<tr class=\"alert\" role=\"alert\">
\t\t\t\t<td>";
                // line 34
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_d_, "reservation"), "dateHeure"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 35
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_d_, "reservation"), "transaction"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 36
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_d_, "reservation"), "nom"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 37
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "reservation"), "trajet"), "itinerairecoop"), "itineraire"), "depart"), "html", null, true);
                echo " - ";
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "reservation"), "trajet"), "itinerairecoop"), "itineraire"), "destination"), "html", null, true);
                echo "</td>
\t\t\t\t<td>VIP</td>
\t\t\t\t<td>";
                // line 39
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_d_, "reservation"), "numPlace"), "html", null, true);
                echo "</td>
\t\t\t\t";
                // line 40
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                if (($this->getAttribute($this->getAttribute($_d_, "reservation"), "statut") == 1)) {
                    // line 41
                    echo "\t\t\t\t<td class=\"status\"><span class=\"active\">Active</span></td>
\t\t\t\t";
                } else {
                    // line 43
                    echo "\t\t\t\t<td class=\"status\"><span class=\"waiting\">Rembourse</span></td>
\t\t\t\t";
                }
                // line 45
                echo "\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t<tr><td colspan=\"7\"<center>Aucune reservation effectuee</center></td></tr>
\t\t\t";
        }
        // line 50
        echo "\t\t</tbody>
\t</table>
\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 246,  594 => 245,  590 => 244,  585 => 243,  582 => 242,  577 => 239,  573 => 237,  560 => 234,  554 => 232,  546 => 229,  525 => 221,  519 => 217,  506 => 214,  499 => 212,  484 => 206,  480 => 204,  462 => 199,  459 => 198,  454 => 197,  447 => 194,  445 => 193,  426 => 182,  419 => 179,  415 => 178,  399 => 171,  396 => 170,  392 => 169,  386 => 167,  334 => 145,  243 => 88,  200 => 70,  508 => 351,  504 => 350,  500 => 349,  496 => 211,  492 => 209,  440 => 299,  350 => 222,  262 => 152,  221 => 142,  209 => 138,  184 => 65,  182 => 130,  188 => 74,  181 => 64,  119 => 50,  358 => 156,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 126,  299 => 122,  283 => 116,  258 => 151,  220 => 93,  273 => 105,  260 => 95,  241 => 88,  169 => 64,  161 => 60,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 233,  547 => 253,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 201,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 157,  356 => 161,  331 => 146,  323 => 144,  305 => 139,  289 => 129,  278 => 126,  266 => 101,  481 => 217,  476 => 203,  471 => 8,  467 => 200,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 206,  431 => 183,  422 => 193,  417 => 192,  383 => 171,  378 => 171,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 131,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 72,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 91,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 61,  152 => 64,  148 => 58,  139 => 55,  145 => 105,  133 => 55,  126 => 49,  113 => 44,  94 => 36,  73 => 25,  185 => 73,  168 => 66,  151 => 59,  407 => 174,  402 => 186,  397 => 11,  388 => 168,  384 => 217,  377 => 165,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 153,  259 => 125,  199 => 136,  191 => 68,  179 => 93,  53 => 12,  141 => 75,  123 => 53,  252 => 149,  245 => 147,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 76,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 45,  83 => 41,  132 => 41,  120 => 48,  159 => 59,  64 => 28,  74 => 34,  116 => 49,  99 => 43,  82 => 38,  306 => 125,  301 => 121,  292 => 211,  290 => 113,  282 => 205,  275 => 155,  267 => 196,  263 => 96,  255 => 93,  242 => 103,  238 => 102,  228 => 144,  79 => 36,  125 => 52,  369 => 159,  364 => 158,  353 => 194,  345 => 153,  338 => 216,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 119,  248 => 119,  233 => 110,  225 => 80,  217 => 141,  213 => 73,  205 => 75,  174 => 65,  164 => 63,  154 => 50,  144 => 67,  136 => 43,  87 => 30,  75 => 24,  68 => 21,  61 => 22,  135 => 103,  128 => 79,  105 => 35,  91 => 32,  86 => 39,  54 => 15,  31 => 4,  549 => 230,  543 => 228,  538 => 250,  530 => 222,  526 => 153,  522 => 151,  512 => 215,  505 => 148,  502 => 213,  497 => 146,  491 => 144,  488 => 207,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 211,  455 => 208,  450 => 195,  444 => 205,  441 => 204,  437 => 203,  434 => 296,  429 => 116,  423 => 200,  420 => 111,  416 => 110,  413 => 109,  408 => 196,  394 => 105,  390 => 172,  375 => 241,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 219,  330 => 180,  327 => 145,  321 => 86,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 117,  231 => 85,  219 => 77,  201 => 89,  195 => 78,  189 => 74,  186 => 85,  162 => 67,  155 => 107,  143 => 66,  138 => 57,  134 => 54,  131 => 53,  122 => 51,  117 => 57,  108 => 47,  102 => 46,  92 => 41,  84 => 30,  72 => 20,  69 => 24,  51 => 14,  48 => 13,  35 => 5,  29 => 3,  312 => 96,  308 => 125,  293 => 121,  285 => 115,  281 => 107,  277 => 106,  274 => 85,  271 => 112,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 85,  207 => 83,  204 => 137,  198 => 87,  194 => 69,  178 => 68,  173 => 76,  158 => 59,  150 => 48,  147 => 47,  142 => 57,  130 => 102,  127 => 59,  112 => 46,  96 => 32,  76 => 35,  71 => 22,  55 => 18,  114 => 51,  109 => 37,  106 => 56,  101 => 42,  85 => 35,  77 => 26,  67 => 29,  39 => 10,  110 => 36,  100 => 34,  89 => 34,  65 => 23,  63 => 18,  58 => 17,  34 => 11,  26 => 6,  98 => 39,  88 => 31,  80 => 27,  78 => 26,  46 => 9,  44 => 8,  36 => 12,  60 => 17,  43 => 20,  40 => 9,  57 => 21,  50 => 11,  47 => 9,  38 => 5,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 10,  28 => 3,  22 => 1,  19 => 1,  232 => 145,  226 => 136,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 135,  193 => 88,  187 => 66,  183 => 71,  180 => 74,  171 => 62,  166 => 69,  163 => 62,  160 => 72,  157 => 61,  149 => 55,  146 => 56,  140 => 45,  137 => 71,  129 => 40,  124 => 39,  121 => 50,  118 => 46,  115 => 37,  111 => 50,  107 => 47,  104 => 41,  97 => 33,  93 => 38,  90 => 47,  81 => 27,  70 => 31,  66 => 23,  62 => 17,  59 => 19,  56 => 16,  52 => 19,  49 => 11,  45 => 11,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
