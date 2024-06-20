<div class="grid grid-cols-1 p-5 bg-white  rounded-lg">
    <div >
       <input wire:model="codigo" wire:keyup='lstData' pattern="^([0-9]{1,3}|1000)$" list="options" id="buscadorPokemon" placeholder="Ingresa un codigo" class="border border-gray-300 rounded-md py-2 px-3 text-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 w-full">
       <datalist id="options">
        @if(isset($this->lstData))              
            @foreach ($this->lstData as $dataList)
                <option value="{{$dataList->codigo}}">{{$dataList->nombre}}</option>
            @endforeach
        @endif
       </datalist>
     </div>

    @if(isset($this->$especimen))
    <div class="mx-auto">
       <img src="{{asset('imagenes/'.$especimen->imagen.'.png')}}" alt=""  class="h-48">
    </div>
   
    <div>
            <h3 class="text-2xl leading-6 font-medium text-gray-900 mb-4" id="modal-headline">
            {{$especimen->nombre}}
    
            @foreach ($especimen->tipos as $tipo)
            <span class="text-xs p-1 mr-2 bg-black rounded-xl text-white">
                {{$tipo->nombre}}
            </span>
            @endforeach
        </h3>
        <p class="text-sm leading-6 text-gray-500 mb-2 ">
            {{$especimen->descripcion}} <span class="underline decoration-solid ">No es recomendable usar contra pokemons de tipo </span>
                
                @foreach ($especimen->debilidades as $debilidad)
                    <span class="p-1 bg-black rounded-xl text-white">{{$debilidad->nombre}}</span>
                @endforeach                             
            </p>                       
        </div>  
     @else 
       <p>
            No existe ese pokemon {{$this->codigo}}
       </p>
     @endif
 </div>         
