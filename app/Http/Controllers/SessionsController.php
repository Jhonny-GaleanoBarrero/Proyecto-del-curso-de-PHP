<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller{

    public function create(){
        return view('auth.login');
    }

    public function store(){

        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'el correo o la contraseña es incorrecto,
                intente nuevamente.'
            ]);
        }
        return redirect()->to('/');
    }

    public function flush(Request $request){

        $r = $request->session()->flush();

        return redirect()->to('/');
    }
}
