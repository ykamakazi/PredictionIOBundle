<?php

namespace Ykamakazi\PredictionIOBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ykamakazi_prediction_io');

        $rootNode
            ->children()
                ->scalarNode('app_key')->isRequired()->end()
                ->scalarNode('api_url')->isRequired()->end()
                ->scalarNode('api_port')->isRequired()->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
