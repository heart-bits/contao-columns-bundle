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
class FormColumnPart extends \Widget
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'form_rowPart';

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
            $this->Template = new \BackendTemplate('be_hb_form_rows');
            return '';
        } else {
            return '';
        }
    }
}
