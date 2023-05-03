@extends('layouts.web')

@section('content')

    <div class=" bg-[#E3E9F1] sm:ml-8 lg:ml-12 pb-2 mt-3 2xl:mt-4 2xl:mb-3">
        <h2 class="text-4xl font-bold font-anek">PRODUCTOS ACTIVOS</h2>
        </div>
    <livewire:products>


    <div class=" bg-[#E3E9F1] sm:ml-8 lg:ml-12 pb-2 2xl:pb-3 mt-8">
        <h2 class="text-4xl font-bold font-anek">PRODUCTOS INACTIVOS</h2>
    </div>  
    <livewire:products-desac> 

    @endsection