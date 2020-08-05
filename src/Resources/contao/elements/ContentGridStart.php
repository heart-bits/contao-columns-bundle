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
class ContentGridStart extends \Contao\ContentElement
{
    /**
     * @var bool
     */
    private $useColumnsStylesheets;

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_gridStart';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->Template = new \BackendTemplate('be_hb_grid');
            $this->Template->element_cell_small = $this->element_cell_small;
            $this->Template->element_cell_medium = $this->element_cell_medium;
            $this->Template->element_cell_large = $this->element_cell_large;
        } else {
            $parameterIsDefined = System::getContainer()->hasParameter('use_grid_stylesheets');
            if ($parameterIsDefined) {
                $parameterIsTrue = System::getContainer()->getParameter('use_grid_stylesheets');
            }
            if (!$parameterIsDefined || $parameterIsTrue) {
                $GLOBALS['TL_CSS'][] = 'bundles/heartbitscontaogrid/css/grid.min.css';
            }
        }
    }
}
