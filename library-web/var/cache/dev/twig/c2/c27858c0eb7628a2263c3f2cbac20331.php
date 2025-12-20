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

/* reader/index.html.twig */
class __TwigTemplate_e2ab911160cf61a8ede0eacad5dc1518 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reader/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reader/index.html.twig"));

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

        yield "Читатели
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
\t\t\t<h1>Читатели</h1>
\t\t\t<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reader_new");
        yield "\" class=\"btn-new\">+ Новый читатель</a>
\t\t</div>

\t\t";
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["readers"]) || array_key_exists("readers", $context) ? $context["readers"] : (function () { throw new RuntimeError('Variable "readers" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            yield "\t\t\t<table class=\"reader-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>ФИО</th>
\t\t\t\t\t\t<th>Номер билета</th>
\t\t\t\t\t\t<th>Контакты</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Книг на руках</th>
\t\t\t\t\t\t<th>Действия</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["readers"]) || array_key_exists("readers", $context) ? $context["readers"] : (function () { throw new RuntimeError('Variable "readers" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reader"]) {
                // line 28
                yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reader"], "id", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reader"], "fullName", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reader"], "ticketNumber", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reader"], "contacts", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 33
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reader"], "email", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reader"], "email", [], "any", false, false, false, 33), "html", null, true)) : ("-"));
                yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 35
                $context["activeLoans"] = 0;
                // line 36
                yield "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["reader"], "loans", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
                    // line 37
                    yield "\t\t\t\t\t\t\t\t\t";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "returnDate", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 38
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        $context["activeLoans"] = ((isset($context["activeLoans"]) || array_key_exists("activeLoans", $context) ? $context["activeLoans"] : (function () { throw new RuntimeError('Variable "activeLoans" does not exist.', 38, $this->source); })()) + 1);
                        // line 39
                        yield "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 40
                    yield "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['loan'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeLoans"]) || array_key_exists("activeLoans", $context) ? $context["activeLoans"] : (function () { throw new RuntimeError('Variable "activeLoans" does not exist.', 41, $this->source); })()), "html", null, true);
                yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reader_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reader"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn-view\">Просмотр</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reader_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reader"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" class=\"btn-edit\">Изменить</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reader'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        } else {
            // line 52
            yield "\t\t\t<div class=\"empty-state\">
\t\t\t\t<p>Читателей не найдено</p>
\t\t\t\t<a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reader_new");
            yield "\" class=\"btn-new\">Добавить первого читателя</a>
\t\t\t</div>
\t\t";
        }
        // line 57
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

\t\t.reader-table {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t\tbackground: white;
\t\t}

\t\t.reader-table th {
\t\t\tbackground: #f5f5f5;
\t\t\tpadding: 12px;
\t\t\ttext-align: left;
\t\t\tborder-bottom: 2px solid #ddd;
\t\t\tfont-weight: bold;
\t\t}

\t\t.reader-table td {
\t\t\tpadding: 10px;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}

\t\t.reader-table tr:hover {
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
        return "reader/index.html.twig";
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
        return array (  215 => 57,  209 => 54,  205 => 52,  200 => 49,  190 => 45,  186 => 44,  179 => 41,  173 => 40,  170 => 39,  167 => 38,  164 => 37,  159 => 36,  157 => 35,  152 => 33,  148 => 32,  144 => 31,  140 => 30,  136 => 29,  133 => 28,  129 => 27,  114 => 14,  112 => 13,  106 => 10,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Читатели
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"header\">
\t\t\t<h1>Читатели</h1>
\t\t\t<a href=\"{{ path('app_reader_new') }}\" class=\"btn-new\">+ Новый читатель</a>
\t\t</div>

\t\t{% if readers|length > 0 %}
\t\t\t<table class=\"reader-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>ФИО</th>
\t\t\t\t\t\t<th>Номер билета</th>
\t\t\t\t\t\t<th>Контакты</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Книг на руках</th>
\t\t\t\t\t\t<th>Действия</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for reader in readers %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ reader.id }}</td>
\t\t\t\t\t\t\t<td>{{ reader.fullName }}</td>
\t\t\t\t\t\t\t<td>{{ reader.ticketNumber }}</td>
\t\t\t\t\t\t\t<td>{{ reader.contacts }}</td>
\t\t\t\t\t\t\t<td>{{ reader.email ? reader.email : '-' }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% set activeLoans = 0 %}
\t\t\t\t\t\t\t\t{% for loan in reader.loans %}
\t\t\t\t\t\t\t\t\t{% if not loan.returnDate %}
\t\t\t\t\t\t\t\t\t\t{% set activeLoans = activeLoans + 1 %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{{ activeLoans }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_reader_show', {'id': reader.id}) }}\" class=\"btn-view\">Просмотр</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_reader_edit', {'id': reader.id}) }}\" class=\"btn-edit\">Изменить</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t{% else %}
\t\t\t<div class=\"empty-state\">
\t\t\t\t<p>Читателей не найдено</p>
\t\t\t\t<a href=\"{{ path('app_reader_new') }}\" class=\"btn-new\">Добавить первого читателя</a>
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

\t\t.reader-table {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t\tbackground: white;
\t\t}

\t\t.reader-table th {
\t\t\tbackground: #f5f5f5;
\t\t\tpadding: 12px;
\t\t\ttext-align: left;
\t\t\tborder-bottom: 2px solid #ddd;
\t\t\tfont-weight: bold;
\t\t}

\t\t.reader-table td {
\t\t\tpadding: 10px;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}

\t\t.reader-table tr:hover {
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
", "reader/index.html.twig", "C:\\code\\library\\library-web\\templates\\reader\\index.html.twig");
    }
}
