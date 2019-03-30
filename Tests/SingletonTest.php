<?php

namespace Tests;

use Singleton;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class SingletonTest
 * @package Tests
 */
class SingletonTest
{
    /**
     * Test Singleton.
     */
    public function test()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();
        die(var_dump($firstCall, $secondCall));
    }
}

// Run test.
(new SingletonTest())->test();
