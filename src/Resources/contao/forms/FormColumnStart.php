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
 * Front end content element "accordion" (wrapper start).
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class FormColumnStart extends \Contao\Widget
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
     * Generate the form field
     */
    public function generate() {
        if (TL_MODE == 'BE') {
            $this->Template = new \BackendTemplate('be_hb_form_rows');
            return '';
        } else {
            return '';
        }
    }
}
