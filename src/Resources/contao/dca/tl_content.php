<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Sascha Wustmann 2019
 * @package    contao-columns
 * @license    GNU/LGPL
 * @filesource
 */


$GLOBALS['TL_DCA']['tl_content']['palettes']['gridStart'] = '{type_legend},type;{cell_size},element_cell_small,element_cell_medium,element_cell_large,collapse_switch,collapseY_switch,expanded_switch;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['gridCell'] = '{type_legend},type;{cell_size},element_cell_small,element_cell_medium,element_cell_large;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['gridStop'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop';

// Rows

$GLOBALS['TL_DCA']['tl_content']['fields']['collapse_switch'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['fields']['collapse_switch'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50 clr'
    ),
    'sql' => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['collapseY_switch'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['fields']['collapseY_switch'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50'
    ),
    'sql' => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['expanded_switch'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['fields']['expanded_switch'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50'
    ),
    'sql' => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['element_cell_small'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['fields']['element_cell_small'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        'auto',
        'shrink'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['cell_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(12) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['element_cell_medium'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['fields']['element_cell_medium'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        'auto',
        'shrink'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['cell_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(12) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['element_cell_large'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['fields']['element_cell_large'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        'auto',
        'shrink'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['cell_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(12) NOT NULL default ''"
);
