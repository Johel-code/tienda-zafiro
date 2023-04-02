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
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
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
    <div>
        <div class="py-12"></div>
        <div class="sm:px6 lg:px-8 ml-64">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
                <table class="table-fixed w-full">
                    <thead class="py-8">
                        <tr class="bg-white text-dark">
                            <th class="px-4 py-2 border-b-2 border-black text-sm">Nombre</th>
                            <th class="px-4 py-2 border-b-2 border-black text-sm">Precio</th>
                            <th class="px-4 py-2 border-b-2 border-black text-sm">Cantidad</th>
                            <th class="px-4 py-2 border-b-2 border-black text-sm">Fecha vencimiento</th>
                            <th class="px-4 py-2 border-b-2 border-black text-sm">Marca</th>
                            <th class="px-4 py-2 border-b-2 border-black text-sm">Categoria</th>
                            <th class="px-4 py-2 border-b-2 border-black text-sm">Estado</th>
                            <th class="px-4 py-2 border-b-2 border-black text-sm">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center py-4">ariel</td>
                            <td class="text-center">4</td>
                            <td class="text-center">50</td>
                            <td class="text-center">24-05-25</td>
                            <td class="text-center">unilever</td>
                            <td class="text-center">detergente</td>
                            <td class="text-center">
                                <label class="relative inline-flex items-center cursor-pointer items-center">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-3 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </td>
                            <td class="text-center"><a href="dashboard"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">ola</td>
                            <td class="text-center">25</td>
                            <td class="text-center">10</td>
                            <td class="text-center">unilever</td>
                            <td class="text-center">12-04-26</td>
                            <td class="text-center">
                                <label class="relative inline-flex items-center cursor-pointer items-center">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-3 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </td>
                            <td class="text-center"><a href="dashboard"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>