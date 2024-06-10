<div class="grid grid-cols-1 ">
    <div class="mb-3">
            <div class="relative mb-2">
                <input type="text" placeholder="Ingresa un pokemon" class="p-3 w-full rounded border border-slate-700"
                    name="nombre" wire:keyup='buscar' wire:model="nombre">
                <button  class="bg-gray-200 p-2 rounded-lg absolute end-2 top-2">
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

    <div class="grid grid-cols-3 gap-4  mb-4">
            @foreach ($pokemons as $pokemon)
           

            <div class="shadow-xl rounded-lg bg-white flex flex-col">
                <div class="text-center p-2">
                    <span class="bg-gray-400 text-white text-center rounded p-2">{{$pokemon->codigo}}</span>
                </div>
                <div class="p-3 text-center">
                    <img src="{{asset('imagenes/'.$pokemon->imagen.'.png')}}" alt="" class="w-4/5">
                    <h1 class="mb-2">{{$pokemon->nombre}}</h1>
                    {{$pokemon->verificaEspecie($pokemon->codigo)}}
                    @foreach ($pokemon->tipos as $tipoPokemon)
                    <span class="bg-red-700 rounded mr-2 p-1 text-white">{{$tipoPokemon->nombre}}</span>

                    @endforeach
                    <span class="bg-gray-700 rounded p-1 text-white"
                        wire:click="mostrarPokemon({{ $pokemon->id }})">...</span>
                </div>
            </div>
            @endforeach       
    </div>
    <div>
        {{$pokemons->links()}}
    </div>
</div>