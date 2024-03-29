<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Proyecto 1</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
  </head>
  <body class="bg-green-300 text-gray-800">

    <nav class="flex py-5 bg-blue-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2x1 font-bold">My app</p>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">

            @if (auth()->check())
                <li class="mx-6">
                    <p class="text-xl">Bienvenido <b>{{auth()->user()->name}}</b></p>
                </li>
                <li>
                    <a href="{{route('login.flush')}}"
                     class="font-bold py-3 px-4 rounded-md bg-red-500 hover:br-red-600">
                        Salir
                    </a>
                </li>
            @else
            <li class="mx-6">
                <a href="{{route('login.index')}}"
                class="font-semibold hover:bg-blue-700 py-3 px-4 rounded-md">
                    Iniciar
                </a>
            </li>
            <li>
                <a href="{{route('registrer.index')}}"
                class="font-semibold border-2 border-white py-2 px-4
                hover:bg-white hover:text-blue-700 rounded-md">
                    Registrarse
                </a>
            </li>

            @endif

        </ul>
    </nav>

      @yield('content')

  </body>
</html>
