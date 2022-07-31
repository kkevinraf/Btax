<?php

/* BtaxBundle:Admin/Localisation:new.html.twig */
class __TwigTemplate_4698c7e996006f595255290cdca430ebcd42c36419c6b668d5d0885d6d87dd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_admin_btax.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_admin_btax.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<!-- Main Menu area End-->
    
   <div class=\"container\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"form-example-wrap mg-t-30\">
                <div class=\"cmp-tb-hd cmp-int-hd\">
                     <h2>Nouveau compte</h2>
                </div>
                <div class=\"form-example-int form-horizental\">
                    <div class=\"form-group\">
                    <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("localisation_create");
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " >
                        <div class=\"row\">
                            <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                                <label class=\"hrzn-fm\">Logo :</label>
                            </div>
                            <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                <div class=\"nk-int-st\">
                                    ";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "photo"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "photo")));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-example-int form-horizental\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                                <label class=\"hrzn-fm\">Nom :</label>
                            </div>
                            <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                <div class=\"nk-int-st\">
                                    ";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "localisation"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Localisation")));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                ";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'widget');
        echo "
                <div class=\"form-example-int mg-t-15\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                        </div>
                        <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                            <input type=\"submit\" class=\"btn btn-success notika-btn-success waves-effect\" value=\"Enregistrer\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "BtaxBundle:Admin/Localisation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 41,  132 => 52,  120 => 49,  159 => 76,  64 => 28,  74 => 36,  116 => 49,  99 => 44,  82 => 39,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 38,  125 => 50,  369 => 194,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 100,  174 => 87,  164 => 77,  154 => 75,  144 => 79,  136 => 77,  87 => 42,  75 => 36,  68 => 30,  61 => 27,  135 => 58,  128 => 79,  105 => 43,  91 => 40,  86 => 39,  54 => 22,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 55,  143 => 49,  138 => 53,  134 => 43,  131 => 56,  122 => 37,  117 => 61,  108 => 31,  102 => 28,  92 => 41,  84 => 21,  72 => 35,  69 => 35,  51 => 13,  48 => 19,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 70,  237 => 111,  207 => 70,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 79,  158 => 56,  150 => 60,  147 => 51,  142 => 52,  130 => 42,  127 => 41,  112 => 53,  96 => 41,  76 => 37,  71 => 17,  55 => 23,  114 => 48,  109 => 46,  106 => 20,  101 => 51,  85 => 43,  77 => 39,  67 => 34,  39 => 13,  110 => 45,  100 => 42,  89 => 41,  65 => 35,  63 => 25,  58 => 24,  34 => 11,  26 => 6,  98 => 40,  88 => 38,  80 => 40,  78 => 40,  46 => 12,  44 => 14,  36 => 12,  60 => 12,  43 => 15,  40 => 9,  57 => 11,  50 => 14,  47 => 19,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 67,  42 => 19,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 88,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 74,  146 => 41,  140 => 72,  137 => 71,  129 => 36,  124 => 35,  121 => 50,  118 => 49,  115 => 48,  111 => 58,  107 => 28,  104 => 44,  97 => 45,  93 => 39,  90 => 43,  81 => 37,  70 => 36,  66 => 13,  62 => 11,  59 => 15,  56 => 22,  52 => 20,  49 => 18,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
