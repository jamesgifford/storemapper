<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MapTest extends TestCase
{
    /**
     * Make sure the /map endpoint works.
     *
     * @return void
     */
    public function testMapEndpoint()
    {
        $response = $this->get('/map');

        $response->assertStatus(200);
    }
}
