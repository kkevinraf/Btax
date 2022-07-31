<?php

/* BookBundle:Log:paiement.html.twig */
class __TwigTemplate_fc8b0971b486d2a3501a165004d859688a6d3b1528319bdde7da06fff2b24230 extends Twig_Template
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
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/css/paiement.css"), "html", null, true);
        echo "\">
</head>
<body>
\t<!-----------------------------Header------------------------------------>
\t<header class=\"topbar-c\">
\t\t<div class=\"nav-c\">


\t\t\t<!-----------------------------Header Left------------------------------------>
\t\t\t<div class=\"nav-c-left\">
\t\t\t\t<div class=\"logo-place\">
\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("book_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/logo-f.png"), "html", null, true);
        echo "\" class=\"logo-place-img\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-----------------------------End Header Left------------------------------------>


\t\t\t<!-----------------------------Header Right------------------------------------>
\t\t\t<div class=\"nav-c-right\">


\t\t\t\t<!-----------------------------Desktop Menu------------------------------------>
\t\t\t\t<div class=\"link-right-nav-c\">

\t\t\t\t\t<!-----------------------------Desktop Menu Left ------------------------------------>
\t\t\t\t\t<div class=\"link-right-nav-c-left\">
\t\t\t\t\t\t


\t\t\t\t\t</div>

\t\t\t\t\t<!-----------------------------Desktop Menu Right------------------------------------>
\t\t\t\t\t<div class=\"link-right-nav-c-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"back-link\">
\t\t\t\t\t\t\t<div class=\"back-icon\"></div>
\t\t\t\t\t\t\t<div class=\"back-label\">Back</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-----------------------------End Desktop Menu------------------------------------>


\t\t\t</div>
\t\t\t<!-----------------------------End Header Right------------------------------------>

\t\t</div>
\t</header>
\t<!-----------------------------End Header------------------------------------>


\t



\t<div>
\t\t<div class=\"banniere\"></div>
\t\t<div class=\"content-b\">

\t\t\t<div class=\"link-step\">
\t\t\t\t<div class=\"link-step-top\">
\t\t\t\t\t<div class=\"link-step-top-div\">
\t\t\t\t\t\t<div class=\"link-step-top-first\">
\t\t\t\t\t\t\t<div class=\"link-step-top-first-item item-active\">1</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"link-step-top-second\">
\t\t\t\t\t\t\t<div class=\"link-step-top-second-item\">2</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"link-step-top-third\">
\t\t\t\t\t\t\t<div class=\"link-step-top-third-item\">3</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bread-crumb\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"link-step-bottom\">
\t\t\t\t\t<div class=\"link-step-bottom-div\">
\t\t\t\t\t\t<div class=\"label-step-bottom-first label-active\">Place</div>
\t\t\t\t\t\t<div class=\"label-step-bottom-second\">Information</div>
\t\t\t\t\t\t<div class=\"label-step-bottom-third\">Paiement</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"content-by-step\">

\t\t\t\t<!------------------------------------------------------------------->
\t\t\t\t<!----------------------------Select place--------------------------->

\t\t\t\t<div class=\"content-place-choice selected\">
\t\t\t\t\t<div class=\"header-content-by-step\">
\t\t\t\t\t\tChoix place
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"overview\">
\t\t\t\t\t\tCooperative : ";
        // line 102
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "cooperative"), "html", null, true);
        echo " <br/>
\t\t\t\t\t\tPlace : ";
        // line 103
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "itinerairecoop"), "place"), "html", null, true);
        echo " <br/>
\t\t\t\t\t\tPrix : ";
        // line 104
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "itinerairecoop"), "prix"), "html", null, true);
        echo " Ar / place <br/>
\t\t\t\t\t\t<input type=\"hidden\" class=\"price_hidden\" value=\"";
        // line 105
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "itinerairecoop"), "prix"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rm\" id=\"rm\" value=\"";
        // line 106
        if (isset($context["rm"])) { $_rm_ = $context["rm"]; } else { $_rm_ = null; }
        echo twig_escape_filter($this->env, $_rm_, "html", null, true);
        echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"trajet\" id=\"trajet\" value=\"";
        // line 107
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content-place-choice-content\">
\t\t\t\t\t\t<div class=\"content-place-legend\">
\t\t\t\t\t\t\t<div class=\"content-place-legend-item\">
\t\t\t\t\t\t\t\t<div class=\"chauffeur\"></div><div class=\"content-place-legend-label\">Place chauffeur</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content-place-legend-item\">
\t\t\t\t\t\t\t\t<div class=\"place-reserve\"></div><div class=\"content-place-legend-label\">Place reserve</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content-place-legend-item\">
\t\t\t\t\t\t\t\t<div class=\"place-disponible\"></div><div class=\"content-place-legend-label\">Place disponible</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content-place-legend-item\">
\t\t\t\t\t\t\t\t<div class=\"place-selectionne\"></div><div class=\"content-place-legend-label\">Place selectionnee</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content-place-content-choice\">
\t\t\t\t\t\t\t<div class=\"messages\" id=\"message1\">
\t\t\t\t\t\t\t\tVous devez au moins choisir une place avant de passer a l'etape suivante !
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<table class=\"c-i-body-content-table\">
\t\t\t\t\t\t\t";
        // line 130
        $context["i"] = 0;
        // line 131
        echo "                    \t\t";
        $context["j"] = 0;
        // line 132
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t<tbody>
                        \t\t";
        // line 134
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "places"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 135
            echo "                            \t<tr>
                            \t";
            // line 136
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_e_);
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 137
                echo "                                \t";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                if ((($_i_ == 0) && ($_j_ == 0))) {
                    // line 138
                    echo "                                    <td><div class=\"chauffeur\"></div></td>
                                \t";
                } else {
                    // line 140
                    echo "                                \t\t";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    $context["i"] = ($_i_ + 1);
                    // line 141
                    echo "                                \t\t";
                    if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                    if (($_result_ == 2)) {
                        // line 142
                        echo "                                    \t<td><div class=\"place-reserve\">";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $_i_, "html", null, true);
                        echo "</div></td>
                                \t\t";
                    } else {
                        // line 144
                        echo "                                \t\t\t";
                        if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                        if (($_result_ == 1)) {
                            // line 145
                            echo "                                    \t\t<td><div class=\"place-disponible icone-t\" onclick=\"select_place( ";
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            echo twig_escape_filter($this->env, $_i_, "html", null, true);
                            echo " );\" id=\"place_";
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            echo twig_escape_filter($this->env, $_i_, "html", null, true);
                            echo "\"> ";
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            echo twig_escape_filter($this->env, $_i_, "html", null, true);
                            echo "</div></td>
                                \t\t\t";
                        } else {
                            // line 147
                            echo "                                \t\t\t<td>";
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            $context["i"] = ($_i_ - 1);
                            echo "</td>
                                \t\t\t";
                        }
                        // line 149
                        echo "                                \t\t";
                    }
                    // line 150
                    echo "                            \t\t";
                }
                // line 151
                echo "                        \t\t\t";
                if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                $context["j"] = ($_j_ + 1);
                // line 152
                echo "                        \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                
                        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
\t\t\t\t\t</tbody>



\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<div class=\"validation-btn\">
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"Suivant\" value=\"Suivant\" class=\"validation-btn-btn\" id=\"step1-validation\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!------------------------------------------------------------------->
\t\t\t\t<!----------------------------end Select place--------------------------->


\t\t\t\t<!------------------------------------------------------------------->
\t\t\t\t<!----------------------------Passager--------------------------->

\t\t\t\t<div class=\"content-place-content-info hidee\">
\t\t\t\t\t<div class=\"header-content-by-step\">
\t\t\t\t\t\tInformation sur le passager
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content-place-content-info-c\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"messages\" id=\"message2\">
\t\t\t\t\t\t\tMerci de remplir correctement le formulaire svp :)
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"passager-form\">
\t\t\t\t\t\t\tVeuillez renseigner le nom et prenom de chaque passager :
\t\t\t\t\t\t\t<div id=\"script-form\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"validation-btn\">
\t\t\t\t\t\t\t<button value=\"Suivant\" class=\"validation-btn-btn\" id=\"step2-validation\">Suivant</button> 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"infos\">
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t***Nous vous invitons a renseigner des informations correctes car des verifications seront effectuees lors de l'embarquement et si les informations que vous renseignez ne sont pas correctes, nous ne pouvons pas vous autoriser a embarquer et aucun remboursement ne sera fait.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!------------------------------------------------------------------->
\t\t\t\t<!----------------------------end passger--------------------------->

\t\t\t\t<div class=\"form-paiement hidee\">
\t\t\t\t\t<div class=\"header-content-by-step\">
\t\t\t\t\t\tPaiement
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-paiement-montant\">
\t\t\t\t\t\tTotal à payer : <i class=\"total-price\"></i> Ar <br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-paiement-montant-form\">


\t\t\t\t\t\t<div class=\"form-paiement-method\">
\t\t\t\t\t\t\t<div class=\"paiment-method\">
\t\t\t\t\t\t\t\t<div class=\"pm-card selected\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/card.png"), "html", null, true);
        echo "\" class=\"paiment-method-img\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pm-paypal\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/paypal.png"), "html", null, true);
        echo "\" class=\"paiment-method-img\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pm-mobile-money\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/img/mobile.png"), "html", null, true);
        echo "\" class=\"paiment-method-img\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"form-paiement-choice\">

\t\t\t\t\t\t\t<div class=\"form-paiement-card \">
\t\t\t\t\t\t\t\t<div class=\"choice-card-paiement\">
\t\t\t\t\t\t\t\t\t<div class=\"card-item-choice card-selected\" id=\"visa\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"card-item-choice\" id=\"mastercard\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"card-item-choice\" id=\"bluecard\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"card-item-choice\" id=\"americanexpress\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-paiement-card-body\">
\t\t\t\t\t\t\t\t\t<form class=\"form-paiement-card-body-form\" action=\"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("paiement_credit_card");
        echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<div class=\"error-message\">
\t\t\t\t\t\t\t\t\t\t\tLes informations renseignees semblent incorrectes
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rm\" id=\"rm\" value=\"";
        // line 241
        if (isset($context["rm"])) { $_rm_ = $context["rm"]; } else { $_rm_ = null; }
        echo twig_escape_filter($this->env, $_rm_, "html", null, true);
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item-input-paiement\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-input\">
\t\t\t\t\t\t\t\t\t\t\t\tNumero de carte :
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-input\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" class=\"number-credit-card\"required />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-input-paiement\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-input\">
\t\t\t\t\t\t\t\t\t\t\t\tDate d'expiration :
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-input\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" class=\"number-credit-card\"required />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-input-paiement\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-input\">
\t\t\t\t\t\t\t\t\t\t\t\tCryptogramme :
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-input\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" class=\"number-credit-card\"required />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-input-paiement\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-validated\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"\" value=\"Valider et accepter nos CGU\" class=\"paiement-validated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-paiement-paypal hidee\">
\t\t\t\t\t\t\t\t<div class=\"info-paypal\">
\t\t\t\t\t\t\t\t\tEn cliquant sur le bouton \"Valider avec mon compte Paypal\", vous serez redirige sur votre compte Paypal. Vous pouvez ensuite valider votre reservation depuis votre compte Paypal.
\t\t\t\t\t\t\t\t\t<div class=\"item-input-paiement\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-validated\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"\" value=\"Valider avec votre compte Paypal\" class=\"paiement-validated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"form-paiement-mobile-money hidee\">
\t\t\t\t\t\t\t\t<div class=\"choice-card-paiement\">
\t\t\t\t\t\t\t\t\t<div class=\"card-item-choice card-selected\" id=\"orange\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"card-item-choice\" id=\"airtel\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"card-item-choice\" id=\"telma\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-paiement-card-body\">
\t\t\t\t\t\t\t\t\t<form class=\"form-paiement-card-body-form\" action=\"";
        // line 296
        echo $this->env->getExtension('routing')->getPath("paiement_mobile_money");
        echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<div class=\"error-message\">
\t\t\t\t\t\t\t\t\t\t\tLes informations renseignees semblent incorrectes\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rm\" id=\"rm\" value=\"";
        // line 299
        if (isset($context["rm"])) { $_rm_ = $context["rm"]; } else { $_rm_ = null; }
        echo twig_escape_filter($this->env, $_rm_, "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"item-input-paiement\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-input\">
\t\t\t\t\t\t\t\t\t\t\t\tNumero :
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-input\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" class=\"number-credit-card\" required />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item-input-paiement\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-input\">
\t\t\t\t\t\t\t\t\t\t\t\tCode de confirmation :
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-input\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"\" class=\"number-credit-card\"required />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"item-input-paiement\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-validated\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"\" value=\"Valider et accepter nos CGU\" class=\"paiement-validated\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"information-paiement\">
\t\t\t\t\t\t\t\t** Une fois votre reservation effectuee, vous recevrez un e-mail de confimation.<br>
\t\t\t\t\t\t\t\t** Pour annuler votre reservation, vous devez contacter soit le service client de B'tax soit le service client de Cotisse au plus tard 72 heures avant la date de depart<br>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t
\t\t\t



\t\t</div>
\t</div>


\t<script type=\"text/javascript\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/script.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("user_assets/js/paiement-script.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "BookBundle:Log:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 351,  504 => 350,  500 => 349,  496 => 348,  492 => 347,  440 => 299,  350 => 222,  262 => 152,  221 => 142,  209 => 138,  184 => 131,  182 => 130,  188 => 74,  181 => 71,  119 => 50,  358 => 152,  354 => 151,  349 => 150,  346 => 149,  328 => 133,  316 => 128,  309 => 126,  299 => 122,  283 => 116,  258 => 151,  220 => 93,  273 => 102,  260 => 95,  241 => 88,  169 => 64,  161 => 62,  656 => 304,  652 => 303,  649 => 302,  646 => 301,  635 => 294,  620 => 281,  617 => 280,  605 => 273,  599 => 272,  589 => 269,  586 => 268,  580 => 267,  575 => 266,  565 => 261,  557 => 258,  547 => 253,  534 => 249,  529 => 246,  523 => 245,  520 => 244,  515 => 243,  487 => 219,  472 => 214,  468 => 213,  464 => 212,  433 => 202,  428 => 201,  418 => 199,  414 => 198,  411 => 197,  406 => 195,  385 => 176,  374 => 169,  361 => 164,  356 => 161,  331 => 146,  323 => 144,  305 => 139,  289 => 129,  278 => 126,  266 => 111,  481 => 217,  476 => 215,  471 => 8,  467 => 212,  465 => 211,  461 => 210,  457 => 209,  453 => 208,  449 => 206,  431 => 197,  422 => 193,  417 => 192,  383 => 171,  378 => 171,  360 => 165,  341 => 158,  336 => 156,  322 => 130,  317 => 149,  310 => 145,  298 => 136,  284 => 128,  269 => 129,  210 => 93,  206 => 90,  370 => 155,  367 => 166,  351 => 142,  332 => 134,  319 => 129,  315 => 142,  311 => 126,  303 => 124,  276 => 113,  250 => 98,  246 => 106,  218 => 84,  212 => 91,  203 => 82,  229 => 137,  223 => 135,  172 => 88,  165 => 83,  152 => 64,  148 => 58,  139 => 55,  145 => 105,  133 => 55,  126 => 49,  113 => 44,  94 => 36,  73 => 24,  185 => 73,  168 => 66,  151 => 59,  407 => 218,  402 => 186,  397 => 11,  388 => 218,  384 => 217,  377 => 213,  357 => 202,  347 => 140,  343 => 194,  335 => 189,  329 => 152,  268 => 153,  259 => 125,  199 => 136,  191 => 134,  179 => 93,  53 => 12,  141 => 75,  123 => 53,  252 => 149,  245 => 147,  234 => 101,  230 => 100,  227 => 79,  214 => 77,  190 => 76,  177 => 66,  170 => 65,  167 => 56,  153 => 52,  103 => 37,  83 => 41,  132 => 60,  120 => 52,  159 => 65,  64 => 24,  74 => 23,  116 => 49,  99 => 45,  82 => 38,  306 => 125,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 155,  267 => 196,  263 => 96,  255 => 150,  242 => 103,  238 => 102,  228 => 144,  79 => 37,  125 => 52,  369 => 238,  364 => 165,  353 => 194,  345 => 189,  338 => 216,  326 => 132,  318 => 174,  304 => 166,  296 => 122,  291 => 119,  248 => 119,  233 => 110,  225 => 95,  217 => 141,  213 => 140,  205 => 75,  174 => 65,  164 => 63,  154 => 60,  144 => 67,  136 => 77,  87 => 30,  75 => 24,  68 => 21,  61 => 29,  135 => 103,  128 => 79,  105 => 36,  91 => 29,  86 => 39,  54 => 15,  31 => 4,  549 => 162,  543 => 161,  538 => 250,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 211,  455 => 208,  450 => 126,  444 => 205,  441 => 204,  437 => 203,  434 => 296,  429 => 116,  423 => 200,  420 => 111,  416 => 110,  413 => 109,  408 => 196,  394 => 105,  390 => 172,  375 => 241,  365 => 207,  362 => 98,  359 => 11,  355 => 163,  348 => 159,  344 => 219,  330 => 180,  327 => 145,  321 => 86,  307 => 125,  302 => 84,  295 => 120,  287 => 117,  279 => 114,  256 => 73,  251 => 120,  239 => 117,  231 => 85,  219 => 95,  201 => 89,  195 => 78,  189 => 74,  186 => 85,  162 => 67,  155 => 107,  143 => 66,  138 => 57,  134 => 54,  131 => 53,  122 => 51,  117 => 57,  108 => 47,  102 => 46,  92 => 31,  84 => 30,  72 => 20,  69 => 30,  51 => 14,  48 => 13,  35 => 5,  29 => 9,  312 => 96,  308 => 140,  293 => 121,  285 => 115,  281 => 127,  277 => 86,  274 => 85,  271 => 112,  264 => 128,  261 => 110,  257 => 79,  253 => 93,  249 => 107,  247 => 89,  237 => 105,  207 => 83,  204 => 137,  198 => 87,  194 => 95,  178 => 68,  173 => 76,  158 => 59,  150 => 106,  147 => 63,  142 => 57,  130 => 102,  127 => 59,  112 => 46,  96 => 32,  76 => 37,  71 => 22,  55 => 18,  114 => 51,  109 => 37,  106 => 56,  101 => 42,  85 => 35,  77 => 23,  67 => 30,  39 => 10,  110 => 57,  100 => 38,  89 => 34,  65 => 26,  63 => 18,  58 => 17,  34 => 11,  26 => 6,  98 => 39,  88 => 39,  80 => 27,  78 => 26,  46 => 9,  44 => 8,  36 => 12,  60 => 17,  43 => 20,  40 => 9,  57 => 16,  50 => 11,  47 => 9,  38 => 5,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 51,  42 => 9,  28 => 3,  22 => 1,  19 => 1,  232 => 145,  226 => 136,  222 => 83,  215 => 92,  211 => 104,  208 => 76,  202 => 68,  196 => 135,  193 => 88,  187 => 132,  183 => 71,  180 => 74,  171 => 77,  166 => 69,  163 => 62,  160 => 72,  157 => 61,  149 => 57,  146 => 56,  140 => 104,  137 => 71,  129 => 54,  124 => 35,  121 => 50,  118 => 46,  115 => 42,  111 => 50,  107 => 41,  104 => 41,  97 => 37,  93 => 38,  90 => 47,  81 => 37,  70 => 31,  66 => 23,  62 => 17,  59 => 19,  56 => 16,  52 => 19,  49 => 11,  45 => 10,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
