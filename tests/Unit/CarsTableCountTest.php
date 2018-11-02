<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarsTableCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarsTableCount()
    {
        $carCount = Car::count();
        $this->assertEquals(50, $carCount);
    }
}
