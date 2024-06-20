@extends('layout.layout')
@section('titulo')
Pokedex - Compara tu pokemon favorito con otros
@endsection
@section('contenido')
   <main class="grid grid-cols-1 md:grid-cols-2 p-4 gap-4">
            <div class="grid grid-cols-1 p-5 bg-white  rounded-lg">
               <div class="mx-auto">
                  <img src="{{asset('imagenes/'.$especimen->imagen.'.png')}}" alt=""  class="h-48">
               </div>
               <div >
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
            </div>

          

         @livewire('pokemon-show')  
   </main>
@endsection

@push('scripts')
   <script>
         const ctx = document.getElementById('graficaComp');
         
         new Chart(ctx, {
         type: 'radar',
         data: {
            labels: ['Ätaque', 'Defensa', 'Velocidad', ],
            datasets: [{
                           label: 'Beedrill',
                           data: [5, 5, 8],
                           fill: true,
                           backgroundColor: 'rgba(255, 99, 132, 0.2)',
                           borderColor: 'rgb(255, 99, 132)',
                           pointBackgroundColor: 'rgb(255, 99, 132)',
                           pointBorderColor: '#fff',
                           pointHoverBackgroundColor: '#fff',
                           pointHoverBorderColor: 'rgb(255, 99, 132)'
                        }, {
                           label: 'bulbasour',
                           data: [5, 4, 6],
                           fill: true,
                           backgroundColor: 'rgba(54, 162, 235, 0.2)',
                           borderColor: 'rgb(54, 162, 235)',
                           pointBackgroundColor: 'rgb(54, 162, 235)',
                           pointBorderColor: '#fff',
                           pointHoverBackgroundColor: '#fff',
                           pointHoverBorderColor: 'rgb(54, 162, 235)'
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
@endpush