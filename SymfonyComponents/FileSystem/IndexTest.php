<?php

namespace SymfonyComponents\FileSystem;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 07.01.17
 * Time: 21:04
 */
class Index extends TestCase
{
    private $work_dir = __DIR__.'/file';
    private $fs;

    public static function setUpBeforeClass()
    {
        $fs = new Filesystem();
        $fs->mirror(__DIR__.'/assets', __DIR__.'/file');
    }

    public static function tearDownAfterClass()
    {
        $fs = new Filesystem();
        $fs->remove(__DIR__.'/file');
    }

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->fs = $fs = new Filesystem();
        parent::__construct($name, $data, $dataName);
    }

    /**
     * @test
     */
    public function mkdir()
    {
        try {
            $dir = $this->work_dir.'/dir/'.mt_rand();
            $this->fs->mkdir($dir, 0700);
            $this->assertFileExists($dir);
        } catch (IOExceptionInterface $e) {
            echo "An error occurred while creating your directory at ".$e->getPath();
        }
        return $dir;
    }

    /**
     * @test
     * @depends mkdir
     */
    public function rename($dir)
    {
        $new_dir = $dir.'_test';

        // rename a file
        $this->fs->rename($dir, $new_dir);
        $this->assertFileExists($new_dir);

        return $new_dir;
    }

    /**
     * @test
     * @depends rename
     */
    public function remove($new_dir)
    {
        $this->fs->remove($new_dir); //array($new_dir)
        $this->assertFileNotExists($new_dir);
    }

    /**
     * @test
     */
    public function exists()
    {
        $dir = $this->fs->exists($this->work_dir.'/dir');
        $this->assertTrue($dir);

        $txt = $this->fs->exists(array($this->work_dir.'/dir/rabbit.txt', $this->work_dir.'/dir/bottle.txt'));
        $this->assertTrue($txt);

        // rabbit.jpg exists, bottle.png does not exists, return false
        $txt = $this->fs->exists(array($this->work_dir.'/dir/rabbit.txt', $this->work_dir.'/dir/bottle.png'));
        $this->assertFalse($txt);
    }

    /**
     * @test
     */
    public function copy()
    {
        $this->fs->copy($this->work_dir.'/dir/rabbit.txt', $this->work_dir.'/copy/copy-rabbit.txt', true);
        $this->assertFileExists($this->work_dir.'/copy/copy-rabbit.txt');
    }

    /**
     * @test
     */
    public function touch1()
    {
        // set modification time to the current timestamp
        $this->fs->touch($this->work_dir.'/dir/file.txt');
        $info = filemtime($this->work_dir.'/dir/file.txt');
        $this->assertEquals(time(), $info);
    }

    /**
     * @test
     */
    public function touch2()
    {
        // set modification time 10 seconds in the future
        $this->fs->touch($this->work_dir.'/dir/file.txt', time() + 10);
        $info = filemtime($this->work_dir.'/dir/file.txt');
        $this->assertEquals(time()+10, $info);

    }

    /**
     * @test
     */
    public function touch3()
    {
        // set access time 10 seconds in the past
        $this->fs->touch($this->work_dir.'/dir/file.txt', time() - 20, time() - 10);
        $info = filemtime($this->work_dir.'/dir/file.txt');
        $this->assertEquals(time() - 20, $info);

    }

    /**
     * @test
     */
    public function chown()
    {
        // set the owner of the lolcat video to www-data
        $this->fs->chown($this->work_dir.'/dir/chown/file.txt', 'kirill');

        $owner = fileowner($this->work_dir.'/dir/chown/file.txt');
        $this->assertEquals(1000, $owner);

        // change the owner of the video directory recursively
        $this->fs->chown($this->work_dir.'/dir/chown/', 'kirill', true);

        $owner = fileowner($this->work_dir.'/dir/chown/file.txt');
        $this->assertEquals(1000, $owner);
    }

    /**
     * @test
     */
    public function symlink()
    {
        // create a symbolic link
        $this->fs->symlink($this->work_dir.'/dir', $this->work_dir.'/link');
        // duplicate the source directory if the filesystem
        // does not support symbolic links
        //$fs->symlink('/path/to/source', '/path/to/destination', true);
        $this->assertFileExists($this->work_dir.'/link');
    }

    /**
     * @test
     */
    public function makePathRelative()
    {
        $results = $this->fs->makePathRelative(
            '/var/lib/symfony/src/Symfony/',
            '/var/lib/symfony/src/Symfony/Component'
        );
        $this->assertEquals('../', $results);

        $results = $this->fs->makePathRelative('/tmp/videos', '/tmp');
        $this->assertEquals('videos/', $results);

    }
}