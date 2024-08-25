@extends('layout.layout')
@section('titulo')
Pokedex - encuentra tu pokemon
@endsection
@section('contenido')
    <main class="grid grid-cols-1 mb-8">
        <section class="p-3 col-span-2">
            @livewire('buscador')
        </section>
    </main>
@endsection

@section('modales')
    @livewire('modal')
@endsection


