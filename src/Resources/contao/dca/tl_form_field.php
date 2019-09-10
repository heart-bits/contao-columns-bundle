<?php

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['rowStart'] = '{type_legend},type;{column_size},form_column_small,form_column_medium,form_column_large,column_size,collapse_switch,expanded_switch,column_push_pull,column_push_breakpoint,pull_push_size;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['rowPart'] = '{type_legend},type;{column_size},form_column_small,form_column_medium,form_column_large,column_push_pull,column_push_breakpoint,pull_push_size;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['rowStop'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;';

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

$GLOBALS['TL_DCA']['tl_form_field']['fields']['expanded_switch'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['expanded_switch'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50'
    ),
    'sql' => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['form_column_small'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['form_column_small'],
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
        '12'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['column_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(2) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['form_column_medium'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['form_column_medium'],
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
        '12'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['column_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(2) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['form_column_large'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['form_column_large'],
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
        '12'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['column_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(2) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['fullwidth'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['fullwidth'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50'
    ),
    'sql' => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['column_push_pull'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['column-push-pull'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        'pull',
        'push'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['push-pull'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'clr'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['column_push_breakpoint'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['pull-push-breakpoint'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => array(
        'small',
        'medium',
        'large'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['breakpoint'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['pull_push_size'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['fields']['pull-push-size'],
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
        '12'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['column_sizes'],
    'eval' => array(
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(2) NOT NULL default ''"
);
