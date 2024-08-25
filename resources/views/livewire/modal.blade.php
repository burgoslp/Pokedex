<div>
    @if ($estadoModal)
        <x-modal>
            @slot('contenido')
                    <div class="flex items-center">
                        <div class="w-1/2">
                            <img src="{{asset('imagenes/'.$especie->imagen.'.png')}}" class=" inline-block" alt="">
                        </div>
                        <div class="w-1/2">
                            <canvas id="grafica-estadisticas">

                            </canvas>
                        </div>
                    </div>
                    <div class="mb-4 text-center sm:text-left">
                        <h3 class="text-2xl leading-6 font-medium text-gray-900 mb-8">
                            {{$especie->nombre}}

                            @foreach ($especie->tipos as $tipo)
                            <span class="text-xs p-1 mr-2 {{$this->color($tipo->id)}} rounded-xl text-white">
                                {{$tipo->nombre}}
                            </span>
                            @endforeach
                        </h3>
                        <div >
                            <p class="text-sm leading-6 text-gray-500 mb-2 ">
                                {{$especie->descripcion}} <span class="underline decoration-solid ">No es recomendable usar contra pokemons de tipo </span>
                                
                                @foreach ($especie->debilidades as $debilidad)
                                    <span class="p-1 {{$this->color($debilidad->id)}} rounded-xl text-white">{{$debilidad->nombre}}</span>
                                @endforeach                             
                            </p>                                
                        
                        </div>
                    </div>                                   
            
            @endslot

            @slot('botones')
                <div class="bg-gray-50  mr-3 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm  sm:w-auto">
                        <a href="{{route( $especie->validaEspecie($especie->codigo) == 0 ? 'pokemon.show':'evolucion.show',$especie->id)}}"
                            type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Más detalles
                        </a>

                    </span>
                </div>
                <div class="bg-gray-50 mr-3 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm  sm:w-auto">
                        <button type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                            wire:click="cerrarModal">
                            Cerrar
                        </button>
                    </span>
                </div>
            @endslot
        </x-modal>
    @endif
</div>
@push('scripts')
    <script src="{{ asset('js/chart.js') }}"></script>
    <script>
        document.addEventListener('livewire:load', function () {   
            Livewire.on('modalAbierto', () => {
                const ctx = document.getElementById('grafica-estadisticas');            
                new Chart(ctx, {
                                type: 'polarArea',
                                data: {
                                labels:  @this.chartLabels.labels,
                                datasets: [{
                                    label: @this.chartnombre,
                                    data: @this.chartData.data,
                                    borderWidth: 1
                                }]
                                },
                                options: {
                                    elements: {
                                                line: {
                                                    borderWidth: 3
                                                }
                                            }
                                }
                });
                
            });  
        });      
            
    </script>
@endpush