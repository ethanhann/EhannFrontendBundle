<?php

namespace Ehann\FrontendBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('ehann_frontend');

        /**
         * Config values:
         * - ehann_frontend.default_layout - default layout filename to use for all application bundles using frontend
         */

        $rootNode
            ->children()
                ->scalarNode('default_layout')
                    ->defaultValue('EhannFrontendBundle:layouts:bootstrap.html.twig')
                    ->treatNullLike('EhannFrontendBundle:layouts:bootstrap.html.twig')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
