
<div class="grid grid-cols-1">
    <div class="mb-3">
        <div class="relative mb-2">
            <input type="text" placeholder="Ingresa un pokemon" class="p-3 w-full rounded border border-slate-700"
                name="nombre" wire:keyup='buscar' wire:model="nombre">
            <button class="bg-gray-200 p-2 rounded-lg absolute end-2 top-2">
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
        <div class="carta-box mb-8">
            <div class="{{$estadoCarta ? 'carta':''}}">
                <div class="cara shadow-xl rounded-lg bg-white  flex flex-col " >
                    <div class="text-center p-2">
                        <span class="bg-gray-400 text-white text-center rounded p-2">{{$pokemon->codigo}}</span>
                    </div>
                    <div class="p-3 text-center">
                        <img src="{{asset('imagenes/'.$pokemon->imagen.'.png')}}" alt="" class="w-4/5 inline-block">
                        <button class="bg-blue-600 rounded p-2 text-white uppercase shadow-xl"
                             wire:click="activaCarta({{$pokemon->id}})" >{{$pokemon->nombre}}</button>
                    </div>
                </div>
                <div class="cara detras shadow-xl rounded-lg bg-white">
                    <div class="text-center mb-4">
                        <h1 class="text-2xl bg-blue-600 rounded p-2 inline-block text-white">Bulbasor</h1>
                    </div>
                   <div class="flex flex-row gap-8 p-2">
                        <div class="bg-slate-200 rounded-xl p-2 text-center">
                            <img src="{{asset('imagenes/imagenpokemondefault.png')}}" alt="" class="w-1/2 inline-block">
                            <small class="block">nombre</small>
                        </div>
                        <div  class="bg-slate-200 rounded-xl p-2 text-center">
                            <img src="{{asset('imagenes/imagenpokemondefault.png')}}" alt="" class="w-1/2 inline-block">
                            <small class="block">nombre</small>
                        </div>
                   </div>
                   <div class="p-4">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, cumque, voluptate iusto tempora, eum odit expedita dignissimos quibusdam vitae velit harum porro nostrum quos qui aliquid animi unde enim? Earum?</p>
                        <span class="p-1 bg-orange-600 rounded-lg text-white">Fuego</span>
                        <span class="p-1 bg-blue-600 rounded-lg text-white">Agua</span>
                    </div>
                </div>
            </div>
        </div>        
        @endforeach
    </div>
    <div>
        {{$pokemons->links()}}
    </div>
</div>