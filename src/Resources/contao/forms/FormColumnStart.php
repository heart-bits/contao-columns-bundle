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

        } else {
            $parameterIsDefined = System::getContainer()->hasParameter('use_columns_stylesheets');
            if ($parameterIsDefined) {
                $parameterIsTrue = System::getContainer()->getParameter('use_columns_stylesheets');
            }
            if (!$parameterIsDefined || $parameterIsTrue) {
                $GLOBALS['TL_CSS'][] = 'bundles/heartbitscontaocolumns/css/grid.min.css';
            }
        }

        return parent::parse($arrAttributes);
    }

    /**
     * Generate the form field
     */
    public function generate() {
        return '';
    }
}
