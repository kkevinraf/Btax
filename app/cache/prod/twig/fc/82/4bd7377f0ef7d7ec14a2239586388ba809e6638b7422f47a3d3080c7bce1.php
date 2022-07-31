<?php

/* BtaxBundle:Admin/Cooperative:show.html.twig */
class __TwigTemplate_fc824bd7377f0ef7d7ec14a2239586388ba809e6638b7422f47a3d3080c7bce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_admin_btax.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<style type=\"text/css\">
    .contact-img
    {
    margin: auto;
    }
    .logo-l
    {
        width: 180px;
        height: 180px;
        border: 1px solid #000;
        
    }
</style>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"container\">
        <div class=\"col-lg-4 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"contact-inner\">
                        <div class=\"contact-dt\">
                            <div class=\"contact-list\">
                                <div class=\"contact-win\">
                                    <div class=\"contact-img\">
                                        ";
        // line 27
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if (($this->getAttribute($_entity_, "logo") == "")) {
            // line 28
            echo "                                            ";
            $context["url"] = "admin_assets/img/default_logo.jpg";
            // line 29
            echo "                                        ";
        } else {
            // line 30
            echo "                                            ";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            $context["url"] = ("uploads/logo/" . $this->getAttribute($_entity_, "logo"));
            // line 31
            echo "                                        ";
        }
        // line 32
        echo "                                        <img src=\"";
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($_url_), "html", null, true);
        echo "\" class=\"logo-l\" alt=\"\" />
                                        
                                    </div>
                                </div>
                                <div class=\"contact-ctn\">
                                    <div class=\"contact-ad-hd\">
                                        <h2>";
        // line 38
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "nom"), "html", null, true);
        echo "</h2>
                                        <p class=\"ctn-ads\">";
        // line 39
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "mail"), "html", null, true);
        echo "</p>
                                    </div>
                                    <p>
                                        Adresse : ";
        // line 42
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "adresse"), "html", null, true);
        echo " <br>
                                        Contact : ";
        // line 43
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "contact"), "html", null, true);
        echo " <br>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> 
        </div>    

        <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"data-table-list\">
                <div class=\"basic-tb-hd\">
                    <h2>Listes avis</h2>
                    <hr>
                </div>
                <div class=\"table-responsive\">
                    <table id=\"data-table-basic\" class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th> Note </th>
                                        <th> Cooperative </th>
                                        <th> Commentaire </th>
                                        <th> Membre </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    ";
        // line 71
        if (isset($context["avis"])) { $_avis_ = $context["avis"]; } else { $_avis_ = null; }
        if ((twig_length_filter($this->env, $_avis_) != 0)) {
            // line 72
            echo "                                    ";
            if (isset($context["avis"])) { $_avis_ = $context["avis"]; } else { $_avis_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_avis_);
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                echo "    
                                    <tr>
                                        <td> ";
                // line 74
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_a_, "note"), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 75
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_a_, "cooperative"), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 76
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_a_, "avis"), "html", null, true);
                echo " </td>
                                        <td> <a href=\"";
                // line 77
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membre_show_cooperative", array("id" => $this->getAttribute($this->getAttribute($_a_, "utilisateur"), "id"))), "html", null, true);
                echo "\">";
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_a_, "utilisateur"), "username"), "html", null, true);
                echo "</a> </td>
                                        <td>
                                            <a href=\"";
                // line 79
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membre_avis_signale", array("id" => $this->getAttribute($_a_, "id"))), "html", null, true);
                echo "\">
                                                <button class=\"btn btn-warning notika-btn-error waves-effect\">Signaler</button>
                                            </a>
                                        </td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                                    ";
        } else {
            // line 86
            echo "                                    <center>Aucun avis<center>
                                    ";
        }
        // line 88
        echo "                                </tbody>
                            </table>
                </div>
            </div>   
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "BtaxBundle:Admin/Cooperative:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 76,  64 => 28,  74 => 31,  116 => 49,  99 => 44,  82 => 39,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 38,  125 => 52,  369 => 194,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 100,  174 => 87,  164 => 77,  154 => 75,  144 => 79,  136 => 77,  87 => 40,  75 => 34,  68 => 30,  61 => 27,  135 => 58,  128 => 79,  105 => 43,  91 => 40,  86 => 39,  54 => 22,  31 => 6,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 55,  143 => 49,  138 => 85,  134 => 43,  131 => 56,  122 => 37,  117 => 61,  108 => 31,  102 => 28,  92 => 51,  84 => 21,  72 => 35,  69 => 35,  51 => 13,  48 => 19,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 70,  237 => 111,  207 => 70,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 79,  158 => 56,  150 => 54,  147 => 51,  142 => 52,  130 => 42,  127 => 41,  112 => 32,  96 => 41,  76 => 37,  71 => 17,  55 => 23,  114 => 48,  109 => 46,  106 => 20,  101 => 51,  85 => 40,  77 => 32,  67 => 29,  39 => 13,  110 => 65,  100 => 42,  89 => 41,  65 => 14,  63 => 25,  58 => 24,  34 => 11,  26 => 6,  98 => 40,  88 => 38,  80 => 15,  78 => 40,  46 => 12,  44 => 14,  36 => 12,  60 => 12,  43 => 16,  40 => 9,  57 => 11,  50 => 14,  47 => 16,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 67,  42 => 19,  28 => 4,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 88,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 74,  146 => 41,  140 => 72,  137 => 71,  129 => 36,  124 => 35,  121 => 50,  118 => 49,  115 => 32,  111 => 58,  107 => 28,  104 => 45,  97 => 24,  93 => 39,  90 => 21,  81 => 37,  70 => 30,  66 => 13,  62 => 11,  59 => 15,  56 => 23,  52 => 20,  49 => 18,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
