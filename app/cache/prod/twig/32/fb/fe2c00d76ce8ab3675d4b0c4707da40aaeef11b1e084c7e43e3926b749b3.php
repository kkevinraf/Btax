<?php

/* CooperativeBundle:Admin/Voiture:new.html.twig */
class __TwigTemplate_32fbfe2c00d76ce8ab3675d4b0c4707da40aaeef11b1e084c7e43e3926b749b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_admin_cooperative.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
                <div class=\"col-lg-8 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-dt\">
                            <div class=\"contact-list\">
                            \t";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start');
        echo "

                                <h4>Nouveau</h4>
                                <hr>
                                <div class=\"contact-ctn\">
                                    <p>
                                    \t<input type=\"hidden\" name=\"nbplace\" id=\"nbplace\">
                                        <input type=\"hidden\" name=\"arrayplace\" id=\"arrayplace\">
                                         <div class=\"form-example-int form-horizental\">
                                            <div class=\"form-group\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                                        <label class=\"hrzn-fm\">Immatriculation :</label>
                                                    </div>
                                                    <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                                    \t";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "immatriculation"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Numero d'immatriculation de la voiture")));
        echo "
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                                        <label class=\"hrzn-fm\">Nom proprietaire :</label>
                                                    </div>
                                                    <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                                        ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nomProprietaire"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Nom du proprietaire")));
        echo "
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                                        <label class=\"hrzn-fm\">NIF :</label>
                                                    </div>
                                                    <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                                        ";
        // line 60
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nIF"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "NIF de la voiture")));
        echo "
                                                    </div>
                                                </div>
                                                <br>                                                
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                                        <label class=\"hrzn-fm\">Colonne :</label>
                                                    </div>
                                                    <div class=\"col-lg-3 col-md-7 col-sm-7 col-xs-12\">
                                                        <select class=\"form-control input-sm\" id=\"colomn-place\" name=\"colonne\">
                                                            ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 71
            echo "                                                            <option value=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\">";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                                                        <label class=\"hrzn-fm\">Rangee :</label>
                                                    </div>
                                                    <div class=\"col-lg-3 col-md-7 col-sm-7 col-xs-12\">
                                                        <select class=\"form-control input-sm\" id=\"line-place\" name=\"range\">
                                                        \t";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 81
            echo "                                                            <option value=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\">";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                                        ";
        // line 88
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"col-lg-8 col-md-7 col-sm-7 col-xs-12\">
                                                    <br/>
                                                        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success notika-btn-success waves-effect\">
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-dt\" >
                            <table>
                                <tr>
                                    <td><div class=\"place-disponible\"></div></td>
                                    <td><div class=\"labe-add\" style=\"display: inline-block; line-height: 30px;\">Place vide &nbsp;</div></td>
                                    <td><div class=\"place-selectionne\"></div></td>
                                    <td><div class=\"labe-add\" style=\"display: inline-block; line-height: 30px;\">Place selectionne</div></td>
                                </tr>
                            </table>
                             
                             
                            <hr>
                            <table class=\"table-place\" style=\"width:90%; margin: auto;\">
                                <tr>
                                    <td><div class=\"chauffeur\"></div></td>
                                </tr>
                            </table>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Email Statistic area-->

";
    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        // line 136
        echo "
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/add-car.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "CooperativeBundle:Admin/Voiture:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 81,  148 => 80,  139 => 73,  145 => 74,  133 => 52,  126 => 71,  113 => 43,  94 => 39,  73 => 28,  185 => 93,  168 => 87,  151 => 79,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 195,  343 => 194,  335 => 189,  329 => 186,  268 => 128,  259 => 125,  199 => 101,  191 => 96,  179 => 93,  53 => 19,  141 => 75,  123 => 59,  252 => 92,  245 => 87,  234 => 81,  230 => 80,  227 => 79,  214 => 77,  190 => 62,  177 => 59,  170 => 57,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 43,  159 => 78,  64 => 30,  74 => 32,  116 => 50,  99 => 40,  82 => 42,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 33,  125 => 44,  369 => 208,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 87,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 40,  75 => 32,  68 => 30,  61 => 29,  135 => 58,  128 => 79,  105 => 56,  91 => 40,  86 => 39,  54 => 24,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 219,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 120,  239 => 117,  231 => 112,  219 => 109,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 81,  143 => 49,  138 => 48,  134 => 47,  131 => 56,  122 => 70,  117 => 42,  108 => 60,  102 => 41,  92 => 41,  84 => 26,  72 => 34,  69 => 31,  51 => 20,  48 => 18,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 119,  237 => 111,  207 => 103,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 58,  158 => 84,  150 => 75,  147 => 51,  142 => 49,  130 => 45,  127 => 59,  112 => 42,  96 => 38,  76 => 37,  71 => 24,  55 => 18,  114 => 42,  109 => 46,  106 => 56,  101 => 38,  85 => 35,  77 => 35,  67 => 30,  39 => 10,  110 => 57,  100 => 39,  89 => 27,  65 => 27,  63 => 27,  58 => 24,  34 => 11,  26 => 6,  98 => 34,  88 => 38,  80 => 33,  78 => 29,  46 => 12,  44 => 14,  36 => 12,  60 => 27,  43 => 10,  40 => 9,  57 => 16,  50 => 17,  47 => 14,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 11,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 136,  222 => 76,  215 => 73,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 60,  180 => 59,  171 => 54,  166 => 86,  163 => 77,  160 => 54,  157 => 48,  149 => 51,  146 => 78,  140 => 72,  137 => 71,  129 => 50,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 57,  107 => 40,  104 => 35,  97 => 42,  93 => 38,  90 => 36,  81 => 37,  70 => 31,  66 => 26,  62 => 29,  59 => 23,  56 => 28,  52 => 15,  49 => 22,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
