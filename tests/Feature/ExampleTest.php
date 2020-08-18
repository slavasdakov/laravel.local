<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSeeText('Добро пожаловать!');

    }

    public function testBasicTest2()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSeeText('Добро пожаловать!');
        $this->call('GET' , '/');
       $response->assertViewIs('index');
    }
}
