<div class="grid grid-cols-1 bg-white  shadow-lg rounded">
    @if ($pokemon)
        <div class="grid grid-cols-2 ">
            <div class="flex items-center justify-center">
                <img src="{{asset('imagenes/bulbasaur.png')}}" alt="" class="w-3/5">
            </div>
            <div class="grid grid-cols-1">
                <div class="flex justify-start items-center">
                    <span class="bg-gray-400 text-white rounded p-1">#0001</span>
                </div>
                <div class="flex justify-start items-center"">
                        <h1 class=" text-2xl">Bulbasauy</h1>
                </div>
                <div class="flex justify-start items-center">
                    <span class="bg-blue-700 rounded mr-2 p-1 text-white">Agua</span>
                    <span class="bg-blue-700 rounded mr-2 p-1 text-white">Agua</span>
                    <span class="bg-blue-700 rounded mr-2 p-1 text-white">Agua</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 p-4">
            <div class="mb-3">
                <p>For some time after its birth, it uses the nutrients that are packed into the seed on its back in order
                    to grow.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-3">
                <div class="flex flex-col items-center bg-slate-200 rounded">
                    <img src="{{asset('imagenes/bulbasaur.png')}}" alt="" class="w-3/5">
                    <span class="text-gray-600">Evolución 1</span>
                </div>
                <div class="flex flex-col items-center bg-slate-200 rounded">
                    <img src="{{asset('imagenes/bulbasaur.png')}}" alt="" class="w-3/5">
                    <span class="text-gray-600">Evolución 2</span>
                </div>
            </div>
            <div class="grid grid-cols-1 mb-3">
                <div class="mb-3">
                    <h1 class="text-xl">Estadisticas</h1>
                </div>
                <div class="grid grid-cols-1">
                    <div>ATAQUE</div>
                    <div class="bg-red-700 text-red-700 w-1/6 ">a</div>
                    <div>Defensa</div>
                    <div class="bg-blue-700 text-blue-700 w-2/12">a</div>
                    <div>Velocidad</div>
                    <div class="bg-yellow-600 text-yellow-600 w-1/6">a</div>

                    <div>Vida</div>
                    <div class="bg-green-700 text-green-700 w-1/2">a</div>
                </div>
            </div>

            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <h1 class="text-xl">Debilidades</h1>
                </div>
                <div class="">
                    <span class="bg-yellow-700 rounded mr-2 p-1 text-white">Electrico</span>
                    <span class="bg-red-700 rounded mr-2 p-1 text-white">Fuego</span>
                    <span class="bg-gray-700 rounded mr-2 p-1 text-white">luchador</span>
                </div>
            </div>
        </div>
    @else
        <div class="grid grid-cols-2 ">
            <div class="flex items-center justify-center">
                <img src="{{asset('imagenes/imagenpokemondefault.png')}}" alt="" class="w-3/5">
            </div>
            <div class="grid grid-cols-1">
                <div class="flex justify-start items-center">
                    <span class="bg-gray-400 text-gray-400 rounded p-1">#0001</span>
                </div>
                <div class="flex justify-start items-center">
                        <h1 class=" text-2xl bg-black rounded">Bulbasauy</h1>
                </div>
                <div class="flex justify-start items-center">
                    <span class="bg-blue-700 rounded mr-2 p-1 text-blue-700">Agua</span>
                    <span class="bg-red-700 rounded mr-2 p-1 text-red-700">Agua</span>
                    <span class="bg-yellow-700 rounded mr-2 p-1 text-yellow-700">Agua</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 p-4">
            <div class="mb-3">
                <p class="text-xl">
                    Ingresa en el buscador o selecciona el pokemon que deseas ver a detalle para obtener sus estadisticas, evoluciones, debilidades y más...
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-3">
                <div class="flex flex-col items-center bg-slate-200 rounded">
                    <img src="{{asset('imagenes/imagenpokemondefault.png')}}" alt="" class="w-3/5">
                    <span class="text-gray-600">Evolución 1</span>
                </div>
                <div class="flex flex-col items-center bg-slate-200 rounded">
                    <img src="{{asset('imagenes/imagenpokemondefault.png')}}" alt="" class="w-3/5">
                    <span class="text-gray-600">Evolución 2</span>
                </div>
            </div>
            <div class="grid grid-cols-1 mb-3">
                <div class="mb-3">
                    <h1 class="text-xl">Estadisticas</h1>
                </div>
                <div class="grid grid-cols-1">
                    <div>ATAQUE</div>
                    <div class="bg-red-700 text-red-700 w-1/6 ">a</div>
                    <div>Defensa</div>
                    <div class="bg-blue-700 text-blue-700 w-2/12">a</div>
                    <div>Velocidad</div>
                    <div class="bg-yellow-600 text-yellow-600 w-1/6">a</div>

                    <div>Vida</div>
                    <div class="bg-green-700 text-green-700 w-1/2">a</div>
                </div>
            </div>

            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <h1 class="text-xl">Debilidades</h1>
                </div>
                <div class="">
                    <span class="bg-yellow-700 rounded mr-2 p-1 text-yellow-700">Electrico</span>
                    <span class="bg-red-700 rounded mr-2 p-1 text-red-700">Fuego</span>
                    <span class="bg-gray-700 rounded mr-2 p-1 text-gray-700">luchador</span>
                </div>
            </div>
        </div>
    @endif
</div>