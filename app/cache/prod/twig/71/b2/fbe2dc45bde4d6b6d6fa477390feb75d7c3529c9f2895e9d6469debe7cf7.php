<?php

/* ::base.html.twig */
class __TwigTemplate_71b2fbe2dc45bde4d6b6d6fa477390feb75d7c3529c9f2895e9d6469debe7cf7 extends Twig_Template
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
                        <a href=\"../#\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    </div>
                </div>
                <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"header-top-menu\">
                        <ul class=\"nav navbar-nav notika-top-nav\">
                            <li class=\"nav-item\">
                                <a href=\"cooperative-avis.html\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><span><i class=\"notika-icon notika-social\"></i></span></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"cooperative-parametre.html\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><span><i class=\"notika-icon notika-settings\"></i></span></a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><span><i class=\"notika-icon notika-close\"></i></span></a>
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
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"../#Account\"><i class=\"notika-icon notika-file\"></i> Account </a>
                        </li>
                        <li><a data-toggle=\"tab\" href=\"../#Cooperative\"><i class=\"notika-icon notika-finance\"></i> Cooperative </a></a>
                        </li>
                        <li><a href=\"#######('adminbtax_searchtrajet') }}\"><i class=\"notika-icon notika-map\"></i> Trajet </a>
                        </li>
                        <li><a href=\"#######('adminbtax_listitineraire') }}\"><i class=\"notika-icon notika-calendar\"></i> Itineraire </a>
                        </li>
                        <li><a data-toggle=\"tab\" href=\"../#Reservation\"><i class=\"notika-icon notika-credit-card\"></i> Reservation </a>
                        </li>
                        <li><a data-toggle=\"tab\" href=\"../#Membre\"><i class=\"notika-icon notika-support\"></i> Membre </a>
                        </li>
                        <li><a href=\"#######('adminbtax_moncompte') }}\"><i class=\"notika-icon notika-app\"></i> Mon compte </a>
                        </li>
                        <li><a data-toggle=\"tab\" href=\"../#Avis\"><i class=\"notika-icon notika-chat\"></i> Avis (5)</a>
                        </li>
                    </ul>

                    <div class=\"tab-content custom-menu-content\">

                        <div id=\"Avis\" class=\"tab-pane notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\">
                                <li><a href=\"#######('adminbtax_avisinmoderation') }}\">A valider (2)</a></li>
                                <li><a href=\"#######('adminbtax_avissignale') }}\">Signaler (6)</a></li>
                            </ul>
                        </div>

                        <div id=\"Account\" class=\"tab-pane in active notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\">
                                <li><a href=\"#######('adminbtax_account_new') }}\">Nouveau</a></li>
                                <li><a href=\"#######('adminbtax_account_list') }}\">Liste</a></li>
                            </ul>
                        </div>


                        <div id=\"Cooperative\" class=\"tab-pane notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\">
                                <li><a href=\"#######('adminbtax_cooperative_new') }}\">Nouveau</a></li>
                                <li><a href=\"#######('adminbtax_cooperative') }}\">Liste</a></li>
                            </ul>
                        </div>    


                        <div id=\"Reservation\" class=\"tab-pane notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\">
                                <li><a href=\"#######('adminbtax_newreservation') }}\">Nouvelle</a></li>
                                <li><a href=\"#######('adminbtax_searchreservation') }}\">Recherche</a></li>
                                <li><a href=\"#######('adminbtax_searchadvancedreservation') }}\">Recherche avancee</a></li>
                                <li><a href=\"#######('adminbtax_searchdatereservation') }}\">Recherche entre 2 dates</a></li>
                            </ul>
                        </div>


                        <div id=\"Membre\" class=\"tab-pane notika-tab-menu-bg animated flipInX\">
                            <ul class=\"notika-main-menu-dropdown\" style=\"width: 60%; margin: auto;\">
                                <br>
                                <li>
                                    <div class=\"col-lg-35 col-md-35 col-sm-35 col-xs-35\">
                                        <div class=\"form-example-int form-example-st\">
                                            <div class=\"form-group\">
                                                <div class=\"nk-int-st\">
                                                    <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" style=\"width: 330px;\">
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
                                                    <select class=\"form-control input-sm\">
                                                        <option>Adresse e-mail</option>
                                                        <option>Numero de client</option>
                                                        <option>Numero de transaction</option>
                                                    </select>
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
        // line 175
        $this->displayBlock('body', $context, $blocks);
        echo "    
    



    <!-- Data Table JS
        ============================================ -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/data-table/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/data-table/data-table-act.js"), "html", null, true);
        echo "\"></script>
    


    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    
    <!-- icheck JS
        ============================================ -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/icheck/icheck-active.js"), "html", null, true);
        echo "\"></script>
    
    
    <!--  chosen JS
        ============================================ -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/chosen/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
    
    <!-- main JS
        ============================================ -->
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>

    ";
        // line 210
        $this->displayBlock('javascripts', $context, $blocks);
        // line 211
        echo "</html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 175
    public function block_body($context, array $blocks = array())
    {
    }

    // line 210
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 34,  125 => 52,  369 => 194,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 100,  174 => 87,  164 => 83,  154 => 81,  144 => 79,  136 => 77,  87 => 40,  75 => 34,  68 => 30,  61 => 26,  135 => 58,  128 => 55,  105 => 43,  91 => 40,  86 => 39,  54 => 22,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  195 => 65,  189 => 61,  186 => 93,  162 => 58,  155 => 55,  143 => 49,  138 => 44,  134 => 43,  131 => 56,  122 => 37,  117 => 61,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 36,  69 => 35,  51 => 13,  48 => 19,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 70,  237 => 111,  207 => 70,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 58,  158 => 56,  150 => 54,  147 => 51,  142 => 52,  130 => 42,  127 => 41,  112 => 32,  96 => 41,  76 => 19,  71 => 17,  55 => 23,  114 => 48,  109 => 31,  106 => 20,  101 => 51,  85 => 22,  77 => 12,  67 => 15,  39 => 13,  110 => 20,  100 => 27,  89 => 16,  65 => 14,  63 => 25,  58 => 24,  34 => 11,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  78 => 40,  46 => 12,  44 => 9,  36 => 12,  60 => 12,  43 => 10,  40 => 9,  57 => 11,  50 => 14,  47 => 7,  38 => 6,  32 => 5,  27 => 3,  25 => 3,  24 => 4,  95 => 67,  42 => 19,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 38,  137 => 37,  129 => 36,  124 => 35,  121 => 50,  118 => 49,  115 => 32,  111 => 58,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 37,  70 => 15,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
