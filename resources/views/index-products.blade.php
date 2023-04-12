@extends('layouts.web')

@section('content')
<div class=" bg-[#E3E9F1] px-10 pl-48 pb-8 mb-4 ml-20 pt-2 mt-4">
    <h2 class="text-4xl font-bold mb-2">PRODUCTOS</h2>
</div>
<div class="flex lg:ml-72 md:ml-72 sm:ml-8">
    <a href="/crear-products">
        <button class=" bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            AÑADIR
        </button>
    </a>
</div>
<livewire:products>
    @endsection