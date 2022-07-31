<?php

/* BookBundle:Log:moncompte.html.twig */
class __TwigTemplate_73b6fedb16f3df2820ec5a6f36f03690501ebcaab46d93e3db7d765f68321070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_user.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/moncompte-style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/transaction-table.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div>
\t\t<div class=\"banniere\"></div>

\t\t<div class=\"content-b\">

<div class=\"mc-style-content\">
\t\t<!------------------------------------------------------------------------------->
\t\t<!------------------------------------Start content------------------------------->

\t\t<div class=\"mc-left-content\">
\t\t\t";
        // line 19
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ((array_key_exists("user", $context) && twig_length_filter($this->env, $_user_))) {
            // line 20
            echo "\t\t\t";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_user_);
            foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
                // line 21
                echo "\t\t\t<div class=\"mc-user-details\">
\t\t\t\t<div class=\"mc-user-details-header\">
\t\t\t\t\t<div class=\"mc-user-details-h-avatar\">
\t\t\t\t\t\t";
                // line 24
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_slice($this->env, $this->getAttribute($_app_, "user"), 0, 1)), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mc-user-details-h-name\">
\t\t\t\t\t\t";
                // line 27
                if (isset($context["us"])) { $_us_ = $context["us"]; } else { $_us_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_us_, "username"), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mc-user-details-h-link-update\">
\t\t\t\t\t\t<a href=\"#\">";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Modifier"), "html", null, true);
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"mc-user-details-body\">
\t\t\t\t\t<div class=\"mc-user-details-body-title\">
\t\t\t\t\t\t<div class=\"t-details-icon\"></div>
\t\t\t\t\t\t<div class=\"mc-user-details-body-title-l\">";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mon compte"), "html", null, true);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mc-user-details-body-details\">
\t\t\t\t\t\t<div class=\"block-mc-user-details-body-details\">
\t\t\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("E-mail"), "html", null, true);
                echo " : ";
                if (isset($context["us"])) { $_us_ = $context["us"]; } else { $_us_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_us_, "email"), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-mc-user-details-body-details\">
\t\t\t\t\t\t\t";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot de passe"), "html", null, true);
                echo " : ******** (<a href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Modifier"), "html", null, true);
                echo "</a>)
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t";
        }
        echo "\t
\t\t\t</div>


\t\t\t<div class=\"mc-user-parametre\">
\t\t\t\t<div class=\"mc-user-parametre-details\">
\t\t\t\t\t<div class=\"mc-user-parametre-title\">
\t\t\t\t\t\t<div class=\"t-param-icon\"></div>
\t\t\t\t\t\t<div class=\"mc-user-parametre-title-l\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Paramètres"), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mc-user-parametre-details-d\">
\t\t\t\t\t\t<div class=\"block-mc-user-parametre-details-d\">
\t\t\t\t\t\t\tLangue : 
\t\t\t\t\t\t\t\t<select class=\"langue-b2\" id=\"langue-account\">
\t\t\t\t\t\t\t\t\t";
        // line 63
        if (array_key_exists("langue", $context)) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"en_EN\" ";
            if (isset($context["langue"])) { $_langue_ = $context["langue"]; } else { $_langue_ = null; }
            if (($_langue_ == "en_EN")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Anglais"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"fr_FR\" ";
            // line 65
            if (isset($context["langue"])) { $_langue_ = $context["langue"]; } else { $_langue_ = null; }
            if (($_langue_ == "fr_FR")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Français"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"mg_MG\" ";
            // line 66
            if (isset($context["langue"])) { $_langue_ = $context["langue"]; } else { $_langue_ = null; }
            if (($_langue_ == "mg_MG")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Malagasy"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-mc-user-parametre-details-d\">
\t\t\t\t\t\t\t<a href=\"#\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Supprimer le profil"), "html", null, true);
        echo " </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-mc-user-parametre-details-d\">
\t\t\t\t\t\t\t<a href=\"#\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contactez le service client"), "html", null, true);
        echo " </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-mc-user-parametre-details-d\">
\t\t\t\t\t\t\t<a href=\"#\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aide"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"link-log-out\">
\t\t\t\t\t\t<a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
\t\t\t\t\t\t\t<input type=\"submit\" name=\"\" class=\"log-out-bnt\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Déconnexion"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mc-right-content\">
\t\t\t<div class=\"mc-right-content-details\">
\t\t\t\t<div class=\"mc-user-right-title\">
\t\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Historique de transaction"), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"mc-user-right-details\">
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Référence"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Montant"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 107
        if (isset($context["paiement"])) { $_paiement_ = $context["paiement"]; } else { $_paiement_ = null; }
        if ((array_key_exists("paiement", $context) && (twig_length_filter($this->env, $_paiement_) > 0))) {
            // line 108
            echo "\t\t\t\t\t\t\t";
            if (isset($context["paiement"])) { $_paiement_ = $context["paiement"]; } else { $_paiement_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_paiement_);
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 109
                echo "\t\t\t\t\t\t\t<tr class=\"alert\" role=\"alert\">
\t\t\t\t\t\t\t\t<td>";
                // line 110
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_p_, "reservation"), "dateHeure"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 111
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_p_, "reservation"), "transaction"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 112
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_p_, "reservation"), "montant"), "html", null, true);
                echo " Ar</td>
\t\t\t\t\t\t\t\t";
                // line 113
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                if (($this->getAttribute($this->getAttribute($_p_, "reservation"), "statut") == 1)) {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t<td class=\"status\"><span class=\"active\">Done</span></td>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                    if (($this->getAttribute($this->getAttribute($_p_, "reservation"), "statut") == 0)) {
                        // line 117
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"status\"><span class=\"waiting\">En cours</span></td>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                        if (($this->getAttribute($this->getAttribute($_p_, "reservation"), "statut") == 2)) {
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t\t<td class=\"status\"><span class=\"notif\">Refunded</span></td>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 122
                            echo "\t\t\t\t\t\t\t\t\t\t<td class=\"status\"><span class=\"waiting\">Unknown payment</span></td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 129
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\"><center>";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aucun resultat"), "html", null, true);
            echo "</center></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<!-------------------------------End content------------------------------------>
\t\t<!------------------------------------------------------------------------------->
</div>


\t\t</div>
\t</div>
";
    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        // line 150
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/langue.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:moncompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 152,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 126,  299 => 122,  283 => 116,  258 => 109,  220 => 93,  273 => 102,  260 => 95,  241 => 88,  169 => 64,  161 => 62,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 258,  547 => 253,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 214,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 164,  356 => 161,  331 => 146,  323 => 144,  305 => 139,  289 => 129,  278 => 126,  266 => 111,  481 => 217,  476 => 215,  471 => 8,  467 => 212,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 206,  431 => 197,  422 => 193,  417 => 192,  383 => 171,  378 => 171,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 149,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 93,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 91,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 64,  148 => 58,  139 => 56,  145 => 58,  133 => 55,  126 => 49,  113 => 44,  94 => 36,  73 => 24,  185 => 69,  168 => 66,  151 => 59,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 128,  259 => 125,  199 => 78,  191 => 84,  179 => 93,  53 => 12,  141 => 75,  123 => 53,  252 => 108,  245 => 87,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 76,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 52,  159 => 65,  64 => 24,  74 => 25,  116 => 49,  99 => 45,  82 => 38,  306 => 125,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 96,  255 => 100,  242 => 103,  238 => 102,  228 => 84,  79 => 37,  125 => 52,  369 => 208,  364 => 165,  353 => 194,  345 => 189,  338 => 185,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 119,  248 => 119,  233 => 110,  225 => 95,  217 => 82,  213 => 102,  205 => 75,  174 => 65,  164 => 63,  154 => 60,  144 => 67,  136 => 77,  87 => 30,  75 => 24,  68 => 21,  61 => 29,  135 => 55,  128 => 79,  105 => 36,  91 => 29,  86 => 39,  54 => 24,  31 => 4,  549 => 162,  543 => 161,  538 => 250,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 211,  455 => 208,  450 => 126,  444 => 205,  441 => 204,  437 => 203,  434 => 119,  429 => 116,  423 => 200,  420 => 111,  416 => 110,  413 => 109,  408 => 196,  394 => 105,  390 => 172,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 156,  330 => 180,  327 => 145,  321 => 86,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 117,  231 => 85,  219 => 95,  201 => 89,  195 => 77,  189 => 74,  186 => 85,  162 => 67,  155 => 69,  143 => 66,  138 => 57,  134 => 47,  131 => 62,  122 => 70,  117 => 57,  108 => 47,  102 => 46,  92 => 31,  84 => 30,  72 => 20,  69 => 30,  51 => 20,  48 => 13,  35 => 6,  29 => 3,  312 => 96,  308 => 140,  293 => 121,  285 => 115,  281 => 127,  277 => 86,  274 => 85,  271 => 112,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 105,  207 => 83,  204 => 90,  198 => 87,  194 => 95,  178 => 68,  173 => 76,  158 => 72,  150 => 70,  147 => 63,  142 => 57,  130 => 45,  127 => 59,  112 => 42,  96 => 32,  76 => 37,  71 => 24,  55 => 18,  114 => 51,  109 => 37,  106 => 56,  101 => 42,  85 => 35,  77 => 23,  67 => 30,  39 => 10,  110 => 57,  100 => 38,  89 => 27,  65 => 26,  63 => 18,  58 => 17,  34 => 11,  26 => 6,  98 => 41,  88 => 39,  80 => 27,  78 => 26,  46 => 9,  44 => 8,  36 => 12,  60 => 17,  43 => 8,  40 => 9,  57 => 16,  50 => 11,  47 => 9,  38 => 5,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 9,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 136,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 71,  180 => 74,  171 => 77,  166 => 69,  163 => 63,  160 => 72,  157 => 61,  149 => 64,  146 => 67,  140 => 65,  137 => 71,  129 => 54,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 50,  107 => 41,  104 => 41,  97 => 37,  93 => 38,  90 => 47,  81 => 37,  70 => 31,  66 => 23,  62 => 20,  59 => 19,  56 => 16,  52 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
