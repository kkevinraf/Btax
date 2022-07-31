<?php

/* CooperativeBundle:Admin/Membre/a:index.html.twig */
class __TwigTemplate_424ac76c9fc2ea8ce92d5df8ca5c62e0dda6bf515d481b4470aaa5945d58268c extends Twig_Template
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
        // line 6
        echo "<div class=\"data-table-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"data-table-list\">
                        <div class=\"basic-tb-hd\">
                            <h6>Recherche par ";
        // line 12
        if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
        echo twig_escape_filter($this->env, $_choice_, "html", null, true);
        echo " : ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $_user_, "html", null, true);
        echo "</h6>
                            
                        </div>
                        <div class=\"table-responsive\">
                            <table id=\"data-table-basic\" class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Adresse e-mail</th>
                                        <th>Nom & Prenom</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 27
        $context["i"] = 0;
        // line 28
        echo "                                    ";
        if (isset($context["utilisateurs"])) { $_utilisateurs_ = $context["utilisateurs"]; } else { $_utilisateurs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_utilisateurs_);
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 29
            echo "                                    <tr>
                                        <td>";
            // line 30
            if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_u_, "id"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 31
            if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_u_, "email"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 32
            if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_u_, "username"), "html", null, true);
            echo "</td>
                                        <td>Actif</td>
                                        <td>
                                            <a href=\"";
            // line 35
            if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membre_show", array("id" => $this->getAttribute($_u_, "id"))), "html", null, true);
            echo "\"><i class=\"notika-icon notika-more-button\"></i></a>
                                        </td>
                                    </tr>
                                    ";
            // line 38
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
            // line 39
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                                    ";
        // line 40
        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
        if (($_i_ == 0)) {
            // line 41
            echo "                                        <td colspan=\"5\"><center>Aucun resultat</center></td>
                                    ";
        }
        // line 42
        echo "                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

    ";
    }

    public function getTemplateName()
    {
        return "CooperativeBundle:Admin/Membre/a:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 93,  168 => 87,  151 => 79,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 195,  343 => 194,  335 => 189,  329 => 186,  268 => 128,  259 => 125,  199 => 101,  191 => 96,  179 => 93,  53 => 24,  141 => 75,  123 => 64,  252 => 92,  245 => 87,  234 => 81,  230 => 80,  227 => 111,  214 => 77,  190 => 62,  177 => 59,  170 => 57,  167 => 56,  153 => 52,  103 => 48,  83 => 41,  132 => 52,  120 => 49,  159 => 78,  64 => 25,  74 => 30,  116 => 50,  99 => 39,  82 => 32,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 25,  125 => 50,  369 => 208,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 87,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 40,  75 => 28,  68 => 30,  61 => 27,  135 => 58,  128 => 79,  105 => 56,  91 => 40,  86 => 39,  54 => 24,  31 => 6,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 219,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 120,  239 => 117,  231 => 112,  219 => 109,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 81,  143 => 49,  138 => 53,  134 => 47,  131 => 56,  122 => 48,  117 => 61,  108 => 39,  102 => 28,  92 => 41,  84 => 26,  72 => 30,  69 => 29,  51 => 20,  48 => 19,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 119,  237 => 111,  207 => 103,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 58,  158 => 84,  150 => 60,  147 => 51,  142 => 80,  130 => 45,  127 => 59,  112 => 42,  96 => 38,  76 => 37,  71 => 29,  55 => 18,  114 => 42,  109 => 46,  106 => 56,  101 => 51,  85 => 34,  77 => 31,  67 => 34,  39 => 12,  110 => 41,  100 => 47,  89 => 35,  65 => 35,  63 => 28,  58 => 21,  34 => 11,  26 => 6,  98 => 54,  88 => 38,  80 => 37,  78 => 40,  46 => 12,  44 => 14,  36 => 12,  60 => 27,  43 => 12,  40 => 9,  57 => 26,  50 => 14,  47 => 14,  38 => 6,  32 => 5,  27 => 3,  25 => 3,  24 => 4,  95 => 46,  42 => 13,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 60,  180 => 59,  171 => 54,  166 => 86,  163 => 50,  160 => 54,  157 => 48,  149 => 51,  146 => 78,  140 => 72,  137 => 71,  129 => 49,  124 => 35,  121 => 50,  118 => 46,  115 => 48,  111 => 58,  107 => 40,  104 => 44,  97 => 42,  93 => 38,  90 => 39,  81 => 37,  70 => 31,  66 => 26,  62 => 26,  59 => 25,  56 => 22,  52 => 15,  49 => 18,  45 => 8,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
