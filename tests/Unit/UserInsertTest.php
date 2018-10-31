<?php

namespace Tests\Unit;

use App\Http\Controllers\UserController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserInsert()
    {
        $user = new User;
        $user->name = 'Joe Soap';
        $user->email = 'name@example.com';
        $user->password = '123456';
        $user->save();
        $this->assertTrue($user->delete());
    }
}
