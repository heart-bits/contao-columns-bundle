<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Heartbits\ContaoColumns;

use Contao\System;

/**
 * Front end content element "accordion" (wrapper start).
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class FormColumnStart extends \Widget
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'form_rowStart';

    /**
     * Do not validate
     */
    public function validate() {}

    /**
     * Parse the template file and return it as string
     *
     * @param array $arrAttributes An optional attributes array
     *
     * @return string The template markup
     */
    public function parse($arrAttributes=null)
    {
        if (TL_MODE == 'BE') {
            return sprintf('<strong>%s:</strong> %s | <strong>%s:</strong> %s | <strong>%s:</strong> %s',
                $GLOBALS['TL_LANG']['tl_form_field']['fields']['form_column_small'][0],
                $GLOBALS['TL_LANG']['tl_form_field']['column_sizes'][$this->form_column_small],
                $GLOBALS['TL_LANG']['tl_form_field']['fields']['form_column_medium'][0],
                $GLOBALS['TL_LANG']['tl_form_field']['column_sizes'][$this->form_column_medium],
                $GLOBALS['TL_LANG']['tl_form_field']['fields']['form_column_large'][0],
                $GLOBALS['TL_LANG']['tl_form_field']['column_sizes'][$this->form_column_large]
            );
        } else {
            $parameterIsDefined = System::getContainer()->hasParameter('use_columns_stylesheets');
            if ($parameterIsDefined) {
                $parameterIsTrue = System::getContainer()->getParameter('use_columns_stylesheets');
            }
            if (!$parameterIsDefined || $parameterIsTrue) {
                $GLOBALS['TL_CSS'][] = 'bundles/heartbitscontaocolumns/css/grid.min.css';
            }

            $strCollapse = '';
            if (!$this->collapse_switch) {
                $strCollapse = ' collapse padding-none';
            }

            $strExpanded = '';
            if (!$this->expanded_switch) {
                $strExpanded = ' expanded';
            }

            $strStyle = '';
            if ($this->style) {
                $strStyle = ' style="' . $this->style . '"';
            }

            $strColumnSmall = '';
            if ($this->form_column_small) {
                $strColumnSmall = ' small-' . $this->form_column_small;
            }

            $strColumnMedium = '';
            if ($this->form_column_medium) {
                $strColumnMedium = ' medium-' . $this->form_column_medium;
            }

            $strColumnLarge = '';
            if ($this->form_column_large) {
                $strColumnLarge = ' large-' . $this->form_column_large;
            }

            return sprintf('<div class="ce_rowStart%s row%s%s block"%s%s><div class="ce_rowPart%s%s%s columns">',
                $this->class,
                $strCollapse,
                $strExpanded,
                $this->cssID,
                $strStyle,
                $strColumnSmall,
                $strColumnMedium,
                $strColumnLarge
            );
        }
    }

    /**
     * Generate the form field
     */
    public function generate() {
        return;
    }
}
