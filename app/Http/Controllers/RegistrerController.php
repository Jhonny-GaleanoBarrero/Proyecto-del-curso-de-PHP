<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrerController extends Controller{

    public function create(){
        return view('auth.registrer');
    }

    public function store(Request $request){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        auth()->login($user);
        return redirect()->to('/');
    }

    public function edit($id){
        $users = User::find($id);

        //dd($users);

        return view('admin.edit', compact('users'));
    }

    public function destroy($id){
        $users = User::find($id);

        $users->delete();

        return redirect()->route('admin.index');
    }
}
