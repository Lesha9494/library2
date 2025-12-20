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

/* loan/index.html.twig */
class __TwigTemplate_b20e8e88065300bbd2a159fb42afc33a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/index.html.twig"));

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

        yield "Выдачи книг
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
\t\t\t<h1>Выдачи книг</h1>
\t\t\t<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loan_new");
        yield "\" class=\"btn-new\">+ Новая выдача</a>
\t\t</div>

\t\t";
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["loans"]) || array_key_exists("loans", $context) ? $context["loans"] : (function () { throw new RuntimeError('Variable "loans" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            yield "\t\t\t<table class=\"loan-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Читатель</th>
\t\t\t\t\t\t<th>Книга</th>
\t\t\t\t\t\t<th>Выдана</th>
\t\t\t\t\t\t<th>Вернуть до</th>
\t\t\t\t\t\t<th>Возвращена</th>
\t\t\t\t\t\t<th>Статус</th>
\t\t\t\t\t\t<th>Действия</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["loans"]) || array_key_exists("loans", $context) ? $context["loans"] : (function () { throw new RuntimeError('Variable "loans" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
                // line 29
                yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "reader", [], "any", false, false, false, 31), "fullName", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 33
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "bookCopy", [], "any", false, false, false, 33) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "bookCopy", [], "any", false, false, false, 33), "book", [], "any", false, false, false, 33))) {
                    // line 34
                    yield "\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "bookCopy", [], "any", false, false, false, 34), "book", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 36
                    yield "\t\t\t\t\t\t\t\t\tНе указана
\t\t\t\t\t\t\t\t";
                }
                // line 38
                yield "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 39
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "issueDate", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "issueDate", [], "any", false, false, false, 39), "d.m.Y"), "html", null, true)) : (""));
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 40
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dueDate", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dueDate", [], "any", false, false, false, 40), "d.m.Y"), "html", null, true)) : (""));
                yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 42
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "returnDate", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 43
                    yield "\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "returnDate", [], "any", false, false, false, 43), "d.m.Y"), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 45
                    yield "\t\t\t\t\t\t\t\t\t<span style=\"color: #f44336;\">Не возвращена</span>
\t\t\t\t\t\t\t\t";
                }
                // line 47
                yield "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 49
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "returnDate", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 50
                    yield "\t\t\t\t\t\t\t\t\t<span class=\"status-returned\">Возвращена</span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 52
                    yield "\t\t\t\t\t\t\t\t\t";
                    $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                    // line 53
                    yield "\t\t\t\t\t\t\t\t\t";
                    $context["dueDate"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dueDate", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dueDate", [], "any", false, false, false, 53), "Y-m-d")) : (""));
                    // line 54
                    yield "\t\t\t\t\t\t\t\t\t";
                    if (((isset($context["dueDate"]) || array_key_exists("dueDate", $context) ? $context["dueDate"] : (function () { throw new RuntimeError('Variable "dueDate" does not exist.', 54, $this->source); })()) < (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 54, $this->source); })()))) {
                        // line 55
                        yield "\t\t\t\t\t\t\t\t\t\t<span class=\"status-overdue\">Просрочена</span>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 57
                        yield "\t\t\t\t\t\t\t\t\t\t<span class=\"status-active\">На руках</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 59
                    yield "\t\t\t\t\t\t\t\t";
                }
                // line 60
                yield "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" class=\"btn-view\">Просмотр</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"btn-edit\">Изменить</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['loan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        } else {
            // line 70
            yield "\t\t\t<div class=\"empty-state\">
\t\t\t\t<p>Выдач не найдено</p>
\t\t\t\t<a href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loan_new");
            yield "\" class=\"btn-new\">Создать первую выдачу</a>
\t\t\t</div>
\t\t";
        }
        // line 75
        yield "\t</div>

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

\t\t.loan-table {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t\tbackground: white;
\t\t}

\t\t.loan-table th {
\t\t\tbackground: #f5f5f5;
\t\t\tpadding: 12px;
\t\t\ttext-align: left;
\t\t\tborder-bottom: 2px solid #ddd;
\t\t\tfont-weight: bold;
\t\t}

\t\t.loan-table td {
\t\t\tpadding: 10px;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}

\t\t.loan-table tr:hover {
\t\t\tbackground: #f9f9f9;
\t\t}

\t\t.status-returned {
\t\t\tbackground: #4CAF50;
\t\t\tcolor: white;
\t\t\tpadding: 3px 8px;
\t\t\tborder-radius: 3px;
\t\t\tfont-size: 12px;
\t\t}

\t\t.status-active {
\t\t\tbackground: #2196F3;
\t\t\tcolor: white;
\t\t\tpadding: 3px 8px;
\t\t\tborder-radius: 3px;
\t\t\tfont-size: 12px;
\t\t}

\t\t.status-overdue {
\t\t\tbackground: #f44336;
\t\t\tcolor: white;
\t\t\tpadding: 3px 8px;
\t\t\tborder-radius: 3px;
\t\t\tfont-size: 12px;
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

\t\t.empty-state {
\t\t\ttext-align: center;
\t\t\tpadding: 40px;
\t\t\tbackground: white;
\t\t\tborder-radius: 5px;
\t\t\tmargin-top: 20px;
\t\t}

\t\t.empty-state p {
\t\t\tmargin-bottom: 20px;
\t\t\tcolor: #666;
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
        return "loan/index.html.twig";
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
        return array (  245 => 75,  239 => 72,  235 => 70,  230 => 67,  220 => 63,  216 => 62,  212 => 60,  209 => 59,  205 => 57,  201 => 55,  198 => 54,  195 => 53,  192 => 52,  188 => 50,  186 => 49,  182 => 47,  178 => 45,  172 => 43,  170 => 42,  165 => 40,  161 => 39,  158 => 38,  154 => 36,  148 => 34,  146 => 33,  141 => 31,  137 => 30,  134 => 29,  130 => 28,  114 => 14,  112 => 13,  106 => 10,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Выдачи книг
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"header\">
\t\t\t<h1>Выдачи книг</h1>
\t\t\t<a href=\"{{ path('app_loan_new') }}\" class=\"btn-new\">+ Новая выдача</a>
\t\t</div>

\t\t{% if loans|length > 0 %}
\t\t\t<table class=\"loan-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Читатель</th>
\t\t\t\t\t\t<th>Книга</th>
\t\t\t\t\t\t<th>Выдана</th>
\t\t\t\t\t\t<th>Вернуть до</th>
\t\t\t\t\t\t<th>Возвращена</th>
\t\t\t\t\t\t<th>Статус</th>
\t\t\t\t\t\t<th>Действия</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for loan in loans %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ loan.id }}</td>
\t\t\t\t\t\t\t<td>{{ loan.reader.fullName }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if loan.bookCopy and loan.bookCopy.book %}
\t\t\t\t\t\t\t\t\t{{ loan.bookCopy.book.title }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tНе указана
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ loan.issueDate ? loan.issueDate|date('d.m.Y') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ loan.dueDate ? loan.dueDate|date('d.m.Y') : '' }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if loan.returnDate %}
\t\t\t\t\t\t\t\t\t{{ loan.returnDate|date('d.m.Y') }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<span style=\"color: #f44336;\">Не возвращена</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if loan.returnDate %}
\t\t\t\t\t\t\t\t\t<span class=\"status-returned\">Возвращена</span>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% set today = \"now\"|date('Y-m-d') %}
\t\t\t\t\t\t\t\t\t{% set dueDate = loan.dueDate ? loan.dueDate|date('Y-m-d') : '' %}
\t\t\t\t\t\t\t\t\t{% if dueDate < today %}
\t\t\t\t\t\t\t\t\t\t<span class=\"status-overdue\">Просрочена</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"status-active\">На руках</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_loan_show', {'id': loan.id}) }}\" class=\"btn-view\">Просмотр</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_loan_edit', {'id': loan.id}) }}\" class=\"btn-edit\">Изменить</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t{% else %}
\t\t\t<div class=\"empty-state\">
\t\t\t\t<p>Выдач не найдено</p>
\t\t\t\t<a href=\"{{ path('app_loan_new') }}\" class=\"btn-new\">Создать первую выдачу</a>
\t\t\t</div>
\t\t{% endif %}
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

\t\t.loan-table {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t\tbackground: white;
\t\t}

\t\t.loan-table th {
\t\t\tbackground: #f5f5f5;
\t\t\tpadding: 12px;
\t\t\ttext-align: left;
\t\t\tborder-bottom: 2px solid #ddd;
\t\t\tfont-weight: bold;
\t\t}

\t\t.loan-table td {
\t\t\tpadding: 10px;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}

\t\t.loan-table tr:hover {
\t\t\tbackground: #f9f9f9;
\t\t}

\t\t.status-returned {
\t\t\tbackground: #4CAF50;
\t\t\tcolor: white;
\t\t\tpadding: 3px 8px;
\t\t\tborder-radius: 3px;
\t\t\tfont-size: 12px;
\t\t}

\t\t.status-active {
\t\t\tbackground: #2196F3;
\t\t\tcolor: white;
\t\t\tpadding: 3px 8px;
\t\t\tborder-radius: 3px;
\t\t\tfont-size: 12px;
\t\t}

\t\t.status-overdue {
\t\t\tbackground: #f44336;
\t\t\tcolor: white;
\t\t\tpadding: 3px 8px;
\t\t\tborder-radius: 3px;
\t\t\tfont-size: 12px;
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

\t\t.empty-state {
\t\t\ttext-align: center;
\t\t\tpadding: 40px;
\t\t\tbackground: white;
\t\t\tborder-radius: 5px;
\t\t\tmargin-top: 20px;
\t\t}

\t\t.empty-state p {
\t\t\tmargin-bottom: 20px;
\t\t\tcolor: #666;
\t\t}
\t</style>
{% endblock %}
", "loan/index.html.twig", "C:\\code\\library\\library-web\\templates\\loan\\index.html.twig");
    }
}
