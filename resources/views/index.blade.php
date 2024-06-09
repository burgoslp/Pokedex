<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscador web de pokemons</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-200 content">
    <nav class="p-3 bg-red-600 grid grid-cols-2">
        <div class=" text-white text-6xl ">
            Pokedex
        </div>
        <div class="flex justify-end items-center">
            <img src="{{asset('imagenes/pokeball.png')}}" alt="" class="w-16">
        </div>
    </nav>

    <main class="grid grid-cols-1 mb-8">
        <section class="p-3 col-span-2">
            @livewire('buscador-pokemon', ['pokemons'=>$pokemons,'tipos'=>$tipos])
        </section>       
    </main>
    <footer class="p-8 text-center bg-red-600 text-white">
        <p class="uppercase">
            Desarrollado por leopoldo pinedo programador full stack 2024
        </p>
    </footer>
    
    @livewireScripts
</body>
</html>