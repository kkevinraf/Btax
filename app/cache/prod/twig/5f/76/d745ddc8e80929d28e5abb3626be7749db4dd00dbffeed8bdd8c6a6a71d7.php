<?php

/* ::layout_user.html.twig */
class __TwigTemplate_5f76d745ddc8e80929d28e5abb3626be7749db4dd00dbffeed8bdd8c6a6a71d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>B'tax</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"\">
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/icone-style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/avatar-style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/style-card-cooperative.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/styles-star.css"), "html", null, true);
        echo "\">
</head>
<body>
    <!-----------------------------Header------------------------------------>
    <header class=\"topbar-c\">
        <div class=\"nav-c\">


            <!-----------------------------Header Left------------------------------------>
            <div class=\"nav-c-left\">
                <div class=\"logo-place\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/logo-f.png"), "html", null, true);
        echo "\" class=\"logo-place-img\">
                </div>
            </div>
            <!-----------------------------End Header Left------------------------------------>


            <!-----------------------------Header Right------------------------------------>
            <div class=\"nav-c-right\">


                <!-----------------------------Link toggle Menu------------------------------------>
                <div class=\"m-right-toggle-list\">
                    <span class=\"m-toggle-icon\"></span>
                </div>
                <!-----------------------------End Link toggle Menu------------------------------------>

                <!-----------------------------Desktop Menu------------------------------------>
                <div class=\"link-right-nav-c\">

                    <!-----------------------------Desktop Menu Left ------------------------------------>
                    <div class=\"link-right-nav-c-left\">
                        <div class=\"link-right-nav-c-left-space\">
                            <ul>
                                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("book_reservation");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                                    <li>
                                        <div class=\"fusion-link\">
                                            <div class=\"icon-fusion-link\" id=\"reservation";
        // line 50
        if (isset($context["preservation"])) { $_preservation_ = $context["preservation"]; } else { $_preservation_ = null; }
        if ((array_key_exists("preservation", $context) && ($_preservation_ == "active"))) {
            echo "-active";
        }
        echo "\">      
                                            </div>
                                            <div class=\"label-fusion-link ";
        // line 52
        if (isset($context["preservation"])) { $_preservation_ = $context["preservation"]; } else { $_preservation_ = null; }
        if ((array_key_exists("preservation", $context) && ($_preservation_ == "active"))) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Réservation"), "html", null, true);
        echo "</div>
                                        </div>
                                    </li>
                                </a>

                                <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("book_cooperative");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                                <li>
                                    <div class=\"fusion-link\">
                                        <div class=\"icon-fusion-link\" id=\"cooperative";
        // line 60
        if (isset($context["pcooperative"])) { $_pcooperative_ = $context["pcooperative"]; } else { $_pcooperative_ = null; }
        if ((array_key_exists("pcooperative", $context) && ($_pcooperative_ == "active"))) {
            echo "-active";
        }
        echo "\">     
                                        </div>
                                        <div class=\"label-fusion-link ";
        // line 62
        if (isset($context["pcooperative"])) { $_pcooperative_ = $context["pcooperative"]; } else { $_pcooperative_ = null; }
        if ((array_key_exists("pcooperative", $context) && ($_pcooperative_ == "active"))) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Coopérative"), "html", null, true);
        echo "</div>
                                    </div>
                                </li>
                                </a>

                                <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("book_itineraire");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                                <li>
                                    <div class=\"fusion-link\">
                                        <div class=\"icon-fusion-link\" id=\"itineraire";
        // line 70
        if (isset($context["pitineraire"])) { $_pitineraire_ = $context["pitineraire"]; } else { $_pitineraire_ = null; }
        if ((array_key_exists("pitineraire", $context) && ($_pitineraire_ == "active"))) {
            echo "-active";
        }
        echo "\">      
                                        </div>
                                        <div class=\"label-fusion-link ";
        // line 72
        if (isset($context["pitineraire"])) { $_pitineraire_ = $context["pitineraire"]; } else { $_pitineraire_ = null; }
        if ((array_key_exists("pitineraire", $context) && ($_pitineraire_ == "active"))) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Itinéraire"), "html", null, true);
        echo "</div>
                                    </div>
                                </li>
                                </a>

                                <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("book_recherche");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                                <li>
                                    <div class=\"fusion-link\">
                                        <div class=\"icon-fusion-link\" id=\"recherche";
        // line 80
        if (isset($context["precherche"])) { $_precherche_ = $context["precherche"]; } else { $_precherche_ = null; }
        if ((array_key_exists("precherche", $context) && ($_precherche_ == "active"))) {
            echo "-active";
        }
        echo "\">       
                                        </div>
                                        <div class=\"label-fusion-link ";
        // line 82
        if (isset($context["precherche"])) { $_precherche_ = $context["precherche"]; } else { $_precherche_ = null; }
        if ((array_key_exists("precherche", $context) && ($_precherche_ == "active"))) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recherche"), "html", null, true);
        echo "</div>
                                    </div>
                                </li>
                                </a>

                                <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("book_notification");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                                <li>
                                    <div class=\"fusion-link\">
                                        ";
        // line 90
        if (array_key_exists("numbernotification", $context)) {
            // line 91
            echo "                                        <div class=\"counter-fusion-link\">numbernotification</div>
                                        ";
        }
        // line 93
        echo "                                        <div class=\"icon-fusion-link\" id=\"notification";
        if (isset($context["pnotification"])) { $_pnotification_ = $context["pnotification"]; } else { $_pnotification_ = null; }
        if ((array_key_exists("pnotification", $context) && ($_pnotification_ == "active"))) {
            echo "-active";
        }
        echo "\">        
                                        </div>
                                        <div class=\"label-fusion-link ";
        // line 95
        if (isset($context["pnotification"])) { $_pnotification_ = $context["pnotification"]; } else { $_pnotification_ = null; }
        if ((array_key_exists("pnotification", $context) && ($_pnotification_ == "active"))) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Notification"), "html", null, true);
        echo "</div>
                                    </div>
                                </li>
                                </a>
                            </ul>
                        </div>
                    </div>

                    <!-----------------------------Desktop Menu Right------------------------------------>
                    <div class=\"link-right-nav-c-right\">
                        <div class=\"avatar-e\">";
        // line 105
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_slice($this->env, $this->getAttribute($_app_, "user"), 0, 1)), "html", null, true);
        echo "</div>
                    </div>
                </div>
                <!-----------------------------End Desktop Menu------------------------------------>


            </div>
            <!-----------------------------End Header Right------------------------------------>

        </div>
    </header>
    <!-----------------------------End Header------------------------------------>


    <!-----------------------------Toggle Menu------------------------------------>

    <div class=\"toggle-menu is-close\">


        <div class=\"header-toggle-menu-c\"></div>


        <div class=\"info-member\">
            <div class=\"avatar-img\">";
        // line 128
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_slice($this->env, $this->getAttribute($_app_, "user"), 0, 2)), "html", null, true);
        echo "</div>
            <div class=\"name-member\">";
        // line 129
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "user"), "html", null, true);
        echo "</div>
        </div>


        <div class=\"body-toggle-menu\">
            <ul>
                <a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("book_reservation");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                <li class=\"toggle-list-link\">
                    <div class=\"toggle-icon\" id=\"reservation";
        // line 137
        if (isset($context["preservation"])) { $_preservation_ = $context["preservation"]; } else { $_preservation_ = null; }
        if ((array_key_exists("preservation", $context) && ($_preservation_ == "active"))) {
            echo "-active";
        }
        echo "\"></div>
                    <div class=\"toggle-label\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Réservation"), "html", null, true);
        echo "</div>
                </li>
                </a>

                <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("book_cooperative");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                <li class=\"toggle-list-link\">
                    <div class=\"toggle-icon\" id=\"cooperative";
        // line 144
        if (isset($context["pcooperative"])) { $_pcooperative_ = $context["pcooperative"]; } else { $_pcooperative_ = null; }
        if ((array_key_exists("pcooperative", $context) && ($_pcooperative_ == "active"))) {
            echo "-active";
        }
        echo "\"></div>
                    <div class=\"toggle-label\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Coopérative"), "html", null, true);
        echo "</div>
                </li>
                </a>

                <a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("book_itineraire");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                <li class=\"toggle-list-link\">
                    <div class=\"toggle-icon\" id=\"itineraire";
        // line 151
        if (isset($context["pitineraire"])) { $_pitineraire_ = $context["pitineraire"]; } else { $_pitineraire_ = null; }
        if ((array_key_exists("pitineraire", $context) && ($_pitineraire_ == "active"))) {
            echo "-active";
        }
        echo "\"></div>
                    <div class=\"toggle-label\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Itinéraire"), "html", null, true);
        echo "</div>
                </li>
                </a>

                <a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("book_recherche");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                <li class=\"toggle-list-link\">
                    <div class=\"toggle-icon\" id=\"recherche";
        // line 158
        if (isset($context["precherche"])) { $_precherche_ = $context["precherche"]; } else { $_precherche_ = null; }
        if ((array_key_exists("precherche", $context) && ($_precherche_ == "active"))) {
            echo "-active";
        }
        echo "\"></div>
                    <div class=\"toggle-label\">";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recherche"), "html", null, true);
        echo "</div>
                </li>
                </a>

                <a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("book_notification");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                <li class=\"toggle-list-link\">
                    <div class=\"toggle-icon\" id=\"notification";
        // line 165
        if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
        if ((array_key_exists("notification", $context) && ($_notification_ == "active"))) {
            echo "-active";
        }
        echo "\"></div>
                    <div class=\"toggle-label ";
        // line 166
        if (isset($context["pnotification"])) { $_pnotification_ = $context["pnotification"]; } else { $_pnotification_ = null; }
        if ((array_key_exists("pnotification", $context) && ($_pnotification_ == "active"))) {
            echo "active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Notification"), "html", null, true);
        echo "</div>
                </li>
                </a>
                <a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("book_myaccount");
        echo "\" class=\"link-right-nav-c-left-space-link\">
                <li class=\"toggle-list-link\">
                    <div class=\"toggle-icon\" id=\"parametres";
        // line 171
        if (isset($context["pparametres"])) { $_pparametres_ = $context["pparametres"]; } else { $_pparametres_ = null; }
        if ((array_key_exists("pparametres", $context) && ($_pparametres_ == "active"))) {
            echo "-active";
        }
        echo "\"></div>
                    <div class=\"toggle-label\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Paramètres"), "html", null, true);
        echo "</div>
                </li>
                </a>
            </ul>
        </div>
    </div>

    <!-----------------------------End Toggle Menu------------------------------------>

    <!-----------------------------Avatar Menu------------------------------------>

    <div class=\"avatar-menu\">
        <div class=\"triangle\"></div>
        <div class=\"avatar-header\">
            <div class=\"avatar-pic\">
                <div class=\"avatar-img-img\">";
        // line 187
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_slice($this->env, $this->getAttribute($_app_, "user"), 0, 2)), "html", null, true);
        echo "</div>    
            </div>
        </div>
        <div class=\"avatar-body\">
            <div class=\"avatar-name\">
                ";
        // line 192
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "user"), "html", null, true);
        echo "<br>
                <a href=\"";
        // line 193
        echo $this->env->getExtension('routing')->getPath("book_myaccount");
        echo "\" class=\"avatar-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mon compte"), "html", null, true);
        echo "</a>
            </div>
        </div>
        <div class=\"avatar-footer\">
            <div class=\"footer-a-left\"><a href=\"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"avatar-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Déconnexion"), "html", null, true);
        echo "</a></div>
            <div class=\"footer-a-right\"><a href=\"#\" class=\"avatar-link\">";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Aide"), "html", null, true);
        echo "</a></div>
        </div>
    </div>




    <!-----------------------------End Avatar Menu------------------------------------>

    ";
        // line 207
        $this->displayBlock('body', $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/avatar-script.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 211
        $this->displayBlock('javascripts', $context, $blocks);
        // line 212
        echo "</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 207
    public function block_body($context, array $blocks = array())
    {
    }

    // line 211
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 211,  476 => 207,  471 => 8,  467 => 212,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 207,  431 => 197,  422 => 193,  417 => 192,  383 => 171,  378 => 169,  360 => 165,  341 => 158,  336 => 156,  322 => 151,  317 => 149,  310 => 145,  298 => 142,  284 => 137,  269 => 129,  210 => 93,  206 => 91,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 128,  315 => 127,  311 => 126,  303 => 144,  276 => 113,  250 => 98,  246 => 97,  218 => 84,  212 => 82,  203 => 79,  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 64,  148 => 59,  139 => 56,  145 => 58,  133 => 55,  126 => 71,  113 => 38,  94 => 43,  73 => 28,  185 => 82,  168 => 70,  151 => 79,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 128,  259 => 125,  199 => 78,  191 => 96,  179 => 93,  53 => 19,  141 => 75,  123 => 60,  252 => 92,  245 => 87,  234 => 94,  230 => 80,  227 => 79,  214 => 77,  190 => 76,  177 => 80,  170 => 65,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 43,  159 => 62,  64 => 24,  74 => 31,  116 => 49,  99 => 45,  82 => 42,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 104,  255 => 100,  242 => 96,  238 => 95,  228 => 92,  79 => 32,  125 => 52,  369 => 208,  364 => 153,  353 => 194,  345 => 189,  338 => 185,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 138,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 72,  164 => 77,  154 => 75,  144 => 67,  136 => 77,  87 => 40,  75 => 32,  68 => 19,  61 => 29,  135 => 58,  128 => 79,  105 => 36,  91 => 29,  86 => 39,  54 => 24,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 198,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 187,  394 => 105,  390 => 172,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 139,  330 => 180,  327 => 88,  321 => 86,  307 => 125,  302 => 84,  295 => 81,  287 => 80,  279 => 135,  256 => 73,  251 => 120,  239 => 117,  231 => 112,  219 => 95,  201 => 66,  195 => 77,  189 => 86,  186 => 85,  162 => 67,  155 => 65,  143 => 57,  138 => 48,  134 => 47,  131 => 62,  122 => 70,  117 => 57,  108 => 47,  102 => 46,  92 => 41,  84 => 26,  72 => 20,  69 => 30,  51 => 20,  48 => 18,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 121,  285 => 115,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 128,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 119,  237 => 105,  207 => 81,  204 => 90,  198 => 87,  194 => 95,  178 => 61,  173 => 58,  158 => 72,  150 => 70,  147 => 51,  142 => 57,  130 => 45,  127 => 59,  112 => 42,  96 => 50,  76 => 37,  71 => 24,  55 => 18,  114 => 42,  109 => 37,  106 => 56,  101 => 35,  85 => 35,  77 => 23,  67 => 30,  39 => 10,  110 => 57,  100 => 39,  89 => 27,  65 => 27,  63 => 27,  58 => 17,  34 => 11,  26 => 6,  98 => 34,  88 => 38,  80 => 33,  78 => 29,  46 => 12,  44 => 14,  36 => 12,  60 => 27,  43 => 10,  40 => 9,  57 => 16,  50 => 13,  47 => 14,  38 => 10,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 11,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 136,  222 => 76,  215 => 73,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 60,  180 => 74,  171 => 77,  166 => 69,  163 => 63,  160 => 54,  157 => 48,  149 => 51,  146 => 78,  140 => 56,  137 => 71,  129 => 53,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 48,  107 => 40,  104 => 52,  97 => 42,  93 => 38,  90 => 47,  81 => 37,  70 => 31,  66 => 26,  62 => 18,  59 => 23,  56 => 16,  52 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 5,  33 => 9,  30 => 3,);
    }
}
