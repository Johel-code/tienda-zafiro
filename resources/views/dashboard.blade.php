<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div> 
<head>
  <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>

<body>
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Guardar
  </button>
  <button class="bg-[#597AAB] hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
    Cancelar
  </button>
</body>
</div>


    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
