<?php

namespace Tests\Feature;

use App\Data\foo;
use App\Data\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceContainerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDependInjection()
    {
        $foo = $this->app->make(foo::class);
        $foo1 = $this->app->make(foo::class);

        self::assertEquals('Foo ',$foo->loo());
        self::assertNotSame($foo,$foo1);
    }

    public function testBind()
    {
        $this->app->bind(Person::class, function ($app){
            return new Person("Attan", "Mhd");
        });

        $person = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);
        self::assertEquals("Attan",$person->firstname);
    }
}
