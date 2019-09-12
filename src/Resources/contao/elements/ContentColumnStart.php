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
class ContentColumnStart extends \Contao\ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_rowStart';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->Template = new \BackendTemplate('be_hb_rows');
            $this->Template->element_column_small = $this->element_column_small;
            $this->Template->element_column_medium = $this->element_column_medium;
            $this->Template->element_column_large = $this->element_column_large;
        } else {
            $parameterIsDefined = System::getContainer()->hasParameter('use_columns_stylesheets');
            $parameterIsTrue = System::getContainer()->getParameter('use_columns_stylesheets');
            if ($parameterIsDefined && $parameterIsTrue) {
                $GLOBALS['TL_CSS'][] = 'bundles/heartbitscontaocolumns/css/grid.min.css';
            }
        }
    }
}
