<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarYearUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearUpdate()
    {
        $car = Car::inRandomOrder()->first();
        $car->year = 2000;
        $car->save();
        $this->assertEquals(2000, $car->year);
    }
}
