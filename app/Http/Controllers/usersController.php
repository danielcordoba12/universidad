<?php

namespace App\Http\Controllers;

// use App\Models\users;

use App\Models\User;


use Illuminate\Http\Request;

class usersController extends Controller
{
    public function store(Request $request)
    {
        dd(User());

        $user = new User();
        $user -> name =  $request ->post('name');
        $user -> lastname =  $request ->post('lastname');
        $user -> email =  $request ->post('email');
        $user -> birthday =  $request ->post('birthday');
        $user -> specialization =  $request ->post('specialization');
        $user -> rol =  $request ->post('rol');

        $user->save();

        // return redirect()->route('User.listar')->with("succes","agregado con exito");

    }
}
