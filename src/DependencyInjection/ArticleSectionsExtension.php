<?php

namespace DVC\ArticleSections\DependencyInjection;

use DVC\ArticleSections\DependencyInjection\Configuration;
use DVC\ArticleSections\EventListener\DataContainer\ArticleCallbackListener;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Filesystem\Path;

class ArticleSectionsExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(Path::canonicalize(__DIR__ . '../../../config/')));
        $loader->load('services.yaml');

        $configuration = new Configuration();
        $processedConfiguration = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition(ArticleCallbackListener::class);
        $definition->setArgument('$configuration', $processedConfiguration ?? []);
    }
}
