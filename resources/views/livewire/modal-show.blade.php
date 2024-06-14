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
                            <canvas id="myChart">

                            </canvas>
                        </div>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                            {{$especie->nombre}}
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 mb-2">{{$especie->descripcion}}</p>
                            @foreach ($especie->tipos as $tipo)
                            <span class="p-1 mr-2 {{$this->color($tipo->id)}} rounded-xl text-white">
                                {{$tipo->nombre}} </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
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
    <script>
        
        const ctx = document.getElementById('myChart');
        
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