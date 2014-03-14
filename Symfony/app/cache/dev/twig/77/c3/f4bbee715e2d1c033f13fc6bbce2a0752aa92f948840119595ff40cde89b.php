<?php

/* SdzBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_77c3f4bbee715e2d1c033f13fc6bbce2a0752aa92f948840119595ff40cde89b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <h2>Ajouter un article</h2>

    ";
        // line 7
        $this->env->loadTemplate("SdzBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 8
        echo "
    <p>
        Attention : cet article sera ajouté directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
