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
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* citation/index.html.twig */
class __TwigTemplate_97159334c4d5e2488e2fffc095851451 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "citation/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Citations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Liste des Citations</h1>

    <a href=\"";
        // line 8
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_citation_new");
        yield "\">Ajouter une citation</a>

    <ul>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["citations"]) || array_key_exists("citations", $context) ? $context["citations"] : (function () { throw new RuntimeError('Variable "citations" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["citation"]) {
            // line 12
            yield "            <li>
                <strong>« ";
            // line 13
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "texte", [], "any", false, false, false, 13), "html", null, true);
            yield " »</strong>
                ";
            // line 14
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "auteur", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "                    — <em>";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "auteur", [], "any", false, false, false, 15), "html", null, true);
                yield "</em>
                ";
            }
            // line 17
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "dateCitation", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "                    <p>(";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "dateCitation", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
                yield ")</p>
                ";
            }
            // line 20
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "genre", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "                    <small>(";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "genre", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21), "html", null, true);
                yield ")</small>
                ";
            }
            // line 23
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "source", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "                    <small>(";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "source", [], "any", false, false, false, 24), "html", null, true);
                yield ")</small>
                ";
            }
            // line 26
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "dateAjout", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "                    <small> ajouté le : (";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "dateAjout", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
                yield ")</small>
                ";
            }
            // line 29
            yield "

                ";
            // line 31
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "type", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "                    <small>(";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["citation"], "type", [], "any", false, false, false, 32), "html", null, true);
                yield ")</small>
                ";
            }
            // line 34
            yield "            </li>
        ";
            $context['_iterated'] = true;
        }
        // line 35
        if (!$context['_iterated']) {
            // line 36
            yield "            <li>Aucune citation disponible pour l\x27instant</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['citation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 38
        yield "    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "citation/index.html.twig";
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
        return array (  179 => 38,  171 => 36,  169 => 35,  164 => 34,  158 => 32,  156 => 31,  152 => 29,  146 => 27,  143 => 26,  137 => 24,  134 => 23,  128 => 21,  125 => 20,  119 => 18,  116 => 17,  110 => 15,  108 => 14,  104 => 13,  101 => 12,  96 => 11,  90 => 8,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Liste des Citations{% endblock %}

{% block body %}
    <h1>Liste des Citations</h1>

    <a href=\"{{ path(\x27app_citation_new\x27) }}\">Ajouter une citation</a>

    <ul>
        {% for citation in citations %}
            <li>
                <strong>« {{ citation.texte }} »</strong>
                {% if citation.auteur %}
                    — <em>{{ citation.auteur }}</em>
                {% endif %}
                {% if citation.dateCitation %}
                    <p>({{ citation.dateCitation|date(\x27d/m/Y\x27) }})</p>
                {% endif %}
                {% if citation.genre %}
                    <small>({{ citation.genre.value }})</small>
                {% endif %}
                {% if citation.source %}
                    <small>({{ citation.source }})</small>
                {% endif %}
                {% if citation.dateAjout %}
                    <small> ajouté le : ({{ citation.dateAjout|date(\x27d/m/Y\x27) }})</small>
                {% endif %}


                {% if citation.type %}
                    <small>({{ citation.type }})</small>
                {% endif %}
            </li>
        {% else %}
            <li>Aucune citation disponible pour l\x27instant</li>
        {% endfor %}
    </ul>
{% endblock %}
", "citation/index.html.twig", "/Users/coolmathieu/devilbox/data/www/Eval-Synfony/htdocs/templates/citation/index.html.twig");
    }
}
