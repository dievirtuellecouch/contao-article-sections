<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_article']['fields']['isTextContainer'] = [
    'inputType' => 'checkbox',
    'eval' => [
        'isBoolean' => true,
        'tl_class' => 'clr w50'
    ],
    'sql' => [
        'type' => 'boolean',
        'default' => true,
    ],
];

$GLOBALS['TL_DCA']['tl_article']['fields']['layoutSpace'] = [
    'inputType' => 'select',
    'eval' => [
        'includeBlankOption' => true,
        'blankOptionLabel' => 'Standard',
        'tl_class' => 'clr w50'
    ],
    'sql' => [
        'type' => 'string',
        'length' => '32',
        'default' => null,
        'notnull' => false,
    ],
];

$GLOBALS['TL_DCA']['tl_article']['fields']['layoutBackground'] = [
    'inputType' => 'select',
    'eval' => [
        'includeBlankOption' => true,
        'blankOptionLabel' => 'Standard',
        'tl_class' => 'w50'
    ],
    'sql' => [
        'type' => 'string',
        'length' => '32',
        'default' => null,
        'notnull' => false,
    ],
];

$GLOBALS['TL_DCA']['tl_article']['fields']['layoutBackgroundDuo'] = [
    'inputType' => 'select',
    'eval' => [
        'includeBlankOption' => true,
        'blankOptionLabel' => '–',
        'tl_class' => 'w50'
    ],
    'sql' => [
        'type' => 'string',
        'length' => '32',
        'default' => null,
        'notnull' => false,
    ],
];

$GLOBALS['TL_DCA']['tl_article']['fields']['layoutWidth'] = [
    'inputType' => 'select',
    'eval' => [
        'includeBlankOption' => true,
        'tl_class' => 'clr w50'
    ],
    'sql' => [
        'type' => 'string',
        'length' => '32',
        'default' => null,
        'notnull' => false,
    ],
];

PaletteManipulator::create()
    ->addLegend('graphical_presentation_legend', 'template_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('layoutWidth', 'graphical_presentation_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('layoutSpace', 'graphical_presentation_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('layoutBackground', 'graphical_presentation_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('layoutBackgroundDuo', 'graphical_presentation_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('isTextContainer', 'graphical_presentation_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_article')
;
