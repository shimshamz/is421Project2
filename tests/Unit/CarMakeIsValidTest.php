<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeIsValidTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMakeIsValid()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertContains($car->make, ['Ford', 'Honda', 'Toyota']);
    }
}
