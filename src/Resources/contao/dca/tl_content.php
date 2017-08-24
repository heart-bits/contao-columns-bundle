<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Sascha Wustmann 2014
 * @package    AnimateElements
 * @license    GNU/LGPL
 * @filesource
 */


 $GLOBALS['TL_DCA']['tl_content']['palettes']['rowStart'] = '{type_legend},type;{column_size:hide},element_column_small,element_column_medium,element_column_large,column_size,collapse_switch,column_push_pull,column_push_breakpoint,pull_push_size;{background_color},background_color_select,background_style;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop;';
 $GLOBALS['TL_DCA']['tl_content']['palettes']['rowPart'] = '{type_legend},type;{column_size:hide},element_column_small,element_column_medium,element_column_large,column_push_pull,column_push_breakpoint,pull_push_size;{background_color},background_color_select,background_style;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop;';
 $GLOBALS['TL_DCA']['tl_content']['palettes']['rowStop']  = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop';

// Rows

$GLOBALS['TL_DCA']['tl_content']['fields']['collapse_switch'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['collapse_switch'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr'),
	'sql'                     => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['element_column_small'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['element_column_small'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_content']['column_sizes'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(2) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['element_column_medium'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['element_column_medium'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_content']['column_sizes'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(2) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['element_column_large'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['element_column_large'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_content']['column_sizes'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(2) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['column_size'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['column_size'],
	'exclude'                 => true,
	'inputType'               => 'select',
  'options'                 => array('small', 'large'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_content']['row_heights'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['background_color_select'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['background_color_select'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('white', 'light-gray', 'dark-gray', 'black', 'gold'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_content']['colors'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['background_style'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['background_style'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('light', 'dark'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_content']['background_styles'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fullwidth'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['fullwidth'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['column_push_pull'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['column-push-pull'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('pull', 'push'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_content']['push-pull'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'clr'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['column_push_breakpoint'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['pull-push-breakpoint'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('small', 'medium', 'large'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_content']['breakpoint'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['pull_push_size'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fields']['pull-push-size'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'),
  'reference'               => &$GLOBALS['TL_LANG']['tl_content']['column_sizes'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(2) NOT NULL default ''"
);
