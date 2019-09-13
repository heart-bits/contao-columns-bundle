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
class FormColumnStop extends \Widget
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
     * Parse the template file and return it as string
     *
     * @param array $arrAttributes An optional attributes array
     *
     * @return string The template markup
     */
    public function parse($arrAttributes=null)
    {
        if (TL_MODE == 'BE') {
            return '';
        } else {
            return '</div></div>';
        }
    }

    /**
     * Generate the form field
     */
    public function generate() {
        return;
    }
}
