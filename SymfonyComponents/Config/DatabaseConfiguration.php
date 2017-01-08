<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 08.01.17
 * Time: 16:44
 */

namespace SymfonyComponents\Config;


use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class DatabaseConfiguration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('database');

        $rootNode
            ->children()
                ->booleanNode('auto_connect')
                    ->defaultTrue()
                ->end()
                ->scalarNode('default_connection')
                    ->defaultValue('default')
                ->end()
            ->end()
        ;

        $rootNode
            ->children()
                ->integerNode('positive_value')
                ->min(0)
            ->end()
            ->floatNode('big_value')
                ->max(5E45)
            ->end()
            ->integerNode('value_inside_a_range')
                ->min(-50)->max(50)
            ->end()
            ->end()
        ;

        $rootNode
            ->children()
                ->enumNode('gender')
                ->values(array('male', 'female'))
                ->end()
            ->end()
        ;

        $rootNode
            ->children()
                ->arrayNode('connection')
                    ->children()
                    ->scalarNode('driver')
                        ->isRequired()
                        ->cannotBeEmpty()
                    ->end()
                    ->scalarNode('host')
                        ->defaultValue('localhost')
                    ->end()
                    ->scalarNode('username')->end()
                    ->scalarNode('password')->end()
                    ->booleanNode('memory')
                        ->defaultFalse()
                    ->end()
                ->end()
                ->append($this->addParametersNode())
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }

    public function addParametersNode()
    {
        $builder = new TreeBuilder();
        $node = $builder->root('parameters');

        $node
            ->isRequired()
            ->requiresAtLeastOneElement()
            ->useAttributeAsKey('name')
            ->prototype('array')
            ->children()
            ->scalarNode('value')->isRequired()->end()
            ->end()
            ->end()
        ;

        return $node;
    }
}