<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Sascha Wustmann 2019
 * @package    contao-columns
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['row'] = array
(
    'rowStart' => 'Heartbits\ContaoColumns\ContentColumnStart',
    'rowPart' => 'Heartbits\ContaoColumns\ContentColumnPart',
    'rowStop' => 'Heartbits\ContaoColumns\ContentColumnStop'
);

/**
 * Front end form fields
 */
$GLOBALS['TL_FFL']['rowStart'] = 'FormColumnStart';
$GLOBALS['TL_FFL']['rowPart'] = 'FormColumnPart';
$GLOBALS['TL_FFL']['rowStop'] = 'FormColumnStop';

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
