<?php

/**
 * @package    contao-rows
 * @author     heart-bits <hi@heart-bits.com>
 * @copyright  2017 heart-bits Sascha Wustmann. All rights reserved.
 * @filesource
 *
 */

namespace Heartbits\Contao\Rows\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Heartbits\Contao\Rows\HeartbitsContaoRowsBundle;

/**
 * Class Plugin.
 *
 * @package ContaoManager
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(HeartbitsContaoRowsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['rows']),
        ];
    }
}
