<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::get();
        return view('cars.index', compact('cars'));
    }

    public function new()
    {
        return view('cars.new');
    }

    public function add(Request $request)
    {
        $cars = new Car();
        $cars->car_number = $request->car_number;
        $cars->save();
        return redirect()->route('drivers-new');
    }

    public function edit($id){
        $cars = Car::find($id);
        return view('cars.edit', compact('cars'));
    }

    public function update(Request $request){
        $cars = Car::find($request->id);
        $cars->car_number = $request->car_number;
        $cars->save();
        return redirect()->route('car-index');
    }

    public function delete(Request $request){
        $car = Car::find($request->id);
        $car->delete();
        return redirect()->route('car-index');
    }
}
