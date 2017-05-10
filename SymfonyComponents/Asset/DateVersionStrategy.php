<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 30.01.17
 * Time: 0:10
 */

namespace SymfonyComponents\Asset;


use Symfony\Component\Asset\VersionStrategy\VersionStrategyInterface;

class DateVersionStrategy implements VersionStrategyInterface
{
    private $version;

    public function __construct()
    {
        $this->version = date('Ymd');
    }

    public function getVersion($path)
    {
        return $this->version;
    }

    public function applyVersion($path)
    {
        return sprintf('%s?v=%s', $path, $this->getVersion($path));
    }
}