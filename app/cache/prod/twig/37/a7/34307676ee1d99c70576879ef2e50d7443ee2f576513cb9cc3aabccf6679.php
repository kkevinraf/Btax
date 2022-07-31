<?php

/* BtaxBundle:Admin/Membre:show.html.twig */
class __TwigTemplate_37a734307676ee1d99c70576879ef2e50d7443ee2f576513cb9cc3aabccf6679 extends Twig_Template
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
                <div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-list\">
                            <div class=\"contact-win\">
                                <div class=\"contact-img\">
                                    
                                </div>
                            </div>
                            <div class=\"contact-ctn\">
                                <div class=\"contact-ad-hd\">
                                    <h2>";
        // line 19
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "username"), "html", null, true);
        echo "</h2>
                                    <p class=\"ctn-ads\">";
        // line 20
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo " (Actif)</p>
                                </div>
                                <p>
                                    ";
        // line 23
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "email"), "html", null, true);
        echo " <br>
                                    Date de derniere connexion : 31/08/2021

                                </p>
                            </div>
                        </div>
                    </div>    
                </div>
                
                <div class=\"col-lg-8 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-hd widget-ctn-hd\">
                            <h2>Liste reservation</h2>
                            <hr>
                        </div>
                        <div class=\"contact-dt\">
                            <div class=\"table-responsive\">
                            ";
        // line 40
        if (isset($context["reservation"])) { $_reservation_ = $context["reservation"]; } else { $_reservation_ = null; }
        if ((array_key_exists("reservation", $context) && (twig_length_filter($this->env, $_reservation_) != 0))) {
            // line 41
            echo "                            <table id=\"data-table-basic\" class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
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
            // line 54
            if (isset($context["reservation"])) { $_reservation_ = $context["reservation"]; } else { $_reservation_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_reservation_);
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 55
                echo "                                    <tr>
                                        <td>";
                // line 56
                if (isset($context["res"])) { $_res_ = $context["res"]; } else { $_res_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_res_, "reservation"), "dateheure")), "html", null, true);
                echo "</td>
                                        <td><a href=\"";
                // line 57
                if (isset($context["res"])) { $_res_ = $context["res"]; } else { $_res_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminbtax_detailtrajet", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($_res_, "reservation"), "trajet"), "id"))), "html", null, true);
                echo "\">";
                if (isset($context["res"])) { $_res_ = $context["res"]; } else { $_res_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_res_, "reservation"), "trajet"), "itinerairecoop"), "itineraire"), "depart"), "html", null, true);
                echo " - ";
                if (isset($context["res"])) { $_res_ = $context["res"]; } else { $_res_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_res_, "reservation"), "trajet"), "itinerairecoop"), "itineraire"), "destination"), "html", null, true);
                echo "</a></td>
                                        <td>";
                // line 58
                if (isset($context["res"])) { $_res_ = $context["res"]; } else { $_res_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_res_, "reservation"), "trajet"), "itinerairecoop"), "place"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                if (isset($context["res"])) { $_res_ = $context["res"]; } else { $_res_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_res_, "reservation"), "transaction"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 60
                if (isset($context["res"])) { $_res_ = $context["res"]; } else { $_res_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_res_, "reservation"), "montant"), "html", null, true);
                echo " Ar</td>
                                        <td>Validate</td>
                                        <td><i class=\"notika-icon notika-sent\"></i></td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                </tbody>
                            </table>
                            ";
        } else {
            // line 68
            echo "                                <center>Aucune reservation</center>
                            ";
        }
        // line 70
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
        return "BtaxBundle:Admin/Membre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 70,  103 => 55,  83 => 41,  132 => 60,  120 => 49,  159 => 76,  64 => 28,  74 => 30,  116 => 49,  99 => 39,  82 => 32,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 38,  125 => 50,  369 => 194,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 100,  174 => 87,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 42,  75 => 36,  68 => 30,  61 => 27,  135 => 58,  128 => 79,  105 => 43,  91 => 40,  86 => 39,  54 => 22,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 55,  143 => 49,  138 => 53,  134 => 43,  131 => 56,  122 => 58,  117 => 61,  108 => 31,  102 => 28,  92 => 41,  84 => 21,  72 => 30,  69 => 29,  51 => 13,  48 => 19,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 70,  237 => 111,  207 => 70,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 79,  158 => 56,  150 => 60,  147 => 51,  142 => 52,  130 => 42,  127 => 59,  112 => 53,  96 => 38,  76 => 37,  71 => 17,  55 => 18,  114 => 42,  109 => 46,  106 => 56,  101 => 51,  85 => 43,  77 => 31,  67 => 34,  39 => 12,  110 => 41,  100 => 42,  89 => 35,  65 => 35,  63 => 28,  58 => 24,  34 => 11,  26 => 6,  98 => 54,  88 => 38,  80 => 40,  78 => 40,  46 => 12,  44 => 14,  36 => 12,  60 => 12,  43 => 15,  40 => 9,  57 => 11,  50 => 14,  47 => 19,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 67,  42 => 19,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 88,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 68,  146 => 41,  140 => 72,  137 => 71,  129 => 36,  124 => 35,  121 => 50,  118 => 49,  115 => 48,  111 => 57,  107 => 40,  104 => 44,  97 => 45,  93 => 39,  90 => 43,  81 => 37,  70 => 36,  66 => 25,  62 => 11,  59 => 23,  56 => 22,  52 => 20,  49 => 18,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
