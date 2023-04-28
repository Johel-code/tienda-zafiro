<!-- Sidebar -->
<div class=" text-white">
    <div class="inline-block align-top w-12 sm:w-28 md:w-48 lg:w-64">
        <ul class="fixed z-10 py-2 space-y-1 w-12 sm:w-28 md:w-48 lg:w-64 bg-[#021633] h-full">
            <li>
                <a href="/" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#597AAB] focus:bg-[#597AAB] text-white-600 hover:text-white-800 focus:text-white-800 border-l-4 border-transparent hover:border-blue-500 focus:border-blue-500 dark:hover:border-gray-800 pr-6 {{ request()->is('/') ? 'bg-[#597AAB]' : '' }}">
                    <span class="ml-6 text-[15px] font-anek font-medium tracking-wide truncate">Productos</span>
                </a>
            </li>
            <li>
                <a href="/vendedores" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#597AAB] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6 {{ request()->is('/crear-personal') ? 'bg-[#597AAB]' : '' }}">
                    <span class="ml-6 text-[15px] font-anek font-medium tracking-wide truncate">Vendedores</span>
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
