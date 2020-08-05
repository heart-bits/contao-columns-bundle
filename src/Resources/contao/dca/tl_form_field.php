<?php

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['gridStart'] = '{type_legend},type;{column_size},form_cell_small,form_cell_medium,form_cell_large,collapse_switch,collapseY_switch,expanded_switch;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['gridCell'] = '{type_legend},type;{column_size},form_cell_small,form_cell_medium,form_cell_large;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['gridStop'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;';

// Rows

$GLOBALS['TL_DCA']['tl_form_field']['fields']['collapse_switch'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['collapse_switch'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50 clr'
    ),
    'sql' => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['collapseY_switch'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['collapseY_switch'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50'
    ),
    'sql' => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['expanded_switch'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['expanded_switch'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50'
    ),
    'sql' => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['form_cell_small'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['form_cell_small'],
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
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['cell_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(12) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['form_cell_medium'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['form_cell_medium'],
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
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['cell_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(12) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['form_cell_large'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['form_cell_large'],
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
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['cell_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(12) NOT NULL default ''"
);
