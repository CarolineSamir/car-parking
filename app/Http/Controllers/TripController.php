<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function new(){
        return view('trips.new');
    }

    public function add(Request $request){
        $trip = new Trip;
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->distance = $request->distance;
        $trip->price = $request->distance * 10;
        $trip->car_id = $request->car;
//        $trip->car_id = Car::where('car_number', $request->car)->first()->id;

        $trip->save();
        return redirect()->route('drivers-index');
    }

}
