<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserNameUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserNameUpdate()
    {
        $user = User::inRandomOrder()->first();
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertEquals('Steve Smith', $user->name);
    }
}
