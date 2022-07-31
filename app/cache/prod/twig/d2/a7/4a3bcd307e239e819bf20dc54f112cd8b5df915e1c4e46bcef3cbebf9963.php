<?php

/* BtaxBundle:Admin/Trajet:search.html.twig */
class __TwigTemplate_d2a74a3bcd307e239e819bf20dc54f112cd8b5df915e1c4e46bcef3cbebf9963 extends Twig_Template
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
        // line 4
        echo "<!-- Main Menu area End-->
    
   <div class=\"container\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"form-example-wrap mg-t-30\">
                <div class=\"cmp-tb-hd cmp-int-hd\">
                     <h2>Recherche trajet</h2>
                </div>

                <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("trajet_run_search");
        echo "\" method=\"POST\">
               <div class=\"form-example-int form-horizental\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                                <label class=\"hrzn-fm\">Date :</label>
                            </div>
                            <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                <input type=\"date\" class=\"form-control\" name=\"date\">
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"form-example-int form-horizental\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                                <label class=\"hrzn-fm\">Depart :</label>
                            </div>
                            <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                <div class=\"chosen-select-act fm-cmp-mg\">
                                    <select class=\"chosen\" data-placeholder=\"Choose a Country...\" name=\"depart\">
                                            <option value=\"0\">Tous</option>
                                            ";
        // line 37
        if (isset($context["localisations"])) { $_localisations_ = $context["localisations"]; } else { $_localisations_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_localisations_);
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 38
            echo "                                            <option value=\"";
            if (isset($context["localisation"])) { $_localisation_ = $context["localisation"]; } else { $_localisation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_localisation_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["localisation"])) { $_localisation_ = $context["localisation"]; } else { $_localisation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_localisation_, "localisation"), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-example-int form-horizental\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                                <label class=\"hrzn-fm\">Destination :</label>
                            </div>
                            <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                <div class=\"chosen-select-act fm-cmp-mg\">
                                    <select class=\"chosen\" data-placeholder=\"Choose a Country...\" name=\"destination\">
                                            <option value=\"0\">Tous</option>
                                            ";
        // line 56
        if (isset($context["localisations"])) { $_localisations_ = $context["localisations"]; } else { $_localisations_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_localisations_);
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 57
            echo "                                            <option value=\"";
            if (isset($context["localisation"])) { $_localisation_ = $context["localisation"]; } else { $_localisation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_localisation_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["localisation"])) { $_localisation_ = $context["localisation"]; } else { $_localisation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_localisation_, "localisation"), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-example-int form-horizental\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                                <label class=\"hrzn-fm\">Cooperative :</label>
                            </div>
                            <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                <div class=\"chosen-select-act fm-cmp-mg\">
                                    <select class=\"chosen\" data-placeholder=\"Choose a cooperative...\" name=\"cooperative\">
                                            <option value=\"0\">Tous</option>
                                            ";
        // line 75
        if (isset($context["cooperatives"])) { $_cooperatives_ = $context["cooperatives"]; } else { $_cooperatives_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_cooperatives_);
        foreach ($context['_seq'] as $context["_key"] => $context["cooperative"]) {
            // line 76
            echo "                                            <option value=\"";
            if (isset($context["cooperative"])) { $_cooperative_ = $context["cooperative"]; } else { $_cooperative_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cooperative_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["cooperative"])) { $_cooperative_ = $context["cooperative"]; } else { $_cooperative_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cooperative_, "nom"), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cooperative'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class=\"form-example-int mg-t-15\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                        </div>
                        <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                            <input type=\"submit\" class=\"btn btn-success notika-btn-success waves-effect\" value=\"Recherche\">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
   
     ";
    }

    public function getTemplateName()
    {
        return "BtaxBundle:Admin/Trajet:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 75,  123 => 59,  252 => 92,  245 => 87,  234 => 81,  230 => 80,  227 => 79,  214 => 77,  190 => 62,  177 => 59,  170 => 57,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 43,  159 => 78,  64 => 25,  74 => 38,  116 => 49,  99 => 39,  82 => 31,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 25,  125 => 44,  369 => 194,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 87,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 40,  75 => 32,  68 => 30,  61 => 27,  135 => 58,  128 => 79,  105 => 56,  91 => 40,  86 => 39,  54 => 22,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 55,  143 => 49,  138 => 48,  134 => 47,  131 => 56,  122 => 48,  117 => 42,  108 => 39,  102 => 28,  92 => 41,  84 => 26,  72 => 34,  69 => 37,  51 => 20,  48 => 18,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 70,  237 => 111,  207 => 70,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 58,  158 => 56,  150 => 60,  147 => 51,  142 => 49,  130 => 45,  127 => 59,  112 => 42,  96 => 38,  76 => 37,  71 => 24,  55 => 18,  114 => 42,  109 => 46,  106 => 56,  101 => 38,  85 => 34,  77 => 35,  67 => 30,  39 => 10,  110 => 57,  100 => 39,  89 => 27,  65 => 35,  63 => 28,  58 => 23,  34 => 11,  26 => 6,  98 => 54,  88 => 38,  80 => 33,  78 => 40,  46 => 12,  44 => 14,  36 => 12,  60 => 27,  43 => 15,  40 => 9,  57 => 16,  50 => 14,  47 => 19,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 36,  42 => 13,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 54,  157 => 48,  149 => 51,  146 => 76,  140 => 72,  137 => 71,  129 => 49,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 57,  107 => 40,  104 => 44,  97 => 45,  93 => 38,  90 => 35,  81 => 37,  70 => 31,  66 => 23,  62 => 29,  59 => 23,  56 => 22,  52 => 15,  49 => 18,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
