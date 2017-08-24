<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Sascha Wustmann 2014
 * @package    contao-rows
 * @license    GNU/LGPL
 * @filesource
 */

 /**
  * Content elements
  */
 $GLOBALS['TL_CTE']['row'] = array
 (
	'rowStart'  => 'ContentRowStart',
    'rowPart'   => 'ContentRowPart',
	'rowStop'   => 'ContentRowStop'
 );

 /**
  * Wrapper elements
  */

 // Push new start Elements into existing array
 array_push(
  $GLOBALS['TL_WRAPPERS']['start'], 'rowStart'
 );

 // Push new stop Elements into existing array
 array_push(
  $GLOBALS['TL_WRAPPERS']['stop'], 'rowStop'
 );

 // Push new stop Elements into existing array
 array_push(
 $GLOBALS['TL_WRAPPERS']['separator'], 'rowPart'
 );
