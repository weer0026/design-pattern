<?php

namespace DesignPatterns\Singleton\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Singleton\Singleton;

include "../../autoload.php";
/**
 * @description:
 * @author: He Chuan
 * @version: 17/11/6 上午10:31
 */
class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}