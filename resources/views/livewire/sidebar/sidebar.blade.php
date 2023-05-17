<div>

    <div class="{{$with_reponsivos}}">
        <div class="fixed z-10 transform duration-75 {{$sidebarOpen}} bg-[#021633] h-full">
            
            <div class="h-10">
                <div class="">
                    <button wire:click="toggleSidebar" class="bg-[#021633] text-white {{$with_reponsivos}} flex justify-end">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="40" viewBox="0 96 960 960" width="48"><path d="{{$icono_double_arrow}}"/></svg>
                          
                    </button>
                </div>
            </div>

            <div class=" text-white">
                <div class="inline-block align-top {{$with_reponsivos}}">
                    <ul class="fixed z-10 py-0 space-y-1 {{$with_reponsivos}} bg-[#021633] h-full">
                        <li>
                            <a href="/" class="relative flex flex-row justify-between items-center h-11 focus:outline-none hover:bg-[#597AAB] focus:bg-[#597AAB] text-white-600 hover:text-white-800 focus:text-white-800 border-l-4 border-transparent hover:border-blue-500 focus:border-blue-500 dark:hover:border-gray-800 pl-1 pr-0 {{ request()->is('/') ? 'bg-[#597AAB]' : '' }} {{ request()->is('crear-products') ? 'bg-[#597AAB]' : '' }}">
                                <span class="hidden {{$smblock}} sm:ml-1 md:ml-6 text-[15px] font-anek font-medium">Productos</span>
                                <svg class="{{$smhidden}}" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="29" viewBox="0 96 960 960" width="29"><path d="M120 1016V726q0-78.85 56-134.425Q232 536 310 536h60V196q0-24.75 17.625-42.375T430 136h100q24.75 0 42.375 17.625T590 196v340h60q78.85 0 134.425 55.575Q840 647.15 840 726v290H120Zm60-60h105V826q0-12.75 9-21.375T315.5 796q12.5 0 21 8.625T345 826v130h105V826q0-12.75 9-21.375T480.5 796q12.5 0 21 8.625T510 826v130h105V826q0-12.75 9-21.375T645.5 796q12.5 0 21 8.625T675 826v130h105V726q0-54.167-37.917-92.083Q704.167 596 650 596H310q-54.167 0-92.083 37.917Q180 671.833 180 726v230Zm350-420V196H430v340h100Z"/></svg>
                            </a>
                        </li>
                        <li>
                        <a href="/vendedores" class="relative flex flex-row justify-between items-center h-11 focus:outline-none hover:bg-[#597AAB] focus:bg-[#597AAB] text-white-600 hover:text-white-800 focus:text-white-800 border-l-4 border-transparent hover:border-blue-500 focus:border-blue-500 dark:hover:border-gray-800 pl-1 pr-0 {{ request()->is('vendedores') ? 'bg-[#597AAB]' : '' }} {{ request()->is('crear-personal') ? 'bg-[#597AAB]' : '' }}">
                                <span class="hidden {{$smblock}} sm:ml-1 md:ml-6 text-[15px] font-anek font-medium">Vendedores</span>
                                <svg class="{{$smhidden}}" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="30" viewBox="0 96 960 960" width="30"><path d="M38 896v-94q0-35 18-63.5t50-42.5q73-32 131.5-46T358 636q62 0 120 14t131 46q32 14 50.5 42.5T678 802v94H38Zm700 0v-94q0-63-32-103.5T622 633q69 8 130 23.5t99 35.5q33 19 52 47t19 63v94H738ZM358 575q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42Zm360-150q0 66-42 108t-108 42q-11 0-24.5-1.5T519 568q24-25 36.5-61.5T568 425q0-45-12.5-79.5T519 282q11-3 24.5-5t24.5-2q66 0 108 42t42 108ZM98 836h520v-34q0-16-9.5-31T585 750q-72-32-121-43t-106-11q-57 0-106.5 11T130 750q-14 6-23 21t-9 31v34Zm260-321q39 0 64.5-25.5T448 425q0-39-25.5-64.5T358 335q-39 0-64.5 25.5T268 425q0 39 25.5 64.5T358 515Zm0 321Zm0-411Z"/></svg>
                            </a>
                        </li>

                        <a href="/pre-factura" class="relative flex flex-row justify-between items-center h-11 focus:outline-none hover:bg-[#597AAB] focus:bg-[#597AAB] text-white-600 hover:text-white-800 focus:text-white-800 border-l-4 border-transparent hover:border-blue-500 focus:border-blue-500 dark:hover:border-gray-800 pl-1 pr-0 {{ request()->is('pre-factura') ? 'bg-[#597AAB]' : '' }} {{ request()->is('pre-factura') ? 'bg-[#597AAB]' : '' }}">
                                <span class="hidden {{$smblock}} sm:ml-1 md:ml-6 text-[15px] font-anek font-medium">Ventas</span>
                                <svg class="{{$smhidden}}" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="30" viewBox="0 96 960 960" width="30"><path d="M38 896v-94q0-35 18-63.5t50-42.5q73-32 131.5-46T358 636q62 0 120 14t131 46q32 14 50.5 42.5T678 802v94H38Zm700 0v-94q0-63-32-103.5T622 633q69 8 130 23.5t99 35.5q33 19 52 47t19 63v94H738ZM358 575q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42Zm360-150q0 66-42 108t-108 42q-11 0-24.5-1.5T519 568q24-25 36.5-61.5T568 425q0-45-12.5-79.5T519 282q11-3 24.5-5t24.5-2q66 0 108 42t42 108ZM98 836h520v-34q0-16-9.5-31T585 750q-72-32-121-43t-106-11q-57 0-106.5 11T130 750q-14 6-23 21t-9 31v34Zm260-321q39 0 64.5-25.5T448 425q0-39-25.5-64.5T358 335q-39 0-64.5 25.5T268 425q0 39 25.5 64.5T358 515Zm0 321Zm0-411Z"/></svg>
                            </a>
                        </li>

                        <!--<li>
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
                        -->

                    </ul>
                </div>
            </div>
            <!-- ./Sidebar -->

        </div>
    </div>

</div>
