<?php
# test/Feature/BasicTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/search')->assertSuccessful();
        $this->get('/login')->assertSuccessful();
        $this->get('/register')->assertSuccessful();
        $this->get('/deposer')->assertStatus(302);
        print("=======> Routes are fine");
    }
}