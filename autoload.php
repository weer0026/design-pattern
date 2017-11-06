<?php
// 注册自动加载(命名空间)
defined('BASE_PATH') or define('BASE_PATH', __DIR__);

spl_autoload_register(function ($class) {
    $classMaps = [
        "DesignPatterns\\Singleton\\Singleton" => BASE_PATH . "/Singleton/Singleton.php"
    ];

    $file = $classMaps[$class];

    if (file_exists($file)) {
        include($file);
    }
});