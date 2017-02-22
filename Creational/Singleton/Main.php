<?php
/**
 * Created by PhpStorm.
 * User: zhangrxiang
 * Date: 17-2-23
 * Time: 上午12:17
 */


namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;
use SebastianBergmann\CodeCoverage\Report\PHP;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}

echo PHP_EOL."test".PHP_EOL;
