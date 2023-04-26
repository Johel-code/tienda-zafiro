@extends('layouts.web')

@section('content')
    <div class=" bg-[#E3E9F1] sm:ml-8 lg:ml-12 pb-2 mt-3 2xl:mt-4 2xl:mb-3">
        <h2 class="text-4xl font-bold font-anek">Vendedores</h2>
    </div>

    <livewire:vendedores>

    {{----------------------------Tabla vendedores deshabilidados----------------------}}
    <div class=" bg-[#E3E9F1] sm:ml-8 lg:ml-12 pb-2 2xl:pb-5 pt-4">
        <h2 class="text-2xl font-bold font-anek">Vendedores Inactivos</h2>
    </div>
    <livewire:vendedores-inac>
@endsection
