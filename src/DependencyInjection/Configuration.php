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
            ->children()
                ->arrayNode('spaces')
                    ->scalarPrototype()->end()
                ->end()
                ->arrayNode('backgrounds')
                    ->scalarPrototype()->end()
                ->end()
                ->arrayNode('duo_backgrounds')
                    ->scalarPrototype()->end()
                ->end()
                ->arrayNode('widths')
                    ->scalarPrototype()->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
