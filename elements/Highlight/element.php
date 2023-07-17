<?php

namespace BreakdanceCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakdanceCustomElements\\Highlight",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class Highlight extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'SquareIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Highlight';
    }

    static function className()
    {
        return 'netnet-bce-highlight';
    }

    static function category()
    {
        return 'other';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return false;
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "settings",
        "settings",
        [c(
        "font_size",
        "Font size",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'pt', '1' => 'px', '2' => 'em', '3' => 'rem', '4' => '%', '5' => 'vw', '6' => 'vh'], 'defaultType' => 'px']],
        true,
        false,
        [],
      ), c(
        "border",
        "Border",
        [],
        ['type' => 'border_complex', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Code name font",
      "code_name_font",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Background",
      "background",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders_without_shadows",
      "Background border",
      "background_border",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "tooltip_design",
        "Tooltip Design",
        [c(
        "tooltip_font_color",
        "Tooltip Font color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "font_size",
        "Font Size",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "tooltip_bg_color",
        "Tooltip bg color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Tooltip padding",
      "tooltip_padding",
       ['type' => 'popout']
     ), c(
        "button_icon",
        "Button icon",
        [],
        ['type' => 'icon', 'layout' => 'vertical'],
        false,
        true,
        [],
      ), c(
        "button_icon_size",
        "Button icon size",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px'], 'defaultType' => 'px'], 'rangeOptions' => ['min' => 20, 'max' => 60, 'step' => 2]],
        false,
        false,
        [],
      ), c(
        "button_icon_color",
        "Button icon color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "button_bg_color",
        "Button bg color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "button_size",
        "Button size",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'px'], 'defaultType' => 'px'], 'rangeOptions' => ['min' => 20, 'max' => 60, 'step' => 2]],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      )];
    }

    static function contentControls()
    {
        return [c(
        "code",
        "Code",
        [c(
        "code_name",
        "code-name",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "code_here",
        "code-here",
        [],
        ['type' => 'code', 'layout' => 'vertical', 'codeOptions' => ['language' => 'css']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "tooltip",
        "Tooltip",
        [c(
        "tooltip_text",
        "Tooltip text",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'placeholder' => 'Copy is done..'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/highlight-js@11/highlight.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/clipboard@2/clipboard.min.js'],'title' => 'higlightjs','inlineStyles' => ['.code-box-copy {
  position: relative;
}
.code-box-copy pre {
    margin: 0px;
}
.header {
  display: grid;
  height: 24px;
  align-items: center;
  padding: 0 16px;
  grid-gap: 12px;
  grid-template-columns: 45px 1fr 45px;
  background-color:#23241f;
  padding-top:15px;
  border-radius: 10px 10px 0px 0px;
}
.dots {
  display: flex;
  gap: 6px;
}
.dot {
  width: 12px;
  height: 12px;
  border-radius: 6px;
  background-color: hsl(0deg 0% 100% / 20%);
}
.cst-code-name {
  text-align: center;
  color: #FFFFFF4D;
  letter-spacing: 0.50px;
  font-size:12px;
  font-weight:200;
}
.copybtn {
  opacity: 0;
  position: absolute;
  top: 11px;
  right: 11px;
  width: 30px;
  height: 30px;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  color: #333;
  border-radius: 4px;
  cursor: pointer;
}

.code-box-copy:hover .copybtn {
  opacity: 1;
}

/* Tooltip css */
#custom-tooltip {
  	visibility:hidden;
    right: 50px;
    top: 11px;
    padding: 7px 12px;
    background-color: #2f8714df;
    border-radius: 4px;
    color: #fff;
    position: absolute;
}
/*style*/
pre code.hljs{display:block;overflow-x:auto;padding:1em}code.hljs{padding:3px 5px}.hljs{background:#23241f;color:#f8f8f2}.hljs-subst,.hljs-tag{color:#f8f8f2}.hljs-emphasis,.hljs-strong{color:#a8a8a2}.hljs-bullet,.hljs-link,.hljs-literal,.hljs-number,.hljs-quote,.hljs-regexp{color:#ae81ff}.hljs-code,.hljs-section,.hljs-selector-class,.hljs-title{color:#a6e22e}.hljs-strong{font-weight:700}.hljs-emphasis{font-style:italic}.hljs-attr,.hljs-keyword,.hljs-name,.hljs-selector-tag{color:#f92672}.hljs-attribute,.hljs-symbol{color:#66d9ef}.hljs-class .hljs-title,.hljs-params,.hljs-title.class_{color:#f8f8f2}.hljs-addition,.hljs-built_in,.hljs-selector-attr,.hljs-selector-id,.hljs-selector-pseudo,.hljs-string,.hljs-template-variable,.hljs-type,.hljs-variable{color:#e6db74}.hljs-comment,.hljs-deletion,.hljs-meta{color:#75715e}
'],'inlineScripts' => ['hljs.highlightAll();
new ClipboardJS(\'.copybtn\', {
    target: function(trigger) {
        return trigger.nextElementSibling;
    }
});

var buttons = document.querySelectorAll(\'.copybtn\');
buttons.forEach(function(button) {
  button.addEventListener(\'click\', function() {
    var tooltip = this.previousElementSibling;
    tooltip.style.visibility = \'visible\';
    setTimeout(function() {
      tooltip.style.visibility = \'hidden\';
    }, 2000);
  });
});'],],];
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return false;
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '1' => ['accepts' => 'string', 'path' => 'content.code.content.text'], '2' => ['accepts' => 'string', 'path' => 'content.code.content.link.url'], '3' => ['accepts' => 'string', 'path' => 'content.code.code_here'], '4' => ['accepts' => 'string', 'path' => 'design.settings.content.text'], '5' => ['accepts' => 'string', 'path' => 'design.settings.content.link.url'], '6' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '7' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '8' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '9' => ['accepts' => 'image_url', 'path' => 'design.settings.background.layers[].image']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['content.code.styles.styles.size.full_width_at', 'content.code.styles.styles', 'design.settings.background.image', 'design.settings.background.overlay.image', 'design.settings.background.image_settings.unset_image_at', 'design.settings.background.image_settings.size', 'design.settings.background.image_settings.height', 'design.settings.background.image_settings.repeat', 'design.settings.background.image_settings.position', 'design.settings.background.image_settings.left', 'design.settings.background.image_settings.top', 'design.settings.background.image_settings.attachment', 'design.settings.background.image_settings.custom_position', 'design.settings.background.image_settings.width', 'design.settings.background.overlay.image_settings.custom_position', 'design.settings.background.image_size', 'design.settings.background.overlay.image_size', 'design.settings.background.overlay.type', 'design.settings.background.design.layout.horizontal.vertical_at', 'design.settings.background.image_settings', 'design.settings.background.type'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
