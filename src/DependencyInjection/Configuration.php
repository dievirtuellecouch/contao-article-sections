<?php

namespace DVC\ArticleSections\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('article_sections');

        $treeBuilder->getRootNode()
            ->normalizeKeys(false)
            ->children()
                ->arrayNode('spaces')
                    ->normalizeKeys(false)
                    ->scalarPrototype()->end()
                ->end()
                ->arrayNode('backgrounds')
                    ->normalizeKeys(false)
                    ->scalarPrototype()->end()
                ->end()
                ->arrayNode('duo-backgrounds')
                    ->normalizeKeys(false)
                    ->scalarPrototype()->end()
                ->end()
                ->arrayNode('widths')
                    ->normalizeKeys(false)
                    ->scalarPrototype()->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
