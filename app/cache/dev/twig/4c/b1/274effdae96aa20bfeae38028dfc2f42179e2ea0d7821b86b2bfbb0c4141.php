<?php

/* EnsJobeetBundle:Job:edit.html.twig */
class __TwigTemplate_4cb1274effdae96aa20bfeae38028dfc2f42179e2ea0d7821b86b2bfbb0c4141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Job edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  113 => 36,  81 => 21,  97 => 25,  53 => 12,  207 => 74,  200 => 14,  197 => 13,  190 => 11,  161 => 83,  148 => 75,  146 => 73,  129 => 66,  118 => 62,  114 => 60,  90 => 24,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 34,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 73,  179 => 5,  159 => 61,  143 => 56,  135 => 53,  119 => 39,  102 => 55,  71 => 17,  67 => 15,  63 => 15,  59 => 13,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 31,  91 => 27,  62 => 14,  49 => 14,  38 => 6,  26 => 6,  87 => 25,  28 => 3,  31 => 4,  21 => 2,  94 => 25,  89 => 20,  85 => 25,  75 => 18,  68 => 14,  56 => 12,  24 => 3,  25 => 3,  19 => 1,  93 => 24,  88 => 22,  78 => 21,  46 => 10,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 15,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 31,  115 => 43,  111 => 58,  108 => 36,  101 => 29,  98 => 31,  96 => 31,  83 => 22,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 9,  43 => 9,  41 => 9,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 10,  182 => 6,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 41,  125 => 65,  122 => 64,  116 => 61,  112 => 42,  109 => 34,  106 => 36,  103 => 28,  99 => 54,  95 => 28,  92 => 52,  86 => 23,  82 => 22,  80 => 19,  73 => 19,  64 => 29,  60 => 17,  57 => 11,  54 => 22,  51 => 14,  48 => 8,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
