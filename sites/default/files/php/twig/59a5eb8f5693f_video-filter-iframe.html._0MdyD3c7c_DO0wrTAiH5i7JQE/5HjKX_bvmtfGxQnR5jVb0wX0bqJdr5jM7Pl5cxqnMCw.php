<?php

/* modules/video_filter/templates/video-filter-iframe.html.twig */
class __TwigTemplate_f213ec62adfcf7892b93c3eb628d713d0c7c6b47ef4d8d482724682d29e323aa extends Twig_Template
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
        $tags = array("for" => 8);
        $filters = array("join" => 8);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
                array('join'),
                array()
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

        // line 7
        echo "<div class=\"video-filter\">
  <iframe src=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "iframe", array()), "src", array()), "html", null, true));
        echo "\" width=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width", array()), "html", null, true));
        echo "\" height=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height", array()), "html", null, true));
        echo "\" class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "classes", array()), " "), "html", null, true));
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "iframe", array()), "properties", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
            echo "=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["value"], "html", null, true));
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " frameborder=\"0\"></iframe>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/video_filter/templates/video-filter-iframe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Video Filter (HTML5).
 */
#}
<div class=\"video-filter\">
  <iframe src=\"{{ video.iframe.src }}\" width=\"{{ video.width }}\" height=\"{{ video.height }}\" class=\"{{ video.classes|join(' ') }}\"{% for key, value in video.iframe.properties %} {{ key }}=\"{{ value }}\"{% endfor %} frameborder=\"0\"></iframe>
</div>
";
    }
}
