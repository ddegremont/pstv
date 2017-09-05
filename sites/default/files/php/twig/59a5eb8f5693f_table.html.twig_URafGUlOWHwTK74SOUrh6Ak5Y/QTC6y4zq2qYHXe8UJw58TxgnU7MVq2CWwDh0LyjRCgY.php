<?php

/* themes/adaptivetheme/at_core/templates/dataset/table.html.twig */
class __TwigTemplate_ff33b0c8bad4fffe25858499ec1a3b892506c5e340d48b9541ad6c81a3ee8431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 42, "if" => 44, "for" => 48);
        $filters = array("length" => 42);
        $functions = array("cycle" => 86);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('length'),
                array('cycle')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 42
        $context["column_count"] = ("cols-" . twig_length_filter($this->env, (isset($context["header"]) ? $context["header"] : null)));
        // line 43
        echo "<table";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "table", 1 => (isset($context["column_count"]) ? $context["column_count"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 44
        if ((isset($context["caption"]) ? $context["caption"] : null)) {
            // line 45
            echo "    <caption class=\"table__caption caption\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
            echo "</caption>
  ";
        }
        // line 47
        echo "
  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colgroups"]) ? $context["colgroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 49
            echo "    ";
            if ($this->getAttribute($context["colgroup"], "cols", array())) {
                // line 50
                echo "      <colgroup";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["colgroup"], "attributes", array()), "addClass", array(0 => "table__colgroup"), "method"), "html", null, true));
                echo ">
        ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["colgroup"], "cols", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 52
                    echo "          <col";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["col"], "attributes", array()), "addClass", array(0 => "table__colgroup__col"), "method"), "html", null, true));
                    echo " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "      </colgroup>
    ";
            } else {
                // line 56
                echo "      <colgroup";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["colgroup"], "attributes", array()), "addClass", array(0 => "table__colgroup", 1 => "no-cols"), "method"), "html", null, true));
                echo " />
    ";
            }
            // line 58
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
  ";
        // line 60
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 61
            echo "    <thead class=\"table__header\">
      <tr class=\"table__row\">
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 64
                echo "          ";
                // line 65
                $context["cell_classes"] = array(0 => "table__cell", 1 => "table__header__cell", 2 => (($this->getAttribute(                // line 68
$context["cell"], "active_table_sort", array())) ? ("is-active") : ("")), 3 => ((                // line 69
(isset($context["is_sortable"]) ? $context["is_sortable"] : null)) ? ((isset($context["is_sortable"]) ? $context["is_sortable"] : null)) : ("")));
                // line 72
                echo "          <";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["cell"], "attributes", array()), "addClass", array(0 => (isset($context["cell_classes"]) ? $context["cell_classes"] : null)), "method"), "html", null, true));
                echo ">";
                // line 73
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                // line 74
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                echo ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "      </tr>
    </thead>
  ";
        }
        // line 79
        echo "
  ";
        // line 80
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 81
            echo "    <tbody class=\"table__body\">
      ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 83
                echo "        ";
                // line 84
                $context["row_classes"] = array(0 => "table__row", 1 => (( !                // line 86
(isset($context["no_striping"]) ? $context["no_striping"] : null)) ? (twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array()))) : ("")));
                // line 89
                echo "        <tr";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null)), "method"), "html", null, true));
                echo ">
          ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 91
                    echo "            <";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["cell"], "attributes", array()), "addClass", array(0 => "table__cell", 1 => "table__body__cell"), "method"), "html", null, true));
                    echo ">";
                    // line 92
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                    // line 93
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "        </tr>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    </tbody>
  ";
        } elseif (        // line 98
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 99
            echo "    <tbody class=\"table__body table__body--empty\">
      <tr class=\"table__row odd\">
        <td colspan=\"";
            // line 101
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_columns"]) ? $context["header_columns"] : null), "html", null, true));
            echo "\" class=\"table__cell empty message\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "</td>
      </tr>
    </tbody>
  ";
        }
        // line 105
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 106
            echo "    <tfoot class=\"table__foot\">
      ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footer"]) ? $context["footer"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 108
                echo "        <tr";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => "table__row"), "method"), "html", null, true));
                echo ">
          ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 110
                    echo "            <";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["cell"], "attributes", array()), "addClass", array(0 => "table__cell"), "method"), "html", null, true));
                    echo ">";
                    // line 111
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                    // line 112
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "    </tfoot>
  ";
        }
        // line 118
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/dataset/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 118,  272 => 116,  265 => 114,  256 => 112,  254 => 111,  249 => 110,  245 => 109,  240 => 108,  236 => 107,  233 => 106,  230 => 105,  221 => 101,  217 => 99,  215 => 98,  212 => 97,  197 => 95,  188 => 93,  186 => 92,  181 => 91,  177 => 90,  172 => 89,  170 => 86,  169 => 84,  167 => 83,  150 => 82,  147 => 81,  145 => 80,  142 => 79,  137 => 76,  128 => 74,  126 => 73,  121 => 72,  119 => 69,  118 => 68,  117 => 65,  115 => 64,  111 => 63,  107 => 61,  105 => 60,  102 => 59,  96 => 58,  90 => 56,  86 => 54,  77 => 52,  73 => 51,  68 => 50,  65 => 49,  61 => 48,  58 => 47,  52 => 45,  50 => 44,  45 => 43,  43 => 42,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Adaptivetheme override to display a table.
 *
 * Available variables:
 * - attributes: HTML attributes to apply to the <table> tag.
 * - caption: A localized string for the <caption> tag.
 * - colgroups: Column groups. Each group contains the following properties:
 *   - attributes: HTML attributes to apply to the <col> tag.
 *     Note: Drupal currently supports only one table header row, see
 *     https://www.drupal.org/node/893530 and
 *     http://api.drupal.org/api/drupal/includes!theme.inc/function/theme_table/7#comment-5109.
 * - header: Table header cells. Each cell contains the following properties:
 *   - tag: The HTML tag name to use; either TH or TD.
 *   - attributes: HTML attributes to apply to the tag.
 *   - content: A localized string for the title of the column.
 *   - field: Field name (required for column sorting).
 *   - sort: Default sort order for this column (\"asc\" or \"desc\").
 * - sticky: A flag indicating whether to use a \"sticky\" table header.
 * - rows: Table rows. Each row contains the following properties:
 *   - attributes: HTML attributes to apply to the <tr> tag.
 *   - data: Table cells.
 *   - no_striping: A flag indicating that the row should receive no
 *     'even / odd' styling. Defaults to FALSE.
 *   - cells: Table cells of the row. Each cell contains the following keys:
 *     - tag: The HTML tag name to use; either TH or TD.
 *     - attributes: Any HTML attributes, such as \"colspan\", to apply to the
 *       table cell.
 *     - content: The string to display in the table cell.
 *     - active_table_sort: A boolean indicating whether the cell is the active
         table sort.
 * - footer: Table footer rows, in the same format as the rows variable.
 * - empty: The message to display in an extra row if table does not have
 *   any rows.
 * - no_striping: A boolean indicating that the row should receive no striping.
 * - header_columns: The number of columns in the header.
 *
 * @see template_preprocess_table()
 */
#}
{% set column_count = 'cols-' ~ header|length %}
<table{{ attributes.addClass('table', column_count) }}>
  {% if caption %}
    <caption class=\"table__caption caption\">{{ caption }}</caption>
  {% endif %}

  {% for colgroup in colgroups %}
    {% if colgroup.cols %}
      <colgroup{{ colgroup.attributes.addClass('table__colgroup') }}>
        {% for col in colgroup.cols %}
          <col{{ col.attributes.addClass('table__colgroup__col') }} />
        {% endfor %}
      </colgroup>
    {% else %}
      <colgroup{{ colgroup.attributes.addClass('table__colgroup', 'no-cols') }} />
    {% endif %}
  {% endfor %}

  {% if header %}
    <thead class=\"table__header\">
      <tr class=\"table__row\">
        {% for cell in header %}
          {%
            set cell_classes = [
              'table__cell',
              'table__header__cell',
              cell.active_table_sort ? 'is-active',
              is_sortable ? is_sortable,
            ]
          %}
          <{{ cell.tag }}{{ cell.attributes.addClass(cell_classes) }}>
            {{- cell.content -}}
          </{{ cell.tag }}>
        {% endfor %}
      </tr>
    </thead>
  {% endif %}

  {% if rows %}
    <tbody class=\"table__body\">
      {% for row in rows %}
        {%
          set row_classes = [
            'table__row',
            not no_striping ? cycle(['odd', 'even'], loop.index0),
          ]
        %}
        <tr{{ row.attributes.addClass(row_classes) }}>
          {% for cell in row.cells %}
            <{{ cell.tag }}{{ cell.attributes.addClass('table__cell', 'table__body__cell') }}>
              {{- cell.content -}}
            </{{ cell.tag }}>
          {% endfor %}
        </tr>
      {% endfor %}
    </tbody>
  {% elseif empty %}
    <tbody class=\"table__body table__body--empty\">
      <tr class=\"table__row odd\">
        <td colspan=\"{{ header_columns }}\" class=\"table__cell empty message\">{{ empty }}</td>
      </tr>
    </tbody>
  {% endif %}
  {% if footer %}
    <tfoot class=\"table__foot\">
      {% for row in footer %}
        <tr{{ row.attributes.addClass('table__row') }}>
          {% for cell in row.cells %}
            <{{ cell.tag }}{{ cell.attributes.addClass('table__cell') }}>
              {{- cell.content -}}
            </{{ cell.tag }}>
          {% endfor %}
        </tr>
      {% endfor %}
    </tfoot>
  {% endif %}
</table>
";
    }
}
