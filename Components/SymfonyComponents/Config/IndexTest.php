<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 08.01.17
 * Time: 16:43
 */

namespace SymfonyComponents\Config;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Config\Definition\Processor;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function getP()
    {
        $configs = Yaml::parse(
            file_get_contents(__DIR__.'/config/config.yml')
        );

        $processor = new Processor();
        $configuration = new DatabaseConfiguration();

        $processedConfiguration = $processor->processConfiguration(
            $configuration,
            $configs
        );

        print_r($processedConfiguration);
    }
}