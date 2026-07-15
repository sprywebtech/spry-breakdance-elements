<?php

namespace SpryWebTechBreakdanceElements;

use function Breakdance\Elements\c;

\Breakdance\ElementStudio\registerElementForEditing(
    'SpryWebTechBreakdanceElements\\Flipbox',
    \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__)
);

class Flipbox extends \Breakdance\Elements\Element
{
    public static function uiIcon()
    {
        return 'SquareIcon';
    }

    public static function tag()
    {
        return 'div';
    }

    public static function tagOptions()
    {
        return [];
    }

    public static function tagControlPath()
    {
        return false;
    }

    public static function name()
    {
        return 'Flip Box';
    }

    public static function className()
    {
        return 'swt-bde-flip-box';
    }

    public static function category()
    {
        return 'other';
    }

    public static function badge()
    {
        return [
            'backgroundColor' => '#384959',
            'textColor' => '#ffffff',
            'label' => 'SWT',
        ];
    }

    public static function slug()
    {
        return get_class();
    }

    public static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    public static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    public static function defaultProperties()
    {
        return [
            'content' => [
                'front' => [
                    'eyebrow' => 'Featured Service',
                    'title' => 'Front Side',
                    'text' => 'Add a short introduction that invites visitors to reveal more details.',
                    'hint' => 'Hover or tap to flip',
                ],
                'back' => [
                    'eyebrow' => 'More Details',
                    'title' => 'Back Side',
                    'text' => 'Use this side for supporting information, benefits, or a clear next step.',
                    'link_text' => 'Learn More',
                    'link_url' => '/contact/',
                ],
                'accessibility' => [
                    'label' => 'Flip card. Hover, tap, or focus to reveal more information.',
                ],
            ],
            'design' => [
                'card' => [
                    'max_width' => ['number' => 440, 'unit' => 'px', 'style' => '440px'],
                    'min_height' => ['number' => 340, 'unit' => 'px', 'style' => '340px'],
                    'padding' => ['number' => 36, 'unit' => 'px', 'style' => '36px'],
                    'radius' => ['number' => 24, 'unit' => 'px', 'style' => '24px'],
                    'gap' => ['number' => 14, 'unit' => 'px', 'style' => '14px'],
                    'text_align' => 'center',
                    'shadow' => '0 20px 50px rgba(15, 23, 42, 0.18)',
                ],
                'front' => [
                    'background' => '#EAF3FB',
                    'eyebrow_color' => '#486B8A',
                    'heading_color' => '#20313F',
                    'text_color' => '#384959',
                ],
                'back' => [
                    'background' => '#384959',
                    'eyebrow_color' => '#BDDDFC',
                    'heading_color' => '#FFFFFF',
                    'text_color' => '#EAF3FB',
                ],
                'typography' => [
                    'eyebrow_size' => ['number' => 13, 'unit' => 'px', 'style' => '13px'],
                    'heading_size' => ['number' => 32, 'unit' => 'px', 'style' => '32px'],
                    'text_size' => ['number' => 17, 'unit' => 'px', 'style' => '17px'],
                ],
                'button' => [
                    'background' => '#FFFFFF',
                    'text_color' => '#384959',
                    'radius' => ['number' => 999, 'unit' => 'px', 'style' => '999px'],
                    'padding_y' => ['number' => 11, 'unit' => 'px', 'style' => '11px'],
                    'padding_x' => ['number' => 20, 'unit' => 'px', 'style' => '20px'],
                ],
                'motion' => [
                    'direction' => 'horizontal',
                    'duration' => 650,
                    'perspective' => 1200,
                ],
            ],
        ];
    }

    public static function defaultChildren()
    {
        return false;
    }

    public static function cssTemplate()
    {
        return file_get_contents(__DIR__ . '/css.twig');
    }

    public static function designControls()
    {
        return [
            c('card', 'Card', [
                c('max_width', 'Max Width', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                c('min_height', 'Minimum Height', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                c('padding', 'Inner Padding', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                c('radius', 'Corner Radius', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                c('gap', 'Content Gap', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                c('text_align', 'Text Alignment', [], [
                    'type' => 'dropdown',
                    'layout' => 'inline',
                    'items' => [
                        ['text' => 'Left', 'value' => 'left'],
                        ['text' => 'Center', 'value' => 'center'],
                        ['text' => 'Right', 'value' => 'right'],
                    ],
                ], false, false, []),
                c('shadow', 'Box Shadow', [], [
                    'type' => 'text',
                    'layout' => 'vertical',
                    'textOptions' => ['multiline' => false],
                ], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('front', 'Front Face', [
                c('background', 'Background', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                c('eyebrow_color', 'Eyebrow Color', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                c('heading_color', 'Heading Color', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                c('text_color', 'Text Color', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('back', 'Back Face', [
                c('background', 'Background', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                c('eyebrow_color', 'Eyebrow Color', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                c('heading_color', 'Heading Color', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                c('text_color', 'Text Color', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('typography', 'Typography', [
                c('eyebrow_size', 'Eyebrow Size', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                c('heading_size', 'Heading Size', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                c('text_size', 'Text Size', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('button', 'Button', [
                c('background', 'Background', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                c('text_color', 'Text Color', [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                c('radius', 'Corner Radius', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                c('padding_y', 'Vertical Padding', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                c('padding_x', 'Horizontal Padding', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('motion', 'Motion', [
                c('direction', 'Flip Direction', [], [
                    'type' => 'dropdown',
                    'layout' => 'inline',
                    'items' => [
                        ['text' => 'Horizontal', 'value' => 'horizontal'],
                        ['text' => 'Vertical', 'value' => 'vertical'],
                    ],
                ], false, false, []),
                c('duration', 'Duration (ms)', [], ['type' => 'number', 'layout' => 'inline'], false, false, []),
                c('perspective', 'Perspective', [], ['type' => 'number', 'layout' => 'inline'], false, false, []),
            ], ['type' => 'section'], false, false, []),
        ];
    }

    public static function contentControls()
    {
        return [
            c('front', 'Front Content', [
                c('eyebrow', 'Eyebrow', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('title', 'Title', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('text', 'Text', [], [
                    'type' => 'text',
                    'layout' => 'vertical',
                    'textOptions' => ['multiline' => true],
                ], false, false, []),
                c('hint', 'Interaction Hint', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section', 'layout' => 'vertical'], false, false, []),

            c('back', 'Back Content', [
                c('eyebrow', 'Eyebrow', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('title', 'Title', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('text', 'Text', [], [
                    'type' => 'text',
                    'layout' => 'vertical',
                    'textOptions' => ['multiline' => true],
                ], false, false, []),
                c('link_text', 'Button Text', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('link_url', 'Button URL', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section', 'layout' => 'vertical'], false, false, []),

            c('accessibility', 'Accessibility', [
                c('label', 'Card Label', [], [
                    'type' => 'text',
                    'layout' => 'vertical',
                    'textOptions' => ['multiline' => true],
                ], false, false, []),
            ], ['type' => 'section', 'layout' => 'vertical'], false, false, []),
        ];
    }

    public static function settingsControls()
    {
        return [];
    }

    public static function dependencies()
    {
        return false;
    }

    public static function settings()
    {
        return false;
    }

    public static function addPanelRules()
    {
        return false;
    }

    public static function actions()
    {
        return false;
    }

    public static function nestingRule()
    {
        return ['type' => 'final'];
    }

    public static function spacingBars()
    {
        return false;
    }

    public static function attributes()
    {
        return false;
    }

    public static function experimental()
    {
        return false;
    }

    public static function order()
    {
        return 10;
    }

    public static function dynamicPropertyPaths()
    {
        return false;
    }

    public static function additionalClasses()
    {
        return false;
    }

    public static function projectManagement()
    {
        return false;
    }

    public static function propertyPathsToWhitelistInFlatProps()
    {
        return false;
    }

    public static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
