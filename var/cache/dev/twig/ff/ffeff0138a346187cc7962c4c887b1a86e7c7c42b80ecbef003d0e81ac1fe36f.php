<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* plat/index.html.twig */
class __TwigTemplate_b22b87f6362da91af2cbe241959307c7e3e65a66e11ad483cbd59e6a22e2bbb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PlatController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Liste des plats</h1>
<div class=\"row\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 9
            echo "  <div class=\"card col-3\">
    <div class=\"card-header\">
      <h3 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "content", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
      <ul>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["plat"], "platImages", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
                // line 17
                echo "          <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elem"], "shortName", [], "any", false, false, false, 17), "html", null, true);
                echo " <a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plat_delete_image", ["id" => twig_get_attribute($this->env, $this->source, $context["elem"], "Id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">X</a> </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      </ul>
      <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plat_add_image", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "Id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\"><small>ajouter une image</small></a>
    </div>
    <div class=\"card-footer\">
      <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plat_update", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "Id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
      <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plat_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "Id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Supprimer</a>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>

<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plat_new");
        echo "\" class=\"btn btn-success\">Ajout d'un nouveau plat</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "plat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 30,  149 => 28,  139 => 24,  135 => 23,  129 => 20,  126 => 19,  115 => 17,  111 => 16,  106 => 14,  100 => 11,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PlatController!{% endblock %}

{% block body %}
<h1>Liste des plats</h1>
<div class=\"row\">
  {% for plat in plats %}
  <div class=\"card col-3\">
    <div class=\"card-header\">
      <h3 class=\"card-title\">{{plat.name}}</h3>
    </div>
    <div class=\"card-body\">
      <p class=\"card-text\">{{plat.content}}</p>
      <ul>
        {% for elem in plat.platImages %}
          <li>{{elem.shortName}} <a class=\"btn btn-info\" href=\"{{path('plat_delete_image', {'id' : elem.Id})}}\">X</a> </li>
        {% endfor %}
      </ul>
      <a href=\"{{path('plat_add_image', {'id' : plat.Id })}}\"><small>ajouter une image</small></a>
    </div>
    <div class=\"card-footer\">
      <a href=\"{{path('plat_update', {'id' : plat.Id })}}\" class=\"btn btn-primary\">Modifier</a>
      <a href=\"{{path('plat_delete', {'id' : plat.Id })}}\" class=\"btn btn-warning\">Supprimer</a>
    </div>
  </div>
  {% endfor %}
</div>

<a href=\"{{path('plat_new')}}\" class=\"btn btn-success\">Ajout d'un nouveau plat</a>
{% endblock %}
", "plat/index.html.twig", "/home/christophe/Bureau/my_restaurant/templates/plat/index.html.twig");
    }
}
