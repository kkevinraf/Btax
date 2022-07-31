<?php

/* BookBundle:Log:recherche.html.twig */
class __TwigTemplate_49384e497ef6ef037d0d876b1e2508a950cf7f229b2eac8eae1ad0ac4320668d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/recherche-style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/card-itineraire-style.css"), "html", null, true);
        echo "\">
<style>
\t.no-result
\t{
\t\twidth: 100%;
\t\tmin-height: 50px;
\t\theight: auto;
\t\ttext-align: center;
\t}
\t.no-result a
\t{
\t\tcolor: #FAC202;
\t}

\t.search-result-content
\t{
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\tjustify-content: flex-start;
\t}
</style>
";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "<div>
\t<div class=\"banniere\"></div>
\t<div class=\"header-search\">
\t\t<div class=\"form-header-search\">
\t\t\t<div class=\"header-search-result\">
\t\t\t\t";
        // line 34
        if (array_key_exists("searchresult", $context)) {
            // line 35
            echo "\t\t\t\t<div class=\"header-search-result-number\">
\t\t\t\t\t";
            // line 36
            if (array_key_exists("data", $context)) {
                // line 37
                echo "\t\t\t\t\t\t";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $_data_), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t</div>\t
\t\t\t\t<div class=\"header-search-result-text\">
\t\t\t\t\t&nbsp;";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resultat"), "html", null, true);
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ((array_key_exists("data", $context) && (twig_length_filter($this->env, $_data_) > 1))) {
                echo "s
\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 45
        echo "\t\t\t</div>
\t\t\t<div class=\"header-search-link\">
\t\t\t\t<a href=\"#\" class=\"run-search ";
        // line 47
        if (array_key_exists("searchresult", $context)) {
            echo " ";
            if (isset($context["searchresult"])) { $_searchresult_ = $context["searchresult"]; } else { $_searchresult_ = null; }
            echo twig_escape_filter($this->env, $_searchresult_, "html", null, true);
            echo " ";
        } else {
            echo " is-close ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lancer la recherche"), "html", null, true);
        echo "</a>
\t\t\t\t<a href=\"#\" class=\"see-result ";
        // line 48
        if (array_key_exists("searchform", $context)) {
            echo " ";
            if (isset($context["searchform"])) { $_searchform_ = $context["searchform"]; } else { $_searchform_ = null; }
            echo twig_escape_filter($this->env, $_searchform_, "html", null, true);
            echo " ";
        } else {
            echo " is-open ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Annuler la recherche"), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"search-form ";
        // line 52
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
\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recherche avancée"), "html", null, true);
        echo "
\t\t</div>
\t\t<form class=\"r-form-search-div\" action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("run_search");
        echo "\" method=\"POST\">
\t\t\t\t<datalist id=\"villes\">
\t\t\t\t\t";
        // line 59
        if (array_key_exists("villes", $context)) {
            // line 60
            echo "\t\t\t\t\t\t";
            if (isset($context["villes"])) { $_villes_ = $context["villes"]; } else { $_villes_ = null; }
            if ((twig_length_filter($this->env, $_villes_) != 0)) {
                // line 61
                echo "\t                        ";
                if (isset($context["villes"])) { $_villes_ = $context["villes"]; } else { $_villes_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_villes_);
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 62
                    echo "\t                        \t<option value=\"";
                    if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_a_, "localisation"), "html", null, true);
                    echo "\">
\t                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "\t                    ";
            }
            // line 65
            echo "\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t</datalist>
\t\t\t\t<datalist id=\"cooperatives\">
\t\t\t\t";
        // line 68
        if (isset($context["cooperatives"])) { $_cooperatives_ = $context["cooperatives"]; } else { $_cooperatives_ = null; }
        if ((array_key_exists("cooperatives", $context) && (twig_length_filter($this->env, $_cooperatives_) != 0))) {
            // line 69
            echo "                    ";
            if (isset($context["cooperatives"])) { $_cooperatives_ = $context["cooperatives"]; } else { $_cooperatives_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_cooperatives_);
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 70
                echo "                       \t<option value=\"";
                if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_c_, "nom"), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                ";
        }
        // line 73
        echo "\t\t\t\t</datalist>

\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Départ"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<input list=\"villes\" type=\"text\" class=\"input-f-search\" value=\"";
        // line 80
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
\t\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Destination"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<input list=\"villes\" type=\"text\" class=\"input-f-search\" value=\"";
        // line 88
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
\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<input type=\"date\" class=\"input-f-search\" name=\"date\" required>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t\t";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Horaire"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<select class=\"input-f-search\" name=\"horaire\">
\t\t\t\t\t\t<option value = \"1\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tous"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value = \"2\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Matin"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value = \"3\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Soire"), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t\t";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Coopérative"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<input list=\"cooperatives\" type=\"text\" class=\"input-f-search\" name=\"cooperative\" id=\"cooperative-id\">\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Type"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"input-search-input\">
\t\t\t\t\t<select class=\"input-f-search\" name=\"place\" id=\"list-place\">
\t\t\t\t\t\t<option value=\"\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tous"), "html", null, true);
        echo "</option>\t
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-search-content\">
\t\t\t\t<div class=\"title-search\">
\t\t\t\t\t";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nombre de place"), "html", null, true);
        echo "
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
\t\t\t\t\t\t\t<input type=\"submit\" name=\"\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recherche"), "html", null, true);
        echo "\" class=\"btn-f-search\">\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"search-result ";
        // line 153
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
        // line 156
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ((array_key_exists("data", $context) && (twig_length_filter($this->env, $_data_) > 0))) {
            // line 157
            echo "
\t";
            // line 158
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_data_);
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 159
                echo "
\t<!-------------------------------------Card----------------------------------------------->
<!---------------------------------------------------------------------------------------->

\t<div class=\"card-itineraire\">
\t\t<div class=\"c-i-header\">
\t\t\t";
                // line 165
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_d_, "cooperative"), "nom"), "html", null, true);
                echo " : ";
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_d_, "date"), "d/m/Y"), "html", null, true);
                echo "
\t\t</div>
\t\t";
                // line 167
                $context["url"] = $this->env->getExtension('assets')->getAssetUrl("uploads/localisation/default_localisation.jpg");
                // line 168
                echo "\t\t";
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "itineraire"), "destination"), "photo") != "")) {
                    // line 169
                    echo "\t\t\t";
                    if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                    $context["url"] = $this->env->getExtension('assets')->getAssetUrl(("uploads/localisation/" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "itineraire"), "destination"), "photo")));
                    // line 170
                    echo "\t\t";
                }
                // line 171
                echo "\t\t<div class=\"c-i-baniere\" style=\"background:url(";
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                echo twig_escape_filter($this->env, $_url_, "html", null, true);
                echo ") center no-repeat; background-size: cover;\">
\t\t\t<div class=\"c-i-baniere-bg-opacity\">
\t\t\t\t<div class=\"c-i-baniere-destination\">
\t\t\t\t\t";
                // line 174
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "itineraire"), "depart") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "itineraire"), "destination")), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"c-i-baniere-details\">
\t\t\t\t\t<div class=\"c-i-baniere-details-heure\">
\t\t\t\t\t\t";
                // line 178
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Heure départ"), "html", null, true);
                echo "\t
\t\t\t\t\t\t<div class=\"c-i-heure\">";
                // line 179
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_d_, "heure"), "h:m"), "html", null, true);
                echo "H</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c-i-baniere-details-place\">
\t\t\t\t\t\t";
                // line 182
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_d_, "itinerairecoop"), "place"), "html", null, true);
                echo "\t
\t\t\t\t\t\t<div class=\"c-i-price\">";
                // line 183
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
                // line 193
                $context["i"] = 0;
                // line 194
                echo "                    ";
                $context["j"] = 0;
                // line 195
                echo "\t\t\t\t\t
\t\t\t\t\t<tbody>
                        ";
                // line 197
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_d_, "places"));
                foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                    // line 198
                    echo "                            <tr>
                            ";
                    // line 199
                    if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_e_);
                    foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                        // line 200
                        echo "                                ";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                        if ((($_i_ == 0) && ($_j_ == 0))) {
                            // line 201
                            echo "                                    <td><div class=\"chauffeur\"></div></td>
                                ";
                        } else {
                            // line 203
                            echo "                                \t";
                            if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                            if (($_result_ == 2)) {
                                // line 204
                                echo "                                    \t<td><div class=\"place-reserve\"></div></td>
                                \t";
                            } else {
                                // line 206
                                echo "                                \t\t";
                                if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                                if (($_result_ == 1)) {
                                    // line 207
                                    echo "                                    \t\t<td><div class=\"place-disponible\"></div></td>
                                \t\t";
                                } else {
                                    // line 209
                                    echo "                                \t\t\t<td></td>
                                \t\t";
                                }
                                // line 211
                                echo "                                \t";
                            }
                            // line 212
                            echo "                            \t";
                        }
                        // line 213
                        echo "                        \t";
                        if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                        $context["j"] = ($_j_ + 1);
                        // line 214
                        echo "                        \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 215
                    echo "                                
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t\t<a href=\"";
                // line 221
                if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("run_search_select", array("id" => $this->getAttribute($_d_, "id"))), "html", null, true);
                echo "\"><input type=\"submit\" name=\"\" class=\"card-itineraire-button\" value=\"Selectionner\"></a>
\t\t\t\t\t\t\t\t<br /> ";
                // line 222
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
            // line 228
            echo "\t";
        } else {
            // line 229
            echo "\t\t<div class=\"no-result\">\t\t
\t\t";
            // line 230
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pas de resultat pour le moment"), "html", null, true);
            echo ".

\t\t";
            // line 232
            if (isset($context["data_session"])) { $_data_session_ = $context["data_session"]; } else { $_data_session_ = null; }
            if ((array_key_exists("data_session", $context) && ($_data_session_ != null))) {
                // line 233
                echo "
\t\t<br>";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Voulez-vous"), "html", null, true);
                echo " <a href=\"";
                if (isset($context["data_session"])) { $_data_session_ = $context["data_session"]; } else { $_data_session_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register_search", array("data" => $_data_session_)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("enregistrer cette recherche"), "html", null, true);
                echo "</a> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("et recevoir une notification si le site retrouve un resultat"), "html", null, true);
                echo " ?
\t\t
\t\t";
            }
            // line 237
            echo "\t\t</div>
\t";
        }
        // line 239
        echo "</div>
";
    }

    // line 242
    public function block_javascripts($context, array $blocks = array())
    {
        // line 243
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 244
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script-number.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/search-script.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 246,  594 => 245,  590 => 244,  585 => 243,  582 => 242,  577 => 239,  573 => 237,  560 => 234,  554 => 232,  546 => 229,  525 => 221,  519 => 217,  506 => 214,  499 => 212,  484 => 206,  480 => 204,  462 => 199,  459 => 198,  454 => 197,  447 => 194,  445 => 193,  426 => 182,  419 => 179,  415 => 178,  399 => 171,  396 => 170,  392 => 169,  386 => 167,  334 => 145,  243 => 88,  200 => 70,  508 => 351,  504 => 350,  500 => 349,  496 => 211,  492 => 209,  440 => 299,  350 => 222,  262 => 152,  221 => 142,  209 => 138,  184 => 65,  182 => 130,  188 => 74,  181 => 64,  119 => 50,  358 => 156,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 126,  299 => 122,  283 => 116,  258 => 151,  220 => 93,  273 => 105,  260 => 95,  241 => 88,  169 => 64,  161 => 60,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 233,  547 => 253,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 201,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 157,  356 => 161,  331 => 146,  323 => 144,  305 => 139,  289 => 129,  278 => 126,  266 => 101,  481 => 217,  476 => 203,  471 => 8,  467 => 200,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 206,  431 => 183,  422 => 193,  417 => 192,  383 => 171,  378 => 171,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 131,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 72,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 91,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 61,  152 => 64,  148 => 58,  139 => 55,  145 => 105,  133 => 55,  126 => 49,  113 => 44,  94 => 36,  73 => 24,  185 => 73,  168 => 66,  151 => 59,  407 => 174,  402 => 186,  397 => 11,  388 => 168,  384 => 217,  377 => 165,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 153,  259 => 125,  199 => 136,  191 => 68,  179 => 93,  53 => 12,  141 => 75,  123 => 53,  252 => 149,  245 => 147,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 76,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 45,  83 => 41,  132 => 60,  120 => 48,  159 => 59,  64 => 28,  74 => 34,  116 => 49,  99 => 43,  82 => 38,  306 => 125,  301 => 121,  292 => 211,  290 => 113,  282 => 205,  275 => 155,  267 => 196,  263 => 96,  255 => 93,  242 => 103,  238 => 102,  228 => 144,  79 => 36,  125 => 52,  369 => 159,  364 => 158,  353 => 194,  345 => 153,  338 => 216,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 119,  248 => 119,  233 => 110,  225 => 80,  217 => 141,  213 => 73,  205 => 75,  174 => 65,  164 => 63,  154 => 57,  144 => 67,  136 => 52,  87 => 30,  75 => 24,  68 => 21,  61 => 29,  135 => 103,  128 => 79,  105 => 36,  91 => 29,  86 => 39,  54 => 15,  31 => 4,  549 => 230,  543 => 228,  538 => 250,  530 => 222,  526 => 153,  522 => 151,  512 => 215,  505 => 148,  502 => 213,  497 => 146,  491 => 144,  488 => 207,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 211,  455 => 208,  450 => 195,  444 => 205,  441 => 204,  437 => 203,  434 => 296,  429 => 116,  423 => 200,  420 => 111,  416 => 110,  413 => 109,  408 => 196,  394 => 105,  390 => 172,  375 => 241,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 219,  330 => 180,  327 => 145,  321 => 86,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 117,  231 => 85,  219 => 77,  201 => 89,  195 => 78,  189 => 74,  186 => 85,  162 => 67,  155 => 107,  143 => 66,  138 => 57,  134 => 54,  131 => 53,  122 => 51,  117 => 57,  108 => 47,  102 => 46,  92 => 41,  84 => 30,  72 => 20,  69 => 30,  51 => 14,  48 => 13,  35 => 5,  29 => 9,  312 => 96,  308 => 125,  293 => 121,  285 => 115,  281 => 107,  277 => 106,  274 => 85,  271 => 112,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 85,  207 => 83,  204 => 137,  198 => 87,  194 => 69,  178 => 68,  173 => 76,  158 => 59,  150 => 106,  147 => 63,  142 => 57,  130 => 102,  127 => 59,  112 => 46,  96 => 32,  76 => 35,  71 => 22,  55 => 18,  114 => 51,  109 => 37,  106 => 56,  101 => 42,  85 => 35,  77 => 23,  67 => 29,  39 => 10,  110 => 57,  100 => 38,  89 => 34,  65 => 26,  63 => 18,  58 => 17,  34 => 11,  26 => 6,  98 => 39,  88 => 39,  80 => 27,  78 => 26,  46 => 9,  44 => 8,  36 => 12,  60 => 17,  43 => 20,  40 => 9,  57 => 16,  50 => 11,  47 => 9,  38 => 5,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 9,  28 => 3,  22 => 1,  19 => 1,  232 => 145,  226 => 136,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 135,  193 => 88,  187 => 66,  183 => 71,  180 => 74,  171 => 62,  166 => 69,  163 => 62,  160 => 72,  157 => 61,  149 => 55,  146 => 56,  140 => 104,  137 => 71,  129 => 54,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 50,  107 => 47,  104 => 41,  97 => 37,  93 => 38,  90 => 47,  81 => 37,  70 => 31,  66 => 23,  62 => 17,  59 => 19,  56 => 16,  52 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
