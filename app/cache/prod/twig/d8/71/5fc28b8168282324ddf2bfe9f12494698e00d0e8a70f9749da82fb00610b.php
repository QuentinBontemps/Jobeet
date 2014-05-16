<?php

/* EnsJobeetBundle:Job:new.html.twig */
class __TwigTemplate_d8715fc28b8168282324ddf2bfe9f12494698e00d0e8a70f9749da82fb00610b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ens_job");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  113 => 36,  81 => 21,  97 => 25,  83 => 22,  53 => 12,  207 => 74,  200 => 14,  197 => 13,  190 => 11,  161 => 83,  148 => 75,  146 => 73,  129 => 66,  120 => 31,  118 => 62,  114 => 60,  90 => 24,  37 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 34,  111 => 58,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 73,  179 => 5,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 39,  108 => 36,  102 => 55,  71 => 17,  67 => 15,  63 => 15,  59 => 13,  47 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 31,  91 => 27,  69 => 25,  62 => 14,  49 => 11,  38 => 6,  26 => 6,  87 => 25,  66 => 15,  55 => 15,  28 => 3,  31 => 4,  35 => 6,  29 => 4,  21 => 2,  43 => 9,  101 => 29,  94 => 25,  89 => 20,  85 => 25,  79 => 18,  75 => 18,  72 => 16,  68 => 14,  56 => 12,  50 => 9,  41 => 9,  24 => 3,  25 => 3,  19 => 1,  98 => 31,  93 => 24,  88 => 22,  78 => 21,  46 => 10,  44 => 12,  40 => 15,  32 => 5,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 10,  182 => 6,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 41,  125 => 65,  122 => 64,  116 => 61,  112 => 42,  109 => 34,  106 => 33,  103 => 28,  99 => 54,  95 => 28,  92 => 52,  86 => 23,  82 => 22,  80 => 19,  73 => 19,  64 => 29,  60 => 17,  57 => 11,  54 => 22,  51 => 14,  48 => 8,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
