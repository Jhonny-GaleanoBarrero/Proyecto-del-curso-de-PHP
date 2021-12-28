<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrerController extends Controller{

    public function create(){
        return view('auth.registrer');
    }

    public function store(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        auth()->login($user);
        return redirect()->to('/');
    }
}
