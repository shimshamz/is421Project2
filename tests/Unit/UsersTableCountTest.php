<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTableCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUsersTableCount()
    {
        $userCount = User::count();
        $this->assertEquals(50, $userCount);
    }
}
