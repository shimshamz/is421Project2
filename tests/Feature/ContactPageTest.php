<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContactPage()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}