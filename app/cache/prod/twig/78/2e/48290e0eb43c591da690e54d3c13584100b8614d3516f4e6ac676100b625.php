<?php

/* CooperativeBundle:Admin/Trajet:details.html.twig */
class __TwigTemplate_782e48290e0eb43c591da690e54d3c13584100b8614d3516f4e6ac676100b625 extends Twig_Template
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
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 9
        if (isset($context["trajet"])) { $_trajet_ = $context["trajet"]; } else { $_trajet_ = null; }
        if ((twig_length_filter($this->env, $_trajet_) != null)) {
            // line 10
            echo "
<!-- Start Email Statistic area-->
    <div class=\"notika-email-post-area\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 15
            if (isset($context["trajet"])) { $_trajet_ = $context["trajet"]; } else { $_trajet_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_trajet_);
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 16
                echo "                <div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-hd widget-ctn-hd\">
                            <h2>Detail trajet</h2>
                        </div>
                        <div class=\"contact-dt\">
                            <ul class=\"contact-list widget-contact-list\">
                                <li> Date : ";
                // line 23
                if (isset($context["t"])) { $_t_ = $context["t"]; } else { $_t_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_t_, "date")), "html", null, true);
                echo " </li>
                                <li> Itineraire : ";
                // line 24
                if (isset($context["t"])) { $_t_ = $context["t"]; } else { $_t_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_t_, "itinerairecoop"), "itineraire"), "depart"), "html", null, true);
                echo " - ";
                if (isset($context["t"])) { $_t_ = $context["t"]; } else { $_t_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_t_, "itinerairecoop"), "itineraire"), "destination"), "html", null, true);
                echo " </li>
                                <li> Prix : ";
                // line 25
                if (isset($context["t"])) { $_t_ = $context["t"]; } else { $_t_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_t_, "itinerairecoop"), "prix"), "html", null, true);
                echo " Ar </li>
                                <li> Type : ";
                // line 26
                if (isset($context["t"])) { $_t_ = $context["t"]; } else { $_t_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_t_, "itinerairecoop"), "place"), "html", null, true);
                echo " </li>   
                                <li> Voiture : ";
                // line 27
                if (isset($context["t"])) { $_t_ = $context["t"]; } else { $_t_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_t_, "voiture"), "immatriculation"), "html", null, true);
                echo " </li> 
                            </ul>
                        </div>
                    </div>    
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-dt\" >
                            <table style=\"width:90%; margin: auto;\">

                            ";
                // line 37
                $context["i"] = 0;
                // line 38
                echo "                            ";
                $context["j"] = 0;
                // line 39
                echo "                    
                                <tbody>
                                ";
                // line 41
                if (isset($context["t"])) { $_t_ = $context["t"]; } else { $_t_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_t_, "places"));
                foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                    // line 42
                    echo "                                <tr>
                                ";
                    // line 43
                    if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_e_);
                    foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                        // line 44
                        echo "                                    ";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                        if ((($_i_ == 0) && ($_j_ == 0))) {
                            // line 45
                            echo "                                    <td><div class=\"chauffeur\"></div></td>
                                    ";
                        } else {
                            // line 47
                            echo "                                        ";
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            $context["i"] = ($_i_ + 1);
                            // line 48
                            echo "                                        ";
                            if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                            if (($_result_ == 2)) {
                                // line 49
                                echo "                                        <td><div class=\"place-reserve\">";
                                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                                echo twig_escape_filter($this->env, $_i_, "html", null, true);
                                echo "</div></td>
                                        ";
                            } else {
                                // line 51
                                echo "                                            ";
                                if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                                if (($_result_ == 1)) {
                                    // line 52
                                    echo "                                            <td><div class=\"place-disponible icone-t\"> ";
                                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                                    echo "</div></td>
                                            ";
                                } else {
                                    // line 54
                                    echo "                                            <td>";
                                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                                    $context["i"] = ($_i_ - 1);
                                    echo "</td>
                                            ";
                                }
                                // line 56
                                echo "                                        ";
                            }
                            // line 57
                            echo "                                    ";
                        }
                        // line 58
                        echo "                                    ";
                        if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                        $context["j"] = ($_j_ + 1);
                        // line 59
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                                
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "
                                </tbody>


                            </table>
                        </div>
                        
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-dt\">
                            <ul class=\"contact-list widget-contact-list\">
                                ";
                // line 75
                if (isset($context["reservations"])) { $_reservations_ = $context["reservations"]; } else { $_reservations_ = null; }
                if ((twig_length_filter($this->env, $_reservations_) != 0)) {
                    // line 76
                    echo "                                    ";
                    if (isset($context["reservations"])) { $_reservations_ = $context["reservations"]; } else { $_reservations_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_reservations_);
                    foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                        // line 77
                        echo "                                    <li> ";
                        if (isset($context["reservation"])) { $_reservation_ = $context["reservation"]; } else { $_reservation_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_reservation_, "numplace"), "html", null, true);
                        echo " : ";
                        if (isset($context["reservation"])) { $_reservation_ = $context["reservation"]; } else { $_reservation_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_reservation_, "nom"), "html", null, true);
                        echo " </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                                ";
                } else {
                    // line 80
                    echo "                                    <center>Aucune reservation </center>
                                ";
                }
                // line 81
                echo "                                
                            </ul>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            </div>
        </div>
    </div>
    <!-- End Email Statistic area-->
";
        } else {
            // line 92
            echo "<center>Page introuvable</center>
";
        }
    }

    public function getTemplateName()
    {
        return "CooperativeBundle:Admin/Trajet:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  126 => 49,  113 => 43,  94 => 39,  73 => 28,  185 => 93,  168 => 87,  151 => 79,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 195,  343 => 194,  335 => 189,  329 => 186,  268 => 128,  259 => 125,  199 => 101,  191 => 96,  179 => 93,  53 => 24,  141 => 75,  123 => 64,  252 => 92,  245 => 87,  234 => 81,  230 => 80,  227 => 79,  214 => 77,  190 => 62,  177 => 59,  170 => 57,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 43,  159 => 78,  64 => 25,  74 => 30,  116 => 50,  99 => 40,  82 => 31,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 25,  125 => 44,  369 => 208,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 87,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 40,  75 => 28,  68 => 30,  61 => 27,  135 => 58,  128 => 79,  105 => 38,  91 => 40,  86 => 39,  54 => 24,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 219,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 120,  239 => 117,  231 => 112,  219 => 109,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 81,  143 => 49,  138 => 48,  134 => 47,  131 => 56,  122 => 58,  117 => 42,  108 => 39,  102 => 28,  92 => 41,  84 => 26,  72 => 34,  69 => 33,  51 => 20,  48 => 18,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 119,  237 => 111,  207 => 103,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 58,  158 => 84,  150 => 60,  147 => 51,  142 => 49,  130 => 45,  127 => 59,  112 => 41,  96 => 38,  76 => 37,  71 => 24,  55 => 18,  114 => 42,  109 => 46,  106 => 56,  101 => 37,  85 => 34,  77 => 35,  67 => 34,  39 => 7,  110 => 41,  100 => 39,  89 => 27,  65 => 27,  63 => 28,  58 => 23,  34 => 11,  26 => 6,  98 => 54,  88 => 38,  80 => 36,  78 => 29,  46 => 12,  44 => 14,  36 => 12,  60 => 27,  43 => 15,  40 => 9,  57 => 16,  50 => 14,  47 => 14,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 38,  42 => 9,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 60,  180 => 59,  171 => 54,  166 => 86,  163 => 50,  160 => 54,  157 => 48,  149 => 51,  146 => 78,  140 => 72,  137 => 71,  129 => 50,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 57,  107 => 40,  104 => 41,  97 => 42,  93 => 38,  90 => 37,  81 => 37,  70 => 35,  66 => 23,  62 => 26,  59 => 23,  56 => 25,  52 => 15,  49 => 22,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
