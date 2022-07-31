<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_4e3c2fc4644462e3560ad1df3682c5b159f0f6f2cf2b554a95a5f9ee4c7c84c9 extends Twig_Template
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
        // line 19
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

\t\t\t\t\t
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

\t\t
\t\t\t<div class=\"content-info-paiement\">
\t\t\t\t<div class=\"icon-nodefined\"></div>
\t\t\t\t<div class=\"message-info-paiement\">
\t\t\t\t\tOups !!! Page introuvable :(
\t\t\t\t</div>\t
\t\t\t\t<div class=\"btn-back\">
\t\t\t\t\t<a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("book_homepage");
        echo "\"><button class=\"btn-404\">Revenir sur le site</button></a>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 67,  42 => 19,  28 => 8,  22 => 2,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 38,  137 => 37,  129 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 32,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 22,  90 => 21,  81 => 19,  70 => 15,  66 => 13,  62 => 12,  59 => 11,  56 => 10,  52 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  30 => 3,);
    }
}
