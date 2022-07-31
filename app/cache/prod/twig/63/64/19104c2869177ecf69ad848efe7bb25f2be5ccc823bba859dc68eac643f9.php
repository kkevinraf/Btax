<?php

/* CooperativeBundle:Admin/Voiture:show.html.twig */
class __TwigTemplate_636419104c2869177ecf69ad848efe7bb25f2be5ccc823bba859dc68eac643f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_admin_cooperative.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_admin_cooperative.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/card-voiture.css"), "html", null, true);
        echo "\">
 <style type=\"text/css\">
        .place-disponible, .place-selectionne
        {
            cursor: pointer;
        }
        .place-selectionne
        {
            color: #fff;
        }
    </style>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "<!-- Start Email Statistic area-->
    <div class=\"notika-email-post-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-dt\">
                            <div class=\"contact-list\">
                                <div class=\"contact-ctn\">
                                    <div class=\"contact-ad-hd\">
                                        <h2>";
        // line 29
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "immatriculation"), "html", null, true);
        echo "</h2>
                                        <p class=\"ctn-ads\">";
        // line 30
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "nomProprietaire"), "html", null, true);
        echo "</p>
                                        <p>Nombre de place : ";
        // line 31
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "nbrPlace"), "html", null, true);
        echo "</p>
                                        <p>NIF : ";
        // line 32
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "nIF"), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-dt\" >
                            <table style=\"width:90%; margin: auto;\">
                            ";
        // line 43
        $context["i"] = 0;
        // line 44
        echo "                            ";
        $context["j"] = 0;
        // line 45
        echo "                            ";
        $context["cp"] = 1;
        // line 46
        echo "                            ";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "place"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 47
            echo "                                <tr>
                                ";
            // line 48
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_e_);
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 49
                echo "                                    ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                if ((($_i_ == 0) && ($_j_ == 0))) {
                    // line 50
                    echo "                                        <td><div class=\"chauffeur\">1</div></td>
                                    ";
                } else {
                    // line 52
                    echo "                                        ";
                    if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                    if (($_result_ == 0)) {
                        // line 53
                        echo "                                            <td></td>
                                        ";
                    } else {
                        // line 55
                        echo "                                            <td><div class=\"place-disponible\">";
                        if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                        echo twig_escape_filter($this->env, $_cp_, "html", null, true);
                        echo "</div></td>
                                            ";
                        // line 56
                        if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                        $context["cp"] = ($_cp_ + 1);
                        // line 57
                        echo "                                        ";
                    }
                    // line 58
                    echo "                                    ";
                }
                // line 59
                echo "                                    ";
                if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                $context["j"] = ($_j_ + 1);
                // line 60
                echo "                                    
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
            // line 63
            echo "                                
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                            </table>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Email Statistic area-->







";
    }

    public function getTemplateName()
    {
        return "CooperativeBundle:Admin/Voiture:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 60,  148 => 59,  139 => 56,  145 => 58,  133 => 55,  126 => 71,  113 => 43,  94 => 43,  73 => 28,  185 => 93,  168 => 87,  151 => 79,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 195,  343 => 194,  335 => 189,  329 => 186,  268 => 128,  259 => 125,  199 => 101,  191 => 96,  179 => 93,  53 => 19,  141 => 75,  123 => 59,  252 => 92,  245 => 87,  234 => 81,  230 => 80,  227 => 79,  214 => 77,  190 => 62,  177 => 59,  170 => 65,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 43,  159 => 62,  64 => 29,  74 => 31,  116 => 49,  99 => 45,  82 => 42,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 32,  125 => 52,  369 => 208,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 87,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 40,  75 => 32,  68 => 30,  61 => 29,  135 => 58,  128 => 79,  105 => 56,  91 => 40,  86 => 39,  54 => 24,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 219,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 120,  239 => 117,  231 => 112,  219 => 109,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 81,  143 => 49,  138 => 48,  134 => 47,  131 => 56,  122 => 70,  117 => 42,  108 => 47,  102 => 46,  92 => 41,  84 => 26,  72 => 34,  69 => 30,  51 => 20,  48 => 18,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 119,  237 => 111,  207 => 103,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 58,  158 => 84,  150 => 75,  147 => 51,  142 => 57,  130 => 45,  127 => 59,  112 => 42,  96 => 44,  76 => 37,  71 => 24,  55 => 18,  114 => 42,  109 => 46,  106 => 56,  101 => 38,  85 => 35,  77 => 35,  67 => 30,  39 => 10,  110 => 57,  100 => 39,  89 => 27,  65 => 27,  63 => 27,  58 => 24,  34 => 11,  26 => 6,  98 => 34,  88 => 38,  80 => 33,  78 => 29,  46 => 12,  44 => 14,  36 => 12,  60 => 27,  43 => 10,  40 => 9,  57 => 16,  50 => 17,  47 => 14,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 11,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 136,  222 => 76,  215 => 73,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 60,  180 => 59,  171 => 54,  166 => 86,  163 => 63,  160 => 54,  157 => 48,  149 => 51,  146 => 78,  140 => 72,  137 => 71,  129 => 53,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 48,  107 => 40,  104 => 35,  97 => 42,  93 => 38,  90 => 36,  81 => 37,  70 => 31,  66 => 26,  62 => 29,  59 => 23,  56 => 28,  52 => 19,  49 => 17,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
