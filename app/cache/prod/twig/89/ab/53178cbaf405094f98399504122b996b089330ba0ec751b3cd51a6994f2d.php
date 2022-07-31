<?php

/* BtaxBundle:Admin/Localisation:show.html.twig */
class __TwigTemplate_89ab53178cbaf405094f98399504122b996b089330ba0ec751b3cd51a6994f2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Localisation</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>";
        // line 14
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "localisation"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 18
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "photo"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("localisation");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_delete_form_, 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BtaxBundle:Admin/Localisation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 41,  132 => 52,  120 => 49,  159 => 76,  64 => 28,  74 => 30,  116 => 49,  99 => 44,  82 => 34,  306 => 210,  301 => 175,  292 => 211,  290 => 210,  282 => 205,  275 => 201,  267 => 196,  263 => 195,  255 => 190,  242 => 183,  238 => 182,  228 => 175,  79 => 38,  125 => 50,  369 => 194,  364 => 159,  353 => 194,  345 => 189,  338 => 185,  326 => 179,  318 => 174,  304 => 166,  296 => 11,  291 => 159,  248 => 119,  233 => 110,  225 => 108,  217 => 103,  213 => 102,  205 => 100,  174 => 87,  164 => 77,  154 => 75,  144 => 79,  136 => 77,  87 => 42,  75 => 36,  68 => 30,  61 => 27,  135 => 58,  128 => 79,  105 => 43,  91 => 40,  86 => 39,  54 => 22,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 11,  355 => 195,  348 => 91,  344 => 90,  330 => 180,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  195 => 65,  189 => 86,  186 => 85,  162 => 58,  155 => 55,  143 => 49,  138 => 53,  134 => 43,  131 => 56,  122 => 37,  117 => 61,  108 => 31,  102 => 28,  92 => 41,  84 => 21,  72 => 35,  69 => 35,  51 => 13,  48 => 19,  35 => 6,  29 => 3,  312 => 96,  308 => 167,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 187,  247 => 70,  237 => 111,  207 => 70,  204 => 69,  198 => 96,  194 => 95,  178 => 61,  173 => 79,  158 => 56,  150 => 60,  147 => 51,  142 => 52,  130 => 42,  127 => 41,  112 => 53,  96 => 41,  76 => 37,  71 => 17,  55 => 18,  114 => 48,  109 => 46,  106 => 20,  101 => 51,  85 => 43,  77 => 39,  67 => 34,  39 => 10,  110 => 45,  100 => 42,  89 => 41,  65 => 35,  63 => 25,  58 => 24,  34 => 11,  26 => 6,  98 => 40,  88 => 38,  80 => 40,  78 => 40,  46 => 12,  44 => 14,  36 => 12,  60 => 12,  43 => 15,  40 => 9,  57 => 11,  50 => 14,  47 => 14,  38 => 6,  32 => 4,  27 => 3,  25 => 3,  24 => 4,  95 => 67,  42 => 19,  28 => 3,  22 => 1,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 88,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 74,  146 => 41,  140 => 72,  137 => 71,  129 => 36,  124 => 35,  121 => 50,  118 => 49,  115 => 48,  111 => 58,  107 => 28,  104 => 44,  97 => 45,  93 => 39,  90 => 43,  81 => 37,  70 => 36,  66 => 25,  62 => 11,  59 => 15,  56 => 22,  52 => 20,  49 => 18,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
