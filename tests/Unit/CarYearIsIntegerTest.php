<?php

namespace Tests\Unit;

use App\Car;
use phpDocumentor\Reflection\Types\Integer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarYearIsIntegerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearIsInteger()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertInternalType('int', $car->year);
    }
}
