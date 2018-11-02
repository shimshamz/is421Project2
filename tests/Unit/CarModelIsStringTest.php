<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelIsStringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelIsString()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertInternalType('string', $car->model);
    }
}
