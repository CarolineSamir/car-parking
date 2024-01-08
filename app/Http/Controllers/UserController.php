<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function myProfile()
    {
        $user = User::find(auth()->id());
//        dd(view('my_profile'));
        return view('my_profile', compact('user'));

    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password !== null) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('home');
    }

    public function register(Request $request)
    {
        $car = new Car();
        $car->car_number = $request->car_number;
        $car->save();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = 0;
        $user->car_id = Car::where('car_number', $request->car_number)->value('id');
        $user->save();
        return redirect()->route('login');
    }

}
