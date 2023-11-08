<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

// ...

public function checkDeliveryZone(Request $request)
{
    // Get lat and lng from the request
    $lat = $request->input('lat');
    $lng = $request->input('lng');

    // Check if the lat and lng are within any delivery zones
    $zone = DB::table('zones')
        ->whereRaw("ST_Contains(polygon, POINT($lat, $lng))")
        ->first();

    if ($zone) {
        // Update the session
        Session::put('restaurant', $zone->zone_id);
        Session::put('delivery_address', ['lat' => $lat, 'lng' => $lng]);


        // Return the restaurant
        return response()->json($zone->zone_id);
    } else {
        return response()->json(['error' => 'No delivery zones match this address.'], 400);
    }
}
?>