<div class="grid grid-cols-1">
    <div class="mb-3">
        <div class="relative mb-2">
            <input type="text" placeholder="Ingresa un pokemon" class="p-3 w-full rounded border border-slate-700"
                name="nombre" wire:keyup='buscar' wire:model="nombre">

            <button wire:loading wire:target="buscar" class="bg-red-500 p-2 rounded-lg absolute end-2 top-2  animate-ping">
                <img src="{{asset('imagenes/pokeball.png')}}" alt="" class="w-4">
            </button>
            <button class="bg-gray-200 p-2 rounded-lg absolute end-2 top-2  ">
                <img src="{{asset('imagenes/pokeball.png')}}" alt="" class="w-4">
            </button>
        </div>
        <div>
            <select name="" id="" class="p-2 rounded mr-3" wire:change='buscar' wire:model='tipo_id'>
                <option value="">Tipos</option>
                @foreach ($tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                @endforeach
            </select>

        </div>
        </form>
    </div>

    <div class="grid sm:grid-cols-1  md:grid-cols-2 md:gap-4 lg:grid-cols-3 lg:grid-cols-2   lg:gap-8 mb-4">
        @foreach ($pokemons as $pokemon)

        <div class="mb-4 md:mb-8  lg:mb-16">
            <div class=" shadow-xl rounded-lg bg-white  flex flex-col ">
                <div class="text-center p-2">
                    <span class="bg-gray-400 text-white text-center rounded p-2">{{$pokemon->codigo}}</span>
                </div>
                <div class="p-3 text-center flex flex-col">
                    <img src="{{asset('imagenes/'.$pokemon->imagen.'.png')}}" alt="" class="w-4/5 inline-block">
                    <button class="bg-blue-600 rounded p-2 text-white uppercase shadow-xl self-center flex gap-1" wire:click="mostrarDetalles({{$pokemon->id}}, {{$pokemon->validaEspecie($pokemon->codigo)}})">
                        <div wire:loading wire:target="mostrarDetalles">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>                                               
                        {{$pokemon->nombre}}
                    </button>

                   
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div>
        {{$pokemons->links()}}
    </div>

   
</div>