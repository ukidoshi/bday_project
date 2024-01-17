<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Carbon\Carbon;
use Carbon\CarbonTimeZone;
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

    public function getGuests(Request $request) {
        $guests = Guest::all()->toArray();
        $tz = CarbonTimeZone::create('+03:00');
        $result = [];
        foreach ($guests as $guest) {
            $result[] = [
                "id" => $guest['id'],
                "name" => $guest['name'],
                "type" => $guest['type'],
                "created_at" => Carbon::parse($guest['created_at'])->setTimezone($tz)->format("j.m.Y в h:i:s"),
            ];
        }
        return view('list', ["guests" => $result]);
    }

    public function deleteGuest(Request $request) {
        $guest_id = $request->post('id');
        Guest::where('id', $guest_id)->delete();
    }
}
