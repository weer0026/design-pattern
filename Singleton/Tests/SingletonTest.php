<?php

namespace DesignPatterns\Singleton\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Singleton\Singleton;

include "../../autoload.php";
/**
 * @description: 单例模式
 * 确保类只有一个实例，适用于需要频繁创建和销毁的对象。
 * 例如：数据库连接池
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