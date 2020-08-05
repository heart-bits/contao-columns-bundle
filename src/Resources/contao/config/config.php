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
$GLOBALS['TL_CTE']['grid'] = array
(
    'gridStart' => 'Heartbits\ContaoGrid\ContentGridStart',
    'gridCell' => 'Heartbits\ContaoGrid\ContentGridCell',
    'gridStop' => 'Heartbits\ContaoGrid\ContentGridStop'
);

/**
 * Front end form fields
 */
$GLOBALS['TL_FFL']['gridStart'] = 'Heartbits\ContaoGrid\FormGridStart';
$GLOBALS['TL_FFL']['gridCell'] = 'Heartbits\ContaoGrid\FormGridCell';
$GLOBALS['TL_FFL']['gridStop'] = 'Heartbits\ContaoGrid\FormGridStop';

/**
 * Wrapper elements
 */

// Push new start Elements into existing array
array_push(
    $GLOBALS['TL_WRAPPERS']['start'], 'gridStart'
);

// Push new stop Elements into existing array
array_push(
    $GLOBALS['TL_WRAPPERS']['stop'], 'gridStop'
);

// Push new stop Elements into existing array
array_push(
    $GLOBALS['TL_WRAPPERS']['separator'], 'gridCell'
);
