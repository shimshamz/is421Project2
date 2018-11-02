<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarInsert()
    {
        $car = new Car;
        $car->make = 'Ford';
        $car->model = 'Phantom';
        $car->year = 2010;
        $car->user_id = 12;
        $car->save();
        $this->assertTrue($car->delete());
    }
}
