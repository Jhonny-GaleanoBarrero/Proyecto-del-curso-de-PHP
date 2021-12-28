@extends('layouts.app')

@section('title', 'Registrer')

@section('content')

    <h1 class="text-5xl text-center pt-24">¿Eres nuevo?</h1>

    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-grey-200
    rounded-lg shadow-lg">

        <h1 class="text-3xl text-center pt-2 font-bold">
            Crea tu usuario
        </h1>

        <form class="mt-4" action="" method="POST">

            @csrf

            <input type="text"
             class="border border-gray
             rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2
             focus:bg-white"
             placeholder="Nombre Completo"
             id="name"
             name="name"
            >

            <input type="email"
             class="border border-gray
             rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2
             focus:bg-white"
             placeholder="Email"
             id="email"
             name="email"
            >

            <input type="password"
             class="border border-gray
             rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2
             focus:bg-white"
             placeholder="Contraseña"
             id="password"
             name="password"
            >

            <input type="password" class="border border-gray
             rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2
             focus:bg-white"
             placeholder="Confirmar contraseña"
             id="password_confirmation"
             name="password_confirmation"
            >

            <button type="submit" class="rounded-md bg-blue-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-blue-600">Inicio</button>

        </form>

    </div>

@endsection