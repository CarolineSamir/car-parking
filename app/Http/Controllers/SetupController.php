<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SetupController extends Controller
{
    public function setup()
    {
        try {
            $name = 'name';
            $email = 'admin@gmail.com';
            $password = '12345678';

            $admin = new User();
            $admin->name = $name;
            $admin->email = $email;
            $admin->password = Hash::make($password);
            $admin->is_admin =1;
            $admin->save();
//            dd($admin);

            return redirect()->route('home')   ;

        }catch (\Exception $e) {
            dd($e);
        }
    }

}
