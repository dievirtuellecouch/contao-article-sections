<?php

namespace DVC\ArticleSections\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use DVC\ArticleSections\ArticleSectionsBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ArticleSectionsBundle::class)
                ->setLoadAfter([
                        ContaoCoreBundle::class,
                ]),
        ];
    }
}
