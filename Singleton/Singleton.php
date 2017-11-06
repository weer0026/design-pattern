<?php
namespace DesignPatterns\Singleton;
/**
 * 单例模式（懒汉式单例）
 * Class Singleton
 */
class Singleton {
    private static $instance;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }
}