<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Mapper;

class MapController extends Controller
{
    public function index()
    {
        $stores = Store::all();

        $map = Mapper::map(config('map.center_lat'), config('map.center_lon'));

        foreach($stores as $store) {
            $location = Mapper::location($store->full_address);
            $map->marker($location->getLatitude(), $location->getLongitude(), ['title' => $store->title]);
        }

        return view('map');
    }
}
