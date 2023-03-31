<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <title>Tienda Zafiro</title>
    </head>
    <body class="bg-[#E3E9F1]">
        <!-- Header -->
        <div class="bg-white shadow-sm fixed w-full flex items-center justify-between h-14">
            <div class="flex items-center justify-start w-14 md:w-64 h-14 border-none">
                <a href="">
                    <img class="h-9 mx-auto px-5 md:object-cover md:h-full md:w-48 hidden md:block" src="{{ asset('logo/logo-fondo-blanco.png') }}" />
                </a>
                <a href="">
                    <img class="md:hidden px-3 mx-auto" src="" />
                </a>
            </div>
            <div class="flex justify-between items-center h-14 header-right">
                <div class="rounded flex items-center w-full max-w-xl mr-4 shadow-sm"></div>
                <ul class="flex items-center">
                    <li>
                        <div class="block w-px h-6 mx-3 bg-gray-400"></div>
                    </li>
                    <li>
                        <a href="#" class="flex items-center mr-4 hover:text-blue-100">
                            <span class="inline-flex mr-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            </span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./Header -->
    
        <!-- Sidebar -->
        <div class="fixed flex flex-col top-14 left-0 w-full md:w-64 bg-[#021633] h-full text-white border-none">
            <div class="overflow-y-auto flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li>
                        <a href="" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#597AAB] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="ml-6 text-[15px] font-anek font-medium tracking-wide truncate">Productos</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#597AAB] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="ml-6 text-[15px] font-anek font-medium tracking-wide truncate">Ventas</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#597AAB] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="ml-6 text-[15px] font-anek font-medium tracking-wide truncate">Reportes</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#597AAB] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="ml-6 text-[15px] font-anek font-medium tracking-wide truncate">Estadísticas</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#597AAB] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="ml-6 text-[15px] font-anek font-medium tracking-wide truncate">Proveedores</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#597AAB] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="ml-6 text-[15px] font-anek font-medium tracking-wide truncate">Usuarios</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!-- ./Sidebar -->
    </body>
</html>