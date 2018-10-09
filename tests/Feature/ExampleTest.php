<?php

namespace Tests\Feature;

use Tests\TestCase;

class exampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertSeeText('Laravel');
        $response->assertStatus(200);
    }
}
