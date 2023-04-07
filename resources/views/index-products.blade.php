@extends('layouts.web')

@section('content')
<div class="mb-4 bg-[#E3E9F1] px-10 pl-48 pb-8 mb-4 ml-20 pt-2 mt-4">
    <h2 class="text-4xl font-bold mb-2">PRODUCTOS</h2>
</div>
<div class="flex ml-10">
    <a href="/">
        <button class="ml-64 bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            AÑADIR
        </button>
    </a>
</div>
<div class="relative bottom-10 w-80 ml-96 left-80 pl-48">
            <input type="search"  class=" p-2.5 w-80 z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border-l-gray-300 border border-gray-300 focus:ring-gray-300 focus:border-gray-300" placeholder="Buscar">
            <button type="submit" class="absolute top-0 left-96 ml-20 pl-4 p-2.5 bg-gray-50 rounded-r-lg border border-gray-300 hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-300">
                <svg class="w-5 h-5" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>
        </div>
<livewire:products>
    @endsection