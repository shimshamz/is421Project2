<?php

namespace Tests\Unit;

use App\Car;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarDelete()
    {
        $car = Car::first();
        $user = User::inRandomOrder()->first();
        $newCar = factory(\App\Car::class)->make();
        $user->cars()->save($newCar);
        $this->assertTrue($car->delete());
    }
}
