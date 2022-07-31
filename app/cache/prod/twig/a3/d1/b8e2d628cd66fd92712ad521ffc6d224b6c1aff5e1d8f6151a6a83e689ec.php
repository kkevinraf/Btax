<?php

/* CooperativeBundle:Admin/Voiture:index.html.twig */
class __TwigTemplate_a3d1b8e2d628cd66fd92712ad521ffc6d224b6c1aff5e1d8f6151a6a83e689ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_admin_cooperative.html.twig");

        $this->blocks = array(
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
                            <h6>Listes des voitures</h6>
                            <hr>
                        </div>
                        <div class=\"contact-dt\">
                            <div class=\"table-responsive\">
                            <table id=\"data-table-basic\" class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Immatriculation</th>
                                        <th> Nom proprietaire </th>
                                        <th> NIF </th>
                                        <th> Nombre de place </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 28
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "                                    <tr>
                                            <td>";
            // line 30
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "immatriculation"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 31
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "nomProprietaire"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 32
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "nIF"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 33
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "nbrPlace"), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 35
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voiture_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><i class=\"notika-icon notika-more-button\"></i></a>&nbsp;&nbsp;
                                                <a href=\"";
            // line 36
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voiture_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><i class=\"notika-icon notika-edit\"></i></a>&nbsp;&nbsp;
                                                <a href=\"#\"><i class=\"notika-icon notika-close\"></i></a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                </tbody>
                            </table>
                        </div>
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
        return "CooperativeBundle:Admin/Voiture:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 74,  133 => 52,  126 => 49,  113 => 43,  94 => 39,  73 => 28,  185 => 93,  168 => 87,  151 => 79,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 195,  343 => 194,  335 => 189,  329 => 186,  268 => 128,  259 => 125,  199 => 101,  191 => 96,  179 => 93,  53 => 23,  141 => 75,  123 => 59,  252 => 92,  245 => 87,  234 => 81,  230 => 80,  227 => 79,  214 => 77,  190 => 62,  177 => 59,  170 => 57,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 43,  159 => 78,  64 => 30,  74 => 32,  116 => 50,  99 => 40,  82 => 31,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 33,  125 => 44,  369 => 208,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 87,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 40,  75 => 32,  68 => 30,  61 => 29,  135 => 58,  128 => 79,  105 => 56,  91 => 40,  86 => 39,  54 => 24,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 219,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 120,  239 => 117,  231 => 112,  219 => 109,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 81,  143 => 49,  138 => 48,  134 => 47,  131 => 56,  122 => 48,  117 => 42,  108 => 39,  102 => 41,  92 => 41,  84 => 26,  72 => 34,  69 => 31,  51 => 20,  48 => 18,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 119,  237 => 111,  207 => 103,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 58,  158 => 84,  150 => 75,  147 => 51,  142 => 49,  130 => 45,  127 => 59,  112 => 42,  96 => 38,  76 => 37,  71 => 24,  55 => 18,  114 => 42,  109 => 46,  106 => 56,  101 => 38,  85 => 35,  77 => 35,  67 => 30,  39 => 10,  110 => 57,  100 => 39,  89 => 27,  65 => 27,  63 => 28,  58 => 24,  34 => 11,  26 => 6,  98 => 34,  88 => 38,  80 => 33,  78 => 29,  46 => 12,  44 => 14,  36 => 12,  60 => 27,  43 => 10,  40 => 9,  57 => 16,  50 => 14,  47 => 14,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 36,  42 => 11,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 60,  180 => 59,  171 => 54,  166 => 86,  163 => 77,  160 => 54,  157 => 48,  149 => 51,  146 => 78,  140 => 72,  137 => 71,  129 => 50,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 57,  107 => 40,  104 => 35,  97 => 42,  93 => 38,  90 => 36,  81 => 37,  70 => 31,  66 => 26,  62 => 29,  59 => 23,  56 => 28,  52 => 15,  49 => 22,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
