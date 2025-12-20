<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* book/index.html.twig */
class __TwigTemplate_7a147310f0a299a4a82eb8fce7efc18e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Список книг
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<div class=\"container\">
\t\t<div class=\"header\">
\t\t\t<h1>Список книг</h1>
\t\t\t<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_new");
        yield "\" class=\"btn-new\">+ Новая книга</a>
\t\t</div>

\t\t<table class=\"book-table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>ID</th>
\t\t\t\t\t<th>Название</th>
\t\t\t\t\t<th>ISBN</th>
\t\t\t\t\t<th>Год</th>
\t\t\t\t\t<th>Экз.</th>
\t\t\t\t\t<th>Автор</th>
\t\t\t\t\t<th>Действия</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 27
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<code>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "isbn", [], "any", false, false, false, 31), "html", null, true);
            yield "</code>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "year", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "copies", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 36
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 37
                yield "\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 37), "fullName", [], "any", false, false, false, 37), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            } else {
                // line 39
                yield "\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t";
            }
            // line 41
            yield "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn-view\">Просмотр</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"btn-edit\">Изменить</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\" style=\"text-align: center; padding: 20px;\">
\t\t\t\t\t\t\tКниг не найдено
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "\t\t\t</tbody>
\t\t</table>
\t</div>

\t<style>
\t\t.container {
\t\t\tpadding: 20px;
\t\t}

\t\t.header {
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\tmargin-bottom: 20px;
\t\t}

\t\th1 {
\t\t\tcolor: #333;
\t\t}

\t\t.btn-new {
\t\t\tbackground: #2196F3;
\t\t\tcolor: white;
\t\t\tpadding: 10px 15px;
\t\t\tborder-radius: 4px;
\t\t\ttext-decoration: none;
\t\t}

\t\t.btn-new:hover {
\t\t\tbackground: #1976D2;
\t\t}

\t\t.book-table {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t\tbackground: white;
\t\t}

\t\t.book-table th {
\t\t\tbackground: #f5f5f5;
\t\t\tpadding: 12px;
\t\t\ttext-align: left;
\t\t\tborder-bottom: 2px solid #ddd;
\t\t\tfont-weight: bold;
\t\t}

\t\t.book-table td {
\t\t\tpadding: 10px;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}

\t\t.book-table tr:hover {
\t\t\tbackground: #f9f9f9;
\t\t}

\t\t.actions {
\t\t\tdisplay: flex;
\t\t\tgap: 5px;
\t\t}

\t\t.btn-view,
\t\t.btn-edit {
\t\t\tpadding: 5px 10px;
\t\t\tborder-radius: 3px;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 14px;
\t\t}

\t\t.btn-view {
\t\t\tbackground: #4CAF50;
\t\t\tcolor: white;
\t\t}

\t\t.btn-view:hover {
\t\t\tbackground: #45a049;
\t\t}

\t\t.btn-edit {
\t\t\tbackground: #FF9800;
\t\t\tcolor: white;
\t\t}

\t\t.btn-edit:hover {
\t\t\tbackground: #F57C00;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "book/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  197 => 54,  186 => 48,  184 => 47,  176 => 44,  172 => 43,  168 => 41,  164 => 39,  158 => 37,  156 => 36,  151 => 34,  147 => 33,  142 => 31,  137 => 29,  133 => 28,  130 => 27,  125 => 26,  106 => 10,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Список книг
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"header\">
\t\t\t<h1>Список книг</h1>
\t\t\t<a href=\"{{ path('app_book_new') }}\" class=\"btn-new\">+ Новая книга</a>
\t\t</div>

\t\t<table class=\"book-table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>ID</th>
\t\t\t\t\t<th>Название</th>
\t\t\t\t\t<th>ISBN</th>
\t\t\t\t\t<th>Год</th>
\t\t\t\t\t<th>Экз.</th>
\t\t\t\t\t<th>Автор</th>
\t\t\t\t\t<th>Действия</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for book in books %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ book.id }}</td>
\t\t\t\t\t\t<td>{{ book.title }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<code>{{ book.isbn }}</code>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ book.year }}</td>
\t\t\t\t\t\t<td>{{ book.copies }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if book.author %}
\t\t\t\t\t\t\t\t{{ book.author.fullName }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_book_show', {'id': book.id}) }}\" class=\"btn-view\">Просмотр</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_book_edit', {'id': book.id}) }}\" class=\"btn-edit\">Изменить</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\" style=\"text-align: center; padding: 20px;\">
\t\t\t\t\t\t\tКниг не найдено
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>

\t<style>
\t\t.container {
\t\t\tpadding: 20px;
\t\t}

\t\t.header {
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\tmargin-bottom: 20px;
\t\t}

\t\th1 {
\t\t\tcolor: #333;
\t\t}

\t\t.btn-new {
\t\t\tbackground: #2196F3;
\t\t\tcolor: white;
\t\t\tpadding: 10px 15px;
\t\t\tborder-radius: 4px;
\t\t\ttext-decoration: none;
\t\t}

\t\t.btn-new:hover {
\t\t\tbackground: #1976D2;
\t\t}

\t\t.book-table {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t\tbackground: white;
\t\t}

\t\t.book-table th {
\t\t\tbackground: #f5f5f5;
\t\t\tpadding: 12px;
\t\t\ttext-align: left;
\t\t\tborder-bottom: 2px solid #ddd;
\t\t\tfont-weight: bold;
\t\t}

\t\t.book-table td {
\t\t\tpadding: 10px;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}

\t\t.book-table tr:hover {
\t\t\tbackground: #f9f9f9;
\t\t}

\t\t.actions {
\t\t\tdisplay: flex;
\t\t\tgap: 5px;
\t\t}

\t\t.btn-view,
\t\t.btn-edit {
\t\t\tpadding: 5px 10px;
\t\t\tborder-radius: 3px;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 14px;
\t\t}

\t\t.btn-view {
\t\t\tbackground: #4CAF50;
\t\t\tcolor: white;
\t\t}

\t\t.btn-view:hover {
\t\t\tbackground: #45a049;
\t\t}

\t\t.btn-edit {
\t\t\tbackground: #FF9800;
\t\t\tcolor: white;
\t\t}

\t\t.btn-edit:hover {
\t\t\tbackground: #F57C00;
\t\t}
\t</style>
{% endblock %}
", "book/index.html.twig", "C:\\code\\library\\library-web\\templates\\book\\index.html.twig");
    }
}
