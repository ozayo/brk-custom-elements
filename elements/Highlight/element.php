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
        [getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
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
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/highlight-js@11/highlight.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/clipboard@2/clipboard.min.js'],'title' => 'higlightjs','inlineStyles' => ['.cst-code-name {
    text-align: left;
    margin-bottom: -20px;
    padding-left: 10px;
    display: block;
    color: #a5a5a5;
}
.cst-code pre {
    margin-top: 0px;
}

pre code.hljs {
    display: block;
    overflow-x: auto;
    padding: 2em;
    border-radius: 10px;
}

code.hljs {
    padding: 3px 5px
}

.hljs {
    color: #abb2bf;
    background: #282c34
}

.hljs-comment,.hljs-quote {
    color: #5c6370;
    font-style: italic
}

.hljs-doctag,.hljs-formula,.hljs-keyword {
    color: #c678dd
}

.hljs-deletion,.hljs-name,.hljs-section,.hljs-selector-tag,.hljs-subst {
    color: #e06c75
}

.hljs-literal {
    color: #56b6c2
}

.hljs-addition,.hljs-attribute,.hljs-meta .hljs-string,.hljs-regexp,.hljs-string {
    color: #98c379
}

.hljs-attr,.hljs-number,.hljs-selector-attr,.hljs-selector-class,.hljs-selector-pseudo,.hljs-template-variable,.hljs-type,.hljs-variable {
    color: #d19a66
}

.hljs-bullet,.hljs-link,.hljs-meta,.hljs-selector-id,.hljs-symbol,.hljs-title {
    color: #61aeee
}

.hljs-built_in,.hljs-class .hljs-title,.hljs-title.class_ {
    color: #e6c07b
}

.hljs-emphasis {
    font-style: italic
}

.hljs-strong {
    font-weight: 700
}

.hljs-link {
    text-decoration: underline
}

'],'inlineScripts' => ['hljs.highlightAll();
new ClipboardJS(\'.copybtn\');'],],];
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
        return ['0' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '1' => ['accepts' => 'string', 'path' => 'content.code.content.text'], '2' => ['accepts' => 'string', 'path' => 'content.code.content.link.url'], '3' => ['accepts' => 'string', 'path' => 'content.code.code_here']];
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
        return ['content.code.styles.styles.size.full_width_at', 'content.code.styles.styles'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
