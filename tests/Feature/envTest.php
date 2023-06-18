<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class envTest extends TestCase
{
    /** @test */
    public function getEnv()
    {
        $author = Env::get('AUT','att');
        self::assertEquals('att', $author);
        }
}
