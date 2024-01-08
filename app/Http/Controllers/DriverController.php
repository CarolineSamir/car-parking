<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {

        if(auth()->user()->is_admin == 1){
            $drivers = User::get();
        }else{
            $drivers = User::where('id' ,auth()->user()->id)->get();
        }
        return view('drivers.index', compact('drivers'));

    }
    public function new(Request $request)
    {

        return view('drivers.new');
    }
    public function add(Request $request)
    {

       $drivers = new Driver;
        $drivers->name = $request->name;
        $drivers->car_id = $request->car;
        $drivers->save();
        return redirect()->route('drivers-index');
    }

    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('drivers.edit', compact('driver'));
    }

    public function update(Request $request)
    {
        $driver = Driver::find($request->id);
        $driver->name = $request->name;
        $driver->no_of_trips = $request->no_of_trips;
        $driver->save();

        return redirect()->route('drivers-index');
    }
    public function delete(Request $request){
        $drivers = Driver::find($request->id);
        $drivers->delete();

        return redirect()->route('drivers-index');
    }

    public function accounting($id){
        $driver = Driver::find($id);
        return view('drivers.accounting', compact('driver'));
    }
//
//    public function count(Request $request){
//        $driver = Driver::find($request->id);
//
//        return view('drivers.accounting', compact('driver'));
//
//    }
}
