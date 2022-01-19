<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContohTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $response = $this->get('/');
        $value = "Hello, World";
        $response = $this->get('/coba')
                ->type('halo', 'Hello, World')
                ->pressAndWaitFor('halokirim', 1)
                ->assertInputValue('jawab', $value);
        // $response->assertStatus(200);
    }
}
