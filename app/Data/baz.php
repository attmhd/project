<?php

namespace App\Data;

class Baz{
    public Foo $foo;
    public function __construct(Foo $foo){
        $this->foo = $foo;
    }
    function baz(): string{
        return $this->foo->loo()."and Baz";
    }
}