<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')

    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow flex justify-between content-center items-center">
            <h1 class="text-3xl font-black">
                Devstagram
            </h1>
            <div class=" flex gap-5">
                <div class="font-bold cursor-pointer">
                    LOGIN
                </div>
                <a href="{{route('register')}}" class="font-bold cursor-pointer">REGISTRARSE</a>
            </div>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
                @yield('contenido')
        </main>
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Diagram - Todos los derechos reservados {{date('Y-M-d')}}
        </footer>
    </body>
</html>
