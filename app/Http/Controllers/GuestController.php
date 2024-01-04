<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class GuestController extends Controller
{
    public function addGuests(Request $request) {
        $data = $request->all();

        preg_match('/(\d+)/', array_key_last($data), $matches);
        $last_item = (int)$matches[1];

        for ($i = 1; $i <= $last_item; $i++) {
            if (! (isset($data["name_".$i]) && isset($data["guest_type_".$i]))) {
                continue;
            }
            $guest = new Guest;
            $guest->name = $data["name_".$i];
            $guest->type = $data["guest_type_".$i];
            $guest->save();
        }

        return response()->json([
            "status" => "success",
            "message" => "added"
        ]);

    }
}
