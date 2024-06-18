<div>
    @if ($estadoModal)
    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400 " style="transition: opacity 0.5s;">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75" wire:click="cerrarModal"></div>
            </div>
            <!-- Modal Content -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="flex items-center">
                        <div class="w-1/2">
                            <img src="{{asset('imagenes/'.$especie->imagen.'.png')}}" class=" inline-block" alt="">
                        </div>
                        <div class="w-1/2">
                            <canvas id="estadisticaGrafica">

                            </canvas>
                        </div>
                    </div>
                    <div class="mb-4 text-center sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                            {{$especie->nombre}}
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 mb-2">
                                {{$especie->descripcion}}                                
                            </p>
                            @foreach ($especie->tipos as $tipo)
                            <span class="p-1 mr-2 {{$this->color($tipo->id)}} rounded-xl text-white">
                                {{$tipo->nombre}}
                            </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="overflow-auto mb-4">
                        
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Habilidad
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Descripcion
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($especie->habilidades as $habilidad)
                                        <tr>
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                               {{$habilidad->nombre}}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{$habilidad->descripcion}}
                                            </td>
                                        
                                        </tr>
                                    @endforeach                                             
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm leading-6 text-gray-500 mb-2">
                            No es recomendable usar contra pokemons de tipo 
                            @foreach ($especie->debilidades as $debilidad)
                                <span class="p-1 {{$this->color($debilidad->id)}} rounded-xl text-white">{{$debilidad->nombre}}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="flex justify-end p-2">
                    <div class="bg-gray-50  mr-3 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm  sm:w-auto">
                            <a href="{{route( $especie->validaEspecie($especie->codigo) == 0 ? 'pokemon.comparar':'evolucion.comparar',$especie->id)}}"
                                type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Comparar
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
                </div>

            </div>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('estadisticaGrafica');
            
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
            
    </script>
    @endif

</div>