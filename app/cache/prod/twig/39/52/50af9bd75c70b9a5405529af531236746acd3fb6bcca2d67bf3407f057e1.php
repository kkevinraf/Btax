<?php

/* BookBundle:Log:cooperative.html.twig */
class __TwigTemplate_395250af9bd75c70b9a5405529af531236746acd3fb6bcca2d67bf3407f057e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_user.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div>
\t<div class=\"banniere\"></div>
\t<div class=\"content-b\">

";
        // line 8
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 9
            echo "<!-----------------------------Card------------------------------------>
\t<div class=\"card-cooperative\">
\t\t<div class=\"card-cooperative-logo\">

\t\t\t";
            // line 13
            $context["url"] = "uploads/logo/default_logo.jpg";
            // line 14
            echo "
\t\t\t";
            // line 15
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (($this->getAttribute($_entity_, "logo") != "")) {
                // line 16
                echo "\t\t\t\t";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                $context["url"] = ("uploads/logo/" . $this->getAttribute($_entity_, "logo"));
                // line 17
                echo "\t\t\t";
            }
            // line 18
            echo "
\t\t\t<div class=\"card-cooperative-logo-img\" style=\"background: url(";
            // line 19
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($_url_), "html", null, true);
            echo "); background-size: cover; background-position: center;\"></div>\t
\t\t\t
\t\t\t
\t\t</div>
\t\t<div class=\"card-cooperative-name\">
\t\t\t<a href=\"";
            // line 24
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_detailcooperative", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\" class=\"card-cooperative-body-link\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "nom"), "html", null, true);
            echo "</a>
\t\t</div>
\t\t<div class=\"card-cooperative-avis\">
\t\t\t<div class=\"card-cooperative-star\">
\t\t\t\t<div id=\"value\" style=\"width: 105px;\">
\t\t\t\t\t<div id=\"glob\" >
\t\t\t\t      <img id=\"tde_1\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
            echo "\" class=\"tde\"/>
\t\t\t\t      <img id=\"tde_2\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
            echo "\" class=\"tde\"/>
\t\t\t\t      <img id=\"tde_3\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
            echo "\" class=\"tde\"/>
\t\t\t\t      <img id=\"tde_4\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
            echo "\" class=\"tde\"/>
\t\t\t\t      <img id=\"tde_5\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
            echo "\" class=\"tde\"/>    
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card-cooperative-contact\">
\t\t\t<div class=\"card-cooperative-contact-g\">
\t\t\t\t<label class=\"card-cooperative-contact-g-fb\"></label>
\t\t\t\t<label class=\"card-cooperative-contact-g-tw\"></label>
\t\t\t\t<label class=\"card-cooperative-contact-g-insta\"></label>
\t\t\t\t<label class=\"card-cooperative-contact-g-mail\"></label>
\t\t\t</div>\t
\t\t</div>
\t</div>
<!-----------------------------End card------------------------------------>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:cooperative.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 211,  476 => 207,  471 => 8,  467 => 212,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 207,  431 => 197,  422 => 193,  417 => 192,  383 => 171,  378 => 169,  360 => 165,  341 => 158,  336 => 156,  322 => 151,  317 => 149,  310 => 145,  298 => 142,  284 => 137,  269 => 129,  210 => 93,  206 => 91,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 128,  315 => 127,  311 => 126,  303 => 144,  276 => 113,  250 => 98,  246 => 97,  218 => 84,  212 => 82,  203 => 79,  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 64,  148 => 59,  139 => 56,  145 => 58,  133 => 55,  126 => 50,  113 => 38,  94 => 43,  73 => 28,  185 => 82,  168 => 70,  151 => 79,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 128,  259 => 125,  199 => 78,  191 => 96,  179 => 93,  53 => 15,  141 => 75,  123 => 60,  252 => 92,  245 => 87,  234 => 94,  230 => 80,  227 => 79,  214 => 77,  190 => 76,  177 => 80,  170 => 65,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 43,  159 => 62,  64 => 24,  74 => 31,  116 => 49,  99 => 45,  82 => 42,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 104,  255 => 100,  242 => 96,  238 => 95,  228 => 92,  79 => 32,  125 => 52,  369 => 208,  364 => 153,  353 => 194,  345 => 189,  338 => 185,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 138,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 72,  164 => 77,  154 => 75,  144 => 67,  136 => 77,  87 => 40,  75 => 24,  68 => 19,  61 => 29,  135 => 58,  128 => 79,  105 => 36,  91 => 29,  86 => 39,  54 => 24,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 198,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 187,  394 => 105,  390 => 172,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 139,  330 => 180,  327 => 88,  321 => 86,  307 => 125,  302 => 84,  295 => 81,  287 => 80,  279 => 135,  256 => 73,  251 => 120,  239 => 117,  231 => 112,  219 => 95,  201 => 66,  195 => 77,  189 => 86,  186 => 85,  162 => 67,  155 => 65,  143 => 57,  138 => 48,  134 => 47,  131 => 62,  122 => 70,  117 => 57,  108 => 47,  102 => 46,  92 => 31,  84 => 26,  72 => 20,  69 => 30,  51 => 20,  48 => 13,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 121,  285 => 115,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 128,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 119,  237 => 105,  207 => 81,  204 => 90,  198 => 87,  194 => 95,  178 => 61,  173 => 58,  158 => 72,  150 => 70,  147 => 51,  142 => 57,  130 => 45,  127 => 59,  112 => 42,  96 => 32,  76 => 37,  71 => 24,  55 => 18,  114 => 42,  109 => 37,  106 => 56,  101 => 35,  85 => 35,  77 => 23,  67 => 30,  39 => 10,  110 => 57,  100 => 33,  89 => 27,  65 => 27,  63 => 18,  58 => 17,  34 => 11,  26 => 6,  98 => 34,  88 => 30,  80 => 33,  78 => 29,  46 => 12,  44 => 14,  36 => 12,  60 => 17,  43 => 10,  40 => 9,  57 => 16,  50 => 14,  47 => 14,  38 => 10,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 9,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 136,  222 => 76,  215 => 73,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 60,  180 => 74,  171 => 77,  166 => 69,  163 => 63,  160 => 54,  157 => 48,  149 => 51,  146 => 78,  140 => 56,  137 => 71,  129 => 53,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 48,  107 => 40,  104 => 34,  97 => 42,  93 => 38,  90 => 47,  81 => 37,  70 => 31,  66 => 19,  62 => 18,  59 => 23,  56 => 16,  52 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 9,  30 => 3,);
    }
}
