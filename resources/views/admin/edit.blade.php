@extends('layouts.app')

@section('title', 'Edit')

@section('content')

    <h1 class="text-5xl text-center pt-24">
        Edita al usuario
    </h1>

    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-grey-200
    rounded-lg shadow-lg">

        <h1 class="text-3xl text-center pt-2 font-bold">
            Edición de usuarios{{$users->id}}
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
             value="{{$users->name}}"
            >

            @error('name')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
                text-red-600 p-2 my-2"
            >
                *{{$message}}
            </p>
            @enderror

            <input type="email"
             class="border border-gray
             rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2
             focus:bg-white"
             placeholder="Email"
             id="email"
             name="email"
             value="{{$users->email}}"
            >

            @error('email')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
                text-red-600 p-2 my-2"
            >
                *{{$message}}
            </p>
            @enderror

            <button type="submit" class="rounded-md bg-green-600 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-blue-600">Actualizar</button>

        </form>

    </div>

@endsection
