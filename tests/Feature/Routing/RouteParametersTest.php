<?php

namespace Tests\Feature\Routing;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteParametersTest extends TestCase
{
    public function testRouteParameters()
    {
        $response = $this->get('/say-hello/developer');

        $response->assertSeeText('Hello, Developer!');
    }
}
