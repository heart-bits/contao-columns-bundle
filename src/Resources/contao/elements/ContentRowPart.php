<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Heartbits\Contao\Rows;


/**
 * Front end content element "accordion" (wrapper start).
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class ContentRowPart extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_rowPart';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'BE')
		{
			$this->Template 													= new \BackendTemplate('be_hb_rows');
			$this->Template->element_column_small 		= $this->element_column_small;
			$this->Template->element_column_medium 		= $this->element_column_medium;
			$this->Template->element_column_large 		= $this->element_column_large;
		}
	}
}
