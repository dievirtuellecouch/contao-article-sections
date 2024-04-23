<?php

namespace DVC\ArticleSections\EventListener\DataContainer;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\DataContainer;

class ArticleCallbackListener
{
    public function __construct(
        private array $configuration,
    ) {
    }

    #[AsCallback(
        table: 'tl_article',
        target: 'fields.layoutSpace.options'
    )]
    public function getLayoutSpaceOptions(?DataContainer $dataContainer): array
    {
        return $this->configuration['spaces'] ?? [];
    }

    #[AsCallback(
        table: 'tl_article',
        target: 'fields.layoutBackground.options'
    )]
    public function getLayoutBackgroundOptions(?DataContainer $dataContainer): array
    {
        return $this->configuration['backgrounds'] ?? [];
    }

    #[AsCallback(
        table: 'tl_article',
        target: 'fields.layoutBackgroundDuo.options'
    )]
    public function getLayoutDuoBackgroundOptions(?DataContainer $dataContainer): array
    {
        return $this->configuration['duo_backgrounds'] ?? [];
    }

    #[AsCallback(
        table: 'tl_article',
        target: 'fields.layoutWidth.options'
    )]
    public function getLayoutWidthOptions(?DataContainer $dataContainer): array
    {
        return $this->configuration['widths'] ?? [];
    }
}
