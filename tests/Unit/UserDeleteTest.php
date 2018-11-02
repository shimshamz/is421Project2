<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserDelete()
    {
        $user = User::first();
        factory(\App\User::class, 1)->create();
        $this->assertTrue($user->delete());
    }
}
