<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tienda Zafiro</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-[#E3E9F1]">
    <header class="">
        <nav class="bg-white h-14">
            {{-- <a href="{{ route('home') }}">
            <img src="{{ asset('logo/logo-fondo-blanco.png') }}" class="h-8 mx-auto">
            </a> --}}
            <x-top-bar />
        </nav>
    </header>
    <main class="">
        <div class="flex flex-row">
            @livewire('sidebar.sidebar')
            <div class="w-auto">
                @yield('content')
            </div>
        </div>
    </main>
    

    @livewireScripts
</body>

</html>