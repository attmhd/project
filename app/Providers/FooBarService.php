<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Data\foo;
use App\Data\baz;

class FooBarService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Foo::class, function(){
            return new Foo ();
        });
        $this->app->singleton(baz::class,function($app){
            return new baz($app->make(foo::class));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
