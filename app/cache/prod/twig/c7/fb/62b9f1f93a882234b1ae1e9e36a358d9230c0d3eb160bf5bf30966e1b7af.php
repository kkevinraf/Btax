<?php

/* BookBundle:Logout:result_logout.html.twig */
class __TwigTemplate_c7fb62b9f1f93a882234b1ae1e9e36a358d9230c0d3eb160bf5bf30966e1b7af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>B'tax</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/styles-ind.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/footer.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/counter-box.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/recherche-style.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/card-itineraire-style.css"), "html", null, true);
        echo "\">

\t<style>
\t\t.no-result
\t\t{
\t\t\twidth: 100%;
\t\t\tmin-height: 50px;
\t\t\theight: auto;
\t\t\ttext-align: center;
\t\t}
\t\t.no-result a
\t\t{
\t\t\tcolor: #FAC202;
\t\t}

\t\t.search-result-content
\t\t{
\t\t\tdisplay: flex;
\t\t\tflex-wrap: wrap;
\t\t}
\t</style>
</head>
<body>
\t<!-----------------------------Header------------------------------------>
\t<header class=\"topbar-c\">
\t\t<div class=\"nav-c\">
\t\t\t<!-----------------------------Header Left------------------------------------>
\t\t\t<div class=\"nav-c-left\">
\t\t\t\t<div class=\"logo-place\">
\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("book_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/logo-f.png"), "html", null, true);
        echo "\" class=\"logo-place-img\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-----------------------------End Header Left------------------------------------>


\t\t\t<!-----------------------------Header Right------------------------------------>
\t\t\t<div class=\"nav-c-right\">
\t\t\t\t<div class=\"nav-c-right-space\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><button class=\"stl-btn-log\">Connexion</button></a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><button class=\"stl-btn-log\">Inscription</button></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-----------------------------End Header Right------------------------------------>

\t\t</div>
\t</header>
\t<!-----------------------------End Header------------------------------------>
\t<div>
\t<div class=\"banniere\"></div>
\t<div class=\"header-search\">
\t\t<div class=\"form-header-search\">
\t\t\t<div class=\"header-search-result\">
\t\t\t\t";
        // line 66
        if (array_key_exists("searchresult", $context)) {
            // line 67
            echo "\t\t\t\t<div class=\"header-search-result-number\">
\t\t\t\t\t";
            // line 68
            if (array_key_exists("data", $context)) {
                // line 69
                echo "\t\t\t\t\t\t";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $_data_), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t</div>\t
\t\t\t\t<div class=\"header-search-result-text\">
\t\t\t\t\t&nbsp;resultat";
            // line 73
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ((array_key_exists("data", $context) && (twig_length_filter($this->env, $_data_) > 1))) {
                echo "s
\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 77
        echo "\t\t\t</div>
\t\t\t<div class=\"header-search-link\">
\t\t\t\t<a href=\"#\" class=\"run-search ";
        // line 79
        if (array_key_exists("searchresult", $context)) {
            echo " ";
            if (isset($context["searchresult"])) { $_searchresult_ = $context["searchresult"]; } else { $_searchresult_ = null; }
            echo twig_escape_filter($this->env, $_searchresult_, "html", null, true);
            echo " ";
        } else {
            echo " is-close ";
        }
        echo "\">Lancer la recherche</a>
\t\t\t\t<a href=\"#\" class=\"see-result ";
        // line 80
        if (array_key_exists("searchform", $context)) {
            echo " ";
            if (isset($context["searchform"])) { $_searchform_ = $context["searchform"]; } else { $_searchform_ = null; }
            echo twig_escape_filter($this->env, $_searchform_, "html", null, true);
            echo " ";
        } else {
            echo " is-open ";
        }
        echo "\">Annuler la recherche</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"search-form ";
        // line 84
        if (array_key_exists("searchform", $context)) {
            echo " ";
            if (isset($context["searchform"])) { $_searchform_ = $context["searchform"]; } else { $_searchform_ = null; }
            echo twig_escape_filter($this->env, $_searchform_, "html", null, true);
            echo " ";
        } else {
            echo " is-open ";
        }
        echo "\">
\t<div class=\"form-search-div\">
\t\t<div class=\"form-search-div-title\">
\t\t\tRecherche avancée
\t\t</div>
\t\t<form class=\"r-form-search-div\" action=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("search_log_out");
        echo "\" method=\"POST\">

\t\t\t<datalist id=\"villes\">
\t\t\t\t";
        // line 92
        if (isset($context["villes"])) { $_villes_ = $context["villes"]; } else { $_villes_ = null; }
        if ((array_key_exists("villes", $context) && (twig_length_filter($this->env, $_villes_) != 0))) {
            // line 93
            echo "                    ";
            if (isset($context["villes"])) { $_villes_ = $context["villes"]; } else { $_villes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_villes_);
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 94
                echo "                       \t<option value=\"";
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_a_, "localisation"), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                ";
        }
        // line 97
        echo "\t\t\t</datalist>

\t\t\t<datalist id=\"cooperatives\">
\t\t\t\t";
        // line 100
        if (isset($context["cooperatives"])) { $_cooperatives_ = $context["cooperatives"]; } else { $_cooperatives_ = null; }
        if ((array_key_exists("cooperatives", $context) && (twig_length_filter($this->env, $_cooperatives_) != 0))) {
            // line 101
            echo "                    ";
            if (isset($context["cooperatives"])) { $_cooperatives_ = $context["cooperatives"]; } else { $_cooperatives_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_cooperatives_);
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 102
                echo "                       \t<option value=\"";
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_c_, "nom"), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                ";
        }
        // line 105
        echo "\t\t\t</datalist>

\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t\tDépart
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<input list=\"villes\" type=\"text\" class=\"input-f-search\" value=\"";
        // line 112
        if (isset($context["depart"])) { $_depart_ = $context["depart"]; } else { $_depart_ = null; }
        if ((array_key_exists("depart", $context) && ($_depart_ != null))) {
            if (isset($context["depart"])) { $_depart_ = $context["depart"]; } else { $_depart_ = null; }
            echo twig_escape_filter($this->env, $_depart_, "html", null, true);
        }
        echo "\" name=\"depart\" required>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t\tDestination
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<input list=\"villes\" type=\"text\" class=\"input-f-search\" value=\"";
        // line 120
        if (isset($context["destination"])) { $_destination_ = $context["destination"]; } else { $_destination_ = null; }
        if ((array_key_exists("destination", $context) && ($_destination_ != null))) {
            if (isset($context["destination"])) { $_destination_ = $context["destination"]; } else { $_destination_ = null; }
            echo twig_escape_filter($this->env, $_destination_, "html", null, true);
        }
        echo "\" name=\"destination\" required>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\tDate
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<input type=\"date\" class=\"input-f-search\" name=\"date\" required>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t\tHoraire
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<select class=\"input-f-search\" name=\"horaire\">
\t\t\t\t\t\t<option value = \"1\">Tous</option>
\t\t\t\t\t\t<option value = \"2\">Matin</option>
\t\t\t\t\t\t<option value = \"3\">Soire</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t\tCooperative
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<input list=\"cooperatives\" type=\"text\" class=\"input-f-search\" name=\"cooperative\" id=\"cooperative-id\">\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\tType place
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<select class=\"input-f-search\" name=\"place\" id=\"list-place\">
\t\t\t\t\t\t<option value=\"\">Tous</option>\t
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t\tNombre de place
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<div class=\"counter-search\">
\t\t\t\t\t\t<div class=\"number-count-l\" onclick=\"prevNum()\">-</div>
\t\t\t\t\t\t\t<div class=\"number-count-c\" id=\"number-count-c\"><span style=\"display: initial;\">1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span></div>
\t\t\t\t\t\t\t\t<div class=\"number-count-r\" onclick=\"nextNum()\">+</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" name=\"nbrPlace\" id=\"nbrPlace\" value=\"1\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-search-content\">
\t\t\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t\t\t<input type=\"submit\" name=\"\" value=\"Recherche\" class=\"btn-f-search\">\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"search-result ";
        // line 187
        if (array_key_exists("searchresult", $context)) {
            echo " ";
            if (isset($context["searchresult"])) { $_searchresult_ = $context["searchresult"]; } else { $_searchresult_ = null; }
            echo twig_escape_filter($this->env, $_searchresult_, "html", null, true);
            echo " ";
        } else {
            echo " is-close ";
        }
        echo "\">
\t\t\t
<div class=\"search-result-content\">
\t";
        // line 190
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ((array_key_exists("data", $context) && (twig_length_filter($this->env, $_data_) > 0))) {
            // line 191
            echo "
\t";
            // line 192
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_data_);
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 193
                echo "
\t<!-------------------------------------Card----------------------------------------------->
<!---------------------------------------------------------------------------------------->

\t<div class=\"card-itineraire\">
\t\t<div class=\"c-i-header\">
\t\t\t";
                // line 199
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_d_, "cooperative"), "nom"), "html", null, true);
                echo " : ";
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_d_, "date"), "d/m/Y"), "html", null, true);
                echo "
\t\t</div>
\t\t";
                // line 201
                $context["url"] = $this->env->getExtension('assets')->getAssetUrl("uploads/localisation/default_localisation.jpg");
                // line 202
                echo "\t\t";
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "itineraire"), "destination"), "photo") != "")) {
                    // line 203
                    echo "\t\t\t";
                    if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                    $context["url"] = $this->env->getExtension('assets')->getAssetUrl(("uploads/localisation/" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "itineraire"), "destination"), "photo")));
                    // line 204
                    echo "\t\t";
                }
                // line 205
                echo "\t\t<div class=\"c-i-baniere\" style=\"background:url(";
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                echo twig_escape_filter($this->env, $_url_, "html", null, true);
                echo ") center no-repeat; background-size: cover;\">
\t\t\t<div class=\"c-i-baniere-bg-opacity\">
\t\t\t\t<div class=\"c-i-baniere-destination\">
\t\t\t\t\t";
                // line 208
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "itineraire"), "depart") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "itineraire"), "destination")), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"c-i-baniere-details\">
\t\t\t\t\t<div class=\"c-i-baniere-details-heure\">
\t\t\t\t\t\tHeure depart\t
\t\t\t\t\t\t<div class=\"c-i-heure\">";
                // line 213
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_d_, "heure"), "h:m"), "html", null, true);
                echo "H</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c-i-baniere-details-place\">
\t\t\t\t\t\t";
                // line 216
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "place"), "html", null, true);
                echo "\t
\t\t\t\t\t\t<div class=\"c-i-price\">";
                // line 217
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "prix"), "html", null, true);
                echo " Ar</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"c-i-body\">
\t\t\t<div class=\"c-i-body-content\">
\t\t\t\t<table class=\"c-i-body-content-table\">


\t\t\t\t\t";
                // line 227
                $context["i"] = 0;
                // line 228
                echo "                    ";
                $context["j"] = 0;
                // line 229
                echo "\t\t\t\t\t
\t\t\t\t\t<tbody>
                        ";
                // line 231
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_d_, "places"));
                foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                    // line 232
                    echo "                            <tr>
                            ";
                    // line 233
                    if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_e_);
                    foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                        // line 234
                        echo "                                ";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                        if ((($_i_ == 0) && ($_j_ == 0))) {
                            // line 235
                            echo "                                    <td><div class=\"chauffeur\"></div></td>
                                ";
                        } else {
                            // line 237
                            echo "                                \t";
                            if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                            if (($_result_ == 2)) {
                                // line 238
                                echo "                                    \t<td><div class=\"place-reserve\"></div></td>
                                \t";
                            } else {
                                // line 240
                                echo "                                \t\t";
                                if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                                if (($_result_ == 1)) {
                                    // line 241
                                    echo "                                    \t\t<td><div class=\"place-disponible\"></div></td>
                                \t\t";
                                } else {
                                    // line 243
                                    echo "                                \t\t\t<td></td>
                                \t\t";
                                }
                                // line 245
                                echo "                                \t";
                            }
                            // line 246
                            echo "                            \t";
                        }
                        // line 247
                        echo "                        \t";
                        if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                        $context["j"] = ($_j_ + 1);
                        // line 248
                        echo "                        \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 249
                    echo "                                
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 251
                echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t\t<a href=\"";
                // line 255
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_log_out", array("id" => $this->getAttribute($_d_, "id"))), "html", null, true);
                echo "\"><input type=\"submit\" name=\"\" class=\"card-itineraire-button\" value=\"Selectionner\"></a>
\t\t\t\t\t\t\t\t<br /> ";
                // line 256
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_d_, "placerestante"), "html", null, true);
                echo " places disponibles
\t\t\t</div>
\t\t</div>
\t</div>
<!---------------------------------------end Card----------------------------------------->
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "\t";
        } else {
            // line 263
            echo "\t\t<div class=\"no-result\">\t\t
\t\tPas de resultat pour le moment.
\t\t</div>
\t";
        }
        // line 267
        echo "</div>
\t<!-----------------------------Body 1------------------------------------>

\t
\t<script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script-number.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/search-script.js"), "html", null, true);
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "BookBundle:Logout:result_logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 276,  563 => 275,  559 => 274,  555 => 273,  551 => 272,  541 => 267,  535 => 263,  532 => 262,  514 => 255,  501 => 249,  495 => 248,  485 => 245,  477 => 241,  456 => 234,  451 => 233,  448 => 232,  443 => 231,  439 => 229,  436 => 228,  391 => 205,  380 => 202,  337 => 187,  236 => 104,  325 => 185,  313 => 182,  288 => 171,  598 => 246,  594 => 245,  590 => 244,  585 => 243,  582 => 242,  577 => 239,  573 => 237,  560 => 234,  554 => 232,  546 => 229,  525 => 221,  519 => 256,  506 => 214,  499 => 212,  484 => 206,  480 => 204,  462 => 199,  459 => 198,  454 => 197,  447 => 194,  445 => 193,  426 => 182,  419 => 179,  415 => 216,  399 => 208,  396 => 170,  392 => 169,  386 => 167,  334 => 145,  243 => 88,  200 => 70,  508 => 251,  504 => 350,  500 => 349,  496 => 348,  492 => 347,  440 => 299,  350 => 190,  262 => 152,  221 => 142,  209 => 96,  184 => 89,  182 => 130,  188 => 74,  181 => 64,  119 => 69,  358 => 156,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 181,  299 => 122,  283 => 116,  258 => 151,  220 => 101,  273 => 169,  260 => 95,  241 => 88,  169 => 84,  161 => 60,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 233,  547 => 271,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 201,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 193,  356 => 192,  331 => 146,  323 => 144,  305 => 180,  289 => 129,  278 => 126,  266 => 101,  481 => 243,  476 => 203,  471 => 8,  467 => 200,  465 => 237,  461 => 235,  457 => 209,  453 => 208,  449 => 206,  431 => 183,  422 => 193,  417 => 192,  383 => 171,  378 => 201,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 183,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 72,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 97,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 61,  152 => 64,  148 => 58,  139 => 55,  145 => 105,  133 => 55,  126 => 71,  113 => 44,  94 => 47,  73 => 25,  185 => 73,  168 => 66,  151 => 59,  407 => 174,  402 => 186,  397 => 11,  388 => 204,  384 => 203,  377 => 165,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 153,  259 => 125,  199 => 94,  191 => 134,  179 => 93,  53 => 12,  141 => 69,  123 => 53,  252 => 149,  245 => 147,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 92,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 45,  83 => 41,  132 => 41,  120 => 48,  159 => 59,  64 => 28,  74 => 34,  116 => 49,  99 => 43,  82 => 38,  306 => 125,  301 => 121,  292 => 211,  290 => 113,  282 => 205,  275 => 155,  267 => 196,  263 => 120,  255 => 150,  242 => 103,  238 => 102,  228 => 144,  79 => 36,  125 => 52,  369 => 199,  364 => 158,  353 => 191,  345 => 153,  338 => 216,  326 => 132,  318 => 174,  304 => 166,  296 => 173,  291 => 119,  248 => 112,  233 => 110,  225 => 80,  217 => 100,  213 => 140,  205 => 75,  174 => 65,  164 => 63,  154 => 50,  144 => 79,  136 => 75,  87 => 30,  75 => 24,  68 => 21,  61 => 22,  135 => 103,  128 => 79,  105 => 35,  91 => 51,  86 => 39,  54 => 15,  31 => 4,  549 => 230,  543 => 228,  538 => 250,  530 => 222,  526 => 153,  522 => 151,  512 => 215,  505 => 148,  502 => 213,  497 => 146,  491 => 247,  488 => 246,  483 => 142,  473 => 240,  469 => 238,  466 => 131,  460 => 211,  455 => 208,  450 => 195,  444 => 205,  441 => 204,  437 => 203,  434 => 227,  429 => 116,  423 => 200,  420 => 217,  416 => 110,  413 => 109,  408 => 213,  394 => 105,  390 => 172,  375 => 241,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 219,  330 => 180,  327 => 145,  321 => 184,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 105,  231 => 85,  219 => 77,  201 => 89,  195 => 78,  189 => 74,  186 => 85,  162 => 67,  155 => 80,  143 => 66,  138 => 57,  134 => 54,  131 => 53,  122 => 51,  117 => 68,  108 => 55,  102 => 46,  92 => 61,  84 => 30,  72 => 20,  69 => 30,  51 => 14,  48 => 19,  35 => 5,  29 => 9,  312 => 96,  308 => 125,  293 => 121,  285 => 115,  281 => 170,  277 => 106,  274 => 85,  271 => 168,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 85,  207 => 83,  204 => 137,  198 => 104,  194 => 69,  178 => 68,  173 => 76,  158 => 59,  150 => 106,  147 => 47,  142 => 57,  130 => 73,  127 => 59,  112 => 66,  96 => 32,  76 => 41,  71 => 22,  55 => 18,  114 => 67,  109 => 37,  106 => 56,  101 => 51,  85 => 35,  77 => 26,  67 => 29,  39 => 10,  110 => 36,  100 => 34,  89 => 34,  65 => 23,  63 => 29,  58 => 17,  34 => 11,  26 => 6,  98 => 39,  88 => 44,  80 => 27,  78 => 26,  46 => 20,  44 => 12,  36 => 10,  60 => 17,  43 => 20,  40 => 11,  57 => 21,  50 => 11,  47 => 9,  38 => 5,  32 => 9,  27 => 3,  25 => 3,  24 => 4,  95 => 52,  42 => 10,  28 => 8,  22 => 1,  19 => 1,  232 => 145,  226 => 102,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 135,  193 => 93,  187 => 132,  183 => 71,  180 => 74,  171 => 62,  166 => 74,  163 => 73,  160 => 72,  157 => 61,  149 => 55,  146 => 56,  140 => 77,  137 => 71,  129 => 40,  124 => 39,  121 => 50,  118 => 46,  115 => 37,  111 => 56,  107 => 73,  104 => 41,  97 => 69,  93 => 38,  90 => 47,  81 => 27,  70 => 31,  66 => 23,  62 => 17,  59 => 19,  56 => 16,  52 => 19,  49 => 11,  45 => 11,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
