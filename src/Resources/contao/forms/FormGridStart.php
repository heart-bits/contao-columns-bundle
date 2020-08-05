<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Heartbits\ContaoGrid;

use Contao\System;

/**
 * Front end content element "accordion" (wrapper start).
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class FormGridStart extends \Widget
{
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
                $GLOBALS['TL_LANG']['tl_form_field']['fields']['form_cell_small'][0],
                $GLOBALS['TL_LANG']['tl_form_field']['cell_sizes'][$this->form_cell_small],
                $GLOBALS['TL_LANG']['tl_form_field']['fields']['form_cell_medium'][0],
                $GLOBALS['TL_LANG']['tl_form_field']['cell_sizes'][$this->form_cell_medium],
                $GLOBALS['TL_LANG']['tl_form_field']['fields']['form_cell_large'][0],
                $GLOBALS['TL_LANG']['tl_form_field']['cell_sizes'][$this->form_cell_large]
            );
        } else {
            $parameterIsDefined = System::getContainer()->hasParameter('use_grid_stylesheets');
            if ($parameterIsDefined) {
                $parameterIsTrue = System::getContainer()->getParameter('use_grid_stylesheets');
            }
            if (!$parameterIsDefined || $parameterIsTrue) {
                $GLOBALS['TL_CSS'][] = 'bundles/heartbitscontaogrid/css/grid.min.css';
            }

            $strExpanded = '';
            if (!$this->expanded_switch) {
                $strExpanded = ' full';
            }

            $strCollapse = '';
            if ($this->collapse_switch) {
                $strCollapse = ' grid-padding-x';
            }

            $strCollapseY = '';
            if ($this->collapseY_switch) {
                $strCollapseY = ' grid-padding-y';
            }

            $strStyle = '';
            if ($this->style) {
                $strStyle = ' style="' . $this->style . '"';
            }

            $strColumnSmall = '';
            if ($this->form_cell_small) {
                $strColumnSmall = ' small-' . $this->form_cell_small;
            }

            $strColumnMedium = '';
            if ($this->form_cell_medium) {
                $strColumnMedium = ' medium-' . $this->form_cell_medium;
            }

            $strColumnLarge = '';
            if ($this->form_cell_large) {
                $strColumnLarge = ' large-' . $this->form_cell_large;
            }

            return sprintf('<div class="grid-container%s"><div class="ce_gridStart%s grid-x%s%s"%s%s><div class="ce_gridCell%s%s%s cell">',
                $strExpanded,
                $this->class,
                $strCollapse,
                $strCollapseY,
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
