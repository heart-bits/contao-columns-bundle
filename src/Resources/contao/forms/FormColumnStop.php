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
class FormColumnStop extends \Contao\Widget
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'form_rowStop';

    /**
     * Do not validate
     */
    public function validate()
    {
        return;
    }

    /**
     * Generate the form field
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new \BackendTemplate($this->strTemplate);
        } else {
            return '';
        }
    }
}
