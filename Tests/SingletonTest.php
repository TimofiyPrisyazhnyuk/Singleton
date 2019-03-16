<?php

namespace Singleton\Tests;

use Singleton\Singleton;

require __DIR__ . '/../Singleton.php';

class SingletonTest
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();
        die(var_dump($firstCall, $secondCall));
    }
}

(new SingletonTest())->testUniqueness();
