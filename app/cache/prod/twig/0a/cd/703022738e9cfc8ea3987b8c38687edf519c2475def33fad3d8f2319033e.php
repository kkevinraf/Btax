<?php

/* BtaxBundle:Admin/Reservation:result.html.twig */
class __TwigTemplate_0acd703022738e9cfc8ea3987b8c38687edf519c2475def33fad3d8f2319033e extends Twig_Template
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
        echo "<!-- Start Email Statistic area-->
    <div class=\"notika-email-post-area\">
        <div class=\"container\">
            <div class=\"row\">                
                <div class=\"col-lg-12 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-hd widget-ctn-hd\">
                            <h6>Resultat de la recherche</h6>
                            <hr>
                        </div>
                        <div class=\"contact-dt\">
                            <div class=\"table-responsive\">
                            ";
        // line 17
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ((array_key_exists("data", $context) && (twig_length_filter($this->env, $_data_) != 0))) {
            // line 18
            echo "                            <table id=\"data-table-basic\" class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Nom & Prenom </th>
                                        <th>Itineraire</th>
                                        <th>Type</th>
                                        <th>Transaction</th>
                                        <th>Prix</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 32
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_data_);
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 33
                echo "                                    <tr>
                                        <td>";
                // line 34
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_d_, "dateheure")), "html", null, true);
                echo "</td>
                                        <td>";
                // line 35
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_d_, "nom"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 36
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "trajet"), "itinerairecoop"), "itineraire"), "depart"), "html", null, true);
                echo " - ";
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "trajet"), "itinerairecoop"), "itineraire"), "destination"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 37
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_d_, "trajet"), "itinerairecoop"), "place"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 38
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_d_, "transaction"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 39
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_d_, "montant"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 40
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                if (($this->getAttribute($_d_, "statut") == 1)) {
                    echo "Validate";
                } else {
                    echo "Annule";
                }
                echo "</td>
                                        <td><i class=\"notika-icon notika-sent\"></i></td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                </tbody>
                            </table>
                            ";
        } else {
            // line 47
            echo "                            <center>Aucun resultat</center>
                            ";
        }
        // line 49
        echo "                        </div>
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
        return "BtaxBundle:Admin/Reservation:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 70,  103 => 55,  83 => 41,  132 => 60,  120 => 44,  159 => 76,  64 => 32,  74 => 30,  116 => 49,  99 => 39,  82 => 36,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 38,  125 => 47,  369 => 194,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 100,  174 => 87,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 42,  75 => 36,  68 => 30,  61 => 27,  135 => 58,  128 => 79,  105 => 40,  91 => 40,  86 => 39,  54 => 22,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 55,  143 => 49,  138 => 53,  134 => 43,  131 => 56,  122 => 58,  117 => 61,  108 => 31,  102 => 28,  92 => 41,  84 => 21,  72 => 34,  69 => 33,  51 => 13,  48 => 18,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 70,  237 => 111,  207 => 70,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 79,  158 => 56,  150 => 60,  147 => 51,  142 => 52,  130 => 42,  127 => 59,  112 => 53,  96 => 38,  76 => 37,  71 => 17,  55 => 18,  114 => 42,  109 => 46,  106 => 56,  101 => 51,  85 => 43,  77 => 35,  67 => 34,  39 => 12,  110 => 41,  100 => 39,  89 => 35,  65 => 35,  63 => 28,  58 => 24,  34 => 11,  26 => 6,  98 => 54,  88 => 38,  80 => 40,  78 => 40,  46 => 12,  44 => 14,  36 => 12,  60 => 12,  43 => 15,  40 => 9,  57 => 11,  50 => 14,  47 => 19,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 38,  42 => 19,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 88,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 68,  146 => 41,  140 => 72,  137 => 71,  129 => 49,  124 => 35,  121 => 50,  118 => 49,  115 => 48,  111 => 57,  107 => 40,  104 => 44,  97 => 45,  93 => 39,  90 => 37,  81 => 37,  70 => 36,  66 => 25,  62 => 11,  59 => 23,  56 => 22,  52 => 20,  49 => 18,  45 => 17,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
