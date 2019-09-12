<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Heartbits\ContaoColumns;


/**
 * Front end content element "accordion" (wrapper stop).
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class ContentColumnStop extends \Contao\ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_rowStop';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new \BackendTemplate($this->strTemplate);
        }
    }
}
