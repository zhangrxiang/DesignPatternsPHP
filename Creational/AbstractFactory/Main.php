<?php
/**
 * Created by PhpStorm.
 * User: zhangrxiang
 * Date: 17-1-22
 * Time: 下午10:54
 */

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlText;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');
        if($text instanceof HtmlText){
            $text->view();
        }

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\HtmlText', $text);
    }

    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\JsonText', $text);
    }
}

include "../../vendor/autoload.php";
$abstractFactoryTest = new AbstractFactoryTest();
$abstractFactoryTest->testCanCreateHtmlText();
$abstractFactoryTest->testCanCreateJsonText();


