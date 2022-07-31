<?php

/* BookBundle:Log:avis.html.twig */
class __TwigTemplate_ceee453f2a0e9cb6436e97b5fec0fe8230004580cd6a6537a250bb3fc0e21f07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_user.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/styles-star.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/avis.css"), "html", null, true);
        echo "\">


";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
<div>
\t\t<div class=\"banniere\"></div>
\t\t<div class=\"content-b\">
\t\t\t<div class=\"content-avis\">
\t\t\t";
        // line 16
        $context["id_coop"] = 0;
        // line 17
        echo "\t\t\t\t";
        if (isset($context["cooperative"])) { $_cooperative_ = $context["cooperative"]; } else { $_cooperative_ = null; }
        if ((array_key_exists("cooperative", $context) && (twig_length_filter($this->env, $_cooperative_) > 0))) {
            // line 18
            echo "\t\t\t\t\t";
            if (isset($context["cooperative"])) { $_cooperative_ = $context["cooperative"]; } else { $_cooperative_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_cooperative_);
            foreach ($context['_seq'] as $context["_key"] => $context["coop"]) {
                // line 19
                echo "\t\t\t\t\t";
                if (isset($context["coop"])) { $_coop_ = $context["coop"]; } else { $_coop_ = null; }
                $context["id_coop"] = $this->getAttribute($_coop_, "id");
                // line 20
                echo "\t\t\t\t<!------------------Info cooperative------------------------>
\t\t\t\t<div class=\"left-content-avis\">
\t\t\t\t\t<div class=\"logo-cooperative-avis\">
\t\t\t\t\t\t<img src=\"";
                // line 23
                if (isset($context["coop"])) { $_coop_ = $context["coop"]; } else { $_coop_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/logo/" . $this->getAttribute($_coop_, "logo"))), "html", null, true);
                echo "\" class=\"logo-cooperative-avis-img\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content-cooperative-avis\">
\t\t\t\t\t\t<div class=\"cooperative-name\">";
                // line 26
                if (isset($context["coop"])) { $_coop_ = $context["coop"]; } else { $_coop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_coop_, "nom"), "html", null, true);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content-cooperative-avis\">
\t\t\t\t\t\t";
                // line 29
                if (isset($context["coop"])) { $_coop_ = $context["coop"]; } else { $_coop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_coop_, "contact"), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content-cooperative-avis\">
\t\t\t\t\t\t<div class=\"card-cooperative-star\">
\t\t\t\t\t\t\t<div id=\"value\" style=\"width: 105px;\">
\t\t\t\t\t\t\t\t<div id=\"glob\" >
\t\t\t\t\t\t\t      <img id=\"tde_1\" src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>
\t\t\t\t\t\t\t      <img id=\"tde_2\" src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>
\t\t\t\t\t\t\t      <img id=\"tde_3\" src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>
\t\t\t\t\t\t\t      <img id=\"tde_4\" src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>
\t\t\t\t\t\t\t      <img id=\"tde_5\" src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>    
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content-cooperative-botom\">
\t\t\t\t\t\t<div class=\"card-cooperative-contact\">
\t\t\t\t\t\t\t<div class=\"card-cooperative-contact-g\" style=\"height: 30px;\">
\t\t\t\t\t\t\t\t<label class=\"card-cooperative-contact-g-fb\"></label>
\t\t\t\t\t\t\t\t<label class=\"card-cooperative-contact-g-tw\"></label>
\t\t\t\t\t\t\t\t<label class=\"card-cooperative-contact-g-insta\"></label>
\t\t\t\t\t\t\t\t<label class=\"card-cooperative-contact-g-mail\"></label>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t\t\t";
        }
        // line 57
        echo "
\t\t\t\t<!------------------Avis------------------------>
\t\t\t\t<div class=\"right-content-avis\">
\t\t\t\t\t<div class=\"avis-title\">
\t\t\t\t\t\tAvis
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"avis-body\">
\t\t\t\t\t\t";
        // line 64
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        if ((array_key_exists("message", $context) && ($_message_ != null))) {
            // line 65
            echo "\t\t\t\t\t\t\t<div class=\"message-avis\">";
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $_message_, "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"avis-body-comment\">
\t\t\t\t\t\t";
        // line 69
        $context["len"] = 150;
        // line 70
        echo "\t\t\t\t\t\t";
        $context["note"] = 5;
        // line 71
        echo "\t\t\t\t\t\t";
        $context["comment"] = "";
        // line 72
        echo "
\t\t\t\t\t\t";
        // line 73
        if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
        if ((array_key_exists("myavis", $context) && (twig_length_filter($this->env, $_myavis_) > 0))) {
            // line 74
            echo "\t\t\t\t\t\t\t<form action=\"";
            echo $this->env->getExtension('routing')->getPath("book_update_avis");
            echo "\" method=\"POST\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 75
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_myavis_, "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 76
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            $context["len"] = (30 * $this->getAttribute($_myavis_, "note"));
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            $context["len"] = (30 * $this->getAttribute($_myavis_, "note"));
            // line 77
            echo "\t\t\t\t\t\t\t";
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            $context["comment"] = $this->getAttribute($_myavis_, "avis");
            // line 78
            echo "\t\t\t\t\t\t\t";
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            $context["note"] = $this->getAttribute($_myavis_, "note");
            // line 79
            echo "
\t\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t\t<form action=\"";
            echo $this->env->getExtension('routing')->getPath("book_add_avis");
            echo "\" method=\"POST\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cooperative\" value=\"";
            // line 82
            if (isset($context["id_coop"])) { $_id_coop_ = $context["id_coop"]; } else { $_id_coop_ = null; }
            echo twig_escape_filter($this->env, $_id_coop_, "html", null, true);
            echo "\">
\t\t\t\t\t\t";
        }
        // line 84
        echo "
\t\t\t\t\t\t\t<div class=\"avis-body-form-comment-block\">
\t\t\t\t\t\t\t\t<div class=\"picture-member\">
\t\t\t\t\t\t\t\t\t<div class=\"picture-member-img\">KR</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"comment-member-form\">
\t\t\t\t\t\t\t\t\t<div class=\"name-comment-member\">Votre avis</div>
\t\t\t\t\t\t\t\t\t<div class=\"note-member\">
\t\t\t\t\t\t\t\t\t\t<div id=\"value-add\" style=\"width:";
        // line 92
        if (isset($context["len"])) { $_len_ = $context["len"]; } else { $_len_ = null; }
        echo twig_escape_filter($this->env, $_len_, "html", null, true);
        echo "px;\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"glob\">
\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"tde_1\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">
\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"tde_2\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">
\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"tde_3\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">
\t\t\t\t\t\t\t\t\t\t     \t<img id=\"tde_4\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">
\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"tde_5\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">    
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"note_member\" value=\"";
        // line 100
        if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
        echo twig_escape_filter($this->env, $_note_, "html", null, true);
        echo "\" id=\"note_member\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content-form-comment-member\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"comment-form\" name=\"avis\">";
        // line 104
        if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
        echo twig_escape_filter($this->env, $_comment_, "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"comment-form-footer\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"\" value=\"Envoyer\" class=\"btn-send\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t";
        // line 113
        if (isset($context["avis"])) { $_avis_ = $context["avis"]; } else { $_avis_ = null; }
        if ((array_key_exists("avis", $context) && (twig_length_filter($this->env, $_avis_) > 0))) {
            // line 114
            echo "\t\t\t\t\t\t\t";
            if (isset($context["avis"])) { $_avis_ = $context["avis"]; } else { $_avis_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_avis_);
            foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
                // line 115
                echo "\t\t\t\t\t\t\t<div class=\"avis-body-comment-block\">
\t\t\t\t\t\t\t\t<div class=\"picture-member\">
\t\t\t\t\t\t\t\t\t<div class=\"picture-member-img\">KR</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"comment-member\">
\t\t\t\t\t\t\t\t\t<div class=\"note_by_member\">
\t\t\t\t\t\t\t\t\t";
                // line 121
                if (isset($context["avi"])) { $_avi_ = $context["avi"]; } else { $_avi_ = null; }
                $context["l"] = (30 * $this->getAttribute($_avi_, "note"));
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"value\" style=\"width: ";
                if (isset($context["l"])) { $_l_ = $context["l"]; } else { $_l_ = null; }
                echo twig_escape_filter($this->env, $_l_, "html", null, true);
                echo "px;\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"glob\" >
\t\t\t\t\t\t\t\t\t\t      <img id=\"tde_1\" src=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star_comment.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>
\t\t\t\t\t\t\t\t\t\t      <img id=\"tde_2\" src=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star_comment.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>
\t\t\t\t\t\t\t\t\t\t      <img id=\"tde_3\" src=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star_comment.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>
\t\t\t\t\t\t\t\t\t\t      <img id=\"tde_4\" src=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star_comment.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>
\t\t\t\t\t\t\t\t\t\t      <img id=\"tde_5\" src=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star_comment.png"), "html", null, true);
                echo "\" class=\"tde_cop\"/>    
\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"name-comment-member\">";
                // line 132
                if (isset($context["avi"])) { $_avi_ = $context["avi"]; } else { $_avi_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_avi_, "utilisateur"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"content-comment-member\">
\t\t\t\t\t\t\t\t\t\t";
                // line 134
                if (isset($context["avi"])) { $_avi_ = $context["avi"]; } else { $_avi_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_avi_, "avis"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 140
            echo "\t\t\t\t\t\t\t<br/>&nbsp;&nbsp;&nbsp;Aucun avis
\t\t\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>


";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "
<script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script-star.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:avis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 155,  367 => 154,  351 => 142,  332 => 134,  319 => 128,  315 => 127,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 97,  218 => 84,  212 => 82,  203 => 79,  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 64,  148 => 59,  139 => 56,  145 => 58,  133 => 55,  126 => 71,  113 => 38,  94 => 43,  73 => 28,  185 => 75,  168 => 70,  151 => 79,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 186,  268 => 128,  259 => 125,  199 => 78,  191 => 96,  179 => 93,  53 => 19,  141 => 75,  123 => 59,  252 => 92,  245 => 87,  234 => 94,  230 => 80,  227 => 79,  214 => 77,  190 => 76,  177 => 73,  170 => 65,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 43,  159 => 62,  64 => 29,  74 => 31,  116 => 49,  99 => 45,  82 => 42,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 104,  255 => 100,  242 => 96,  238 => 95,  228 => 92,  79 => 32,  125 => 52,  369 => 208,  364 => 153,  353 => 194,  345 => 189,  338 => 185,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 75,  174 => 72,  164 => 77,  154 => 75,  144 => 65,  136 => 77,  87 => 40,  75 => 32,  68 => 19,  61 => 29,  135 => 58,  128 => 79,  105 => 36,  91 => 29,  86 => 39,  54 => 24,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 219,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 139,  330 => 180,  327 => 88,  321 => 86,  307 => 125,  302 => 84,  295 => 81,  287 => 80,  279 => 114,  256 => 73,  251 => 120,  239 => 117,  231 => 112,  219 => 109,  201 => 66,  195 => 77,  189 => 86,  186 => 85,  162 => 67,  155 => 65,  143 => 57,  138 => 48,  134 => 47,  131 => 56,  122 => 70,  117 => 39,  108 => 47,  102 => 46,  92 => 41,  84 => 26,  72 => 20,  69 => 30,  51 => 20,  48 => 18,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 121,  285 => 115,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 119,  237 => 111,  207 => 81,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 58,  158 => 84,  150 => 75,  147 => 51,  142 => 57,  130 => 45,  127 => 59,  112 => 42,  96 => 44,  76 => 37,  71 => 24,  55 => 18,  114 => 42,  109 => 37,  106 => 56,  101 => 35,  85 => 35,  77 => 23,  67 => 30,  39 => 10,  110 => 57,  100 => 39,  89 => 27,  65 => 27,  63 => 27,  58 => 17,  34 => 11,  26 => 6,  98 => 34,  88 => 38,  80 => 33,  78 => 29,  46 => 10,  44 => 14,  36 => 12,  60 => 27,  43 => 10,  40 => 9,  57 => 16,  50 => 17,  47 => 14,  38 => 5,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 11,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 136,  222 => 76,  215 => 73,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 60,  180 => 74,  171 => 71,  166 => 69,  163 => 63,  160 => 54,  157 => 48,  149 => 51,  146 => 78,  140 => 56,  137 => 71,  129 => 53,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 48,  107 => 40,  104 => 35,  97 => 42,  93 => 38,  90 => 36,  81 => 37,  70 => 31,  66 => 26,  62 => 18,  59 => 23,  56 => 16,  52 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
