<div class="grid grid-cols-1 p-5 bg-white  rounded-lg">
    

    @if(!empty($this->pokemon))
        <div class="mx-auto">
            <img src="{{asset('imagenes/'.$pokemon->imagen.'.png')}}" alt="" class="h-48">
        </div>
        <div>
            <h3 class="text-2xl leading-6 font-medium text-gray-900 mb-4" id="modal-headline">
                {{$pokemon->nombre}}

                @foreach ($pokemon->tipos as $tipo)
                <span class="text-xs p-1 mr-2 bg-black rounded-xl text-white">
                    {{$tipo->nombre}}
                </span>
                @endforeach
            </h3>
            <p class="text-sm leading-6 text-gray-500 mb-2 ">
                {{$pokemon->descripcion}} <span class="underline decoration-solid ">No es recomendable usar contra pokemons
                    de tipo </span>

                @foreach ($pokemon->debilidades as $debilidad)
                <span class="p-1 bg-black rounded-xl text-white">{{$debilidad->nombre}}</span>
                @endforeach
            </p>
        </div>
    @else
        <div class="text-center mb-4">
            <h1 class="text-xl md:text-6xl">Busca un rivales para tu pokemon comparalos y diviertete</h1>
        </div>
        <div>
            <div class="relative mb-2">
                <input type="text" placeholder="Ingresa el codigo de un pokemon" class="p-3 w-full rounded border border-slate-700"
                    name="nombre" list="options" wire:model="codigo" wire:keyup="lstData" >
                <datalist id="options">
                    @if(isset($this->lstData))
                        @foreach ($this->lstData as $dataList)
                            <option value="{{$dataList->codigo}}">{{$dataList->nombre}}</option>
                        @endforeach
                    @endif
                </datalist>
                <button wire:loading wire:target="lstData" class="bg-red-500 p-2 rounded-lg absolute end-2 top-2  animate-ping">
                    <img src="{{asset('imagenes/pokeball.png')}}" alt="" class="w-4">
                </button>
                <button class="bg-gray-200 p-2 rounded-lg absolute end-2 top-2" wire:click='buscar()'>
                    <img src="{{asset('imagenes/pokeball.png')}}" alt="" class="w-4">
                </button>
            </div>
           
        </div>
    @endif
</div>