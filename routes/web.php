<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('home');
});

Route::get('/registrer', [RegistrerController::class, 'create'])
->name('registrer.index');
Route::post('/registrer', [RegistrerController::class, 'store'])
->name('registrer.store');



Route::get('/login', [SessionsController::class, 'create'])
->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');


Route::get('/logout', [SessionsController::class, 'flush'])
->name('login.flush');
/*Route::get('/logout', [SessionsController::class, 'flush'])
->name('login.destroy');*/



/*Route::get('/', HomeController::class);

Route::get('/user', [UserController::class, 'showUsers']);

Route::post('/user/create', [UserController::class, 'createUser'])->name('createUser');

Route::post('/user/crear', [UserController::class, 'store'])->name('createUser.store');

Route::get('users/home', [UserController::class, 'home'])->name('createUser.home');*/
