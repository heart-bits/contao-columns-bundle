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

            return sprintf('</div><div class="ce_rowPart%s%s%s%s columns"%s%s>',
                $this->class,
                $strColumnSmall,
                $strColumnMedium,
                $strColumnLarge,
                $this->cssID,
                $strStyle
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
