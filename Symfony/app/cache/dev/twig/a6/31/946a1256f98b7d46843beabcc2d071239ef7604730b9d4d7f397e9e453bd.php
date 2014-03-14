<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_a631946a1256f98b7d46843beabcc2d071239ef7604730b9d4d7f397e9e453bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"hero-unit\">
        <h1>Mon Projet Symfony2</h1>
        <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2\">
                Lire le tutoriel »
            </a></p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
            <h3>Le blog</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\">Accueil du blog</a></li>
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Ajouter un article</a></li>
            </ul>

            ";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">

            ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "            ";
        $this->displayBlock('sdzblog_body', $context, $blocks);
        // line 40
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © 2012 and beyond.</p>
    </footer>
</div>

";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Sdz";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
    }

    // line 38
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 39
        echo "            ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        // line 52
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 53,  132 => 52,  130 => 51,  127 => 50,  123 => 39,  120 => 38,  115 => 37,  108 => 11,  105 => 10,  99 => 8,  93 => 55,  91 => 50,  79 => 40,  76 => 38,  74 => 37,  67 => 33,  61 => 30,  57 => 29,  39 => 13,  37 => 10,  32 => 8,  24 => 2,);
    }
}
