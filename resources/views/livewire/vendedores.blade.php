<div>
    
    <div class="lg:ml-12 md:ml-8 sm:ml-8">
        <a href="/crear-personal">
            <button class=" bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                AÑADIR
            </button>
        </a>
    </div>    

    <div class="py-1.5 2xl:py-2"></div>
 {{----------------------------Tabla vendedores habilidados--------------------------------}}
    <div class="sm:px-8 lg:px-12 h-56 2xl:h-72">
        <div class="bg-white overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg pb-2 shrink">
            <table class="md:table-fixed w-full font-anek">
                <colgroup>
                    <col class="md:w-1/4">
                    <col class="md:w-2/5 2xl:w-1/3">
                    <col class="md:w-2/5 2xl:w-1/3">
                    <col class="md:w-1/3 2xl:w-1/6">
                    <col class="md:w-2/5 2xl:w-1/3">
                    <col class="md:w-2/5 2xl:w-1/3">
                    <col class="md:w-1/3 2xl:w-1/6">
                    <col class="md:w-1/3 2xl:w-2/5">
                    <col class="md:w-1/4 2xl:w-1/6">
                </colgroup>
                <thead class="h-12">
                    <tr class="bg-white text-dark">   
                        <th class="2xl:py-4 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Nro</th>   
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Nombre</th>
                        <th class="2xl:text-lg text-center text-ellipsis border-b-2 border-black">Apellido</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">CI</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Dirección</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Correo</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Celular</th>
                        <th class="2xl:text-lg text-center text-ellipsis md:overflow-hidden border-b-2 border-black whitespace-nowrap">Fecha de Nacimiento</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Estado</th>  
                    </tr>
                </thead>
                <tbody>
                    {{--@foreach($users as $user)--}}

                    <tr class="hover:bg-blue-200">
                        <td class="px-3 py-1 2xl:py-3 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">100{{--$user->Nro--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400 whitespace-nowrap">jfbttidn mfhfutic{{--$user->name--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400 whitespace-nowrap">sjsjnabshr hrfrfif{{--$user->last_name--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">45454758{{--$user->ci--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400 whitespace-nowrap">fff fffffffff ff fff fff ffffff{{--$user->direccion--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">sdfsdfdfsfsdsdfssfdd{{--$user->email--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">54896555{{--$user->celular--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">47/58/2035{{--@if($user->fecha_nacimiento) {{date('d/m/Y', strtotime($user->fecha_nacimiento))}} @else  @endif--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center border-b border-gray-400">

                            <livewire:vendedor.toggle-vendedor1/>{{--toggle de vendedores activos--}}

                        </td>
                    </tr>
                   
                   
                 {{-- @endforeach--}}
                    
                </tbody>
            </table>
            {{-- $users->links() --}}
           
        </div>
    </div>

    {{----------------------------Tabla vendedores deshabilidados----------------------}}
    <div class=" bg-[#E3E9F1] sm:ml-8 lg:ml-12 pb-2 2xl:pb-5 pt-2">
        <h2 class="text-4xl font-bold font-anek">Usuarios Inactivos</h2>
    </div>

    <div class="sm:px-8 lg:px-12 h-56 2xl:h-72">
        <div class="bg-white overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg pb-2 shrink">
            <table class="md:table-fixed w-full font-anek">
                <colgroup>
                    <col class="md:w-1/4">
                    <col class="md:w-2/5 2xl:w-1/3">
                    <col class="md:w-2/5 2xl:w-1/3">
                    <col class="md:w-1/3 2xl:w-1/6">
                    <col class="md:w-2/5 2xl:w-1/3">
                    <col class="md:w-2/5 2xl:w-1/3">
                    <col class="md:w-1/3 2xl:w-1/6">
                    <col class="md:w-1/3 2xl:w-2/5">
                    <col class="md:w-1/4 2xl:w-1/6">
                </colgroup>
                <thead class="h-12">
                    <tr class="bg-white text-dark">   
                        <th class="2xl:py-4 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Nro</th>   
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Nombre</th>
                        <th class="2xl:text-lg text-center text-ellipsis border-b-2 border-black">Apellido</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">CI</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Dirección</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Correo</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Celular</th>
                        <th class="2xl:text-lg text-center text-ellipsis md:overflow-hidden border-b-2 border-black whitespace-nowrap">Fecha de Nacimiento</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Estado</th>  
                    </tr>
                </thead>
                <tbody>
                    {{--@foreach($users as $user)--}}

                    <tr class="hover:bg-blue-200">
                        <td class="px-3 py-1 2xl:py-3 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">100{{--$user->Nro--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400 whitespace-nowrap">jfbttidn mfhfutic{{--$user->name--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400 whitespace-nowrap">sjsjnabshr hrfrfif{{--$user->last_name--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">45454758{{--$user->ci--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400 whitespace-nowrap">fff fffffffff ff fff fff ffffff{{--$user->direccion--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">sdfsdfdfsfsdsdfssfdd{{--$user->email--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">54896555{{--$user->celular--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">47/58/2035{{--@if($user->fecha_nacimiento) {{date('d/m/Y', strtotime($user->fecha_nacimiento))}} @else  @endif--}}</th>
                        <td class="pr-3 py-1 2xl:text-lg text-center border-b border-gray-400">

                            <livewire:vendedor.toggle-vendedor2/>{{--toggle de vendedores inactivos--}}

                        </td>
                    </tr>
                    
                 {{-- @endforeach--}}
                    
                </tbody>
            </table>
            {{-- $users->links() --}}
           
        </div>
    </div>

</div>