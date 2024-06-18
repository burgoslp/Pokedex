@extends('layout.layout')
@section('titulo')
Pokedex - Compara tu pokemon favorito con otros
@endsection
@section('contenido')
   <main class="grid grid-cols-2">
      <div class="grid grid-rows-2  items-start p-4">
         <div class="grid grid-cols-3 p-5 bg-white  rounded-lg">
            <div>
               <img src="{{asset('imagenes/'.$especimen->imagen.'.png')}}" alt="">
            </div>
            <div class="col-span-2">
               <h1 class="text-2xl">
                  {{$especimen->nombre}}
               </h1>
               <p>
                  {{$especimen->descripcion}}
               </p>
               @foreach ($especimen->tipos as $tipo)
                  <span class="p-1 mr-2 bg-black  rounded-xl text-white">
                     {{$tipo->nombre}} 
                  </span>
               @endforeach
            </div>
         </div>


         <div class="grid grid-cols-3 p-5 bg-white rounded-lg">
            <div class="">
               <img src="{{asset('imagenes/beedrill.png')}}" alt="">
            </div>
            <div class="col-span-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, culpa? Tenetur vero adipisci sunt
               nesciunt excepturi doloribus dignissimos sed distinctio, magni nostrum aliquam velit unde voluptatibus
               officia rem commodi natus?
            </div>
         </div>
      </div>
      <div class="p-4 ">
         <canvas id="graficaComp" class="bg-white rounded-lg">
            
         </canvas>
      </div>
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