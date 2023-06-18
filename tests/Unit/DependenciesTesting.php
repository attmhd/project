<?php

namespace Tests\Unit;

use App\Data\baz;
use App\Data\foo;
use PHPUnit\Framework\TestCase;

class DependenciesTesting extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDependsInjection(){
        $foo = new foo();
        $baz = new baz($foo);

        self::assertEquals("Foo and Baz", $baz->baz());
    }
}
