<?php

namespace Tests\Feature\Routing;

use Tests\TestCase;

class BasicRoutingTest extends TestCase
{
    public function testBasic()
    {
        $response = $this->get('/say-hello');

        $response->assertSeeText('Hello, World!');
    }

    public function testView()
    {
        $response = $this->get('/welcome');

        $response->assertSeeText('Laravel');
    }

    public function testRedirect()
    {
        $response = $this->get('/hi');

        $response->assertStatus(301);
        $this->assertEquals('/say-hello', $response->headers->get('Location'));
    }
}
