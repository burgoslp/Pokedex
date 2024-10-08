<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-200 content">
    <nav class="p-3 bg-red-600 grid grid-cols-2">
        <div class=" text-white text-6xl ">
            Pokedex
        </div>
        <div class="flex justify-end items-center">
            <a href="{{route('buscador')}}">
                <img src="{{asset('imagenes/pokeball.png')}}" alt="" class="w-16">
            </a>
        </div>
    </nav>

    @yield('contenido')

    <footer class="p-8 text-center bg-red-600 text-white">
        <p class="uppercase">
            Desarrollado por leopoldo pinedo programador full stack 2024
        </p>
    </footer>
    
    @yield('modales')   
    @livewireScripts   
    @stack('scripts')    
</body>

</html>