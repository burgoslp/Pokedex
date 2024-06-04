<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscador web de pokemons</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-200 ">
    <nav class="p-3 bg-red-600 grid grid-cols-2">
        <div class=" text-white text-6xl ">
            Pokedex
        </div>
        <div class="flex justify-end items-center">
            <img src="{{asset('imagenes/pokeball.png')}}" alt="" class="w-16">
        </div>
    </nav>

    <main class="grid grid-cols-3">
        <section class="p-3 col-span-2">
            <div class="grid grid-cols-1 ">
                <div class="mb-3">
                    <form action="" method="GET">
                        <div class="relative mb-2">
                            <input type="text" placeholder="Ingresa un pokemon" class="p-3 w-full rounded border border-slate-700">
                            <button type="submit" class="bg-gray-200 p-2 rounded-lg absolute end-2 top-2">
                                <img src="{{asset('imagenes/pokeball.png')}}" alt="" class="w-4">
                            </button>
                        </div>
                        <div>
                            <select name="" id="" class="p-2 rounded mr-3">
                                <option value="">Tipo</option>
                                <option value="">lucha</option>
                                <option value="">vuelo</option>
                                <option value="">fuego</option>
                            </select>
                            <select name="" id="" class="p-2 rounded  mr-3">
                                <option value="">Habilidad</option>
                                <option value="">lucha</option>
                                <option value="">vuelo</option>
                                <option value="">fuego</option>
                            </select>
                            <select name="" id="" class="p-2 rounded  mr-3">
                                <option value="">Debilidad</option>
                                <option value="">lucha</option>
                                <option value="">vuelo</option>
                                <option value="">fuego</option>
                            </select>
                        </div>
                    </form>
                </div>
                
                <div class="grid grid-cols-3 gap-4 ">
                    @foreach ($pokemons as $pokemon)
                        <div class="shadow-xl rounded-lg bg-white flex flex-col">
                            <div class="text-center p-2">
                                <span class="bg-gray-400 text-white text-center rounded p-2">{{$pokemon->codigo}}</span>
                            </div>
                            <div class="p-3 text-center">
                                <img src="{{asset('imagenes/carterpie.png')}}" alt="" class="w-4/5">
                                <h1 class="mb-2">{{$pokemon->nombre}}</h1>
                                @foreach ($pokemon->tipos as $habilidad)
                                    <span class="bg-red-700 rounded mr-2 p-1 text-white">{{$habilidad->nombre}}</span   >
                                @endforeach                               
                                <span class="bg-gray-700 rounded p-1 text-white">...</span>
                            </div>
                        </div>
                    @endforeach  
                </div>
            </div>
        </section>
        <section class="">
    
        </section>
    </main>

    
    
</body>
</html>