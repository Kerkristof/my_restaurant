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

/* admin/index.html.twig */
class __TwigTemplate_41c18da1e50f3d5957801c8a881367c21d6e7b7ccb7157bd8ea21fb9274fc0df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "Hello AdminController!";
        
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "protected_user"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 7
            echo "    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["flashSuccess"]) {
            // line 10
            echo "    <div class=\"alert alert-success\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashSuccess"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashSuccess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "<table class=\"table\">
  <tr>
    <th>ID</th>
    <th>Date de création</th>
    <th>Email</th>
    <th>Vérifier</th>
    <th>Roles</th>
    <th>Modifier</th>
    <th>Supprimer</th>
  </tr>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "    <tr>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 25), "d M Y à H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 28)), "html", null, true);
            echo "</td>
      <td>
        <form  action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_update_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"return confirm('Etes vous certain de vouloir modifier ce compte?');\">
          <select   name=\"role\" id=\"role\" required>
            <option value=\"\" disabled selected>Selectionner...</option>
            <optgroup label=\"groupe admin\">
              <option value=\"ROLE_SUPER_ADMIN\">Super admin</option>
              <option value=\"ROLE_ADMIN\">Admin</option>
            </optgroup>
            <optgroup label=\"groupe user\">
              <option value=\"ROLE_USER\">User</option>
            </optgroup>
          </select>
          <input type=\"submit\" value=\"Valider\">
        </form>
      </td>
      <td>
        <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"return confirm('Confirmez la suppression');\">
          <input type=\"submit\" value=\"Supprimer\">
        </form>
      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</table>

<div class=\"row\">
  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            echo "    <div class=\"card col-3\">
      <div class=\"card-header\">
        <h5 class=\"card-title\">
          ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "subject", [], "any", false, false, false, 58), "html", null, true);
            echo "
        </h5>
      </div>
      <div class=\"card-body\">
        <textarea class=\"card-text card-text-area\" rows=\"8\" >
          ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 63), "html", null, true);
            echo "
        </textarea>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 68,  206 => 63,  198 => 58,  193 => 55,  189 => 54,  184 => 51,  172 => 45,  154 => 30,  149 => 28,  145 => 27,  141 => 26,  137 => 25,  133 => 24,  130 => 23,  126 => 22,  114 => 12,  105 => 10,  101 => 9,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
{% for flashError in app.flashes('protected_user') %}
    <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
{% endfor %}
{% for flashSuccess in app.flashes('success') %}
    <div class=\"alert alert-success\" role=\"alert\">{{ flashSuccess }}</div>
{% endfor %}
<table class=\"table\">
  <tr>
    <th>ID</th>
    <th>Date de création</th>
    <th>Email</th>
    <th>Vérifier</th>
    <th>Roles</th>
    <th>Modifier</th>
    <th>Supprimer</th>
  </tr>
  {% for user in users %}
    <tr>
      <td>{{user.id}}</td>
      <td>{{user.createdAt|date('d M Y à H:i:s')}}</td>
      <td>{{user.email}}</td>
      <td>{{user.isVerified}}</td>
      <td>{{user.roles|json_encode}}</td>
      <td>
        <form  action=\"{{path('admin_update_user', {'id' : user.id })}}\" method=\"post\" onsubmit=\"return confirm('Etes vous certain de vouloir modifier ce compte?');\">
          <select   name=\"role\" id=\"role\" required>
            <option value=\"\" disabled selected>Selectionner...</option>
            <optgroup label=\"groupe admin\">
              <option value=\"ROLE_SUPER_ADMIN\">Super admin</option>
              <option value=\"ROLE_ADMIN\">Admin</option>
            </optgroup>
            <optgroup label=\"groupe user\">
              <option value=\"ROLE_USER\">User</option>
            </optgroup>
          </select>
          <input type=\"submit\" value=\"Valider\">
        </form>
      </td>
      <td>
        <form action=\"{{path('admin_delete_user', {'id' : user.id})}}\" method=\"post\" onsubmit=\"return confirm('Confirmez la suppression');\">
          <input type=\"submit\" value=\"Supprimer\">
        </form>
      </td>
    </tr>
  {% endfor %}
</table>

<div class=\"row\">
  {% for message in messages %}
    <div class=\"card col-3\">
      <div class=\"card-header\">
        <h5 class=\"card-title\">
          {{ message.subject }}
        </h5>
      </div>
      <div class=\"card-body\">
        <textarea class=\"card-text card-text-area\" rows=\"8\" >
          {{ message.content}}
        </textarea>
      </div>
    </div>
  {% endfor %}
</div>

{% endblock %}
", "admin/index.html.twig", "/home/christophe/Bureau/my_restaurant/templates/admin/index.html.twig");
    }
}
