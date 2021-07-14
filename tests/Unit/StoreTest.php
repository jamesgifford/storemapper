<?php

namespace Tests\Unit;

use App\Models\Store;
use Tests\TestCase;

class StoreTest extends TestCase
{
    /**
     * Make sure the store's full address includes the name, address, city, state, and zip
     *
     * @return void
     */
    function testFullAddressContainsRequiredInfo()
    {
        $store = Store::factory()->make();

        $this->assertStringContainsString($store->name, $store->full_address);
        $this->assertStringContainsString($store->address, $store->full_address);
        $this->assertStringContainsString($store->city, $store->full_address);
        $this->assertStringContainsString($store->state, $store->full_address);
        $this->assertStringContainsString($store->zip, $store->full_address);
    }

    /**
     * Make sure the store's full address does not include the phone number
     *
     * @return void
     */
    function testFullAddressDoesNotContainPhone()
    {
        $store = Store::factory()->make();

        $this->assertStringNotContainsString($store->phone, $store->full_address);
    }

    /**
     * Make sure the store's title attribute includes the full address
     *
     * @return void
     */
    function testTitleContainsFullAddress()
    {
        $store = Store::factory()->make();

        $this->assertStringContainsString($store->full_address, $store->title);
    }

    /**
     * Make sure the store's title attribute includes the phone number
     *
     * @return void
     */
    function testTitleContainsPhone()
    {
        $store = Store::factory()->make();

        $this->assertStringContainsString($store->phone, $store->title);
    }
}
