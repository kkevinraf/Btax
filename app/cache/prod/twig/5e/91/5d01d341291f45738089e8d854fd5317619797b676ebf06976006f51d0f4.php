<?php

/* BookBundle:Log:detail_cooperative.html.twig */
class __TwigTemplate_5e915d01d341291f45738089e8d854fd5317619797b676ebf06976006f51d0f4 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/style-card-i.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/filter-i-style.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/detail-cooperative.css"), "html", null, true);
        echo "\">

";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<div>
\t\t<div class=\"banniere\"></div>
\t\t<div class=\"content-b-b\">
\t\t\t
\t\t\t<!-------------------------------------------------------------------------->

\t\t\t<!--------------------------------Headder------------------------------------------>


\t\t\t<div class=\"h-c-details\">
\t\t\t";
        // line 23
        $context["id_coop"] = 0;
        // line 24
        echo "\t\t\t\t";
        if (isset($context["cooperative"])) { $_cooperative_ = $context["cooperative"]; } else { $_cooperative_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_cooperative_);
        foreach ($context['_seq'] as $context["_key"] => $context["coop"]) {
            // line 25
            echo "\t\t\t\t";
            if (isset($context["coop"])) { $_coop_ = $context["coop"]; } else { $_coop_ = null; }
            $context["id_coop"] = $this->getAttribute($_coop_, "id");
            // line 26
            echo "\t\t\t\t<div class=\"h-c-d-content\">
\t\t\t\t\t<div class=\"left-h-c-d\">
\t\t\t\t\t\t<div class=\"left-h-c-d-img\">
\t\t\t\t\t\t\t<div class=\"left-h-c-d-img-i\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 30
            if (isset($context["coop"])) { $_coop_ = $context["coop"]; } else { $_coop_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/logo/" . $this->getAttribute($_coop_, "logo"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"right-h-c-d\">
\t\t\t\t\t\t<div class=\"right-h-c-d-content\">
\t\t\t\t\t\t\t<div class=\"name-h-c-d\">";
            // line 36
            if (isset($context["coop"])) { $_coop_ = $context["coop"]; } else { $_coop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_coop_, "nom"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"right-h-c-d-content-b\">
\t\t\t\t\t\t\t";
            // line 38
            if (isset($context["coop"])) { $_coop_ = $context["coop"]; } else { $_coop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_coop_, "contact"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"right-h-c-d-content-b\">
\t\t\t\t\t\t\t\t";
            // line 41
            if (isset($context["coop"])) { $_coop_ = $context["coop"]; } else { $_coop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_coop_, "adresse"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t<div class=\"h-c-d-footer\">
\t\t\t\t\t<div class=\"left-h-c-d-footer active\">
\t\t\t\t\t\t<div class=\"footer-text active\" id=\"l-f-l-ft\">+100</div>Itineraire
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"right-h-c-d-footer\">
\t\t\t\t\t\t<div class=\"footer-text\" id=\"r-f-l-ft\">4,5</div>Avis
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-----------------------------------End Headder--------------------------------------->


\t\t\t<div class=\"cooperative-d-body-mobile\">
\t\t\t\t<div class=\"cp-left-content show\">
\t\t\t\t\t
<!-----------------------------Card------------------------------------>


\t";
        // line 65
        if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
        if ((array_key_exists("itineraires", $context) && (twig_length_filter($this->env, $_itineraires_) > 0))) {
            // line 66
            echo "
\t";
            // line 67
            if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
            $context["n"] = (twig_length_filter($this->env, $_itineraires_) - 1);
            // line 68
            echo "\t";
            if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, $_n_));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                echo "\t

\t\t<div class=\"card-it\">
\t\t";
                // line 72
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                $context["url"] = $this->env->getExtension('assets')->getAssetUrl(("uploads/logo/" . $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "logoitineraire", array(), "array")));
                // line 73
                echo "\t\t<div class=\"card-it-header\" style=\"background: url(";
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/localisation/" . $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "logoitineraire", array(), "array"))), "html", null, true);
                echo ");background-size: cover;background-repeat: no-repeat;\">
\t\t\t<div class=\"card-it-header-opacity\"></div>
\t\t\t<div class=\"card-it-header-logo\">
\t\t\t\t<img src=\"";
                // line 76
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/logo/" . $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "cooperativelogo", array(), "array"))), "html", null, true);
                echo "\" class=\"card-it-header-logo-img\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card-it-body\">
\t\t\t<div class=\"card-it-body-destination\">
\t\t\t\t";
                // line 81
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "itineraire", array(), "array"), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<div class=\"card-it-body-cooperative-name\">
\t\t\t\t<a href=\"#\" class=\"card-it-body-link\">";
                // line 84
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "cooperative", array(), "array"), "html", null, true);
                echo "</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card-it-tarif\">
\t\t<br/>
\t\t";
                // line 89
                if (isset($context["itinerairecoops"])) { $_itinerairecoops_ = $context["itinerairecoops"]; } else { $_itinerairecoops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_itinerairecoops_);
                foreach ($context['_seq'] as $context["_key"] => $context["itinerairecoop"]) {
                    // line 90
                    echo "\t\t\t";
                    if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                    if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if (($this->getAttribute($this->getAttribute($_itinerairecoop_, "itineraire"), "id") == $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "iditineraire", array(), "array"))) {
                        // line 91
                        echo "\t\t\t\t<div class=\"group-info-body-c-i-destination-tarif\">
\t\t\t\t\t<div class=\"label-c-i-destination-tarif\">";
                        // line 92
                        if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_itinerairecoop_, "place"), "typeplace"), "html", null, true);
                        echo "</div><div class=\"prix-c-i-destination-tarif\">";
                        if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_itinerairecoop_, "prix"), "html", null, true);
                        echo " Ar</div>
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 95
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerairecoop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "\t\t\t
\t\t</div>
\t\t<div class=\"button-body-c-i\">
\t\t\t<a href=\"\"><input type=\"submit\" name=\"\" value=\"Plus\" class=\"button-body-c-i-btn\"></a>
\t\t</div>
\t</div>



\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t";
        }
        // line 107
        echo "


\t
<!-----------------------------End card------------------------------------>


\t\t\t\t</div>
\t\t\t\t<div class=\"cp-right-content hide\">
\t\t\t\t\t<div class=\"cp-right-content-list\">
\t\t\t\t\t\t<div class=\"link-add-test\">
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"item-list-avis\">
\t\t\t\t\t\t\t\t<div class=\"add-avis\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"add-avis-link\">";
        // line 122
        if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
        if ((array_key_exists("myavis", $context) && (twig_length_filter($this->env, $_myavis_) > 0))) {
            echo "Modifier mon avis";
        } else {
            echo "Ajouter mon avis";
        }
        echo "</a>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t";
        // line 126
        if (isset($context["avis"])) { $_avis_ = $context["avis"]; } else { $_avis_ = null; }
        if ((array_key_exists("avis", $context) && (twig_length_filter($this->env, $_avis_) > 0))) {
            // line 127
            echo "
\t\t\t\t\t";
            // line 128
            if (isset($context["avis"])) { $_avis_ = $context["avis"]; } else { $_avis_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_avis_);
            foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
                // line 129
                echo "\t\t\t\t\t\t\t<!--Liste avis-->
\t\t\t\t\t\t\t<div class=\"item-lists-avis-list\">
\t\t\t\t\t\t\t\t<div class=\"top-item\">
\t\t\t\t\t\t\t\t\t<div class=\"item-lists-avis-list-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-name-c\">KR</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item-lists-avis-list-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"comment-name\">";
                // line 136
                if (isset($context["avi"])) { $_avi_ = $context["avi"]; } else { $_avi_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_avi_, "utilisateur"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"comment-star\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-star-e\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 139
                if (isset($context["avi"])) { $_avi_ = $context["avi"]; } else { $_avi_ = null; }
                $context["l"] = (30 * $this->getAttribute($_avi_, "note"));
                // line 140
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"value-list\" style=\"width: ";
                if (isset($context["l"])) { $_l_ = $context["l"]; } else { $_l_ = null; }
                echo twig_escape_filter($this->env, $_l_, "html", null, true);
                echo "px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"glob-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"tde-list_1\" src=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"tde-list_2\" src=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"tde-list_3\" src=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde-list\">
\t\t\t\t\t\t\t\t\t\t\t\t      \t<img id=\"tde-list_4\" src=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"tde-list_5\" src=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
                echo "\" class=\"tde-list\">    
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-item\">
\t\t\t\t\t\t\t\t\t<div class=\"comment-content\">
\t\t\t\t\t\t\t\t\t\t";
                // line 156
                if (isset($context["avi"])) { $_avi_ = $context["avi"]; } else { $_avi_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_avi_, "avis"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "\t\t\t\t\t\t<!-----------------------------------End list--------------------------------------->


\t\t\t\t\t\t";
            // line 164
            if (isset($context["avis"])) { $_avis_ = $context["avis"]; } else { $_avis_ = null; }
            if ((twig_length_filter($this->env, $_avis_) > 4)) {
                // line 165
                echo "\t\t\t\t\t\t<div class=\"view-more\">
\t\t\t\t\t\t\t<a href=\"";
                // line 166
                if (isset($context["id_coop"])) { $_id_coop_ = $context["id_coop"]; } else { $_id_coop_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_all_avis", array("id" => $_id_coop_)), "html", null, true);
                echo "\"><button class=\"see-more-btn\">Voir tous les avis</button></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 169
            echo "
\t\t\t\t\t";
        } else {
            // line 171
            echo "\t\t\t\t\t<div style=\"width: 96%; min-height: 45px; height: auto; margin: auto; text-align: center; margin-top: 10px;\">
\t\t\t\t\t\tAucun avis pour le moment :)
\t\t\t\t\t</div>

\t\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t
\t\t\t\t</div>











\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"cp-right-content-formadd hide\">

\t\t\t\t\t\t<div class=\"item-add-avis\">
\t\t\t\t\t\t\t<div class=\"form-avis\">
\t\t\t\t\t\t\t";
        // line 195
        $context["len"] = 150;
        // line 196
        echo "\t\t\t\t\t\t\t";
        $context["note"] = 5;
        // line 197
        echo "\t\t\t\t\t\t\t";
        $context["comment"] = "";
        // line 198
        echo "\t\t\t\t\t\t\t";
        if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
        if ((array_key_exists("myavis", $context) && (twig_length_filter($this->env, $_myavis_) > 0))) {
            // line 199
            echo "\t\t\t\t\t\t\t\t<form action=\"";
            echo $this->env->getExtension('routing')->getPath("book_update_avis");
            echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 200
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_myavis_, "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 201
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            $context["len"] = (30 * $this->getAttribute($_myavis_, "note"));
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            $context["len"] = (30 * $this->getAttribute($_myavis_, "note"));
            // line 202
            echo "\t\t\t\t\t\t\t\t";
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            $context["comment"] = $this->getAttribute($_myavis_, "avis");
            // line 203
            echo "\t\t\t\t\t\t\t\t";
            if (isset($context["myavis"])) { $_myavis_ = $context["myavis"]; } else { $_myavis_ = null; }
            $context["note"] = $this->getAttribute($_myavis_, "note");
            // line 204
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 205
            echo "\t\t\t\t\t\t\t\t<form action=\"";
            echo $this->env->getExtension('routing')->getPath("book_add_avis");
            echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cooperative\" value=\"";
            // line 206
            if (isset($context["id_coop"])) { $_id_coop_ = $context["id_coop"]; } else { $_id_coop_ = null; }
            echo twig_escape_filter($this->env, $_id_coop_, "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
        }
        // line 208
        echo "\t\t\t\t\t\t\t\tVotre note : <br>
\t\t\t\t\t\t\t\t<div id=\"value-add\">
\t\t\t\t\t\t\t\t\t<div id=\"glob\">
\t\t\t\t\t\t\t\t\t\t<img id=\"tde_1\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">
\t\t\t\t\t\t\t\t\t\t<img id=\"tde_2\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">
\t\t\t\t\t\t\t\t\t\t<img id=\"tde_3\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">
\t\t\t\t\t\t\t\t     \t<img id=\"tde_4\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">
\t\t\t\t\t\t\t\t\t\t<img id=\"tde_5\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/star.png"), "html", null, true);
        echo "\" class=\"tde\">    
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"note_member\" value=\"";
        // line 217
        if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
        echo twig_escape_filter($this->env, $_note_, "html", null, true);
        echo "\" id=\"note_member\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<textarea class=\"text-avis\" name=\"avis\">";
        // line 219
        if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
        echo twig_escape_filter($this->env, $_comment_, "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"\" value=\"Envoyer\" class=\"btn-send-avis\">

\t\t\t\t\t\t\t\t<div class=\"back-avis\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"back-avis-link\">Retour sur les avis</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>




\t\t\t<div class=\"cooperative-d-body-desktop\">

\t\t\t\t<div class=\"list-itineraire-cooperative-d\">
\t\t\t\t\t
\t\t\t\t\t<!-----------------------------Card------------------------------------>

\t";
        // line 243
        if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
        if ((array_key_exists("itineraires", $context) && (twig_length_filter($this->env, $_itineraires_) > 0))) {
            echo "\t\t\t\t
\t";
            // line 244
            if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
            $context["n"] = (twig_length_filter($this->env, $_itineraires_) - 1);
            // line 245
            echo "\t";
            if (isset($context["n"])) { $_n_ = $context["n"]; } else { $_n_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, $_n_));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 246
                echo "\t

\t\t<div class=\"card-it\">
\t\t";
                // line 249
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                $context["url"] = $this->env->getExtension('assets')->getAssetUrl(("uploads/logo/" . $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "logoitineraire", array(), "array")));
                // line 250
                echo "\t\t<div class=\"card-it-header\" style=\"background: url(";
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/localisation/" . $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "logoitineraire", array(), "array"))), "html", null, true);
                echo ");background-size: cover;background-repeat: no-repeat;\">
\t\t\t<div class=\"card-it-header-opacity\"></div>
\t\t\t<div class=\"card-it-header-logo\">
\t\t\t\t<img src=\"";
                // line 253
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/logo/" . $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "cooperativelogo", array(), "array"))), "html", null, true);
                echo "\" class=\"card-it-header-logo-img\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card-it-body\">
\t\t\t<div class=\"card-it-body-destination\">
\t\t\t\t";
                // line 258
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "itineraire", array(), "array"), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<div class=\"card-it-body-cooperative-name\">
\t\t\t\t<a href=\"#\" class=\"card-it-body-link\">";
                // line 261
                if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "cooperative", array(), "array"), "html", null, true);
                echo "</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card-it-tarif\">
\t\t<br/>
\t\t";
                // line 266
                if (isset($context["itinerairecoops"])) { $_itinerairecoops_ = $context["itinerairecoops"]; } else { $_itinerairecoops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_itinerairecoops_);
                foreach ($context['_seq'] as $context["_key"] => $context["itinerairecoop"]) {
                    // line 267
                    echo "\t\t\t";
                    if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                    if (isset($context["itineraires"])) { $_itineraires_ = $context["itineraires"]; } else { $_itineraires_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if (($this->getAttribute($this->getAttribute($_itinerairecoop_, "itineraire"), "id") == $this->getAttribute($this->getAttribute($_itineraires_, $_i_, array(), "array"), "iditineraire", array(), "array"))) {
                        // line 268
                        echo "\t\t\t\t<div class=\"group-info-body-c-i-destination-tarif\">
\t\t\t\t\t<div class=\"label-c-i-destination-tarif\">";
                        // line 269
                        if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_itinerairecoop_, "place"), "typeplace"), "html", null, true);
                        echo "</div><div class=\"prix-c-i-destination-tarif\">";
                        if (isset($context["itinerairecoop"])) { $_itinerairecoop_ = $context["itinerairecoop"]; } else { $_itinerairecoop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_itinerairecoop_, "prix"), "html", null, true);
                        echo " Ar</div>
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 272
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerairecoop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "\t\t\t
\t\t</div>
\t</div>



\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "\t";
        }
        // line 281
        echo "

\t
<!-----------------------------End card------------------------------------>

\t\t\t\t</div>

\t\t\t\t
<!-----------------------------End card------------------------------------>

\t\t\t\t</div>
\t\t\t\t<div class=\"link-desktop-b\">
\t\t\t\t\t<div class=\"link-desktop-b-show\">
\t\t\t\t\t\t<a href=\"";
        // line 294
        if (isset($context["id_coop"])) { $_id_coop_ = $context["id_coop"]; } else { $_id_coop_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("book_all_avis", array("id" => $_id_coop_)), "html", null, true);
        echo "\"><div style=\"display: flex;flex-wrap: nowrap; color: #fff; width: 80%; margin: auto; line-height: 40px;\"><div class=\"icone-avis\"></div>Voir les avis</div></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

";
    }

    // line 301
    public function block_javascripts($context, array $blocks = array())
    {
        // line 302
        echo "
<script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/detail-cooperative.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script-star.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:detail_cooperative.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 258,  547 => 253,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 214,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 164,  356 => 161,  331 => 146,  323 => 144,  305 => 139,  289 => 129,  278 => 126,  266 => 122,  481 => 217,  476 => 215,  471 => 8,  467 => 212,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 206,  431 => 197,  422 => 193,  417 => 192,  383 => 171,  378 => 171,  360 => 165,  341 => 158,  336 => 156,  322 => 151,  317 => 149,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 93,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 143,  315 => 142,  311 => 126,  303 => 144,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 91,  203 => 79,  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 64,  148 => 59,  139 => 56,  145 => 58,  133 => 55,  126 => 50,  113 => 38,  94 => 36,  73 => 28,  185 => 82,  168 => 70,  151 => 79,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 128,  259 => 125,  199 => 78,  191 => 84,  179 => 93,  53 => 12,  141 => 75,  123 => 60,  252 => 92,  245 => 87,  234 => 94,  230 => 80,  227 => 79,  214 => 77,  190 => 76,  177 => 80,  170 => 65,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 47,  159 => 62,  64 => 24,  74 => 25,  116 => 49,  99 => 45,  82 => 42,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 104,  255 => 100,  242 => 96,  238 => 95,  228 => 92,  79 => 32,  125 => 52,  369 => 208,  364 => 165,  353 => 194,  345 => 189,  338 => 185,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 138,  248 => 119,  233 => 110,  225 => 95,  217 => 103,  213 => 102,  205 => 75,  174 => 72,  164 => 73,  154 => 75,  144 => 67,  136 => 77,  87 => 40,  75 => 24,  68 => 24,  61 => 29,  135 => 58,  128 => 79,  105 => 36,  91 => 29,  86 => 39,  54 => 24,  31 => 4,  549 => 162,  543 => 161,  538 => 250,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 211,  455 => 208,  450 => 126,  444 => 205,  441 => 204,  437 => 203,  434 => 119,  429 => 116,  423 => 200,  420 => 111,  416 => 110,  413 => 109,  408 => 196,  394 => 105,  390 => 172,  375 => 101,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 156,  330 => 180,  327 => 145,  321 => 86,  307 => 125,  302 => 84,  295 => 81,  287 => 80,  279 => 135,  256 => 73,  251 => 120,  239 => 117,  231 => 96,  219 => 95,  201 => 89,  195 => 77,  189 => 86,  186 => 85,  162 => 67,  155 => 69,  143 => 66,  138 => 48,  134 => 47,  131 => 62,  122 => 70,  117 => 57,  108 => 47,  102 => 46,  92 => 31,  84 => 30,  72 => 20,  69 => 30,  51 => 20,  48 => 13,  35 => 6,  29 => 3,  312 => 96,  308 => 140,  293 => 121,  285 => 115,  281 => 127,  277 => 86,  274 => 85,  271 => 77,  264 => 128,  261 => 81,  257 => 79,  253 => 77,  249 => 107,  247 => 119,  237 => 105,  207 => 81,  204 => 90,  198 => 87,  194 => 95,  178 => 61,  173 => 76,  158 => 72,  150 => 70,  147 => 51,  142 => 57,  130 => 45,  127 => 59,  112 => 42,  96 => 32,  76 => 37,  71 => 24,  55 => 18,  114 => 42,  109 => 37,  106 => 56,  101 => 35,  85 => 35,  77 => 23,  67 => 30,  39 => 10,  110 => 57,  100 => 38,  89 => 27,  65 => 27,  63 => 18,  58 => 17,  34 => 11,  26 => 6,  98 => 34,  88 => 30,  80 => 33,  78 => 26,  46 => 12,  44 => 14,  36 => 12,  60 => 17,  43 => 7,  40 => 9,  57 => 16,  50 => 11,  47 => 14,  38 => 5,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 9,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 136,  222 => 76,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 64,  193 => 88,  187 => 95,  183 => 81,  180 => 74,  171 => 77,  166 => 69,  163 => 63,  160 => 72,  157 => 48,  149 => 68,  146 => 67,  140 => 65,  137 => 71,  129 => 53,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 48,  107 => 41,  104 => 34,  97 => 42,  93 => 38,  90 => 47,  81 => 37,  70 => 31,  66 => 23,  62 => 18,  59 => 23,  56 => 16,  52 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 4,  30 => 3,);
    }
}
