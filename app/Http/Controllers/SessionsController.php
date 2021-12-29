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
        else{
            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.index');
            }else{
                return redirect()->to('/');
            }
        }
        return redirect()->to('/');
    }

    public function flush(Request $request){

        $r = $request->session()->flush();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->to('/');
    }
}
