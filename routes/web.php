<?php

use App\Http\Controllers\RegistrerController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function(){
    return view('home');
});

Route::get('/registrer', [RegistrerController::class, 'create'])
    ->middleware('guest')
    ->name('registrer.index');

Route::post('/registrer', [RegistrerController::class, 'store'])
    ->name('registrer.store');



Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');


Route::get('/logout', [SessionsController::class, 'flush'])
    ->middleware('auth')
    ->name('login.flush');

Route::get('/admin', [AdminController::class, 'create'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::resource('users', RegistrerController::class);
