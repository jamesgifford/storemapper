<?php

namespace Tests\Unit;

use App\Models\Store;
use Mapper;
use Tests\TestCase;

class MapperTest extends TestCase
{
    /**
     * Make sure the store's full address includes the name, address, city, state, and zip
     *
     * @return void
     */
    function testGetCoordinatesFromAddress()
    {
        $store = Store::factory()->make();

        $location = Mapper::location($store->full_address);

        $this->assertIsNumeric($location->getLatitude());
        $this->assertIsNumeric($location->getLongitude());
    }
}
