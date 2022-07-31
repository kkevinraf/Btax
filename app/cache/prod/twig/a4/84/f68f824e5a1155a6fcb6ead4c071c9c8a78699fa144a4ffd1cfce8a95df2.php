<?php

/* ::layout_admin_cooperative.html.twig */
class __TwigTemplate_a484f68f824e5a1155a6fcb6ead4c071c9c8a78699fa144a4ffd1cfce8a95df2 extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Btax</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\">
   


     <!-- Bootstrap CSS
        ============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- font awesome CSS
        ============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <!-- Notika icon CSS
        ============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/css/notika-custom-icon.css"), "html", null, true);
        echo "\">
    
    <!-- main CSS
        ============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/css/chosen/chosen.css"), "html", null, true);
        echo "\">
    
    <!-- main CSS
        ============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/css/main.css"), "html", null, true);
        echo "\">
    <!-- style CSS
        ============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/style.css"), "html", null, true);
        echo "\">
    <!-- responsive CSS
        ============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/css/responsive.css"), "html", null, true);
        echo "\">

    
</head>


   <div class=\"header-top-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                    <div class=\"logo-area\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/logo-f.png"), "html", null, true);
        echo "\" style=\"height: 35px; width:35px;\">
                    </div>
                </div>
                <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"header-top-menu\">
                        <ul class=\"nav navbar-nav notika-top-nav\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("membre_avis_cooperative");
        echo "\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><span><i class=\"notika-icon notika-social\"></i></span></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("membre_myaccount_cooperative");
        echo "\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><span><i class=\"notika-icon notika-settings\"></i></span></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><span><i class=\"notika-icon notika-close\"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
   
   <!-- Main Menu area start-->
    <div class=\"main-menu-area mg-tb-40\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <ul class=\"nav nav-tabs notika-menu-wrap menu-it-icon-pro\">
                        <li ";
        // line 80
        if (isset($context["p_voiture"])) { $_p_voiture_ = $context["p_voiture"]; } else { $_p_voiture_ = null; }
        if ((array_key_exists("p_voiture", $context) && ($_p_voiture_ == "active"))) {
            echo " class=\"active\" ";
        }
        echo "><a data-toggle=\"tab\" href=\"../#Voiture\"><i class=\"notika-icon notika-travel\"></i> Voiture </a></a>
                        </li>
                        <li ";
        // line 82
        if (isset($context["p_trajet"])) { $_p_trajet_ = $context["p_trajet"]; } else { $_p_trajet_ = null; }
        if ((array_key_exists("p_trajet", $context) && ($_p_trajet_ == "active"))) {
            echo " class=\"active\" ";
        }
        echo "><a data-toggle=\"tab\" href=\"../#Trajet\"><i class=\"notika-icon notika-map\"></i> Trajet </a>
                        </li>
                        <li ";
        // line 84
        if (isset($context["p_itineraire"])) { $_p_itineraire_ = $context["p_itineraire"]; } else { $_p_itineraire_ = null; }
        if ((array_key_exists("p_itineraire", $context) && ($_p_itineraire_ == "active"))) {
            echo " class=\"active\" ";
        }
        echo "><a data-toggle=\"tab\" href=\"../#Itineraire\"><i class=\"notika-icon notika-calendar\"></i> Itineraire </a>
                        </li>
                        <li ";
        // line 86
        if (isset($context["p_reservation"])) { $_p_reservation_ = $context["p_reservation"]; } else { $_p_reservation_ = null; }
        if ((array_key_exists("p_reservation", $context) && ($_p_reservation_ == "active"))) {
            echo " class=\"active\" ";
        }
        echo "><a data-toggle=\"tab\" href=\"../#Reservation\"><i class=\"notika-icon notika-credit-card\"></i> Reservation </a>
                        </li>
                        <li><a data-toggle=\"tab\" href=\"../#Membre\"><i class=\"notika-icon notika-support\"></i> Membre </a>
                        </li>
                    </ul>

                    <div class=\"tab-content custom-menu-content\">
                        <div id=\"Voiture\" class=\"tab-pane in";
        // line 93
        if (isset($context["p_voiture"])) { $_p_voiture_ = $context["p_voiture"]; } else { $_p_voiture_ = null; }
        if ((array_key_exists("p_voiture", $context) && ($_p_voiture_ == "active"))) {
            echo " active";
        }
        echo " notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\">
                                <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("voiture_new");
        echo "\">Nouveau</a></li>
                                <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("voiture");
        echo "\">Liste</a></li>
                            </ul>
                        </div>

                    
                        <div id=\"Itineraire\" class=\"tab-pane in";
        // line 101
        if (isset($context["p_itineraire"])) { $_p_itineraire_ = $context["p_itineraire"]; } else { $_p_itineraire_ = null; }
        if ((array_key_exists("p_itineraire", $context) && ($_p_itineraire_ == "active"))) {
            echo " active";
        }
        echo " notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\">
                                <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("itinerairecoop_new");
        echo "\">Nouveau</a></li>
                                <li><a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("itinerairecoop");
        echo "\">Liste</a></li>
                            </ul>
                        </div>                       

                        
                        <div id=\"Trajet\" class=\"tab-pane in";
        // line 109
        if (isset($context["p_trajet"])) { $_p_trajet_ = $context["p_trajet"]; } else { $_p_trajet_ = null; }
        if ((array_key_exists("p_trajet", $context) && ($_p_trajet_ == "active"))) {
            echo " active";
        }
        echo " notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\">
                                <li><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("trajet_new");
        echo "\">Nouveau</a></li>
                                <li><a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("trajet");
        echo "\">Recherche</a></li>
                            </ul>
                        </div>


                        <div id=\"Reservation\" class=\"tab-pane in";
        // line 117
        if (isset($context["p_reservation"])) { $_p_reservation_ = $context["p_reservation"]; } else { $_p_reservation_ = null; }
        if ((array_key_exists("p_reservation", $context) && ($_p_reservation_ == "active"))) {
            echo " active";
        }
        echo " notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\">
                                <li><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("cooperative_reservation_search");
        echo "\">Recherche</a></li>
                                <li><a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("cooperative_reservation_searchadvanced");
        echo "\">Recherche avancee</a></li>
                            </ul>
                        </div>


                        <div id=\"Membre\" class=\"tab-pane in";
        // line 125
        if (isset($context["p_membre"])) { $_p_membre_ = $context["p_membre"]; } else { $_p_membre_ = null; }
        if ((array_key_exists("p_membre", $context) && ($_p_membre_ == "active"))) {
            echo " active";
        }
        echo " notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\" style=\"width: 60%; margin: auto;\">
                                <br>
                                <form action=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("member_search_cooperative");
        echo "\" method=\"POST\">
                                <li>
                                    <div class=\"col-lg-35 col-md-35 col-sm-35 col-xs-35\">
                                        <div class=\"form-example-int form-example-st\">
                                            <div class=\"form-group\">
                                                <div class=\"nk-int-st\">
                                                    <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Adresse e-mail ou nom d'utilisateur\" style=\"width: 330px;\" name=\"user\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col-lg-35 col-md-35 col-sm-35 col-xs-35\">
                                        <div class=\"form-example-int form-example-st\">
                                            <div class=\"form-group\">
                                                <div class=\"nk-int-st\">
                                                    <select name=\"choice\" class=\"form-control input-sm\">
                                                        <option value=\"email\">Adresse e-mail</option>
                                                        <option value=\"username\">Nom d'utilisateur</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                </form>
                            </ul>

                            <br>
                        </div>

                        <div id=\"Recherche\" class=\"tab-pane notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\" style=\"width: 50%; margin: auto;\">
                                <br>
                                <li>
                                    <div class=\"col-lg-35 col-md-35 col-sm-35 col-xs-35\">
                                        <div class=\"form-example-int form-example-st\">
                                            <div class=\"form-group\">
                                                <div class=\"nk-int-st\">
                                                    <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" style=\"width: 360px;\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

    ";
        // line 186
        $this->displayBlock('body', $context, $blocks);
        echo "    
    

     <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>


    <!-- Data Table JS
        ============================================ -->
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/data-table/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/data-table/data-table-act.js"), "html", null, true);
        echo "\"></script>
    


   
    <!-- bootstrap JS
        ============================================ -->
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    
    <!-- icheck JS
        ============================================ -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/icheck/icheck-active.js"), "html", null, true);
        echo "\"></script>
    
    
    <!--  chosen JS
        ============================================ -->
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/chosen/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
    
    <!-- main JS
        ============================================ -->
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 218
        $this->displayBlock('javascripts', $context, $blocks);
        // line 219
        echo "</body>

    
</html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 186
    public function block_body($context, array $blocks = array())
    {
    }

    // line 218
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout_admin_cooperative.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 195,  343 => 194,  335 => 189,  329 => 186,  268 => 128,  259 => 125,  199 => 101,  191 => 96,  179 => 93,  53 => 24,  141 => 75,  123 => 64,  252 => 92,  245 => 87,  234 => 81,  230 => 80,  227 => 111,  214 => 77,  190 => 62,  177 => 59,  170 => 57,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 43,  159 => 78,  64 => 25,  74 => 38,  116 => 49,  99 => 39,  82 => 31,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 25,  125 => 44,  369 => 208,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 87,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 40,  75 => 34,  68 => 30,  61 => 26,  135 => 58,  128 => 79,  105 => 56,  91 => 40,  86 => 39,  54 => 22,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 219,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 120,  239 => 117,  231 => 112,  219 => 109,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 55,  143 => 49,  138 => 48,  134 => 47,  131 => 56,  122 => 48,  117 => 61,  108 => 39,  102 => 28,  92 => 41,  84 => 26,  72 => 34,  69 => 37,  51 => 20,  48 => 19,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 119,  237 => 111,  207 => 103,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 58,  158 => 84,  150 => 82,  147 => 51,  142 => 80,  130 => 45,  127 => 59,  112 => 42,  96 => 38,  76 => 37,  71 => 29,  55 => 18,  114 => 42,  109 => 46,  106 => 56,  101 => 51,  85 => 34,  77 => 35,  67 => 30,  39 => 13,  110 => 57,  100 => 39,  89 => 27,  65 => 35,  63 => 27,  58 => 23,  34 => 11,  26 => 6,  98 => 54,  88 => 38,  80 => 33,  78 => 40,  46 => 12,  44 => 14,  36 => 12,  60 => 27,  43 => 15,  40 => 9,  57 => 26,  50 => 23,  47 => 19,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 36,  42 => 13,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 60,  180 => 59,  171 => 54,  166 => 86,  163 => 50,  160 => 54,  157 => 48,  149 => 51,  146 => 76,  140 => 72,  137 => 71,  129 => 49,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 58,  107 => 40,  104 => 44,  97 => 45,  93 => 38,  90 => 39,  81 => 37,  70 => 31,  66 => 28,  62 => 29,  59 => 23,  56 => 22,  52 => 15,  49 => 18,  45 => 8,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
