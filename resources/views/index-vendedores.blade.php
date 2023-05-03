@extends('layouts.web')

@section('content')
    

    <div class=" bg-[#E3E9F1] sm:ml-8 lg:ml-12 pb-2 2xl:pb-5 pt-4">
        <h2 class="text-4xl font-bold font-anek">VENDEDORES ACTIVOS</h2>
    </div>

    <livewire:vendedores>

    {{----------------------------Tabla vendedores deshabilidados----------------------}}
    <div class=" bg-[#E3E9F1] sm:ml-8 lg:ml-12 pb-2 2xl:pb-5 pt-4">
        <h2 class="text-4xl font-bold font-anek">VENDEDORES INACTIVOS</h2>
    </div>
    <livewire:vendedores-inac>
@endsection
