<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 29.01.17
 * Time: 23:58
 */

namespace SymfonyComponents\Asset;

use Symfony\Component\Asset\Context\RequestStackContext;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\Packages;
use Symfony\Component\Asset\PathPackage;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class PackagesTest extends TestCase
{
    // http://symfony.com/doc/current/components/asset.html
    public function testPackages()
    {
        $package = new Package(new EmptyVersionStrategy());
        $this->assertEquals('/image.png', $package->getUrl('/image.png'));
    }

    public function testVersioned()
    {
        $package = new Package(new StaticVersionStrategy('v1'));

        $this->assertEquals('/image.png?v1', $package->getUrl('/image.png'));

        // put the 'version' word before the version value
        $package = new Package(new StaticVersionStrategy('v1', '%s?version=%s'));

        $this->assertEquals('/image.png?version=v1', $package->getUrl('/image.png'));

        // put the asset version before its path
        $package = new Package(new StaticVersionStrategy('v1', '%2$s/%1$s'));

        $this->assertEquals('/v1/image.png', $package->getUrl('/image.png'));
    }

    public function testMyVersion()
    {
        $package = new Package(new DateVersionStrategy('v1'));

        $this->assertEquals('/image.png?v=20170130', $package->getUrl('/image.png'));
    }

    public function testGrouped()
    {
        $package = new PathPackage('/static/images', new StaticVersionStrategy('v1'));

        $this->assertEquals('/static/images/image.png?v1', $package->getUrl('/image.png'));
    }

    public function testRequest()
    {
        $bootpath = '/opt/php-zts/htdocs';
        $bootstrap = 'index.php';
        $bootstrapped = sprintf("/%s", $bootstrap);
        $request = new Request(
            [],
            [],
            [],
            [],
            [],
            array
            (
                'HTTP_HOST' => 'localhost',
                'HTTP_CONNECTION' => 'keep-alive',
                'HTTP_ACCEPT' => '...',
                'HTTP_USER_AGENT' => '...',
                'HTTP_ACCEPT_ENCODING' => 'gzip,deflate,sdch',
                'HTTP_ACCEPT_LANGUAGE' => 'en-US,en;q=0.8',
                'HTTP_COOKIE' => '...',
                'PATH' => '/usr/local/bin:/usr/bin:/bin',
                'SERVER_SIGNATURE' => '...',
                'SERVER_SOFTWARE' => '...',
                'SERVER_NAME' => 'localhost',
                'SERVER_ADDR' => '127.0.0.1',
                'SERVER_PORT' => '80',
                'REMOTE_ADDR' => '127.0.0.1',
                'DOCUMENT_ROOT' => $bootpath,
                'REQUEST_SCHEME' => 'http',
                'CONTEXT_PREFIX' => '',
                'CONTEXT_DOCUMENT_ROOT' => $bootpath,
                'SERVER_ADMIN' => '[no address given]',
                'SCRIPT_FILENAME' => sprintf(
                    '%s/%s', $bootpath, $bootstrap
                ),
                'REMOTE_PORT' => '47931',
                'GATEWAY_INTERFACE' => 'CGI/1.1',
                'SERVER_PROTOCOL' => 'HTTP/1.1',
                'REQUEST_METHOD' => 'GET',
                'QUERY_STRING' => '',
                'REQUEST_URI' => $bootstrapped,
                'SCRIPT_NAME' => $bootstrapped,
                'PHP_SELF' => $bootstrapped,
                'REQUEST_TIME' => time(),
            )
        );
        $requestStack = new RequestStack();
        $requestStack->push($request);

        $package = new PathPackage(
            '/static/images',
            new StaticVersionStrategy('v1'),
            new RequestStackContext($requestStack)
        );

        $this->assertEquals('/static/images/logo.png?v1', $package->getUrl('/logo.png'));
    }

    public function testAbsoluteAssets()
    {
        $package = new UrlPackage(
            'http://static.example.com/images/',
            new StaticVersionStrategy('v1')
        );

        $this->assertEquals('http://static.example.com/images/logo.png?v1', $package->getUrl('/logo.png'));
    }

    public function testCDN()
    {
        $urls = array(
            '//static1.example.com/images/',
            '//static2.example.com/images/',
        );
        $package = new UrlPackage($urls, new StaticVersionStrategy('v1'));

        $this->assertEquals('//static2.example.com/images/logo.png?v1', $package->getUrl('/logo.png'));

        $this->assertEquals('//static1.example.com/images/icon.png?v1', $package->getUrl('/icon.png'));

        $this->assertEquals('//static2.example.com/images/logo2.png?v1', $package->getUrl('/logo2.png'));

        $this->assertEquals('//static2.example.com/images/icon2.png?v1', $package->getUrl('/icon2.png'));
    }

    public function testNamedPackages()
    {
        $versionStrategy = new StaticVersionStrategy('v1');

        $defaultPackage = new Package($versionStrategy);

        $namedPackages = array(
            'img' => new UrlPackage('http://img.example.com/', $versionStrategy),
            'doc' => new PathPackage('/somewhere/deep/for/documents', $versionStrategy),
        );

        $packages = new Packages($defaultPackage, $namedPackages);

        $this->assertEquals('/main.css?v1', $packages->getUrl('/main.css'));

        $this->assertEquals('http://img.example.com/logo.png?v1', $packages->getUrl('/logo.png', 'img'));

        $this->assertEquals('/somewhere/deep/for/documents/resume.pdf?v1', $packages->getUrl('/resume.pdf', 'doc'));
    }
}