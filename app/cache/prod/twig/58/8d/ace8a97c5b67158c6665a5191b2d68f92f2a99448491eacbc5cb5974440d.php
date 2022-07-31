<?php

/* BtaxBundle:Admin/Avis:tomoderate.html.twig */
class __TwigTemplate_588dace8a97c5b67158c6665a5191b2d68f92f2a99448491eacbc5cb5974440d extends Twig_Template
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
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin_assets/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\">

";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<!-- Start Email Statistic area-->
    <div class=\"notika-email-post-area\">
        <div class=\"container\">
            <div class=\"row\">                
                <div class=\"col-lg-12 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"contact-inner\">
                        <div class=\"contact-hd widget-ctn-hd\">
                            <h3> 1000 avis (4,5 / 5)</h3>
                            <hr>
                        </div>
                        <div class=\"contact-dt\">
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
        // line 35
        if (isset($context["avis"])) { $_avis_ = $context["avis"]; } else { $_avis_ = null; }
        if ((twig_length_filter($this->env, $_avis_) != 0)) {
            // line 36
            echo "                                    ";
            if (isset($context["avis"])) { $_avis_ = $context["avis"]; } else { $_avis_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_avis_);
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                echo "    
                                    <tr>
                                        <td> ";
                // line 38
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_a_, "note"), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 39
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_a_, "cooperative"), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 40
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_a_, "avis"), "html", null, true);
                echo " </td>
                                        <td> <a href=\"";
                // line 41
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membre_show", array("id" => $this->getAttribute($this->getAttribute($_a_, "utilisateur"), "id"))), "html", null, true);
                echo "\">";
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_a_, "utilisateur"), "username"), "html", null, true);
                echo "</a> </td>
                                        <td>
                                            <a href=\"";
                // line 43
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avis_delete", array("id" => $this->getAttribute($_a_, "id"))), "html", null, true);
                echo "\">
                                                <button class=\"btn btn-warning notika-btn-error waves-effect\">Supprimer</button>

                                            </a>
                                            <br/>
                                            <a href=\"";
                // line 48
                if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avis_validate", array("id" => $this->getAttribute($_a_, "id"))), "html", null, true);
                echo "\">
                                                <button class=\"btn btn-success notika-btn-success waves-effect\">RAS</button>
                                            </a>
                                        </td>
                                        </td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                    ";
        } else {
            // line 56
            echo "                                    <center>Aucun avis a moderer<center>
                                    ";
        }
        // line 58
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
        return "BtaxBundle:Admin/Avis:tomoderate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 58,  128 => 55,  105 => 43,  91 => 40,  86 => 39,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  195 => 65,  189 => 61,  186 => 60,  162 => 58,  155 => 55,  143 => 49,  138 => 44,  134 => 43,  131 => 56,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 36,  69 => 35,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  207 => 70,  204 => 69,  198 => 65,  194 => 64,  178 => 61,  173 => 58,  158 => 56,  150 => 54,  147 => 51,  142 => 52,  130 => 42,  127 => 41,  112 => 32,  96 => 41,  76 => 19,  71 => 17,  55 => 15,  114 => 48,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 15,  39 => 7,  110 => 20,  100 => 27,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  78 => 40,  46 => 12,  44 => 9,  36 => 6,  60 => 12,  43 => 11,  40 => 9,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  32 => 5,  27 => 3,  25 => 3,  24 => 4,  95 => 67,  42 => 19,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 38,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 32,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 38,  70 => 15,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
